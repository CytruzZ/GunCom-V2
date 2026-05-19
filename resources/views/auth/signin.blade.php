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
						<div class="card card-body p-4 p-sm-5 position-relative">
							<!-- Back Button -->
							<a href="{{ route('index') }}" class="btn btn-icon btn-light position-absolute top-0 start-0 m-3" title="Back to Home">
								<i class="bi bi-arrow-left"></i>
							</a>
							<h1 class="mb-2 h3 mt-3">Welcome back</h1>
							<p class="mb-0">New here?<a href="{{ route('signup') }}"> Create an account</a></p>
							
							<form class="mt-sm-4 text-start" method="POST" action="{{ route('signin') }}">
								@csrf
								@if (session('status'))
									<div class="alert alert-success">
										{{ session('status') }}
									</div>
								@endif
								@if (session('error'))
									<div class="alert alert-danger">
										{{ session('error') }}
									</div>
								@endif

								<div class="mb-3">
									<label class="form-label">Enter email id</label>
									<input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
									@error('email')
										<small class="text-danger">{{ $message }}</small>
									@enderror
								</div>

								<div class="mb-3 position-relative">
									<label class="form-label">Enter password</label>
									<input type="password" name="password" class="form-control fakepassword pe-6" id="psw-input" placeholder="Enter your password" required>
									<span class="position-absolute top-50 end-0 translate-middle-y p-0 me-2 mt-3">
										<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
									</span>
								</div>

								<div class="mb-3 d-sm-flex justify-content-between">
									<div>
										<input type="checkbox" name="remember" class="form-check-input" id="rememberCheck">
										<label class="form-check-label" for="rememberCheck">Remember me?</label>
									</div>
									<a href="{{ route('forgot-password') }}">Forgot password?</a>
								</div>

								<div class="d-grid"><button type="submit" class="btn btn-primary">Login</button></div>

								<p class="mb-0 mt-3 text-center">©2026 <a target="_blank" href="#">GunCom.</a> All rights reserved</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- **************** MAIN CONTENT END **************** -->

	<!-- Back to top -->
	<div class="back-top"></div>

	@include('partials.footer-scripts')
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const togglePasswords = document.querySelectorAll('.fakepasswordicon');
			togglePasswords.forEach(icon => {
				icon.addEventListener('click', function() {
					const container = this.closest('.position-relative');
					const input = container.querySelector('input');
					
					if (input.type === 'password') {
						input.type = 'text';
						this.classList.remove('fa-eye-slash');
						this.classList.add('fa-eye');
					} else {
						input.type = 'password';
						this.classList.remove('fa-eye');
						this.classList.add('fa-eye-slash');
					}
				});
			});
		});
	</script>
</body>

</html>
