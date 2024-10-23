
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

	<!-- Font Icons -->
	<link rel="stylesheet" href="{{asset('reso/css/font-icons.css')}}">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('reso/css/custom.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title>College-Arjuna</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

        @include('components.header')
		<!-- Header
          
		============================================= -->
	

		<!-- Page Title
		============================================= -->
        @extends('collegelayout')

     @section('content')

		<section class="page-title bg-transparent">
			<div class="container">
				<div class="page-title-row">

					<div class="page-title-content">
						<h1>{{$post->category['CategoryName']}}</h1>
						<span>Our Latest {{$post->category['CategoryName']}}</span>
					</div>

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{$post->category['CategoryName']}}</li>
						</ol>
					</nav>

				</div>
			</div>
		</section><!-- .page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="row gx-5 col-mb-80">
						<!-- Post Content
						============================================= -->
						<main class="postcontent col-lg-9">

							<div class="single-post mb-0">

								<!-- Single Post
								============================================= -->
								<div class="entry">

									<!-- Entry Title
									============================================= -->
									<div class="entry-title">
										<h2>{{$post['Title']}}</h2>
									</div><!-- .entry-title end -->

								
									<div class="entry-content mt-0">

										<div class=" mb-4">
											<div class="card-body py-2">
												<div class="row align-items-center justify-content-between fs-6">
													
                                                             {!!$post['Content']!!}
												
												</div>
											</div>
										</div>

										

									



							

						</main>
                        <!-- .postcontent end -->

						<!-- Sidebar
						============================================= -->
						 {{-- <aside class="sidebar col-lg-3">
							<div class="sidebar-widgets-wrap">

								<div class="widget widget-twitter-feed">

									<h4>Twitter Feed</h4>
									<ul class="iconlist twitter-feed" data-username="envato" data-count="2"></ul>

									<div class="d-flex justify-content-end">
										<a href="#" class="btn btn-secondary btn-sm">Follow Us on Twitter</a>
									</div>

								</div>

								<div class="widget">

									<h4>Flickr Photostream</h4>
									<div id="flickr-widget" class="flickr-feed masonry-thumbs grid-container row row-cols-4 customjs" data-id="613394@N22" data-count="16" data-type="group" data-lightbox="gallery"></div>

								</div>

								<div class="widget">

									<ul class="nav canvas-tabs tabs nav-tabs size-sm mb-3" id="canvas-tab" role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link active" id="canvas-tab-1" data-bs-toggle="pill" data-bs-target="#tab-1" type="button" role="tab" aria-controls="canvas-tab-1" aria-selected="true">Popular</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="canvas-tab-2" data-bs-toggle="pill" data-bs-target="#tab-2" type="button" role="tab" aria-controls="canvas-tab-2" aria-selected="false">Recents</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link uil uil-comments-alt" id="canvas-tab-3" data-bs-toggle="pill" data-bs-target="#tab-3" type="button" role="tab" aria-controls="canvas-tab-3" aria-selected="false"></button>
										</li>
									</ul>

									<div id="canvas-TabContent" class="tab-content">

										<div class="tab-pane show active" id="tab-1" role="tabpanel" aria-labelledby="canvas-tab-1" tabindex="0">
											<div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">
												<div class="entry col-12">
													<div class="grid-inner row g-0">
														<div class="col-auto">
															<div class="entry-image">
																<a href="#"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt="Image"></a>
															</div>
														</div>
														<div class="col ps-3">
															<div class="entry-title">
																<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
															</div>
															<div class="entry-meta">
																<ul>
																	<li><i class="uil uil-comments-alt"></i> 35 Comments</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="entry col-12">
													<div class="grid-inner row g-0">
														<div class="col-auto">
															<div class="entry-image">
																<a href="#"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt="Image"></a>
															</div>
														</div>
														<div class="col ps-3">
															<div class="entry-title">
																<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
															</div>
															<div class="entry-meta">
																<ul>
																	<li><i class="uil uil-comments-alt"></i> 24 Comments</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="entry col-12">
													<div class="grid-inner row g-0">
														<div class="col-auto">
															<div class="entry-image">
																<a href="#"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt="Image"></a>
															</div>
														</div>
														<div class="col ps-3">
															<div class="entry-title">
																<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
															</div>
															<div class="entry-meta">
																<ul>
																	<li><i class="uil uil-comments-alt"></i> 19 Comments</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab-2" role="tabpanel" aria-labelledby="canvas-tab-2" tabindex="0">
											<div class="posts-sm row col-mb-30" id="recent-post-list-sidebar">
												<div class="entry col-12">
													<div class="grid-inner row g-0">
														<div class="col-auto">
															<div class="entry-image">
																<a href="#"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt="Image"></a>
															</div>
														</div>
														<div class="col ps-3">
															<div class="entry-title">
																<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
															</div>
															<div class="entry-meta">
																<ul>
																	<li>10th July 2021</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="entry col-12">
													<div class="grid-inner row g-0">
														<div class="col-auto">
															<div class="entry-image">
																<a href="#"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt="Image"></a>
															</div>
														</div>
														<div class="col ps-3">
															<div class="entry-title">
																<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
															</div>
															<div class="entry-meta">
																<ul>
																	<li>10th July 2021</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="entry col-12">
													<div class="grid-inner row g-0">
														<div class="col-auto">
															<div class="entry-image">
																<a href="#"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt="Image"></a>
															</div>
														</div>
														<div class="col ps-3">
															<div class="entry-title">
																<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
															</div>
															<div class="entry-meta">
																<ul>
																	<li>10th July 2021</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab-3" role="tabpanel" aria-labelledby="canvas-tab-3" tabindex="0">
											<div class="posts-sm row col-mb-30" id="recent-comments-list-sidebar">
												<div class="entry col-12">
													<div class="grid-inner row g-0">
														<div class="col-auto">
															<div class="entry-image">
																<a href="#"><img class="rounded-circle" src="images/icons/avatar.jpg" alt="User Avatar"></a>
															</div>
														</div>
														<div class="col ps-3">
															<strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
														</div>
													</div>
												</div>

												<div class="entry col-12">
													<div class="grid-inner row g-0">
														<div class="col-auto">
															<div class="entry-image">
																<a href="#"><img class="rounded-circle" src="images/icons/avatar.jpg" alt="User Avatar"></a>
															</div>
														</div>
														<div class="col ps-3">
															<strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
														</div>
													</div>
												</div>

												<div class="entry col-12">
													<div class="grid-inner row g-0">
														<div class="col-auto">
															<div class="entry-image">
																<a href="#"><img class="rounded-circle" src="images/icons/avatar.jpg" alt="User Avatar"></a>
															</div>
														</div>
														<div class="col ps-3">
															<strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>

								</div>

								<div class="widget">

									<h4>Portfolio Carousel</h4>
									<div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

										<div class="oc-item">
											<div class="portfolio-item">
												<div class="portfolio-image">
													<a href="#">
														<img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
													</a>
													<div class="bg-overlay">
														<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
															<a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-speed="350" data-lightbox="iframe"><i class="uil uil-play"></i></a>
														</div>
														<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
													</div>
												</div>
												<div class="portfolio-desc text-center pb-0">
													<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
													<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
												</div>
											</div>
										</div>

										<div class="oc-item">
											<div class="portfolio-item">
												<div class="portfolio-image">
													<a href="portfolio-single.html">
														<img src="images/portfolio/4/1.jpg" alt="Open Imagination">
													</a>
													<div class="bg-overlay">
														<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
															<a href="images/blog/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-speed="350" data-lightbox="image"><i class="uil uil-plus"></i></a>
														</div>
														<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
													</div>
												</div>
												<div class="portfolio-desc text-center pb-0">
													<h3><a href="portfolio-single.html">Open Imagination</a></h3>
													<span><a href="#">Media</a>, <a href="#">Icons</a></span>
												</div>
											</div>
										</div>

									</div>
								</div>

								<div class="widget">

									<h4>Tag Cloud</h4>
									<div class="tagcloud">
										<a href="#">general</a>
										<a href="#">videos</a>
										<a href="#">music</a>
										<a href="#">media</a>
										<a href="#">photography</a>
										<a href="#">parallax</a>
										<a href="#">ecommerce</a>
										<a href="#">terms</a>
										<a href="#">coupons</a>
										<a href="#">modern</a>
									</div>

								</div>

							</div>
						</aside>  --}}
                        

                        <!-- .sidebar end -->
					</div>

				</div>
			</div>
		</section>

        @endsection
        <!-- #content end -->

		<!-- Footer
		============================================= -->
		
        <!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('reso/js/plugins.min.js')}}"></script>
	<script src="{{asset('reso/js/functions.bundle.js')}}"></script>

</body>
</html>