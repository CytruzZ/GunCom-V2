@extends('layouts.app')
@section('content')
		<!-- =======================Page Banner START -->
		<section class="pt-8">
			<div class="container position-relative">
				<div class="row justify-content-center align-items-center text-center">
					<!-- Content -->
					<div class="col-lg-6 px-xl-5 text-center mx-auto mb-5 mb-lg-0">
						<!-- Title -->
						<h1 class="mb-4">Got a Gunpla Question? We've got the Answer!</h1>

						<form class="rounded position-relative" method="GET" action="{{ route('search') }}">
							<div class="input-group input-group-lg w-100">
								<span class="input-group-text bg-white border-0"><i class="bi bi-search"></i></span>
								<input class="form-control bg-white border-0" type="search" name="q" placeholder="Search..." aria-label="Search" value="{{ request('q') }}" required>
								<button type="submit" class="btn btn-dark mb-0 px-4"><i class="bi bi-search"></i></button>
							</div>
						</form>
					</div>
				</div> <!-- Row END -->
			</div>
		</section>
		<!-- =======================Page Banner END -->

		<!-- =======================Page Content START -->
		<section class="pt-0">
			<div class="container">
				<div class="row">

					<!-- Left sidebar START -->
					<div class="col-xxl-2">
						@include('partials.left-sidebar')
					</div>
					<!-- Left sidebar END -->

					<!-- Main content START -->
					<div class="col-xl-8 col-xxl-7">
						<div class="d-flex justify-content-between align-items-center mb-4">
							<h4 class="mb-0 fw-bold d-inline-block px-4 py-2 rounded-pill shadow-sm text-white" style="background-color: #00A8A8;">Search Results for "<span class="text-warning">{{ $query }}</span>"</h4>
						</div>

						@if($users->isEmpty() && $showcases->isEmpty() && $forums->isEmpty())
							<div class="text-center p-5 bg-mode rounded shadow-sm">
								<i class="bi bi-search fs-1 text-muted"></i>
								<h5 class="mt-3">No results found</h5>
								<p class="text-muted mb-0">Try searching with a different keyword.</p>
							</div>
						@else
							<div class="vstack gap-4">
								
								<!-- Users Section -->
								@if($users->isNotEmpty())
									<div class="mb-2"><h5 class="mb-0 fw-bold d-inline-block px-4 py-2 rounded-pill shadow-sm text-white" style="background-color: #00A8A8;"><i class="bi bi-people me-2"></i>Users</h5></div>
									@foreach($users as $user)
								<div class="card card-body shadow-sm">
									<!-- User Header -->
									<div class="d-flex align-items-center mb-3 pb-3 border-bottom">
										<div class="avatar avatar-lg me-3 flex-shrink-0">
											<img class="avatar-img rounded-circle" src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : 'https://ui-avatars.com/api/?name='.urlencode($user->name).'&background=random' }}" alt="">
										</div>
										<div class="w-100">
											<div class="d-flex justify-content-between align-items-center">
												<h5 class="mb-0"><a href="{{ route('user.profile', $user->id) }}">{{ $user->name }}</a></h5>
												<a href="{{ route('user.profile', $user->id) }}" class="btn btn-sm btn-primary-soft">View Profile</a>
											</div>
											<p class="small text-muted mb-0 mt-1">{{ Str::limit($user->bio, 100, '...') ?: 'Gunpla enthusiast' }}</p>
										</div>
									</div>

									<div class="row g-4">
										<!-- Showcases -->
										<div class="col-md-6">
											<h6 class="mb-3 d-flex align-items-center"><i class="bi bi-images me-2 text-info"></i>Latest Showcases</h6>
											@if($user->showcases->isNotEmpty())
												<div class="d-flex overflow-auto gap-2 pb-2" style="scrollbar-width: thin;">
													@foreach($user->showcases as $showcase)
													<a href="{{ route('showcases.index') }}" class="flex-shrink-0" title="{{ $showcase->description }}">
														<img src="{{ Str::startsWith($showcase->image, 'http') ? $showcase->image : asset('storage/' . $showcase->image) }}" class="rounded border" style="width: 80px; height: 80px; object-fit: cover;" alt="Showcase">
													</a>
													@endforeach
												</div>
											@else
												<p class="small text-muted mb-0">No showcases yet.</p>
											@endif
										</div>

										<!-- Forums -->
										<div class="col-md-6">
											<h6 class="mb-3 d-flex align-items-center"><i class="bi bi-chat-square-text me-2 text-warning"></i>Latest Discussions</h6>
											@if($user->forums->isNotEmpty())
												<ul class="list-unstyled mb-0 d-flex flex-column gap-2">
													@foreach($user->forums as $forum)
													<li>
														<a href="{{ route('forums.show', $forum->id) }}" class="text-body fw-semibold text-truncate d-block small border p-2 rounded bg-light" title="{{ $forum->title }}">
															{{ $forum->title }}
														</a>
													</li>
													@endforeach
												</ul>
											@else
												<p class="small text-muted mb-0">No discussions started.</p>
											@endif
										</div>
									</div>
								</div>
								@endforeach
								@endif

								<!-- Showcases Section -->
								@if($showcases->isNotEmpty())
									<div class="mb-2 mt-2"><h5 class="mb-0 fw-bold d-inline-block px-4 py-2 rounded-pill shadow-sm text-white" style="background-color: #00A8A8;"><i class="bi bi-images me-2"></i>Showcases</h5></div>
									<div class="row g-3">
										@foreach($showcases as $post)
										<div class="col-sm-6 col-md-4">
											<div class="card shadow-sm h-100 border-0 insta-grid-item" style="cursor: pointer; background-color: rgba(255, 255, 255, 0.8) !important; backdrop-filter: blur(5px);" data-bs-toggle="modal" data-bs-target="#postModal{{ $post->id }}">
												<div class="position-relative w-100" style="padding-bottom: 100%; overflow: hidden;">
													<img src="{{ Str::startsWith($post->image, 'http') ? $post->image : asset('storage/' . $post->image) }}" class="position-absolute top-0 start-0 w-100 h-100 card-img-top" style="object-fit: cover;" alt="Post image">
													<div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-white opacity-0 hover-overlay rounded-top" style="background: rgba(0,0,0,0.4); transition: opacity 0.2s;">
														<div class="d-flex gap-4 fs-5 fw-bold">
															<span class="d-flex align-items-center"><i class="bi bi-heart-fill text-danger me-2"></i> {{ $post->likes }}</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										@endforeach
									</div>
								@endif

								<!-- Forums Section -->
								@if($forums->isNotEmpty())
									<div class="mb-2 mt-2"><h5 class="mb-0 fw-bold d-inline-block px-4 py-2 rounded-pill shadow-sm text-white" style="background-color: #00A8A8;"><i class="bi bi-chat-square-text me-2"></i>Discussions</h5></div>
									@foreach($forums as $forum)
										@include('partials.forum-card')
									@endforeach
								@endif

							</div>
						@endif
					</div>
					<!-- Main content END -->

					@include('partials.right-sidebar')
				</div>
			</div>
		</section>

		@if(isset($showcases) && $showcases->isNotEmpty())
			<!-- Modals for Showcases -->
			@foreach($showcases as $post)
				@include('partials.showcase-modal', ['post' => $post])
			@endforeach
		@endif
@endsection
