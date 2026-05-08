<div class="modal fade" id="postModal{{ $post->id }}" tabindex="-1" aria-labelledby="postModalLabel{{ $post->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content overflow-hidden border-0 bg-white text-dark">
            <div class="row g-0">
                <!-- Image Section -->
                <div class="col-md-7 d-flex align-items-center justify-content-center bg-black" style="min-height: 400px; max-height: 85vh;">
                    <img src="{{ Str::startsWith($post->image, 'http') ? $post->image : asset('storage/' . $post->image) }}" class="img-fluid" style="max-height: 100%; object-fit: contain;">
                </div>
                <!-- Content Section -->
                <div class="col-md-5 d-flex flex-column" style="max-height: 85vh;">
                    <!-- Header -->
                    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                        <div class="d-flex align-items-center">
                            <img src="{{ $post->user->profile_picture ? asset('storage/' . $post->user->profile_picture) : 'https://ui-avatars.com/api/?name='.urlencode($post->user->name).'&background=random' }}" class="avatar-img rounded-circle" style="width: 32px; height: 32px; object-fit: cover;">
                            <span class="ms-2 fw-bold text-dark">{{ $post->user->name }}</span>
                        </div>
                        <div class="d-flex align-items-center">
                            @if(auth()->id() === $post->user_id)
                            <div class="dropdown">
                                <button class="btn btn-link text-dark p-0 me-3" type="button" id="postAction{{ $post->id }}" data-bs-toggle="dropdown" aria-expanded="false" style="box-shadow: none;">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="postAction{{ $post->id }}">
                                    <li>
                                        <button class="dropdown-item" onclick="toggleEditMode({{ $post->id }})">
                                            <i class="bi bi-pencil fa-fw pe-2"></i>Edit Description
                                        </button>
                                    </li>
                                    <li>
                                        <form action="{{ route('showcases.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    
                    <!-- Comments / Description Body -->
                    <div class="p-3 flex-grow-1 overflow-auto" style="scrollbar-width: thin; scrollbar-color: rgba(0,0,0,0.2) transparent;">
                        <!-- Original post description -->
                        <div class="d-flex mb-4" id="post-desc-container-{{ $post->id }}">
                            <img src="{{ $post->user->profile_picture ? asset('storage/' . $post->user->profile_picture) : 'https://ui-avatars.com/api/?name='.urlencode($post->user->name).'&background=random' }}" class="avatar-img rounded-circle flex-shrink-0" style="width: 32px; height: 32px; object-fit: cover;">
                            <div class="ms-2" style="width: 100%;">
                                <span class="fw-bold text-dark me-1">{{ $post->user->name }}</span>
                                <span class="text-dark" id="post-desc-text-{{ $post->id }}">{{ $post->description }}</span>
                                <div class="text-muted small mt-1">{{ $post->created_at->diffForHumans() }}</div>
                                
                                <!-- Edit Form -->
                                <form action="{{ route('showcases.update', $post->id) }}" method="POST" id="post-edit-form-{{ $post->id }}" class="d-none mt-2">
                                    @csrf
                                    @method('PUT')
                                    <textarea name="description" class="form-control bg-transparent text-dark mb-2" rows="2">{{ $post->description }}</textarea>
                                    <div class="d-flex gap-2">
                                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                        <button type="button" class="btn btn-sm btn-light" onclick="toggleEditMode({{ $post->id }})">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Comments -->
                        @if($post->comments && $post->comments->count() > 0)
                            @foreach($post->comments as $comment)
                                <div class="d-flex mb-3">
                                    <img src="{{ $comment->user->profile_picture ? asset('storage/' . $comment->user->profile_picture) : 'https://ui-avatars.com/api/?name='.urlencode($comment->user->name).'&background=random' }}" class="avatar-img rounded-circle flex-shrink-0" style="width: 32px; height: 32px; object-fit: cover;">
                                    <div class="ms-2">
                                        <span class="fw-bold text-dark me-1">{{ $comment->user->name }}</span>
                                        <span class="text-dark">{{ $comment->reply }}</span>
                                        <div class="text-muted small mt-1">{{ $comment->created_at->diffForHumans() }}</div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-center text-muted small mt-5">No comments yet.</div>
                        @endif
                    </div>
                    
                    <!-- Actions and Add Comment -->
                    <div class="p-3 border-top">
                        <div class="d-flex gap-3 fs-5 mb-2 align-items-center">
                            @if(auth()->check())
                            <form action="{{ route('showcases.like', $post->id) }}" method="POST" class="d-inline m-0 p-0">
                                @csrf
                                @php
                                    $isLiked = \App\Models\ShowcaseLike::where('user_id', auth()->id())->where('showcase_id', $post->id)->exists();
                                @endphp
                                <button type="submit" class="btn btn-link p-0 text-dark text-decoration-none shadow-none border-0">
                                    <i class="bi {{ $isLiked ? 'bi-heart-fill text-danger' : 'bi-heart' }} fs-5"></i>
                                </button>
                            </form>
                            @else
                            <a href="{{ route('signin') }}" class="btn btn-link p-0 text-dark text-decoration-none shadow-none border-0">
                                <i class="bi bi-heart fs-5"></i>
                            </a>
                            @endif
                            <i class="bi bi-chat" style="cursor: pointer;"></i>
                        </div>
                        <div class="fw-bold mb-1 text-dark">{{ $post->likes }} likes</div>
                        <div class="text-muted small mb-3 text-uppercase" style="font-size: 10px;">{{ $post->created_at->format('F j, Y') }}</div>
                        @if(auth()->check())
                        <form action="{{ route('showcases.comment', $post->id) }}" method="POST" class="m-0 p-0">
                            @csrf
                            <div class="input-group align-items-center">
                                <i class="bi bi-emoji-smile fs-5 text-dark me-2" style="cursor: pointer;"></i>
                                <input type="text" name="reply" class="form-control bg-transparent border-0 text-dark shadow-none ps-0" placeholder="Add a comment..." style="font-size: 14px;" required>
                                <button class="btn btn-link text-primary text-decoration-none px-0 fw-bold" type="submit" style="font-size: 14px;">Post</button>
                            </div>
                        </form>
                        @else
                        <div class="input-group align-items-center" onclick="window.location.href='{{ route('signin') }}'">
                            <i class="bi bi-emoji-smile fs-5 text-dark me-2" style="cursor: pointer;"></i>
                            <input type="text" class="form-control bg-transparent border-0 text-dark shadow-none ps-0" placeholder="Add a comment..." style="font-size: 14px; cursor: pointer;" readonly>
                            <button class="btn btn-link text-primary text-decoration-none px-0 fw-bold" type="button" style="font-size: 14px;">Post</button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
