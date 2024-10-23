<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CollegeInfo;
use App\Models\Branch;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Add a new course
    // public function create($collegeId)
    // {
    //     $college = CollegeInfo::findOrFail($collegeId);
    //     return view('college.add_courses', compact('college'));
    // }
    

    // public function addCourse(Request $request)
    // {
    //     // Validate the incoming request data
    //     $request->validate([
    //         'college_id' => 'required|exists:colleges,id', // Validate that college_id exists in the colleges table
    //         'course_name' => 'required|string|max:255',
    //         'course_description' => 'required|string',
    //     ]);
    
        
    //     $course = new Course();
    //     $course->name = $request->course_name;
    //     $course->description = $request->course_description;
    
    
    //     $college = College::find($request->college_id);
    //     $college->courses()->save($course); // Assuming a `courses()` relationship is defined in the College model
    
      
    //     return redirect()->back()->with('success', 'Course added successfully!');
    // }

    public function addCourse(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'college_info_id' => 'required|exists:college_infos,id',
        'course_name' => 'required|string|max:255',
        'duration' => 'required|integer|min:1',
        'branches' => 'required|array',
        'branches.*' => 'string|max:255', // Each branch name must be a string
    ]);

    // Create a new Course instance
    $course = new Course();
    $course->college_info_id = $request->college_info_id;
    $course->course_name = $request->course_name;
    $course->duration = $request->duration;

    // Save the course
    $course->save();

    // Save the branches associated with the course
    foreach ($request->branches as $branchName) {
        $course->branches()->create(['branch_name' => $branchName]);
    }

    // Redirect or return a response indicating success
    return redirect()->back()->with('success', 'Course and branches added successfully!');
}


    // Fetch all courses for a college
    public function getCourses($collegeId)
    {
        $college = CollegeInfo::with('courses.branches')->findOrFail($collegeId);
        return view('college.courses', compact('college'));
    }
}
