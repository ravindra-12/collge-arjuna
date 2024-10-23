<!DOCTYPE html>
<html>
<head>
    <title>Add Top Recruiters</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Add Top Recruiters</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('toprecruiters.store') }}" method="POST">
        @csrf

        <div id="toprecruiter-section">
            <div class="toprecruiter-item" id="toprecruiter-template" style="display: none;">
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

<script>
    let topRecruiterCount = 1;

    function addTopRecruiter() {
        const section = document.getElementById('toprecruiter-section');
        const template = document.getElementById('toprecruiter-template').cloneNode(true);
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
