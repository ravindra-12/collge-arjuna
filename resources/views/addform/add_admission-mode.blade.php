<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Fee Wavers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
   


        @extends('dashboardlayout')

        @section('content')
       <div class="container my-3">
           @if(session('success'))
               <div class="alert alert-success">{{ session('success') }}</div>
           @endif
   
   
           <h3 class="fs-4 mb-3">Add Admission Mode</h3>

        <form action="{{ route('admissionmode.store') }}" method="POST">
            @csrf
            <div id="fee-waver-section">
                <!-- Template for new fee wavers -->
                <div class="fee-waver-item">
                    <div class="form-group">
                        <label for="college_info_id">College Info ID:</label>
                        <input type="number" class="form-control" name="fee_wavers[0][college_info_id]" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="fee_wavers[0][admissionmode]" required>
                    </div>
                    <button type="button" class="btn btn-danger remove-fee-waver">Remove</button>
                    <hr>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="addadmissionmode()">Add Admission Mode</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    @endsection

    <script>
        let feeWaverCount = 1;

        function addadmissionmode() {
            const section = document.getElementById('fee-waver-section');
            const template = document.querySelector('.fee-waver-item').cloneNode(true);
            template.style.display = 'block';
            template.querySelector('input[name="fee_wavers[0][college_info_id]"]').name = `fee_wavers[${feeWaverCount}][college_info_id]`;
            template.querySelector('input[name="fee_wavers[0][admissionmode]"]').name = `fee_wavers[${feeWaverCount}][admissionmode]`;
            template.id = '';
            section.appendChild(template);
            feeWaverCount++;
        }

        document.addEventListener('click', function(e) {
            if (e.target && e.target.className.includes('remove-fee-waver')) {
                e.target.closest('.fee-waver-item').remove();
            }
        });
    </script>
</body>
</html>
