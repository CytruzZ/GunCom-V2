@extends("layouts.app")
@section("content")
		<!-- =======================Page Banner START -->
		<section class="bg-dark pt-8" data-bs-theme="dark">
			<div class="container position-relative">
				<div class="row align-items-center">
					<!-- Content -->
					<div class="col-lg-6">
						<!-- Title -->
						<h1 class="mb-3 display-6">Meet Your Modern Discussion Board</h1>
						<p class="mb-3">With a sleek and intuitive interface, it empowers users to share ideas, ask questions, and exchange information seamlessly.</p>
						<!-- Button -->
						<a href="contact-us.php" class="btn btn-warning mb-0">Get Started</a>
					</div>
				</div> <!-- Row END -->
			</div>
		</section>
		<!-- =======================Page Banner END -->

		<!-- =======================category START -->
		<section>
			<div class="container">
				<!-- Title -->
				<div class="row">
					<div class="col-12 mb-4">
						<div class="d-flex justify-content-between align-items-center">
							<h2 class="mb-0">Top Categories</h2>
							<a href="#" class="btn btn-primary-soft mb-0">View all</a>
						</div>
					</div>
				</div>

				<!-- Category START -->
				<div class="row g-4">
					<!-- Item -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card p-0">
							<!-- Card header -->
							<div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">
								<h5 class="card-title mb-0"><i class="fa-solid fa-circle fa-2xs text-warning me-2"></i>Boards</h5>
								<a class="icon-link icon-link-hover fw-normal" href="forum-category.php">View<i class="bi bi-arrow-right lh-1"></i> </a>
							</div>

							<!-- Card body START -->
							<div class="card-body hstack gap-4 flex-wrap p-3">
								<!-- Meta item -->
								<div>
									<small>Topic</small>
									<h6 class="mb-0">125</h6>
								</div>

								<!-- Meta item -->
								<div>
									<small>Last Activity</small>
									<h6 class="mb-0">Today 5:30 PM</h6>
								</div>
							</div>
							<!-- Card body END -->
						</div>
					</div>

					<!-- Item -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card p-0">
							<!-- Card header -->
							<div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">
								<h5 class="card-title mb-0"><i class="fa-solid fa-circle fa-2xs text-orange me-2"></i>Finance</h5>
								<a class="icon-link icon-link-hover fw-normal" href="forum-category.php">View<i class="bi bi-arrow-right lh-1"></i> </a>
							</div>

							<!-- Card body START -->
							<div class="card-body hstack gap-4 flex-wrap p-3">
								<!-- Meta item -->
								<div>
									<small>Topic</small>
									<h6 class="mb-0">245</h6>
								</div>

								<!-- Meta item -->
								<div>
									<small>Last Activity</small>
									<h6 class="mb-0">Today 1:30 AM</h6>
								</div>
							</div>
							<!-- Card body END -->
						</div>
					</div>

					<!-- Item -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card p-0">
							<!-- Card header -->
							<div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">
								<h5 class="card-title mb-0"><i class="fa-solid fa-circle fa-2xs text-info me-2"></i>Legal</h5>
								<a class="icon-link icon-link-hover fw-normal" href="forum-category.php">View<i class="bi bi-arrow-right lh-1"></i> </a>
							</div>

							<!-- Card body START -->
							<div class="card-body hstack gap-4 flex-wrap p-3">
								<!-- Meta item -->
								<div>
									<small>Topic</small>
									<h6 class="mb-0">458</h6>
								</div>

								<!-- Meta item -->
								<div>
									<small>Last Activity</small>
									<h6 class="mb-0">Today 2:54 PM</h6>
								</div>
							</div>
							<!-- Card body END -->
						</div>
					</div>

					<!-- Item -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card p-0">
							<!-- Card header -->
							<div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">
								<h5 class="card-title mb-0"><i class="fa-solid fa-circle fa-2xs heading-color me-2"></i>Nursing</h5>
								<a class="icon-link icon-link-hover fw-normal" href="forum-category.php">View<i class="bi bi-arrow-right lh-1"></i> </a>
							</div>

							<!-- Card body START -->
							<div class="card-body hstack gap-4 flex-wrap p-3">
								<!-- Meta item -->
								<div>
									<small>Topic</small>
									<h6 class="mb-0">45</h6>
								</div>

								<!-- Meta item -->
								<div>
									<small>Last Activity</small>
									<h6 class="mb-0">Today 7:40 AM</h6>
								</div>
							</div>
							<!-- Card body END -->
						</div>
					</div>

					<!-- Item -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card p-0">
							<!-- Card header -->
							<div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">
								<h5 class="card-title mb-0"><i class="fa-solid fa-circle fa-2xs text-success me-2"></i>Freelance & Jobs</h5>
								<a class="icon-link icon-link-hover fw-normal" href="forum-category.php">View<i class="bi bi-arrow-right lh-1"></i> </a>
							</div>

							<!-- Card body START -->
							<div class="card-body hstack gap-4 flex-wrap p-3">
								<!-- Meta item -->
								<div>
									<small>Topic</small>
									<h6 class="mb-0">145</h6>
								</div>

								<!-- Meta item -->
								<div>
									<small>Last Activity</small>
									<h6 class="mb-0">Today 2:30 PM</h6>
								</div>
							</div>
							<!-- Card body END -->
						</div>
					</div>

					<!-- Item -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card p-0">
							<!-- Card header -->
							<div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">
								<h5 class="card-title mb-0"><i class="fa-solid fa-circle fa-2xs text-primary me-2"></i>General</h5>
								<a class="icon-link icon-link-hover fw-normal" href="forum-category.php">View<i class="bi bi-arrow-right lh-1"></i> </a>
							</div>

							<!-- Card body START -->
							<div class="card-body hstack gap-4 flex-wrap p-3">
								<!-- Meta item -->
								<div>
									<small>Topic</small>
									<h6 class="mb-0">56</h6>
								</div>

								<!-- Meta item -->
								<div>
									<small>Last Activity</small>
									<h6 class="mb-0">Today 3:05 PM</h6>
								</div>
							</div>
							<!-- Card body END -->
						</div>
					</div>

					<!-- Item -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card p-0">
							<!-- Card header -->
							<div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">
								<h5 class="card-title mb-0"><i class="fa-solid fa-circle fa-2xs text-danger me-2"></i>Custom code</h5>
								<a class="icon-link icon-link-hover fw-normal" href="forum-category.php">View<i class="bi bi-arrow-right lh-1"></i> </a>
							</div>

							<!-- Card body START -->
							<div class="card-body hstack gap-4 flex-wrap p-3">
								<!-- Meta item -->
								<div>
									<small>Topic</small>
									<h6 class="mb-0">176</h6>
								</div>

								<!-- Meta item -->
								<div>
									<small>Last Activity</small>
									<h6 class="mb-0">Today 12:54 PM</h6>
								</div>
							</div>
							<!-- Card body END -->
						</div>
					</div>

					<!-- Item -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card p-0">
							<!-- Card header -->
							<div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">
								<h5 class="card-title mb-0"><i class="fa-solid fa-circle fa-2xs text-light me-2"></i>Hosting</h5>
								<a class="icon-link icon-link-hover fw-normal" href="forum-category.php">View<i class="bi bi-arrow-right lh-1"></i> </a>
							</div>

							<!-- Card body START -->
							<div class="card-body hstack gap-4 flex-wrap p-3">
								<!-- Meta item -->
								<div>
									<small>Topic</small>
									<h6 class="mb-0">268</h6>
								</div>

								<!-- Meta item -->
								<div>
									<small>Last Activity</small>
									<h6 class="mb-0">Today 5:21 PM</h6>
								</div>
							</div>
							<!-- Card body END -->
						</div>
					</div>
				</div>
				<!-- Category END -->
			</div>
		</section>
		<!-- =======================category END -->

		<!-- =======================Page content START -->
		<section class="pt-0 pt-lg-5">
			<div class="container">
				<div class="row g-4">

					<!-- Main content START -->
					<div class="col-lg-8 col-xl-9">
						<div class="vstack gap-4">
							<!-- Title -->
							<div class="d-sm-flex justify-content-between align-items-center">
								<h2 class="mb-2 mb-sm-0">Recent Activity</h2>
								<a class="icon-link link-primary icon-link-hover fw-normal" href="#">View all activities<i class="bi bi-arrow-right lh-1"></i> </a>
							</div>

							<!-- Question START -->
							<div class="card">
								<div class="row">
									<div class="col-sm-3 col-md-2">
										<div class="d-flex justify-content-sm-center align-items-start h-100">
											<!-- Vote button -->
											<div class="border rounded text-center w-60px p-1 m-4 m-sm-3 mb-0 mx-sm-auto">
												<!-- Like button -->
												<input type="radio" class="btn-check" name="vote1" id="btnradioT1">
												<label class="btn btn-vote mb-0 p-0" for="btnradioT1">
													<i class="bi bi-caret-up-fill fs-5"></i>
												</label>

												<!-- Vote count -->
												<h6 class="mb-0 px-2 vote-count">251</h6>
											</div>

											<div class="vr d-none d-sm-block"></div> <!-- Divider -->
										</div>
									</div>

									<div class="col-sm-9 col-md-10">
										<!-- Content -->
										<div class="card-body ps-sm-0 p-4">
											<!-- Badge -->
											<div class="badge bg-success mb-3">Freelance & Jobs</div>

											<!-- Title -->
											<h5 class="card-title mb-2"><a href="answer-detail-v2.php">How can I enhance the security of my website to protect against cyber threats?</a></h5>

											<!-- Name and Date -->
											<ul class="nav nav-divider pb-3">
												<li class="nav-item fw-normal"> <a href="#" class="text-primary-hover mb-0">Larry Lawson</a> </li>
												<li class="nav-item fw-normal">Created: 7 Nov 2024</li>
												<li class="nav-item fw-normal">Last Reply: 45 min ago</li>
											</ul>

											<!-- Content -->
											<p class="mb-2"> Implementing HTTPS, keeping software and plugins updated, regularly monitoring logs, and using strong authentication methods are key measures to enhance website security.</p>

											<!-- Buttons -->
											<div class="hstack flex-wrap small gap-3 mt-4">
												<a href="#" class="text-primary-hover fw-light mb-0"><i class="fa-solid fa-eye me-1"></i>15 Views</a>
												<a href="#" class="text-primary-hover fw-light mb-0"><i class="fa-solid fa-thumbs-up me-1"></i>25 Likes</a>
												<a href="#" class="text-primary-hover fw-light mb-0"><i class="fa-solid fa-comment me-1"></i>7 Comments</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Question END -->

							<!-- Question START -->
							<div class="card">
								<div class="row">
									<div class="col-sm-3 col-md-2">
										<div class="d-flex justify-content-sm-center align-items-start h-100">
											<!-- Vote button -->
											<div class="border rounded text-center w-60px p-1 m-4 m-sm-3 mb-0 mx-sm-auto">
												<!-- Like button -->
												<input type="radio" class="btn-check" name="vote2" id="btnradioT2">
												<label class="btn btn-vote mb-0 p-0" for="btnradioT2">
													<i class="bi bi-caret-up-fill fs-5"></i>
												</label>

												<!-- Vote count -->
												<h6 class="mb-0 px-2 vote-count">145</h6>
											</div>

											<div class="vr d-none d-sm-block"></div> <!-- Divider -->
										</div>
									</div>

									<div class="col-sm-9 col-md-10">
										<!-- Content -->
										<div class="card-body ps-sm-0 p-4">
											<!-- Badge -->
											<div class="badge bg-danger mb-3">Custom code</div>

											<!-- Title -->
											<h5 class="card-title mb-2"><a href="answer-detail-v2.php">What are the advantages of using a content management system (CMS) for website development?</a></h5>

											<!-- Name and Date -->
											<ul class="nav nav-divider pb-3">
												<li class="nav-item fw-normal"> <a href="#" class="text-primary-hover mb-0">Creative Group</a> </li>
												<li class="nav-item fw-normal">Created: 8 Nov 2024</li>
												<li class="nav-item fw-normal">Last Reply: 32 min ago</li>
											</ul>

											<!-- Content -->
											<p class="mb-2">A CMS simplifies content creation, allows collaborative editing, provides a consistent design, and enables easy updates without extensive technical knowledge.</p>

											<!-- Buttons -->
											<div class="hstack flex-wrap small gap-3 mt-4">
												<a href="#" class="text-primary-hover fw-light mb-0"><i class="fa-solid fa-eye me-1"></i>10 Views</a>
												<a href="#" class="text-primary-hover fw-light mb-0"><i class="fa-solid fa-thumbs-up me-1"></i>12 Likes</a>
												<a href="#" class="text-primary-hover fw-light mb-0"><i class="fa-solid fa-comment me-1"></i>2 Comments</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Question END -->

							<!-- Question START -->
							<div class="card">
								<div class="row">
									<div class="col-sm-3 col-md-2">
										<div class="d-flex justify-content-sm-center align-items-start h-100">
											<!-- Vote button -->
											<div class="border rounded text-center w-60px p-1 m-4 m-sm-3 mb-0 mx-sm-auto">
												<!-- Like button -->
												<input type="radio" class="btn-check" name="vote3" id="btnradioT3">
												<label class="btn btn-vote mb-0 p-0" for="btnradioT3">
													<i class="bi bi-caret-up-fill fs-5"></i>
												</label>

												<!-- Vote count -->
												<h6 class="mb-0 px-2 vote-count">86</h6>
											</div>

											<div class="vr d-none d-sm-block"></div> <!-- Divider -->
										</div>
									</div>

									<div class="col-sm-9 col-md-10">
										<!-- Content -->
										<div class="card-body ps-sm-0 p-4">
											<!-- Badge -->
											<div class="badge bg-orange mb-3">Finance</div>

											<!-- Title -->
											<h5 class="card-title mb-2"><a href="answer-detail-v2.php">What are some effective ways to maintain a healthy work-life balance, especially in demanding professions?</a></h5>

											<!-- Name and Date -->
											<ul class="nav nav-divider pb-3">
												<li class="nav-item fw-normal"> <a href="#" class="text-primary-hover mb-0">Frances Guerrero</a> </li>
												<li class="nav-item fw-normal">Created: 12 Nov 2024</li>
												<li class="nav-item fw-normal">Last Reply: 1 hour ago</li>
											</ul>

											<!-- Content -->
											<p class="mb-2">Prioritize tasks, set boundaries, take regular breaks, practice self-care, and communicate expectations with colleagues and supervisors to achieve a healthy work-life balance.</p>

											<!-- Buttons -->
											<div class="hstack flex-wrap small gap-3 mt-4">
												<a href="#" class="text-primary-hover fw-light mb-0"><i class="fa-solid fa-eye me-1"></i>51 Views</a>
												<a href="#" class="text-primary-hover fw-light mb-0"><i class="fa-solid fa-thumbs-up me-1"></i>32 Likes</a>
												<a href="#" class="text-primary-hover fw-light mb-0"><i class="fa-solid fa-comment me-1"></i>5 Comments</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Question END -->

							<!-- Question START -->
							<div class="card">
								<div class="row">
									<div class="col-sm-3 col-md-2">
										<div class="d-flex justify-content-sm-center align-items-start h-100">
											<!-- Vote button -->
											<div class="border rounded text-center w-60px p-1 m-4 m-sm-3 mb-0 mx-sm-auto">
												<!-- Like button -->
												<input type="radio" class="btn-check" name="vote4" id="btnradioT4">
												<label class="btn btn-vote mb-0 p-0" for="btnradioT4">
													<i class="bi bi-caret-up-fill fs-5"></i>
												</label>

												<!-- Vote count -->
												<h6 class="mb-0 px-2 vote-count">21</h6>
											</div>

											<div class="vr d-none d-sm-block"></div> <!-- Divider -->
										</div>
									</div>

									<div class="col-sm-9 col-md-10">
										<!-- Content -->
										<div class="card-body ps-sm-0 p-4">
											<!-- Badge -->
											<div class="badge bg-dark mb-3">Business</div>

											<!-- Title -->
											<h5 class="card-title mb-2"><a href="answer-detail-v2.php">How can businesses leverage social media for marketing and brand awareness?</a></h5>

											<!-- Name and Date -->
											<ul class="nav nav-divider pb-3">
												<li class="nav-item fw-normal"> <a href="#" class="text-primary-hover mb-0">Frances Guerrero</a> </li>
												<li class="nav-item fw-normal">Created: 12 Nov 2024</li>
												<li class="nav-item fw-normal">Last Reply: 1 hour ago</li>
											</ul>

											<!-- Content -->
											<p class="mb-2"> Develop a social media strategy, identify target audiences, create engaging content, use analytics to measure performance, and actively engage with followers to build brand awareness.</p>

											<!-- Buttons -->
											<div class="hstack flex-wrap small gap-3 mt-4">
												<a href="#" class="text-primary-hover fw-light mb-0"><i class="fa-solid fa-eye me-1"></i>51 Views</a>
												<a href="#" class="text-primary-hover fw-light mb-0"><i class="fa-solid fa-thumbs-up me-1"></i>32 Likes</a>
												<a href="#" class="text-primary-hover fw-light mb-0"><i class="fa-solid fa-comment me-1"></i>5 Comments</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Question END -->

							<!-- Question START -->
							<div class="card">
								<div class="row">
									<div class="col-sm-3 col-md-2">
										<div class="d-flex justify-content-sm-center align-items-start h-100">
											<!-- Vote button -->
											<div class="border rounded text-center w-60px p-1 m-4 m-sm-3 mb-0 mx-sm-auto">
												<!-- Like button -->
												<input type="radio" class="btn-check" name="vote5" id="btnradioT5">
												<label class="btn btn-vote mb-0 p-0" for="btnradioT5">
													<i class="bi bi-caret-up-fill fs-5"></i>
												</label>

												<!-- Vote count -->
												<h6 class="mb-0 px-2 vote-count">42</h6>
											</div>

											<div class="vr d-none d-sm-block"></div> <!-- Divider -->
										</div>
									</div>

									<div class="col-sm-9 col-md-10">
										<!-- Content -->
										<div class="card-body ps-sm-0 p-4">
											<!-- Badge -->
											<div class="badge bg-info mb-3">Legal</div>

											<!-- Title -->
											<h5 class="card-title mb-2"><a href="answer-detail-v2.php">What programming languages are trending in the current tech landscape, and why?</a></h5>

											<!-- Name and Date -->
											<ul class="nav nav-divider pb-3">
												<li class="nav-item fw-normal"> <a href="#" class="text-primary-hover mb-0">Louis Ferguson</a> </li>
												<li class="nav-item fw-normal">Created: 3 Nov 2024</li>
												<li class="nav-item fw-normal">Last Reply: 5 hours ago</li>
											</ul>

											<!-- Content -->
											<p class="mb-2">Python, JavaScript, and TypeScript are trending due to their versatility, community support, and application in areas like web development, data science, and machine learning.</p>

											<!-- Buttons -->
											<div class="hstack flex-wrap small gap-3 mt-4">
												<a href="#" class="text-primary-hover fw-light mb-0"><i class="fa-solid fa-eye me-1"></i>5 Views</a>
												<a href="#" class="text-primary-hover fw-light mb-0"><i class="fa-solid fa-thumbs-up me-1"></i>2 Likes</a>
												<a href="#" class="text-primary-hover fw-light mb-0"><i class="fa-solid fa-comment me-1"></i>0 Comments</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Question END -->
						</div>
					</div>
					<!-- Main content END -->

					<!-- Right sidebar START -->
					<div class="col-lg-4 col-xl-3">
						<div class="row g-4">

							<!-- Button -->
							<div class="col-12">
								<a href="#" class="btn btn-primary w-100 mb-0" data-bs-toggle="modal" data-bs-target="#modalNewtopic">
									<i class="fa-solid fa-plus me-2"></i>Start a new topic
								</a>
							</div>

							<!-- Statistics START -->
							<div class="col-12">
								<div class="card p-0">
									<!-- Card header START -->
									<div class="card-header border-0 border-bottom p-3">
										<h4 class="card-title mb-0">Statistics</h4>
									</div>
									<!-- Card header END -->

									<!-- Card body START -->
									<div class="card-body py-0 px-3">
										<!-- Statistics -->
										<div class="row">
											<div class="col-6 border-end p-3 text-center">
												<h4 class="mb-0">58</h4>
												<span>Topics</span>
											</div>

											<div class="col-6 p-3 text-center">
												<h4 class="mb-0">1025</h4>
												<span>Posts</span>
											</div>

											<div class="col-6 p-3 border-top border-end text-center">
												<h4 class="mb-0">290</h4>
												<span>Members</span>
											</div>
											<div class="col-6 p-3 border-top text-center">
												<h4 class="mb-0">15M</h4>
												<span>Questions</span>
											</div>
										</div> <!-- Row END -->
									</div>
									<!-- Card body END -->
								</div>
							</div>
							<!-- Statistics END -->

							<!-- Trending Questions START -->
							<div class="col-md-6 col-lg-12">
								<div class="col-md-6 col-lg-12">
									<div class="card p-3">
										<!-- Card header START -->
										<div class="card-header border-0 p-2">
											<h4 class="card-title mb-0">Trending Questions</h4>
										</div>
										<!-- Card header END -->

										<!-- Card body START -->
										<div class="card-body p-2">
											<!-- Question item -->
											<div class="border-bottom pb-3 mb-3">
												<h6 class="mb-2 fw-normal"><a href="answer-detail-minimal.php">What is the importance of customer feedback in business?</a></h6>
												<p class="small mb-0"><i class="bi bi-chat-square-dots fa-fw me-1"></i>05 Answers</p>
											</div>

											<!-- Question item -->
											<div class="border-bottom pb-3 mb-3">
												<h6 class="mb-2 fw-normal"><a href="answer-detail-minimal.php">Explain the concept of object-oriented programming (OOP).</a></h6>
												<p class="small mb-0"><i class="bi bi-chat-square-dots fa-fw me-1"></i>08 Answers</p>
											</div>

											<!-- Question item -->
											<div class="">
												<h6 class="mb-2 fw-normal"><a href="answer-detail-minimal.php">How does digital marketing impact business growth?</a></h6>
												<p class="small mb-0"><i class="bi bi-chat-square-dots fa-fw me-1"></i>11 Answers</p>
											</div>
										</div>
										<!-- Card body END -->
									</div>
								</div>
							</div>
							<!-- Trending Questions END -->

							<!-- Advertisements START -->
							<div class="col-md-6 col-lg-12">
								<div class="alert-warning p-4 alert alert-dismissible fade show position-relative mb-0 overflow-hidden">
									<!-- Close button -->
									<div class="position-absolute end-0 top-0">
										<button type="button" class="btn btn-link p-3" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
									</div>

									<!-- Title -->
									<h5>Q&A Organize Team</h5>
									<p class="mb-2">Start collaborating and organizational Knowledge</p>
									<a href="#" class="btn btn-warning mb-0 w-100">Create a free team</a>
									<!-- Image -->
									<img src="{{ asset('assets/images/elements/20.svg') }}" class="mb-n8 text-center" alt="">
								</div>
							</div>

						</div>
					</div>
					<!-- Right sidebar END -->

				</div>
			</div>
		</section>
	<!-- Modal new topic START -->
	<div class="modal fade" id="modalNewtopic" tabindex="-1" aria-labelledby="modalLabelNewtopic" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Title -->
				<div class="modal-header">
					<h5 class="modal-title" id="modalLabelNewtopic">Create new topic</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<!-- Form START -->
					<form>
						<!-- Topic -->
						<div class="mb-3">
							<label class="form-label">Topic that you discuss</label>
							<input type="text" class="form-control" placeholder="Write a topic">
						</div>

						<!-- Tags -->
						<div class="mb-3 position-relative">
							<label class="form-label">Optional tags</label>
							<input type="text" class="form-control js-choice mb-0" data-placeholder="true" data-placeholder-Val="Enter tags" data-max-item-count="14" data-remove-item-button="true">
						</div>

						<!-- Category -->
						<div class="mb-3">
							<label class="form-label d-block">Category</label>
							<select class="form-select js-choice border-0 z-index-9 bg-transparent" data-placeholder-val="Select course level" aria-label=".form-select-sm" data-search-enabled="false" data-remove-item-button="true">
								<option>All level</option>
								<option>Beginner</option>
								<option>Intermediate</option>
								<option>Advance</option>
							</select>
						</div>

						<!-- Description -->
						<div class="mb-3">
							<label class="form-label">Description </label>
							<div class="bg-mode border border-bottom-0 rounded-top py-2" id="quilltoolbar">
								<span class="ql-formats">
									<button class="ql-bold"></button>
									<button class="ql-italic"></button>
									<button class="ql-underline"></button>
								</span>
								<span class="ql-formats">
									<button class="ql-list" value="ordered"></button>
									<button class="ql-list" value="bullet"></button>
									<button class="ql-code-block"></button>
									<button class="ql-link"></button>
								</span>
							</div>
							<!-- Editor input box -->
							<div class="quilleditor bg-mode border rounded-bottom h-150px overflow-hidden"> </div>
						</div>
					</form>
					<!-- Form END -->
				</div>
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-success-soft">Create now</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal new topic END -->
@endsection
