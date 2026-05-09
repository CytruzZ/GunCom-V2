<!-- Profile card START -->
@php
    $profileUser = $user ?? auth()->user();
@endphp
<div class="card p-0">
    <!-- Card body -->
    <div class="card-body p-4">
        <!-- Avatar and info START -->
        <div class="d-sm-flex">
            <!-- Avatar -->
            <div class="avatar avatar-xxl flex-shrink-0">
                <img class="avatar-img rounded-circle bg-white shadow border border-white border-3" src="{{ $profileUser?->profile_picture ? asset('storage/' . $profileUser->profile_picture) : 'https://ui-avatars.com/api/?name='.urlencode($profileUser?->name ?? 'Guest').'&background=random' }}" alt="{{ $profileUser?->name ?? 'Guest' }}">
            </div>

            <!-- Info -->
            <div class="ms-0 ms-sm-4 flex-grow-1">
                <!-- Title -->
                <h1 class="card-title mb-0 h4">{{ $profileUser?->name ?? 'Guest' }}<i class="bi bi-patch-check-fill text-info ms-2"></i></h1>
                <small>Joined {{ $profileUser?->created_at?->format('M d, Y') ?? 'Unknown Date' }}</small>
                <p class="mb-0 mt-2">Member of Community</p>

                <!-- User stat and buttons START -->
                <div class="d-md-flex align-items-center mt-3 gap-4">
                    <!-- User stat -->
                    <div class="hstack gap-2 gap-xl-3">
                        <!-- User stat item -->
                        <div>
                            <h6 class="mb-0">{{ $profileUser?->showcases()->count() ?? 0 }}</h6>
                            <small>Showcase</small>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="d-grid d-sm-flex flex-wrap gap-2 mt-3 mt-md-0 ms-md-auto">

                        <!-- Add Content Dropdown -->
                        @if(auth()->id() === $profileUser?->id)
                        <div class="dropdown">
                            <button class="btn btn-sm btn-dark mb-0 dropdown-toggle" type="button" id="addContentMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-plus-lg"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end min-w-auto" aria-labelledby="addContentMenu">
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalLabelQuestion">Tambah Forum</a></li>
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalPost">Tambah Showcase</a></li>
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#addBuildModal">Tambah Build Log</a></li>
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- User stat and buttons END -->
            </div>
        </div>
        <!-- Avatar and info END -->
    </div>

    <!-- Card footer -->
    <div class="card-footer border-top pb-0">
        <!-- Nav profile pages -->
        <ul class="nav nav-bottom-line nav-responsive align-items-center gap-2 mb-0 border-0">
            <li class="nav-item"> 
                <a class="nav-link {{ Route::is('my-profile') || Route::is('user.profile') ? 'active fw-bold' : '' }}" href="{{ isset($user) ? route('user.profile', $user->id) : route('my-profile') }}">Profile</a>
            </li>
            <li class="nav-item"> 
                <a class="nav-link {{ Route::is('my-profile.posts') || Route::is('user.posts') ? 'active fw-bold' : '' }}" href="{{ isset($user) ? route('user.posts', $user->id) : route('my-profile.posts') }}">{{ $profileUser?->showcases()->count() ?? 0 }} Showcases</a>
            </li>
            <li class="nav-item"> 
                <a class="nav-link {{ Route::is('my-profile.forum') || Route::is('user.forum') ? 'active fw-bold' : '' }}" href="{{ isset($user) ? route('user.forum', $user->id) : route('my-profile.forum') }}">{{ $profileUser?->forums()->count() ?? 0 }} Forums</a>
            </li>
            <li class="nav-item"> 
                <a class="nav-link {{ Route::is('my-profile.buildlog') || Route::is('user.buildlog') ? 'active fw-bold' : '' }}" href="{{ isset($user) ? route('user.buildlog', $user->id) : route('my-profile.buildlog') }}">{{ $profileUser?->buildProjects()->count() ?? 0 }} Build Log</a> 
            </li>
        </ul>
    </div>
