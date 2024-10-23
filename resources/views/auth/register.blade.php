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
			<div class="content-wrap">
				<div class="container">

					<div class="row g-5">
						<div class="col-md-4">
							<div class="card mb-0 p-2 border-default bg-contrast-100">
								<div class="card-body p-4">

									<img src="https://media.istockphoto.com/id/497347644/photo/hand-pressing-register-now.jpg?s=612x612&w=0&k=20&c=XzXNw7_71cx23yPATWsSnYwGytZW-KU3eTpy3WCFQgw=" alt="" height="240px">
								</div>
							</div>

						</div>

						<div class="col-md-8">

							<h3 class="mb-3">Don't have an Account? Register Now.</h3>
                            <form method="POST" action="{{ route('register') }}" class="row" >
                                @csrf
								<div class="col-6 form-group">
									<label for="register-form-name">Name:</label>
									<input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Your Name">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                   @enderror
								</div>

								<div class="col-6 form-group">
									<label for="register-form-email">Email Address:</label>
									<input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter Your Email">
                                    @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
								</div>

								<div class="w-100"></div>

								<div class="col-6 form-group">
									<label for="register-form-username">Password:</label>
									<input type="password" id="password" name="password" value="" class="form-control" placeholder="Enter Password">
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                   @enderror
								</div>

								<div class="col-6 form-group">
									<label for="password_confirmation">Repeat Password:</label>
									<input type="password" id="password_confirmation" name="password_confirmation" value="" class="form-control" placeholder="Repeat password">
								</div>

								<div class="w-100"></div>

								<div class="col-6 form-group">
									<label for="role">Role</label>
                                    <select name="role" class="form-control">
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                    @error('role')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
								</div>

								

								<div class="w-100"></div>

								<div class="col-12 form-group">
									<button type="submit" class="btn btn-dark m-0">Register Now</button>
								</div>

							</form>

						</div>
					</div>

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		

	</div>
    <!-- #wrapper end -->
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