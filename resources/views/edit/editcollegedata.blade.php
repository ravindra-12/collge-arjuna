<!-- resources/views/college/edit.blade.php -->
@extends('dashboardlayout')

@section('content')
<div class="container">
    <h3 class="my-3">Edit College Data</h3>
    <div class="my-5 d-flex flex-wrap  gap-3">
        <a href="#collegeinfo">
            <button type="button" class="btn btn-dark btn-rounded" data-mdb-ripple-init>College Info</button>
        </a>
        
         <a href="#toprecruite">  <button type="button" class="btn btn-dark btn-rounded" data-mdb-ripple-init>Top Recruiter</button></a>
      
         <a href="#pastrecruite">
            <button type="button" class="btn btn-dark btn-rounded" data-mdb-ripple-init>Past Recruiter</button>
         </a>
       
         <a href="#feewavers">
            <button type="button" class="btn btn-dark btn-rounded" data-mdb-ripple-init>Fee Waver</button>
         </a>
       
        <a href="#similarcollege">
            <button type="button" class="btn btn-dark btn-rounded" data-mdb-ripple-init>Similar College</button>
        </a>

       <a href="#nearbycollege">
        <button type="button" class="btn btn-dark btn-rounded" data-mdb-ripple-init>Nearby College</button>
       </a>

       <a href="#explorecollege">
        <button type="button" class="btn btn-dark btn-rounded" data-mdb-ripple-init>Explore College</button>
       </a>
        
       <a href="#medianpackeg">
        <button type="button" class="btn btn-dark btn-rounded" data-mdb-ripple-init>Median Package</button>
       </a>
       
      <a href="#averagepackeg">
        <button type="button" class="btn btn-dark btn-rounded" data-mdb-ripple-init>Average Package</button>
      </a>
       
      <a href="#brancplacement">
        <button type="button" class="btn btn-dark btn-rounded" data-mdb-ripple-init>Branch Placement</button>
      </a>
      
      <a href="#institutefee"> <button type="button" class="btn btn-dark btn-rounded" data-mdb-ripple-init>Institute Fee</button></a>

      <a href="#hostelfee">
        <button type="button" class="btn btn-dark btn-rounded" data-mdb-ripple-init>Hostel Fee</button>
      </a>

      <a href="#connectivity">
        <button type="button" class="btn btn-dark btn-rounded" data-mdb-ripple-init>Connectivity</button>
      </a>
      
      
    </div>
    
    
    <form action="{{ route('college.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <!-- CollegeInfo Fields -->
        <div id="collegeinfo"class="card mb-4">
            <div class="card-header">
                <h5>College Info</h5>
            </div>
            <div class="card-body">
                <input type="hidden" name="college_info_id" value="{{ $collegeInfo->id }}">
                
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $collegeInfo->title }}">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" id="image" name="image" class="form-control">
                    @if($collegeInfo->image)
                        <img src="{{ $collegeInfo->image }}" alt="College Image" class="img-thumbnail mt-2" width="150">
                    @endif
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input type="text" id="description" name="description" class="form-control" value="{{ $collegeInfo->description }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Institute_Name:</label>
                    <input type="text" id="institute_name" name="institute_name" class="form-control" value="{{ $collegeInfo->institute_name }}">
                </div>

                <div class="mb-3">
                    <label for="also_known_as" class="form-label">Also_known As:</label>
                    <input type="text" id="also_known_as" name="also_known_as" class="form-control" value="{{ $collegeInfo->also_known_as }}">
                </div>
                <div class="mb-3">
                    <label for="also_known_as" class="form-label">Institute Type:</label>
                    <input type="text" id="also_known_as" name="institute_type" class="form-control" value="{{ $collegeInfo->institute_type }}">
                </div>
                <div class="mb-3">
                    <label for="established" class="form-label">Established:</label>
                    <input type="text" id="established" name="established" class="form-control" value="{{ $collegeInfo->established }}">
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location:</label>
                    <input type="text" id="location" name="location" class="form-control" value="{{ $collegeInfo->location }}">
                </div>

                <div class="mb-3">
                    <label for="websitetitle" class="form-label">Website Title:</label>
                    <input type="text" id="websitetitle" name="websitetitle" class="form-control" value="{{ $collegeInfo->websitetitle }}">
                </div>

                <div class="mb-3">
                    <label for="websitelink" class="form-label">Website Link:</label>
                    <input type="text" id="websitelink" name="websitelink" class="form-control" value="{{ $collegeInfo->websitelink }}">
                </div>




                <!-- Add other CollegeInfo fields here -->
            </div>
        </div>

        <!-- TopRecruiter Fields -->
        <div id="toprecruite" class="card mb-4">
            <div class="card-header">
                <h5>Top Recruiter</h5>
            </div>
            <div  class="card-body">
                @foreach($topRecruiters as $topRecruiter)
                    <div class="mb-3">
                        <input type="hidden" name="toprecruiters[{{ $topRecruiter->id }}][id]" value="{{ $topRecruiter->id }}">
                        <label for="toprecruiter_title_{{ $topRecruiter->id }}" class="form-label">Title:</label>
                        <input type="text" id="toprecruiter_title_{{ $topRecruiter->id }}" name="toprecruiters[{{ $topRecruiter->id }}][title]" class="form-control" value="{{ $topRecruiter->title }}">
                    </div>
                    <!-- Add other TopRecruiter fields here -->
                @endforeach
            </div>
        </div>

   {{-- PastRecuirters --}}

   <div id="pastrecruite" class="card mb-4">
    <div class="card-header">
        <h5>Past Recruiter</h5>
    </div>
    <div class="card-body">
        @foreach($pastRecruiters as $pastRecruiters)
            <div class="mb-3">
                <input type="hidden" name="pastrecruiters[{{ $pastRecruiters->id }}][id]" value="{{ $pastRecruiters->id }}">
                <label for="pastrecruiters_title_{{ $pastRecruiters->id }}" class="form-label">Title:</label>
                <input type="text" id="toprecruiter_title_{{ $pastRecruiters->id }}" name="pastrecruiters[{{ $pastRecruiters->id }}][title]" class="form-control" value="{{ $pastRecruiters->title }}">
            </div>
          
        @endforeach
    </div>
