<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload PDF Form</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    @include('components.header')
    @if(session('success'))
    <div class=" container my-2 alert alert-success" style="align-items:flex-end">
        {{ session('success') }}
    </div>
@endif

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Upload PDF</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.upload.pdf') }}" method="POST" enctype="multipart/form-data" class="p-4">
                        @csrf
                        <div class="mb-3">
                            <label for="college_info_id" class="form-label">Select College:</label>
                            <select name="college_info_id" id="college_info_id" class="form-select" required>
                                <option value="" disabled selected>Select a college</option>
                                @foreach ($colleges as $college)
                                    <option value="{{ $college->id }}">{{ $college->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="pdf" class="form-label">Upload PDF:</label>
                            <input type="file" name="pdf" id="pdf" class="form-control" accept="application/pdf" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@include('components.footer')

<!-- Bootstrap JS (Optional if you need JS features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
