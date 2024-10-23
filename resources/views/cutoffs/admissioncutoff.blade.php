@extends('dashboardlayout')

@section('content')
<div class="container">
    <div class="container mr-5 my-3">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="fs-4 mb-3">All Cutoffs</h3>
            <a href="/admission_records/import" class="btn btn-primary mr-2">Import Cutoff</a>
        </div>
    </div>
    <div class="accordion" id="collegeAccordion">
        @foreach($colleges as $college)
            <div class="card">
                <div class="card-header" id="heading{{ $college->id }}">
                    <h2 class="mb-0 d-flex justify-content-between align-items-center">
                        <!-- College Name -->
                        <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $college->id }}" aria-expanded="false" aria-controls="collapse{{ $college->id }}">
                            {{ $college->title ?? 'Unnamed College' }}
                        </button>
                        <!-- Delete All Cutoffs Button -->
                        <form action="{{ route('admission.cutoff.deleteAll', $college->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete all cutoffs for this college?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete All Cutoffs</button>
                        </form>
                    </h2>
                </div>

                <div id="collapse{{ $college->id }}" class="collapse" aria-labelledby="heading{{ $college->id }}" data-bs-parent="#collegeAccordion">
                    <div class="card-body">
                        @if($college->cutoffs->isNotEmpty())
                            <!-- Check if any cutoff has quota -->
                            @php
                                $hasQuota = $college->cutoffs->contains(function ($cutoff) {
                                    return !empty($cutoff->quota);
                                });
                            @endphp

                            <!-- Tabs for Rounds -->
                            <ul class="nav nav-tabs" id="roundTabs{{ $college->id }}" role="tablist">
                                @foreach($college->cutoffs->groupBy('round') as $round => $cutoffs)
                                    <li class="nav-item">
                                        <a class="nav-link @if($loop->first) active @endif" id="round-{{ $round }}-tab" data-bs-toggle="tab" href="#round-{{ $round }}-content-{{ $college->id }}" role="tab" aria-controls="round-{{ $round }}" aria-selected="true">Round {{ $round }}</a>
                                    </li>
                                @endforeach
                            </ul>

                            <!-- Tab Content for Rounds -->
                            <div class="tab-content" id="roundTabsContent{{ $college->id }}">
                                @foreach($college->cutoffs->groupBy('round') as $round => $cutoffs)
                                    <div class="tab-pane fade @if($loop->first) show active @endif" id="round-{{ $round }}-content-{{ $college->id }}" role="tabpanel" aria-labelledby="round-{{ $round }}-tab">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Branch</th>
                                                    <th>Opening Rank</th>
                                                    <th>Closing Rank</th>
                                                    <th>Category</th>
                                                    <th>Seat Pool</th>
                                                    <th>Year</th>
                                                    @if($hasQuota)
                                                        <th>Quota</th>
                                                    @endif
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($cutoffs as $cutoff)
                                                    <tr>
                                                        <td>{{ $cutoff->branch }}</td>
                                                        <td>{{ $cutoff->opening }}</td>
                                                        <td>{{ $cutoff->closing }}</td>
                                                        <td>{{ $cutoff->student_category }}</td>
                                                        <td>{{ $cutoff->seat_pool }}</td>
                                                        <td>{{ $cutoff->year }}</td>
                                                        @if($hasQuota)
                                                            <td>{{ $cutoff->quota ?? 'N/A' }}</td>
                                                        @endif
                                                        <td>
                                                            <!-- Edit Button -->
                                                            <a href="{{ route('cutoff.edit', $cutoff->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                        </td>
                                                        <td>
                                                            <!-- Delete Single Cutoff Button -->
                                                            <form action="{{ route('admission.cutoff.delete', [$college->id, $cutoff->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this cutoff?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <!-- Message when no cutoffs are available for the college -->
                            <p class="text-center">Cutoff data is not available for this college.</p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
