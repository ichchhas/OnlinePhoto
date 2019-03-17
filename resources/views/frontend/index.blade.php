@extends('frontend.inc.layout')
@section('content')
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 120}">
				<div class="header-body">
					<div class="header-top">
						<div class="header-top-container container">
							<div class="header-row">
								<div class="header-column justify-content-start">
									<span class="d-none d-sm-flex align-items-center">
										<i class="fas fa-map-marker-alt mr-1"></i>
										Kathmandu,Nepal
									</span>
									<span class="d-none d-sm-flex align-items-center ml-4">
										<i class="fas fa-phone mr-1"></i>
										<a href="tel:+1234567890">123-456-7890</a>
									</span>
								</div>
								<div class="header-column justify-content-end">
									<ul class="nav">
										<li class="nav-item">
											<a class="nav-link" href="contact.html">Contact Us</a>
										</li>
										<!-- <li class="nav-item">
											<a href="#" class="nav-link dropdown-menu-toggle py-2" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												English	<i class="fas fa-angle-down fa-sm"></i>
											</a>
											<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
												<li><a href="#" class="no-skin"><img src="img/blank.gif" class="flag flag-us" alt="English" /> English</a></li>
												<li><a href="#" class="no-skin"><img src="img/blank.gif" class="flag flag-es" alt="Español" /> Español</a></li>
												<li><a href="#" class="no-skin"><img src="img/blank.gif" class="flag flag-fr" alt="Française" /> Française</a></li>
											</ul>
										</li> -->
									</ul>
									<ul class="header-top-social-icons social-icons social-icons-transparent d-none d-md-block">
										<li class="social-icons-facebook">
											<a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
										</li>
										<li class="social-icons-twitter">
											<a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
										</li>
										<li class="social-icons-instagram">
											<a href="http://www.instagram.com/" target="_blank" title="Instragram"><i class="fab fa-instagram"></i></a>
										</li>
									</ul>

								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column justify-content-start">
								<div class="header-logo">
									<a href="index.html">
										<img alt="EZ" width="127"  src="assets/img/Contestlogo.png">
									</a>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-nav">
									<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
										<nav class="collapse">
												<ul class="nav flex-column flex-lg-row" id="mainNav">
														<li class="dropdown dropdown-mega active">
															<a class="dropdown-item dropdown-toggle active" href="index.html">
																Gallery
															</a>
															
														</li>
														<li class="dropdown dropdown-mega dropdown-mega-style-2 ">
															<a class="dropdown-item dropdown-toggle " href="Contest.html">
																Contest
															</a>
															
														</li>
														<li class="dropdown dropdown-mega">
															<a class="dropdown-item dropdown-toggle" href="exhibition.html">
																Exhibition
															</a>
															
														</li>
														<li class="dropdown dropdown-mega dropdown-mega-style-2 ">
															<a class="dropdown-item dropdown-toggle " href="winners.html">
																Winners
															</a>
															
														</li>
													
														
													</ul>
										</nav>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Image Gallery</h1>
								<p class="lead">You can vote for pictures you like.</p>
							</div>
						</div>
					</div>
				</section>

				<div class="container mb-5 pb-3">

					<div class="row">
						
						<div class="col">
							<h4> Online Photography Contest</h4>
							<hr class="mb-5">

						</div>

					</div>

					<div class="row align-items-center mb-4">
						<div class="col-12 col-md-8 col-lg-9">
							<ul id="portfolioLoadMoreFilter" class="nav sort-source justify-content-center justify-content-md-start mb-4 mb-md-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
								<li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">SHOW ALL</a></li>

								<li class="nav-item" data-option-value=".brands"><a class="nav-link text-uppercase" href="#">Potrait</a></li>

								<li class="nav-item" data-option-value=".design"><a class="nav-link text-uppercase" href="#">Landscape</a></li>

								<li class="nav-item" data-option-value=".web"><a class="nav-link text-uppercase" href="#">Culture & Tradition</a></li>

								<li class="nav-item" data-option-value=".ads"><a class="nav-link text-uppercase" href="#">Photos</a></li>
							</ul>
						</div>
						<div class="col-12 col-md-4 col-lg-3 d-flex justify-content-center justify-content-md-end">
							
						</div>
					</div>
					<div class="row">
						<div class="col-12 pl-3">
							<div class="sort-destination-loader sort-destination-loader-showing">
								<ul id="portfolioLoadMoreWrapper" class="portfolio-list sort-destination" data-sort-id="portfolio" data-total-pages="3">
									<li class="col-12 col-md-6 col-lg-4 p-0 isotope-item brands">
										<div class="portfolio-item hover-effect-3d appear-animation" data-appear-animation="fadeInUpShorter" data-plugin-options="{'accY' : -50}">
											<a href="portfolio-detail.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1">
													<span class="image-frame-wrapper">
														<img src="assets/img/custom/1.jpeg" style="width: 100%" height="50"  class="img-fluid" alt="">
														<span class="image-frame-inner-border"></span>
														<span class="image-frame-action">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
															<button class="btn btn-success btn-rounded">Vote</button>
														</span>
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-12 col-md-6 col-lg-4 p-0 isotope-item ads">
										<div class="portfolio-item hover-effect-3d appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-plugin-options="{'accY' : -50}">
											<a href="portfolio-detail.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1">
													<span class="image-frame-wrapper">
														<img src="assets/img/custom/2.jpeg" style="width: 100%" height="50" class="img-fluid" alt="">
														<span class="image-frame-inner-border"></span>
														<span class="image-frame-action">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
															<button class="btn btn-success btn-rounded">Vote</button>
														</span>
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-12 col-md-6 col-lg-4 p-0 isotope-item design">
										<div class="portfolio-item hover-effect-3d appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-plugin-options="{'accY' : -50}">
											<a href="portfolio-detail.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1">
													<span class="image-frame-wrapper">
														<img src="assets/img/custom/3.jpeg" style="width: 100%" height="50"  class="img-fluid" alt="">
														<span class="image-frame-inner-border"></span>
														<span class="image-frame-action">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
															<button class="btn btn-success btn-rounded">Vote</button>
														</span>
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-12 col-md-6 col-lg-4 p-0 isotope-item brands">
										<div class="portfolio-item hover-effect-3d appear-animation" data-appear-animation="fadeInUpShorter" data-plugin-options="{'accY' : -50}">
											<a href="portfolio-detail.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1">
													<span class="image-frame-wrapper">
														<img src="img/custom/4.jpeg" style="width: 100%" height="50" class="img-fluid" alt="">
														<span class="image-frame-inner-border"></span>
														<span class="image-frame-action">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
															<button class="btn btn-success btn-rounded">Vote</button>
														</span>
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-12 col-md-6 col-lg-4 p-0 isotope-item web">
										<div class="portfolio-item hover-effect-3d appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-plugin-options="{'accY' : -50}">
											<a href="portfolio-detail.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1">
													<span class="image-frame-wrapper">
														<img src="assets/img/projects/generic/project-6.jpg" class="img-fluid" alt="">
														<span class="image-frame-inner-border"></span>
														<span class="image-frame-action">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
															<button class="btn btn-success btn-rounded">Vote</button>
														</span>
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-12 col-md-6 col-lg-4 p-0 isotope-item ads">
										<div class="portfolio-item hover-effect-3d appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-plugin-options="{'accY' : -50}">
											<a href="portfolio-detail.html">
												<span class="image-frame image-frame-style-1 image-frame-effect-1">
													<span class="image-frame-wrapper">
														<img src="img/projects/generic/project-18.jpg" class="img-fluid" alt="">
														<span class="image-frame-inner-border"></span>
														<span class="image-frame-action">
															<span class="image-frame-action-icon">
																<i class="lnr lnr-link text-color-light"></i>
															</span>
															<button class="btn btn-success btn-rounded">Vote</button>
														</span>
													</span>
												</span>
											</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-12 mb-4 d-flex justify-content-center">
							<div id="portfolioLoadMoreLoader" class="portfolio-load-more-loader">
								<div class="bounce-loader">
									<div class="bounce1"></div>
									<div class="bounce2"></div>
									<div class="bounce3"></div>
								</div>
							</div>

							<button id="portfolioLoadMore" type="button" class="btn btn-primary btn-rounded btn-wide-5 btn-icon-effect-2 outline-none font-weight-semibold text-0">
								<span>LOAD MORE</span>
								<i class="fas fa-ellipsis-h"></i>
							</button>
						</div>
					</div>

					<div class="row mt-5">
						
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
				
			</div>
@endsection