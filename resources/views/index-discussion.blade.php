@extends('layouts.app')
@section('content')
		<!-- =======================Page Banner START -->
		<section class="pt-8 pb-4">
			<div class="container">
				<div class="row align-items-center">
					<!-- Title -->
					<div class="col-sm-6">
						<h1 class="h2">Discussion</h1>
					</div>
				</div> <!-- Row END -->
			</div>
		</section>
		<!-- =======================Page Banner END -->

		<!-- =======================Page Content START -->
		<section class="pt-0">
			<div class="container">

				<!-- Search and select -->
				<div class="row g-4 mb-4">
					<div class="col-md-8">
						<form class="rounded position-relative">
							<input class="form-control form-control-lg" type="search" placeholder="Search" aria-label="Search">
							<button class="bg-transparent border-0 text-primary-hover position-absolute top-50 end-0 translate-middle-y px-3" type="submit">
								<i class="fas fa-search"></i>
							</button>
						</form>
					</div>

					<div class="col-md-4 form-size-lg">
						<select class="form-select js-choice" data-placeholder-val="Sort by" data-search-enabled="false">
							<option value="">Sort by</option>
							<option>Latest activity</option>
							<option>Date created</option>
							<option>Top voted</option>
						</select>
					</div>
				</div>

				<div class="row">
					<!-- Left sidebar START -->
					<div class="col-xl-3">
						<!-- Responsive offcanvas body START -->
						<nav class="navbar navbar-light navbar-expand-xl mx-0">
							<div class="offcanvas offcanvas-end p-3 p-xl-0" tabindex="-1" id="offcanvasNavbar">

								<!-- Offcanvas header -->
								<div class="offcanvas-header justify-content-end pt-0 pe-0">
									<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
								</div>

								<!-- Offcanvas body START -->
								<div class="offcanvas-body p-0 d-block">
									<div class="card p-0">
										<!-- Card header -->
										<div class="card-header border-bottom">
											<h5 class="mb-0">Categories</h5>
										</div>

										<!-- Card body -->
										<div class="card-body">
											<!-- Sidebar nav START -->
											<ul class="nav nav-link-sidebar nav-sidebar-bg-light flex-column gap-2">
												<!-- Nav item -->
												<li class="nav-item">
													<a class="nav-link active" href="#"> <i class="bi bi-chat-square-dots fa-fw me-1"></i>View all discussion</a>
												</li>

												<!-- Nav item -->
												<li class="nav-item">
													<a class="nav-link" href="#"> <i class="bi bi-chat-left-dots-fill fa-fw me-1"></i>Forum</a>
												</li>

												<!-- Nav item -->
												<li class="nav-item">
													<a class="nav-link" href="#"> <i class="bi bi-fire fa-fw me-1"></i>General</a>
												</li>

												<!-- Nav item -->
												<li class="nav-item">
													<a class="nav-link" href="#"> <i class="bi bi-patch-question-fill fa-fw me-1"></i>Q&A</a>
												</li>

												<!-- Nav item -->
												<li class="nav-item">
													<a class="nav-link" href="#"> <i class="bi bi-bar-chart fa-fw me-1"></i>Polls</a>
												</li>

												<!-- Nav item -->
												<li class="nav-item">
													<a class="nav-link" href="#"> <i class="bi bi-life-preserver fa-fw me-1"></i>Help center</a>
												</li>
											</ul>
											<!-- Sidebar menu END -->
										</div>
									</div>

									<!-- Advertisement -->
									<div class="card bg-transparent mt-4">
										<a href="#" class="position-relative">
											<img src="{{ asset('assets/images/advertisement/02.jpg') }}" class="card-img" alt="">
											<div class="card-img-overlay">
												<h5 class="card-title text-white">Advertisement</h5>
											</div>
										</a>
										<div class="text-end text-body smaller mt-1">ads via <a href="#" class="text-primary-hover"><u>Bootstrap</u></a></div>
									</div>
								</div>
								<!-- Offcanvas body END -->
							</div>
						</nav>
						<!-- Responsive offcanvas body END -->
					</div>
					<!-- Left sidebar END -->

					<!-- Main content START -->
					<div class="col-xl-9 vstack gap-4">
						<!-- Discussion item -->
						<div class="card p-3 p-md-0">
							<div class="row">
								<div class="col-md-2">
									<div class="d-flex justify-content-md-center align-items-start h-100">
										<!-- Vote button -->
										<div class="border rounded text-center w-60px p-1 m-md-4 mb-0 mx-lg-auto">
											<!-- Like button -->
											<input type="radio" class="btn-check" name="vote1" id="btnradioT1">
											<label class="btn btn-vote mb-0 p-0" for="btnradioT1">
												<i class="bi bi-caret-up-fill fs-5"></i>
											</label>

											<!-- Vote count -->
											<h6 class="mb-0 px-2 vote-count">02</h6>
										</div>

										<div class="vr d-none d-md-block"></div> <!-- Divider -->
									</div>
								</div>

								<!-- Content -->
								<div class="col-md-8">
									<div class="card-body px-0 py-md-4">
										<!-- Icon -->
										<div class="badge text-bg-dark mb-2"><i class="bi bi-patch-question-fill fa-fw me-1"></i>Q&A</div>

										<!-- Title -->
										<h5 class="card-title mb-2"><a href="answer-detail.php">Issue in input-group & form-control add show/hide icon to password</a></h5>

										<!-- Name and Date -->
										<ul class="nav nav-divider">
											<li class="nav-item fw-normal"> <a href="#" class="text-primary-hover mb-0">Larry Lawson</a> </li>
											<li class="nav-item fw-normal">Asked: 3 days ago</li>
											<li class="nav-item fw-normal">Unanswered</li>
										</ul>
									</div>
								</div>

								<!-- Total answer -->
								<div class="col-md-2 m-auto">
									<div class="text-lg-center">
										<input type="checkbox" class="btn-check" id="btn-check-8">
										<a href="answer-detail.php" class="btn btn-light btn-success-soft-check mb-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Answered">
											2<i class="bi bi-check-circle ms-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Discussion item -->
						<div class="card p-3 p-md-0">
							<div class="row">
								<div class="col-md-2">
									<div class="d-flex justify-content-md-center align-items-start h-100">
										<!-- Vote button -->
										<div class="border rounded text-center w-60px p-1 m-md-4 mb-0 mx-lg-auto">
											<!-- Like button -->
											<input type="radio" class="btn-check" name="vote2" id="btnradioT2">
											<label class="btn btn-vote mb-0 p-0" for="btnradioT2">
												<i class="bi bi-caret-up-fill fs-5"></i>
											</label>

											<!-- Vote count -->
											<h6 class="mb-0 px-2 vote-count">03</h6>
										</div>

										<div class="vr d-none d-md-block"></div> <!-- Divider -->
									</div>
								</div>

								<!-- Content -->
								<div class="col-md-8">
									<div class="card-body px-0 py-md-4">
										<!-- Icon -->
										<div class="badge text-bg-dark mb-2"><i class="bi bi-fire fa-fw me-1"></i>General</div>

										<!-- Title -->
										<h5 class="card-title mb-2"><a href="answer-detail-v2.php">Using style and still staying responsive</a></h5>

										<!-- Name and Date -->
										<ul class="nav nav-divider">
											<li class="nav-item fw-normal"> <a href="#" class="text-primary-hover mb-0">Frances Guerrero</a> </li>
											<li class="nav-item fw-normal">Asked: 5 days ago</li>
											<li class="nav-item fw-normal text-primary">Answered</li>
										</ul>
									</div>
								</div>

								<!-- Total answer -->
								<div class="col-md-2 m-auto">
									<div class="text-lg-center">
										<input type="checkbox" class="btn-check" id="btn-check-1" checked>
										<a href="answer-detail-v2.php" class="btn btn-light btn-success-soft-check mb-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Best answer">
											3<i class="bi bi-check-circle-fill ms-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Discussion item -->
						<div class="card p-3 p-md-0">
							<div class="row">
								<div class="col-md-2">
									<div class="d-flex justify-content-md-center align-items-start h-100">
										<!-- Vote button -->
										<div class="border rounded text-center w-60px p-1 m-md-4 mb-0 mx-lg-auto">
											<!-- Like button -->
											<input type="radio" class="btn-check" name="vote3" id="btnradioT3">
											<label class="btn btn-vote mb-0 p-0" for="btnradioT3">
												<i class="bi bi-caret-up-fill fs-5"></i>
											</label>

											<!-- Vote count -->
											<h6 class="mb-0 px-2 vote-count">0</h6>
										</div>

										<div class="vr d-none d-md-block"></div> <!-- Divider -->
									</div>
								</div>

								<!-- Content -->
								<div class="col-md-8">
									<div class="card-body px-0 py-md-4">
										<!-- Icon -->
										<div class="badge text-bg-dark mb-2"><i class="bi bi-chat-left-dots-fill fa-fw me-1"></i>Forum</div>

										<!-- Title -->
										<h5 class="card-title mb-2"><a href="answer-detail.php">What's a goal you're currently working towards, and how do you plan to achieve it?</a></h5>

										<!-- Name and Date -->
										<ul class="nav nav-divider">
											<li class="nav-item fw-normal"> <a href="#" class="text-primary-hover mb-0">Samuel Bishop</a> </li>
											<li class="nav-item fw-normal">Asked: 6 days ago</li>
											<li class="nav-item fw-normal">Unanswered</li>
										</ul>
									</div>
								</div>

								<!-- Total answer -->
								<div class="col-md-2 m-auto">
									<div class="text-lg-center">
										<input type="checkbox" class="btn-check" id="btn-check-2">
										<a href="answer-detail.php" class="btn btn-light btn-success-soft-check mb-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Answered">
											1<i class="bi bi-check-circle ms-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Discussion item -->
						<div class="card p-3 p-md-0">
							<div class="row">
								<div class="col-md-2">
									<div class="d-flex justify-content-md-center align-items-start h-100">
										<!-- Vote button -->
										<div class="border rounded text-center w-60px p-1 m-md-4 mb-0 mx-lg-auto">
											<!-- Like button -->
											<input type="radio" class="btn-check" name="vote4" id="btnradioT4">
											<label class="btn btn-vote mb-0 p-0" for="btnradioT4">
												<i class="bi bi-caret-up-fill fs-5"></i>
											</label>

											<!-- Vote count -->
											<h6 class="mb-0 px-2 vote-count">04</h6>
										</div>

										<div class="vr d-none d-md-block"></div> <!-- Divider -->
									</div>
								</div>

								<!-- Content -->
								<div class="col-md-8">
									<div class="card-body px-0 py-md-4">
										<!-- Icon -->
										<div class="badge text-bg-dark mb-2"><i class="bi bi-fire fa-fw me-1"></i>General</div>

										<!-- Title -->
										<h5 class="card-title mb-2"><a href="answer-detail.php">What's the last book, movie, or TV show you enjoyed, and why?</a></h5>

										<!-- Name and Date -->
										<ul class="nav nav-divider">
											<li class="nav-item fw-normal"> <a href="#" class="text-primary-hover mb-0">Billy Vasquez</a> </li>
											<li class="nav-item fw-normal">Asked: 6 days ago</li>
											<li class="nav-item fw-normal">Unanswered</li>
										</ul>
									</div>
								</div>

								<!-- Total answer -->
								<div class="col-md-2 m-auto">
									<div class="text-lg-center">
										<input type="checkbox" class="btn-check" id="btn-check-3">
										<a href="answer-detail.php" class="btn btn-light btn-success-soft-check mb-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Answered">
											2<i class="bi bi-check-circle ms-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Discussion item -->
						<div class="card p-3 p-md-0">
							<div class="row">
								<div class="col-md-2">
									<div class="d-flex justify-content-md-center align-items-start h-100">
										<!-- Vote button -->
										<div class="border rounded text-center w-60px p-1 m-md-4 mb-0 mx-lg-auto">
											<!-- Like button -->
											<input type="radio" class="btn-check" name="vote5" id="btnradioT5">
											<label class="btn btn-vote mb-0 p-0" for="btnradioT5">
												<i class="bi bi-caret-up-fill fs-5"></i>
											</label>

											<!-- Vote count -->
											<h6 class="mb-0 px-2 vote-count">03</h6>
										</div>

										<div class="vr d-none d-md-block"></div> <!-- Divider -->
									</div>
								</div>

								<!-- Content -->
								<div class="col-md-8">
									<div class="card-body px-0 py-md-4">
										<!-- Icon -->
										<div class="badge text-bg-dark mb-2"><i class="bi bi-bar-chart fa-fw me-1"></i>Poll</div>

										<!-- Title -->
										<h5 class="card-title mb-2"><a href="answer-detail.php">Bootstrap Button with 'nav-link' and 'btn-outline' Classes Not Displaying Borders?</a></h5>

										<!-- Name and Date -->
										<ul class="nav nav-divider">
											<li class="nav-item fw-normal"> <a href="#" class="text-primary-hover mb-0">Billy Vasquez</a> </li>
											<li class="nav-item fw-normal">Asked: 6 days ago</li>
											<li class="nav-item fw-normal">Unanswered</li>
										</ul>
									</div>
								</div>

								<!-- Total answer -->
								<div class="col-md-2 m-auto">
									<div class="text-lg-center">
										<input type="checkbox" class="btn-check" id="btn-check-4">
										<a href="answer-detail.php" class="btn btn-light btn-success-soft-check mb-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Answered">
											2<i class="bi bi-check-circle ms-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Discussion item -->
						<div class="card p-3 p-md-0">
							<div class="row">
								<div class="col-md-2">
									<div class="d-flex justify-content-md-center align-items-start h-100">
										<!-- Vote button -->
										<div class="border rounded text-center w-60px p-1 m-md-4 mb-0 mx-lg-auto">
											<!-- Like button -->
											<input type="radio" class="btn-check" name="vote6" id="btnradioT6">
											<label class="btn btn-vote mb-0 p-0" for="btnradioT6">
												<i class="bi bi-caret-up-fill fs-5"></i>
											</label>

											<!-- Vote count -->
											<h6 class="mb-0 px-2 vote-count">10</h6>
										</div>

										<div class="vr d-none d-md-block"></div> <!-- Divider -->
									</div>
								</div>

								<!-- Content -->
								<div class="col-md-8">
									<div class="card-body px-0 py-md-4">
										<!-- Icon -->
										<div class="badge text-bg-dark mb-2"><i class="bi bi-life-preserver fa-fw me-1"></i>Help center</div>

										<!-- Title -->
										<h5 class="card-title mb-2"><a href="answer-detail-v2.php">What's the meaning of success to you, and how do you pursue it in your life?</a></h5>

										<!-- Name and Date -->
										<ul class="nav nav-divider">
											<li class="nav-item fw-normal"> <a href="#" class="text-primary-hover mb-0">Billy Vasquez</a> </li>
											<li class="nav-item fw-normal">Asked: 6 days ago</li>
											<li class="nav-item fw-normal text-primary">Answered</li>
										</ul>
									</div>
								</div>

								<!-- Total answer -->
								<div class="col-md-2 m-auto">
									<div class="text-lg-center">
										<input type="checkbox" class="btn-check" id="btn-check-5" checked>
										<a href="answer-detail-v2.php" class="btn btn-light btn-success-soft-check mb-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Best answer">
											5<i class="bi bi-check-circle-fill ms-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Discussion item -->
						<div class="card p-3 p-md-0">
							<div class="row">
								<div class="col-md-2">
									<div class="d-flex justify-content-md-center align-items-start h-100">
										<!-- Vote button -->
										<div class="border rounded text-center w-60px p-1 m-md-4 mb-0 mx-lg-auto">
											<!-- Like button -->
											<input type="radio" class="btn-check" name="vote7" id="btnradioT7">
											<label class="btn btn-vote mb-0 p-0" for="btnradioT7">
												<i class="bi bi-caret-up-fill fs-5"></i>
											</label>

											<!-- Vote count -->
											<h6 class="mb-0 px-2 vote-count">02</h6>
										</div>

										<div class="vr d-none d-md-block"></div> <!-- Divider -->
									</div>
								</div>

								<!-- Content -->
								<div class="col-md-8">
									<div class="card-body px-0 py-md-4">
										<!-- Icon -->
										<div class="badge text-bg-dark mb-2"><i class="bi bi-patch-question-fill fa-fw me-1"></i>Q&A</div>

										<!-- Title -->
										<h5 class="card-title mb-2"><a href="answer-detail.php">Where do you see yourself in 5 years, and what steps are you taking to get there?</a></h5>

										<!-- Name and Date -->
										<ul class="nav nav-divider">
											<li class="nav-item fw-normal"> <a href="#" class="text-primary-hover mb-0">Billy Vasquez</a> </li>
											<li class="nav-item fw-normal">Asked: 1 week ago</li>
											<li class="nav-item fw-normal">Unanswered</li>
										</ul>
									</div>
								</div>

								<!-- Total answer -->
								<div class="col-md-2 m-auto">
									<div class="text-lg-center">
										<input type="checkbox" class="btn-check" id="btn-check-6">
										<a href="answer-detail.php" class="btn btn-light btn-success-soft-check mb-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Answered">
											2<i class="bi bi-check-circle ms-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Discussion item -->
						<div class="card p-3 p-md-0">
							<div class="row">
								<div class="col-md-2">
									<div class="d-flex justify-content-md-center align-items-start h-100">
										<!-- Vote button -->
										<div class="border rounded text-center w-60px p-1 m-md-4 mb-0 mx-lg-auto">
											<!-- Like button -->
											<input type="radio" class="btn-check" name="vote8" id="btnradioT8">
											<label class="btn btn-vote mb-0 p-0" for="btnradioT8">
												<i class="bi bi-caret-up-fill fs-5"></i>
											</label>

											<!-- Vote count -->
											<h6 class="mb-0 px-2 vote-count">01</h6>
										</div>

										<div class="vr d-none d-md-block"></div> <!-- Divider -->
									</div>
								</div>

								<!-- Content -->
								<div class="col-md-8">
									<div class="card-body px-0 py-md-4">
										<!-- Icon -->
										<div class="badge text-bg-dark mb-2"><i class="bi bi-chat-left-dots-fill fa-fw me-1"></i>Forum</div>

										<!-- Title -->
										<h5 class="card-title mb-2"><a href="answer-detail.php">What inspires your creativity, and how do you overcome creative blocks?</a></h5>

										<!-- Name and Date -->
										<ul class="nav nav-divider">
											<li class="nav-item fw-normal"> <a href="#" class="text-primary-hover mb-0">Lori Stevens</a> </li>
											<li class="nav-item fw-normal">Asked: 1 week ago</li>
											<li class="nav-item fw-normal">Unanswered</li>
										</ul>
									</div>
								</div>

								<!-- Total answer -->
								<div class="col-md-2 m-auto">
									<div class="text-lg-center">
										<input type="checkbox" class="btn-check" id="btn-check-9">
										<a href="answer-detail.php" class="btn btn-light btn-success-soft-check mb-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Answered">
											0<i class="bi bi-check-circle ms-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Discussion item -->
						<div class="card p-3 p-md-0">
							<div class="row">
								<div class="col-md-2">
									<div class="d-flex justify-content-md-center align-items-start h-100">
										<!-- Vote button -->
										<div class="border rounded text-center w-60px p-1 m-md-4 mb-0 mx-lg-auto">
											<!-- Like button -->
											<input type="radio" class="btn-check" name="vote9" id="btnradioT9">
											<label class="btn btn-vote mb-0 p-0" for="btnradioT9">
												<i class="bi bi-caret-up-fill fs-5"></i>
											</label>

											<!-- Vote count -->
											<h6 class="mb-0 px-2 vote-count">03</h6>
										</div>

										<div class="vr d-none d-md-block"></div> <!-- Divider -->
									</div>
								</div>

								<!-- Content -->
								<div class="col-md-8">
									<div class="card-body px-0 py-md-4">
										<!-- Icon -->
										<div class="badge text-bg-dark mb-2"><i class="bi bi-fire fa-fw me-1"></i>General</div>

										<!-- Title -->
										<h5 class="card-title mb-2"><a href="answer-detail-v2.php">Share a favorite memory from your past and what makes it special to you.</a></h5>

										<!-- Name and Date -->
										<ul class="nav nav-divider">
											<li class="nav-item fw-normal"> <a href="#" class="text-primary-hover mb-0">Dennis Barrett</a> </li>
											<li class="nav-item fw-normal">Asked: 2 weeks ago</li>
											<li class="nav-item fw-normal text-primary">Answered</li>
										</ul>
									</div>
								</div>

								<!-- Total answer -->
								<div class="col-md-2 m-auto">
									<div class="text-lg-center">
										<input type="checkbox" class="btn-check" id="btn-check-10" checked>
										<a href="answer-detail-v2.php" class="btn btn-light btn-success-soft-check mb-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Answered">
											4<i class="bi bi-check-circle-fill ms-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Discussion item -->
						<div class="card p-3 p-md-0">
							<div class="row">
								<div class="col-md-2">
									<div class="d-flex justify-content-md-center align-items-start h-100">
										<!-- Vote button -->
										<div class="border rounded text-center w-60px p-1 m-md-4 mb-0 mx-lg-auto">
											<!-- Like button -->
											<input type="radio" class="btn-check" name="vote10" id="btnradioT10">
											<label class="btn btn-vote mb-0 p-0" for="btnradioT10">
												<i class="bi bi-caret-up-fill fs-5"></i>
											</label>

											<!-- Vote count -->
											<h6 class="mb-0 px-2 vote-count">02</h6>
										</div>

										<div class="vr d-none d-md-block"></div> <!-- Divider -->
									</div>
								</div>

								<!-- Content -->
								<div class="col-md-8">
									<div class="card-body px-0 py-md-4">
										<!-- Icon -->
										<div class="badge text-bg-dark mb-2"><i class="bi bi-life-preserver fa-fw me-1"></i>Help center</div>

										<!-- Title -->
										<h5 class="card-title mb-2"><a href="answer-detail.php">Who is an inspirational figure in your life, and how have they influenced you?</a></h5>

										<!-- Name and Date -->
										<ul class="nav nav-divider">
											<li class="nav-item fw-normal"> <a href="#" class="text-primary-hover mb-0">Billy Vasquez</a> </li>
											<li class="nav-item fw-normal">Asked: 2 weeks ago</li>
											<li class="nav-item fw-normal">Unanswered</li>
										</ul>
									</div>
								</div>

								<!-- Total answer -->
								<div class="col-md-2 m-auto">
									<div class="text-lg-center">
										<input type="checkbox" class="btn-check" id="btn-check-7">
										<a href="answer-detail.php" class="btn btn-light btn-success-soft-check mb-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Answered">
											0<i class="bi bi-check-circle ms-2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Pagination -->
						<nav class="d-flex justify-content-center" aria-label="navigation">
							<ul class="pagination pagination-primary-soft bg-mode flex-wrap rounded mb-0">
								<li class="page-item"><a class="page-link" href="#" tabindex="-1"><i class="fa-solid fa-angle-left"></i> Previous</a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item "><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">..</a></li>
								<li class="page-item"><a class="page-link" href="#">6</a></li>
								<li class="page-item"><a class="page-link" href="#">Next <i class="fa-solid fa-angle-right"></i></a></li>
							</ul>
						</nav>
					</div>
					<!-- Main content END -->
				</div>
			</div>
		</section>
		<!-- =======================Page Content END -->
@endsection
