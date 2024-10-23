@extends('dashboardlayout')

@section('content')
<div class="container">
    <h3 class="fs-4 mb-3">Edit Cutoff</h3>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('cutoff.update', $cutoff->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Year Field -->
        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" name="year" id="year" class="form-control" value="{{ $cutoff->year }}" required>
        </div>

        <!-- Round Field -->
        <div class="form-group">
            <label for="round">Round</label>
            <input type="number" name="round" id="round" class="form-control" value="{{ $cutoff->round }}" required>
        </div>

        <!-- Branch Field -->
        <div class="form-group">
            <label for="branch">Branch</label>
            <input type="text" name="branch" id="branch" class="form-control" value="{{ $cutoff->branch }}" required>
        </div>

        <!-- Opening Rank Field -->
        <div class="form-group">
            <label for="opening">Opening Rank</label>
            <input type="number" name="opening" id="opening" class="form-control" value="{{ $cutoff->opening }}" required>
        </div>

        <!-- Closing Rank Field -->
        <div class="form-group">
            <label for="closing">Closing Rank</label>
            <input type="number" name="closing" id="closing" class="form-control" value="{{ $cutoff->closing }}" required>
        </div>

        <!-- Student Category Field -->
        <div class="form-group">
            <label for="student_category">Student Category</label>
            <input type="text" name="student_category" id="student_category" class="form-control" value="{{ $cutoff->student_category }}" required>
        </div>

        <!-- Seat Pool Field -->
        <div class="form-group">
            <label for="seat_pool">Seat Pool</label>
            <input type="text" name="seat_pool" id="seat_pool" class="form-control" value="{{ $cutoff->seat_pool }}" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Cutoff</button>
    </form>
</div>
@endsection
