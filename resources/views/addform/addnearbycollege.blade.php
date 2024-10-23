<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Nearby Colleges</title>
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


        <h3 class="fs-4 mb-3">Add Nearby Colleges</h3>

        <form action="{{ route('nearbycolleges.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div id="nearbycollege-section">
                <!-- Template for new nearby colleges -->
                <div class="nearbycollege-item">
                    <div class="form-group">
                        <label for="college_info_id">College Info ID:</label>
                        <input type="number" class="form-control" name="nearbycolleges[0][college_info_id]" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="nearbycolleges[0][title]" required>
                    </div>
                    {{-- <div class="form-group">
                        <label for="image">Image URL:</label>
                        <input type="text" class="form-control" name="nearbycolleges[0][image]" required>
                    </div> --}}

                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" name="nearbycolleges[0][image]" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" name="nearbycolleges[0][description]" required></textarea>
                    </div>
                    <button type="button" class="btn btn-danger remove-nearbycollege">Remove</button>
                    <hr>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="addNearbyCollege()">Add Nearby College</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    @endsection


    <script>
        let nearbyCollegeCount = 1;

        function addNearbyCollege() {
            const section = document.getElementById('nearbycollege-section');
            const template = document.querySelector('.nearbycollege-item').cloneNode(true);
            template.style.display = 'block';
            template.querySelector('input[name="nearbycolleges[0][college_info_id]"]').name = `nearbycolleges[${nearbyCollegeCount}][college_info_id]`;
            template.querySelector('input[name="nearbycolleges[0][title]"]').name = `nearbycolleges[${nearbyCollegeCount}][title]`;
            template.querySelector('input[name="nearbycolleges[0][image]"]').name = `nearbycolleges[${nearbyCollegeCount}][image]`;
            template.querySelector('textarea[name="nearbycolleges[0][description]"]').name = `nearbycolleges[${nearbyCollegeCount}][description]`;
            template.id = '';
            section.appendChild(template);
            nearbyCollegeCount++;
        }

        document.addEventListener('click', function(e) {
            if (e.target && e.target.className.includes('remove-nearbycollege')) {
                e.target.closest('.nearbycollege-item').remove();
            }
        });
    </script>
</body>
</html>
