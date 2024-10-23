<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Median Package Offered</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    
@extends('dashboardlayout')

     @section('content')
    <div class="container my-3">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif


        <h3 class="fs-4 mb-3">Add Median Package Offered</h3>

        <form action="{{ route('medianpackages.store') }}" method="POST">
            @csrf
            <div id="medianpackage-section">
                <!-- Template for new median packages -->
                <div class="medianpackage-item">
                    <div class="form-group">
                        <label for="college_info_id">College Info ID:</label>
                        <input type="number" class="form-control" name="medianpackages[0][college_info_id]" required>
                    </div>
                    <div class="form-group">
                        <label for="branch">Branch:</label>
                        <input type="text" class="form-control" name="medianpackages[0][branch]" required>
                    </div>
                    <div class="form-group">
                        <label for="ctc">CTC:</label>
                        <input type="text" class="form-control" name="medianpackages[0][ctc]" required>
                    </div>
                    <button type="button" class="btn btn-danger remove-medianpackage">Remove</button>
                    <hr>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="addMedianPackage()">Add Median Package</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>


@endsection

    <script>
        let medianPackageCount = 1;

        function addMedianPackage() {
            const section = document.getElementById('medianpackage-section');
            const template = document.querySelector('.medianpackage-item').cloneNode(true);
            template.style.display = 'block';
            template.querySelector('input[name="medianpackages[0][college_info_id]"]').name = `medianpackages[${medianPackageCount}][college_info_id]`;
            template.querySelector('input[name="medianpackages[0][branch]"]').name = `medianpackages[${medianPackageCount}][branch]`;
            template.querySelector('input[name="medianpackages[0][ctc]"]').name = `medianpackages[${medianPackageCount}][ctc]`;
            template.id = '';
            section.appendChild(template);
            medianPackageCount++;
        }

        document.addEventListener('click', function(e) {
            if (e.target && e.target.className.includes('remove-medianpackage')) {
                e.target.closest('.medianpackage-item').remove();
            }
        });
    </script>
</body>
</html>
