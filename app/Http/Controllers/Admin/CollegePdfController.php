<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CollegePdf;

class CollegePdfController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'college_info_id' => 'required|exists:college_infos,id',
            'pdf' => 'required|mimes:pdf|max:10000' // Max file size of 10MB
        ]);

        // Store the PDF in the storage directory
        $path = $request->file('pdf')->store('public/seatmatrix_pdfs');

        // Save the PDF path and associated college
        CollegePdf::create([
            'college_info_id' => $request->college_info_id,
            'pdf_path' => $path
        ]);

        return redirect()->back()->with('success', 'Seat matrix PDF uploaded successfully.');
    }
}