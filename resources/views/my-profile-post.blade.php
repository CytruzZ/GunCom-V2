@extends('layouts.app')
@section('content')
		@include('partials.navbar')
		<!-- =======================Page Content START -->
		<section class="pt-8">
			<div class="container">
				<div class="row g-4">

					<!-- Main content START -->
					<div class="col-xl-8">
						<div class="vstack gap-4">

							@include("partials.profile-card")

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @php
                                $profileUser = $user ?? auth()->user();
                                $showcases = $profileUser ? $profileUser->showcases()->with(['comments.user'])->latest()->get() : collect();
                            @endphp

							<!-- Title and button START -->
							<div class="bg-mode px-4 py-3 rounded">
								<div class="d-flex align-items-center justify-content-between">
									<!-- Card title -->
									<h1 class="h4 mb-0">{{ $showcases->count() }} Showcases</h1>
									<!-- Button modal -->
									@if(auth()->id() === $profileUser?->id)
									<a class="btn btn-primary-soft mb-0" href="#" data-bs-toggle="modal" data-bs-target="#modalPost"> <i class="fa-solid fa-plus me-1"></i> Create showcase</a>
									@endif
								</div>
							</div>
							<!-- Title and button END -->

                            <style>
                                .insta-grid-item .insta-overlay {
                                    opacity: 0;
                                    transition: opacity 0.2s ease-in-out;
                                    background: rgba(0,0,0,0.5);
                                    cursor: pointer;
                                }
                                .insta-grid-item:hover .insta-overlay {
                                    opacity: 1;
                                }
                            </style>

							<!-- Gallery Grid START -->
							<div class="row g-2 mt-2">
								@forelse($showcases as $post)
								<div class="col-4">
									<!-- Gallery Item -->
									<div class="card p-0 rounded-1 overflow-hidden position-relative insta-grid-item" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#postModal{{ $post->id }}">
										<img src="{{ Str::startsWith($post->image, 'http') ? $post->image : asset('storage/' . $post->image) }}" alt="Post image" class="w-100" style="aspect-ratio: 1/1; object-fit: cover;">
										<!-- Hover content -->
										<div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center insta-overlay text-white">
											<div class="d-flex text-white gap-3 fs-6 fw-bold">
												<span><i class="bi bi-heart-fill me-1"></i>{{ $post->likes }}</span>
												<span><i class="bi bi-chat-fill me-1"></i>{{ $post->comments ? $post->comments->count() : 0 }}</span>
											</div>
										</div>
									</div>
								</div>

								<!-- Post Detail Modal -->
								@include('partials.showcase-modal', ['post' => $post])
								@empty
                                <div class="col-12 mt-4 text-center">
                                    <div class="card p-5 border-0 shadow-sm">
                                        <i class="fa-solid fa-camera fa-4x text-secondary mb-3"></i>
										@if(auth()->id() === $profileUser?->id)
                                        <h5 class="mb-1">Tampilkan Koleksi Gunpla Anda</h5>
                                        <p class="text-muted small">Showcase dengan gambar yang Anda unggah akan muncul di grid bergaya showcase ini.</p>
                                        <div class="mt-2 text-center">
                                            <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalPost">Showcase Pertama Anda</a>
                                        </div>
										@else
										<h5 class="mb-1">Belum ada showcase</h5>
                                        <p class="text-muted small">Pengguna ini belum mengunggah showcase apapun.</p>
										@endif
                                    </div>
                                </div>
								@endforelse
							</div>
							<!-- Gallery Grid END -->

						</div>
					</div>
					<!-- Main content END -->

					@include("partials.profile-right-sidebar")
				</div>
			</div>
		</section>
		<!-- =======================Page Content END -->


	<!-- Post modal moved to profile-card.blade.php -->
    <script>
        function toggleEditMode(postId) {
            const textSpan = document.getElementById('post-desc-text-' + postId);
            const editForm = document.getElementById('post-edit-form-' + postId);
            
            if (editForm.classList.contains('d-none')) {
                editForm.classList.remove('d-none');
                textSpan.classList.add('d-none');
            } else {
                editForm.classList.add('d-none');
                textSpan.classList.remove('d-none');
            }
        }
    </script>
    <style>
        .dropdown-toggle-empty::after {
            display: none !important;
        }
    </style>
@endsection
