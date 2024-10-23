<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Branch Placement</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
   
        @extends('dashboardlayout')

        @section('content')
       <div class="container my-3">
           @if(session('success'))
               <div class="alert alert-success">{{ session('success') }}</div>
           @endif
   
   
           <h3 class="fs-4 mb-3">Add Branch Placement</h3>


        <form action="{{ route('branch-placements.store') }}" method="POST">
            @csrf
            <div id="branch-placement-section">
                <!-- Template for new branch placements -->
                <div class="branch-placement-item">
                    <div class="form-group">
                        <label for="college_info_id">College Info ID:</label>
                        <input type="number" class="form-control" name="branch_placements[0][college_info_id]" required>
                    </div>
                    <div class="form-group">
                        <label for="branch">Branch:</label>
                        <input type="text" class="form-control" name="branch_placements[0][branch]" required>
                    </div>
                    <div class="form-group">
                        <label for="placed">Placed:</label>
                        <input type="text" class="form-control" name="branch_placements[0][placed]" required>
                    </div>
                    <button type="button" class="btn btn-danger remove-branch-placement">Remove</button>
                    <hr>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="addBranchPlacement()">Add Branch Placement</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

  @endsection


    <script>
        let branchPlacementCount = 1;

        function addBranchPlacement() {
            const section = document.getElementById('branch-placement-section');
            const template = document.querySelector('.branch-placement-item').cloneNode(true);
            template.style.display = 'block';
            template.querySelector('input[name="branch_placements[0][college_info_id]"]').name = `branch_placements[${branchPlacementCount}][college_info_id]`;
            template.querySelector('input[name="branch_placements[0][branch]"]').name = `branch_placements[${branchPlacementCount}][branch]`;
            template.querySelector('input[name="branch_placements[0][placed]"]').name = `branch_placements[${branchPlacementCount}][placed]`;
            section.appendChild(template);
            branchPlacementCount++;
        }

        document.addEventListener('click', function(e) {
            if (e.target && e.target.className.includes('remove-branch-placement')) {
                e.target.closest('.branch-placement-item').remove();
            }
        });
    </script>
</body>
</html>
