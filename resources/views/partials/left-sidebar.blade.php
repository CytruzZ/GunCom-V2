						<!-- Responsive offcanvas body START -->
						<nav class="navbar navbar-light navbar-expand-xxl mx-0 position-sticky" style="top: 80px; z-index: 1020;">
							<div class="offcanvas offcanvas-end p-3 p-xxl-0" tabindex="-1" id="offcanvasNavbar">

								<!-- Offcanvas header -->
								<div class="offcanvas-header justify-content-end pt-0 pe-0">
									<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
								</div>

								<!-- Offcanvas body START -->
								<div class="offcanvas-body p-0 d-block">
									<div class="card card-body p-3 shadow-sm border-0">
										<!-- Sidebar nav START -->
										<ul class="nav nav-link-sidebar flex-column gap-2">

										<!-- Nav item -->
										<li class="nav-item">
											<a class="nav-link d-flex align-items-center {{ Route::is('index') ? 'active' : '' }}" href="{{ route('index') }}">
												<span class="nav-icon">
													<svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M3 13.2L5 11.6M21 13.2L19 11.6M3 9.7L9.7511 4.29912C10.7055 3.53562 11.1827 3.15387 11.7309 3.07943C11.9095 3.05519 12.0905 3.05519 12.2691 3.07943C12.8173 3.15387 13.2945 3.53562 14.2489 4.29912L21 9.7M5 11.6L5.33333 11.3333L9.7511 7.79912C10.7055 7.03562 11.1827 6.65387 11.7309 6.57943C11.9095 6.55519 12.0905 6.55519 12.2691 6.57943C12.8173 6.65387 13.2945 7.03562 14.2489 7.79912L18.6667 11.3333L19 11.6M5 11.6V18.625C5 19.9367 6.06332 21 7.375 21V21C8.68668 21 9.75 19.9367 9.75 18.625V17.5357C9.75 16.2931 10.7574 15.2857 12 15.2857V15.2857C13.2426 15.2857 14.25 16.2931 14.25 17.5357V18.625C14.25 19.9367 15.3133 21 16.625 21V21C17.9367 21 19 19.9367 19 18.625V11.6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
													</svg>
												</span>
												Home
											</a>
										</li>

										<!-- Nav item -->
										<li class="nav-item">
											<a class="nav-link d-flex align-items-center {{ Route::is('showcases.index') ? 'active' : '' }}" href="{{ route('showcases.index') }}">
												<span class="nav-icon">
													<i class="bi bi-images fs-5"></i>
												</span>
												Showcases
											</a>
										</li>

										<!-- Nav item -->
										<li class="nav-item">
											<a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#category" role="button" aria-expanded="false" aria-controls="category">
												<span class="nav-icon">
													<svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M3 4C3 3.44772 3.44772 3 4 3H9.5C10.0523 3 10.5 3.44772 10.5 4V9.5C10.5 10.0523 10.0523 10.5 9.5 10.5H4C3.44772 10.5 3 10.0523 3 9.5V4Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
														<path d="M3 14.5C3 13.9477 3.44772 13.5 4 13.5H9.5C10.0523 13.5 10.5 13.9477 10.5 14.5V20C10.5 20.5523 10.0523 21 9.5 21H4C3.44772 21 3 20.5523 3 20V14.5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
														<path d="M13.5 4C13.5 3.44772 13.9477 3 14.5 3H20C20.5523 3 21 3.44772 21 4V9.5C21 10.0523 20.5523 10.5 20 10.5H14.5C13.9477 10.5 13.5 10.0523 13.5 9.5V4Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
														<path d="M13.5 14.5C13.5 13.9477 13.9477 13.5 14.5 13.5H20C20.5523 13.5 21 13.9477 21 14.5V20C21 20.5523 20.5523 21 20 21H14.5C13.9477 21 13.5 20.5523 13.5 20V14.5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
													</svg>
												</span>
												Categories
											</a>

											<!-- Submenu -->
											<ul class="nav collapse sidebar-submenu flex-column flex-nowrap {{ isset($currentCategory) ? 'show' : '' }}" id="category" data-bs-parent="#navbar-sidebar">
												<li class="nav-item"> <a class="nav-link {{ isset($currentCategory) && $currentCategory === 'Q&A' ? 'active' : '' }}" href="{{ route('index', ['category' => 'Q&A']) }}" {!! isset($currentCategory) && $currentCategory === 'Q&A' ? 'style="background-color: #00A8A8 !important; color: #ffffff !important; border-radius: 0.5rem;"' : '' !!}>Q&A</a></li>
												<li class="nav-item"> <a class="nav-link {{ isset($currentCategory) && $currentCategory === 'Build & Custom' ? 'active' : '' }}" href="{{ route('index', ['category' => 'Build & Custom']) }}" {!! isset($currentCategory) && $currentCategory === 'Build & Custom' ? 'style="background-color: #00A8A8 !important; color: #ffffff !important; border-radius: 0.5rem;"' : '' !!}>Build & Custom</a></li>
												<li class="nav-item"> <a class="nav-link {{ isset($currentCategory) && $currentCategory === 'Kits' ? 'active' : '' }}" href="{{ route('index', ['category' => 'Kits']) }}" {!! isset($currentCategory) && $currentCategory === 'Kits' ? 'style="background-color: #00A8A8 !important; color: #ffffff !important; border-radius: 0.5rem;"' : '' !!}>Kits</a></li>
											</ul>
										</li>

										@guest
										<!-- Nav item -->
										<li class="nav-item">
											<a class="nav-link d-flex align-items-center" href="{{ route('signin') }}">
												<span class="nav-icon">
													<i class="bi bi-box-arrow-in-right fs-5"></i>
												</span>
												Sign In
											</a>
										</li>
										@else
										<!-- Nav item -->
										<li class="nav-item">
											<a class="nav-link d-flex align-items-center {{ Route::is('notifications.index') ? 'active' : '' }}" href="{{ route('notifications.index') }}">
												<span class="nav-icon position-relative">
													<i class="bi bi-bell fs-5"></i>
													@if(auth()->user()->unreadNotifications->count() > 0)
													<span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle" style="margin-top: 5px; margin-left: -5px;">
														<span class="visually-hidden">New alerts</span>
													</span>
													@endif
												</span>
												<span class="ms-2">Notifications</span>
											</a>
										</li>

										<!-- Nav item -->
										<li class="nav-item">
											<a class="nav-link d-flex align-items-center {{ Route::is('profile') || Route::is('my-profile*') ? 'active' : '' }}" href="{{ route('profile') }}">
												<span class="nav-icon">
													<svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M18.7083 18C20.1334 16.4077 21 14.3051 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 14.3051 3.86656 16.4077 5.29168 18M18.7083 18C17.0604 19.8412 14.6655 21 12 21C9.3345 21 6.93964 19.8412 5.29168 18M18.7083 18L18.2426 17.3122C16.8401 15.2408 14.5015 14 12 14V14C9.49848 14 7.15987 15.2408 5.75738 17.3122L5.29168 18M12 11.5C10.6193 11.5 9.5 10.3807 9.5 9C9.5 7.61929 10.6193 6.5 12 6.5C13.3807 6.5 14.5 7.61929 14.5 9C14.5 10.3807 13.3807 11.5 12 11.5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
													</svg>
												</span>
												<span class="ms-2">Profile</span>
											</a>
										</li>
										@endguest

										<!-- log out -->
										@auth
										<li class="nav-item mt-2">
											<form action="{{ route('logout') }}" method="POST" id="logout-form">
												@csrf
												<button type="submit" 
														onclick="return confirm('Are you sure you want to logout?')" 
														class="nav-link d-flex align-items-center border-0 bg-transparent w-100 text-danger">
													<span class="nav-icon">
														<i class="bi bi-box-arrow-right fs-5"></i>
													</span>
													Logout
												</button>
											</form>
										</li>
										@endauth
									</ul>
									<!-- Sidebar menu END -->
									</div>
								</div>
								<!-- Offcanvas body END -->
							</div>
						</nav>
						<!-- Responsive offcanvas body END -->
