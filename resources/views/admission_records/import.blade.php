<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Admission Records</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Import Admission Records</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('admission_records.import.store') }}" enctype="multipart/form-data">
        @csrf
    
        {{-- <div class="form-group">
            <label for="college">Select College</label>
            <select class="form-control" id="college" name="college_id" required>
                <option value="">Choose College</option>
                @foreach($colleges as $college)
                    <option value="{{ $college->id }}">{{ $college->title }}</option>
                @endforeach
            </select>
        </div> --}}
    
        <div class="form-group">
            <label for="file">Choose Excel File</label>
            <input type="file" class="form-control-file" id="file" name="file" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Import</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
