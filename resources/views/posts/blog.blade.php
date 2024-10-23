
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
	<title>Blog | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Header
		============================================= -->
	

		<!-- Page Title
		============================================= -->
		<section class="page-title bg-transparent">
			<div class="container">
				<div class="page-title-row">

					<div class="page-title-content">
						<h1>Blog</h1>
						<span>Our Latest News</span>
					</div>

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Blog</li>
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

							<!-- Posts
							============================================= -->
							<div id="posts" class="row gutter-30">
                                
                                @foreach($posts as $post)
                                @php
                                    // Extract the first image URL or base64 data from the content
                                    preg_match('/<img\s+[^>]*src=["\']([^"\']+)["\'][^>]*>/i', $post->Content, $imageMatch);
                                    $imageUrl = $imageMatch[1] ?? null;
                            
                                    // Remove HTML tags from the content
                                    $contentWithoutHtml = strip_tags($post->Content);
                            
                                    // Limit content to 30 words
                                    $words = explode(' ', $contentWithoutHtml); // Split into words
                                    $contentSnippet = implode(' ', array_slice($words, 0, 30)); // Limit to 30 words
                                    if (count($words) > 30) {
                                        $contentSnippet .= '...';
                                    }
                                @endphp
                            
                                <div class="entry col-12">
                                    <div class="grid-inner">
                                        @if ($imageUrl)
                                            <div class="entry-image">
                                                <a href="{{ $imageUrl }}" data-lightbox="image">
                                                    <img src="{{ $imageUrl }}" alt="Standard Post Image">
                                                </a>
                                            </div>
                                        @endif
                                        <div class="entry-title">
                                            <h2><a href="blog-single.html">{{ $post->Title }}</a></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="uil uil-schedule"></i> {{ $post->created_at->format('d/m/y') }}</li>
                                                <li><a href="#"><i class="uil uil-user"></i> {{ $post->user->name }}</a></li>
                                                <li><i class="uil uil-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
                                                <li><a href="blog-single.html#comments"><i class="uil uil-comments-alt"></i> 13 Comments</a></li>
                                                <li><a href="#"><i class="uil uil-camera"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p>{{ $contentSnippet }}</p>
                                            <a href="{{ route('blog.show', $post->PostID) }}" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

							<!-- Pager
							============================================= -->
							<div class="d-flex justify-content-between mt-5">
								<a href="#" class="btn btn-outline-secondary">&larr; Older</a>
								<a href="#" class="btn btn-outline-dark">Newer &rarr;</a>
							</div>
							<!-- .pager end -->

						</main><!-- .postcontent end -->

						<!-- Sidebar
						============================================= -->
						<aside class="sidebar col-lg-3">
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
						</aside><!-- .sidebar end -->
					</div>

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="row col-mb-50">
								<div class="col-md-4">

									<div class="widget">

										<img src="images/footer-widget-logo.png" alt="Image" class="footer-logo">

										<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

										<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
											<address>
												<strong>Headquarters:</strong><br>
												795 Folsom Ave, Suite 600<br>
												San Francisco, CA 94107<br>
											</address>
											<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
											<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
											<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
										</div>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget widget_links">

										<h4>Blogroll</h4>

										<ul>
											<li><a href="https://codex.wordpress.org/">Documentation</a></li>
											<li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
											<li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
											<li><a href="https://wordpress.org/support/">Support Forums</a></li>
											<li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
											<li><a href="https://wordpress.org/news/">Canvas Blog</a></li>
											<li><a href="https://planet.wordpress.org/">Canvas Planet</a></li>
										</ul>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget">
										<h4>Recent Posts</h4>

										<div class="posts-sm row col-mb-30" id="post-list-footer">
											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
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
												<div class="grid-inner row">
													<div class="col">
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
												<div class="grid-inner row">
													<div class="col">
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

								</div>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="row col-mb-50">
								<div class="col-md-4 col-lg-12">
									<div class="widget">

										<div class="row col-mb-30">
											<div class="col-lg-6">
												<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
												<h5 class="mb-0">Total Downloads</h5>
											</div>

											<div class="col-lg-6">
												<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
												<h5 class="mb-0">Clients</h5>
											</div>
										</div>

									</div>
								</div>

								<div class="col-md-5 col-lg-12">
									<div class="widget subscribe-widget">
										<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
										<div class="widget-subscribe-form-result"></div>
										<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
											<div class="input-group mx-auto">
												<div class="input-group-text"><i class="bi-envelope-plus"></i></div>
												<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
												<button class="btn btn-success" type="submit">Subscribe</button>
											</div>
										</form>
									</div>
								</div>

								<div class="col-md-3 col-lg-12">
									<div class="widget">

										<div class="row col-mb-30">
											<div class="col-6 col-md-12 col-lg-6 d-flex align-items-center">
												<a href="#" class="social-icon text-white border-transparent bg-facebook me-2 mb-0 float-none">
													<i class="fa-brands fa-facebook-f"></i>
													<i class="fa-brands fa-facebook-f"></i>
												</a>
												<a href="#" class="ms-1"><small class="d-block"><strong>Like Us</strong><br>on Facebook</small></a>
											</div>
											<div class="col-6 col-md-12 col-lg-6 d-flex align-items-center">
												<a href="#" class="social-icon text-white border-transparent bg-rss me-2 mb-0 float-none">
													<i class="fa-solid fa-rss"></i>
													<i class="fa-solid fa-rss"></i>
												</a>
												<a href="#" class="ms-1"><small class="d-block"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
											</div>
										</div>

									</div>
								</div>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-start">
							Copyrights &copy; 2023 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 text-center text-md-end">
							<div class="d-flex justify-content-center justify-content-md-end mb-2">
								<a href="#" class="social-icon border-transparent si-small h-bg-facebook">
									<i class="fa-brands fa-facebook-f"></i>
									<i class="fa-brands fa-facebook-f"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-x-twitter">
									<i class="fa-brands fa-x-twitter"></i>
									<i class="fa-brands fa-x-twitter"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-google">
									<i class="fa-brands fa-google"></i>
									<i class="fa-brands fa-google"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-pinterest">
									<i class="fa-brands fa-pinterest-p"></i>
									<i class="fa-brands fa-pinterest-p"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-vimeo">
									<i class="fa-brands fa-vimeo-v"></i>
									<i class="fa-brands fa-vimeo-v"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-github">
									<i class="fa-brands fa-github"></i>
									<i class="fa-brands fa-github"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-yahoo">
									<i class="fa-brands fa-yahoo"></i>
									<i class="fa-brands fa-yahoo"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small me-0 h-bg-linkedin">
									<i class="fa-brands fa-linkedin"></i>
									<i class="fa-brands fa-linkedin"></i>
								</a>
							</div>

							<i class="bi-envelope"></i> info@canvas.com <span class="middot">&middot;</span> <i class="fa-solid fa-phone"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="bi-skype"></i> CanvasOnSkype
						</div>

					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

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