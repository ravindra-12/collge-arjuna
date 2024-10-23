
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
	<link rel="stylesheet" href="{{ asset('reso/css/style.css') }}">

	<!-- Font Icons -->
	<link rel="stylesheet" href="css/font-icons.css">

	<!-- Custom CSS -->
	{{-- <link rel="stylesheet" href="css/custom.css"> --}}
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title>College-Arjuna</title>

</head>

<body class="stretched">

    @include('components.header')
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0">

				<div class="section p-0 m-0 h-100 position-absolute" style="background: url('https://t4.ftcdn.net/jpg/07/76/30/29/240_F_776302943_Qxousx6OlpljTI0Gy6WvXkVUiNVLbiSY.jpg') center center no-repeat; background-size: cover;"></div>

				<div class="section bg-transparent min-vh-100 p-0 m-0">
					<div class="vertical-middle">
						<div class="container-fluid py-5 mx-auto">
							

							<div class="card mx-auto rounded-0 border-0" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
								<div class="card-body" style="padding: 40px;">
									<form method="POST" action="{{ route('login') }}" class="mb-0">
                                        @csrf
										<h3>Login to your Account</h3>

										<div class="row">
											<div class="col-12 form-group">
												<label for="login-form-username">Email:</label>
												<input type="email" id="email" name="email" value="{{ old('email') }}"  class="form-control not-dark" placeholder="Enter Your Email">
                                                @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                               @enderror
											</div>

											<div class="col-12 form-group">
												<label for="login-form-password">Password:</label>
												<input type="password" id="password" name="password" value="" class="form-control not-dark" placeholder="Enter Your Password">
                                                @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
											</div>

											<div class="col-12 form-group">
												<div class="d-flex justify-content-between">
													<button type="submit" class="button button-3d button-black m-0" id="login-form-submit">Login</button>
												
												</div>
											</div>
										</div>
									</form>

									<div class="line line-sm"></div>

									<div class="w-100 text-center">
										<h4 class="mb-3">if You dont have account</h4>
										<a href="/register" class="button button-rounded bg-facebook">Register</a>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section><!-- #content end -->

	</div><!-- #wrapper end -->
@include('components.footer')
	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
    <script src="{{asset('reso/js/plugins.min.js')}}"></script>
	<script src="{{asset('reso/js/functions.bundle.js')}}"></script>

</body>
</html>