<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Fees</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    

        @extends('dashboardlayout')

        @section('content')
       <div class="container my-3">
           @if(session('success'))
               <div class="alert alert-success">{{ session('success') }}</div>
           @endif
   
   
           <h3 class="fs-4 mb-3">Add Institute Fee</h3>


        <form action="{{ route('fees.store') }}" method="POST">
            @csrf
            <div id="fee-section">
                <!-- Template for new fees -->
                <div class="fee-item">
                    <div class="form-group">
                        <label for="college_info_id">College Info ID:</label>
                        <input type="number" class="form-control" name="fees[0][college_info_id]" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Type:</label>
                        <input type="text" class="form-control" name="fees[0][type]" required>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount:</label>
                        <input type="text" class="form-control" name="fees[0][amount]" required>
                    </div>
                    <button type="button" class="btn btn-danger remove-fee">Remove</button>
                    <hr>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="addFee()">Add Fee</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

@endsection

    <script>
        let feeCount = 1;

        function addFee() {
            const section = document.getElementById('fee-section');
            const template = document.querySelector('.fee-item').cloneNode(true);
            template.style.display = 'block';
            template.querySelector('input[name="fees[0][college_info_id]"]').name = `fees[${feeCount}][college_info_id]`;
            template.querySelector('input[name="fees[0][type]"]').name = `fees[${feeCount}][type]`;
            template.querySelector('input[name="fees[0][amount]"]').name = `fees[${feeCount}][amount]`;
            template.id = '';
            section.appendChild(template);
            feeCount++;
        }

        document.addEventListener('click', function(e) {
            if (e.target && e.target.className.includes('remove-fee')) {
                e.target.closest('.fee-item').remove();
            }
        });
    </script>
</body>
</html>
