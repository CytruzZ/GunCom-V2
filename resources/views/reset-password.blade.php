<!DOCTYPE html>
<html lang="en">

<head>
	@include('partials.title-meta')

	@include('partials.head-css')
</head>

<body>

	<!-- **************** MAIN CONTENT START **************** -->
	<main>
		<section class="py-0">
			<div class="container">
				<div class="row justify-content-center text-center align-items-center vh-100 py-5">
					<div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5">
						<div class="card card-body p-4 p-sm-5">

							<h1 class="mb-2 h3">Reset Password</h1>
							<p class="mb-0">Enter your new password below.</p>
							
							<form class="mt-sm-4 text-start" method="POST" action="{{ route('password.update') }}">
								@csrf
								<input type="hidden" name="token" value="{{ $token }}">

								<div class="mb-3">
									<label class="form-label">Email Address</label>
									<input type="email" name="email" class="form-control" value="{{ $email ?? old('email') }}" required autofocus>
									@error('email')
										<small class="text-danger">{{ $message }}</small>
									@enderror
								</div>

								<div class="mb-3 position-relative">
									<label class="form-label">New Password</label>
									<input type="password" name="password" class="form-control fakepassword pe-6" id="psw-input" placeholder="Enter your new password" required>
									<span class="position-absolute top-50 end-0 translate-middle-y p-0 me-2 mt-3">
										<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
									</span>
									@error('password')
										<small class="text-danger">{{ $message }}</small>
									@enderror
								</div>
								
								<div class="mb-3 position-relative">
									<label class="form-label">Confirm Password</label>
									<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm your new password" required>
								</div>

								<div class="d-grid"><button type="submit" class="btn btn-primary">Reset Password</button></div>

								<p class="mb-0 mt-3 text-center">©2026 <a target="_blank" href="#">GunCom</a> All rights reserved</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- **************** MAIN CONTENT END **************** -->

	<div class="back-top"></div>

	@include('partials.footer-scripts')
	
</body>

</html>
