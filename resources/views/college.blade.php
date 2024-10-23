<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- FontAwesome CSS for icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<style>
    @media (max-width: 768px) {
        .container {
            padding-left: 10px;
        }
        .row {
            flex-direction: row !important;
        }
        .text-right {
            text-align: right !important;
        }
        p {
            font-size: 16px;
        }
        .btn {
            width: 100%;
        }
    }
</style>

 <style>
        th, td {
            vertical-align: middle;
            text-align: center;
        }
        .logo {
            width: 40px;
        }
    </style>
@include('components.header')
@extends('collegelayout')

<header
    style="background-image: url('https://t3.ftcdn.net/jpg/03/91/91/16/240_F_391911620_vUJTPRx6NXhTWN2iWBGmNrOzTrcyju0V.jpg'); background-size: cover;
background-position: center;
background-repeat: no-repeat;
max-width: 100%;
height: 440px;">

<div class="conatiner" style="align-items: center; justify-content:center; display:flex;">
        <img class="my-3" src="{{ asset($college->image) }}" alt="" height="140px">
        {{-- {{ $college->image }} --}}
       
    </div>
    <div class="container text-white text-center">
        <h1 class="text-white" style="font-size: 30px;">{{ $college->title }}</h1>
        <p class=" mb-sm-5">{{ $college->description }}</p>
    </div>



</header>


{{-- Header End --}}

<div class="container-fluid">
    {{-- <div class="row">
       
        <div class="col" style="padding: 20px; background-color: #f0f0f0; text-align: center;">
            <a href="#connectivity">
            <div style="padding: 16px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; transition: background-color 0.3s, border-color 0.3s;"
                onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='green';"
                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                <i class="fa-solid fa-location-dot"></i>
            </div>
        </a>
           
                <p class="mt-3">Connectivity</p>
           
            
        </div>

        <div class="col" style="padding: 20px; background-color: #f0f0f0; text-align: center;">
            <a href="#cutoff">
            <div style="padding: 16px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; transition: background-color 0.3s, border-color 0.3s;"
                onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='#000';"
                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                <i class="fa-solid fa-person-skating"></i>
            </div>
        </a>
            <p class="mt-3">Ranking</p>
        </div>
        <div class="col" style="padding: 20px; background-color: #f0f0f0; text-align: center;">
            <a href="#admissionsss">
            <div style="padding: 16px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; transition: background-color 0.3s, border-color 0.3s;"
                onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='#000';"
                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>
        </a>
            <p class="mt-3">Admissionnn</p>
        </div>
        <div class="col" style="padding: 20px; background-color: #f0f0f0; text-align: center;">
            <a href="#cutoff">
                <div style="padding: 16px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; transition: background-color 0.3s, border-color 0.3s;"
                onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='#000';"
                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                <i class="fa-solid fa-book"></i>
            </div>
            </a>
            
            <p class="mt-3">Feewaver</p>
        </div>
        <div class="col" style="padding: 20px; background-color: #f0f0f0; text-align: center;">
            <a href="#feewavers">
            <div style="padding: 16px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; transition: background-color 0.3s, border-color 0.3s;"
                onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='#000';"
                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                <i class="fa-solid fa-info"></i>
            </div>
        </a>
            <p class="mt-3">Seats</p>
        </div>

       
        <div class="col" style="padding: 20px; background-color: #f0f0f0; text-align: center;">
            <a href="#cutoff">
            <div style="padding: 16px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; transition: background-color 0.3s, border-color 0.3s;"
                onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='#000';"
                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                <i class="fa-solid fa-list"></i>
            </div>
        </a>
            <p class="mt-3">Cutoff</p>
        </div>

        <div class="col" style="padding: 20px; background-color: #f0f0f0; text-align: center;">
            <a href="#fees">
            <div style="padding: 16px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; transition: background-color 0.3s, border-color 0.3s;"
                onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='#000';"
                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                <i class="fa-solid fa-indian-rupee-sign"></i>
            </div>
        </a>
            <p class="mt-3">Fees</p>
        </div>
        <div class="col" style="padding: 20px; background-color: #f0f0f0; text-align: center;">
            <a href="#placement">
            <div style="padding: 16px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; transition: background-color 0.3s, border-color 0.3s;"
                onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='#000';"
                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                <i class="fa-solid fa-briefcase"></i>
            </div>
        </a>
            <p class="mt-3">Placements</p>
        </div>
    </div> --}}

   
        <div class="row flex-nowrap flex-lg-wrap overflow-auto">
            <div class="col-4 col-sm-4 col-md-3 col-lg" style="padding: 10px; background-color: #f0f0f0; text-align: center;">
                <a href="#connectivity">
                    <div class="icon-container" style="padding: 10px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s;">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                </a>
                <p class="mt-2">Connectivity</p>
            </div>
            <div class="col-4 col-sm-4 col-md-3 col-lg" style="padding: 10px; background-color: #f0f0f0; text-align: center;">
                <a href="#cutoff">
                    <div class="icon-container" style="padding: 10px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s;">
                        <i class="fa-solid fa-person-skating"></i>
                    </div>
                </a>
                <p class="mt-2">Ranking</p>
            </div>
            <div class="col-4 col-sm-4 col-md-3 col-lg" style="padding: 10px; background-color: #f0f0f0; text-align: center;">
                <a href="#admissionsss">
                    <div class="icon-container" style="padding: 10px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s;">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                </a>
                <p class="mt-2">Admission</p>
            </div>
            <div class="col-4 col-sm-4 col-md-3 col-lg" style="padding: 10px; background-color: #f0f0f0; text-align: center;">
                <a href="#cutoff">
                    <div class="icon-container" style="padding: 10px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s;">
                        <i class="fa-solid fa-book"></i>
                    </div>
                </a>
                <p class="mt-2">Feewaver</p>
            </div>
            <div class="col-4 col-sm-4 col-md-3 col-lg" style="padding: 10px; background-color: #f0f0f0; text-align: center;">
                <a href="#feewavers">
                    <div class="icon-container" style="padding: 10px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s;">
                        <i class="fa-solid fa-info"></i>
                    </div>
                </a>
                <p class="mt-2">Seats</p>
            </div>
            <div class="col-4 col-sm-4 col-md-3 col-lg" style="padding: 10px; background-color: #f0f0f0; text-align: center;">
                <a href="#cutoff">
                    <div class="icon-container" style="padding: 10px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s;">
                        <i class="fa-solid fa-list"></i>
                    </div>
                </a>
                <p class="mt-2">Cutoff</p>
            </div>
            <div class="col-4 col-sm-4 col-md-3 col-lg" style="padding: 10px; background-color: #f0f0f0; text-align: center;">
                <a href="#fees">
                    <div class="icon-container" style="padding: 10px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s;">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                    </div>
                </a>
                <p class="mt-2">Fees</p>
            </div>
            <div class="col-4 col-sm-4 col-md-3 col-lg" style="padding: 10px; background-color: #f0f0f0; text-align: center;">
                <a href="#placement">
                    <div class="icon-container" style="padding: 10px; border-style: solid; border-width: 1px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s;">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                </a>
                <p class="mt-2">Placements</p>
            </div>
        </div>
   
        
   
