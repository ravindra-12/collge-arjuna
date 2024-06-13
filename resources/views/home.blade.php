<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body class="" style="font-family: 'Roboto', sans-serif;">
   {{-- Hero section --}}

     <header style="background-image: url('https://img.freepik.com/free-photo/solid-gypsum-wall-textured-background_53876-101643.jpg?t=st=1718196992~exp=1718200592~hmac=7494dafa8a0131ac15c6602b5b6f66995b5b26f82c8f414f45d83a50c27936f3&w=400'); background-size: cover;
     background-position: center;
     background-repeat: no-repeat;
     max-width: 100%;
     height: 400px;">
      <nav class="navbar navbar-expand-lg  text-light">
        <div class="container-fluid">
            <a class="navbar-brand  text-light" href="#">College Arjuna</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="#">Colleges</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="#">Exams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="#">Admissions</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link  text-light" href="#">Tools</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  text-light" href="#">Formus</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-bottom: 140px; margin-top: 140px;">
      <div class="row">
        <div class="col-12 mb-4">
          <h1 class="text-center text-light">KNOW MORE, DO MORE</h1>
        </div>
        <div class="col-12 text-center">
          <form class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-2">
              <input type="text" class="form-control" placeholder="Search For Colleges, Courses or Exams">
            </div>
            <div class="col-12 col-sm-auto mb-2">
              <button type="submit" class="btn btn-primary w-100">Search</button>
            </div>
          </form>
        </div>
      </div>
    </div>
   
    </header>


    {{-- End Hero Section --}}


   
    {{-- Main Content --}}
    <div class="main">
<div class="container-fluid bg-dark">
 <p class="text-center text-light p-2">JoSAA 2024 Counselling</p>
</div>
<div class="mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-12 text-center">
        <h3 class="text-center">TAKE INFORMED DECISIONS</h3>
        <span class="center-line"></span>
    </div>
</div>
</div>
</div>
</div>
    {{-- End Main Content --}}

    {{-- Card --}}
    <div class="container">
      <div class="row">
        <div class="col-sm shadow p-3 m-3 bg-body-tertiary rounded">
          <div class="bg-image ripple" data-mdb-ripple-color="light" style="position: relative; overflow: hidden;">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp" class="w-100" />
            <a href="#!">
                <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.4); position: absolute; top: 0; right: 0; bottom: 0; left: 0; display: flex; justify-content: center; align-items: center; transition: transform 0.3s ease;">
                    <div class="d-flex justify-content-center align-items-center h-100" style="transition: transform 0.3s ease;">
                        <p class="text-white mb-0">Can you see me?</p>
                    </div>
                </div>
                <div class="hover-overlay" style="position: absolute; top: 0; right: 0; bottom: 0; left: 0;">
                    <div class="mask" style="background-color: hsla(0, 0%, 98%, 0.2);"></div>
                </div>
            </a>
        </div>
        </div>
        <div class="col-sm shadow p-3 m-3 bg-body-tertiary rounded">
          <div class="bg-image ripple" data-mdb-ripple-color="light" style="position: relative; overflow: hidden;">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp" class="w-100" />
            <a href="#!">
                <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.4); position: absolute; top: 0; right: 0; bottom: 0; left: 0; display: flex; justify-content: center; align-items: center; transition: transform 0.3s ease;">
                    <div class="d-flex justify-content-center align-items-center h-100" style="transition: transform 0.3s ease;">
                        <p class="text-white mb-0">Can you see me?</p>
                    </div>
                </div>
                <div class="hover-overlay" style="position: absolute; top: 0; right: 0; bottom: 0; left: 0;">
                    <div class="mask" style="background-color: hsla(0, 0%, 98%, 0.2);"></div>
                </div>
            </a>
        </div>
        </div>
        <div class="col-sm shadow p-3 m-3 bg-body-tertiary rounded">
          <div class="bg-image ripple" data-mdb-ripple-color="light" style="position: relative; overflow: hidden;">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp" class="w-100" />
            <a href="#!">
                <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.4); position: absolute; top: 0; right: 0; bottom: 0; left: 0; display: flex; justify-content: center; align-items: center; transition: transform 0.3s ease;">
                    <div class="d-flex justify-content-center align-items-center h-100" style="transition: transform 0.3s ease;">
                        <p class="text-white mb-0">Can you see me?</p>
                    </div>
                </div>
                <div class="hover-overlay" style="position: absolute; top: 0; right: 0; bottom: 0; left: 0;">
                    <div class="mask" style="background-color: hsla(0, 0%, 98%, 0.2);"></div>
                </div>
            </a>
        </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-sm shadow p-3 m-3 bg-body-tertiary rounded">
          <div class="bg-image ripple" data-mdb-ripple-color="light" style="position: relative; overflow: hidden;">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp" class="w-100" />
            <a href="#!">
                <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.4); position: absolute; top: 0; right: 0; bottom: 0; left: 0; display: flex; justify-content: center; align-items: center; transition: transform 0.3s ease;">
                    <div class="d-flex justify-content-center align-items-center h-100" style="transition: transform 0.3s ease;">
                        <p class="text-white mb-0">Can you see me?</p>
                    </div>
                </div>
                <div class="hover-overlay" style="position: absolute; top: 0; right: 0; bottom: 0; left: 0;">
                    <div class="mask" style="background-color: hsla(0, 0%, 98%, 0.2);"></div>
                </div>
            </a>
        </div>
        </div>
        <div class="col-sm shadow p-3 m-3 bg-body-tertiary rounded">
          <div class="bg-image ripple" data-mdb-ripple-color="light" style="position: relative; overflow: hidden;">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp" class="w-100" />
            <a href="#!">
                <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.4); position: absolute; top: 0; right: 0; bottom: 0; left: 0; display: flex; justify-content: center; align-items: center; transition: transform 0.3s ease;">
                    <div class="d-flex justify-content-center align-items-center h-100" style="transition: transform 0.3s ease;">
                        <p class="text-white mb-0">Can you see me?</p>
                    </div>
                </div>
                <div class="hover-overlay" style="position: absolute; top: 0; right: 0; bottom: 0; left: 0;">
                    <div class="mask" style="background-color: hsla(0, 0%, 98%, 0.2);"></div>
                </div>
            </a>
        </div>
        </div>
        <div class="col-sm shadow p-3 m-3 bg-body-tertiary rounded">
          <div class="bg-image ripple" data-mdb-ripple-color="light" style="position: relative; overflow: hidden;">
            <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp" class="w-100" />
            <a href="#!">
                <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.4); position: absolute; top: 0; right: 0; bottom: 0; left: 0; display: flex; justify-content: center; align-items: center; transition: transform 0.3s ease;">
                    <div class="d-flex justify-content-center align-items-center h-100" style="transition: transform 0.3s ease;">
                        <p class="text-white mb-0">Can you see me?</p>
                    </div>
                </div>
                <div class="hover-overlay" style="position: absolute; top: 0; right: 0; bottom: 0; left: 0;">
                    <div class="mask" style="background-color: hsla(0, 0%, 98%, 0.2);"></div>
                </div>
            </a>
        </div>
        </div>
      </div>
    </div>
{{-- End Card --}}

 {{-- Fliping Card --}}
 
