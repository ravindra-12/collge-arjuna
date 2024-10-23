<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('style/style.css') }}" />
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    
    <title>College-ArJuna</title>
</head>

<body class="roboto-regular">
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 text-light fs-4 fw-bold text-uppercase border-bottom">
                <i class="fas fa-user-secret me-2"></i>College Arjuna
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="" class="list-group-item list-group-item-action bg-transparent text-light">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>
                <a href="/allcolleges" class="list-group-item list-group-item-action bg-transparent text-light fw-bold {{ request()->is('allcolleges') ? 'active' : '' }}">
                    <i class="fas fa-project-diagram me-2"></i>AllCollege
                </a>
                <a href="/allblogs" class="list-group-item list-group-item-action bg-transparent text-light fw-bold {{ request()->is('allblogs') ? 'active' : '' }}">
                    <i class="fas fa-project-diagram me-2"></i>AllBlog
                </a>
                <a href="/addcollegedata" class="list-group-item list-group-item-action bg-transparent text-light fw-bold {{ request()->is('addcollegedata') ? 'active' : '' }}">
                    <i class="fas fa-project-diagram me-2"></i>AddCollegedata
                </a>
                <a href="/category" class="list-group-item list-group-item-action bg-transparent text-light fw-bold {{ request()->is('category') ? 'active' : '' }}">
                    <i class="fas fa-project-diagram me-2"></i>Blog Category
                </a>
                <a href="/alladmissioncutoff" class="list-group-item list-group-item-action bg-transparent text-light fw-bold {{ request()->is('alladmissioncutoff') ? 'active' : '' }}">
                    <i class="fas fa-project-diagram me-2"></i>All Cutoff
                </a>
                <!--<a href="/addstudentcategory" class="list-group-item list-group-item-action bg-transparent text-light fw-bold {{ request()->is('addstudentcategory') ? 'active' : '' }}">-->
                <!--    <i class="fas fa-project-diagram me-2"></i>Cutoff Category-->
                <!--</a>-->
                <!--<a href="/addseatpool" class="list-group-item list-group-item-action bg-transparent text-light fw-bold {{ request()->is('addseatpool') ? 'active' : '' }}">-->
                <!--    <i class="fas fa-project-diagram me-2"></i>AddSeatpool-->
                <!--</a>-->
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                    <i class="fas fa-power-off me-2"></i>Logout
                </a>
            </div>
        </div>
        <!-- Sidebar -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                @yield('content')
            </div>
        </div>
        <!-- Page Content -->
    </div>

    <!-- Bootstrap JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>

    <script>
        var menuToggle = document.getElementById("menu-toggle");
        var wrapper = document.getElementById("wrapper");
        menuToggle.onclick = function() {
            wrapper.classList.toggle("toggled");
        };
    </script>
</body>

</html>
