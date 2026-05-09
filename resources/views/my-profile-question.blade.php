@extends('layouts.app')
@section('content')
		@include('partials.navbar')
		<!-- =======================Page Content START -->
		<section class="pt-8">
			<div class="container">
				<div class="row g-4">

					<!-- Main content START -->
					<div class="col-xl-8">
						<div class="vstack gap-3">

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
                                $userForums = $profileUser ? $profileUser->forums()->withCount('comments')->latest()->get() : collect();
                            @endphp

							<!-- Title and button START -->
							<div class="bg-mode px-4 py-3 rounded">
								<div class="row g-2 align-items-center">
									<div class="col-md-3">
										<!-- Card title -->
										<h1 class="h4 mb-lg-0">{{ $userForums->count() }} Forums</h1>
									</div>
								</div>
							</div>
							<!-- Title and button END -->

                            @forelse($userForums as $forum)
							<!-- Question card START -->
							<div class="card p-0 z-index-9 position-relative mt-3">
                                @php
                                    $categoryColors = [
                                        'Q&A' => 'bg-info text-white',
                                        'Build & Custom' => 'bg-warning text-dark',
                                        'Kits' => 'bg-success text-white',
                                    ];
                                    $categoryClass = $categoryColors[$forum->category ?? ''] ?? 'bg-secondary text-white';
                                @endphp
                                <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
                                    <span class="badge {{ $categoryClass }} shadow-sm">
                                        {{ $forum->category ?? 'Discussion' }}
                                    </span>
                                </div>
								<div class="hstack gap-0 align-items-start">

									<!-- Card body START -->
									<div class="card-body p-3 p-sm-4">
										<!-- Title -->
										<div class="d-flex justify-content-between align-items-start">
											<div>
												<h5 class="card-title mb-1"><a href="{{ route('forums.show', $forum->id) }}">{{ $forum->title }}</a></h5>
												<small>Asked: {{ $forum->created_at->format('d M Y') }}</small>
											</div>
											<!-- Dropdown for Edit & Delete -->
											@if(auth()->id() === $forum->user_id)
											<div class="dropdown">
												<button class="btn btn-link text-secondary p-0 dropdown-toggle dropdown-toggle-empty" type="button" id="forumAction{{ $forum->id }}" data-bs-toggle="dropdown" aria-expanded="false" style="box-shadow: none;">
													<i class="bi bi-three-dots"></i>
												</button>
												<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="forumAction{{ $forum->id }}">
													<li>
														<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalEditForum{{ $forum->id }}">
															<i class="bi bi-pencil fa-fw pe-2"></i>Edit
														</button>
													</li>
													<li>
														<form action="{{ route('forums.destroy', $forum->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this forum?');">
															@csrf
															@method('DELETE')
															<button type="submit" class="dropdown-item text-danger">
																<i class="bi bi-trash fa-fw pe-2"></i>Delete
															</button>
														</form>
													</li>
												</ul>
											</div>
											@endif
										</div>

										<!-- Links -->
										<div class="hstack gap-2 gap-sm-3 flex-wrap mt-3">
											<a href="{{ route('forums.show', $forum->id) }}" class="text-primary-hover small mb-0"><i class="fa-regular fa-message me-1"></i>{{ $forum->comments_count ?? 0 }} <span class="d-none d-sm-inline">Answer</span></a>
										</div>
									</div>
									<!-- Card body END -->
								</div>
							</div>
							<!-- Edit Forum Modal -->
							<div class="modal fade" id="modalEditForum{{ $forum->id }}" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content p-0">
										<!-- Close button -->
										<div class="position-absolute end-0 top-0 mt-n3 me-n3 z-index-9">
											<button type="button" class="btn btn-sm btn-danger btn-round mb-0" data-bs-dismiss="modal" aria-label="Close">
												<span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
											</button>
										</div>

										<form action="{{ route('forums.update', $forum->id) }}" method="POST" class="w-100">
											@csrf
											@method('PUT')
											<!-- Modal header START -->
											<div class="modal-header d-block">
												<div class="d-flex justify-content-between align-items-center">
													<h5 class="modal-title mb-0">Edit Question</h5>
													<div class="col-sm-4">
														<select name="category" class="form-select" required>
															<option value="Q&A" {{ $forum->category == 'Q&A' ? 'selected' : '' }}>Q&A</option>
															<option value="Build & Custom" {{ $forum->category == 'Build & Custom' ? 'selected' : '' }}>Build & Custom</option>
															<option value="Kits" {{ $forum->category == 'Kits' ? 'selected' : '' }}>Kits</option>
														</select>
													</div>
												</div>
											</div>
											<!-- Modal body START -->
											<div class="modal-body">
												<div class="d-flex mb-3">
													<!-- Avatar -->
													<div class="avatar avatar-xs me-2 flex-shrink-0">
														<img class="avatar-img rounded-circle" src="{{ $profileUser?->avatar ? (Str::startsWith($profileUser->avatar, 'http') ? $profileUser->avatar : asset('storage/' . $profileUser->avatar)) : asset('assets/images/avatar/06.jpg') }}" alt="">
													</div>
													<div class="w-100">
														<input type="text" name="title" class="form-control mb-2" value="{{ $forum->title }}" placeholder="Forum Title" required>
														<textarea name="content" class="form-control pe-4 lh-2 border" rows="5" placeholder="Share your discussion..." required>{{ $forum->content }}</textarea>
													</div>
												</div>
											</div>
											<!-- Modal footer START -->
											<div class="modal-footer gap-2">
												<button type="button" class="btn btn-light border ms-auto mb-0" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
												<button type="submit" class="btn btn-primary m-0">Save changes</button>
											</div>
										</form>
									</div>
								</div>
							</div>

                            @empty
                            <div class="card p-4 text-center">
                                <p class="mb-0 text-muted">Belum ada forum yang dibuat.</p>
                            </div>
                            @endforelse

						</div>
					</div>
					<!-- Main content END -->

					@include("partials.profile-right-sidebar")
				</div>
			</div>
		</section>
		<!-- =======================Page Content END -->
		<style>
			.dropdown-toggle-empty::after {
				display: none !important;
			}
		</style>
@endsection