<div class="container-fluid mt-5" style="background-color: #ffeeee; padding:40px;">
 <div class="mt-5">
  <h3 class="text-center " style="margin-top: 40px;">KEEP YOURSELF UPDATED
    
  </h3>
 </div>
  <span class="center-line"></span>
  <div class="row">
    <div class="col-md-4 flip-card " style="height: 300px;">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://images.pexels.com/photos/3601422/pexels-photo-3601422.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Image">
        </div>
        <div class="flip-card-back d-flex align-items-center justify-content-center p-4">
          <div>
            <h3 class="text-light fs-5">Post Title</h3>
            <p class="fs-6 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 flip-card" style="height: 300px;">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://images.pexels.com/photos/1532771/pexels-photo-1532771.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-fluid" alt="Image">
        </div>
        <div class="flip-card-back d-flex align-items-center justify-content-center p-4">
          <div>
            <h3 class="text-light fs-5">Post Title</h3>
            <p class="fs-6 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 flip-card " style=" height: 300px;">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://images.pexels.com/photos/573238/pexels-photo-573238.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" class="img-fluid" alt="Image">
        </div>
        <div class="flip-card-back d-flex align-items-center justify-content-center p-4">
          <div>
            <h3 class="text-light fs-5">Post Title</h3>
            <p class="fs-6 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 flip-card " style="height: 300px;">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://images.pexels.com/photos/3601422/pexels-photo-3601422.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid" alt="Image">
        </div>
        <div class="flip-card-back d-flex align-items-center justify-content-center p-4">
          <div>
            <h3 class="text-light fs-5">Post Title</h3>
            <p class="fs-6 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 flip-card" style="height: 300px;">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://images.pexels.com/photos/1532771/pexels-photo-1532771.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-fluid" alt="Image">
        </div>
        <div class="flip-card-back d-flex align-items-center justify-content-center p-4">
          <div>
            <h3 class="text-light fs-5">Post Title</h3>
            <p class="fs-6 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 flip-card " style=" height: 300px;">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://images.pexels.com/photos/573238/pexels-photo-573238.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" class="img-fluid" alt="Image">
        </div>
        <div class="flip-card-back d-flex align-items-center justify-content-center p-4">
          <div>
            <h3 class="text-light fs-5">Post Title</h3>
            <p class="fs-6 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  {{-- End Fliping Card --}}

