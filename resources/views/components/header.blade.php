
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

	<link rel="stylesheet" href="{{asset('reso/css/style.css')}}">

	<!-- Font Icons -->
	<link rel="stylesheet" href="{{asset('reso/css/font-icons.css')}}">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('reso/css/custom.css')}}">

	<!-- Plugins/Components CSS -->
	<link rel="stylesheet" href="{{asset('reso/css/swiper.css')}}">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title>College-Arjuna</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header dark">
			<div id="header-wrap">
				<div class="container">
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

							<!-- Top Cart
							============================================= -->
							

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

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" {{ route('search.colleges') }}" method="GET" id="search-form">
							<input type="text" name="query" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header>
		<!-- #header end -->

		

        <script src="{{asset('/reso/js/plugins.min.js')}}"></script>
        <script src="{{asset('/reso/js/functions.bundle.js')}}"></script>

</body>
</html>