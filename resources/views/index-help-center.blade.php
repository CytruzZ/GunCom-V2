@extends('layouts.app')
@section('content')
		<!-- =======================Page banner START -->
		<section class="bg-mode pt-8">
			<div class="container">
				<div class="row g-4 justify-content-between align-items-center">
					<!-- Title and search -->
					<div class="col-lg-7 col-xxl-6">
						<!-- Title -->
						<h1 class="display-6">How can we help?</h1>
						<p class="mb-0 mt-4">We are glad to have you here looking for the answer. As our team hardly working on products, feel free to ask anything.</p>
						<!-- Search -->
						<form class="border rounded p-2 mt-4">
							<div class="input-group">
								<input class="form-control border-0 me-1" type="text" placeholder="Search question...">
								<button type="button" class="btn btn-dark mb-0 rounded">Search</button>
							</div>
						</form>

						<!-- Popular search -->
						<h6 class="mt-4 mb-3">Popular questions</h6>
						<div class="list-group list-group-horizontal gap-1 gap-sm-2 flex-wrap mb-0 border-0 ">
							<a class="btn btn-light btn-sm mb-1" href="help-detail.php"> How can we help?</a>
							<a class="btn btn-light btn-sm mb-1" href="help-detail.php"> How to upload data to the system? </a>
							<a class="btn btn-light btn-sm mb-1" href="help-detail.php"> Installation Guide? </a>
							<a class="btn btn-light btn-sm mb-1" href="help-detail.php"> What's are the difference between a social?</a>
							<a class="btn btn-primary-soft btn-sm" href="#!">View all questions</a>
						</div>
					</div>

					<!-- Quick links -->
					<div class="col-lg-5 text-center">
						<img src="{{ asset('assets/images/elements/help.svg') }}" alt="">
					</div>
				</div> <!-- Row END -->
			</div>
		</section>
		<!-- =======================Page banner END -->

		<!-- =======================Featured START -->
		<section>
			<div class="container">
				<div class="row g-4">

					<!-- Featured item START -->
					<div class="col-sm-6 col-xl-3">
						<div class="card p-0 h-100">
							<!-- Card header -->
							<div class="card-header border-0 p-3 pb-0">
								<div class="icon-lg bg-warning bg-opacity-15 rounded text-warning fs-4"><i class="bi bi-house-door"></i></div>
								<h5 class="card-title mb-0 mt-3">Advanced Usage </h5>
							</div>
							<!-- Card body -->
							<div class="card-body p-3">
								<ul class="nav flex-column">
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Admin & Billing</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Become a Pro</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Mobile application</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Guide</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Promotions & Deals</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Featured item END -->

					<!-- Featured item START -->
					<div class="col-sm-6 col-xl-3">
						<div class="card p-0 h-100">
							<!-- Card header -->
							<div class="card-header border-0 p-3 pb-0">
								<div class="icon-lg bg-primary bg-opacity-10 rounded text-primary fs-4"><i class="bi bi-emoji-smile"></i></div>
								<h5 class="card-title mb-0 mt-3">Get started</h5>
							</div>
							<!-- Card body -->
							<div class="card-body p-3">
								<ul class="nav flex-column">
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Connecting to your Account</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Edit your profile information</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Connecting to other Social Media Accounts</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Adding your profile picture</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Describing your store</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Featured item END -->

					<!-- Featured item START -->
					<div class="col-sm-6 col-xl-3">
						<div class="card p-0 h-100">
							<!-- Card header -->
							<div class="card-header border-0 p-3 pb-0">
								<div class="icon-lg bg-success bg-opacity-10 rounded text-success fs-4"><i class="bi bi-info-circle"></i></div>
								<h5 class="card-title mb-0 mt-3">Other Topics</h5>
							</div>
							<!-- Card body -->
							<div class="card-body p-3">
								<ul class="nav flex-column">
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Security & Privacy</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Author, Publisher & Admin Guides</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Pricing plans</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Sales Tax & Regulatory Fees</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Promotions & Deals</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Featured item END -->

					<!-- Featured item START -->
					<div class="col-sm-6 col-xl-3">
						<div class="card p-0 h-100">
							<!-- Card header -->
							<div class="card-header border-0 p-3 pb-0">
								<div class="icon-lg bg-orange bg-opacity-10 rounded text-orange fs-4"><i class="bi bi-layers"></i></div>
								<h5 class="card-title mb-0 mt-3">Account Setup</h5>
							</div>
							<!-- Card body -->
							<div class="card-body p-3">
								<ul class="nav flex-column">
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Gulp and Customization</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Color Scheme and Logo Settings</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Dark mode, RTL Version and Lazy Load</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Sources, Credits and Changelog</a></li>
									<li class="nav-item"><a class="nav-link d-flex ps-0" href="help-detail.php"><i class="bi bi-arrow-right me-2"></i>Updates and Support</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Featured item END -->
				</div>
			</div>
		</section>
		<!-- =======================Featured END -->

		<!-- =======================Popular article START  -->
		<section>
			<div class="container">
				<!-- Titles -->
				<div class="row">
					<div class="col-12 text-center">
						<h2 class="text-center mb-4">Popular Articles</h2>
					</div>
				</div>

				<div class="row g-4">

					<div class="col-xl-9 mx-auto">
						<div class="vstack gap-4">
							<!-- Card item START -->
							<div class="card card-body p-4">
								<!-- Content -->
								<div class="d-md-flex justify-content-between align-items-center">
									<div class="mb-3 mb-md-0">
										<!-- Title -->
										<h4 class="card-title mb-2 mb-sm-1"><a href="#">The installation part (10 articles)</a></h4>
										<!-- Avatar group and content -->
										<div class="d-flex align-items-start align-items-sm-center">
											<!-- Avatar group -->
											<ul class="avatar-group mb-0">
												<li class="avatar avatar-xxs">
													<img class="avatar-img rounded-circle border border-2 border-white" src="{{ asset('assets/images/avatar/08.jpg') }}" alt="avatar">
												</li>
												<li class="avatar avatar-xxs">
													<img class="avatar-img rounded-circle border border-2 border-white" src="{{ asset('assets/images/avatar/04.jpg') }}" alt="avatar">
												</li>
											</ul>
											<!-- Content -->
											<div class="ms-2">
												<small class="mb-0">Written by <b>Carolyn Ortiz</b> and <b>Billy Vasquez</b>.</small>
											</div>
										</div>
									</div>

									<!-- Button -->
									<div class="hstack gap-4 gap-sm-5 flex-wrap">
										<a href="#" class="text-primary-hover mb-0"><i class="fa-regular fa-eye me-2"></i>578</a>
										<a href="#" class="text-primary-hover mb-0"><i class="fa-regular fa-comments me-2"></i>25</a>
										<a href="#" class="text-primary-hover mb-0"><i class="fa-regular fa-thumbs-up me-2"></i>10</a>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="card card-body p-4">
								<!-- Content -->
								<div class="d-md-flex justify-content-between align-items-center">
									<div class="mb-3 mb-md-0">
										<!-- Title -->
										<h4 class="card-title mb-2 mb-sm-1"><a href="#">Supporting Customers With Inbox</a></h4>
										<!-- Avatar group and content -->
										<div class="d-flex align-items-start align-items-sm-center">
											<!-- Avatar group -->
											<ul class="avatar-group mb-0">
												<li class="avatar avatar-xxs">
													<img class="avatar-img rounded-circle border border-2 border-white" src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
												</li>
												<li class="avatar avatar-xxs">
													<img class="avatar-img rounded-circle border border-2 border-white" src="{{ asset('assets/images/avatar/02.jpg') }}" alt="avatar">
												</li>
												<li class="avatar avatar-xxs">
													<img class="avatar-img rounded-circle border border-2 border-white" src="{{ asset('assets/images/avatar/03.jpg') }}" alt="avatar">
												</li>
											</ul>
											<!-- Content -->
											<div class="ms-2">
												<small class="mb-0">Written by <b>Louis Ferguson</b> ,<b>Dennis Barrett</b> and <b>Larry Lawson</b></small>
											</div>
										</div>
									</div>

									<!-- Button -->
									<div class="hstack gap-4 gap-sm-5 flex-wrap">
										<a href="#" class="text-primary-hover mb-0"><i class="fa-regular fa-eye me-2"></i>254</a>
										<a href="#" class="text-primary-hover mb-0"><i class="fa-regular fa-comments me-2"></i>20</a>
										<a href="#" class="text-primary-hover mb-0"><i class="fa-regular fa-thumbs-up me-2"></i>18</a>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="card card-body p-4">
								<!-- Content -->
								<div class="d-md-flex justify-content-between align-items-center">
									<div class="mb-3 mb-md-0">
										<!-- Title -->
										<h4 class="card-title mb-2 mb-sm-1"><a href="#">Sending Effective Emails </a></h4>
										<!-- Avatar group and content -->
										<div class="d-flex align-items-start align-items-sm-center">
											<!-- Avatar group -->
											<ul class="avatar-group mb-0">
												<li class="avatar avatar-xxs">
													<img class="avatar-img rounded-circle border border-2 border-white" src="{{ asset('assets/images/avatar/06.jpg') }}" alt="avatar">
												</li>
											</ul>
											<!-- Content -->
											<div class="ms-2">
												<small class="mb-0">Written by <b>Jacqueline Miller</b></small>
											</div>
										</div>
									</div>

									<!-- Button -->
									<div class="hstack gap-4 gap-sm-5 flex-wrap">
										<a href="#" class="text-primary-hover mb-0"><i class="fa-regular fa-eye me-2"></i>789</a>
										<a href="#" class="text-primary-hover mb-0"><i class="fa-regular fa-comments me-2"></i>18</a>
										<a href="#" class="text-primary-hover mb-0"><i class="fa-regular fa-thumbs-up me-2"></i>56</a>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="card card-body p-4">
								<!-- Content -->
								<div class="d-md-flex justify-content-between align-items-center">
									<div class="mb-3 mb-md-0">
										<!-- Title -->
										<h4 class="card-title mb-2 mb-sm-1"><a href="#">Connect With Customers</a></h4>
										<!-- Avatar group and content -->
										<div class="d-flex align-items-start align-items-sm-center">
											<!-- Avatar group -->
											<ul class="avatar-group mb-0">
												<li class="avatar avatar-xxs">
													<img class="avatar-img rounded-circle border border-2 border-white" src="{{ asset('assets/images/avatar/07.jpg') }}" alt="avatar">
												</li>
												<li class="avatar avatar-xxs">
													<img class="avatar-img rounded-circle border border-2 border-white" src="{{ asset('assets/images/avatar/08.jpg') }}" alt="avatar">
												</li>
											</ul>
											<!-- Content -->
											<div class="ms-2">
												<small class="mb-0">Written by <b>Lori Stevens</b> and <b>Samuel Bishop</b></small>
											</div>
										</div>
									</div>

									<!-- Button -->
									<div class="hstack gap-4 gap-sm-5 flex-wrap">
										<a href="#" class="text-primary-hover mb-0"><i class="fa-regular fa-eye me-2"></i>758</a>
										<a href="#" class="text-primary-hover mb-0"><i class="fa-regular fa-comments me-2"></i>21</a>
										<a href="#" class="text-primary-hover mb-0"><i class="fa-regular fa-thumbs-up me-2"></i>125</a>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="card card-body p-4">
								<!-- Content -->
								<div class="d-md-flex justify-content-between align-items-center">
									<div class="mb-3 mb-md-0">
										<!-- Title -->
										<h4 class="card-title mb-2 mb-sm-1"><a href="#">Upgrade Gulp 3 to Gulp 4 the gulpfile.js workflow</a></h4>
										<!-- Avatar group and content -->
										<div class="d-flex align-items-start align-items-sm-center">
											<!-- Avatar group -->
											<ul class="avatar-group mb-0">
												<li class="avatar avatar-xxs">
													<img class="avatar-img rounded-circle border border-2 border-white" src="{{ asset('assets/images/avatar/09.jpg') }}" alt="avatar">
												</li>
												<li class="avatar avatar-xxs">
													<img class="avatar-img rounded-circle border border-2 border-white" src="{{ asset('assets/images/avatar/10.jpg') }}" alt="avatar">
												</li>
											</ul>
											<!-- Content -->
											<div class="ms-2">
												<small class="mb-0">Written by <b>Lori Stevens</b> and <b>Samuel Bishop</b></small>
											</div>
										</div>
									</div>

									<!-- Button -->
									<div class="hstack gap-4 gap-sm-5 flex-wrap">
										<a href="#" class="text-primary-hover mb-0"><i class="fa-regular fa-eye me-2"></i>685</a>
										<a href="#" class="text-primary-hover mb-0"><i class="fa-regular fa-comments me-2"></i>12</a>
										<a href="#" class="text-primary-hover mb-0"><i class="fa-regular fa-thumbs-up me-2"></i>245</a>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<div class="text-center">
								<a href="#" class="btn btn-primary-soft mb-0"><i class="fa-solid fa-spinner me-2"></i>View all article</a>
							</div>

						</div>
					</div>

				</div> <!-- Row END -->
			</div>
		</section>
		<!-- =======================Popular article END  -->

		<!-- =======================Faq START -->
		<section class="pt-0 pt-md-5">
			<div class="container">
				<div class="row g-4">

					<div class="col-lg-6 col-xl-5">
						<!-- Title and button -->
						<h2 class="fs-1">Frequently Asked Questions</h2>
						<p>We are answering the most frequent questions. No worries if you do not find the exact one. You can find out more by searching or continuing by clicking the button below or directly <a href="#" class="text-decoration-underline">Contact our supports</a></p>
						<a href="#" class="btn btn-primary mb-0">Read all FAQ</a>
					</div>

					<div class="col-lg-6 ms-xl-auto">
						<!-- Accordion START -->
						<div class="accordion accordion-flush-white" id="accordionFaq">
							<!-- Accordion item -->
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button fw-normal" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										What is this theme layout for?
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFaq">
									<div class="accordion-body">
										Yet remarkably appearance gets him his projection. Diverted endeavor bed peculiar men the not desirous. Acuteness abilities ask can offending furnished fulfilled sex. Warrant fifteen exposed ye at mistake. Blush since so in noisy still built up an again. As young ye hopes no he place means. Partiality diminution gay yet entreaties admiration. In mention perhaps attempt pointed suppose. Unknown ye chamber of warrant of Norland arrived
									</div>
								</div>
							</div>

							<!-- Accordion item -->
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button fw-normal collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										How can we help?
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFaq">
									<div class="accordion-body">
										What deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he prospect elegance followed no overcame possible it on. Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage Mr be.
									</div>
								</div>
							</div>

							<!-- Accordion item -->
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingThree">
									<button class="accordion-button fw-normal collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										How to edit my Profile?
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFaq">
									<div class="accordion-body">
										First am plate jokes to began to cause a scale. Subjects he prospect elegance followed no overcame possible it on. Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage Mr be.
									</div>
								</div>
							</div>

							<!-- Accordion item -->
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingFour">
									<button class="accordion-button fw-normal collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										How much should I offer the sellers?
									</button>
								</h2>
								<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFaq">
									<div class="accordion-body">
										Post no so what deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he prospect elegance followed no overcame possible it on. Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage Mr be. Hold do at tore in park feet near my case. Invitation at understood occasional sentiments insipidity inhabiting in. Off melancholy alteration principles old. Is do speedily kindness properly oh. Respect article painted cottage he is offices parlors.
									</div>
								</div>
							</div>

							<!-- Accordion item -->
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingFive">
									<button class="accordion-button fw-normal collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										Additional Options and Services
									</button>
								</h2>
								<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFaq">
									<div class="accordion-body">
										But her ready least set lived spite solid. September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he prospect elegance followed no overcame possible it on. Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage Mr be. Hold do at tore in park feet near my case. Invitation at understood occasional sentiments insipidity inhabiting in. Off melancholy alteration principles old. Is do speedily kindness properly oh. Respect article painted cottage he is offices parlors.
									</div>
								</div>
							</div>
						</div>
						<!-- Accordion END -->
					</div>

				</div>
			</div>
		</section>
		<!-- =======================Faq END -->

		<!-- =======================Action box START -->
		<section class="pt-0">
			<div class="container">
				<div class="row g-4">

					<!-- Support item -->
					<div class="col-lg-6">
						<div class="bg-mode p-0 rounded position-relative overflow-hidden h-100">
							<div class="row">
								<!-- Content -->
								<div class="col-10 col-sm-8">
									<div class="card card-body bg-transparent z-index-9 p-4 p-sm-5">
										<!-- Title -->
										<h3>Contact Support?</h3>
										<p>Not finding the help you need?</p>
										<!-- Button -->
										<div><a href="#" class="btn btn-dark mb-0">Contact Us</a></div>
									</div>
								</div>
								<!-- Svg image -->
								<div class="col-sm-4">
									<img class="h-100px h-sm-200px position-absolute bottom-0 end-0" src="{{ asset('assets/images/elements/help-contact.svg') }}" alt="">
								</div>
							</div>
						</div>
					</div>

					<!-- Support item -->
					<div class="col-lg-6">
						<div class="bg-mode p-0 rounded position-relative overflow-hidden h-100">
							<div class="row">
								<!-- Content -->
								<div class="col-10 col-sm-8">
									<div class="card card-body bg-transparent z-index-9 p-4 p-sm-5">
										<!-- Title -->
										<h3>Submit a Ticket</h3>
										<p>Prosperous impression had conviction For every delay</p>
										<!-- Button -->
										<div><a href="#" class="btn btn-dark mb-0">Submit ticket</a></div>
									</div>
								</div>
								<!-- Svg image -->
								<div class="col-sm-4">
									<img class="h-100px h-sm-200px position-absolute bottom-0 end-0" src="{{ asset('assets/images/elements/help-ticket.svg') }}" alt="">
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- =======================Action box END -->
@endsection
