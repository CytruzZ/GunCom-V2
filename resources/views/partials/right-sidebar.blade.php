					<!-- Right sidebar START -->
					<div class="col-xl-4 col-xxl-3 mt-4 mt-xl-0">
						<div class="row g-4 position-sticky" style="top: 80px; z-index: 1020;">
							<!-- Top Members START -->
							<div class="col-md-6 col-xl-12">
								<div class="card p-3">
									<!-- Card header START -->
									<div class="card-header border-0 p-2 mb-2">
										<h4 class="card-title mb-0">Top Builders</h4>
									</div>
									<!-- Card header END -->

									<!-- Card body START -->
									<div class="card-body p-2">
										@foreach($topBuilders as $builder)
										<!-- Builder item -->
										<div class="d-flex {{ !$loop->last ? 'mb-3' : '' }}">
											<!-- Avatar -->
											<a href="{{ route('user.profile', $builder->id) }}" class="avatar flex-shrink-0">
												<img class="avatar-img rounded-circle" src="{{ $builder->profile_picture ? asset('storage/' . $builder->profile_picture) : 'https://ui-avatars.com/api/?name='.urlencode($builder->name).'&background=random' }}" alt="avatar">
											</a>

											<!-- Info -->
											<div class="ms-3">
												<h6 class="mb-0 fw-bold"><a href="{{ route('user.profile', $builder->id) }}" class="text-dark">{{ $builder->name }}</a></h6>
												<!-- Build logs count -->
												<div class="hstack gap-3 flex-wrap small mt-1">
													<a href="#" class="text-primary-hover mb-0" style="color: #495057;"><i class="bi bi-tools me-1"></i>{{ $builder->build_projects_count }} Build Logs</a>
												</div>
											</div>
										</div>
										@if(!$loop->last)
										<hr class="mt-0 mb-3"> <!-- Divider -->
										@endif
										@endforeach
									</div>
									<!-- Card body END -->
								</div>
							</div>
							<!-- Top Members END -->
						</div>
					</div>
					<!-- Right sidebar END -->
