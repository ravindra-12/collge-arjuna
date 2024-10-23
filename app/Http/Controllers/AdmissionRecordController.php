<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmissionRecord;
use App\Models\CollegeInfo;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Log;

class AdmissionRecordController extends Controller
{
    // Show import form
    public function showImportForm()
    {
        return view('admission_records.import');
    }

    
    public function showCutoff($id, $year, Request $request)
{
    $categoryId = $request->input('category');
    $seatpoolId = $request->input('seatpool');

    // Fetch distinct values for categories and seat pools for the selected college
    $categories = AdmissionRecord::where('college_id', $id)
                                  ->select('student_category')
                                  ->distinct()
                                  ->get();

    $seatpools = AdmissionRecord::where('college_id', $id)
                                 ->select('seat_pool')
                                 ->distinct()
                                 ->get();

    // If category and seatpool are selected, fetch the cutoffs
    $cutoffs = collect();
    if ($categoryId && $seatpoolId) {
        $cutoffs = AdmissionRecord::where('college_id', $id)
                                   ->where('year', $year)
                                   ->where('student_category', $categoryId)
                                   ->where('seat_pool', $seatpoolId)
                                   ->get()
                                   ->groupBy('round');
    }

    return view('admission_records.cutoff', compact('cutoffs', 'categories', 'seatpools', 'year', 'id', 'categoryId', 'seatpoolId'));
}



    // Import Excel file data into the database
    public function import(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:xlsx,xls',
    ]);

    $file = $request->file('file');

    if (!$file) {
        dd('No file uploaded.');
    }

    try {
        $spreadsheet = IOFactory::load($file->getPathname());
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
        
        Log::info('Excel Data:', $sheetData);

    } catch (\Exception $e) {
        dd('Error loading Excel file: ' . $e->getMessage());
    }

    foreach ($sheetData as $index => $row) {
        if ($index == 1 || $row['A'] == null) {
            continue;
        }

        $collegeId = null;
        if (is_numeric($row['H'])) {
            $collegeId = $row['H'];
            Log::info('Numeric College ID Found: ' . $collegeId);
        } else {
            $college = CollegeInfo::where('title', 'LIKE', '%' . $row['H'] . '%')->first();

            if ($college) {
                $collegeId = $college->id;
                Log::info('College found by name: ' . $row['H'] . ' with ID: ' . $collegeId);
            } else {
                Log::warning('College not found for name: ' . $row['H']);
                continue;
            }
        }

        if (!$collegeId) {
            Log::warning('Skipping row due to missing college ID: ' . json_encode($row));
            continue;
        }

        try {
            AdmissionRecord::create([
                'year' => $row['A'],
                'round' => $row['B'],
                'branch' => $row['C'],
                'opening' => $row['D'],
                'closing' => $row['E'],
                'student_category' => $row['F'],
                'seat_pool' => $row['G'],
                'college_id' => $collegeId,
                'quota' => $row['I'], // Add the quota field
            ]);

        } catch (\Exception $e) {
            Log::error('Error importing record: ' . $e->getMessage() . ' for row: ' . json_encode($row));
        }
    }

    return redirect('alladmissioncutoff')->with('success', 'Admission records imported successfully.');
}


    // Show all records with filters
    public function index(Request $request)
    {
        $year = $request->input('year');
        $category = $request->input('category');
        $seatpool = $request->input('seatpool');

        $query = AdmissionRecord::query();

        if ($year) {
            $query->where('year', $year);
        }

        if ($category) {
            $query->where('student_category', $category);
        }

        if ($seatpool) {
            $query->where('seat_pool', $seatpool);
        }

        $records = $query->get()->groupBy('round');

        // Fetch distinct years, categories, and seat pools for the dropdowns
        $years = AdmissionRecord::select('year')->distinct()->get();
        $categories = AdmissionRecord::select('student_category')->distinct()->get();
        $seatpools = AdmissionRecord::select('seat_pool')->distinct()->get();

        return view('admission_records.index', compact('records', 'years', 'categories', 'seatpools'));
    }

    // public function GetallAdmissioncutoff(){
    //     $admissioncutoffs = AdmissionRecord::all();
    // dd($admissioncutoffs);
    //     return view('cutoffs.admissioncutoff', compact('admissioncutoffs'));
       
    // }
    public function GetallAdmissioncutoff() {
        // Fetch colleges with their associated cutoffs, ordered by round
        $colleges = CollegeInfo::with(['cutoffs' => function ($query) {
            $query->orderBy('round');
        }])->get();

        // dd($colleges);
    
        return view('cutoffs.admissioncutoff', compact('colleges'));
    }
   
     // Method to delete a single cutoff record
    public function deleteCutoff($collegeId, $cutoffId)
    {
        $cutoff = AdmissionRecord::where('college_id', $collegeId)->findOrFail($cutoffId);
        $cutoff->delete();

        return redirect()->back()->with('success', 'Cutoff deleted successfully.');
    }

    // Method to delete all cutoff records for a specific college
    public function deleteAllCutoffs($collegeId)
    {
        AdmissionRecord::where('college_id', $collegeId)->delete();

        return redirect()->back()->with('success', 'All cutoffs for this college have been deleted successfully.');
    }
    
    // Method to show the edit form for a single cutoff
    public function editCutoff($id)
    {
        // Find the cutoff by ID
        $cutoff = AdmissionRecord::findOrFail($id);

        // Return the edit view with the cutoff data
        return view('cutoffs.edit', compact('cutoff'));
    }

    // Method to update a single cutoff
    public function updateCutoff(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'year' => 'required|integer',
            'round' => 'required|integer',
            'branch' => 'required|string|max:255',
            'opening' => 'required|integer',
            'closing' => 'required|integer',
            'student_category' => 'required|string|max:255',
            'seat_pool' => 'required|string|max:255',
        ]);

        // Find the cutoff by ID
        $cutoff = AdmissionRecord::findOrFail($id);

        // Update the cutoff with new data
        $cutoff->update($request->all());

        // Redirect back with a success message
        return redirect('alladmissioncutoff')->with('success', 'Cutoff updated successfully.');
    }

}

