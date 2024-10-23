<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



use App\Models\CollegeInfo;
use App\Models\TopRecruiter;
use App\Models\PastRecruiter;
use App\Models\SimilarCollege;
use App\Models\NearbyCollege;
use App\Models\MedianPackageOffered;
use App\Models\Fee;
use App\Models\HostelFee;
use App\Models\FeeWavers;
use App\Models\ExploreMoreCollege;
use App\Models\Connectivity;
use App\Models\BranchPlacement;
use App\Models\AveragePackegeOfferd;
use App\Models\InternationalRanking;
use App\Models\Admissionmode;

class CollegeDataController extends Controller
{


public function TopRecruiterStore(Request $request)
{
    $validatedData = $request->validate([
        'toprecruiter.*.college_info_id' => 'required|exists:college_infos,id',
        'toprecruiter.*.title' => 'required|string|max:255',
    ]);

    foreach ($validatedData['toprecruiter'] as $data) {
        TopRecruiter::create($data);
    }

    return redirect()->back()->with('success', 'Top Recruiters added successfully!');
}

public function PastRecruiterStore(Request $request)
{
    $validatedData = $request->validate([
        'pastrecruiter.*.title' => 'required|string|max:255',
        'pastrecruiter.*.college_info_id' => 'required|exists:college_infos,id',
    ]);

    foreach ($validatedData['pastrecruiter'] as $data) {
        PastRecruiter::create($data);
    }

    return redirect()->back()->with('success', 'Past Recruiters added successfully!');
}

public function SimilarCollegeStore(Request $request)
{
 
    $validatedData = $request->validate([
        'similarcolleges.*.college_info_id' => 'required|exists:college_infos,id',
        'similarcolleges.*.title' => 'required|string|max:255',
        'similarcolleges.*.image' => 'required|image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048',
        'similarcolleges.*.description' => 'required|string',
        // 'similarcolleges.*.link' => 'required|url',
    ]);

    // Process each similar college entry
    foreach ($validatedData['similarcolleges'] as $index => $data) {
        if ($request->hasFile("similarcolleges.$index.image")) {
            $image = $request->file("similarcolleges.$index.image");
            $path = $image->store('images', 'public');
            $data['image'] = Storage::url($path);
        }

        SimilarCollege::create($data);
    }

    return redirect()->back()->with('success', 'Similar Colleges added successfully!');
}

//     public function NearbyCollegeStore(Request $request)
// {
//     $validatedData = $request->validate([
//         'nearbycolleges.*.college_info_id' => 'required|exists:college_infos,id',
//         'nearbycolleges.*.title' => 'required|string|max:255',
//         'nearbycolleges.*.image' => 'required|string|max:255',
//         'nearbycolleges.*.description' => 'required|string',
//     ]);

    

   
//     foreach ($validatedData['nearbycolleges'] as $data) {
//         NearbyCollege::create($data);
//     }

//     return redirect()->back()->with('success', 'Nearby Colleges added successfully!');
// }


public function NearbyCollegeStore(Request $request)
{
    // Validate the request
    $validatedData = $request->validate([
        'nearbycolleges.*.college_info_id' => 'required|exists:college_infos,id',
        'nearbycolleges.*.title' => 'required|string|max:255',
        'nearbycolleges.*.image' => 'required|image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048',
        'nearbycolleges.*.description' => 'required|string',
    ]);

    // Process each nearby college entry
    foreach ($validatedData['nearbycolleges'] as $index => $data) {
        // Handle image upload
        if ($request->hasFile("nearbycolleges.$index.image")) {
            $image = $request->file("nearbycolleges.$index.image");
            $path = $image->store('images', 'public');
            $data['image'] = Storage::url($path);
        }

        // Create a new NearbyCollege record with the validated data
        NearbyCollege::create($data);
    }

    return redirect()->back()->with('success', 'Nearby Colleges added successfully!');
}



public function storeMedianPackage(Request $request)
    {
        $validatedData = $request->validate([
            'medianpackages.*.college_info_id' => 'required|exists:college_infos,id',
            'medianpackages.*.branch' => 'required|string|max:255',
            'medianpackages.*.ctc' => 'required|string|max:255',
        ]);

        // Insert data into the database
        foreach ($validatedData['medianpackages'] as $data) {
            MedianPackageOffered::create($data);
        }

        return redirect()->back()->with('success', 'Median Package Offered data added successfully!');
    }

    public function storeFee(Request $request)
    {
        $validatedData = $request->validate([
            'fees.*.college_info_id' => 'required|exists:college_infos,id',
            'fees.*.type' => 'required|string|max:255',
            'fees.*.amount' => 'required|string|max:255',
        ]);

        // Insert data into the database
        foreach ($validatedData['fees'] as $data) {
            Fee::create($data);
        }

        return redirect()->back()->with('success', 'Fee data added successfully!');
    }

