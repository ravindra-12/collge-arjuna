@extends('dashboardlayout')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="conatiner">
<h3 class="fs-4 mb-3"> Add Colleges Data</h3>
<div class="row my-5 text-center" style="cursor: pointer">
  
 <div class="col-2 btn btn-success py-3  m-2" >
   <a href="add-college-info" style="text-decoration: none; color:#ffff">
      Add College Info
   </a>
 
 </div>
 <div class="col-2 btn btn-success py-3 m-2">

   <a href="add-connectivities" style="text-decoration: none; color:#ffff">
      Add Connectivity
   </a>
    
 </div>
 <div class="col-2 btn btn-success py-3 m-2">

   <a href="add-institute-fee" style="text-decoration: none; color:#ffff">
     Add Institute Fee
   </a>

  
 </div>
 <div class="col-2 btn btn-success py-3 m-2">

   <a href="add-hostel-fee" style="text-decoration: none; color:#ffff">
      Add Hostel Fee
   </a>
   
 </div>
 <div class="col-2 btn btn-success py-3 m-2">

   <a href="add-feewavers" style="text-decoration: none; color:#ffff">
      Add Feewavers
   </a>
  
 </div>

</div>
<div class="row my-5 text-center" style="cursor: pointer">
  
    <div class="col-2 btn btn-success py-3  m-2">
      <a href="add-branch-placements" style="text-decoration: none; color:#ffff">
      Branch Placement
    </a>
    </div>
    <div class="col-2 btn btn-success py-3 m-2">
     <a href="add-median-packages" style="text-decoration: none; color:#ffff">
      Add Median Package
     </a>
    </div>
    <div class="col-2 btn btn-success py-3 m-2">
        <a href="addtoprecruitedata" style="text-decoration: none; color:#ffff">
         Top Recruiters
        </a>
    </div>
    <div class="col-2 btn btn-success py-3 m-2">

      <a href="addpastrecruiters" style="text-decoration: none; color:#ffff">
         Past Recruiters
      </a>
      
    </div>
    <div class="col-2 btn btn-success py-3  m-2">
      <a href="add-similar-colleges" style="text-decoration: none; color:#ffff">
         Similar College
      </a>
    
    </div>
    {{-- <div class="col-2 btn btn-success py-3 m-2">
    <a href=""  style="text-decoration: none; color:#ffff">
      Add Website
    </a>
    </div> --}}
   
   </div>
</div>

<div class="row my-5 text-center" style="cursor: pointer">
  
    {{-- <div class="col-2 btn btn-success py-3  m-2">
      <a href="add-similar-colleges" style="text-decoration: none; color:#ffff">
         Similar College
      </a>
    
    </div> --}}
    <div class="col-2 btn btn-success py-3 m-2">
      <a href="add-nearby-colleges" style="text-decoration: none; color:#ffff">
         NearBy College
      </a>
      
    </div>
    <div class="col-2 btn btn-success py-3 m-2">

      <a href="add-explore-morecolleges" style="text-decoration: none; color:#ffff">
         Explore Colleges
      </a>
      
    </div>
    <!--<div class="col-2 btn btn-success py-3 m-2">-->
    <!-- <a href="addpastrecruiters" style="text-decoration: none; color:#ffff">-->
    <!--  Past Recruiters-->
    <!-- </a>-->
    <!--</div>-->
    <div class="col-2 btn btn-success py-3 m-2">
      <a href="add-average-packages" style="text-decoration: none; color:#ffff">
        Average Package
       </a>
     </div>
    {{-- <div class="col-2 btn btn-success py-3 m-2">
      Add Website
    </div> --}}
   
   </div>
</div>

@endsection