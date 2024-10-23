@extends('dashboardlayout')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="container my-3">
       
    <h3 class="fs-4 mb-3">Add College Info</h3>

        <form action="{{ route('college-info.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="institute_name">Institute Name:</label>
                <input type="text" class="form-control" id="institute_name" name="institute_name" required>
            </div>
            <div class="form-group">
                <label for="also_known_as">Also Known As:</label>
                <input type="text" class="form-control" id="also_known_as" name="also_known_as" required>
            </div>
            <div class="form-group">
                <label for="institute_type">Institute Type:</label>
                <input type="text" class="form-control" id="institute_type" name="institute_type" required>
            </div>
            <div class="form-group">
                <label for="established">Established:</label>
                <input type="text" class="form-control" id="established" name="established" required>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            <div class="form-group">
                <label for="websitetitle">Website Title:</label>
                <input type="text" class="form-control" id="websitetitle" name="websitetitle" required>
            </div>
            <div class="form-group">
                <label for="websitelink">Website Link:</label>
                <input type="text" class="form-control" id="websitelink" name="websitelink" required>
            </div>
            <button class="my-3 btn btn-primary" type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

@endsection
