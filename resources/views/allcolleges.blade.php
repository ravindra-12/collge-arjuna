@extends('dashboardlayout')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="row my-5">
  <h3 class="fs-4 mb-3">All Colleges</h3>
 <div class="container"><table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">College Name</th>
        <th scope="col">Location</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>
      </tr>
    </thead>
    <tbody>
        @foreach($college as $college)
      <tr>
     
        <td>{{ $college['id']}}</td>
        <td>{{ $college['title']}}</td>
        <td> {{ $college['location']}}</td>
        <td>

          <form action="{{route('collegeinfo.delete', $college->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this college?');">
              Delete
            </button>
          </form>
        
        </td>
        <td>
          <a class="btn btn-primary" href="{{ route('college.edit', ['id' => $college->id]) }}">
            Update
        </a>
        
         
        </td>
        {{-- <td><img
            src="https://mdbootstrap.com/img/new/avatars/8.jpg"
            alt=""
            style="width: 45px; height: 45px"
            class="rounded-circle"
            /></td>
      </tr> --}}
     @endforeach
    </tbody>
  </table>

 </div>
</div>

@endsection