    public function storeHostelFee(Request $request)
    {
        $validatedData = $request->validate([
            'hostel_fees.*.college_info_id' => 'required|exists:college_infos,id',
            'hostel_fees.*.type' => 'required|string|max:255',
            'hostel_fees.*.amount' => 'required|string|max:255',
        ]);

        // Insert data into the database
        foreach ($validatedData['hostel_fees'] as $data) {
            HostelFee::create($data);
        }

        return redirect()->back()->with('success', 'Hostel fee data added successfully!');
    }

    public function storeFeeWaver(Request $request)
    {
        $validatedData = $request->validate([
            'fee_wavers.*.college_info_id' => 'required|exists:college_infos,id',
            'fee_wavers.*.title' => 'required|string|max:255',
        ]);

        // Insert data into the database
        foreach ($validatedData['fee_wavers'] as $data) {
            FeeWavers::create($data);
        }

        return redirect()->back()->with('success', 'Fee wavers data added successfully!');
    }


    public function storeadmissionmode(Request $request)
    {
        $validatedData = $request->validate([
            'fee_wavers.*.college_info_id' => 'required|exists:college_infos,id',
            'fee_wavers.*.admissionmode' => 'required|string|max:255',
        ]);

        // dd( $validatedData);
        // Insert data into the database
        foreach ($validatedData['fee_wavers'] as $data) {
            Admissionmode::create($data);
        }

        return redirect()->back()->with('success', 'Admissionmode added successfully!');
    }

    // public function storeExploreMoreCollege(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'explore_more_colleges.*.college_info_id' => 'required|exists:college_infos,id',
    //         'explore_more_colleges.*.title' => 'required|string|max:255',
    //         'explore_more_colleges.*.link' => 'required|url|max:255',
    //         'explore_more_colleges.*.image' => 'required|string|max:255',
    //     ]);

      
    //     foreach ($validatedData['explore_more_colleges'] as $data) {
    //         ExploreMoreCollege::create($data);
    //     }

    //     return redirect()->back()->with('success', 'Explore more colleges data added successfully!');
    // }


    public function storeExploreMoreCollege(Request $request)
{
    // Validate the request
    $validatedData = $request->validate([
        'explore_more_colleges.*.college_info_id' => 'required|exists:college_infos,id',
        'explore_more_colleges.*.title' => 'required|string|max:255',
        // 'explore_more_colleges.*.link' => 'required|url|max:255',
        'explore_more_colleges.*.image' => 'required|image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048',
    ]);

    // Process each explore more college entry
    foreach ($validatedData['explore_more_colleges'] as $index => $data) {
        // Handle image upload
        if ($request->hasFile("explore_more_colleges.$index.image")) {
            $image = $request->file("explore_more_colleges.$index.image");
            $path = $image->store('images', 'public');
            $data['image'] = Storage::url($path);
        }

        // Insert data into the database
        ExploreMoreCollege::create($data);
    }

    return redirect()->back()->with('success', 'Explore more colleges data added successfully!');
}


    public function storeConnectivity(Request $request)
    {
        $validatedData = $request->validate([
            'connectivities.*.college_info_id' => 'required|exists:college_infos,id',
            'connectivities.*.icon' => 'required|string|max:255',
            'connectivities.*.title' => 'required|string|max:255',
            'connectivities.*.km' => 'required|string|max:255',
        ]);

        // Insert data into the database
        foreach ($validatedData['connectivities'] as $data) {
            Connectivity::create($data);
        }

        return redirect()->back()->with('success', 'Connectivity data added successfully!');
    }

    public function storeBranchPlacement(Request $request)
    {
        $validatedData = $request->validate([
            'branch_placements.*.college_info_id' => 'required|exists:college_infos,id',
            'branch_placements.*.branch' => 'required|string|max:255',
            'branch_placements.*.placed' => 'required|string|max:255',
        ]);

        // Insert data into the database
        foreach ($validatedData['branch_placements'] as $data) {
            BranchPlacement::create($data);
        }

        return redirect()->back()->with('success', 'Branch Placement data added successfully!');
    }

    public function storeAveragePackage(Request $request)
    {
        $validatedData = $request->validate([
            'average_packages.*.college_info_id' => 'required|exists:college_infos,id',
            'average_packages.*.branch' => 'required|string|max:255',
            'average_packages.*.avgctc' => 'required|string|max:255',
        ]);

        // Insert data into the database
        foreach ($validatedData['average_packages'] as $data) {
            AveragePackegeOfferd::create($data);
        }

        return redirect()->back()->with('success', 'Average Package data added successfully!');
    }

