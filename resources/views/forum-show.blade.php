@extends('layouts.app')
@section('content')
	<!-- **************** MAIN CONTENT START **************** -->
	<main>
		<!-- =======================Page Content START -->
		<section class="pt-8">
			<div class="container">
				<div class="row g-4">
					<!-- Left sidebar START -->
					<div class="col-xxl-2">
						@include('partials.left-sidebar')
					</div>
					<!-- Left sidebar END -->

					<!-- Main content START -->
					<div class="col-xl-8 col-xxl-7">
						<h4 class="mb-4 fw-bold d-inline-block px-4 py-2 rounded-pill shadow-sm text-white" style="background-color: #00A8A8;"><i class="bi bi-chat-square-text me-2"></i>Forum Discussion</h4>

						<div class="vstack gap-4">

							<!-- Question card START -->
							<div class="card p-0 z-index-9">
								<div class="hstack gap-0 align-items-start">

									<!-- Card body START -->
									<div class="card-body p-3">
										<!-- Badge and dropdown START -->
										<div class="d-flex justify-content-between mb-3 mb-sm-2">
											<!-- Badge START -->
											<div class="hstack flex-wrap gap-2">
												<span class="badge bg-dark">{{ $forum->category }}</span>
											</div>
											<!-- Badge END -->

											<!-- Back button and Dropdown -->
											<div class="d-flex align-items-center gap-2 flex-shrink-0">
												<a href="{{ url()->previous() }}" class="btn btn-icon btn-sm btn-light mb-0" title="Back">
													<i class="bi bi-arrow-left"></i>
												</a>

												@if(auth()->check() && auth()->id() === $forum->user_id)
												<div class="dropdown">
													<a href="#" class="btn btn-icon btn-sm btn-light mb-0" id="forumAction{{ $forum->id }}" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="bi bi-three-dots"></i>
													</a>
													<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="forumAction{{ $forum->id }}">
														<li>
															<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalEditForum{{ $forum->id }}">
																<i class="bi bi-pencil fa-fw pe-2"></i>Edit
															</button>
														</li>
														<li>
															<form action="{{ route('forums.destroy', $forum->id) }}" method="POST" class="m-0" onsubmit="return confirm('Are you sure you want to delete this forum?');">
																@csrf
																@method('DELETE')
																<input type="hidden" name="redirect_to" value="{{ url()->previous() }}">
																<button type="submit" class="dropdown-item text-danger">
																	<i class="bi bi-trash fa-fw pe-2"></i>Delete
																</button>
															</form>
														</li>
													</ul>
												</div>
												@endif
											</div>
										</div>
										<!-- Badge and dropdown END -->

										<!-- Title -->
										<h3 class="card-title mb-2">{{ $forum->title }}</h3>

										<p class="mb-2">{{ $forum->content }}</p>

										<!-- Badge and date -->
										<div class="d-sm-flex justify-content-sm-between">
											<div class="hstack gap-2 mt-2 mb-3 mb-sm-0">
											</div>
											<small>Asked: {{ $forum->created_at->format('d M Y') }}</small>
										</div>

										<!-- Button and content START -->
										<div class="d-sm-flex justify-content-sm-between align-items-center mt-4">
											<!-- Avatar and list -->
											<div class="d-flex align-items-center mb-3 mb-sm-0">
												<!-- Avatar -->
												<div class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="{{ $forum->user?->profile_picture ? asset('storage/' . $forum->user->profile_picture) : 'https://ui-avatars.com/api/?name='.urlencode($forum->user->name ?? 'User').'&background=random' }}" alt="avatar">
												</div>
												<!-- Info -->
												<h6 class="mb-0 ms-2"><a href="#">{{ $forum->user->name ?? 'User' }}</a></h6>
											</div>

											<!-- Buttons -->
											<ul class="nav nav-divider align-items-center small">
												<li class="nav-item">
													<a href="#" class="text-primary-hover p-0 mb-0"><i class="bi bi-chat-left fa-fw me-1"></i>{{ $forum->comments->count() }} Answers</a>
												</li>
												<li class="nav-item">
													<a href="#collapseComment" data-bs-toggle="collapse" class="text-primary-hover p-0 mb-0" role="button" aria-expanded="false" aria-controls="collapseComment"><i class="bi bi-reply fa-fw me-1"></i>Reply</a>
												</li>
											</ul>
										</div>
										<!-- Button and content END -->

									</div>
									<!-- Card body END -->
								</div>
							</div>
							<!-- Question card END -->

                            @if(auth()->check() && auth()->id() === $forum->user_id)
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
														<img class="avatar-img rounded-circle" src="{{ auth()->user()?->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : 'https://ui-avatars.com/api/?name='.urlencode(auth()->user()->name ?? 'User').'&background=random' }}" alt="">
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
                            @endif

							<!-- Answer card START -->
							<div class="collapse {{ session('success') || $errors->any() ? 'show' : '' }}" id="collapseComment">
								<div class="card card-body p-4">
									<!-- Title -->
									<h4 class="mb-3">Your Answer</h4>

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

									@if(auth()->check())
									<form action="{{ route('forums.comment', $forum->id) }}" method="POST">
										@csrf
										<!-- Editor input box -->
										<textarea name="reply" class="form-control" rows="4" placeholder="Write your answer here..." required></textarea>

										<!-- Button -->
										<div><button type="submit" class="btn btn-primary mb-0 mt-3">Post Your Answer</button></div>
									</form>
									@else
									<div class="text-center py-4 bg-light rounded mt-2">
										<h5 class="mb-3">Sign in to join the discussion</h5>
										<a href="{{ route('signin') }}" class="btn btn-primary mb-0">Sign In</a>
									</div>
									@endif
								</div>
							</div>
							<!-- Answer card END -->

							<!-- Title and select START -->
							<div class="bg-mode p-4 rounded">
								<div class="d-flex justify-content-between align-items-center">
									<!-- Title -->
									<h5 class="mb-0">{{ $forum->comments->count() }} Answers</h5>
								</div>
							</div>
							<!-- Title and select END -->

                            @if($forum->comments->count() > 0)
                                <div class="vstack gap-3">
                                    @foreach($forum->comments as $comment)
                                    <!-- Answer detail START -->
                                    <div class="card card-body p-4">
                                        <!-- Editor info -->
                                        <div class="d-flex align-items-center mb-3">
                                            <!-- Avatar -->
                                            <div class="avatar flex-shrink-0">
                                                <img class="avatar-img rounded-circle" src="{{ $comment->user?->profile_picture ? asset('storage/' . $comment->user->profile_picture) : 'https://ui-avatars.com/api/?name='.urlencode($comment->user->name ?? 'User').'&background=random' }}" alt="avatar">
                                            </div>
                                            <!-- Info -->
                                            <div class="ms-2">
                                                <h6 class="mb-0"><a href="#">{{ $comment->user->name ?? 'User' }}</a></h6>
                                                <ul class="nav nav-divider small">
                                                    <li class="nav-item">{{ $comment->created_at->diffForHumans() }}</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Answer -->
                                        <p class="mb-2">{{ $comment->reply }}</p>
                                    </div>
                                    <!-- Answer detail END -->
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-5">
                                    <h5 class="text-muted">No answers yet. Be the first to answer!</h5>
                                </div>
                            @endif

						</div>
					</div>
					<!-- Main content END -->

					<!-- Right sidebar START -->
					@include('partials.right-sidebar')
					<!-- Right sidebar END -->
				</div>
			</div>
		</section>
		<!-- =======================Page Content END -->
	</main>
	<!-- **************** MAIN CONTENT END **************** -->
@endsection
