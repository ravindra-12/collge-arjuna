<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create Forum Post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    <style>
        /* Background image and blur effect */
        body {
            background: url('https://img.freepik.com/free-photo/yellow-question-mark_23-2149726202.jpg?ga=GA1.1.2042853308.1718348861&semt=ais_hybrid') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        /* Overlay with blur and opacity */
        .overlay {
            background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
            backdrop-filter: blur(8px); /* Blur effect */
            -webkit-backdrop-filter: blur(8px); /* Blur effect for Safari */
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #fff;
            text-align: center;
            margin-bottom: 2rem;
        }

        /* Form styles */
        .form-group label {
            color: #fff;
        }

        .btn-primary {
            width: 100%;
        }

    </style>
</head>

<body>
    
  
    
    <div class="overlay">
        <h1>Create New Post</h1>
        <form action="{{ route('forum_posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="postcontent">Content</label>
                <textarea class="form-control" name="postcontent" id="summernote" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Create Post</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Enter your content',
                tabsize: 2,
                height: 200,
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
