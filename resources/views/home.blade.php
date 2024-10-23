<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="SemiColonWeb">
    <meta name="description"
        content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital@0;1&display=swap"
        rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="{{ asset('reso/css/style.css') }}">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{{ asset('reso/css/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('reso/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('reso/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('reso/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('reso/css/swiper.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('reso/css/custom.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Document Title
        ============================================= -->
    <title>College-Arjuna</title>


</head>

{{-- <style>
		.tp-video-play-button { display: none !important; }
		.tp-caption { white-space: nowrap; }
	</style> --}}
   
    <body class="stretched" style="font-family: 'Roboto', sans-serif;">
   {{-- Hero section --}}
<div id="wrapper">
  
  <!-- #header end -->
 
  <!-- Slider
  ============================================= -->
 
 
    <div class="container-fluid" style="margin-bottom: 80px; background-color: #1f3b4d;">
      {{-- Header --}}

      <header id="header" class="transparent-header dark">
        <div id="">
            <div class="container" >
                <div class="header-row">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                      <h4 class="mt-4">COLLEGE ARJUNA</h4>
                    </div><!-- #logo end -->

                    <div class="header-misc">

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search" class="header-misc-icon">
                            <a href="#" id="top-search-trigger"><i class="uil uil-search"></i><i class="bi-x-lg"></i></a>
                        </div><!-- #top-search end -->

                        

                    </div>

                    <div class="primary-menu-trigger">
                        <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                            <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                        </button>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu">

                      <ul class="menu-container">
                        <li class="menu-item">
                          <a class="menu-link" href="/"><div>Home</div></a>
                          
                        </li>
                                        <li class="menu-item">
                          <a class="menu-link {{ request()->is('news') ? "text-danger" : ""}}" href="/news"><div>NEWS</div></a>
                          
                        </li>
                        <li class="menu-item">
                          <a class="menu-link {{ request()->is('colleges') ? "text-danger" : ""}}" href="/colleges"><div>COLLEGES</div></a>
                          
                        </li>
                                        <li class="menu-item">
                          <a class="menu-link {{ request()->is('exams') ? "text-danger" : ""}}" href="/exams"><div>EXAMS</div></a>
                          
                        </li>
                                        <li class="menu-item">
                          <a class="menu-link {{ request()->is('admission') ? "text-danger" : ""}}" href="/admission"><div>ADMISSION</div></a>
                          
                        </li>
                                        <li class="menu-item">
                          <a class="menu-link {{ request()->is('forum_posts') ? "text-danger" : ""}}" href="/forum_posts"><div>FORUMS</div></a>
                          
                        </li>
                        
                      </ul>

                    </nav>

                  

                    <!-- #primary-menu end -->

                    <form class="top-search-form" action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                    </form>

                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->



      {{-- End Header --}}
     

      <div class="row my-3" style="height: 300px;">
        <div class="col-12 text-center">
            <h1 class="text-white">The Ultimate College Guide</h1>
            <h4 class="text-white">Skip the Hype Choose The Right</h4>
    
            <!-- Search Form -->
            <form action="{{ route('search.colleges') }}" method="GET" id="search-form" class="d-flex justify-content-center revtp-form" target="_self">
              <input class="form-control form-control-lg" type="text" name="query" id="college-search" placeholder="Search for colleges..." required autocomplete="off" style="border-radius: 0;">
              <button class="btn btn-primary btn-lg" type="submit" style="border-radius: 0; font-size: 16px;">
                  SEARCH
              </button>
          </form>
          
          <div id="suggestions" class="suggestions-list" style="display:none;"></div>
        </div>
    </div>
    

      {{--  --}}

 
    </div>
 
 
 
    {{-- End Hero Section --}}


   
    {{-- Main Content --}}

{{-- </div> --}}

    {{-- End Main Content --}}

    {{-- Card --}}
    
    <div class="container my-3">
    <h3 class="text-center">TAKE INFORMED DECISIONS</h3>
   
   </div>


  <div class="container py-3 " >
    
    <div class="row flex-nowrap flex-md-wrap overflow-auto" id="card-scroll">
        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <a href="/colleges"> 
            <div class="card text-center p-1 shadow"
            style="border: 0px solid transparent; transition: border 0.3s ease, box-shadow 0.3s ease; box-shadow: none;"
            onmouseover="this.style.border='0px solid #007bff'; this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)';"
            onmouseout="this.style.border='0px solid transparent'; this.style.boxShadow='none';">
                <img src="https://cdn-icons-png.flaticon.com/128/8074/8074794.png" class="card-img-top icon-image mx-auto mt-3" alt="Colleges">
                <div class="card-body">
                    <h5 class="card-title">Colleges</h5>
                    <p class="card-text">Find your dream college! Explore over 12,000+.</p>
                </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <a href="/news"> 
            <div class="card text-center p-1 shadow"
            style="border: 0px solid transparent; transition: border 0.3s ease, box-shadow 0.3s ease; box-shadow: none;"
            onmouseover="this.style.border='0px solid #007bff'; this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)';"
            onmouseout="this.style.border='0px solid transparent'; this.style.boxShadow='none';">
                <img src="https://cdn-icons-png.flaticon.com/128/2965/2965879.png" class="card-img-top icon-image mx-auto mt-3" alt="Exams">
                <div class="card-body">
                    <h5 class="card-title">News</h5>
                    <p class="card-text">Stay informed with updates on government policies and exams.</p>
                </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <a href="/colleges">
            <div class="card text-center p-1 shadow"
            style="border: 0px solid transparent; transition: border 0.3s ease, box-shadow 0.3s ease; box-shadow: none;"
            onmouseover="this.style.border='0px solid #007bff'; this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)';"
            onmouseout="this.style.border='0px solid transparent'; this.style.boxShadow='none';">
                <img src="https://cdn-icons-png.flaticon.com/128/1792/1792140.png" class="card-img-top icon-image mx-auto mt-3" alt="Courses">
                <div class="card-body">
                    <h5 class="card-title">Cutoff</h5>
                    <p class="card-text">Compare cutoffs for top colleges to guide your choices.</p>
                </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <a href="#">
            <div class="card text-center p-1 shadow"
            style="border: 0px solid transparent; transition: border 0.3s ease, box-shadow 0.3s ease; box-shadow: none;"
            onmouseover="this.style.border='0px solid #007bff'; this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)';"
            onmouseout="this.style.border='0px solid transparent'; this.style.boxShadow='none';">
                <img src="https://cdn-icons-png.flaticon.com/128/1236/1236487.png" class="card-img-top icon-image mx-auto mt-3" alt="Tools">
                <div class="card-body">
                    <h5 class="card-title">Tools</h5>
                    <p class="card-text">Access all tools and details for a smooth admission experience.</p>
                </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <a href="/forum_posts">
            <div class="card text-center p-1 shadow"
            style="border: 0px solid transparent; transition: border 0.3s ease, box-shadow 0.3s ease; box-shadow: none;"
            onmouseover="this.style.border='0px solid #007bff'; this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)';"
            onmouseout="this.style.border='0px solid transparent'; this.style.boxShadow='none';">
                <img src="https://cdn-icons-png.flaticon.com/128/3050/3050431.png" class="card-img-top icon-image mx-auto mt-3" alt="forum_posts">
                <div class="card-body">
                    <h5 class="card-title">Forum</h5>
                    <p class="card-text">Connect with others and get answers to your admission queries.</p>
                </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <a href="/exams">
            <div class="card text-center p-1 shadow"
            style="border: 0px solid transparent; transition: border 0.3s ease, box-shadow 0.3s ease; box-shadow: none;"
            onmouseover="this.style.border='0px solid #007bff'; this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)';"
            onmouseout="this.style.border='0px solid transparent'; this.style.boxShadow='none';">
                <img src="https://cdn-icons-png.flaticon.com/128/1946/1946058.png" class="card-img-top icon-image mx-auto mt-3" alt="Sarkari Exam">
                <div class="card-body">
                    <h5 class="card-title">Exam</h5>
                    <p class="card-text">Find comprehensive information on various exams to aid your preparation.</p>
                </div>
            </div>
          </a>
        </div>
    </div>
</div>

   

{{-- End Card --}}


<!-- #content end -->


<!-- Content
============================================= -->

      {{-- Fliping Card --}}
 
    <!--  <section id="content">-->
    <!--    <div class="content-wrap">-->
    <!--        <div class="container">-->
    <!--            <div class="my-5">-->
    <!--                <h3 class="text-center">KEEP YOURSELF UPDATED</h3>-->
    <!--                <hr class="w-50 mx-auto">-->
    <!--            </div>-->
    
    <!--            <div class="row grid-container g-4 mb-6" data-layout="masonry" style="overflow: visible">-->
    <!--                @foreach($posts as $post)-->
    <!--                    <div class="col-lg-4">-->
    <!--                        <div class="flip-card text-center">-->
    <!--                            <div class="flip-card-front dark">-->
    <!--                                <div class="flip-card-inner">-->
    <!--                                    <div class="card bg-transparent border-0 text-center">-->
    <!--                                        <div class="card-body text-contrast-900">-->
    <!--                                            <h3 class="card-title" style="font-size: 16px;">{!! $post->Title !!}</h3>-->
    <!--                                            <p class="card-text fw-normal" style="font-size: 12px;">{!! $post->shortDescription !!}</p>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="flip-card-back bg-danger no-after">-->
    <!--                                <div class="flip-card-inner">-->
    <!--                                    <p class="mb-2 text-white">{!! $post->shortDescription !!}</p>-->
    <!--                                    <a href="{{ route('post.show', $post->PostID) }}">-->
    <!--                                      <button type="button" class="btn btn-outline-light mt-2">View Details</button>-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                @endforeach-->
    
                    <!-- Hardcoded flip card for the sixth item -->
    <!--                <div class="col-lg-4">-->
    <!--                    <div class="flip-card text-center top-to-bottom">-->
    <!--                        <div class="flip-card-front bg-info dark">-->
    <!--                            <div class="flip-card-inner">-->
    <!--                                <div class="card bg-transparent border-0 text-center">-->
    <!--                                    <div class="card-body text-contrast-900">-->
    <!--                                        <i class="bi-check-circle h1 mb-2"></i>-->
    <!--                                        <a href="/news">-->
    <!--                                          <h3 class="card-title">Know More...</h3>-->
    <!--                                        </a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="flip-card-back">-->
    <!--                            <div class="flip-card-inner">-->
    <!--                                <p class="mb-2 text-white">Know More About News</p>-->
    <!--                                <a href="/news">-->
    <!--                                  <button type="button" class="btn btn-outline-light mt-2">View Details</button>-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    
    <section id="content">
        <div class="content-wrap">
            <div class="container">
                <div class="my-1">
                    <h3 class="text-center">KEEP YOURSELF UPDATED</h3>
                    <hr class="w-50 mx-auto">
                </div>
    
                <div class="row grid-container g-4 " data-layout="masonry" style="overflow: visible">
                    @foreach($posts as $post)
                        <div class="col-lg-4">
                            <div class="flip-card text-center">
                                <div class="flip-card-front dark">
                                    <div class="flip-card-inner">
                                        <div class="card bg-transparent border-1 text-center shadow-lg p-2 bg-white rounded" >
                                            <div class="card-body text-contrast-900">
                                                <h3 class="card-title" style="font-size: 16px;">{!! $post->Title !!}</h3>
                                                <p class="card-text fw-normal" style="font-size: 12px;">{!! $post->shortDescription !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back bg-danger no-after">
                                    <div class="flip-card-inner">
                                        <p class="mb-2 text-white">{!! $post->shortDescription !!}</p>
                                        <a href="{{ route('post.show', $post->PostID) }}">
                                          <button type="button" class="btn btn-outline-light mt-2">View Details</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
    
                    <!-- Hardcoded flip card for the sixth item -->
                    <div class="col-lg-4">
                        <div class="flip-card text-center top-to-bottom">
                            <div class="flip-card-front bg-info dark">
                                <div class="flip-card-inner">
                                    <div class="card bg-transparent border-0 text-center">
                                        <div class="card-body text-contrast-900">
                                            <i class="bi-check-circle h1 mb-2"></i>
                                            <a href="/news">
                                              <h3 class="card-title">Know More...</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <div class="flip-card-inner">
                                    <p class="mb-2 text-white">Know More About News</p>
                                    <a href="/news">
                                      <button type="button" class="btn btn-outline-light mt-2">View Details</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
  {{-- End Fliping Card --}}





{{-- Card Slider --}}




    <section class="mb-5" id="content" data-onepage-settings="{&quot;offset&quot;:50,&quot;speed&quot;:800,&quot;easing&quot;:false}">
        <div class="content-wrap pb-0">
          <div class="container">
      
            <div class="fancy-title title-center title-border">
              <h3>Top Colleges</h3>
            </div>
      
            <div id="oc-images" class="owl-carousel image-carousel carousel-widget mb-1 owl-loaded owl-drag with-carousel-dots" 
                 data-items-xs="1" data-items-sm="2" data-items-lg="3">
              <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0.25s;">
      
                  @foreach($colleges as $college)
                  <div class="owl-item" style="width: 100%; margin-right: 20px;">
                    <div class="oc-item">
                      <a href="{{ url('collegeweb/' . $college->id) }}" target="_blank">
                        <img src="{{ url($college->image) }}" alt="{{ $college->title }}" class="college-img">
                      </a>
                      <div>
                        <h6 class="college-title text-center mt-2">{{ $college->title }}</h6>
                        <p class=" text-center">How to Reach</p>
                        <p class=" text-center">Courses</p>
                        <p class=" text-center">Seats</p>
                        <p class=" text-center">Cutoff</p>
                        <p class="text-center">Fee Structure</p>
                        <p class=" text-center">Placement</p>
                        <div class="d-flex justify-content-center">
                            <a href="{{ url('collegeweb/' . $college->id) }}" class="btn btn-primary mt-2">See More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
      
                </div>
              </div>
              <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev"><i class="uil uil-angle-left-b"></i></button>
                <button type="button" role="presentation" class="owl-next"><i class="uil uil-angle-right-b"></i></button>
              </div>
              <div class="owl-dots">
                <!--<button role="button" class="owl-dot"><span></span></button>-->
                <!--<button role="button" class="owl-dot active"><span></span></button>-->
              </div>
            </div>
      
          </div>
        </div>
      </section>
      
      
    
{{--  --}}


    {{-- End Card Slider --}}

      
  
   


    {{-- Footer --}}

@include('components.footer')

<!-- Footer -->

{{-- End Footer --}}
</div>
</body>

<style>
  @media only screen and (max-width: 768px) {
      #header-wrap {
          background-color: rgba(255, 255, 255, 0); /* Adjust transparency */
         
      }
  }
  </style>


<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let suggestionLimit = 6;

    $('#college-search').on('input', function() {
        const query = $(this).val();
        if (query.length > 0) {
            $.ajax({
                url: '{{ route('search.suggestions') }}',
                method: 'GET',
                data: { query: query },
                success: function(data) {
                    $('#suggestions').empty().show();
                    
                    if (data.length > 0) {
                        const limitedData = data.slice(0, suggestionLimit); // Show only 6 items
                        
                        $.each(limitedData, function(index, college) {
                            $('#suggestions').append(`<div class="suggestion-item" data-id="${college.id}">${college.title}</div>`);
                        });
                        
                        // If there are more than 6 suggestions, show "See more"
                        if (data.length > suggestionLimit) {
                            $('#suggestions').append('<div class="show-more">See More Results</div>');
                        }
                    } else {
                        $('#suggestions').append('<div class="no-suggestion">No results found</div>');
                    }
                },
                error: function() {
                    $('#suggestions').hide();
                }
            });
        } else {
            $('#suggestions').hide();
        }
    });

    // Handle click on a suggestion item
    $(document).on('click', '.suggestion-item', function() {
        const collegeId = $(this).data('id');
        if (collegeId) {
            window.location.href = `/college/${collegeId}`; // Replace with your details route
        }
    });

    // Handle "See More Results" click
    $(document).on('click', '.show-more', function() {
        suggestionLimit += 6; // Increase the limit by 6
        $('#college-search').trigger('input'); // Re-trigger the search input to load more suggestions
    });
});
</script>
<style>
 .suggestions-list {
    position: absolute;
    z-index: 1000;
    background: white;
    border: 1px solid #ddd;
    width: 400px; /* Default fixed width for larger screens */
    max-height: 200px; /* Set max height for larger screens */
    overflow-y: auto;
    border-radius: 4px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    left: 46%; /* Align center horizontally */
    transform: translateX(-50%); /* Center the box */
    top: 70%; /* Position just below the search input */
    margin-top: 0px; /* Small gap below the input */
}

/* Style each suggestion item */
.suggestion-item {
    padding: 10px 15px; /* Space around the text */
    cursor: pointer;
    transition: background 0.3s;
    font-size: 14px; /* Adjust font size */
    color: #333; /* Text color */
}

/* Hover effect for suggestion items */
.suggestion-item:hover {
    background-color: #f0f0f0; /* Hover background color */
}

/* No suggestion message styling */
.no-suggestion {
    padding: 10px;
    color: #999;
    text-align: center;
}

/* 'Show more results' button */
.show-more {
    text-align: center;
    padding: 10px;
    cursor: pointer;
    background-color: #f9f9f9;
    color: #333;
    font-weight: bold;
    border-top: 1px solid #ddd;
}

/* Responsive adjustments for tablet and smaller screens */
@media (max-width: 1024px) {
    .suggestions-list {
        width: 38%; /* Adjust width for tablets */
        left: 45%;
        top: 70%; 
        padding: 5px 5px; /* Space around the text */
    }
}

/* Responsive adjustments for mobile screens */
@media (max-width: 768px) {
    .suggestions-list {
        width: 53%; /* Adjust width for mobile devices */
        left: 44%;
        top: 70%; /* Adjust as per design */
        padding: 5px 5px; /* Space around the text */
    }

    .suggestion-item {
        font-size: 12px; /* Slightly smaller font size for mobile */
        padding: 8px 10px;
    }
}
@media (max-width: 576px) {
    .suggestions-list {
        width: 80%; /* Full width for smaller phones */
        left: 10%;
        top: 85%; /* Adjust top for smaller devices */
        padding: 5px 5px;
    }

    .suggestion-item {
        font-size: 11px; /* Smaller font for small screens */
        padding: 6px 8px;
        border-top: 1px solid rgb(255, 206, 206);
    }
}
@media (max-width: 480px) {
    .suggestions-list {
        width: 55%; /* Almost full width for extra small screens */
        left: 37%;
        top: 75%; /* Further adjust top for smaller devices */
        padding: 5px 5px;
    }

    .suggestion-item {
        font-size: 10px;
        padding: 5px 7px;
    }
}

@media (max-width: 320px) {
    .suggestions-list {
        width: 65%; /* Full width for smallest devices */
        left: 35%;
        top: 75%; /* Positioned closer to the bottom */
        padding: 5px 5px;
    }

    .suggestion-item {
        font-size: 9px;
        padding: 4px 5px;
    }
}

</style>
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


.carousel-control-prev,
    .carousel-control-next {
      background-color: #e1e1e1;
      width: 5vh;
      height: 5vh;
      border-radius: 50%;
      top: 50%;
      transform: translateY(-50%);
    }


  </style>
<style>
  .carousel-item .col-md-4 {
      padding-left: 15px;
     
  }
  .carousel-item {
      padding-left: 0;
      padding-right: 0;
  }
</style>
  
   <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
   <script src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
   <script src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
 
   <script src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
   <script src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
   <script src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
   {{-- <script src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script> --}}
 
   <script>
     var tpj=jQuery;
     var revapi100;
 
     tpj(document).ready(function() {
       if(tpj("#rev_slider_100_1").revolution == undefined){
         revslider_showDoubleJqueryError("#rev_slider_100_1");
       }else{
         revapi100 = tpj("#rev_slider_100_1").show().revolution({
           sliderType:"hero",
           jsFileLocation:"include/rs-plugin/js/",
           sliderLayout:"fullscreen",
           dottedOverlay:"none",
           delay:9000,
           navigation: {
           },
           responsiveLevels:[1200,992,768,480,320],
           gridwidth:[1140,940,720,420,280],
           gridheight:[600,500,400,300,200],
           lazyType:"none",
           parallax: {
             type:"mouse",
             origo:"slidercenter",
             speed:2000,
             levels:[2,3,4,5,6,7,12,16,10,50],
           },
           fullScreenOffsetContainer:"header",
           shadow:0,
           spinner:"off",
           autoHeight:"off",
           disableProgressBar:"on",
           hideThumbsOnMobile:"off",
           hideSliderAtLimit:0,
           hideCaptionAtLimit:0,
           hideAllCaptionAtLilmit:0,
           debugMode:false,
           fallbacks: {
             simplifyAll:"off",
             disableFocusListener:false,
           }
         });
       }
     });	/*ready*/
   </script>



<style>
    /* Ensures images and cards have a consistent size */
.oc-item {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.college-img {
  width: 100%;
  height: 120px; /* Adjust the height as needed */
  object-fit: cover;
  border-radius: 8px;
}

.college-details {
 
  padding: 1px;
}

.owl-carousel .owl-item {
  margin-right: 20px;
}

@media (min-width: 992px) {
  /* Large screens (3 items) */
  .owl-item {
    width: 33.33%;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  /* Medium screens (2 items) */
  .owl-item {
    width: 50%;
  }
}

@media (max-width: 767px) {
  /* Small screens (1 item) */
  .owl-item {
    width: 100%;
  }
}

.oc-item p {
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }
</style>



<style>
#card-scroll {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

#card-scroll .card {
    min-width: 100px; /* Adjust as needed */
    margin-right: 10px;
}

/*  */

.icon-image {
    width: 80px; /* Adjust the size to your preferred width */
    height: 80px; /* Adjust the size to your preferred height */
    object-fit: contain; /* Ensures the image scales correctly inside the box */
}

.card {
    border: 1px solid transparent;
    transition: border 0.3s ease, box-shadow 0.3s ease;
}

/* .card:hover {
    border: 0px solid #007bff; 
    box-shadow: 0 140px 140px rgb(246, 248, 248);
} */

/* Spacing between cards */
.mb-4 {
    margin-bottom: 1.5rem !important; /* Adjust the gap as per your preference */
}

/*  */

.card {
    border: 0; /* No border by default */
}

/* Border visible only on mobile screens */
@media (max-width: 767.98px) {
    .card {
        border: 1px solid slategray; /* Slate color border on mobile screens */
    }
}

</style>


{{--  --}}

<script src="{{asset('reso/js/plugins.min.js')}}"></script>
	<script src="{{asset('reso/js/functions.bundle.js')}}"></script>
</html>
