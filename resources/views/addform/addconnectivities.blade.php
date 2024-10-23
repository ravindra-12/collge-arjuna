<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Connectivity</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    


        @extends('dashboardlayout')

        @section('content')
       <div class="container my-3">
           @if(session('success'))
               <div class="alert alert-success">{{ session('success') }}</div>
           @endif
   
   
           <h3 class="fs-4 mb-3">Add Connectivity</h3>


        <form action="{{ route('connectivities.store') }}" method="POST">
            @csrf
            <div id="connectivity-section">
                <!-- Template for new connectivities -->
                <div class="connectivity-item">
                    <div class="form-group">
                        <label for="college_info_id">College Info ID:</label>
                        <input type="number" class="form-control" name="connectivities[0][college_info_id]" required>
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon:</label>
                        <input type="text" class="form-control" name="connectivities[0][icon]" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="connectivities[0][title]" required>
                    </div>
                    <div class="form-group">
                        <label for="km">KM:</label>
                        <input type="text" class="form-control" name="connectivities[0][km]" required>
                    </div>
                    <button type="button" class="btn btn-danger remove-connectivity">Remove</button>
                    <hr>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="addConnectivity()">Add Connectivity</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    @endsection
    <script>
        let connectivityCount = 1;

        function addConnectivity() {
            const section = document.getElementById('connectivity-section');
            const template = document.querySelector('.connectivity-item').cloneNode(true);
            template.style.display = 'block';
            template.querySelector('input[name="connectivities[0][college_info_id]"]').name = `connectivities[${connectivityCount}][college_info_id]`;
            template.querySelector('input[name="connectivities[0][icon]"]').name = `connectivities[${connectivityCount}][icon]`;
            template.querySelector('input[name="connectivities[0][title]"]').name = `connectivities[${connectivityCount}][title]`;
            template.querySelector('input[name="connectivities[0][km]"]').name = `connectivities[${connectivityCount}][km]`;
            section.appendChild(template);
            connectivityCount++;
        }

        document.addEventListener('click', function(e) {
            if (e.target && e.target.className.includes('remove-connectivity')) {
                e.target.closest('.connectivity-item').remove();
            }
        });
    </script>
</body>
</html>
