<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Similar Colleges</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    @extends('dashboardlayout')

     @section('content')
     @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="container my-3">
       
        <h3 class="fs-4 mb-3">Add Similar Colleges</h3>

        <form action="{{ route('similarcolleges.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div id="similarcollege-section">
                <div class="similarcollege-item">
                    <div class="form-group">
                        <label for="college_info_id">College Info ID:</label>
                        <input type="number" class="form-control" name="similarcolleges[0][college_info_id]" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="similarcolleges[0][title]" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" name="similarcolleges[0][image]" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" name="similarcolleges[0][description]" required></textarea>
                    </div>
                    {{-- <div class="form-group">
                        <label for="link">Link:</label>
                        <input type="text" class="form-control" name="similarcolleges[0][link]" required>
                    </div> --}}
                    <button type="button" class="btn btn-danger remove-similarcollege">Remove</button>
                    <hr>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="addSimilarCollege()">Add Similar College</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
     @endsection
    <script>
        let similarCollegeCount = 1;

        function addSimilarCollege() {
            const section = document.getElementById('similarcollege-section');
            const template = document.querySelector('.similarcollege-item').cloneNode(true);
            template.style.display = 'block';
            template.querySelector('input[name="similarcolleges[0][college_info_id]"]').name = `similarcolleges[${similarCollegeCount}][college_info_id]`;
            template.querySelector('input[name="similarcolleges[0][title]"]').name = `similarcolleges[${similarCollegeCount}][title]`;
            template.querySelector('input[name="similarcolleges[0][image]"]').name = `similarcolleges[${similarCollegeCount}][image]`;
            template.querySelector('textarea[name="similarcolleges[0][description]"]').name = `similarcolleges[${similarCollegeCount}][description]`;
            // template.querySelector('input[name="similarcolleges[0][link]"]').name = `similarcolleges[${similarCollegeCount}][link]`;
            // template.id = '';
            section.appendChild(template);
            similarCollegeCount++;
        }

        document.addEventListener('click', function(e) {
            if (e.target && e.target.className.includes('remove-similarcollege')) {
                e.target.closest('.similarcollege-item').remove();
            }
        });
    </script>
</body>
</html>
