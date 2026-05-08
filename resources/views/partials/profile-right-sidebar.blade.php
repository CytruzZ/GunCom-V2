<!-- Right sidebar START -->
<div class="col-xl-4">
    <div class="row g-4">
        <!-- Working On START -->
        <div class="col-lg-6 col-xl-12">
            <div class="card p-0">
                <!-- Card header -->
                <div class="card-header border-bottom p-3 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Build Progress</h5>
                </div>

                <!-- Card body START -->
                <div class="card-body p-3">
@php
    $profileUser = $user ?? auth()->user();
    $sidebarBuilds = $profileUser ? $profileUser->buildProjects()->where('status', 'ongoing')->take(3)->get() : collect();
@endphp
                    @forelse($sidebarBuilds as $build)
                    <!-- Progress item -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h6 class="mb-0 small">{{ $build->kit_name }}</h6>
                            <div class="d-flex align-items-center gap-2">
                                <span class="small fw-bold">{{ $build->percentage }}%</span>
                                @if(auth()->id() === $profileUser->id)
                                <a href="{{ route('my-profile.buildlog') }}" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit"><i class="bi bi-pencil-square"></i></a>
                                @endif
                            </div>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar custom-bg-primary" role="progressbar" style="width: {{ $build->percentage }}%; background-color: {{ $loop->iteration % 2 == 0 ? '#17a2b8' : '#0d6efd' }};" aria-valuenow="{{ $build->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    @empty
                        <p class="text-muted small mb-0">Tidak ada progress yang dibuat.</p>
                    @endforelse
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Working On END -->
    </div>
</div>
<!-- Right sidebar END -->

