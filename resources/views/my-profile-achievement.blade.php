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
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

							<!-- Ongoing Builds START -->
							<div class="card p-0">
								<!-- Card header START -->
								<div class="card-header border-bottom d-flex justify-content-between align-items-center">
									<h4 class="card-title mb-0">Ongoing Builds</h4>
									@if(auth()->id() === $user?->id)
                                    <button class="btn btn-sm btn-primary-soft mb-0" data-bs-toggle="modal" data-bs-target="#addBuildModal"><i class="bi bi-plus-lg me-1"></i>New Build</button>
									@endif
								</div>
								<!-- Card header END -->

								<!-- Card body START -->
								<div class="card-body">
									<div class="vstack gap-4">
                                        @forelse($ongoingBuilds as $build)
										<!-- Build Item -->
										<div class="d-md-flex align-items-center bg-light rounded p-3">
                                            <div class="flex-grow-1">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h5 class="mb-0">{{ $build->kit_name }} <span class="badge bg-secondary ms-2">{{ $build->grade }}</span></h5>
                                                    <span class="text-primary fw-bold">{{ $build->percentage }}%</span>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $build->percentage }}%" aria-valuenow="{{ $build->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                @if(!empty($build->image))
                                                <div class="mt-3 d-flex gap-2 flex-wrap">
                                                    @if(is_array($build->image))
                                                        @foreach($build->image as $img)
                                                            <img src="{{ asset('storage/' . $img) }}" alt="Build Image" class="img-fluid rounded" style="max-height: 150px; object-fit: cover;">
                                                        @endforeach
                                                    @else
                                                        <img src="{{ asset('storage/' . $build->image) }}" alt="Build Image" class="img-fluid rounded" style="max-height: 150px; object-fit: cover;">
                                                    @endif
                                                </div>
                                                @endif
                                                <div class="d-flex justify-content-between mt-2">
                                                    <small class="text-muted">Last updated: {{ $build->updated_at->diffForHumans() }}</small>
													@if(auth()->id() === $user?->id)
                                                    <div class="d-flex gap-2">
                                                        <a href="javascript:void(0);" class="text-secondary small" title="Edit" data-bs-toggle="modal" data-bs-target="#editBuildModal{{ $build->id }}"><i class="bi bi-pencil-square me-1"></i>Edit</a>
                                                        <form action="{{ route('build-projects.destroy', $build->id) }}" method="POST" class="m-0 p-0" onsubmit="return confirm('Are you sure you want to delete this build project?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-link text-danger small p-0 m-0 text-decoration-none" title="Delete"><i class="bi bi-trash me-1"></i>Delete</button>
                                                        </form>
                                                    </div>
													@endif
                                                </div>
                                            </div>
										</div>

                                        @empty
                                            <p class="text-muted mb-0">No ongoing builds found.</p>
                                        @endforelse
									</div>
								</div>
								<!-- Card body END -->
							</div>
							<!-- Ongoing Builds END -->

							<!-- Completed Builds START -->
							<div class="card p-0">
								<!-- Card header START -->
								<div class="card-header border-bottom">
									<h4 class="card-title mb-0">Completed Builds</h4>
								</div>
								<!-- Card header END -->

								<!-- Card body START -->
								<div class="card-body">
									<div class="vstack gap-4">
                                        @forelse($completedBuilds as $build)
										<!-- Build Item -->
										<div class="d-md-flex align-items-center bg-light rounded p-3">
                                            <div class="flex-grow-1">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h5 class="mb-0">{{ $build->kit_name }} <span class="badge bg-secondary ms-2">{{ $build->grade }}</span></h5>
                                                    <span class="text-success fw-bold">100%</span>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                @if(!empty($build->image))
                                                <div class="mt-3 d-flex gap-2 flex-wrap">
                                                    @if(is_array($build->image))
                                                        @foreach($build->image as $img)
                                                            <img src="{{ asset('storage/' . $img) }}" alt="Build Image" class="img-fluid rounded" style="max-height: 150px; object-fit: cover;">
                                                        @endforeach
                                                    @else
                                                        <img src="{{ asset('storage/' . $build->image) }}" alt="Build Image" class="img-fluid rounded" style="max-height: 150px; object-fit: cover;">
                                                    @endif
                                                </div>
                                                @endif
                                                <div class="d-flex justify-content-between mt-2">
                                                    <small class="text-muted">Completed: {{ $build->updated_at->format('M d, Y') }}</small>
													@if(auth()->id() === $user?->id)
                                                    <div class="d-flex gap-2">
                                                        <a href="javascript:void(0);" class="text-secondary small" title="Edit" data-bs-toggle="modal" data-bs-target="#editBuildModal{{ $build->id }}"><i class="bi bi-pencil-square me-1"></i>Edit</a>
                                                        <form action="{{ route('build-projects.destroy', $build->id) }}" method="POST" class="m-0 p-0" onsubmit="return confirm('Are you sure you want to delete this build project?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-link text-danger small p-0 m-0 text-decoration-none" title="Delete"><i class="bi bi-trash me-1"></i>Delete</button>
                                                        </form>
                                                    </div>
													@endif
                                                </div>
                                            </div>
										</div>

                                        @empty
                                            <p class="text-muted mb-0">No completed builds found.</p>
                                        @endforelse
									</div>
								</div>
								<!-- Card body END -->
							</div>
							<!-- Completed Builds END -->

						</div>
					</div>
					<!-- Main content END -->

					@include("partials.profile-right-sidebar")
				</div>
			</div>
		</section>
		<!-- =======================Page Content END -->

	<!-- Add New Build Modal Moved to profile-card.blade.php -->

    <!-- Modals Moved Outside of Main Content -->
    @foreach($ongoingBuilds as $build)
        <!-- Edit Modal -->
        <div class="modal fade" id="editBuildModal{{ $build->id }}" tabindex="-1" aria-labelledby="editBuildModalLabel{{ $build->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editBuildModalLabel{{ $build->id }}">Edit Build Progress</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('build-projects.update', $build->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Kit Name</label>
                                <input type="text" class="form-control" name="kit_name" value="{{ $build->kit_name }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Grade</label>
                                <select class="form-select" name="grade" disabled>
                                    <option value="SD" {{ $build->grade == 'SD' ? 'selected' : '' }}>Super Deformed (SD)</option>
                                    <option value="HG" {{ $build->grade == 'HG' ? 'selected' : '' }}>High Grade (HG)</option>
                                    <option value="RG" {{ $build->grade == 'RG' ? 'selected' : '' }}>Real Grade (RG)</option>
                                    <option value="MG" {{ $build->grade == 'MG' ? 'selected' : '' }}>Master Grade (MG)</option>
                                    <option value="PG" {{ $build->grade == 'PG' ? 'selected' : '' }}>Perfect Grade (PG)</option>
                                    <option value="Other" {{ $build->grade == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Update Photo (Optional)</label>
                                <input class="form-control" type="file" name="image" accept="image/jpeg,image/png,image/jpg,image/gif,image/webp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Progress Percentage: <span id="val{{ $build->id }}">{{ $build->percentage }}</span>%</label>
                                <input type="range" class="form-range" name="percentage" min="0" max="100" value="{{ $build->percentage }}" oninput="document.getElementById('val{{ $build->id }}').innerText = this.value">
                                <small class="text-muted">Setting this to 100% will mark it as completed.</small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary-soft" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    @foreach($completedBuilds as $build)
        <!-- Edit Modal Completed -->
        <div class="modal fade" id="editBuildModal{{ $build->id }}" tabindex="-1" aria-labelledby="editBuildModalLabel{{ $build->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editBuildModalLabel{{ $build->id }}">Edit Completed Build</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('build-projects.update', $build->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Kit Name</label>
                                <input type="text" class="form-control" name="kit_name" value="{{ $build->kit_name }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Grade</label>
                                <select class="form-select" name="grade" disabled>
                                    <option value="SD" {{ $build->grade == 'SD' ? 'selected' : '' }}>Super Deformed (SD)</option>
                                    <option value="HG" {{ $build->grade == 'HG' ? 'selected' : '' }}>High Grade (HG)</option>
                                    <option value="RG" {{ $build->grade == 'RG' ? 'selected' : '' }}>Real Grade (RG)</option>
                                    <option value="MG" {{ $build->grade == 'MG' ? 'selected' : '' }}>Master Grade (MG)</option>
                                    <option value="PG" {{ $build->grade == 'PG' ? 'selected' : '' }}>Perfect Grade (PG)</option>
                                    <option value="Other" {{ $build->grade == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Update Photo (Optional)</label>
                                <input class="form-control" type="file" name="image" accept="image/jpeg,image/png,image/jpg,image/gif,image/webp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Progress Percentage: <span id="val{{ $build->id }}">{{ $build->percentage }}</span>%</label>
                                <input type="range" class="form-range" name="percentage" min="0" max="100" value="{{ $build->percentage }}" oninput="document.getElementById('val{{ $build->id }}').innerText = this.value">
                                <small class="text-muted">Setting less than 100% will move this back to Ongoing Builds.</small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary-soft" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

@endsection
