<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <!-- Use Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- jQuery (required for Summernote) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 4 JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Summernote JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<style>
    #summernote {
        position: sticky;
        top: 0;
        z-index: 10;
        /*background-color: white;*/
    }
</style>
<body>
    @extends('dashboardlayout')

    @section('content')
   
    <div class="container my-3">
        <h1 class="mb-4">Create a New Post</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="UserID" value="{{ auth()->user()->id }}">

            <div class="form-group">
                <label for="Title">Title:</label>
                <input type="text" class="form-control" name="Title" id="Title" required>
            </div>

            <div class="form-group">
                <label for="categoryID">Category:</label>
                <select class="form-control" name="categoryID" id="categoryID" required>
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->CategoryID }}">{{ $category->CategoryName }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="Content">Content:</label>
                <textarea class="form-control" name="Content" id="summernote" required></textarea>
            </div>

            <!-- Meta Information -->
            <div class="form-group">
                <label for="meta-title">Meta Title:</label>
                <input type="text" class="form-control" name="meta-title" id="meta-title">
            </div>

            <div class="form-group">
                <label for="meta-description">Meta Description:</label>
                <textarea class="form-control" name="meta-description" id="meta-description" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="og-title">OG Title:</label>
                <input type="text" class="form-control" name="og-title" id="og-title">
            </div>

            <div class="form-group">
                <label for="og-description">OG Description:</label>
                <textarea class="form-control" name="og-description" id="og-description" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="twiter-title">Twitter Title:</label>
                <input type="text" class="form-control" name="twiter-title" id="twiter-title">
            </div>

            <div class="form-group">
                <label for="twiter-description">Twitter Description:</label>
                <textarea class="form-control" name="twiter-description" id="twiter-description" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Create Post</button>
        </form>
    </div>
    @endsection

    <!-- Initialize Summernote -->
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Enter your content',
                tabsize: 2,
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
</body>
</html>