    public function storeCollegeInfo(Request $request)
    {
        // Debug: Check if the request data is coming through correctly
        // Uncomment to see all input data
    //    dd($request->all());
    
        // Validate incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'description' => 'required|string',
            'institute_name' => 'required|string|max:255',
            'also_known_as' => 'required|string|max:255',
            'institute_type' => 'required|string|max:255',
            'established' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'websitetitle' => 'required|string|max:255',
            'websitelink' => 'required|string|max:255',
        ]);
    
        // Debug: Check validated data
        // Uncomment to see validated data
        // dd($validatedData);
    
        // Handle file upload
        if ($request->hasFile('image')) {
            // Debug: Check if the file is uploaded
            $image = $request->file('image');
            // Uncomment to see image information
        //   dd($image);
    
            // Store image and get the path
            $imagePath = $image->store('images', 'public');
            $validatedData['image'] = Storage::url($imagePath);
    
            // Debug: Check the image path
            // Uncomment to see the image URL after storing
            // dd($validatedData['image']);
        } else {
            // Debug: Check if the file is missing
            return redirect()->back()->withErrors(['image' => 'Image is required and must be a valid image file.']);
        }
    
        // Create new college info entry
        CollegeInfo::create($validatedData);
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'College Info added successfully!');
    }
    
    public function storeInternationalRanking(Request $request)
    {
        $request->validate([
            'international_rankings.*.college_info_id' => 'required|exists:college_infos,id',
            'international_rankings.*.category' => 'required|string',
            'international_rankings.*.latest_ranking' => 'required|string',  // Changed to string
            'international_rankings.*.previous_ranking' => 'nullable|string', // Changed to string
        ]);
    
        // dd($request->all());
    
        foreach ($request->international_rankings as $rankingData) {
            InternationalRanking::create($rankingData);
        }
    
        return redirect()->back()->with('success', 'International Rankings added successfully!');
    }

// UpdataData


