@if(isset($filteredBranches) && count($filteredBranches) > 0)
    <h4>Filtered Branches:</h4>
    <ul>
        @foreach($filteredBranches as $branch)
            <li>{{ $branch->branch_name }}</li>
        @endforeach
    </ul>
@else
    <p>No branches available for this course.</p>
@endif
