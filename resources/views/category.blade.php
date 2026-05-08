@extends('layouts.app')
@section('content')
		<!-- =======================Page Content START -->
		<section class="pt-8">
			<div class="container">

				<!-- Title -->
				<h1 class="mb-4 mb-md-5">Discover Categories</h1>

				<!-- Search and button -->
				<div class="row g-3 g-sm-4 mb-4">
					<!-- Search -->
					<div class="col-sm-6 col-md-7">
						<form class="rounded position-relative">
							<input class="form-control form-control-lg" type="search" placeholder="Search" aria-label="Search">
							<button class="bg-transparent border-0 text-primary-hover position-absolute top-50 end-0 translate-middle-y px-3" type="submit">
								<i class="fas fa-search"></i>
							</button>
						</form>
					</div>
					<!-- Button -->
					<div class="col-sm-6 col-md-4 d-grid d-sm-block text-end ms-auto">
						<a href="#" class="btn btn-lg btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#createCategory"><i class="fa-solid fa-plus me-2"></i>Create category</a>
					</div>
				</div>

				<div class="row g-4 mb-4">
					<!-- Category item START -->
					<div class="col-md-6 col-lg-4">
						<!-- Card START -->
						<div class="card border h-100">

							<!-- Dropdown button -->
							<div class="dropdown position-absolute end-0 top-0 m-3">
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-round btn-light mb-0 flex-shrink-0" role="button" id="dropdownbutton1" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-three-dots"></i>
								</a>
								<!-- dropdown item -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto" aria-labelledby="dropdownbutton1">
									<li><a class="dropdown-item" href="#"><i class="bi bi-exclamation-octagon fa-fw me-1"></i>Report</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-mic-mute fa-fw me-1"></i>Mute</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-1"></i>Manage</a></li>
								</ul>
							</div>

							<!-- Card body START -->
							<div class="card-body">
								<!-- Avatar -->
								<div class="avatar avatar-sm mb-3">
									<img class="avatar-img" src="{{ asset('assets/images/elements/category/11.svg') }}" alt="">
								</div>

								<!-- Title and info -->
								<h5 class="card-title"> <a href="category-post.php">Technology</a> </h5>
								<!-- Info -->
								<ul class="nav nav-divider small mt-2">
									<li class="nav-item"><i class="bi bi-person-plus-fill me-1"></i>1.2K Followers</li>
									<li class="nav-item"><i class="bi bi-file-post me-1"></i>215 Total Post</li>
								</ul>

							</div>
							<!-- Card body END -->

							<!-- Card Footer START -->
							<div class="card-footer d-flex justify-content-between align-items-center pt-2">
								<!-- Avatar group START -->
								<ul class="avatar-group list-unstyled mb-0">
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/02.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/03.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/04.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/05.jpg') }}" alt="avatar">
									</li>
								</ul>
								<!-- Avatar group END -->

								<!-- Button -->
								<a class="btn btn-sm btn-primary-soft mb-0 mt-auto" href="#!"><i class="fa-solid fa-plus me-2"></i>Follow </a>
							</div>
							<!-- Card Footer END -->
						</div>
						<!-- Card END -->
					</div>
					<!-- Category item END -->

					<!-- Category item START -->
					<div class="col-md-6 col-lg-4">
						<!-- Card START -->
						<div class="card border h-100">

							<!-- Dropdown button -->
							<div class="dropdown position-absolute end-0 top-0 m-3">
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-round btn-light mb-0 flex-shrink-0" role="button" id="dropdownbutton3" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-three-dots"></i>
								</a>
								<!-- dropdown item -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto" aria-labelledby="dropdownbutton3">
									<li><a class="dropdown-item" href="#"><i class="bi bi-exclamation-octagon fa-fw me-1"></i>Report</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-mic-mute fa-fw me-1"></i>Mute</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-1"></i>Manage</a></li>
								</ul>
							</div>

							<!-- Card body START -->
							<div class="card-body">
								<!-- Avatar -->
								<div class="avatar avatar-sm mb-3">
									<img class="avatar-img" src="{{ asset('assets/images/elements/category/01.svg') }}" alt="">
								</div>

								<!-- Title and info -->
								<h5 class="card-title"> <a href="category-post.php">Maths & Arithmetics</a> </h5>
								<!-- Info -->
								<ul class="nav nav-divider small mt-2">
									<li class="nav-item"><i class="bi bi-person-plus-fill me-1"></i>80K Followers</li>
									<li class="nav-item"><i class="bi bi-file-post me-1"></i>385 Total Post</li>
								</ul>

							</div>
							<!-- Card body END -->

							<!-- Card Footer START -->
							<div class="card-footer d-flex justify-content-between align-items-center pt-2">
								<!-- Avatar group -->
								<ul class="avatar-group list-unstyled mb-0">
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/09.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/08.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/07.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/06.jpg') }}" alt="avatar">
									</li>
								</ul>

								<!-- Button -->
								<a class="btn btn-sm btn-primary-soft mb-0 mt-auto" href="#!"><i class="fa-solid fa-plus me-2"></i>Follow </a>
							</div>
							<!-- Card Footer END -->
						</div>
						<!-- Card END -->
					</div>
					<!-- Category item END -->

					<!-- Category item START -->
					<div class="col-md-6 col-lg-4">
						<!-- Card START -->
						<div class="card border h-100">

							<!-- Dropdown button -->
							<div class="dropdown position-absolute end-0 top-0 m-3">
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-round btn-light mb-0 flex-shrink-0" role="button" id="dropdownbutton4" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-three-dots"></i>
								</a>
								<!-- dropdown item -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto" aria-labelledby="dropdownbutton4">
									<li><a class="dropdown-item" href="#"><i class="bi bi-exclamation-octagon fa-fw me-1"></i>Report</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-mic-mute fa-fw me-1"></i>Mute</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-1"></i>Manage</a></li>
								</ul>
							</div>

							<!-- Card body START -->
							<div class="card-body">
								<!-- Avatar -->
								<div class="avatar avatar-sm mb-3">
									<img class="avatar-img" src="{{ asset('assets/images/elements/category/02.svg') }}" alt="">
								</div>

								<!-- Title and info -->
								<h5 class="card-title"> <a href="category-post.php">Business & Finance</a> </h5>

								<!-- Info -->
								<ul class="nav nav-divider small mt-2">
									<li class="nav-item"><i class="bi bi-person-plus-fill me-1"></i>1M Followers</li>
									<li class="nav-item"><i class="bi bi-file-post me-1"></i>1.5K Total Post</li>
								</ul>

							</div>
							<!-- Card body END -->

							<!-- Card Footer START -->
							<div class="card-footer d-flex justify-content-between align-items-center pt-2">
								<!-- Avatar group -->
								<ul class="avatar-group list-unstyled mb-0">
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/04.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/10.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/08.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/05.jpg') }}" alt="avatar">
									</li>
								</ul>

								<!-- Button -->
								<a class="btn btn-sm btn-primary-soft mb-0 mt-auto" href="#!"><i class="fa-solid fa-plus me-2"></i>Follow </a>
							</div>
							<!-- Card Footer END -->
						</div>
						<!-- Card END -->
					</div>
					<!-- Category item END -->

					<!-- Category item START -->
					<div class="col-md-6 col-lg-4">
						<!-- Card START -->
						<div class="card border h-100">

							<!-- Dropdown button -->
							<div class="dropdown position-absolute end-0 top-0 m-3">
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-round btn-light mb-0 flex-shrink-0" role="button" id="dropdownbutton5" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-three-dots"></i>
								</a>
								<!-- dropdown item -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto" aria-labelledby="dropdownbutton5">
									<li><a class="dropdown-item" href="#"><i class="bi bi-exclamation-octagon fa-fw me-1"></i>Report</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-mic-mute fa-fw me-1"></i>Mute</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-1"></i>Manage</a></li>
								</ul>
							</div>

							<!-- Card body START -->
							<div class="card-body">
								<!-- Avatar -->
								<div class="avatar avatar-sm mb-3">
									<img class="avatar-img" src="{{ asset('assets/images/elements/category/04.svg') }}" alt="">
								</div>

								<!-- Title and info -->
								<h5 class="card-title"> <a href="category-post.php">Health</a> </h5>

								<!-- Info -->
								<ul class="nav nav-divider small mt-2">
									<li class="nav-item"><i class="bi bi-person-plus-fill me-1"></i>500 Followers</li>
									<li class="nav-item"><i class="bi bi-file-post me-1"></i>38 Total Post</li>
								</ul>

							</div>
							<!-- Card body END -->

							<!-- Card Footer START -->
							<div class="card-footer d-flex justify-content-between align-items-center pt-2">
								<!-- Avatar group -->
								<ul class="avatar-group list-unstyled mb-0">
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/12.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/06.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/09.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
									</li>
								</ul>

								<!-- Button -->
								<a class="btn btn-sm btn-primary-soft mb-0 mt-auto" href="#!"><i class="fa-solid fa-plus me-2"></i>Follow </a>
							</div>
							<!-- Card Footer END -->
						</div>
						<!-- Card END -->
					</div>
					<!-- Category item END -->

					<!-- Category item START -->
					<div class="col-md-6 col-lg-4">
						<!-- Card START -->
						<div class="card border h-100">

							<!-- Dropdown button -->
							<div class="dropdown position-absolute end-0 top-0 m-3">
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-round btn-light mb-0 flex-shrink-0" role="button" id="dropdownbutton6" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-three-dots"></i>
								</a>
								<!-- dropdown item -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto" aria-labelledby="dropdownbutton6">
									<li><a class="dropdown-item" href="#"><i class="bi bi-exclamation-octagon fa-fw me-1"></i>Report</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-mic-mute fa-fw me-1"></i>Mute</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-1"></i>Manage</a></li>
								</ul>
							</div>

							<!-- Card body START -->
							<div class="card-body">
								<!-- Avatar -->
								<div class="avatar avatar-sm mb-3">
									<img class="avatar-img" src="{{ asset('assets/images/elements/category/05.svg') }}" alt="">
								</div>

								<!-- Title and info -->
								<h5 class="card-title"> <a href="category-post.php">Tax Accountants</a> </h5>

								<!-- Info -->
								<ul class="nav nav-divider small mt-2">
									<li class="nav-item"><i class="bi bi-person-plus-fill me-1"></i>5K Followers</li>
									<li class="nav-item"><i class="bi bi-file-post me-1"></i>185 Total Post</li>
								</ul>

							</div>
							<!-- Card body END -->

							<!-- Card Footer START -->
							<div class="card-footer d-flex justify-content-between align-items-center pt-2">
								<!-- Avatar group -->
								<ul class="avatar-group list-unstyled mb-0">
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/02.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/11.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/09.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/07.jpg') }}" alt="avatar">
									</li>
								</ul>

								<!-- Button -->
								<a class="btn btn-sm btn-primary-soft mb-0 mt-auto" href="#!"><i class="fa-solid fa-plus me-2"></i>Follow </a>
							</div>
							<!-- Card Footer END -->
						</div>
						<!-- Card END -->
					</div>
					<!-- Category item END -->

					<!-- Category item START -->
					<div class="col-md-6 col-lg-4">
						<!-- Card START -->
						<div class="card border h-100">

							<!-- Dropdown button -->
							<div class="dropdown position-absolute end-0 top-0 m-3">
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-round btn-light mb-0 flex-shrink-0" role="button" id="dropdownbutton7" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-three-dots"></i>
								</a>
								<!-- dropdown item -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto" aria-labelledby="dropdownbutton7">
									<li><a class="dropdown-item" href="#"><i class="bi bi-exclamation-octagon fa-fw me-1"></i>Report</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-mic-mute fa-fw me-1"></i>Mute</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-1"></i>Manage</a></li>
								</ul>
							</div>

							<!-- Card body START -->
							<div class="card-body">
								<!-- Avatar -->
								<div class="avatar avatar-sm mb-3">
									<img class="avatar-img" src="{{ asset('assets/images/elements/category/06.svg') }}" alt="">
								</div>

								<!-- Title and info -->
								<h5 class="card-title"> <a href="category-post.php">Law & Legal Issue</a> </h5>

								<!-- Info -->
								<ul class="nav nav-divider small mt-2">
									<li class="nav-item"><i class="bi bi-person-plus-fill me-1"></i>3.2K Followers</li>
									<li class="nav-item"><i class="bi bi-file-post me-1"></i>105 Total Post</li>
								</ul>

							</div>
							<!-- Card body END -->

							<!-- Card Footer START -->
							<div class="card-footer d-flex justify-content-between align-items-center pt-2">
								<!-- Avatar group -->
								<ul class="avatar-group list-unstyled mb-0">
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/08.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/12.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/05.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/09.jpg') }}" alt="avatar">
									</li>
								</ul>

								<!-- Button -->
								<a class="btn btn-sm btn-primary-soft mb-0 mt-auto" href="#!"><i class="fa-solid fa-plus me-2"></i>Follow </a>
							</div>
							<!-- Card Footer END -->
						</div>
						<!-- Card END -->
					</div>
					<!-- Category item END -->

					<!-- Category item START -->
					<div class="col-md-6 col-lg-4">
						<!-- Card START -->
						<div class="card border h-100">

							<!-- Dropdown button -->
							<div class="dropdown position-absolute end-0 top-0 m-3">
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-round btn-light mb-0 flex-shrink-0" role="button" id="dropdownbutton8" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-three-dots"></i>
								</a>
								<!-- dropdown item -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto" aria-labelledby="dropdownbutton8">
									<li><a class="dropdown-item" href="#"><i class="bi bi-exclamation-octagon fa-fw me-1"></i>Report</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-mic-mute fa-fw me-1"></i>Mute</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-1"></i>Manage</a></li>
								</ul>
							</div>

							<!-- Card body START -->
							<div class="card-body">
								<!-- Avatar -->
								<div class="avatar avatar-sm mb-3">
									<img class="avatar-img" src="{{ asset('assets/images/elements/category/07.svg') }}" alt="">
								</div>

								<!-- Title and info -->
								<h5 class="card-title"> <a href="category-post.php">TV & News</a> </h5>

								<!-- Info -->
								<ul class="nav nav-divider small mt-2">
									<li class="nav-item"><i class="bi bi-person-plus-fill me-1"></i>4M Followers</li>
									<li class="nav-item"><i class="bi bi-file-post me-1"></i>220 Total Post</li>
								</ul>

							</div>
							<!-- Card body END -->

							<!-- Card Footer START -->
							<div class="card-footer d-flex justify-content-between align-items-center pt-2">
								<!-- Avatar group -->
								<ul class="avatar-group list-unstyled mb-0">
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/04.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/08.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/12.jpg') }}" alt="avatar">
									</li>
								</ul>

								<!-- Button -->
								<a class="btn btn-sm btn-primary-soft mb-0 mt-auto" href="#!"><i class="fa-solid fa-plus me-2"></i>Follow </a>
							</div>
							<!-- Card Footer END -->
						</div>
						<!-- Card END -->
					</div>
					<!-- Category item END -->

					<!-- Category item START -->
					<div class="col-md-6 col-lg-4">
						<!-- Card START -->
						<div class="card border h-100">

							<!-- Dropdown button -->
							<div class="dropdown position-absolute end-0 top-0 m-3">
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-round btn-light mb-0 flex-shrink-0" role="button" id="dropdownbutton9" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-three-dots"></i>
								</a>
								<!-- dropdown item -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto" aria-labelledby="dropdownbutton9">
									<li><a class="dropdown-item" href="#"><i class="bi bi-exclamation-octagon fa-fw me-1"></i>Report</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-mic-mute fa-fw me-1"></i>Mute</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-1"></i>Manage</a></li>
								</ul>
							</div>

							<!-- Card body START -->
							<div class="card-body">
								<!-- Avatar -->
								<div class="avatar avatar-sm mb-3">
									<img class="avatar-img" src="{{ asset('assets/images/elements/category/08.svg') }}" alt="">
								</div>

								<!-- Title and info -->
								<h5 class="card-title"> <a href="category-post.php">Mechanics</a> </h5>

								<!-- Info -->
								<ul class="nav nav-divider small mt-2">
									<li class="nav-item"><i class="bi bi-person-plus-fill me-1"></i>2K Followers</li>
									<li class="nav-item"><i class="bi bi-file-post me-1"></i>42 Total Post</li>
								</ul>

							</div>
							<!-- Card body END -->

							<!-- Card Footer START -->
							<div class="card-footer d-flex justify-content-between align-items-center pt-2">
								<!-- Avatar group -->
								<ul class="avatar-group list-unstyled mb-0">
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/08.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/02.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/08.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/12.jpg') }}" alt="avatar">
									</li>
								</ul>

								<!-- Button -->
								<a class="btn btn-sm btn-primary-soft mb-0 mt-auto" href="#!"><i class="fa-solid fa-plus me-2"></i>Follow </a>
							</div>
							<!-- Card Footer END -->
						</div>
						<!-- Card END -->
					</div>
					<!-- Category item END -->

					<!-- Category item START -->
					<div class="col-md-6 col-lg-4">
						<!-- Card START -->
						<div class="card border h-100">

							<!-- Dropdown button -->
							<div class="dropdown position-absolute end-0 top-0 m-3">
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-round btn-light mb-0 flex-shrink-0" role="button" id="dropdownbutton2" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-three-dots"></i>
								</a>
								<!-- dropdown item -->
								<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto" aria-labelledby="dropdownbutton2">
									<li><a class="dropdown-item" href="#"><i class="bi bi-exclamation-octagon fa-fw me-1"></i>Report</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-mic-mute fa-fw me-1"></i>Mute</a></li>
									<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-1"></i>Manage</a></li>
								</ul>
							</div>

							<!-- Card body START -->
							<div class="card-body">
								<!-- Avatar -->
								<div class="avatar avatar-sm mb-3">
									<img class="avatar-img" src="{{ asset('assets/images/elements/category/09.svg') }}" alt="">
								</div>

								<!-- Title and info -->
								<h5 class="card-title"> <a href="category-post.php">History</a> </h5>

								<!-- Info -->
								<ul class="nav nav-divider small mt-2">
									<li class="nav-item"><i class="bi bi-person-plus-fill me-1"></i>6M Followers</li>
									<li class="nav-item"><i class="bi bi-file-post me-1"></i>18K Total Post</li>
								</ul>

							</div>
							<!-- Card body END -->

							<!-- Card Footer START -->
							<div class="card-footer d-flex justify-content-between align-items-center pt-2">
								<!-- Avatar group -->
								<ul class="avatar-group list-unstyled mb-0">
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/10.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/11.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/08.jpg') }}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/05.jpg') }}" alt="avatar">
									</li>
								</ul>

								<!-- Button -->
								<a class="btn btn-sm btn-primary-soft mb-0 mt-auto" href="#!"><i class="fa-solid fa-plus me-2"></i>Follow </a>
							</div>
							<!-- Card Footer END -->
						</div>
						<!-- Card END -->
					</div>
					<!-- Category item END -->
				</div> <!-- Row END -->

				<!-- Categories START -->
				<div class="card p-0">
					<!-- Card header -->
					<div class="card-header p-4 pb-0">
						<h4 class="mb-0">Suggested Categories</h4>
					</div>

					<!-- Card body START -->
					<div class="card-body p-4">
						<div class="row g-4">
							<!-- Category item START -->
							<div class="col-xl-6">
								<!-- Card START -->
								<div class="card p-4 border">
									<div class="row g-4 g-md-5">
										<div class="col-sm-3 col-md-2">
											<!-- Avatar -->
											<div class="avatar avatar-lg">
												<a href="#"><img class="avatar-img" src="{{ asset('assets/images/elements/category/12.svg') }}" alt=""></a>
											</div>
										</div>

										<div class="col-sm-9 col-md-10">
											<!-- Card body START -->
											<div class="card-body p-0">
												<!-- Title -->
												<h5 class="card-title mb-2"> <a href="category-post.php">Language & Literature</a> </h5>
												<p class="mb-2">Defective arranging rapturous did believe him all had supported.</p>
												<!-- Info -->
												<ul class="nav nav-divider small">
													<li class="nav-item"><i class="bi bi-person-plus-fill me-1"></i>4M Followers</li>
													<li class="nav-item"><i class="bi bi-file-post me-1"></i>220 Total Post</li>
												</ul>

												<!-- Avatar group and button -->
												<div class="hstack gap-3 flex-wrap mt-4">
													<!-- Avatar group START -->
													<ul class="avatar-group list-unstyled mb-0">
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/02.jpg') }}" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/11.jpg') }}" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/09.jpg') }}" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/07.jpg') }}" alt="avatar">
														</li>
													</ul>
													<!-- Avatar group END -->

													<!-- Button -->
													<a class="btn btn-sm btn-primary-soft mb-0 ms-sm-auto" href="#!"><i class="fa-solid fa-plus me-2"></i>Follow</a>
												</div>
											</div>
											<!-- Card body END -->
										</div>
									</div> <!-- Row END -->
								</div>
								<!-- Card END -->
							</div>
							<!-- Category item END -->

							<!-- Category item START -->
							<div class="col-xl-6">
								<!-- Card START -->
								<div class="card p-4 border">
									<div class="row g-4 g-md-5">
										<div class="col-sm-3 col-md-2">
											<!-- Avatar -->
											<div class="avatar avatar-lg">
												<a href="#"><img class="avatar-img" src="{{ asset('assets/images/elements/category/05.svg') }}" alt=""></a>
											</div>
										</div>

										<div class="col-sm-9 col-md-10">
											<!-- Card body START -->
											<div class="card-body p-0">
												<!-- Title -->
												<h5 class="card-title mb-2"> <a href="category-post.php">Tax Accountants</a> </h5>
												<p class="mb-2">Defective arranging rapturous did believe him all had supported.</p>
												<!-- Info -->
												<ul class="nav nav-divider small">
													<li class="nav-item"><i class="bi bi-person-plus-fill me-1"></i>215 Followers</li>
													<li class="nav-item"><i class="bi bi-file-post me-1"></i>51 Total Post</li>
												</ul>

												<!-- Avatar group and button -->
												<div class="hstack gap-3 flex-wrap mt-4">
													<!-- Avatar group START -->
													<ul class="avatar-group list-unstyled mb-0">
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/08.jpg') }}" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/02.jpg') }}" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/08.jpg') }}" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/12.jpg') }}" alt="avatar">
														</li>
													</ul>
													<!-- Avatar group END -->

													<!-- Button -->
													<a class="btn btn-sm btn-primary-soft mb-0 ms-sm-auto" href="#!"><i class="fa-solid fa-plus me-2"></i>Follow</a>
												</div>
											</div>
											<!-- Card body END -->
										</div>
									</div> <!-- Row END -->
								</div>
								<!-- Card END -->
							</div>
							<!-- Category item END -->

							<!-- Category item START -->
							<div class="col-xl-6">
								<!-- Card START -->
								<div class="card p-4 border">
									<div class="row g-4 g-md-5">
										<div class="col-sm-3 col-md-2">
											<!-- Avatar -->
											<div class="avatar avatar-lg">
												<a href="#"><img class="avatar-img" src="{{ asset('assets/images/elements/category/04.svg') }}" alt=""></a>
											</div>
										</div>

										<div class="col-sm-9 col-md-10">
											<!-- Card body START -->
											<div class="card-body p-0">
												<!-- Title -->
												<h5 class="card-title mb-2"> <a href="category-post.php">Health</a> </h5>
												<p class="mb-2">Family months lasted simple set nature vulgar him. Picture for attempt joy excited.</p>
												<!-- Info -->
												<ul class="nav nav-divider small">
													<li class="nav-item"><i class="bi bi-person-plus-fill me-1"></i>1M Followers</li>
													<li class="nav-item"><i class="bi bi-file-post me-1"></i>10K Total Post</li>
												</ul>

												<!-- Avatar group and button -->
												<div class="hstack gap-3 flex-wrap mt-4">
													<!-- Avatar group START -->
													<ul class="avatar-group list-unstyled mb-0">
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/12.jpg') }}" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/10.jpg') }}" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/05.jpg') }}" alt="avatar">
														</li>
													</ul>
													<!-- Avatar group END -->

													<!-- Button -->
													<a class="btn btn-sm btn-primary-soft mb-0 ms-sm-auto" href="#!"><i class="fa-solid fa-plus me-2"></i>Follow</a>
												</div>
											</div>
											<!-- Card body END -->
										</div>
									</div> <!-- Row END -->
								</div>
								<!-- Card END -->
							</div>
							<!-- Category item END -->

							<!-- Category item START -->
							<div class="col-xl-6">
								<!-- Card START -->
								<div class="card p-4 border">
									<div class="row g-4 g-md-5">
										<div class="col-sm-3 col-md-2">
											<!-- Avatar -->
											<div class="avatar avatar-lg">
												<a href="#"><img class="avatar-img" src="{{ asset('assets/images/elements/category/08.svg') }}" alt=""></a>
											</div>
										</div>

										<div class="col-sm-9 col-md-10">
											<!-- Card body START -->
											<div class="card-body p-0">
												<!-- Title -->
												<h5 class="card-title mb-2"> <a href="category-post.php">Mechanics</a> </h5>
												<p class="mb-2">Family months lasted simple set nature vulgar him. Picture for attempt joy excited.</p>
												<!-- Info -->
												<ul class="nav nav-divider small">
													<li class="nav-item"><i class="bi bi-person-plus-fill me-1"></i>2K Followers</li>
													<li class="nav-item"><i class="bi bi-file-post me-1"></i>125 Total Post</li>
												</ul>

												<!-- Avatar group and button -->
												<div class="hstack gap-3 flex-wrap mt-4">
													<!-- Avatar group START -->
													<ul class="avatar-group list-unstyled mb-0">
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/10.jpg') }}" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/11.jpg') }}" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/08.jpg') }}" alt="avatar">
														</li>
														<li class="avatar avatar-xs">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/05.jpg') }}" alt="avatar">
														</li>
													</ul>
													<!-- Avatar group END -->

													<!-- Button -->
													<a class="btn btn-sm btn-primary-soft mb-0 ms-sm-auto" href="#!"><i class="fa-solid fa-plus me-2"></i>Follow</a>
												</div>
											</div>
											<!-- Card body END -->
										</div>
									</div> <!-- Row END -->
								</div>
								<!-- Card END -->
							</div>
							<!-- Category item END -->
						</div>
					</div>
					<!-- Card body END -->
				</div>
				<!-- Categories END -->

			</div>
		</section>

	<!-- Create category modal START -->
	<div class="modal fade" id="createCategory" tabindex="-1" aria-labelledby="createCategoryLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<!-- Modal header -->
				<div class="modal-header align-items-start">
					<div>
						<h5 class="modal-title" id="createCategoryLabel">Create Category</h5>
						<p class="mb-0">Share your interests, content, creativity and many more.</p>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form class="row text-start g-3">
						<!-- Category name -->
						<div class="col-12">
							<label class="form-label h6">Category name</label>
							<input class="form-control" type="text">
						</div>
						<!-- Description -->
						<div class="col-12 mt-3">
							<label class="form-label h6">Brief description</label>
							<textarea class="form-control" rows="4" placeholder="" spellcheck="false"></textarea>
							<small>Include a few keywords to show people what to expect if they join.</small>
						</div>
					</form>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-sm btn-primary mb-0">Create</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Create category modal START -->

	<!-- Back to top -->
	<div class="back-top"></div>
@endsection
