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
							<a href="{{ route('signin') }}" class="btn btn-icon btn-light position-absolute top-0 start-0 m-3" title="Back to Sign In">
								<i class="bi bi-arrow-left"></i>
							</a>

							<h1 class="mb-2 h3 mt-3">Create new account</h1>
							<p class="mb-0">Already a member?<a href="{{ route('signin') }}"> Log in</a></p>
							
							<form class="mt-sm-4 text-start" method="POST" action="{{ route('signup') }}">
								@csrf

								<div class="mb-3">
									<label class="form-label">Full Name</label>
									<input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Enter your name" required>
									@error('name') <small class="text-danger">{{ $message }}</small> @enderror
								</div>

								<div class="mb-3">
									<label class="form-label">Enter email id</label>
									<input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
									@error('email') <small class="text-danger">{{ $message }}</small> @enderror
								</div>

								<div class="mb-3 position-relative">
									<label class="form-label">Enter password</label>
									<input type="password" name="password" class="form-control fakepassword pe-6" id="psw-input" placeholder="Enter your password" required>
									<span class="position-absolute top-50 end-0 translate-middle-y p-0 me-2 mt-3">
										<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
									</span>
									@error('password') <small class="text-danger">{{ $message }}</small> @enderror
								</div>

								<div class="mb-3 position-relative">
									<label class="form-label">Confirm Password</label>
									<input type="password" name="password_confirmation" class="form-control fakepassword pe-6" placeholder="Repeat your password" required>
									<span class="position-absolute top-50 end-0 translate-middle-y p-0 me-2 mt-3">
										<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
									</span>
								</div>

								<div class="mb-3">
									<input type="checkbox" class="form-check-input" id="rememberCheck">
									<label class="form-check-label" for="rememberCheck">Keep me signed in</label>
								</div>

								<div class="d-grid">
									<button type="submit" class="btn btn-primary">Sign Up</button>
								</div>

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
