<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Hostel Fees</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    

        @extends('dashboardlayout')

        @section('content')
       <div class="container my-3">
           @if(session('success'))
               <div class="alert alert-success">{{ session('success') }}</div>
           @endif
   
   
           <h3 class="fs-4 mb-3">Add Hostel Fees</h3>

        <form action="{{ route('hostel-fees.store') }}" method="POST">
            @csrf
            <div id="hostel-fee-section">
                <!-- Template for new hostel fees -->
                <div class="hostel-fee-item">
                    <div class="form-group">
                        <label for="college_info_id">College Info ID:</label>
                        <input type="number" class="form-control" name="hostel_fees[0][college_info_id]" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Type:</label>
                        <input type="text" class="form-control" name="hostel_fees[0][type]" required>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount:</label>
                        <input type="text" class="form-control" name="hostel_fees[0][amount]" required>
                    </div>
                    <button type="button" class="btn btn-danger remove-hostel-fee">Remove</button>
                    <hr>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="addHostelFee()">Add Hostel Fee</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

  @endsection

    <script>
        let hostelFeeCount = 1;

        function addHostelFee() {
            const section = document.getElementById('hostel-fee-section');
            const template = document.querySelector('.hostel-fee-item').cloneNode(true);
            template.style.display = 'block';
            template.querySelector('input[name="hostel_fees[0][college_info_id]"]').name = `hostel_fees[${hostelFeeCount}][college_info_id]`;
            template.querySelector('input[name="hostel_fees[0][type]"]').name = `hostel_fees[${hostelFeeCount}][type]`;
            template.querySelector('input[name="hostel_fees[0][amount]"]').name = `hostel_fees[${hostelFeeCount}][amount]`;
            template.id = '';
            section.appendChild(template);
            hostelFeeCount++;
        }

        document.addEventListener('click', function(e) {
            if (e.target && e.target.className.includes('remove-hostel-fee')) {
                e.target.closest('.hostel-fee-item').remove();
            }
        });
    </script>
</body>
</html>
