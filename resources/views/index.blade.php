@extends("layouts.app")
@section("content")
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

						<div class="row g-3 g-sm-4 justify-content-center">
							<!-- Button for mobile screen -->
							<div class="col-12 d-grid d-sm-none mt-3 mt-sm-0">
								<a href="#" class="btn btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#modalLabelQuestion">Ask Question</a>
							</div>
						</div>
					</div>
				</div> <!-- Row END -->

			</div>
		</section>
		<!-- =======================Page Banner END -->

		<!-- =======================Page Content START -->
		<section class="pt-0">
			<div class="container">
				<!-- Top Showcases Slider -->
				@if(!isset($currentCategory) && $topShowcases->isNotEmpty())
				<div class="mb-5">
					<h4 class="mb-3 fw-bold d-inline-block px-4 py-2 rounded-pill shadow-sm text-white" style="background-color: #00A8A8;">Top Showcases <i class="bi bi-fire text-warning"></i></h4>
					<div class="d-flex overflow-auto gap-4 pb-3" style="scrollbar-width: thin;">
						@foreach($topShowcases as $showcase)
							<div class="card shadow-sm flex-shrink-0 border-0 rounded-4 overflow-hidden" style="width: 320px; background: #f8f9fa; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#postModal{{ $showcase->id }}">
								<img src="{{ Str::startsWith($showcase->image, 'http') ? $showcase->image : asset('storage/' . $showcase->image) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Showcase">
								<div class="card-body p-3">
									<h6 class="mb-2 text-truncate fw-semibold" title="{{ $showcase->description }}">{{ $showcase->description ?: 'No description' }}</h6>
									<div class="d-flex justify-content-between align-items-center mt-2">
										<small class="text-muted text-truncate w-75 d-flex align-items-center">
											<a href="{{ route('user.profile', $showcase->user->id) }}" class="text-decoration-none text-muted d-flex align-items-center text-truncate" onclick="event.stopPropagation();">
												<img src="{{ $showcase->user->profile_picture ? asset('storage/' . $showcase->user->profile_picture) : 'https://ui-avatars.com/api/?name='.urlencode($showcase->user->name).'&background=random' }}" class="rounded-circle me-2 flex-shrink-0" style="width: 24px; height: 24px; object-fit: cover;" alt="{{ $showcase->user->name }}">
												<span class="text-truncate fw-medium">{{ $showcase->user->name }}</span>
											</a>
										</small>
										@if(auth()->check())
										<form action="{{ route('showcases.like', $showcase->id) }}" method="POST" class="d-inline" onclick="event.stopPropagation();">
											@csrf
											@php
												$isLiked = \App\Models\ShowcaseLike::where('user_id', auth()->id())->where('showcase_id', $showcase->id)->exists();
											@endphp
											<button type="submit" class="btn btn-link p-0 text-danger text-decoration-none shadow-none">
												<i class="bi {{ $isLiked ? 'bi-heart-fill' : 'bi-heart' }} me-1"></i>{{ $showcase->likes }}
											</button>
										</form>
										@else
										<a href="{{ route('signin') }}" class="btn btn-link p-0 text-danger text-decoration-none shadow-none" onclick="event.stopPropagation();">
											<i class="bi bi-heart me-1"></i>{{ $showcase->likes }}
										</a>
										@endif
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
				@endif

				<div class="row">

					<!-- Left sidebar START -->
					<div class="col-xxl-2">
						@include('partials.left-sidebar')
					</div>
					<!-- Left sidebar END -->

					<!-- Main content START -->
					<div class="col-xl-8 col-xxl-7">
						<h4 class="mb-4 fw-bold d-inline-block px-4 py-2 rounded-pill shadow-sm text-white" style="background-color: #00A8A8;">Forums</h4>

						<div class="vstack gap-3">
							@if(isset($currentCategory))
								<div class="d-flex justify-content-between align-items-center bg-mode p-3 rounded">
									<h5 class="mb-0">Category: <span class="text-primary">{{ $currentCategory }}</span></h5>
									<a href="{{ route('index') }}" class="btn btn-sm btn-outline-secondary mb-0">Clear Filter</a>
								</div>
							@endif

							@forelse($forums as $forum)
								@include('partials.forum-card')
							@empty
								<div class="text-center p-5 bg-mode rounded">
									<i class="bi bi-chat-square-text fs-1 text-muted"></i>
									<h5 class="mt-3">No discussions found</h5>
									<p class="text-muted mb-0">Be the first to start a discussion in this category!</p>
								</div>
							@endforelse
							
							@if($forums->hasPages())
								<div class="mt-4">
									{{ $forums->withQueryString()->links() }}
								</div>
							@endif
						</div>
					</div>
					<!-- Main content END -->

					@include('partials.right-sidebar')
				</div>
			</div>
		</section>

		@if(!isset($currentCategory) && isset($topShowcases) && $topShowcases->isNotEmpty())
			<!-- Modals for Top Showcases -->
			@foreach($topShowcases as $showcase)
				@include('partials.showcase-modal', ['post' => $showcase])
			@endforeach
		@endif
@endsection