</div>





   {{-- End PastRecuirters --}}

{{-- Feewaver --}}
<div id="feewavers" class="card mb-4">
    <div class="card-header">
        <h5>Fee Waver Data</h5>
    </div>
    <div class="card-body">
        @foreach($feewavers as $feewavers)
            <div class="mb-3">
                <input type="hidden" name="feewavers[{{ $feewavers->id }}][id]" value="{{ $feewavers->id }}">
                <label for="feewavers_title_{{ $feewavers->id }}" class="form-label">Title:</label>
                <input type="text" id="feewavers_title_{{ $feewavers->id }}" name="feewavers[{{ $feewavers->id }}][title]" class="form-control" value="{{ $feewavers->title }}">
            </div>
          
        @endforeach
    </div>
</div>

{{-- End FeeWaverdData --}}

        <!-- SimilarCollege Fields -->
        <div id="similarcollege" class="card mb-4">
            <div class="card-header">
                <h5>Similar College</h5>
            </div>
            <div class="card-body">
                @foreach($similarColleges as $similarCollege)
                    <div class="mb-3">
                        <input type="hidden" name="similarcolleges[{{ $similarCollege->id }}][id]" value="{{ $similarCollege->id }}">
                        <label for="similarcollege_title_{{ $similarCollege->id }}" class="form-label">Title:</label>
                        <input type="text" id="similarcollege_title_{{ $similarCollege->id }}" name="similarcolleges[{{ $similarCollege->id }}][title]" class="form-control" value="{{ $similarCollege->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="similarcollege_image_{{ $similarCollege->id }}" class="form-label">Image:</label>
                        <input type="file" id="similarcollege_image_{{ $similarCollege->id }}" name="similarcolleges[{{ $similarCollege->id }}][image]" class="form-control">
                        @if($similarCollege->image)
                            <img src="{{ $similarCollege->image }}" alt="Similar College Image" class="img-thumbnail mt-2" width="150">
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="similarcollege_description_{{ $similarCollege->id }}" class="form-label">Description:</label>
                        <input type="text" id="similarcollege_description_{{ $similarCollege->id }}" name="similarcolleges[{{ $similarCollege->id }}][description]" class="form-control" value="{{ $similarCollege->description }}">
                    </div>

                    {{-- <div class="mb-3">
                        <label for="similarcollege_link_{{ $similarCollege->id }}" class="form-label">Link:</label>
                        <input type="text" id="similarcollege_link_{{ $similarCollege->id }}" name="similarcolleges[{{ $similarCollege->id }}][link]" class="form-control" value="{{ $similarCollege->link }}">
                    </div> --}}
                @endforeach
            </div>
        </div>


        {{-- NearByCollegeData --}}

        <div id="nearbycollege" class="card mb-4">
            <div class="card-header">
                <h5>Nearby College</h5>
            </div>
            <div class="card-body">
                @foreach($NearbyColleges as $NearbyColleges)
                    <div class="mb-3">
                        <input type="hidden" name="nearbycolleges[{{ $NearbyColleges->id }}][id]" value="{{ $NearbyColleges->id }}">
                        <label for="nearbycolleges_title_{{ $NearbyColleges->id }}" class="form-label">Title:</label>
                        <input type="text" id="nearbycolleges_title_{{ $NearbyColleges->id }}" name="nearbycolleges[{{ $NearbyColleges->id }}][title]" class="form-control" value="{{ $NearbyColleges->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="nearbycolleges_image_{{ $NearbyColleges->id }}" class="form-label">Image:</label>
                        <input type="file" id="nearbycolleges_image_{{ $NearbyColleges->id }}" name="nearbycolleges[{{ $NearbyColleges->id }}][image]" class="form-control">
                        @if($NearbyColleges->image)
                            <img src="{{ $NearbyColleges->image }}" alt="nearby College Image" class="img-thumbnail mt-2" width="150">
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="nearbycolleges_description_{{ $NearbyColleges->id }}" class="form-label">Description:</label>
                        <input type="text" id="nearbycolleges_description_{{ $NearbyColleges->id }}" name="nearbycolleges[{{ $NearbyColleges->id }}][description]" class="form-control" value="{{ $NearbyColleges->description }}">
                    </div>

                   
                @endforeach
            </div>
        </div>

        {{-- End NearByColllegeData --}}

        {{-- ExPloreMore College --}}
  
        <div id="explorecollege" class="card mb-4">
            <div class="card-header">
                <h5>Explore More College</h5>
            </div>
            <div class="card-body">
                @foreach($exploreColleges as $exploreCollege)
                    <div class="mb-3">
                        <input type="hidden" name="exploremorecolleges[{{ $exploreCollege->id }}][id]" value="{{ $exploreCollege->id }}">
                        
                        <label for="exploremorecolleges_title_{{ $exploreCollege->id }}" class="form-label">Title:</label>
                        <input type="text" id="exploremorecolleges_title_{{ $exploreCollege->id }}" name="exploremorecolleges[{{ $exploreCollege->id }}][title]" class="form-control" value="{{ $exploreCollege->title }}">
                    </div>
        
                    <div class="mb-3">
                        <label for="exploremorecolleges_image_{{ $exploreCollege->id }}" class="form-label">Image:</label>
                        <input type="file" id="exploremorecolleges_image_{{ $exploreCollege->id }}" name="exploremorecolleges[{{ $exploreCollege->id }}][image]" class="form-control">
                        
                        @if($exploreCollege->image)
                            <img src="{{ $exploreCollege->image }}" alt="explore College Image" class="img-thumbnail mt-2" width="150">
                        @endif
                    </div>
                @endforeach
            </div>
        </div>


        {{-- End Explore More Collge --}}

        <div id="medianpackeg" class="card mb-4">
            <div class="card-header">
                <h5>Median Package Offered</h5>
            </div>
            <div class="card-body">
                @foreach($medianPackage as $medianPackage)
                    <div class="mb-3">
                        <input type="hidden" name="medianpackages[{{ $medianPackage->id }}][id]" value="{{ $medianPackage->id }}">
                        
                        <label for="median_package_branch_{{ $medianPackage->id }}" class="form-label">Branch:</label>
                        <input type="text" id="median_package_branch_{{ $medianPackage->id }}" name="medianpackages[{{ $medianPackage->id }}][branch]" class="form-control" value="{{ $medianPackage->branch }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="median_package_ctc_{{ $medianPackage->id }}" class="form-label">CTC (Amount):</label>
                        <input type="text" id="median_package_ctc_{{ $medianPackage->id }}" name="medianpackages[{{ $medianPackage->id }}][ctc]" class="form-control" value="{{ $medianPackage->ctc }}">
                    </div>
        
                  
                @endforeach
            </div>
        </div>


        {{-- AveragePackedOffer --}}

        <div id="averagepackeg" class="card mb-4">
            <div class="card-header">
                <h5>Average Package Offered</h5>
            </div>
            <div class="card-body">
                @foreach($averagepackagedoffer as $averagepackagedoffer)
                    <div class="mb-3">
                        <input type="hidden" name="averagpackages[{{ $averagepackagedoffer->id }}][id]" value="{{ $averagepackagedoffer->id }}">
                        
                        <label for="averagpackages_branch_{{ $averagepackagedoffer->id }}" class="form-label">Branch:</label>
                        <input type="text" id="averagpackages_branch_{{ $averagepackagedoffer->id }}" name="averagpackages[{{ $averagepackagedoffer->id }}][branch]" class="form-control" value="{{ $averagepackagedoffer->branch }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="averagpackages_ctc_{{ $averagepackagedoffer->id }}" class="form-label">CTC (Amount):</label>
                        <input type="text" id="averagpackages_ctc_{{ $averagepackagedoffer->id }}" name="averagpackages[{{ $averagepackagedoffer->id }}][avgctc]" class="form-control" value="{{ $averagepackagedoffer->avgctc }}">
                    </div>
        
                  
                @endforeach
            </div>
        </div>

        {{-- End AveragepackgedOffer --}}
        
        {{-- Branch PlacementData --}}

        <div id="brancplacement" class="card mb-4">
            <div class="card-header">
                <h5>Branch Placement Data</h5>
            </div>
            <div class="card-body">
                @foreach($branchplacement as $branchplacement)
                    <div class="mb-3">
                        <input type="hidden" name="branchplacements[{{ $branchplacement->id }}][id]" value="{{ $branchplacement->id }}">
                        
                        <label for="branchplacements_branch_{{ $branchplacement->id }}" class="form-label">Branch:</label>
                        <input type="text" id="branchplacements_branch_{{ $branchplacement->id }}" name="branchplacements[{{ $branchplacement->id }}][branch]" class="form-control" value="{{ $branchplacement->branch }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="branchplacements_placed_{{ $branchplacement->id }}" class="form-label">Placed:</label>
                        <input type="text" id="branchplacements_placed_{{ $branchplacement->id }}" name="branchplacements[{{ $branchplacement->id }}][placed]" class="form-control" value="{{ $branchplacement->placed }}">
                    </div>
        
                    <!-- Add other MedianPackage fields here if needed -->
                @endforeach
            </div>
        </div>


        {{-- End BranchPlacement Data --}}

        {{-- Institue Fee --}}

        <div id="institutefee" class="card mb-4">
            <div class="card-header">
                <h5>Institue Fee Data</h5>
            </div>
            <div class="card-body">
                @foreach($InstitueFee as $InstitueFee)
                    <div class="mb-3">
                        <input type="hidden" name="institutefees[{{ $InstitueFee->id }}][id]" value="{{ $InstitueFee->id }}">
                        
                        <label for="institutefees_{{ $InstitueFee->id }}" class="form-label">Type:</label>
                        <input type="text" id="institutefees__branch_{{ $InstitueFee->id }}" name="institutefees[{{ $InstitueFee->id }}][type]" class="form-control" value="{{ $InstitueFee->type }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="institutefees_amount_{{ $InstitueFee->id }}" class="form-label">Amount:</label>
                        <input type="text" id="institutefees_amount_{{ $InstitueFee->id }}" name="institutefees[{{ $InstitueFee->id }}][amount]" class="form-control" value="{{ $InstitueFee->amount }}">
                    </div>
        
                  
                @endforeach
            </div>
        </div>
        

        {{-- End Institue Fee --}}


  {{-- HostelFee --}}

  <div id="hostelfee" class="card mb-4">
    <div class="card-header">
        <h5>Hostel Fee Data</h5>
    </div>
    <div class="card-body">
        @foreach($hostelfee as $hostelfee)
            <div class="mb-3">
                <input type="hidden" name="hostelfees[{{ $hostelfee->id }}][id]" value="{{ $hostelfee->id }}">
                
                <label for="hostelfee_{{ $hostelfee->id }}" class="form-label">Type:</label>
                <input type="text" id="hostelfees__branch_{{ $hostelfee->id }}" name="hostelfees[{{ $hostelfee->id }}][type]" class="form-control" value="{{ $hostelfee->type }}">
            </div>
            
            <div class="mb-3">
                <label for="hostelfees_amount_{{ $hostelfee->id }}" class="form-label">Amount:</label>
                <input type="text" id="hostelfees_amount_{{ $hostelfee->id }}" name="hostelfees[{{ $hostelfee->id }}][amount]" class="form-control" value="{{ $hostelfee->amount }}">
            </div>

          
        @endforeach
    </div>
