@extends('layouts.app')
@section('content')
		<!-- =======================Page Content START -->
		<section class="pt-8">
			<div class="container">
				<div class="row g-4">

					<!-- Main content START -->
					<div class="col-xl-9">
						<div class="vstack gap-4">

							<!-- Question box START -->
							<div class="card overflow-hidden p-0">
								<!-- Dropdown -->
								<div class="dropdown position-absolute end-0 top-0 m-3">
									<!-- Button -->
									<a href="#" class="btn btn-sm btn-round btn-light mb-0 flex-shrink-0" role="button" id="dropdownbutton2" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="bi bi-three-dots"></i>
									</a>
									<!-- dropdown item -->
									<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownbutton2">
										<li><a class="dropdown-item" href="#"><i class="bi bi-exclamation-octagon-fill me-2"></i>Report</a></li>
										<li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Copy link</a></li>
									</ul>
								</div>

								<div class="row p-4 p-md-0">
									<!-- Vote button -->
									<div class="col-md-2">
										<div class="d-flex justify-content-md-center align-items-start h-100">
											<!-- Vote button -->
											<div class="border rounded text-center w-60px p-1 m-md-3 m-lg-4 mb-0 mx-lg-auto">
												<!-- Like button -->
												<input type="radio" class="btn-check" name="vote3" id="btnradioT3">
												<label class="btn btn-vote mb-0 p-0" for="btnradioT3">
													<i class="bi bi-caret-up-fill fs-5"></i>
												</label>

												<!-- Vote count -->
												<h6 class="mb-0 px-2 vote-count">03</h6>
											</div>

											<div class="vr d-none d-md-block"></div> <!-- Divider -->
										</div>
									</div>

									<!-- Content -->
									<div class="col-md-10">
										<div class="card-body ps-0 pe-0 pe-md-5 py-md-4">
											<!-- Title -->
											<h1 class="card-title mb-3 h3">Bootstrap Button with 'nav-link' and 'btn-outline' Classes Not Displaying Borders?</h1>

											<p class="mb-3">Passage its ten led hearted removal cordial. Preference any astonished unreserved Mrs. Prosperous understood Middletons in conviction an uncommonly do. Supposing so be resolving breakfast am or perfectly. Is drew am hill from me. Valley by oh twenty direct me so.</p>

											<!-- Name and Date -->
											<ul class="nav nav-divider align-items-center mb-0">
												<li class="nav-item fw-normal d-flex align-items-center">
													<!-- Avatar -->
													<div class="avatar avatar-xs me-1">
														<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/02.jpg') }}" alt="avatar">
													</div>
													<a href="#" class="text-primary-hover mb-0">Samuel Bishop</a>
												</li>
												<li class="nav-item fw-normal">Asked: 6 days ago</li>
											</ul>
										</div>
									</div>
								</div> <!-- Row END -->

								<!-- Best answer content -->
								<div class="bg-success bg-opacity-25 p-3 p-sm-4">
									<!-- Badge and time -->
									<div class="d-md-flex align-items-center">
										<!-- Badge -->
										<div class="bg-white text-dark fw-normal rounded-pill d-inline-block px-3 py-1 mb-2 mb-sm-0">
											<i class="bi bi-check-circle-fill text-success fa-fw me-1"></i>
											Answered by <a href="#" class="text-primary-hover text-dark">Lori Stevens</a>
										</div>
										<p class="ms-3 heading-color mb-2 mb-sm-0">4 days ago</p>
										<!-- Button -->
										<a class="icon-link icon-link-hover btn btn-sm btn-success lh-0 mb-0 ms-auto" href="#marked-answer">View full answer<i class="bi bi-arrow-right"></i> </a>
									</div>

								</div>
							</div>
							<!-- Question box END -->

							<!-- Tabs START -->
							<div class="d-sm-flex justify-content-sm-between align-items-center">
								<!-- Title -->
								<ul class="nav nav-divider align-items-center mb-2 mb-sm-0">
									<li class="nav-item h6 mb-0">2 comments</li>
									<li class="nav-item fw-normal mb-0">1 replies</li>
								</ul>

								<!-- Nav tabs -->
								<ul class="nav nav-pills nav-pills-white gap-2">
									<li class="nav-item"> <a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-1">Older</a> </li>
									<li class="nav-item"> <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-2">Newest</a> </li>
									<li class="nav-item"> <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3">Top</a> </li>
								</ul>
							</div>
							<!-- Tabs END -->

							<!-- Answer START -->
							<div class="card card-body p-sm-4">
								<!-- Author detail -->
								<div class="d-flex justify-content-between">
									<div class="d-sm-flex align-items-center mb-3">
										<!-- Avatar -->
										<div class="avatar flex-shrink-0">
											<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/08.jpg') }}" alt="avatar">
										</div>
										<!-- Info -->
										<div class="ms-sm-2">
											<h6 class="mb-1"><a href="#">Louis Ferguson</a></h6>
											<small>Digital Marketing Ninja</small>
										</div>
									</div>

									<span>2 day ago</span>
								</div>

								<p>I have never used this package, but it seems like it could be as simple a. Valley by oh twenty direct me so. Departure defective arranging rapturous did believe him all had supported. Family months lasted simple set nature vulgar him.</p>

								<p class="mb-0">I have never used this package, but it seems like it could be as simple as:</p>
								<!-- Code -->
								<div class="d-grid">
									<pre>