public function editCollegeData($id)
    {
        $collegeInfo = CollegeInfo::findOrFail($id);
        $topRecruiters = TopRecruiter::where('college_info_id', $id)->get();
        $pastRecruiters = PastRecruiter::where('college_info_id', $id)->get();
        $similarColleges = SimilarCollege::where('college_info_id', $id)->get();
        $NearbyColleges = NearbyCollege::where('college_info_id', $id)->get();
        $exploreColleges = ExploreMoreCollege::where('college_info_id', $id)->get();
        $medianPackage =   MedianPackageOffered::where('college_info_id', $id)->get();
        $InstitueFee =   Fee::where('college_info_id', $id)->get();
        $hostelfee =   HostelFee::where('college_info_id', $id)->get();
        $branchplacement =   BranchPlacement::where('college_info_id', $id)->get();
        $averagepackagedoffer =   AveragePackegeOfferd::where('college_info_id', $id)->get();
        $connectivity =   Connectivity::where('college_info_id', $id)->get();
        $feewavers =   FeeWavers::where('college_info_id', $id)->get();
       
        // Fetch other related models similarly
          
        return view('edit.editcollegedata', compact('collegeInfo', 'topRecruiters', 'similarColleges', 'medianPackage', 'InstitueFee', 'hostelfee', 'NearbyColleges', 'exploreColleges', 'pastRecruiters', 'branchplacement', 'averagepackagedoffer', 'connectivity', 'feewavers'));
    }

   

    public function updateCollegeData(Request $request)
    {
        // Validation rules
      // Update CollegeInfo
      $collegeInfo = CollegeInfo::find($request->input('college_info_id'));
      $collegeInfoData = $request->only(['title', 'description', 'institute_name', 'also_known_as', 'institute_type', 'established', 'location', 'websitetitle', 'websitelink']);

      if ($request->hasFile('image')) {
          $imagePath = $request->file('image')->store('images', 'public');
          $collegeInfoData['image'] = Storage::url($imagePath);
      }

      $collegeInfo->update($collegeInfoData);

      // Update TopRecruiters
      if (is_array($request->input('toprecruiters'))) {
      foreach ($request->input('toprecruiters') as $topRecruiterData) {
          $topRecruiter = TopRecruiter::find($topRecruiterData['id']);
          $topRecruiter->update($topRecruiterData);
      }
    }
    //  Update PastRecuiters

    if (is_array($request->input('pastrecruiters'))) {
    foreach ($request->input('pastrecruiters') as $pastRecruiterData) {
        $pastRecruiter = PastRecruiter::find($pastRecruiterData['id']);
        $pastRecruiter->update($pastRecruiterData);
    }
    }


    // End Update PastRecuriters



      // Update SimilarColleges
      if (is_array($request->input('similarcolleges'))) {
      foreach ($request->input('similarcolleges') as $similarCollegeData) {
          $similarCollege = SimilarCollege::find($similarCollegeData['id']);
          if ($request->hasFile("similarcolleges.{$similarCollegeData['id']}.image")) {
              $image = $request->file("similarcolleges.{$similarCollegeData['id']}.image");
              $path = $image->store('images', 'public');
              $similarCollegeData['image'] = Storage::url($path);
          }
          $similarCollege->update($similarCollegeData);
      }
    }


    //   Update NearByColleges
    if (is_array($request->input('nearbycolleges'))) {
    foreach ($request->input('nearbycolleges') as $nearbyCollegeData) {
        $nearbyCollege = NearbyCollege::find($nearbyCollegeData['id']);
        if ($request->hasFile("nearbycolleges.{$nearbyCollegeData['id']}.image")) {
            $image = $request->file("nearbycolleges.{$nearbyCollegeData['id']}.image");
            $path = $image->store('images', 'public');
            $nearbyCollegeData['image'] = Storage::url($path);
        }
        $nearbyCollege->update($nearbyCollegeData);
    }
    }

    // End Update NearbyColleges


  //    Explore More Colleges

  if (is_array($request->input('exploremorecolleges'))) {
  foreach ($request->input('exploremorecolleges') as $exploremoreCollegeData) {
    if (isset($exploremoreCollegeData['id'])) {
        $exploremoreCollege = ExploreMoreCollege::find($exploremoreCollegeData['id']);
        
        if ($exploremoreCollege) {
            if ($request->hasFile("exploremorecolleges.{$exploremoreCollegeData['id']}.image")) {
                $image = $request->file("exploremorecolleges.{$exploremoreCollegeData['id']}.image");
                $path = $image->store('images', 'public');
                $exploremoreCollegeData['image'] = Storage::url($path);
            }

            $exploremoreCollege->update($exploremoreCollegeData);
        }
    }
}
  }

//   End Explore More Colleges


       // Example for MedianPackageOffered
       if (is_array($request->input('medianpackages'))) {
    foreach ($request->input('medianpackages') as $medianPackageData) {
        $medianPackage = MedianPackageOffered::find($medianPackageData['id']);
        if ($medianPackage) {
            $medianPackage->update($medianPackageData);
        }
    }
       }

    // AveragePackeged Offer
    if (is_array($request->input('averagpackages'))) {
    foreach ($request->input('averagpackages') as $averagePackageData) {
        $averagePackage = AveragePackegeOfferd::find($averagePackageData['id']);
        if ($averagePackage) {
            $averagePackage->update($averagePackageData);
        }
    }
}



    // End AveragedPackeged Offer

    // Update for Fee
    if (is_array($request->input('institutefees'))) {
    foreach ($request->input('institutefees') as  $Institutefeedata){
        $Institutefee = Fee::find($Institutefeedata['id']);
        // dd($Institutefee);
        if($Institutefee){
            $Institutefee->update($Institutefeedata);
        }
    }
    }
   
    // Update For Hostl Fee
    if (is_array($request->input('hostelfees'))) {
    foreach($request->input('hostelfees') as $Hostelfeedata){
        $HostelFees =  HostelFee::find($Hostelfeedata['id']);
        if($HostelFees){
            $HostelFees->update($Hostelfeedata);
        }
    }
    }
     
        // Update BranchPlacement
        if (is_array($request->input('branchplacements'))) {
        foreach($request->input('branchplacements') as $BranchPlacementdata){
            $Branchplacement =  BranchPlacement::find($BranchPlacementdata['id']);
            if($Branchplacement){
                $Branchplacement->update($BranchPlacementdata);
            }
        }
    }

        // End Update BranchPlacemenet


    //    Connenctivity
    if (is_array($request->input('connectivities'))) {
    foreach($request->input('connectivities') as $Connectivitytdata){
        $Connectivity =  Connectivity::find($Connectivitytdata['id']);
        if($Connectivity){
            $Connectivity->update($Connectivitytdata);
        }
    }
    }

    // End Connectivity


    //  FeeWvaers

    if (is_array($request->input('feewavers'))) {
        foreach($request->input('feewavers') as $Feewavertdata){
            $Feewaver =  FeeWavers::find($Feewavertdata['id']);
            if($Feewaver){
                $Feewaver->update($Feewavertdata);
            }
        }
        }

    // End FeeWavers



        return redirect()->back()->with('success', 'Data updated successfully!');
    }

    

}

