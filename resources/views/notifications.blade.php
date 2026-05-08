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
                        <h1 class="h4 mb-0 fw-bold text-dark">Notifications</h1>
                        @if($notifications->count() > 0)
                        <form action="{{ route('notifications.readAll') }}" method="POST" class="m-0">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary-soft">Mark all as read</button>
                        </form>
                        @endif
                    </div>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            @forelse($notifications as $notification)
                            <li class="list-group-item p-3 {{ is_null($notification->read_at) ? 'bg-light' : '' }}">
                                <a href="{{ route('notifications.read', $notification->id) }}" class="text-decoration-none text-dark d-flex align-items-center">
                                    <div class="avatar avatar-md me-3">
                                        <img class="avatar-img rounded-circle" src="{{ $notification->data['causer_avatar'] ? asset('storage/' . $notification->data['causer_avatar']) : 'https://ui-avatars.com/api/?name='.urlencode($notification->data['causer_name']).'&background=random' }}" alt="">
                                    </div>
                                    <div>
                                        <p class="mb-1">
                                            <strong>{{ $notification->data['causer_name'] }}</strong> {{ $notification->data['message'] }}
                                        </p>
                                        <span class="small text-muted">{{ $notification->created_at->diffForHumans() }}</span>
                                    </div>
                                    @if(is_null($notification->read_at))
                                    <div class="ms-auto">
                                        <span class="badge bg-danger rounded-circle p-1"><span class="visually-hidden">unread</span></span>
                                    </div>
                                    @endif
                                </a>
                            </li>
                            @empty
                            <div class="text-center p-5">
                                <i class="bi bi-bell-slash fs-1 text-muted mb-3"></i>
                                <h5>Belum ada notifikasi</h5>
                                <p class="text-muted mb-0">Anda akan mendapatkan notifikasi saat ada pengguna lain yang berinteraksi dengan postingan Anda.</p>
                            </div>
                            @endforelse
                        </ul>
                    </div>
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
@endsection
