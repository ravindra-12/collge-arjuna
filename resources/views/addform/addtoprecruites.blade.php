<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Top Recruiters</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    @extends('dashboardlayout')

     @section('content')
    <div class="container my-3">
       
        <h3 class="fs-4 mb-3">Add Top Recruiters</h3>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('toprecruiters.store') }}" method="POST">
            @csrf
            <div id="toprecruiter-section">
                <!-- Template for new recruiters -->
                <div class="toprecruiter-item">
                    <div class="form-group">
                        <label for="college_info_id">College Info ID:</label>
                        <input type="number" class="form-control" name="toprecruiter[0][college_info_id]" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="toprecruiter[0][title]" required>
                    </div>
                    <button type="button" class="btn btn-danger remove-toprecruiter">Remove</button>
                    <hr>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="addTopRecruiter()">Add Top Recruiter</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    @endsection

    <script>
        let topRecruiterCount = 1;

        function addTopRecruiter() {
            const section = document.getElementById('toprecruiter-section');
            const template = document.querySelector('.toprecruiter-item').cloneNode(true);
            template.style.display = 'block';
            template.querySelector('input[name="toprecruiter[0][college_info_id]"]').name = `toprecruiter[${topRecruiterCount}][college_info_id]`;
            template.querySelector('input[name="toprecruiter[0][title]"]').name = `toprecruiter[${topRecruiterCount}][title]`;
            template.id = '';
            section.appendChild(template);
            topRecruiterCount++;
        }

        document.addEventListener('click', function(e) {
            if (e.target && e.target.className.includes('remove-toprecruiter')) {
                e.target.closest('.toprecruiter-item').remove();
            }
        });
    </script>
</body>
</html>
