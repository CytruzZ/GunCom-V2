<!DOCTYPE html>
<html lang="en">

<head>
	@include('partials.title-meta')

	@include('partials.head-css')
</head>

<body>

	<!-- **************** MAIN CONTENT START **************** -->
	<main>
		<!-- =======================Page banner START -->
		<section class="py-0">
			<div class="container">
				<div class="row justify-content-center text-center align-items-center vh-100 py-5">
					<!-- Main content START -->
					<div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5">
						<!-- Sign in START -->
						<div class="card card-body p-4 p-sm-5">

							<!-- Title -->
							<h1 class="mb-2 h3">Forgot password?</h1>
							<p class="mb-0">Enter the email address associated with account.</p>
							<!-- Form START -->
							<form class="mt-sm-4 text-start" method="POST" action="{{ route('password.email') }}">
								@csrf
								<!-- Password -->
								<div class="mb-3">
									<label class="form-label">Enter email id</label>
									<input type="email" name="email" class="form-control" required autofocus>
									@error('email')
										<small class="text-danger">{{ $message }}</small>
									@enderror
									@if (session('status'))
										<small class="text-success">{{ session('status') }}</small>
									@endif
								</div>
								<!-- Links -->
								<div class="mb-3 text-center">
									<p>Back to <a href="{{ route('signin') }}">Sign in</a></p>
								</div>
								<!-- Button -->
								<div class="d-grid"><button type="submit" class="btn btn-primary">Send Reset Link</button></div>

								<!-- Copyright -->
								<p class="mb-0 mt-3 text-center">©2026 <a target="_blank" href="#">GunCom</a> All rights reserved</p>
							</form>
							<!-- Form END -->
						</div>
						<!-- Sign in START -->
					</div>
				</div> <!-- Row END -->
			</div>
		</section>
		<!-- =======================Page banner START -->
	</main>
	<!-- **************** MAIN CONTENT END **************** -->

	<!-- Back to top -->
	<div class="back-top"></div>

	@include('partials.footer-scripts')
	
</body>

</html>
