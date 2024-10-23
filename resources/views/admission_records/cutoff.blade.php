<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Cutoffs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('reso/css/style.css') }}"> --}}

    <!-- Font Icons -->
    <link rel="stylesheet" href="{{ asset('reso/css/font-icons.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('reso/css/settings.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('reso/css/navigation.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('reso/css/layers.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('reso/css/swiper.css') }}"> --}}
    <!-- Custom CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('reso/css/custom.css') }}"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
</head>
<body>
    @include('components.header')

<div class="container mt-5">
    <h2 class="text-center">Choose Category and Seat Pool</h2>
    <p class="text-center text-muted">
        <strong>Note:</strong> Make sure to read 
        <a href="#" class="text-info">Cutoff Notes</a> for cutoff related queries.
    </p>

    <!-- Filter Form -->
    <form method="GET" action="{{ route('admission_records.cutoff', ['id' => $id, 'year' => $year]) }}" class="mt-4">
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value="">Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->student_category }}" {{ request('category') == $category->student_category ? 'selected' : '' }}>
                        {{ $category->student_category }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="seatpool">Seat Pool</label>
            <select name="seatpool" id="seatpool" class="form-control" required>
                <option value="">Seat Pool</option>
                @foreach($seatpools as $seatpool)
                    <option value="{{ $seatpool->seat_pool }}" {{ request('seatpool') == $seatpool->seat_pool ? 'selected' : '' }}>
                        {{ $seatpool->seat_pool }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary px-5">Go</button>
        </div>
    </form>
</div>

<div class="container my-5">
    <!-- Display Round-Wise Data Only If Filters Are Applied -->
    @if($cutoffs->isNotEmpty())
        <ul class="nav nav-tabs" id="roundTabs" role="tablist">
            @foreach($cutoffs as $round => $roundCutoffs)
                <li class="nav-item">
                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="round-{{ $round }}-tab" data-toggle="tab" href="#round-{{ $round }}" role="tab" aria-controls="round-{{ $round }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                        Round {{ $round }}
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="tab-content" id="roundTabsContent">
            @foreach($cutoffs as $round => $roundCutoffs)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="round-{{ $round }}" role="tabpanel" aria-labelledby="round-{{ $round }}-tab">
                    @php
                        // Check if any cutoff record has a quota field for this round
                        $hasQuota = $roundCutoffs->contains(function($cutoff) {
                            return !empty($cutoff->quota);
                        });
                    @endphp

                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>Branch</th>
                                <th>Opening Rank</th>
                                <th>Closing Rank</th>
                                {{-- Show Quota column if any record has a quota value --}}
                                @if($hasQuota)
                                    <th>Quota</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roundCutoffs as $cutoff)
                                <tr>
                                    <td>{{ $cutoff->branch }}</td>
                                    <td>{{ $cutoff->opening }}</td>
                                    <td>{{ $cutoff->closing }}</td>
                                    {{-- Display quota value if it exists --}}
                                    @if($hasQuota)
                                        <td>{{ $cutoff->quota ?? 'N/A' }}</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
    @elseif($categoryId && $seatpoolId)
        <p>No data found for the selected filters.</p>
    @endif
</div>

@include('components.footer')
<script src="{{asset('reso/js/plugins.min.js')}}"></script>
	<script src="{{asset('reso/js/functions.bundle.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
