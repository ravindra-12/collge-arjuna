<!DOCTYPE html>
<html>
<head>
    <title>Import Past Recruiters</title>
</head>
<body>
    <form action="{{ route('past-recruiters.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="file">Choose Excel File:</label>
            <input type="file" name="file" id="file" required>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
