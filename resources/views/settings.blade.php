@extends('layouts.app')
@section('content')
		@include('partials.navbar')
		<section class="pt-8">
			<div class="container">

				<!-- Offcanvas button START -->
				<div class="d-flex align-items-center mb-4 d-lg-none">
					<button class="btn btn-primary mb-0 d-xxl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<i class="fas fa-sliders-h me-1"></i>Show side bar
					</button>
				</div>
				<!-- Offcanvas button END -->

				<div class="row justify-content-center">

					<!-- Main content START -->
					<div class="col-lg-8 col-xl-9">
						<!-- Tab content START -->
						<div class="tab-content py-0 mb-0">

							<!-- Tab item START -->
							<div class="tab-pane show active fade" id="nav-setting-tab-1">
								<!-- Account setting START -->
								<div class="card mb-4 p-0">
									<!-- Card header START -->
									<div class="card-header border-bottom p-4">
										<!-- Title -->
										<h1 class="h4 mb-1 card-title">Account Settings</h1>
									</div>

									<!-- Card body START -->
									<div class="card-body p-4">
										@if (session('success'))
											<div class="alert alert-success">
												{{ session('success') }}
											</div>
										@endif

										@if ($errors->any())
											<div class="alert alert-danger">
												<ul class="mb-0">
													@foreach ($errors->all() as $error)
														<li>{{ $error }}</li>
													@endforeach
												</ul>
											</div>
										@endif

										<!-- Form settings START -->
										<form class="row g-3" method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
											@csrf

											<!-- Profile picture -->
											<div class="col-12">
												<label class="form-label">Profile picture</label>
												<!-- Avatar upload START -->
												<div class="d-flex align-items-center">
													<div class="avatar-uploader me-3">
														<!-- Avatar edit -->
														<div class="avatar-edit">
															<input type='file' name="profile_picture" id="avatarUpload" accept=".png, .jpg, .jpeg" />
															<input type="hidden" name="remove_avatar" id="remove_avatar" value="0">
															<label for="avatarUpload"></label>
														</div>
														<!-- Avatar preview -->
														<div class="avatar avatar-xl position-relative">
															<img id="avatar-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : 'https://ui-avatars.com/api/?name='.urlencode(auth()->user()->name).'&background=random' }}" alt="">
														</div>
													</div>
													<!-- Avatar remove button -->
													<div class="avatar-remove">
														<button type="button" id="avatar-reset-img" class="btn btn-danger-soft">Delete</button>
													</div>
												</div>
												<!-- Avatar upload END -->
											</div>

											<!-- Full name -->
											<div class="col-sm-12">
												<label class="form-label">Full name</label>
												<input type="text" class="form-control" name="name" placeholder="" value="{{ auth()->user()->name }}">
											</div>
											
											<!-- Instagram -->
											<div class="col-sm-6">
												<label class="form-label">Instagram</label>
												<input type="text" class="form-control" name="instagram" placeholder="" value="{{ auth()->user()->instagram }}">
											</div>
											<!-- Phone number -->
											<div class="col-sm-6">
												<label class="form-label">Phone number</label>
												<input type="text" class="form-control" name="phone_number" placeholder="" value="{{ auth()->user()->phone_number }}">
											</div>
											<!-- Email (Readonly) -->
											<div class="col-sm-6">
												<label class="form-label">Email</label>
												<input type="text" class="form-control" placeholder="" value="{{ auth()->user()->email }}" disabled readonly>
											</div>

											<!-- Page information -->
											<div class="col-12">
												<label class="form-label">About me</label>
												<textarea class="form-control" rows="4" name="bio" placeholder="Description (Optional)">{{ auth()->user()->bio }}</textarea>
												<small>Character limit: 300</small>
											</div>
											<!-- Button  -->
											<div class="col-12 text-end">
												<button type="submit" class="btn btn-sm btn-primary mb-0">Save changes</button>
											</div>
										</form>
										<!-- Settings END -->
									</div>
									<!-- Card body END -->
								</div>
								<!-- Account setting END -->

								<!-- Change password START -->
								<div class="card mb-4 p-0">
									<!-- Card header START -->
									<div class="card-header border-bottom p-4">
										<h4 class="card-title mb-1">Change your password</h4>
										<small>Securing your account with a strong password.</small>
									</div>

									<form action="{{ route('settings.password') }}" method="POST">
										@csrf
										<!-- Card body START -->
										<div class="card-body p-4">
											<div class="row g-4">
												<!-- Settings START -->
												<div class="col-xl-8 order-2 order-xl-1">
													<div class="row g-3">
														<!-- Current password -->
														<div class="col-12">
															<label class="form-label">Current password</label>
															<div class="input-group">
																<input type="password" name="current_password" class="form-control fakepassword" placeholder="Enter current password" required>
																<span class="input-group-text p-0">
																	<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2 w-40px text-center"></i>
																</span>
															</div>
															@error('current_password') <small class="text-danger">{{ $message }}</small> @enderror
														</div>
														<!-- New password -->
														<div class="col-12">
															<label class="form-label">New password</label>
															<div class="input-group">
																<input class="form-control fakepassword" name="new_password" type="password" placeholder="Enter new password" required>
																<span class="input-group-text p-0">
																	<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2 w-40px text-center"></i>
																</span>
															</div>
															@error('new_password') <small class="text-danger">{{ $message }}</small> @enderror
														</div>
														<!-- Confirm password -->
														<div class="col-12">
															<label class="form-label">Confirm password</label>
															<div class="input-group">
																<input type="password" name="new_password_confirmation" class="form-control fakepassword" placeholder="Confirm new password" required>
																<span class="input-group-text p-0">
																	<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2 w-40px text-center"></i>
																</span>
															</div>
														</div>
													</div>
												</div>
												<!-- Settings END -->

												<!-- Note START -->
												<div class="col-xl-4 order-1">
													<div class="bg-light border border-secondary p-4 rounded">
														<h6>Rules for passwords</h6>
														<small>To create a new password, you have to meet all of the following requirements</small>
														<!-- List -->
														<ul class="mb-0 ms-n2 small">
															<li>Minimum 8 characters</li>
															<li>At least one special character </li>
															<li>At least one number</li>
															<li>Can't repeat previous password</li>
														</ul>
													</div>
												</div>
												<!-- Note END -->
											</div>
										</div>
										<!-- Card body END -->

										<!-- Card footer -->
										<div class="card-footer text-end p-4 pt-0">
											<button type="submit" class="btn btn-primary mb-0">Update password</button>
										</div>
									</form>
								</div>
								<!-- Change password END -->


							</div>

						</div>
						<!-- Tab content END -->
					</div>
					<!-- Main content END -->
				</div>
			</div>
		</section>

		<script>
			document.getElementById('avatar-reset-img').addEventListener('click', function() {
				document.getElementById('avatar-preview').src = "https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=random";
				document.getElementById('remove_avatar').value = '1';
				document.getElementById('avatarUpload').value = '';
			});

			document.getElementById('avatarUpload').addEventListener('change', function(e) {
				if (e.target.files && e.target.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e) {
						document.getElementById('avatar-preview').src = e.target.result;
					}
					reader.readAsDataURL(e.target.files[0]);
					document.getElementById('remove_avatar').value = '0';
				}
			});

			// Password visibility toggle
			const togglePasswords = document.querySelectorAll('.fakepasswordicon');
			togglePasswords.forEach(icon => {
				icon.addEventListener('click', function() {
					const container = this.closest('.input-group');
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
		</script>
@endsection
