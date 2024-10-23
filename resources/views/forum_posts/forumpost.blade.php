
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <meta name="author" content="SemiColonWeb">
        <meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">
    
        <!-- Font Imports -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
    
        <!-- Core Style -->
        <link rel="stylesheet" href="{{asset('reso/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('reso/forum/forum.css')}}">
        <!-- Font Icons -->
        
        <link rel="stylesheet" href="{{asset('reso/css/font-icons.css')}}">
     <link rel="stylesheet" href="{{ asset('reso/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('reso/css/swiper.css') }}">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('reso/css/custom.css')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Document Title
        ============================================= -->
        <title>College-Arjuna</title>
    
    </head>

<body class="stretched search-overlay">

	@include('components.header')
	<!-- Document Wrapper
	============================================= -->


	@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
	<div id="wrapper">
		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element bg-color">
			<div class="container">
				<div class="row h-100">
					<div class="col-lg-6 d-flex align-self-center flex-column pt-5 pb-0 py-lg-6 mb-0 my-lg-4">
						{{-- <p class="mb-3 text-larger fw-light">Hello, <strong class="fw-bold"><u>SemiColonWeb</u></strong></p> --}}
						<h2 class="display-4" style="font-weight: 800">Welcome to College Arjuna Community.</h2>
						<div class="input-group input-group-lg mt-2 mb-4">
							{{-- <input class="form-control rounded-start border-0" type="search" placeholder="Search Your Topics.." aria-label="Search">
							<button class="btn btn-light border-0" type="submit"><i class="uil uil-search"></i></button> --}}
							<form action="{{ route('forum.search') }}" method="GET" class="input-group input-group-lg mt-2 mb-4">
								<input class="form-control rounded-start border-0" type="text" name="search" placeholder="Search Your Topics.." aria-label="Search" value="{{ request()->input('search') }}">
								<button class="btn btn-light border-0" type="submit"><i class="uil uil-search"></i></button>
							</form>
							


						</div>
						<div>
							<a href="/create"  class="button button-large border border-width-2 bg-alt py-2 rounded-1 fw-medium text-transform-none ls-0 ms-0 ms-sm-1 h-op-09"><i class="bi-file-earmark-plus"></i>Create A New Topic</a>
							<a href="" class="button button-large button-border rounded-1 fw-medium text-transform-none h-bg-alt ls-0 ms-0"><i class="bi-text-left"></i>Browse All Topics</a>
						</div>
					</div>

					<div class="col-lg-6 d-flex align-self-end flex-column">
						<img src="{{asset('reso/images/forum/images/hero.svg')}}" alt="Hero Image" style="z-index: 3; transform: translateY(45px);">
					</div>
				</div>
			</div>
			<div class="bg-alt py-5">
				<div class="container">
					<div class="d-flex">
						<h4 class="mb-0"><span class="counter counter-inherit fw-normal text-white"><i class="bi-people icon-fw"></i> <span class="color fw-semibold" data-from="100" data-to="12462" data-refresh-interval="150" data-speed="2000"></span> Members Registered.</span></h4>
						<h4 class="mb-0 ms-5"><span class="counter counter-inherit fw-normal text-white"><i class="bi-chat-dots icon-fw"></i> <span class="color fw-semibold" data-from="100" data-to="340333" data-refresh-interval="100" data-speed="2000"></span> Posts Created.</span></h4>
					</div>
				</div>
			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="row justify-content-center text-center mb-5">
						<div class="col-xl-6 col-lg-8">
							<h3 class="display-4 fw-bolder mb-3">Latest Discussions</h3>
							<a href="/create" class="button button-small button-border button-rounded  mx-0">Create A New Topic</a>

						</div>
					</div>

					<div class="mw-md mx-auto">
                      
                    <!-- Display Search Results -->
					@if($allpost->isEmpty())
					<p>No posts found for "{{ $query }}"</p>
				@else
					@foreach($allpost as $post)
					<ul class="list-unstyled mb-4">
						<li>
							<ul class="topic list-unstyled row mx-0 justify-content-between align-items-center">
								<li class="entry mb-0 col-sm-10">
									<h3 class="mb-0">
										<a class="link-dark" href="{{ route('blogdetails.show', ['id' => $post->id]) }}">
											{!! Str::words($post->postcontent, 30) !!}
										</a>
									</h3>
								</li>
								<li class="col-sm-2">
									<div class="bbp-author">
										<a href="#"><img alt="User" src="https://cdn-icons-png.flaticon.com/128/149/149071.png"></a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
					@endforeach
				@endif
                                      
							</li>
						</ul>

						{{-- <div class="pagination-wrapper">
							{{ $allpost->links() }}
						</div> --}}
						{{-- <ul class="pagination justify-content-end">
							<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="op-05" aria-hidden="true">&laquo;</span></a></li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">5</a></li>
							<li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
						</ul> --}}
					</div>

				</div>

				<div class="section" style="background-color: #bfd5dbab">
					<div class="container">
						<div class="row align-items-center col-mb-50">
							<div class="col-md-6">
								<img src="{{asset('reso/images/forum/images/doc.svg')}}" alt="Doc Image">
							</div>
							<div class="col-md-6">
								<h2 class="display-4 mb-4 fw-bold">Our Community</h2>
								<p>College Arjuna Community is a hub for students and professionals to share knowledge, discuss college life, and explore career paths. Join us to connect, learn, and grow together!</p>
								<a href="#" class="button button-large bg-alt text-white fw-medium py-2 rounded-1 ms-0 ls-0 text-transform-none"><i class="bi-file-earmark-richtext"></i>View Documentation</a>
							</div>
						</div>
					</div>
				</div>

				


			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
          
		@include('components.footer')

		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/plugins.min.js"></script>
	<script src="js/functions.bundle.js"></script>

	<!-- TinyMCE Plugin -->
	<script src="js/components/tinymce/tinymce.min.js"></script>

	<script>
		jQuery(document).ready( function(){
			jQuery('input[type="file"]').change(function(e){
				var fileName = e.target.files[0].name;
				jQuery('.custom-file-label').html(fileName);
			});

			tinymce.init({
				selector: '#post-message',
				menubar: false,
				promotion: false,
				setup: function(editor) {
					editor.on('change', function(e) {
						editor.save();
					});
				}
			});

			jQuery(function(){
		      if(window.location.hash) {
		          var hash = window.location.hash;
		          jQuery(hash).modal('toggle');
		      }
		  });
		});
	</script>
<script src="{{asset('reso/js/plugins.min.js')}}"></script>
	<script src="{{asset('reso/js/functions.bundle.js')}}"></script>
	</body>
	</html>