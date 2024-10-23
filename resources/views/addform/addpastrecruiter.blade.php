<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Past Recruiters</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    @extends('dashboardlayout')

     @section('content')
    <div class="container my-3">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif


        <h3 class="fs-4 mb-3">Add Past Recruiters</h3>
       

       

        <form action="{{ route('pastrecruiters.store') }}" method="POST">
            @csrf
            <div id="pastrecruiter-section">
                <!-- Template for new past recruiters -->
                <div class="pastrecruiter-item">
                    <div class="form-group">
                        <label for="college_info_id">College Info ID:</label>
                        <input type="number" class="form-control" name="pastrecruiter[0][college_info_id]" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="pastrecruiter[0][title]" required>
                    </div>
                    <button type="button" class="btn btn-danger remove-pastrecruiter">Remove</button>
                    <hr>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="addPastRecruiter()">Add Past Recruiter</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

@endsection

    <script>
        let pastRecruiterCount = 1;

        function addPastRecruiter() {
            const section = document.getElementById('pastrecruiter-section');
            const template = document.querySelector('.pastrecruiter-item').cloneNode(true);
            template.style.display = 'block';
            template.querySelector('input[name="pastrecruiter[0][college_info_id]"]').name = `pastrecruiter[${pastRecruiterCount}][college_info_id]`;
            template.querySelector('input[name="pastrecruiter[0][title]"]').name = `pastrecruiter[${pastRecruiterCount}][title]`;
            template.id = '';
            section.appendChild(template);
            pastRecruiterCount++;
        }

        document.addEventListener('click', function(e) {
            if (e.target && e.target.className.includes('remove-pastrecruiter')) {
                e.target.closest('.pastrecruiter-item').remove();
            }
        });
    </script>
</body>
</html>
