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
                                    <a class="nav-link" href="contact-us-1.html">Contact Us</a>
                                </li>

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
                                <img alt="EZ" width="127"  src="assets/img/Contestlogo.png"  >
                            </a>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-nav">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav flex-column flex-lg-row" id="mainNav">
                                        <li class="dropdown dropdown-mega">
                                            <a class="dropdown-item dropdown-toggle" href="index.html">
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
                                        <li class="dropdown dropdown-mega dropdown-mega-style-2 active">
                                            <a class="dropdown-item dropdown-toggle active" href="winners.html">
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
                        <h1>Winners</h1>
                        <p class="lead"></p>
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
            <div class="col">
                <div class="table-responsive-md">
                    <!-- contest Photo and its short discription -->
                    <table border="0" class="table">
                        <tr>
                            <td style="display:table-cell; float:none;">
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

																		</span>
																	</span>
																</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="container">
                                    <div class="row">
                                        Discription
                                    </div>
                                </div>
                            </td>
                            <td style="display:table-cell; float:none;">
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

                                                                            </span>
                                                                        </span>
                                                                    </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="container">
                                    <div class="row">
                                        Discription
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:table-cell; float:none; vertical-align:top">
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

																</span>
															</span>
														</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td>Discription</td>
                            <td style="display:table-cell; float:none;">
                                <ul id="portfolioLoadMoreWrapper" class="portfolio-list sort-destination" data-sort-id="portfolio" data-total-pages="3">
                                    <li class="col-12 col-md-6 col-lg-4 p-0 isotope-item brands">
                                        <div class="portfolio-item hover-effect-3d appear-animation" data-appear-animation="fadeInUpShorter" data-plugin-options="{'accY' : -50}">
                                            <a href="portfolio-detail.html">
                                                                    <span class="image-frame image-frame-style-1 image-frame-effect-1">
                                                                        <span class="image-frame-wrapper">
                                                                            <img src="asssets/img/custom/1.jpeg" style="width: 100%" height="50"  class="img-fluid" alt="">
                                                                            <span class="image-frame-inner-border"></span>
                                                                            <span class="image-frame-action">
                                                                                <span class="image-frame-action-icon">
                                                                                    <i class="lnr lnr-link text-color-light"></i>
                                                                                </span>

                                                                            </span>
                                                                        </span>
                                                                    </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="container">
                                    <div class="row">
                                        Discription
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:table-cell; float:none; vertical-align:top">
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

																	</span>
																</span>
															</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td>Discription</td>
                            <td style="display:table-cell; float:none;">
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

                                                                                </span>
                                                                            </span>
                                                                        </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="container">
                                    <div class="row">
                                        Discription
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:table-cell; float:none; vertical-align:top">
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

																		</span>
																	</span>
																</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td>Discription</td>
                            <td style="display:table-cell; float:none;">
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

                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="container">
                                    <div class="row">
                                        Discription
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:table-cell; float:none; vertical-align:top">
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

																			</span>
																		</span>
																	</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td>Discription</td>
                            <td style="display:table-cell; float:none;">
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

                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <div class="container">
                                    <div class="row">
                                        Discription
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
@endsection


