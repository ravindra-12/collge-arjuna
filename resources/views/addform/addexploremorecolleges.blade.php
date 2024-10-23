<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Explore More Colleges</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
   

        @extends('dashboardlayout')

        @section('content')
       <div class="container my-3">
           @if(session('success'))
               <div class="alert alert-success">{{ session('success') }}</div>
           @endif
   
   
           <h3 class="fs-4 mb-3">Add Explore More Colleges</h3>


        <form action="{{ route('explore-more-colleges.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div id="explore-more-college-section">
                <!-- Template for new explore more colleges -->
                <div class="explore-more-college-item">
                    <div class="form-group">
                        <label for="college_info_id">College Info ID:</label>
                        <input type="number" class="form-control" name="explore_more_colleges[0][college_info_id]" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="explore_more_colleges[0][title]" required>
                    </div>
                    {{-- <div class="form-group">
                        <label for="link">Link:</label>
                        <input type="text" class="form-control" name="explore_more_colleges[0][link]" required>
                    </div> --}}
                    {{-- <div class="form-group">
                        <label for="image">Image URL:</label>
                        <input type="text" class="form-control" name="explore_more_colleges[0][image]" required>
                    </div> --}}
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" name="explore_more_colleges[0][image]" required>
                    </div>


                    <button type="button" class="btn btn-danger remove-explore-more-college">Remove</button>
                    <hr>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="addExploreMoreCollege()">Add Explore More College</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

   @endsection

    <script>
        let exploreMoreCollegeCount = 1;

        function addExploreMoreCollege() {
            const section = document.getElementById('explore-more-college-section');
            const template = document.querySelector('.explore-more-college-item').cloneNode(true);
            template.style.display = 'block';
            template.querySelector('input[name="explore_more_colleges[0][college_info_id]"]').name = `explore_more_colleges[${exploreMoreCollegeCount}][college_info_id]`;
            template.querySelector('input[name="explore_more_colleges[0][title]"]').name = `explore_more_colleges[${exploreMoreCollegeCount}][title]`;
            // template.querySelector('input[name="explore_more_colleges[0][link]"]').name = `explore_more_colleges[${exploreMoreCollegeCount}][link]`;
            template.querySelector('input[name="explore_more_colleges[0][image]"]').name = `explore_more_colleges[${exploreMoreCollegeCount}][image]`;
            template.id = '';
            section.appendChild(template);
            exploreMoreCollegeCount++;
        }

        document.addEventListener('click', function(e) {
            if (e.target && e.target.className.includes('remove-explore-more-college')) {
                e.target.closest('.explore-more-college-item').remove();
            }
        });
    </script>
</body>
</html>
