<div class="card dropdown-hover p-4 shadow-sm border-0 position-relative">
    @php
        $categoryColors = [
            'Q&A' => 'bg-info text-white',
            'Build & Custom' => 'bg-warning text-dark',
            'Kits' => 'bg-success text-white',
        ];
        $categoryClass = $categoryColors[$forum->category ?? ''] ?? 'bg-secondary text-white';
    @endphp

    <div class="position-absolute top-0 end-0 mt-3 me-3">
        <a href="{{ route('index', ['category' => $forum->category]) }}" class="badge {{ $categoryClass }} text-decoration-none shadow-sm">
            {{ $forum->category ?? 'Discussion' }}
        </a>
    </div>

    <div class="row g-3 g-lg-0">
        <div class="col-3 col-md-2">
            <div class="dropdown d-block mb-2">
                <a href="{{ route('user.profile', $forum->user->id) }}" class="avatar avatar-lg">
                    <img class="avatar-img rounded-circle" src="{{ $forum->user->profile_picture ? asset('storage/' . $forum->user->profile_picture) : 'https://ui-avatars.com/api/?name='.urlencode($forum->user->name).'&background=random' }}" alt="{{ $forum->user->name }}">
                </a>
            </div>
        </div>

        <div class="col-md-10"> 
            <div class="card-body p-0">
                <h5 class="card-title mb-2 me-md-5">
                    <a href="{{ route('forums.show', $forum->id) }}" class="text-dark fw-bold text-decoration-none">{{ $forum->title }}</a>
                </h5>

                <div class="d-flex align-items-center gap-2 flex-wrap mb-3">
                    <a href="{{ route('user.profile', $forum->user->id) }}" class="badge text-bg-dark text-decoration-none">{{ $forum->user->name }}</a>
                    <small>Asked: {{ $forum->created_at->format('d M Y') }}</small>
                </div>

                <p class="mb-0" style="color: #495057;">
                    {{ Str::limit($forum->content, 150) }}
                </p>

                <div class="hstack gap-3 mt-4 flex-wrap justify-content-end">
                    <a href="{{ route('forums.show', $forum->id) }}" class="btn btn-dark mb-0">
                        {{ $forum->comments_count ?? 0 }} Answers
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

