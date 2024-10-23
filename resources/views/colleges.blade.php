<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College-Arjuna</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .main-content {
            padding: 20px;
        }

        .filter-sidebar {
            position: sticky;
            top: 10px;
            display: block;
            max-height: 700px;
            overflow-y: auto;
            transition: all 0.3s ease;
        }

        .filter-section {
            margin-bottom: 20px;
        }

        .filter-section h5 {
            font-size: 16px;
            font-weight: 600;
            margin-top: 20px;
        }

        .filter-section-content {
            max-height: 150px;
            overflow-y: auto;
        }

        .filter-clear {
            color: #007bff;
            font-size: 14px;
            cursor: pointer;
        }

        /* Mobile and tablet styles */
       /* Mobile styles - Apply up to 767px (mobile) */
@media (max-width: 767px) {
    .filter-sidebar {
        position: fixed;
        top: 0;
        left: -100%;
        width: 80%;
        height: 100%;
        background-color: white;
        z-index: 999;
        padding: 20px;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
    }

    .filter-sidebar.active {
        left: 0;
    }

    .filter-button {
        display: block;
        margin-bottom: 15px;
        text-align: right;
    }

    .filter-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: none;
        z-index: 998;
    }

    .filter-overlay.active {
        display: block;
    }
}

/* Tablet and larger (768px and above) */
@media (min-width: 768px) {
    /* Keep the sidebar visible for tablet and larger screens */
    .filter-sidebar {
        position: sticky;
        top: 10px;
        width: 100%;
        max-height: 700px;
        overflow-y: auto;
        transition: none;
        left: 0; /* Make sure sidebar is visible */
    }

    /* Remove filter button for larger screens */
    .filter-button {
        display: none;
    }

    .filter-overlay {
        display: none;
    }
}


        /* Desktop styles */
        @media (min-width: 992px) {
            .main-content {
                padding: 40px;
            }

            .filter-overlay {
                display: none;
            }
        }
    </style>
</head>