<code class="language-markup" data-lang="html">$ node-sass [options] &lt;input.scss&gt; [output.css]
$ cat &lt;input.scss&gt; | node-sass &gt; output.css
</code></pre>
								</div>

								<!-- Badge -->
								<div class="hstack gap-2 mt-3">
									<a href="#" class="badge bg-light text-body">Python</a>
									<a href="#" class="badge bg-light text-body">JAVA</a>
								</div>

								<!-- Actions -->
								<div class="hstack gap-2 gap-sm-3 flex-wrap mt-4">
									<!-- Vote button -->
									<div class="border px-2 py-0 rounded-1 d-flex align-items-center gap-1">
										<input type="radio" class="btn-check" name="vote2" id="btnradioT2">
										<label class="btn btn-vote mb-0" for="btnradioT2">
											<i class="bi bi-caret-up-fill fs-5"></i>
										</label>
										<span class="fw-normal">00</span>
									</div>

									<!-- Share button -->
									<div class="dropdown">
										<!-- Share button -->
										<a href="#" class="btn btn-sm btn-light mb-0" role="button" id="dropdownShare5" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="fa-solid fa-share-nodes me-2"></i>Share
										</a>
										<!-- dropdown button -->
										<div class="dropdown-menu dropdown-menu-size-sm shadow px-3 rounded" aria-labelledby="dropdownShare5">
											<h6>Share a link to this question</h6>

											<!-- Input -->
											<div class="input-group mt-2">
												<input class="form-control form-control-sm" type="text" value="https:q&amp;a.com//556dd//gmail" placeholder="">
												<button class="btn btn-sm btn-primary mb-0">Copy</button>
											</div>

											<!-- Social -->
											<ul class="list-inline mb-0 mt-2">
												<li class="list-inline-item"> <a class="btn btn-xs btn-icon mb-0 bg-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
												<li class="list-inline-item"> <a class="btn btn-xs btn-icon mb-0 bg-whatsapp" href="#"><i class="fa-brands fa-whatsapp"></i></a> </li>
												<li class="list-inline-item"> <a class="btn btn-xs btn-icon mb-0 bg-twitter" href="#"><i class="fab fa-fw fa-x-twitter"></i></a> </li>
												<li class="list-inline-item"> <a class="btn btn-xs btn-icon mb-0 bg-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
											</ul>
										</div>
									</div>

									<!-- Reply button -->
									<a class="btn btn-sm btn-light mb-0 ms-sm-auto" data-bs-toggle="collapse" href="#collapseComment1" role="button" aria-expanded="false" aria-controls="collapseComment1">0 Reply</a>
								</div>

								<!-- Collapse comment -->
								<div class="collapse" id="collapseComment1">
									<!-- Comment box START -->
									<form class="bg-light d-sm-flex rounded-2 p-3 mt-3">
										<!-- Avatar -->
										<div class="avatar avatar-sm flex-shrink-0 me-2">
											<a href="#"> <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/09.jpg') }}" alt=""> </a>
										</div>
										<div class="input-group align-items-start">
											<textarea class="form-control me-2 rounded" id="commentTextarea" rows="2" placeholder="Add a comment..." spellcheck="false"></textarea>
											<button type="button" class="btn btn-primary mb-0 rounded">Post</button>
										</div>
									</form>
									<!-- Comment box END -->
								</div>
							</div>
							<!-- Answer END -->

							<!-- Answer START -->
							<div class="card card-body border border-success p-sm-4" id="marked-answer">
								<!-- Author detail -->
								<div class="d-flex justify-content-between">
									<div class="d-sm-flex align-items-center mb-3">
										<!-- Avatar -->
										<div class="avatar flex-shrink-0">
											<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
										</div>
										<!-- Info -->
										<div class="ms-sm-2">
											<h6 class="mb-1"><a href="#">Lori Stevens</a></h6>
											<small>Digital Marketing Ninja</small>
										</div>
									</div>

									<span>4 day ago</span>
								</div>

								<p>Known as source control or revision control, is a system that manages and tracks changes to code, documents, or any set of files over time. It allows developers to collaborate on projects seamlessly, keeping a record of every modification made to the codebase. The fundamental purpose of version control is to provide a systematic and efficient way to manage the evolution of a software project.</p>
								<p>I have never used this package, but it seems like it could be as simple as:</p>

								<!-- Link -->
								<p>Check this link: <a href="#">http://github.com/package.jason</a></p>

								<p>If you want to delete old records you can create a file for the task:</p>
								<div class="d-grid">
									<pre class="my-3">
