<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add International Rankings</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    @extends('dashboardlayout')

    @section('content')
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container my-3">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <h3 class="fs-4 mb-3">Add International Rankings</h3>

        <form action="{{ route('international-rankings.store') }}" method="POST">
            @csrf
            <div id="international-ranking-section">
                <!-- Template for new international ranking -->
                <div class="international-ranking-item">
                    <div class="form-group">
                        <label for="college_info_id">College Info ID:</label>
                        <input type="number" class="form-control" name="international_rankings[0][college_info_id]" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Category:</label>
                        <input type="text" class="form-control" name="international_rankings[0][category]" required>
                    </div>
                    <div class="form-group">
                        <label for="latest_ranking">Latest Ranking:</label>
                        <input type="text" class="form-control" name="international_rankings[0][latest_ranking]" required>
                    </div>
                    <div class="form-group">
                        <label for="previous_ranking">Previous Ranking:</label>
                        <input type="text" class="form-control" name="international_rankings[0][previous_ranking]">
                    </div>
                    <button type="button" class="btn btn-danger remove-international-ranking">Remove</button>
                    <hr>
                </div>
            </div>
        
            <button type="button" class="btn btn-primary" onclick="addInternationalRanking()">Add International Ranking</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        
    </div>
    @endsection

    <script>
       let rankingCount = 1;

function addInternationalRanking() {
    const section = document.getElementById('international-ranking-section');
    const template = document.querySelector('.international-ranking-item').cloneNode(true);

    // Clear the values of the cloned inputs
    template.querySelector('input[name^="international_rankings[0][college_info_id]"]').value = '';
    template.querySelector('input[name^="international_rankings[0][category]"]').value = '';
    template.querySelector('input[name^="international_rankings[0][latest_ranking]"]').value = '';
    template.querySelector('input[name^="international_rankings[0][previous_ranking]"]').value = '';

    // Update the input field names with the correct index
    template.querySelector('input[name="international_rankings[0][college_info_id]"]').name = `international_rankings[${rankingCount}][college_info_id]`;
    template.querySelector('input[name="international_rankings[0][category]"]').name = `international_rankings[${rankingCount}][category]`;
    template.querySelector('input[name="international_rankings[0][latest_ranking]"]').name = `international_rankings[${rankingCount}][latest_ranking]`;
    template.querySelector('input[name="international_rankings[0][previous_ranking]"]').name = `international_rankings[${rankingCount}][previous_ranking]`;

    // Append the new section to the DOM
    section.appendChild(template);

    // Increment the count for the next entry
    rankingCount++;
}

// Remove dynamically added fields
document.addEventListener('click', function(e) {
    if (e.target && e.target.className.includes('remove-international-ranking')) {
        e.target.closest('.international-ranking-item').remove();
    }
});

    </script>
</body>
</html>
