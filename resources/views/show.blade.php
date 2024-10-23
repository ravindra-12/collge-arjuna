<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Info</title>
</head>
<body>
    <h1>{{ $college->title }}</h1>
    <h2>{{ $college->subtitle }}</h2>
    <img src="{{ $college->image }}" alt="{{ $college->title }}">
    <p>{{ $college->description }}</p>
    {{-- <h3>Overview</h3>
    @if($college->overview)
        <p>Institute Name: {{ $college->overview->institute_name }}</p>
        <p>Also Known As: {{ $college->overview->also_known_as }}</p>
        <p>Institute Type: {{ $college->overview->institute_type }}</p>
        <p>Established: {{ $college->overview->established }}</p>
        <p>Location: {{ $college->overview->location }}</p>
    @else
        <p>No overview available.</p>
    @endif --}}

    <h3>Connectivity</h3>
    @if($college->connectivity)
        @if($college->connectivity->isNotEmpty())
            <ul>
                @foreach($college->connectivity as $connectivity)
                    <li>
                        <img src="{{ $connectivity->icon }}" alt="{{ $connectivity->title }}" style="width: 20px; height: 20px;">
                        {{ $connectivity->title }}: {{ $connectivity->km }}
                    </li>
                @endforeach
            </ul>
        @else
            <p>No connectivity information available.</p>
        @endif
    @else
        <p>No connectivity information available.</p>
    @endif
    

    {{-- <h3>Also Known As</h3>
    @if($college->alsoKnownAs->count())
        <ul>
            @foreach($college->alsoKnownAs as $alias)
                <li>{{ $alias->title }}</li>
            @endforeach
        </ul>
    @else
        <p>No alternative names available.</p>
    @endif --}}

    <h3>Fees</h3>
    @if($college->fees->count())
        <ul>
            @foreach($college->fees as $fee)
                <li>{{ $fee->type }}: {{ $fee->amount }}</li>
            @endforeach
        </ul>
    @else
        <p>No fee information available.</p>
    @endif

    <h3>Hostel Fees</h3>
    @if($college->hostelfee->count())
        <ul>
            @foreach($college->hostelfee as $hostelfee)
                <li>{{ $hostelfee->type }}: {{ $hostelfee->amount }}</li>
            @endforeach
        </ul>
    @else
        <p>No fee information available.</p>
    @endif


    <h3>FEE WAIVERS</h3>
    @if($college->feewavers->count())
        <ul>
            @foreach($college->feewavers as $alias)
                <li>{{ $alias->title }}</li>
            @endforeach
        </ul>
    @else
        <p>No alternative names available.</p>
    @endif


    <h3>Placemet</h3>
    @if($college->Placement->count())
        <ul>
            @foreach($college->Placement as $Placement)
                <h3>{{ $Placement->year }}</h3>
                <img src="{{ $Placement->image}}" alt="" height=" 300px" width="500px">
            @endforeach
        </ul>
    @else
        <p>No alternative names available.</p>
    @endif
  

    <table>
        <tr>
          <th>Branch</th>
          <th>Placed (%)</th>
        
        </tr>

        @if($college->branchplacement->count())
        @foreach($college->branchplacement as $branchplacement)
        <tr>
          <td>{{$branchplacement->branch}}</td>
          <td>{{$branchplacement->placed}}</td>
        </tr>
      @endforeach
      </table>
      @else
      <p>No alternative data available.</p>
  @endif


  <h3>MEDIAN PACKAGE OFFERED (BRANCHWISE)</h3>


  <table>
    <tr>
      <th>Branch</th>
      <th>Median CTC (in LPA)</th>
    
    </tr>

    @if($college->medianpackegeoffer->count())
    @foreach($college->medianpackegeoffer as $medianpackegeoffer)
    <tr>
      <td>{{$medianpackegeoffer->branch}}</td>
      <td>{{$medianpackegeoffer->ctc}}</td>
    </tr>
  @endforeach
  </table>
  @else
  <p>No alternative data available.</p>
@endif


{{--  --}}


<h3>AVERAGE PACKAGE OFFERED (BRANCHWISE)</h3>


<table>
  <tr>
    <th>Branch</th>
    <th>Avg CTC (in LPA)</th>
  
  </tr>

  @if($college->averagepackagedoffer->count())
  @foreach($college->averagepackagedoffer as $averagepackagedoffer)
  <tr>
    <td>{{$averagepackagedoffer->branch}}</td>
    <td>{{$averagepackagedoffer->avgctc}}</td>
  </tr>
@endforeach
</table>
@else
<p>No alternative data available.</p>
@endif

{{--  --}}
<h3> Top Recruite </h3>
    @if($college->toprecruite->count())
        <ul>
            @foreach($college->toprecruite as $toprecruite)
                <li>{{ $toprecruite->title }}</li>
            @endforeach
        </ul>
    @else
        <p>No alternative names available.</p>
    @endif


{{--  --}}



{{--  --}}
<h3> Past Recruite </h3>
    @if($college->pastrecruit->count())
        <ul>
            @foreach($college->pastrecruit as $pastrecruit)
                <li>{{ $pastrecruit->title }}</li>
            @endforeach
        </ul>
    @else
        <p>No alternative names available.</p>
    @endif


    {{-- <h3>Website</h3>

    @if($college->website->count())
<a href="{{$college->website->link}}">

      <button >{{$college->website->title}}</button>
    </a>
      @else
      <p>No alternative names available.</p>
  @endif --}}

{{--  --}}

{{-- <h3>Application Open</h3>

@if($college->website->count())
@foreach($college->applicationopen as $Application)
<div class=" container row">
    <div class="md-6">
   <h3>{{$Application->title}}</h3>
    </div>

</div>
@endforeach

@else 
<div>
    <p>No alternative names available.</p>
</div>
@endif --}}
</body>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  
  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style>
</html>
