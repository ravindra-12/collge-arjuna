<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CollegeInfo;
use App\Models\AdmissionRecord;
use App\Models\Post;
use App\Models\Course;
use App\Models\Branch;
use App\Models\InternationalRanking;
use App\Models\Admissionmode;
class CollegeController extends Controller
{
    public function show($id)
    {
        $college = CollegeInfo::with('connectivity',  'fees', 'hostelfee', 'feewavers', 'placement', 'branchplacement', 'medianpackegeoffer', 'averagepackagedoffer', 'toprecruite', 'pastrecruit',  'nearbycollege', 'exploremorecollege', 'cutoff', 'similarcollege'  )->findOrFail($id);

        //   dd($college);

        return view('show', compact('college'));
    }


    // 


    public function collegeweb($id)
{
    $college = CollegeInfo::with(
        'connectivity', 
        'fees', 
        'hostelfee', 
        'feewavers', 
        'placement', 
        'branchplacement', 
        'medianpackegeoffer', 
        'averagepackagedoffer', 
        'toprecruite', 
        'pastrecruit', 
        'nearbycollege', 
        'exploremorecollege', 
        'cutoff', 
        'similarcollege',
        'admissionmode',

    )->findOrFail($id);

    $json = json_encode($college, JSON_PRETTY_PRINT);
    // dd($json);
//   dd($college);
$nearbyColleges = $college->nearbycollege;
$exploreMoreColleges = $college->exploremorecollege;
$similarcollege = $college->similarcollege;
//   dd($similarcollege);

    $cutoffYears = AdmissionRecord::where('college_id', $id)
        ->select('year')
        ->distinct()
        ->orderBy('year', 'desc')
        ->get();
      
        $applicationsOpeningSoonPosts = Post::getApplicationsOpeningSoonPosts();
    
        //   dd($applicationsOpeningSoonPosts);
        $courses = Course::where('college_info_id', $id)->get();
      
    return view('college', compact('college', 'cutoffYears', 'exploreMoreColleges', 'nearbyColleges', 'similarcollege', 'courses', 'applicationsOpeningSoonPosts'));
}


// 

public function searchColleges(Request $request)
{
    // Validate the query parameter
    $request->validate([
        'query' => 'required|string',
    ]);

    // Fetch the college data based on the search query
    $query = $request->input('query');
    $college = CollegeInfo::where('title', 'LIKE', '%' . $query . '%')->first();

    if ($college) {
        // Redirect to the details page of the found college
        return redirect()->route('collegeweb', ['id' => $college->id]); // Adjust the route name as needed
    } else {
        // Optionally handle the case when no college is found
        return redirect()->back()->with('error', 'No college found.');
    }
}


public function fetchSuggestions(Request $request)
{
    $query = $request->get('query');
    $suggestions = CollegeInfo::where('title', 'LIKE', '%' . $query . '%')->take(5)->get(['id', 'title']); // Fetch only the title and id

    return response()->json($suggestions); // Return JSON response
}

    public function search(Request $request)
{
    $query = $request->input('query');

    // Find colleges that match the query
    $college = CollegeInfo::where('title', 'LIKE', "%{$query}%")
                ->orWhere('institute_name', 'LIKE', "%{$query}%")
                ->orWhere('description', 'LIKE', "%{$query}%")
                ->first();

    if ($college) {
        // Redirect to the college section with the matching college ID
        return redirect()->route('collegeweb', ['id' => $college->id]);
    } else {
        // Optionally, you can redirect back with an error message or a flash message
        return redirect()->back()->with('error', 'No colleges found matching your search.');
    }
}




    // public function import(Request $request)
    // {
    //     $request->validate([
    //         'file' => 'required|mimes:xlsx,xls,csv',
    //     ]);

    //     $file = $request->file('file')->getRealPath();
    //     $spreadsheet = IOFactory::load($file);
    //     $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

    //     foreach ($sheetData as $row) {
    //         PastRecruiter::create([
    //             'college_info_id' => $row['A'], // Adjust the column as per your Excel structure
    //             'title' => $row['B'],           // Adjust the column as per your Excel structure
    //         ]);
    //     }

    //     return redirect()->back()->with('success', 'Data imported successfully');
    // }

public function GetCollegeInfo(){

    $college = CollegeInfo::all();
    $data = json_encode($college, JSON_PRETTY_PRINT);
    // dd($data);

    return view('allcolleges', compact('college'));
}

public function CollegeInfoDelete($id){

    // $college = CollegeInfo::findOrFail($id);
    // $college->delete();
    $college = CollegeInfo::findOrFail($id);
    $college->delete();

    return redirect()->back()->with('success', 'College info deleted successfully.');

}

public function dashboardlayout(){
    $collegeCount = CollegeInfo::count();
    // dd($collegeCount);
    $allBlogCount = Post::count();

   

    return view('dashboardlayout', [
      'collegeCount' => $collegeCount,
    'allBlogCount' => $allBlogCount
    ]);
}

public function GetallCollege()
{
    $college = CollegeInfo::with('courses.branches')->get(); // Eager load courses and branches

    $cities = $college->map(function ($college) {
        return last(explode(' ', $college->title));
    })->unique(); 

    $states = $college->map(function ($college) {
        return $college->state; 
    })->unique()->filter(); 

    $types = $college->pluck('institute_type')->unique()->filter();
    $courses = Course::pluck('course_name')->unique();
    $branches = Branch::pluck('branch_name')->unique(); // Fetch all unique branches
// dd( $branches);
    return view('colleges', compact('college', 'cities', 'states', 'types', 'courses', 'branches'));
}

public function filterBranches(Request $request, $id)
{
    // Get the selected course ID from the request
    $courseId = $request->input('course_id');
    
    // Get branches that belong to the selected course
    $filteredBranches = Branch::where('course_id', $courseId)->get();

    // Check if the request is an AJAX request
    if ($request->ajax()) {
        return response()->json(['filteredBranches' => $filteredBranches]);
    }

    $college = CollegeInfo::with(
        'connectivity', 
        'fees', 
        'hostelfee', 
        'feewavers', 
        'placement', 
        'branchplacement', 
        'medianpackegeoffer', 
        'averagepackagedoffer', 
        'toprecruite', 
        'pastrecruit', 
        'nearbycollege', 
        'exploremorecollege', 
        'cutoff', 
        'similarcollege'
    )->findOrFail($id);

    $json = json_encode($college, JSON_PRETTY_PRINT);
    // dd($json);
//   dd($college);
$nearbyColleges = $college->nearbycollege;
$exploreMoreColleges = $college->exploremorecollege;
$similarcollege = $college->similarcollege;
//   dd($similarcollege);

    $cutoffYears = AdmissionRecord::where('college_id', $id)
        ->select('year')
        ->distinct()
        ->orderBy('year', 'desc')
        ->get();
      
    
        //   dd($cutoffYears);
        $courses = Course::where('college_info_id', $id)->get();
    // If it's a regular request, return the view with filtered branches
    return view('college', compact('filteredBranches', 'college', 'cutoffYears', 'exploreMoreColleges', 'nearbyColleges', 'similarcollege', 'courses'));
}

}
