<!-- Header START -->
<header class="header-sticky header-absolute bg-mode sticky-top" style="z-index: 1030;">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand me-0" href="{{ route('index') }}">
				<img class="light-mode-item navbar-brand-item" src="{{ asset('assets/images/guncomLogo-lightTheme.png') }}" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse">

				<!-- Nav Search START -->
				<div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
					<div class="nav-item w-100 input-bg-light">
						<form class="position-relative" action="{{ route('search') }}" method="GET">
							<input class="form-control bg-white pe-5" type="search" name="q" placeholder="Search..." aria-label="Search" value="{{ request('q') }}" required>
							<button class="btn btn-link py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 heading-color"></i></button>
						</form>
					</div>
				</div>
				<!-- Nav Search END -->

				<!-- Navbar menu -->
				<ul class="navbar-nav navbar-nav-scroll dropdown-hover ms-auto">
					<!-- Nav item -->
					<li class="nav-item dropdown">
						<a class="nav-link" href="{{ route('index') }}">Home</a>
					</li>

					<!-- Nav item -->
					<!-- Nav item -->
					<li class="nav-item">
						<a class="nav-link {{ Route::is('showcases.index') ? 'active' : '' }}" href="{{ route('showcases.index') }}">Showcases</a>
					</li>

					<!-- Nav item -->
					<!-- Nav item -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item {{ isset($currentCategory) && $currentCategory === 'Q&A' ? 'active' : '' }}" href="{{ route('index', ['category' => 'Q&A']) }}">Q&A</a></li>
							<li><a class="dropdown-item {{ isset($currentCategory) && $currentCategory === 'Build & Custom' ? 'active' : '' }}" href="{{ route('index', ['category' => 'Build & Custom']) }}">Build & Custom</a></li>
							<li><a class="dropdown-item {{ isset($currentCategory) && $currentCategory === 'Kits' ? 'active' : '' }}" href="{{ route('index', ['category' => 'Kits']) }}">Kits</a></li>
						</ul>
					</li>

					<!-- Nav item -->
					<li class="nav-item"> <a class="nav-link" href="{{ route('my-profile') }}">Profile</a> </li>
				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Buttons -->
			<ul class="nav align-items-center dropdown-hover ms-sm-2">

				<!-- Sign up button -->
				@if(auth()->check())
					<li class="nav-item ms-2 me-2 position-relative">
						<a class="nav-link icon-md bg-transparent border-0 p-0" href="{{ route('notifications.index') }}">
							<i class="bi bi-bell fs-6"></i>
						</a>
						@if(auth()->user()->unreadNotifications->count() > 0)
						<span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle" style="margin-top: 10px; margin-left: -10px;">
							<span class="visually-hidden">New alerts</span>
						</span>
						@endif
					</li>
					<li class="nav-item ms-2">
						<form action="{{ route('logout') }}" method="POST" class="m-0 p-0">
							@csrf
							<button type="submit" class="nav-link icon-md bg-transparent border-0 p-0 text-danger" title="Logout">
								<i class="bi bi-box-arrow-right fs-6"></i>
							</button>
						</form>
					</li>
				@else
					<li class="nav-item ms-2 d-none d-sm-block">
						<a href="{{ route('signin') }}" class="btn btn-sm btn-primary mb-0">Sign in</a>
					</li>
				@endif
				<!-- Responsive navbar toggler -->
				<li class="nav-item ms-2">
					<button class="navbar-toggler ms-sm-3 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-animation">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</button>
				</li>
			</ul>
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->

<!-- Question modal START -->
<div class="modal fade" id="modalLabelQuestion" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content p-0">

			<!-- Close button -->
			<div class="position-absolute end-0 top-0 mt-n3 me-n3 z-index-9">
				<button type="button" class="btn btn-sm btn-danger btn-round mb-0" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
				</button>
			</div>

			<!-- Modal header START -->
			<!-- Modal form START -->
			<form action="{{ route('forums.store') }}" method="POST" class="w-100" id="formCreateForum">
				@csrf
			<!-- Modal header START -->
			<div class="modal-header d-block">
				<div class="d-flex justify-content-between align-items-center">
					<!-- Title -->
					<h5 class="modal-title mb-0">Ask Question</h5>
					<!-- Select -->
					<div class="col-sm-4">
						<select name="category" class="form-select js-choice" data-placeholder-val="Select Category" data-position="top" data-search-enabled="false">
							<option value="Q&A">Q&A</option>
							<option value="Build & Custom">Build & Custom</option>
							<option value="Kits">Kits</option>
						</select>
					</div>
				</div>
			</div>
			<!-- Modal header END -->
			<!-- Modal header END -->

			<!-- Modal body START -->
			<div class="modal-body">
					<!-- Add Feed -->
					<div class="d-flex mb-3">
						<!-- Avatar -->
						<div class="avatar avatar-xs me-2 flex-shrink-0">
							<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/06.jpg') }}" alt="">
						</div>
						<!-- question box  -->
						<div class="w-100">
							<input type="text" name="title" class="form-control mb-2" placeholder="Forum Title" required>
							<textarea name="content" class="form-control pe-4 lh-2 border" rows="5" placeholder="Share your discussion..." required></textarea>
						</div>
					</div>
			</div>
			<!-- Modal body END -->

			<!-- Modal footer START -->
			<div class="modal-footer gap-2">
				<p class="mb-0"><i class="bi bi-info-circle"></i> Guidelines for Receiving Quality Answers <a href="#" class="text-decoration-underline fw-semibold">Know more</a></p>
				<button type="button" class="btn btn-light border ms-auto mb-0" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
				<button type="submit" class="btn btn-primary m-0">Ask question</button>
			</div>
			<!-- Modal footer END -->
			</form>
		</div>
	</div>
</div>
<!-- Question modal END -->

<!-- Sidebar menu responsive toggler START -->
<div class="text-center d-grid position-fixed start-0 bottom-0 w-100" style="z-index:1030;">
	<button class="btn btn-primary rounded-0 py-2 mb-0 d-xxl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
		<i class="fas fa-sliders-h me-2"></i>My menu
	</button>
</div>
<!-- Sidebar menu responsive toggler START -->