</div>


  {{-- End Hostel Fee --}}


  {{-- Connectivity --}}

  <div id="connectivity" class="card mb-4">
    <div class="card-header">
        <h5>Connectivity Data</h5>
    </div>
    <div class="card-body">
        @foreach($connectivity as $connectivity)
            <div class="mb-3">
                <input type="hidden" name="connectivities[{{ $connectivity->id }}][id]" value="{{ $connectivity->id }}">
                
                <label for="connectivity{{ $connectivity->id }}" class="form-label">Icon:</label>
                <input type="text" id="connectivity__icon_{{ $connectivity->id }}" name="connectivities[{{ $connectivity->id }}][icon]" class="form-control" value="{{ $connectivity->icon }}">
            </div>
            
            <div class="mb-3">
                <label for="connectivity_title_{{ $connectivity->id }}" class="form-label">Title:</label>
                <input type="text" id="connectivity_amount_{{ $connectivity->id }}" name="connectivities[{{ $connectivity->id }}][title]" class="form-control" value="{{ $connectivity->title }}">
            </div>

            <div class="mb-3">
                <label for="connectivity_km_{{ $connectivity->id }}" class="form-label">KM:</label>
                <input type="text" id="connectivity_km_{{ $connectivity->id }}" name="connectivities[{{ $connectivity->id }}][km]" class="form-control" value="{{ $connectivity->km }}">
            </div>


          
        @endforeach
    </div>
</div>

  {{-- End Connectivity --}}

        <!-- Add other model fields in similar fashion -->

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
