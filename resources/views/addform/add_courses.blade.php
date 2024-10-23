<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Course</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

@extends('dashboardlayout')

@section('content')
<div class="container my-3">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <h3 class="fs-4 mb-3">Add Course with Branches</h3>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div id="course-section">
            <!-- Single Course Item -->
            <div class="course-item">
                <div class="form-group">
                    <label for="college_info_id">College Info ID:</label>
                    <input type="number" class="form-control" name="college_info_id" required>
                </div>
                <div class="form-group">
                    <label for="course_name">Course Name:</label>
                    <input type="text" class="form-control" name="course_name" required>
                </div>
                <div class="form-group">
                    <label for="duration">Duration (years):</label>
                    <input type="number" class="form-control" name="duration" required>
                </div>
                <div id="branches-section">
                    <div class="branch-item">
                        <div class="form-group">
                            <label for="branch_name">Branch Name:</label>
                            <input type="text" class="form-control" name="branches[]" required>
                        </div>
                        <button type="button" class="btn btn-danger remove-branch">Remove Branch</button>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" onclick="addBranch()">Add Branch</button>
                <hr>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Submit Course with Branches</button>
    </form>
</div>

@endsection

<script>
    function addBranch() {
        const branchesSection = document.getElementById('branches-section');
        const branchTemplate = document.querySelector('.branch-item').cloneNode(true);
        branchTemplate.querySelector('input[name="branches[]"]').value = ''; // Clear branch name
        branchesSection.appendChild(branchTemplate);
    }

    document.addEventListener('click', function(e) {
        if (e.target && e.target.className.includes('remove-branch')) {
            e.target.closest('.branch-item').remove();
        }
    });
</script>
</body>
</html>