{{--  --}}
</div>
<div class="container-fluid  bg-dark">
    <p class="text-center text-light p-2" style=" text-decoration: underline;
    text-underline-offset: 10px;">
        Subscribe to Exam Updates</p>

</div>
{{-- End Second Section --}}



@section('content')

    {{-- Application Closing Soon --}}
  


    <div class="container pt-3" style="background-color: #f0f0f0;">
        <div class="pb-3">
            <h1 style="font-size: 20px;">APPLICATIONS CLOSING SOON</h1>
            <hr class="w-75 mx-auto" style="color: black; font-weight: bold;">
        </div>
    
        <!-- First Application -->
        <div class="row align-items-center mb-3">
            <div class="col-md-9 col-sm-8 col-8">
                <p>NIIT University <b style="color:#816710; animation: fadeOpacity 2s infinite;">(Spot Admission)</b></p>
            </div>
            <div class="col-md-3 col-sm-4 col-4 text-end">
                <button class="btn btn-warning w-100">Apply</button>
            </div>
        </div>
        <hr class="w-75 mx-auto" style="color: black; font-weight: 400;">
    
        <!-- Second Application -->
        <div class="row align-items-center mb-3">
            <div class="col-md-9 col-sm-8 col-8">
                <p>Manav Rachna University <b style="color:#816710; animation: fadeOpacity 2s infinite;">(Last Few 100% Scholarships)</b></p>
            </div>
            <div class="col-md-3 col-sm-4 col-4 text-end">
                <button class="btn btn-warning w-100">Apply</button>
            </div>
        </div>
        <hr class="w-75 mx-auto" style="color: black; font-weight: 400;">
    
        <!-- Third Application -->
        <div class="row align-items-center mb-3">
            <div class="col-md-9 col-sm-8 col-8">
                <p>Alliance University <b style="color:#816710; animation: fadeOpacity 2s infinite;">(New)</b></p>
            </div>
            <div class="col-md-3 col-sm-4 col-4 text-end">
                <button class="btn btn-warning w-100">Apply</button>
            </div>
        </div>
    </div>
    
  
  
  
  


  
  
    {{-- End Application Closing Soon --}}

    {{-- Overview --}}

    <div class="container my-5">
        <h1 style="font-size: 20px;">OVERVIEW</h1>
        <hr class="w-65" style="color: black; font-weight: bold !important;">
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="background-color: #04AA6D; color: white;">
                <th
                    style="border: 1px solid #ddd; padding: 8px; text-align: left; padding-top: 12px; padding-bottom: 12px; width: 33.33%;">
                    Institute Name</th>
                <th
                    style="border: 1px solid #ddd; padding: 8px; text-align: left; padding-top: 12px; padding-bottom: 12px; width: 33.33%;">
                    {{ $college->institute_name }}</th>

            </tr>
            <tr style="border: 1px solid #ddd; background-color: #f2f2f2;">
                <td style="border: 1px solid #ddd; padding: 8px;">Also Known As</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $college->also_known_as }}</td>

            </tr>
            <tr style="border: 1px solid #ddd; background-color: #ffffff;">
                <td style="border: 1px solid #ddd; padding: 8px;">Institute Type</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $college->institute_type }}</td>

            </tr>
            <tr style="border: 1px solid #ddd; background-color: #f2f2f2;">
                <td style="border: 1px solid #ddd; padding: 8px;">Established</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $college->established }}</td>

            </tr>
            <tr style="border: 1px solid #ddd; background-color: #ffffff;">
                <td style="border: 1px solid #ddd; padding: 8px;">Location</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $college->location }}</td>

            </tr>
        </table>
    </div>

    {{-- End Overview --}}

    {{--  --}}
    <div  class="cutoff-years my-4">
        <h3 id="cutoff">Select Cutoff Year</h3>
        <p>CUTOFF RANKS (OPENING & CLOSING RANKS)</p>
        <ul class="list-group">
            @foreach($cutoffYears as $cutoffYear)
                <li class="list-group-item">
                    <!-- Ensure to use both 'id' and 'year' -->
                    <a href="{{ route('admission_records.cutoff', ['id' => $college->id, 'year' => $cutoffYear->year]) }}">
                        {{ $cutoffYear->year }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>


    {{--  --}}



    
    {{-- @if ($college->pdf)
 <div class="container my-5">
        <h1 style="font-size: 20px;">SEAT MATRIX</h1>
        <hr class="w-65" style="color: black; font-weight: bold !important;">
        <a href="{{ Storage::url($college->pdf->pdf_path) }}" target="_blank"><span>
            {{ $college->also_known_as }}</td>

            </span> Seat Matrix</a>
    </div>
    @else
    <p>No Seat Matrix available for this college.</p>
@endif --}}

@if ($college->pdf)
    <div class="container my-5">
        <h1 style="font-size: 20px;">SEAT MATRIX</h1>
        <hr class="w-65" style="color: black; font-weight: bold !important;">

        <!-- Embed the PDF with scrolling -->
        <div style="position: relative;">
            <iframe src="{{ Storage::url($college->pdf->pdf_path) }}" width="100%" height="500px" style="border: none;"></iframe>

            <!-- Popup button on the top right for full-screen PDF view -->
            <a href="{{ Storage::url($college->pdf->pdf_path) }}" target="_blank" 
                style="position: absolute; top: 10px; right: 10px; text-decoration: none; font-size: 20px; background: #007bff; color: white; padding: 5px 10px; border-radius: 5px;">
                Open Full PDF
            </a>
        </div>
    </div>
@else
    <p>No Seat Matrix available for this college.</p>
@endif

    {{--  --}}


    @if ($college->pdf)
    <a href="{{ Storage::url($college->pdf->pdf_path) }}" target="_blank">View Seat Matrix</a>
@else
    <p>No Seat Matrix available for this college.</p>
@endif
    {{--  --}}

    {{-- Description --}}
    <div class="container mb-5">
        <p>
            IIT Mandi: <a href="">Admission</a> | <a href="">Ranking</a> | <a href="">Fees</a>

        </p>
        <p>
            <b style="color:#816710; animation: fadeOpacity 2s infinite;"> LAST DAY: </b> UPES B.Tech admissions through
            JEE Main/ UPESEAT/ 12th marks will close on June 27. Visit UPES website to apply now.
        </p>
        <p>
            <b style="color:#816710; animation: fadeOpacity 2s infinite;"> LAST FEW DAYS: </b> Closing Soon! Admission
            Round for NIIT University closes soon, visit NIIT Application website to apply.
        </p>
        <p>
            <b style="color:#816710; animation: fadeOpacity 2s infinite;"> ALERT: </b> Applications for Round 3 of Thapar
            Admissions 2024 through JEE Main/ 12th marks are open. Visit Thapar website to apply.
        </p>
        <p>
            <b> NOTE:</b> Keep track of all open Exam and Admission applications using Applications Tracker.
        </p>
    </div>


    {{-- EndDescription --}}

    
    


    {{-- CONNECTIVITY --}}
   <div id="connectivity" class="container mb-5">
    <h1 style="font-size: 20px;">CONNECTIVITY (HOW TO REACH)</h1>
   
    @if ($college->connectivity && $college->connectivity->isNotEmpty())
        @foreach ($college->connectivity as $connectivity)
            <div class="row  pt-4 px-2 ">
                <div class="col-3 col-sm-2 d-flex justify-content-center align-items-center">
                    <img src="{{ $connectivity->icon }}" alt="" style="height: 40px;">
                </div>
                <div class="col-9 col-sm-10">
                    <p class="mb-1">{{ $connectivity->title }}</p>
                    <p class="mb-0">{{ $connectivity->km }}</p>
                </div>
            </div>
        @endforeach
    @else
        <p>No connectivity information available.</p>
    @endif
</div>

{{-- <div class="container my-5">
    <h3>RANKING</h3>
    <table class="table table-bordered align-middle">
        
        <thead class="table-light">

            <tr style="border:1px solid black;">
               
                <th style="border:1px solid black;">Category</th>
                <th style="border:1px solid black;">Latest Rank (Year)</th>
                <th style="border:1px solid black;">Previous Rank (Year)</th>
            </tr>
         
        </thead>
       
        <tbody>
            <tr>
                <p>International Ranking</p>
                <td>QS World University Rankings</td>
                <td>731-740 (2024)</td>
                <td>801-1000 (2023)</td>
            </tr>
            <tr>
                <td>QS Asia University Rankings</td>
                <td>301-350 (2024)</td>
                <td>301-350 (2023)</td>
            </tr>
            <tr>
                
                <td>THE World University Rankings</td>
                <td>1001-1200 (2023)</td>
                <td>1001-1200 (2022)</td>
            </tr>
            <tr>
                <td>THE World University Rankings - Engineering</td>
                <td>601-800 (2023)</td>
                <td>601-800 (2022)</td>
            </tr>
            <tr>
                <td>THE Asia University Rankings</td>
                <td>301-350 (2023)</td>
                <td>301-350 (2022)</td>
            </tr>
        </tbody>
    </table>
</div> --}}




    {{-- End CONNECTIVITY --}}

   

    {{-- CAMPUS FACILITIES --}}
    <!--<div class="container mb-5" style="max-width: 100%; overflow: hidden;">-->
    <!--    <h1 style="font-size: 20px;">CAMPUS FACILITIES</h1>-->
     

    <!--    <div class="row mt-4">-->
    <!--        <div class="col-auto" style="padding: 5px; text-align: center;">-->
    <!--            <div style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: inline-flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s;"-->
    <!--                onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='green'; document.getElementById('bank').style.display='block';"-->
    <!--                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">-->
    <!--                {{-- <i class="fa-solid fa-location-dot" style="font-size: 20px;"></i> --}}-->
    <!--                <i class="fa-solid fa-building-columns"></i>-->
    <!--            </div>-->
    <!--            <p id="bank" class="mt-3" style="display: none;">Bank</p>-->
    <!--        </div>-->

    <!--        <div class="col-auto" style="padding: 5px; text-align: center;">-->
    <!--            <div style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: inline-flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s;"-->
    <!--                onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='#000'; document.getElementById('libarary').style.display='block';"-->
    <!--                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">-->
    <!--                {{-- <i class="fa-solid fa-person-skating" style="font-size: 20px;"></i> --}}-->
    <!--                <i class="fa-solid fa-book"></i>-->
    <!--            </div>-->
    <!--            <p id="libarary" class="mt-3" style="display: none;">Library</p>-->
    <!--        </div>-->

    <!--        <div class="col-auto" style="padding: 5px; text-align: center;">-->
    <!--            <div style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: inline-flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s;"-->
    <!--                onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='#000'; document.getElementById('canteen').style.display='block';"-->
    <!--                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">-->
    <!--                <i class="fa fa-cutlery fa-lg" style="font-size: 20px;"></i>-->
    <!--            </div>-->
    <!--            <p id="canteen" class="mt-3" style="display: none;">Canteen</p>-->
    <!--        </div>-->

    <!--        <div class="col-auto" style="padding: 5px; text-align: center;">-->
    <!--            <div style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: inline-flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s;"-->
    <!--                onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='#000'; document.getElementById('boyshostel').style.display='block';"-->
    <!--                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">-->
    <!--                <i class="fa fa-male fa-lg" style="font-size: 20px;"></i>-->
    <!--            </div>-->
    <!--            <p id="boyshostel" class="mt-3" style="display: none;">Boys hostel</p>-->
    <!--        </div>-->

    <!--        <div class="col-auto" style="padding: 5px; text-align: center;">-->
    <!--            <div style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: inline-flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s;"-->
    <!--                onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='#000'; document.getElementById('girlshostel').style.display='block';"-->
    <!--                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">-->
    <!--                <i class="fa fa-female fa-lg" style="font-size: 20px;"></i>-->
    <!--            </div>-->
    <!--            <p id="girlshostel" class="mt-3" style="display: none;">Girls hostel</p>-->
    <!--        </div>-->

    <!--        <div class="col-auto" style="padding: 5px; text-align: center;">-->
    <!--            <div style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: inline-flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s;"-->
    <!--                onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='#000'; document.getElementById('sports').style.display='block';"-->
    <!--                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">-->
    <!--                {{-- <i class="fa fa-futbol-o fa-lg" style="font-size: 20px;"></i> --}}-->
    <!--                <i class="fa-solid fa-futbol"></i>-->
    <!--            </div>-->
    <!--            <p id="sports" class="mt-3" style="display: none;">Sports</p>-->
    <!--        </div>-->

    <!--        <div class="col-auto" style="padding: 5px; text-align: center;">-->
                
    <!--            <div style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: inline-flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s;"-->
    <!--                onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='#000'; document.getElementById('medical').style.display='block';"-->
    <!--                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">-->
    <!--                <i class="fa fa-medkit fa-lg" style="font-size: 20px;"></i>-->
    <!--            </div>-->
           
    <!--            <p id="medical" class="mt-3" style="display: none;">Medical</p>-->
    <!--        </div>-->
    <!--    </div>-->


    <!--</div>-->

    <div class="container mb-5">
    <h1 class="text-center" style="font-size: 20px;">CAMPUS FACILITIES</h1>

    <div class="container mt-4">
        <div class="overflow-auto d-flex flex-nowrap">
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex flex-column align-items-center mb-4">
                <div 
                    style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s; text-align: center; border-color:green;" 
                    onmouseover="this.style.backgroundColor='blue'; document.getElementById('bank').style.display='block';" 
                    onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                    <i class="fa-solid fa-building-columns" style="font-size: 20px;"></i>
                </div>
                <p id="bank" class="mt-3">Bank</p>
            </div>
    
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex flex-column align-items-center mb-4">
                <div 
                    style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s; text-align: center; border-color:green;" 
                    onmouseover="this.style.backgroundColor='blue'; document.getElementById('library').style.display='block';" 
                    onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                    <i class="fa-solid fa-book" style="font-size: 20px;"></i>
                </div>
                <p id="library" class="mt-3">Library</p>
            </div>
    
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex flex-column align-items-center mb-4">
                <div 
                    style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s; text-align: center; border-color:green;" 
                    onmouseover="this.style.backgroundColor='blue'; document.getElementById('canteen').style.display='block';" 
                    onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                    <i class="fa fa-cutlery fa-lg" style="font-size: 20px;"></i>
                </div>
                <p id="canteen" class="mt-3">Canteen</p>
            </div>
    
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex flex-column align-items-center mb-4">
                <div 
                    style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s; text-align: center; border-color:green;" 
                    onmouseover="this.style.backgroundColor='blue'; document.getElementById('boyshostel').style.display='block';" 
                    onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                    <i class="fa fa-male fa-lg" style="font-size: 20px;"></i>
                </div>
                <p id="boyshostel" class="mt-3">Hostel</p>
            </div>
    
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex flex-column align-items-center mb-4">
                <div 
                    style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s; text-align: center; border-color:green;" 
                    onmouseover="this.style.backgroundColor='blue'; document.getElementById('sports').style.display='block';" 
                    onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                    <i class="fa-solid fa-futbol" style="font-size: 20px;"></i>
                </div>
                <p id="sports" class="mt-3">Sports</p>
            </div>
    
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex flex-column align-items-center mb-4">
                <div 
                    style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s; text-align: center; border-color:green;" 
                    onmouseover="this.style.backgroundColor='blue'; document.getElementById('medical').style.display='block';" 
                    onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                    <i class="fa fa-medkit fa-lg" style="font-size: 20px;"></i>
                </div>
                <p id="medical" class="mt-3">Medical</p>
            </div>
        </div>
    </div>
                    

    {{-- <div class="row mt-4 justify-content-center">
        <!-- Facility Item -->
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex flex-column align-items-center mb-4">
            <div 
                style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s; text-align: center; border-color:green;" 
                onmouseover="this.style.backgroundColor='blue';  document.getElementById('bank').style.display='block';" 
                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                <i class="fa-solid fa-building-columns" style="font-size: 20px;"></i>
            </div>
            <p id="bank" class="mt-3">Bank</p>
        </div>

        <!-- Facility Item -->
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex flex-column align-items-center mb-4">
            <div 
                style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s; text-align: center; border-color:green;" 
                onmouseover="this.style.backgroundColor='blue';  document.getElementById('library').style.display='block';" 
                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                <i class="fa-solid fa-book" style="font-size: 20px;"></i>
            </div>
            <p id="library" class="mt-3">Library</p>
        </div>

        <!-- Facility Item -->
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex flex-column align-items-center mb-4">
            <div 
                style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s; text-align: center; border-color:green;" 
                onmouseover="this.style.backgroundColor='blue';  document.getElementById('canteen').style.display='block';" 
                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                <i class="fa fa-cutlery fa-lg" style="font-size: 20px;"></i>
            </div>
            <p id="canteen" class="mt-3">Canteen</p>
        </div>

        <!-- Facility Item -->
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex flex-column align-items-center mb-4">
            <div 
                style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s; text-align: center; border-color:green;" 
                onmouseover="this.style.backgroundColor='blue'; document.getElementById('boyshostel').style.display='block';" 
                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                <i class="fa fa-male fa-lg" style="font-size: 20px;"></i>
            </div>
            <p id="boyshostel" class="mt-3">hostel</p>
        </div>

        <!-- Facility Item -->
        <!--<div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex flex-column align-items-center mb-4">-->
        <!--    <div -->
        <!--        style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s; text-align: center;" -->
        <!--        onmouseover="this.style.backgroundColor='blue'; this.style.borderColor='#000'; document.getElementById('girlshostel').style.display='block';" -->
        <!--        onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">-->
        <!--        <i class="fa fa-female fa-lg" style="font-size: 20px;"></i>-->
        <!--    </div>-->
        <!--    <p id="girlshostel" class="mt-3" style="display: none;">Girls hostel</p>-->
        <!--</div>-->

        <!-- Facility Item -->
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex flex-column align-items-center mb-4">
            <div 
                style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s; text-align: center; border-color:green;" 
                onmouseover="this.style.backgroundColor='blue';  document.getElementById('sports').style.display='block';" 
                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                <i class="fa-solid fa-futbol" style="font-size: 20px;"></i>
            </div>
            <p id="sports" class="mt-3">Sports</p>
        </div>

        <!-- Facility Item -->
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex flex-column align-items-center mb-4">
            <div 
                style="padding: 10px; border: 1px solid transparent; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s, border-color 0.3s; text-align: center; border-color:green;" 
                onmouseover="this.style.backgroundColor='blue';  document.getElementById('medical').style.display='block';" 
                onmouseout="this.style.backgroundColor=''; this.style.borderColor='';">
                <i class="fa fa-medkit fa-lg" style="font-size: 20px;"></i>
            </div>
            <p id="medical" class="mt-3">Medical</p>
        </div>
    </div> --}}
</div>


    {{-- End CAMPUS FACILITIES  --}}

    <div class="container mb-5">
        <div class="text-center">
            <div class="d-inline-block align-middle" style="width: 12%;">
                <hr class="w-100">
            </div>
            <p class="d-inline-block align-middle mb-0">APPLICATIONS OPEN</p>
            <div class="d-inline-block align-middle" style="width: 60%;">
                <hr class="w-100">
            </div>
        </div>

        
    
        <div class="row mt-3 gap-2 justify-content-center mx-3">
            <div class="col-md-5 col-sm-8 border py-2 px-2 text-center rounded-pill bg-light">
                NIIT Application
            </div>
            <div class="col-md-5 col-sm-8 py-2 px-2 text-center border rounded-pill bg-light">
                UPES Application
            </div>
        </div>
    
        <div class=" row mt-3 gap-2 justify-content-center mx-3">
            <div class="col-md-5  border py-2 px-2 text-center rounded-pill bg-light">
                NIIT Application
            </div>
            <div class="col-md-5 col-sm-8 py-2 px-2 text-center border rounded-pill bg-light">
                UPES Application
            </div>
        </div>
    
        <div class="mt-5 text-center">
            <div class="border border-1 py-3">
                <h2 class="fs-4">APPLICATIONS CLOSING SOON</h2>
            </div>
            <div class="border border-1 py-3">
                @if ($applicationsOpeningSoonPosts && $applicationsOpeningSoonPosts->isNotEmpty())
                    @foreach ($applicationsOpeningSoonPosts as $post) <!-- Loop through each post -->
                        <p class="mb-3">{{ $post->Title }}</p>
                        <a href="{{ route('post.show', $post->PostID) }}">
                        <button class="px-5 py-1 btn btn-danger">Apply Now</button>
                    </a>
                    @endforeach
                @else
                    <p>No mode of admission available for this college.</p>
                @endif
            </div>
        </div>
    
    </div>
    {{-- Modde of Admission --}}
    
    @if ($college->admissionmode && $college->admissionmode->isNotEmpty())
    <div id="admissionsss" class="container">
        <h2 style="font-size: 20px;">MODE OF ADMISSION</h2>
        <hr class="w-65" style="color: black; font-weight: bold !important; margin: auto;">
        
        <div class="my-4">
            @foreach($college->admissionmode as $admissionmode)
                <p>
                    <i class="fa-solid fa-star"></i>
                    {{$admissionmode->admissionmode}}
                </p>
            @endforeach
        </div>
    </div>
@else
    <p>No Mode of admission available for this college.</p>
@endif

    {{-- End Mode Admission --}}


    {{-- COURSES OFFERED --}}


    <!--<div class="conatiner my-5">-->
    <!--    <h2 style="font-size: 20px;">COURSES OFFERED</h2>-->
    <!--    <hr class="w-65" style="color: black; font-weight: bold !important; margin: auto;">-->
    <!--    <div class="row my-4">-->
    <!--        <div class="col-md-4 col-sm-12 col-12">-->
    <!--            <form id="cp-courses-form" style="width: 100%; height: 150px;">-->
    <!--                <select id="courses-select" style="width: 100%; height: 30%;">-->
    <!--                    <option value="courses-default" selected disabled>Courses</option>-->
    <!--                    <optgroup label="4 years">-->
    <!--                        <option value="courses-41">B.E./B.Tech.</option>-->
    <!--                        <option value="courses-42">B.Sc.</option>-->
    <!--                    </optgroup>-->
    <!--                </select>-->
    <!--            </form>-->
    <!--        </div>-->
    <!--    </div>-->

    <!--</div>-->

    {{-- End COURSES OFFERED  --}}
    {{-- Seat Matrix --}}


    <!--<div class="conatiner">-->
    <!--    <h2 style="font-size: 20px;">SEAT MATRIX</h2>-->
    <!--    <hr class="w-65" style="color: black; font-weight: bold !important; margin: auto;">-->
    <!--    <a class="" href="">-->
    <!--        <h6 class="my-3">IIT Mandi Seat Matrix</h6>-->
    <!--    </a>-->

    <!--</div>-->

    {{-- End Seat Matrix --}}

    {{-- Cuttof Rank --}}
    {{-- <div class="container my-5">
        <h2 style="font-size: 20px;">CUTOFF RANKS (OPENING & CLOSING RANKS)</h2>
        <hr class="w-65" style="color: black; font-weight: bold !important; margin: auto;">
        <div class="row my-2">
            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-1" data-bs-toggle="tab" href="#tabs-1" role="tab"
                        aria-controls="tabs-1" aria-selected="true">Tab 1</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-2" data-bs-toggle="tab" href="#tabs-2" role="tab"
                        aria-controls="tabs-2" aria-selected="false">Tab 2</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-3" data-bs-toggle="tab" href="#tabs-3" role="tab"
                        aria-controls="tabs-3" aria-selected="false">Tab 3</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tabs-1" role="tabpanel" aria-labelledby="tab-1">Tab 1
                    content</div>
                <div class="tab-pane fade" id="tabs-2" role="tabpanel" aria-labelledby="tab-2">Tab 2 content</div>
                <div class="tab-pane fade" id="tabs-3" role="tabpanel" aria-labelledby="tab-3">Tab 3 content</div>
            </div>
        </div>
    </div> --}}


    {{-- End Cutoffe Rank --}}

    <div class="container my-3">
        <p><strong>Courses:</strong></p>
    
        <!-- Filter Form for Courses -->
        <form id="filterForm" action="{{ route('filter.branches', ['id' => $college->id]) }}" method="GET">
            <div class="form-group">
                <label for="course">Select Course:</label>
                <select name="course_id" id="course" class="form-control">
                    <option value="">-- Select Course --</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                    @endforeach
                </select>
            </div>
    
            <button type="submit" class="btn btn-primary">Filter Branches</button>
        </form>
    
        <!-- Display Filtered Branches -->
        <ul id="branchList">
            @if(isset($filteredBranches) && count($filteredBranches) > 0)
                @foreach($filteredBranches as $branch)
                    <li>{{ $branch->branch_name }}</li>
                @endforeach
            @endif
        </ul>
    </div>
    
    {{-- Fee Structure --}}

    <div class="container-fluid my-5" id="fees">
        <h2 style="font-size: 20px;" id="fees">FEE STRUCTURE</h2>
        <hr class="w-65" style="color: black; font-weight: bold !important; margin: auto;">
        <div class="my-3 p-1 ">
            @if ($college->fees && $college->fees->isNotEmpty())
            <table style="width: 100%; border-collapse: collapse;">
                <h3 class="text-center text-light"
                    style="font-size: 16px; background-color:#04AA6D; padding:20px; text-center"> INSTITUTE FEE</h3>
                <tr style="background-color: #04AA6D; color: white;">
                    <th
                        style="border: 1px solid #ddd; padding: 8px; text-align: left; padding-top: 12px; padding-bottom: 12px; width: 33.33%;">
                        Particulars</th>
                    <th
                        style="border: 1px solid #ddd; padding: 8px; text-align: left; padding-top: 12px; padding-bottom: 12px; width: 33.33%;">
                        Amount</th>

                </tr>
              
                @foreach ($college->fees as $fee)
                <tr style="border: 1px solid #ddd; background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $fee->type }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $fee->amount }}</td>
                </tr>
            @endforeach
               
            </table>
            @endif
        </div>
        <div class="my-3 p-1 ">
            @if ($college->hostelfee && $college->hostelfee->isNotEmpty())
            <table style="width: 100%; border-collapse: collapse;">
                <h3 class="text-center" style="font-size: 16px; background-color:#04AA6D; padding:20px;color:#ffff">
                    HOSTEL FEE</h3>
                <tr style="background-color: #04AA6D; color: white;">
                    <th
                        style="border: 1px solid #ddd; padding: 8px; text-align: left; padding-top: 12px; padding-bottom: 12px; width: 33.33%;">
                        Particulars</th>
                    <th
                        style="border: 1px solid #ddd; padding: 8px; text-align: left; padding-top: 12px; padding-bottom: 12px; width: 33.33%;">
                        Amount</th>

                </tr>
                @foreach ($college->hostelfee as $hostelfee)
                <tr style="border: 1px solid #ddd; background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd; padding: 8px;">{{$hostelfee->type}}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{$hostelfee->amount}}</td>
                </tr>
                @endforeach
            </table>
            @endif
        </div>
    </div>

    {{-- End Fee Structure --}}

    {{-- FEE WAIVERS --}}

    <div class="conatiner" id="feewavers">
    <h2 style="font-size: 20px;">FEE WAIVERS</h2>
        <hr class="w-65" style="color: black; font-weight: bold !important; margin: auto;">

        <div class="my-4">
            @if ($college->feewavers && $college->feewavers->isNotEmpty())
            @forEach($college->feewavers as $feewavers)
            <p>
                <i class="fa-solid fa-star"></i>
               {{$feewavers->title}}
            </p>
              @endforeach
            @else
            <p>
                <i class="fa-solid fa-star"></i>
               Fee Waivers data is Not available
            </p>
 
            @endif
        </div>
    </div>



    {{-- End FEE WAIVERS --}}

    {{-- PLACEMENTS --}}

    <div id="placement" class="conatiner my-5">
        <h2 style="font-size: 20px;">PLACEMENTS</h2>
        <hr class="w-65" style="color: black; font-weight: bold !important; margin: auto;">

        <div class="my-3 p-1 ">
            @if ($college->branchplacement && $college->branchplacement->isNotEmpty())
            <table style="width: 100%; border-collapse: collapse;">

                <tr style="background-color: #04AA6D; color: white;">
                    <th
                        style="border: 1px solid #ddd; padding: 8px; text-align: left; padding-top: 12px; padding-bottom: 12px; width: 33.33%;">
                        Branch</th>
                    <th
                        style="border: 1px solid #ddd; padding: 8px; text-align: left; padding-top: 12px; padding-bottom: 12px; width: 33.33%;">
                        Placed</th>

                </tr>
                @foreach ($college->branchplacement as $branchplacement)
                <tr style="border: 1px solid #ddd; background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd; padding: 8px;">{{$branchplacement->branch}}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{$branchplacement->placed}}</td>

                </tr>

               @endforeach
               
            </table>
            @endif
        </div>
    </div>



    {{-- End PLACEMENTS --}}


    {{-- MEDIAN PACKAGE OFFERED (BRANCHWISE) --}}

    <div class="conatiner my-5">
        <h2 style="font-size: 20px;">MEDIAN PACKAGE OFFERED (BRANCHWISE)</h2>
        <hr class="w-65" style="color: black; font-weight: bold !important; margin: auto;">

        <div class="my-3 p-1 " >
            @if ($college->medianpackegeoffer && $college->medianpackegeoffer->isNotEmpty())
            <table style="width: 100%; border-collapse: collapse;">

                <tr style="background-color: #04AA6D; color: white;">
                    <th
                        style="border: 1px solid #ddd; padding: 8px; text-align: left; padding-top: 12px; padding-bottom: 12px; width: 33.33%;">
                        Branch</th>
                    <th
                        style="border: 1px solid #ddd; padding: 8px; text-align: left; padding-top: 12px; padding-bottom: 12px; width: 33.33%;">
                        CTC</th>

                </tr>
                @foreach ($college->medianpackegeoffer as $medianpackegeoffer)
                <tr style="border: 1px solid #ddd; background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $medianpackegeoffer->branch }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $medianpackegeoffer->ctc }}</td>

                </tr>
              
                @endforeach
               
            </table>
            @endif
        </div>
    </div>



    {{-- End MEDIAN PACKAGE OFFERED (BRANCHWISE) --}}


    {{-- AVERAGE PACKAGE OFFERED (BRANCHWISE) --}}

    <div class="conatiner my-5">
        <h2 style="font-size: 20px;">AVERAGE PACKAGE OFFERED (BRANCHWISE)</h2>
        <hr class="w-65" style="color: black; font-weight: bold !important; margin: auto;">

        <div class="my-3 p-1 " style="background-color:#ffeeee;">
            @if ($college->averagepackagedoffer && $college->averagepackagedoffer->isNotEmpty())
            <table style="width: 100%; border-collapse: collapse;">

                <tr style="background-color: #04AA6D; color: white;">
                    <th
                        style="border: 1px solid #ddd; padding: 8px; text-align: left; padding-top: 12px; padding-bottom: 12px; width: 33.33%;">
                        Branch</th>
                    <th
                        style="border: 1px solid #ddd; padding: 8px; text-align: left; padding-top: 12px; padding-bottom: 12px; width: 33.33%;">
                        Median CTC (in LPA)</th>

                </tr>
                @foreach ($college->averagepackagedoffer as $averagepackagedoffer)
                <tr style="border: 1px solid #ddd; background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $averagepackagedoffer->branch }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $averagepackagedoffer->avgctc }}</td>

                </tr>
              
                @endforeach
               
            </table>
            @endif
        </div>
    </div>



    {{-- AVERAGE PACKAGE OFFERED (BRANCHWISE) --}}



    {{-- TOP RECRUITERS --}}

    <div class="conatiner">
        <h2 style="font-size: 20px;">TOP RECRUITERS</h2>
        <hr class="w-65" style="color: black; font-weight: bold !important; margin: auto;">
        @if ($college->toprecruite && $college->toprecruite->isNotEmpty())
        <div class="my-4">
            @foreach ($college->toprecruite as $toprecruite)
            <p>
                <i class="fa-solid fa-star"></i>
               {{$toprecruite->title}}
            </p>
            @endforeach
        </div>
        @endif
    </div>


    {{-- End TOP RECRUITERS --}}

    {{-- Past Recruiter --}}

    <div class="container my-5">
        <h2 class="p-3 " style="font-size: 20px; background-color:#04AA6D;" data-toggle="collapse"
            data-target="#top-recruiters">PAST RECRUITERS

            <img class="ml-4" src="https://cdn-icons-png.flaticon.com/128/3682/3682895.png" alt=""
                height="24px" width="24px">

        </h2>
        <hr class="w-65" style="color: black; font-weight: bold !important; margin: auto;">

        <div id="top-recruiters" class="collapse my-4">
            @if ($college->pastrecruit && $college->pastrecruit->isNotEmpty())
            @foreach ($college->pastrecruit as $pastrecruit) 
            <p>
                <i class="fa-solid fa-star"></i>
                {{$pastrecruit->title}}
            </p>
           @endforeach
           @endif
        </div>
    </div>

    {{-- End Past Recruiter --}}


    {{-- Website --}}

    <div class="container my-5">
        <h2 style="font-size: 20px;">WEBSITEEES</h2>
        <hr class="w-65" style="color: black; font-weight: bold !important; margin: auto;">
        <div class="my-3">
            <a href="{{$college->websitelink}}">
                <button class="px-3 py-2" style="background-color: #ffeeee">
                  {{$college->websitetitle}}
                </button>
            </a>
        </div>
    </div>


    {{-- End Website --}}

  {{-- Similar College --}}

   <section id="content" data-onepage-settings="{&quot;offset&quot;:50,&quot;speed&quot;:800,&quot;easing&quot;:false}">
    <div class="content-wrap pb-0">
        <div class="container">

            <div class="fancy-title title-center title-border">
                <h3>Explore Similar Colleges</h3>
            </div>

            <div id="explore-more-colleges" class="owl-carousel image-carousel carousel-widget mb-6 owl-loaded owl-drag with-carousel-dots"
                 data-items-xs="1" data-items-sm="2" data-items-lg="3">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0.25s;">

                        @foreach($similarcollege as $similarcollege)
                        <div class="owl-item" style="width: 100%; margin-right: 20px;">
                            <div class="oc-item">
                                <a href="#" target="_blank">
                                    <img src="{{ url($similarcollege->image) }}" alt="{{ $similarcollege->title }}" class="college-img">
                                </a>
                                <div class="college-details">
                                    <h6 class="college-title text-center">{{ $similarcollege->title }}</h6>
                                    <p class="card-text">{{ $similarcollege->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev"><i class="uil uil-angle-left-b"></i></button>
                    <button type="button" role="presentation" class="owl-next"><i class="uil uil-angle-right-b"></i></button>
                </div>
                {{-- <div class="owl-dots">
                    <button role="button" class="owl-dot"><span></span></button>
                    <button role="button" class="owl-dot active"><span></span></button>
                </div> --}}
            </div>

        </div>
    </div>
</section>


<section id="content" data-onepage-settings="{&quot;offset&quot;:50,&quot;speed&quot;:800,&quot;easing&quot;:false}">
    <div class="content-wrap pb-0">
        <div class="container">

            <div class="fancy-title title-center title-border">
                <h3>Explore Nearby Colleges</h3>
            </div>

            <div id="explore-more-colleges" class="owl-carousel image-carousel carousel-widget mb-6 owl-loaded owl-drag with-carousel-dots"
                 data-items-xs="1" data-items-sm="2" data-items-lg="3">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0.25s;">

                        @foreach($nearbyColleges as $nearbyColleges)
                        <div class="owl-item" style="width: 100%; margin-right: 20px;">
                            <div class="oc-item">
                                <a href="#" target="_blank">
                                    <img src="{{ url($nearbyColleges->image) }}" alt="{{ $nearbyColleges->title }}" class="college-img">
                                </a>
                                <div class="college-details">
                                    <h6 class="college-title text-center">{{ $nearbyColleges->title }}</h6>
                                    <p class="card-text">{{ $nearbyColleges->description }}</p>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev"><i class="uil uil-angle-left-b"></i></button>
                    <button type="button" role="presentation" class="owl-next"><i class="uil uil-angle-right-b"></i></button>
                </div>
                {{-- <div class="owl-dots">
                    <button role="button" class="owl-dot"><span></span></button>
                    <button role="button" class="owl-dot active"><span></span></button>
                </div> --}}
            </div>

        </div>
    </div>
</section>



{{-- End Nearby College --}}

{{-- Explore More College --}}



<section id="content" data-onepage-settings="{&quot;offset&quot;:50,&quot;speed&quot;:800,&quot;easing&quot;:false}">
    <div class="content-wrap pb-0">
        <div class="container">

            <div class="fancy-title title-center title-border">
                <h3>Explore More Colleges</h3>
            </div>

            <div id="explore-more-colleges" class="owl-carousel image-carousel carousel-widget mb-6 owl-loaded owl-drag with-carousel-dots"
                 data-items-xs="1" data-items-sm="2" data-items-lg="3">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0.25s;">

                        @foreach($college->exploremorecollege as $exploreCollege)
                        <div class="owl-item" style="width: 100%; margin-right: 20px;">
                            <div class="oc-item">
                                <a href="#" target="_blank">
                                    <img src="{{ url($exploreCollege->image) }}" alt="{{ $exploreCollege->title }}" class="college-img">
                                </a>
                                <div class="college-details">
                                    <h6 class="college-title text-center">{{ $exploreCollege->title }}</h6>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev"><i class="uil uil-angle-left-b"></i></button>
                    <button type="button" role="presentation" class="owl-next"><i class="uil uil-angle-right-b"></i></button>
                </div>
                {{-- <div class="owl-dots">
                    <button role="button" class="owl-dot"><span></span></button>
                    <button role="button" class="owl-dot active"><span></span></button>
                </div>
            </div> --}}

        </div>
    </div>
</section>


@endsection

<script src="{{ asset('js/app.js') }}"></script>

<style>
    /* Default size for larger screens */
    .icon-container {
        width: 50px;
        height: 50px;
    }

    /* Adjust size for mobile screens */
    @media (max-width: 768px) {
        .icon-container {
            width: 40px;
            height: 40px;
        }
    }
</style>

<style>
    @media (max-width: 992px) { /* Adjust scrolling for tablets and mobile */
        .row {
            flex-wrap: nowrap;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch; /* Smooth scrolling for iOS */
        }
        .facility-item {
            min-width: 150px; /* Set a min width for each facility item */
        }
    }
</style>




<style>
    @keyframes fadeOpacity {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.5;
        }
    }

    .carousel-inner {
        display: flex;
    }

    .carousel-item {
        flex: 1 0 auto;
    }

    .carousel-card {
        margin: 0 10px;
        flex: 1;
    }
</style>
<style>


    html {
    scroll-behavior: smooth;
}
</style>

<style>
    /* Ensures images and cards have a consistent size */
.oc-item {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.college-img {
  width: 100%;
  height: 200px; /* Adjust the height as needed */
  object-fit: cover;
  border-radius: 8px;
}

.college-details {
 
  padding: 15px;
}

.owl-carousel .owl-item {
  margin-right: 20px;
}

@media (min-width: 992px) {
  /* Large screens (3 items) */
  .owl-item {
    width: 33.33%;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  /* Medium screens (2 items) */
  .owl-item {
    width: 50%;
  }
}

@media (max-width: 767px) {
  /* Small screens (1 item) */
  .owl-item {
    width: 100%;
  }
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Intercept form submission
        $('#filterForm').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            // Get the form action URL and selected course ID
            var formAction = $(this).attr('action');
            var courseId = $('#course').val();

            // Perform AJAX request
            $.ajax({
                url: formAction,
                type: 'GET',
                data: { course_id: courseId },
                success: function(response) {
                    // Clear the branch list first
                    $('#branchList').empty();

                    // Append new branches to the list
                    if (response.filteredBranches && response.filteredBranches.length > 0) {
                        $.each(response.filteredBranches, function(index, branch) {
                            $('#branchList').append('<li>' + branch.branch_name + '</li>');
                        });
                    } else {
                        $('#branchList').append('<li>No branches found for the selected course.</li>');
                    }
                },
                error: function(xhr) {
                    // Handle errors
                    console.log(xhr.responseText);
                    $('#branchList').append('<li>Something went wrong, try again later.</li>');
                }
            });
        });
    });
</script>


{{-- <script>
    document.getElementById('course').addEventListener('change', function() {
    const courseId = this.value;
    const collegeId = "{{ $college->id }}"; // Use Blade to get the college ID

    // Make an AJAX request to fetch filtered branches if a course is selected
    if (courseId) {
        fetch(`/college/${collegeId}/filter-branches?course_id=${courseId}`)
            .then(response => response.json())
            .then(data => {
                const branchList = document.getElementById('branchList');
                branchList.innerHTML = ''; // Clear existing branches

                if (data.filteredBranches.length > 0) {
                    data.filteredBranches.forEach(branch => {
                        const listItem = document.createElement('li');
                        listItem.textContent = branch.branch_name;
                        branchList.appendChild(listItem);
                    });
                } else {
                    branchList.innerHTML = '<li>No branches available for this course.</li>';
                }
            })
            .catch(error => console.error('Error fetching branches:', error));
    } else {
        // If no course is selected, clear the branch list
        document.getElementById('branchList').innerHTML = '<li>Select a course to see branches.</li>';
    }
});
</script> --}}


<!--</script>-->


<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
