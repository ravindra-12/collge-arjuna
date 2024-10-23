<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Records</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Admission Records</h1>

    <!-- Filter Form -->
    <form method="GET" action="{{ route('admission_records.index') }}" class="mb-4">
        <div class="form-row">
            <div class="col-md-4">
                <select name="year" id="yearSelect" class="form-control" required>
                    <option value="">Select Year</option>
                    @foreach($years as $year)
                        <option value="{{ $year->year }}" {{ request('year') == $year->year ? 'selected' : '' }}>
                            {{ $year->year }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4" id="categoryContainer" style="display: none;">
                <select name="category" class="form-control">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->student_category }}" {{ request('category') == $category->student_category ? 'selected' : '' }}>
                            {{ $category->student_category }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4" id="seatpoolContainer" style="display: none;">
                <select name="seatpool" class="form-control">
                    <option value="">Select Seat Pool</option>
                    @foreach($seatpools as $seatpool)
                        <option value="{{ $seatpool->seat_pool }}" {{ request('seatpool') == $seatpool->seat_pool ? 'selected' : '' }}>
                            {{ $seatpool->seat_pool }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row mt-2">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    <!-- Display Results -->
    @if($records->isEmpty())
        <p>No data found for the selected filters.</p>
    @else
        <ul class="nav nav-tabs" id="roundTabs" role="tablist">
            @foreach($records as $round => $roundRecords)
                <li class="nav-item">
                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="round-{{ $round }}-tab" data-toggle="tab" href="#round-{{ $round }}" role="tab" aria-controls="round-{{ $round }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                        Round {{ $round }}
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="tab-content" id="roundTabsContent">
            @foreach($records as $round => $roundRecords)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="round-{{ $round }}" role="tabpanel" aria-labelledby="round-{{ $round }}-tab">
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Branch</th>
                                <th>Opening Rank</th>
                                <th>Closing Rank</th>
                                <th>Student Category</th>
                                <th>Seat Pool</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roundRecords as $record)
                                <tr>
                                    <td>{{ $record->year }}</td>
                                    <td>{{ $record->branch }}</td>
                                    <td>{{ $record->opening }}</td>
                                    <td>{{ $record->closing }}</td>
                                    <td>{{ $record->student_category }}</td>
                                    <td>{{ $record->seat_pool }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
    @endif
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.getElementById('yearSelect').addEventListener('change', function() {
        const selectedYear = this.value;
        if (selectedYear) {
            document.getElementById('categoryContainer').style.display = 'block';
            document.getElementById('seatpoolContainer').style.display = 'block';
        } else {
            document.getElementById('categoryContainer').style.display = 'none';
            document.getElementById('seatpoolContainer').style.display = 'none';
        }
    });
</script>
</body>
</html>