</div>
<!-- Profile card END -->

	<!-- Post modal START -->
	<div class="modal fade" id="modalPost" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content p-0">

				<!-- Close button -->
				<div class="position-absolute end-0 top-0 mt-n3 me-n3 z-index-9">
					<button type="button" class="btn btn-sm btn-danger btn-round mb-0" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
					</button>
				</div>

				<!-- Modal header START -->
				<div class="modal-header">
					<h5 class="modal-title mb-0" id="modalPostLabel">Create Showcase</h5>
				</div>
				<!-- Modal header END -->

				<form class="w-100" action="{{ route('showcases.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Modal body START -->
                    <div class="modal-body">
                        <div class="d-flex rounded-top mb-3">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs flex-shrink-0 me-2">
                                <img class="avatar-img rounded-circle" src="{{ $profileUser?->profile_picture ? asset('storage/' . $profileUser->profile_picture) : 'https://ui-avatars.com/api/?name='.urlencode($profileUser?->name ?? 'Guest').'&background=random' }}" alt="">
                            </div>
                            <textarea name="description" class="form-control" rows="3" placeholder="Bagikan karya Gunpla Anda..." maxlength="1000"></textarea>
                        </div>

                        <!-- Upload files START -->
                        <div class="mb-3">
                            <label class="form-label" for="image">Upload Image <span class="text-danger">*</span></label>
                            <input class="form-control" type="file" name="image" id="image" accept="image/jpeg,image/png,image/jpg,image/gif,image/webp" required onchange="previewPostImage(event)">
                        </div>
                        <div class="mb-3 text-center d-none" id="previewContainer">
                            <img id="imagePreview" src="#" alt="Preview" class="img-fluid rounded shadow-sm" style="max-height: 250px;">
                        </div>
                        <!-- Upload files END -->
                    </div>
                    <!-- Modal body END -->

                    <!-- Modal footer START -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary-soft" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success m-0">Showcase</button>
                    </div>
                    <!-- Modal footer END -->
                </form>

			</div>
		</div>
	</div>
	<!-- Post modal END -->


<script>
    function previewPostImage(event) {
        var input = event.target;
        var reader = new FileReader();
        var previewContainer = document.getElementById('previewContainer');
        var imagePreview = document.getElementById('imagePreview');

        reader.onload = function(){
            imagePreview.src = reader.result;
            previewContainer.classList.remove('d-none');
        };

        if (input.files && input.files[0]) {
            reader.readAsDataURL(input.files[0]);
        } else {
            imagePreview.src = '#';
            previewContainer.classList.add('d-none');
        }
    }
</script>

        <!-- Add New Build Modal START -->
        <div class="modal fade" id="addBuildModal" tabindex="-1" aria-labelledby="addBuildModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addBuildModalLabel">Add New Build Project</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('build-projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="mb-3">
                                <label class="form-label">Kit Name</label>
                                <input type="text" class="form-control" name="kit_name" placeholder="e.g. RX-78-2 Gundam" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Grade</label>
                                <select class="form-select" name="grade" required>
                                    <option value="" disabled selected>Select Grade</option>
                                    <option value="SD">Super Deformed (SD)</option>
                                    <option value="HG">High Grade (HG)</option>
                                    <option value="RG">Real Grade (RG)</option>
                                    <option value="MG">Master Grade (MG)</option>
                                    <option value="PG">Perfect Grade (PG)</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Photo (Optional)</label>
                                <input class="form-control" type="file" name="image" accept="image/jpeg,image/png,image/jpg,image/gif,image/webp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Initial Progress: <span id="newVal">0</span>%</label>
                                <input type="range" class="form-range" name="percentage" min="0" max="100" value="0" oninput="document.getElementById('newVal').innerText = this.value">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary-soft" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Create Build</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Add New Build Modal END -->
