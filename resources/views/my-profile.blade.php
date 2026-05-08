@extends('layouts.app')
@section('content')
@php
    $profileUser = $user ?? auth()->user();
@endphp

        @include('partials.navbar')

		<section class="pt-8">
			<div class="container">
				<div class="row g-4">

					<!-- Main content START -->
					<div class="col-xl-8">
						<div class="vstack gap-4">

							@include('partials.profile-card')

							<!-- Overview START -->
							<div class="card p-0">
								<!-- Card header START -->
								<div class="card-header border-bottom">
									<div class="d-flex justify-content-between align-items-center">
										<h4 class="card-title mb-0">Overview</h4>
										@if(auth()->id() === $profileUser?->id)
										<a href="{{ route('settings') }}" class="btn btn-sm btn-light mb-0"><i class="bi bi-pencil-square me-2"></i>Edit</a>
										@endif
									</div>
								</div>
								<!-- Card header END -->

								<!-- Card body START -->
								<div class="card-body">
									@if($profileUser?->bio)
										<p class="mb-0">{{ $profileUser->bio }}</p>
									@else
										<p class="mb-0 text-muted"><em>Tidak ada deskripsi.</em></p>
									@endif

									<!-- Basic information START -->
									<h5 class="mt-4 mb-3">Basic Information</h5>

									<div class="row g-4">
										<div class="col-sm-6 col-md-4">
											<h6 class="mb-1"><i class="bi bi-instagram me-2"></i>Instagram</h6>
											<p class="mb-0">{{ $profileUser?->instagram ? '@'.$profileUser->instagram : '-' }}</p>
										</div>
										<div class="col-sm-6 col-md-4">
											<h6 class="mb-1"><i class="bi bi-envelope me-2"></i>Email</h6>
											<p class="mb-0">{{ $profileUser?->email ?? '-' }}</p>
										</div>
										<div class="col-sm-6 col-md-4">
											<h6 class="mb-1"><i class="bi bi-telephone me-2"></i>Phone</h6>
											<p class="mb-0">{{ $profileUser?->phone_number ?? '-' }}</p>
										</div>
									</div>
									<!-- Basic information END -->
									
								</div>
								<!-- Card body END -->
							</div>
							<!-- Overview END -->

						</div>
					</div>
					<!-- Main content END -->

					@include('partials.profile-right-sidebar')
				</div>
			</div>
		</section>
@endsection
