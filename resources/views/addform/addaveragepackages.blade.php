<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Average Package Offered</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    

        @extends('dashboardlayout')

        @section('content')
       <div class="container my-3">
           @if(session('success'))
               <div class="alert alert-success">{{ session('success') }}</div>
           @endif
   
   
           <h3 class="fs-4 mb-3">Add Average Package Offered</h3>



        <form action="{{ route('average-packages.store') }}" method="POST">
            @csrf
            <div id="average-package-section">
                <!-- Template for new average packages -->
                <div class="average-package-item">
                    <div class="form-group">
                        <label for="college_info_id">College Info ID:</label>
                        <input type="number" class="form-control" name="average_packages[0][college_info_id]" required>
                    </div>
                    <div class="form-group">
                        <label for="branch">Branch:</label>
                        <input type="text" class="form-control" name="average_packages[0][branch]" required>
                    </div>
                    <div class="form-group">
                        <label for="avgctc">Average CTC:</label>
                        <input type="text" class="form-control" name="average_packages[0][avgctc]" required>
                    </div>
                    <button type="button" class="btn btn-danger remove-average-package">Remove</button>
                    <hr>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="addAveragePackage()">Add Average Package</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

 @endsection


    <script>
        let averagePackageCount = 1;

        function addAveragePackage() {
            const section = document.getElementById('average-package-section');
            const template = document.querySelector('.average-package-item').cloneNode(true);
            template.style.display = 'block';
            template.querySelector('input[name="average_packages[0][college_info_id]"]').name = `average_packages[${averagePackageCount}][college_info_id]`;
            template.querySelector('input[name="average_packages[0][branch]"]').name = `average_packages[${averagePackageCount}][branch]`;
            template.querySelector('input[name="average_packages[0][avgctc]"]').name = `average_packages[${averagePackageCount}][avgctc]`;
            section.appendChild(template);
            averagePackageCount++;
        }

        document.addEventListener('click', function(e) {
            if (e.target && e.target.className.includes('remove-average-package')) {
                e.target.closest('.average-package-item').remove();
            }
        });
    </script>
</body>
</html>