{{-- Card Slider --}}
<div class="container mt-4 mb-4">
  <h3 class="text-center">TOP COLLEGES</h3>
  <span class="center-line"></span>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="cards-wrapper">
          <div class="col-md-4">
            <div class="card">
              <img src="{{asset('IIT-Kanpur.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">IIT DELHI</h5>
                <span class="center-line"></span>
                <p class="card-text">How To reach</p>
                <p class="card-text">Courses</p>
                <p class="card-text">Seats</p>
                <p class="card-text">Cutoff</p>
                <p class="card-text">Fee Structure</p>
                <p class="card-text">Placement</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-none d-md-block">
            <div class="card">
              <img src="{{asset('NSIT.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">IIT DELHI</h5>
                <span class="center-line"></span>
                <p class="card-text">How To reach</p>
                <p class="card-text">Courses</p>
                <p class="card-text">Seats</p>
                <p class="card-text">Cutoff</p>
                <p class="card-text">Fee Structure</p>
                <p class="card-text">Placement</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-none d-md-block">
            <div class="card">
              <img src="{{asset('MNNIT.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">IIT DELHI</h5>
                <span class="center-line"></span>
                <p class="card-text">How To reach</p>
                <p class="card-text">Courses</p>
                <p class="card-text">Seats</p>
                <p class="card-text">Cutoff</p>
                <p class="card-text">Fee Structure</p>
                <p class="card-text">Placement</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="col-md-4">
            <div class="card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">IIT DELHI</h5>
                <span class="center-line"></span>
                <p class="card-text">How To reach</p>
                <p class="card-text">Courses</p>
                <p class="card-text">Seats</p>
                <p class="card-text">Cutoff</p>
                <p class="card-text">Fee Structure</p>
                <p class="card-text">Placement</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-none d-md-block">
            <div class="card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">IIT DELHI</h5>
                <span class="center-line"></span>
                <p class="card-text">How To reach</p>
                <p class="card-text">Courses</p>
                <p class="card-text">Seats</p>
                <p class="card-text">Cutoff</p>
                <p class="card-text">Fee Structure</p>
                <p class="card-text">Placement</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-none d-md-block">
            <div class="card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">IIT DELHI</h5>
                <span class="center-line"></span>
                <p class="card-text">How To reach</p>
                <p class="card-text">Courses</p>
                <p class="card-text">Seats</p>
                <p class="card-text">Cutoff</p>
                <p class="card-text">Fee Structure</p>
                <p class="card-text">Placement</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="col-md-4">
            <div class="card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">IIT DELHI</h5>
                <span class="center-line"></span>
                <p class="card-text">How To reach</p>
                <p class="card-text">Courses</p>
                <p class="card-text">Seats</p>
                <p class="card-text">Cutoff</p>
                <p class="card-text">Fee Structure</p>
                <p class="card-text">Placement</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-none d-md-block">
            <div class="card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">IIT DELHI</h5>
                <span class="center-line"></span>
                <p class="card-text">How To reach</p>
                <p class="card-text">Courses</p>
                <p class="card-text">Seats</p>
                <p class="card-text">Cutoff</p>
                <p class="card-text">Fee Structure</p>
                <p class="card-text">Placement</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-none d-md-block">
            <div class="card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">IIT DELHI</h5>
                <span class="center-line"></span>
                <p class="card-text">How To reach</p>
                <p class="card-text">Courses</p>
                <p class="card-text">Seats</p>
                <p class="card-text">Cutoff</p>
                <p class="card-text">Fee Structure</p>
                <p class="card-text">Placement</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
</div>
{{-- End Card Slider --}}


{{-- Footer --}}


<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-reset fw-bold" href="">murmusoftwareinfotech.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

{{-- End Footer --}}

    <style>
      .custom-input, .custom-button {
        
          font-size: 1.25rem;
      }
      .custom-input {
          width: 460px;
      }
      .custom-button {
          width: 180px%;
      }

  .center-line {
           display: inline-block;
            width: 70px;
            height: 1px;
            margin: 0 auto;
            border-top: 2px solid #cb2027;
            justify-content: center;
}


.bg-image {
            position: relative;
            overflow: hidden;
        }

        .bg-image .mask {
            transition: transform 0.3s ease;
        }

        .bg-image:hover .mask .d-flex {
            transform: translateY(-20px);
            transition: transform 0.3s ease;
        }

 .cards-wrapper {
      display: flex;
      justify-content: center;
    }
    .card img {
      max-width: 100%;
      max-height: 100%;
    }
    .card {
      margin: 0 0.5em;
      box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
      border: none;
      border-radius: 0;
    }
    .carousel-inner {
      padding: 1em;
    }
    .carousel-control-prev,
    .carousel-control-next {
      background-color: #e1e1e1;
      width: 5vh;
      height: 5vh;
      border-radius: 50%;
      top: 50%;
      transform: translateY(-50%);
    }
    @media (min-width: 768px) {
      .card img {
        height: 11em;
      }
    } 



    /* Flip Card */
    .flip-card {
      perspective: 1000px;
    }

    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      transition: transform 0.9s;
      transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
    }

    .flip-card-front, .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
    }

    .flip-card-back {
      background-color: #333;
      color: white;
      transform: rotateY(180deg);
    }


    /* End Flip Card */
  </style>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>
</html>
