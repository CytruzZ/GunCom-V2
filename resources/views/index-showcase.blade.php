@extends('layouts.app')

@section('content')
<!-- =======================Page Content START -->
<section class="pt-8 pb-5">
    <div class="container">
        <div class="row g-4">
            <!-- Left sidebar START -->
            <div class="col-xxl-2">
                @include('partials.left-sidebar')
            </div>
            <!-- Left sidebar END -->

            <!-- Main content START -->
            <div class="col-xl-8 col-xxl-7">
                <div class="card card-body p-4 rounded-3 mb-4 shadow-sm border-0" style="background-color: rgba(255, 255, 255, 0.8) !important; backdrop-filter: blur(5px);">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="h4 mb-0 fw-bold text-dark">Semua Showcases</h1>
                    </div>
                </div>

                <div class="row g-3">
                    @forelse($showcases as $post)
                    <div class="col-sm-6 col-md-4">
                        <div class="card shadow-sm h-100 border-0" style="cursor: pointer; background-color: rgba(255, 255, 255, 0.8) !important; backdrop-filter: blur(5px);" data-bs-toggle="modal" data-bs-target="#postModal{{ $post->id }}">
                            <div class="position-relative w-100" style="padding-bottom: 100%; overflow: hidden;">
                                <img src="{{ Str::startsWith($post->image, 'http') ? $post->image : asset('storage/' . $post->image) }}" class="position-absolute top-0 start-0 w-100 h-100 card-img-top" style="object-fit: cover;" alt="Post image">
                                
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-white opacity-0 hover-overlay rounded-top" style="background: rgba(0,0,0,0.4); transition: opacity 0.2s;">
                                    <div class="d-flex gap-4 fs-5 fw-bold">
                                        <span class="d-flex align-items-center"><i class="bi bi-heart-fill text-danger me-2"></i> {{ $post->likes }}</span>
                                        <span class="d-flex align-items-center"><i class="bi bi-chat-fill text-white me-2"></i> {{ $post->comments ? $post->comments->count() : 0 }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Detail Post -->
                        @include('partials.showcase-modal', ['post' => $post])
                    </div>
                    @empty
                    <div class="col-12 mt-4 text-center">
                        <div class="card p-5 border-0 shadow-sm bg-mode">
                            <i class="fa-solid fa-images fa-4x text-secondary mb-3"></i>
                            <h5 class="mb-1">Belum ada showcase</h5>
                            <p class="text-muted small">Jadilah yang pertama mengunggah karya Gunpla Anda!</p>
                            @auth
                            <div class="mt-2 text-center">
                                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalPost">Unggah Sekarang</a>
                            </div>
                            @endauth
                        </div>
                    </div>
                    @endforelse
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

<style>
.hover-overlay:hover {
    opacity: 1 !important;
}
.dropdown-toggle-empty::after {
    display: none;
}
</style>

<script>
function toggleEditMode(postId) {
    const textDesc = document.getElementById('post-desc-text-' + postId);
    const formEdit = document.getElementById('post-edit-form-' + postId);
    
    if (formEdit.classList.contains('d-none')) {
        textDesc.classList.add('d-none');
        formEdit.classList.remove('d-none');
    } else {
        textDesc.classList.remove('d-none');
        formEdit.classList.add('d-none');
    }
}
</script>

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
				<div class="modal-header d-block">
					<div class="d-flex justify-content-between align-items-center">
						<!-- Title -->
						<h5 class="modal-title mb-0">Create Post</h5>
						<!-- Select -->
						<div class="col-sm-5">
							<select class="form-select form-select-sm js-choice" data-placeholder-val="Select type" data-position="top" data-search-enabled="false">
								<option value="PB">Public</option>
								<option value="PV">Friends</option>
								<option value="PV">Only me</option>
								<option value="PV">Custom</option>
							</select>
						</div>
					</div>
				</div>
				<!-- Modal header END -->

				<form class="w-100" action="{{ route('showcases.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Modal body START -->
                    <div class="modal-body">
                        <div class="d-flex rounded-top mb-3">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs flex-shrink-0 me-2">
                                <img class="avatar-img rounded-circle" src="{{ auth()->check() && auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : 'https://ui-avatars.com/api/?name='.urlencode(auth()->user()->name ?? 'Guest').'&background=random' }}" alt="">
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
                        <button type="submit" class="btn btn-success m-0">Post</button>
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
@endsection