<body>
    @include('components.header')

    <div class="container-fluid">
        <div class="row">
            <!-- Mobile filter button -->
            <div class="col-12 filter-button d-lg-none my-3">
                <button class="btn btn-primary" id="filterToggle">Filter</button>
            </div>

            <div class="filter-overlay" id="filterOverlay"></div>

            <!-- Left Sidebar (Filters) -->
            <div class="col-lg-3 my-3 col-md-4">
                <div class="filter-sidebar p-3 bg-light" id="filterSidebar">
                    <h5>Search Filters</h5>

                    <!-- Filter: State -->
                    <div class="filter-section">
                        <h5>State <span class="filter-clear">Clear</span></h5>
                        <input type="text" class="form-control filter-input state-search" placeholder="Search State">
                        <div class="filter-section-content">
                            @foreach($states as $state)
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input state-filter" id="state{{ $loop->index }}" value="{{ $state }}">
                                    <label class="form-check-label" for="state{{ $loop->index }}">{{ $state }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Filter: City -->
                    <div class="filter-section">
                        <h5>City <span class="filter-clear">Clear</span></h5>
                        <input type="text" class="form-control filter-input city-search" placeholder="Search City">
                        <div class="filter-section-content my-2">
                            @foreach($cities as $city)
                                <div class="form-check city-option">
                                    <input type="checkbox" class="form-check-input city-filter" id="city{{ $loop->index }}" value="{{ $city }}">
                                    <label class="form-check-label" for="city{{ $loop->index }}">{{ $city }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                   
                    <!-- Filter: Type -->
                    <div class="filter-section">
                        <h5>Type <span class="filter-clear">Clear</span></h5>
                        <input type="text" class="form-control filter-input type-search" placeholder="Search Type">
                        <div class="filter-section-content">
                            @foreach($types as $type)
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input type-filter" id="type{{ $loop->index }}" value="{{ $type }}">
                                    <label class="form-check-label" for="type{{ $loop->index }}">{{ $type }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Filter: Branch -->
<!-- Filter: Stream -->
<div class="filter-section">
    <h5>Courses <span class="filter-clear">Clear</span></h5>
    <input type="text" class="form-control filter-input course-search" placeholder="Search Courses">
    <div class="filter-section-content">
        @foreach($courses as $course)
            <div class="form-check">
                <input type="checkbox" class="form-check-input course-filter" id="course{{ $loop->index }}" value="{{ $course }}">
                <label class="form-check-label" for="course{{ $loop->index }}">{{ $course }}</label>
            </div>
        @endforeach
    </div>
</div>

<!-- Filter: Branch -->
<div class="filter-section">
    <h5>Branch <span class="filter-clear">Clear</span></h5>
    <input type="text" class="form-control filter-input branch-search" placeholder="Search Branches">
    <div class="filter-section-content">
        @foreach($branches as $branch)
            <div class="form-check">
                <input type="checkbox" class="form-check-input branch-filter" id="branch{{ $loop->index }}" value="{{ $branch }}">
                <label class="form-check-label" for="branch{{ $loop->index }}">{{ $branch }}</label>
            </div>
        @endforeach
    </div>
</div>
                </div>
            </div>



            <!-- Main Content Area -->
            <div class="col-lg-9 col-md-8">
                <div class="main-content">
                    <div class="col-12">
                        <div class="fancy-title title-border">
                            <h3>All Colleges</h3>
                        </div>
                        <div class="row posts-md col-mb-30" id="collegeList">
                            @foreach($college as $item)
                            <div class="entry col-sm-6 col-md-4" 
                            data-state="{{ $item->state }}" 
                            data-city="{{ $item->city }}" 
                            data-type="{{ $item->institute_type }}"
                            data-course="{{ implode(',', $item->courses->pluck('course_name')->toArray()) }}" 
                            data-branch="{{ implode(',', $item->courses->flatMap(function ($course) {
                               return $course->branches->pluck('branch_name');
                            })->toArray()) }}">
                                    
                                    <div class="grid-inner">
                                        <div class="entry-image">
                                            <a href="{{ url('collegeweb/' . $item->id) }}">
                                                <img src="{{ $item->image }}" alt="{!! $item->title !!}" class="img-fluid" style="max-height: 100px; width: 100%; object-fit: cover;">
                                            </a>
                                        </div>
                                        <div class="entry-title title-xs text-transform-none">
                                            <h3>
                                                <a href="{{ url('collegeweb/' . $item->id) }}">{{ $item->title }}</a>
                                            </h3>
                                        </div>
                                        <div class="entry-content">
                                            <p class="mb-0">{!! $item->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Filter Sidebar Toggle for Mobile
        document.getElementById('filterToggle').addEventListener('click', function () {
            document.getElementById('filterSidebar').classList.toggle('active');
            document.getElementById('filterOverlay').classList.toggle('active');
        });

        document.getElementById('filterOverlay').addEventListener('click', function () {
            document.getElementById('filterSidebar').classList.remove('active');
            document.getElementById('filterOverlay').classList.remove('active');
        });

        // Function to filter colleges based on selected filters
        function filterColleges() {
    const cities = Array.from(document.querySelectorAll('.city-filter:checked')).map(checkbox => checkbox.value);
    const states = Array.from(document.querySelectorAll('.state-filter:checked')).map(checkbox => checkbox.value);
    const types = Array.from(document.querySelectorAll('.type-filter:checked')).map(checkbox => checkbox.value);
    const courses = Array.from(document.querySelectorAll('.course-filter:checked')).map(checkbox => checkbox.value);
    const branches = Array.from(document.querySelectorAll('.branch-filter:checked')).map(checkbox => checkbox.value); // Branch filter
    const colleges = document.querySelectorAll('.entry');

    colleges.forEach(college => {
        const collegeCity = college.getAttribute('data-city');
        const collegeState = college.getAttribute('data-state');
        const collegeType = college.getAttribute('data-type');
        const collegeCourses = college.getAttribute('data-course').split(','); // Assuming multiple courses are comma-separated
        const collegeBranches = college.getAttribute('data-branch').split(','); // Assuming branches are comma-separated

        const show = (cities.length === 0 || cities.includes(collegeCity)) &&
                     (states.length === 0 || states.includes(collegeState)) &&
                     (types.length === 0 || types.includes(collegeType)) &&
                     (courses.length === 0 || collegeCourses.some(course => courses.includes(course))) &&
                     (branches.length === 0 || collegeBranches.some(branch => branches.includes(branch)));

        college.style.display = show ? 'block' : 'none';
    });
}
        // Search functionality within each section
        document.querySelectorAll('.filter-input').forEach(input => {
            input.addEventListener('input', function () {
                const filterType = input.classList.contains('state-search') ? 'state' :
                                  input.classList.contains('city-search') ? 'city' :
                                  input.classList.contains('stream-search') ? 'stream' :
                                  input.classList.contains('type-search') ? 'type' : '';

                const searchTerm = input.value.toLowerCase();
                const options = document.querySelectorAll(`.${filterType}-filter`).forEach(option => {
                    const label = option.nextElementSibling.textContent.toLowerCase();
                    option.parentElement.style.display = label.includes(searchTerm) ? '' : 'none';
                });
            });
        });
        // 

        // Search functionality for courses
document.querySelector('.course-search').addEventListener('input', function () {
    const searchTerm = this.value.toLowerCase();
    const courses = document.querySelectorAll('.course-filter');
    courses.forEach(course => {
        const label = course.nextElementSibling.textContent.toLowerCase();
        course.parentElement.style.display = label.includes(searchTerm) ? '' : 'none';
    });
});

// Search functionality for branches
document.querySelector('.branch-search').addEventListener('input', function () {
    const searchTerm = this.value.toLowerCase();
    const branches = document.querySelectorAll('.branch-filter');
    branches.forEach(branch => {
        const label = branch.nextElementSibling.textContent.toLowerCase();
        branch.parentElement.style.display = label.includes(searchTerm) ? '' : 'none';
    });
});


        // 

        // Clear selected filters for each section
        document.querySelectorAll('.filter-clear').forEach(clearButton => {
            clearButton.addEventListener('click', function () {
                const filterSection = clearButton.closest('.filter-section');
                const checkboxes = filterSection.querySelectorAll('.form-check-input');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = false;
                    checkbox.parentElement.style.display = ''; // Reset visibility
                });
                filterColleges();
            });
        });

        // Apply filter on checkbox change
        document.querySelectorAll('.form-check-input').forEach(input => {
            input.addEventListener('change', filterColleges);
        });

        // Initial filtering call
        filterColleges();
    </script>
</body>

</html>