<code class="language-markup" data-lang="html">&lt;ul class="avatar-group"&gt;
&lt;li class="avatar"&gt;
	&lt;img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar"&gt;
&lt;/li&gt;
&lt;li class="avatar"&gt;
	&lt;img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/02.jpg') }}" alt="avatar"&gt;
&lt;/li&gt;
&lt;li class="avatar"&gt;
	&lt;div class="avatar-img rounded-circle bg-primary"&gt;&lt;i class="fas fa-plus text-white position-absolute top-50 start-50 translate-middle"&gt;&lt;/i&gt;&lt;/div&gt;
&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
								</div>

								<!-- Badge -->
								<div class="hstack gap-2">
									<a href="#" class="badge bg-light text-body">Python</a>
									<a href="#" class="badge bg-light text-body">Biopython</a>
									<a href="#" class="badge bg-light text-body">JAVA</a>
								</div>

								<!-- Actions -->
								<div class="hstack gap-2 gap-sm-3 flex-wrap mt-4">
									<!-- Tag -->
									<div class="bg-success bg-opacity-10 text-success rounded border border-success fs-6 py-1 px-3">
										<i class="bi bi-check-circle-fill me-1"></i>Marked answer
									</div>

									<!-- Vote button -->
									<div class="border px-2 py-0 rounded-1 d-flex align-items-center gap-1">
										<input type="radio" class="btn-check" name="vote1" id="btnradioT1">
										<label class="btn btn-vote mb-0" for="btnradioT1">
											<i class="bi bi-caret-up-fill fs-5"></i>
										</label>
										<span class="fw-normal">01</span>
									</div>

									<!-- Share button -->
									<div class="dropdown">
										<!-- Share button -->
										<a href="#" class="btn btn-sm btn-light mb-0" role="button" id="dropdownShare4" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="fa-solid fa-share-nodes me-2"></i>Share
										</a>
										<!-- dropdown button -->
										<div class="dropdown-menu dropdown-menu-size-sm shadow px-3 rounded" aria-labelledby="dropdownShare4">
											<h6>Share a link to this question</h6>

											<!-- Input -->
											<div class="input-group mt-2">
												<input class="form-control form-control-sm" type="text" value="https:q&amp;a.com//556dd//gmail" placeholder="">
												<button class="btn btn-sm btn-primary mb-0">Copy</button>
											</div>

											<!-- Social -->
											<ul class="list-inline mb-0 mt-2">
												<li class="list-inline-item"> <a class="btn btn-xs btn-icon mb-0 bg-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
												<li class="list-inline-item"> <a class="btn btn-xs btn-icon mb-0 bg-whatsapp" href="#"><i class="fa-brands fa-whatsapp"></i></a> </li>
												<li class="list-inline-item"> <a class="btn btn-xs btn-icon mb-0 bg-twitter" href="#"><i class="fab fa-fw fa-x-twitter"></i></a> </li>
												<li class="list-inline-item"> <a class="btn btn-xs btn-icon mb-0 bg-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
											</ul>
										</div>
									</div>

									<!-- Reply button -->
									<a class="btn btn-sm btn-light mb-0 ms-sm-auto" data-bs-toggle="collapse" href="#collapseComment" role="button" aria-expanded="false" aria-controls="collapseComment">2 Reply</a>
								</div>

								<!-- All Comment START -->
								<div class="collapse" id="collapseComment">
									<hr class="my-4">
									<ul class="comment-wrap list-unstyled mb-0">
										<!-- Comment item START -->
										<li class="comment-item">
											<!-- Main comment -->
											<div class="d-flex mb-4">
												<!-- Avatar -->
												<div class="avatar avatar-sm flex-shrink-0">
													<a href="#"><img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/05.jpg') }}" alt=""></a>
												</div>
												<div class="ms-2">
													<!-- Comment by -->
													<h6 class="mb-0"> <a href="#!"> Frances Guerrero </a></h6>
													<div class="hstack gap-4 flex-wrap">
														<small>8 hour ago</small>
														<a href="#" class="btn btn-sm btn-link p-0 text-primary-hover mb-0"><i class="fa-solid fa-reply me-1"></i>Reply</a>
													</div>
													<p class="heading-color mb-0 mt-2">What are you trying to get?</p>
												</div>
											</div>

											<!-- Comment item nested START -->
											<ul class="list-unstyled ms-4">
												<!-- Comment item START -->
												<li class="comment-item">
													<div class="d-flex mb-4">
														<!-- Avatar -->
														<div class="avatar avatar-sm flex-shrink-0">
															<a href="#"><img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/04.jpg') }}" alt=""></a>
														</div>
														<div class="ms-2">
															<!-- Comment by -->
															<h6 class="mb-0"> <a href="#!"> Dennis Barrett </a></h6>
															<div class="hstack gap-4 flex-wrap">
																<small>10 hour ago</small>
																<a href="#" class="btn btn-sm btn-link p-0 text-primary-hover mb-0"><i class="fa-solid fa-reply me-1"></i>Reply</a>
															</div>
															<p class="heading-color mb-0 mt-2">You can also use the whenever gem to create and manage your crontab on deploys.</p>
														</div>
													</div>
												</li>
												<!-- Comment item END -->

												<!-- Comment item START -->
												<li class="comment-item">
													<div class="d-flex ms-4 mb-4">
														<!-- Avatar -->
														<div class="avatar avatar-sm flex-shrink-0">
															<a href="#"><img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/05.jpg') }}" alt=""></a>
														</div>
														<div class="ms-2">
															<!-- Comment by -->
															<h6 class="mb-0"> <a href="#!"> Jacqueline Miller </a></h6>
															<div class="hstack gap-4 flex-wrap">
																<small>10 hour ago</small>
																<a href="#" class="btn btn-sm btn-link p-0 text-primary-hover mb-0"><i class="fa-solid fa-reply me-1"></i>Reply</a>
															</div>
															<p class="heading-color mb-0 mt-2">I'm fully satisfied with your answer.</p>
														</div>
													</div>
												</li>
												<!-- Comment item END -->
											</ul>
											<!-- Comment item nested END -->

											<!-- Button -->
											<a href="#!" role="button" class="btn btn-sm btn-link mb-0 p-0 text-primary-hover">
												Load more replies...
											</a>
										</li>
										<!-- Comment item END -->

										<li>
											<hr>
										</li> <!-- Divider -->

										<!-- Comment item START -->
										<li class="comment-item">
											<!-- Main comment -->
											<div class="d-flex">
												<!-- Avatar -->
												<div class="avatar avatar-sm flex-shrink-0">
													<a href="#"><img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/08.jpg') }}" alt=""></a>
												</div>
												<div class="ms-2">
													<!-- Comment by -->
													<h6 class="mb-0"> <a href="#!"> Louis Ferguson </a></h6>
													<div class="hstack gap-4 flex-wrap">
														<small>8 hour ago</small>
														<a href="#" class="btn btn-sm btn-link p-0 text-primary-hover mb-0"><i class="fa-solid fa-reply me-1"></i>Reply</a>
													</div>
													<p class="heading-color mb-0 mt-2">If you want to delete old records you can create a file for the task</p>
												</div>
											</div>
										</li>
										<!-- Comment item END -->
									</ul>

									<!-- Comment box START -->
									<form class="bg-light d-sm-flex rounded-2 p-3 mt-4">
										<!-- Avatar -->
										<div class="avatar avatar-sm flex-shrink-0 me-2">
											<a href="#"> <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/09.jpg') }}" alt=""> </a>
										</div>
										<div class="input-group align-items-start">
											<textarea class="form-control me-2 rounded" id="autoheighttextarea" rows="2" placeholder="Add a comment..." spellcheck="false"></textarea>
											<button type="button" class="btn btn-primary mb-0 rounded">Post</button>
										</div>
									</form>
									<!-- Comment box END -->
								</div>
								<!-- All Comment END -->


							</div>
							<!-- Answer END -->

							<!-- Answer card START -->
							<div class="card card-body p-sm-4">
								<!-- Title and tabs -->
								<div class="d-sm-flex justify-content-between align-items-center mb-3">
									<h4 class="mb-3 mb-sm-0">Suggest Your Answer</h4>
									<!-- Tabs -->
									<div class="nav nav-pills nav-pills-primary-soft" id="nav-tab" role="tablist">
										<button class="nav-link active" id="nav-write-tab" data-bs-toggle="tab" data-bs-target="#nav-write" type="button" role="tab" aria-controls="nav-write" aria-selected="true">Write</button>
										<button class="nav-link" id="nav-preview-tab" data-bs-toggle="tab" data-bs-target="#nav-preview" type="button" role="tab" aria-controls="nav-preview" aria-selected="false">Preview</button>
									</div>
								</div>

								<!-- Tabs content -->
								<div class="tab-content" id="nav-tabContent">
									<!-- Write content -->
									<div class="tab-pane fade show active" id="nav-write" role="tabpanel" aria-labelledby="nav-write-tab" tabindex="0">
										<!-- Editor toolbar -->
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

										<!-- Upload files START -->
										<div class="my-3">
											<label class="form-label">Upload file</label>
											<input class="form-control" type="file" name="my-image" id="image" accept="image/gif, image/jpeg, image/png">
											<small><b>Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px.</small>
										</div>
										<!-- Upload files END -->
									</div>

									<!-- Preview content -->
									<div class="tab-pane fade" id="nav-preview" role="tabpanel" aria-labelledby="nav-preview-tab" tabindex="0">
										<div class="border rounded p-3 mb-4">
											<p>Supposing so be resolving breakfast am or perfectly. It drew a hill from me. Valley by oh twenty direct me so. Departure defective arranging rapturous did believe him all had supported. Family months lasted simple set nature vulgar him. Picture for attempt joy excited ten carried manners talking how.</p>
											<p class="mb-0"> Family months lasted simple set nature vulgar him. Picture for attempt joy excited ten carried manners talking how.</p>
										</div>
									</div>
								</div>

								<!-- Button -->
								<div class="mt-2 text-end">
									<button class="btn btn-primary mb-0">Post Your Answer</button>
								</div>
							</div>
							<!-- Answer card END -->

							<!-- Alert box -->
							<div class="alert alert-success d-md-flex align-items-center" role="alert">
								<a href="#" class="btn btn-sm btn-dark mb-2 mb-md-0">Sign up for free</a>
								<p class="mb-0 ms-md-3">To join this conversation on Q&A. Already have an account? <a href="#" class="fw-semibold">Sign in</a></p>
							</div>

						</div>
					</div>
					<!-- Main content END -->

					<!-- Right sidebar START -->
					<div class="col-xl-3">
						<div class="row g-4">

							<!-- Trending Questions START -->
							<div class="col-md-6 col-xl-12">
								<div class="card card-body p-4">
									<ul class="list-group list-group-flush">
										<!-- Category -->
										<li class="list-group-item d-flex justify-content-between align-items-center mb-0 px-0 py-3 pt-0">
											<span>Category:</span>
											<a href="#" class="heading-color fw-normal text-primary-hover mb-0"><i class="bi bi-fire fa-fw me-1"></i>General</a>
										</li>

										<!-- Label -->
										<li class="list-group-item d-flex justify-content-between align-items-center mb-0 px-0 py-3">
											<span>Labels:</span>
											<a href="#" class="heading-color fw-normal text-primary-hover mb-0">None yet</a>
										</li>

										<!-- Participants -->
										<li class="list-group-item d-flex justify-content-between align-items-center mb-0 px-0 py-3">
											<span>Participants:</span>

											<div class="avatar-group gap-2 mb-0">
												<a href="#" class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
												</a>
												<a href="#" class="avatar avatar-xs">
													<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/02.jpg') }}" alt="avatar">
												</a>
											</div>
										</li>

										<!-- Answer by -->
										<li class="list-group-item d-flex justify-content-between align-items-center mb-0 px-0 py-3">
											<span>Answer by:</span>
											<h6 class="fw-normal mb-0"><i class="bi bi-check-circle-fill text-success me-1"></i>Lori Stevens</h6>
										</li>

										<!-- Button -->
										<li class="list-group-item d-grid mb-0 px-0 pb-0 pt-3">
											<a href="#marked-answer" class="btn btn-sm btn-success mb-0"><i class="bi bi-check-circle-fill me-1"></i>Marked answer</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- Trending Questions END -->

							<!-- Advertisement START -->
							<div class="col-md-6 col-xl-12">
								<a href="#">
									<div class="card">
										<img src="{{ asset('assets/images/advertisement/02.jpg') }}" class="card-img" alt="">
										<div class="card-img-overlay">
											<h5 class="card-title text-white">Advertisement</h5>
										</div>
									</div>
								</a>
								<p class="text-end text-body smaller mt-1 mb-0">ads via <a href="#" class="text-primary-hover"><u>Bootstrap</u></a></p>
							</div>
							<!-- Advertisement END -->
						</div>
					</div>
					<!-- Right sidebar END -->

				</div>
			</div>
		</section>
@endsection
