<!DOCTYPE html>
<?php
	require 'connect_db.php';
	session_start();
	
	if(!ISSET($_SESSION['user'])){
		header('location:index.php');
	}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CyberX - Learn - Play - Evolve</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/plugins/sal.css">
    <link rel="stylesheet" href="assets/css/plugins/feather.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="assets/css/plugins/magnify.css">
    <link rel="stylesheet" href="assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="rbt-header-sticky">

    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-3">
        <div class="rbt-sticky-placeholder"></div>

        <!-- Start Header Top -->
				<div class="rbt-header-middle position-relative rbt-header-mid-1 header-space-betwween bg-color-white rbt-border-bottom d-none d-xl-block">
					<div class="container-fluid">
						<div class="rbt-header-sec align-items-center ">

							<div class="rbt-header-sec-col rbt-header-left">
								<div class="rbt-header-content">
									<div class="header-info">
										<div class="logo">
											<a href="index.php">
												<img src="assets/images/logo/logo_500x650.png" alt="CyberX Images">
											</a>
										</div>
									</div>
								</div>
							</div>                 
							
							<!-- Sign up/login etc, need to add link -->
                            <div class="header-info">
                                <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none" href="logout.php">
                                    <span data-text="Logout">Logout</span>
                                </a>
                            </div>
						</div>
					</div>
				</div>
        <!-- End Header Top -->
									
							<!-- Sets out menu design -->
                            <div class="header-info d-xl-none">
                                <ul class="quick-access">
                                    <li class="access-icon">
                                        <a class="search-trigger-active rbt-round-btn" href="index.php">
                                            <i class="feather-search"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
							
                            <div class="header-info d-block d-xl-none">
                                <div class="mobile-menu-bar">
                                    <div class="hamberger">
                                        <button class="hamberger-button rbt-round-btn">
                                            <i class="feather-menu"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
        <!-- End Header Top -->
		
		<!-- Start Menu Area -->
        <div class="rbt-header-wrapper height-50 header-space-betwween bg-color-white header-sticky">
            <div class="container-fluid">
                <div class="mainbar-row rbt-navigation-center align-items-center">
                    <div class="header-left d-block d-xl-none">
                        <div class="header-info">
                            <ul class="quick-access">
                                <li class="access-icon">
                                    <a class="search-trigger-active rbt-round-btn" href="index.php">
                                        <i class="feather-search"></i>
                                    </a>
                                </li>

                                <li class="access-icon">
                                    <a class="rbt-round-btn" href="index.php">
                                        <i class="feather-heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="header-center d-block d-xl-none">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/images/logo/logo.png" alt="Education Logo Images">
                            </a>
                        </div>
                    </div>
									
					<div class="rbt-main-navigation d-none d-xl-block">
						<nav class="mainmenu-nav">
							<ul class="mainmenu">
																	
                                <li class="with-megamenu has-menu-child-item">
                                    <a href="index.php">Home <i class="feather-chevron-down"></i></a>
                                    <!-- Start Mega Menu  -->
                                    <div class="rbt-megamenu grid-item-2">
                                        <div class="wrapper">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mega-top-banner">
                                                        <div class="content">
                                                            <h4 class="title">Home Hub</h4>
                                                            <p class="description">Start learning, and discover more.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
											
                                            <div class="row row--15">
                                                <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                                    <h3 class="rbt-short-title">Where Would You Like To Go?</h3>
                                                    <ul class="mega-menu-item">
                                                        <li><a href="about_us.html">About Us</a></li>
                                                        <li><a href="courses.html">Courses</a></li>
                                                        <li><a href="resources.html">resources</a></li>
                                                        <li><a href="contact.html">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</li>
									
                                <li class="with-megamenu has-menu-child-item">
                                    <a href="courses.html">Courses <i class="feather-chevron-down"></i></a>
                                    <!-- Start Mega Menu  -->
                                    <div class="rbt-megamenu grid-item-2">
                                        <div class="wrapper">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mega-top-banner">
                                                        <div class="content">
                                                            <h4 class="title">CyberX Learning Hub</h4>
                                                            <p class="description">Start learning, with code samples, resources and more.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row--15">
                                                <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                                    <h3 class="rbt-short-title">CyberX Courses</h3>
                                                    <ul class="mega-menu-item">
                                                        <li><a href="beginner_python_course.html">Python for Beginners</a></li>
                                                        <li><a href="course_advanced_python.html">Extended Python</a></li>
                                                        <li><a href="course_inspector_digi.html">Inspector Digi</a></li>
                                                        <li><a href="course_front_end.html">Front End Web Development</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu  -->
                                </li>

																					
								<li class="with-megamenu has-menu-child-item">
									<a href="resources.html">Resources <i class="feather-chevron-down"></i></a>
												
										<!-- Start Resources Menu  -->
										<div class="rbt-megamenu grid-item-2">
											<div class="wrapper">
												<div class="row">
													<div class="col-lg-12">
														<div class="mega-top-banner">
															<div class="content">
																<h4 class="title">Resources Hub</h4>
																<p class="description">Find All The Learning Resources You Need Here:</p>
															</div>
														</div>
													</div>
												</div>
												<div class="row row--15">
													<div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
														<h3 class="rbt-short-title">The Latest Tech News</h3>
														<ul class="mega-menu-item">
															<li><a href="https://www.bestproducts.com/tech/g864/cool-tech-products-you-need/">Latest Tech Gadgets</a></li>
															<li><a href="https://www.forbes.com/sites/bernardmarr/2023/01/10/the-11-best-and-most-innovative-new-gadgets-and-devices-in-2023/">Futuristic Tech</a></li>
															<li><a href="https://wearetechwomen.com/news/">Girls+ in Tech</a></li>
															<li><a href="https://www.womenintech.co.uk/women-in-tech-survey-2023">Careers in Tech</a></li>
															<li><a href="https://codefirstgirls.com/partner-with-us/companies/?utm_source=google-search&utm_medium=uk-b2b&utm_term=women%20in%20technology&utm_campaign=UK+B2B+Search+-+April+2023&utm_source=adwords&utm_medium=ppc&hsa_acc=4524824748&hsa_cam=20012127738&hsa_grp=151203232551&hsa_ad=655868617395&hsa_src=g&hsa_tgt=kwd-10104166&hsa_kw=women%20in%20technology&hsa_mt=b&hsa_net=adwords&hsa_ver=3&gclid=EAIaIQobChMI7bT3lOjP_gIVUe3tCh1HEwCXEAAYASAAEgJOnvD_BwE">Tech events</a></li>
														</ul>
													</div>
												</div>
			
												<div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
													<h3 class="rbt-short-title">Free Resources</h3>
													<ul class="mega-menu-item">
														<li><a href="https://www.shecodes.io/">SheCodes</a></li>
														<li><a href="https://girlswhocode.com/">GirlsWhoCode</a></li>
														<li><a href="https://wearebgc.org/">BlackGirlsCode</a></li>
														<li><a href="https://www.ncsc.gov.uk/cyberfirst/overview">CyberFirst</a></li>
														<li><a href="https://www.khanacademy.org/">Khan Academy</a></li>
														<li><a href="https://www.udemy.com/courses/search/?src=ukw&q=free+courses">Udemy</a></li>
														<li><a href="https://www.w3schools.com/">W3Schools</a></li>
													</ul>
												</div>												
											</div>
										</div>
										
								</li>
							</ul>
						</nav>
					</div>	
						<!-- End Menu Area -->															
				</div>
			</div>
		</div>
</header>

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">My Account</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->
    <div class="my-account-section bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row g-5">
					
                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-12">
                            <div class="rbt-my-account-tab-button nav" role="tablist">
                                <a href="#dashboard" class="active" data-bs-toggle="tab">Dashboard</a>
                                <a href="#courses" data-bs-toggle="tab">Orders</a>
                                <a href="#account-info" data-bs-toggle="tab">Account Details</a>
                                <a href="login.php">Logout</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade active show" id="dashboard" role="tabpanel">
                                    <div class="rbt-my-account-inner">
										<h3>Welcome!</h3>
										<br />
										<?php
											$id = $_SESSION['user'];
											$sql = $db_connect->prepare("SELECT * FROM `member` WHERE `mem_id`='$id'");
											$sql->execute();
											$fetch = $sql->fetch();
										?>
										<center><h4><?php echo $fetch['firstname']." ". $fetch['lastname']?></h4></center>
										<a href = "logout.php">Logout</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="rbt-my-account-inner">
                                        <h3>Account Details</h3>

                                        <div class="account-details-form">
                                            <form action="#">
                                                <div class="row g-5">
                                                    <div class="col-lg-6 col-12">
                                                        <input id="first-name" placeholder="First Name" type="text">
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <input id="last-name" placeholder="Last Name" type="text">
                                                    </div>

                                                    <div class="col-12">
                                                        <input id="display-name" placeholder="Display Name" type="text">
                                                    </div>

                                                    <div class="col-12">
                                                        <input id="email-address" placeholder="Email Address" type="email">
                                                    </div>

                                                    <div class="col-12">
                                                        <h4>Password change</h4>
                                                    </div>

                                                    <div class="col-12">
                                                        <input id="current-pwd" placeholder="Current Password" type="password">
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <input id="new-pwd" placeholder="New Password" type="password">
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <input id="confirm-pwd" placeholder="Confirm Password" type="password">
                                                    </div>

                                                    <div class="col-12">
                                                        <button class="rbt-btn btn-gradient icon-hover">
                                                            <span class="btn-text">Save Changes</span>
                                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        </button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
	
    <!-- Start Footer Area  -->
	<footer class="rbt-footer footer-style-1">
        <div class="footer-top">
            <div class="container">
                <div class="row row--15 mt_dec--30">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="footer-widget">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo.png" alt="CyberX">
                                </a>
                            </div>

                            <p class="description mt--20">We'd love to hear from you, get in touch!
                            </p>

                            <div class="contact-btn mt--30">
                                <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="contact.html">
                                    <div class="icon-reverse-wrapper">
                                        <span class="btn-text">Connect With Us</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="footer-widget">
                            <h5 class="ft-title">Useful Links</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="courses.html">Courses</a>
                                </li>
                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="cookie-policy.html">Cookie Policy</a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="footer-widget">
                            <h5 class="ft-title">Our Company</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                                <li>
                                    <a href="become-a-contributer.html">Become A Contributer</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="the-team.html">The Team</a>
                                </li>
                                <li>
                                    <a href="event-list.html">Events</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="footer-widget">
                            <h5 class="ft-title">Contact Us</h5>
                            <ul class="ft-link">
                                <li><span>Phone:</span> <a href="#">+447415314400</a></li>
                                <li><span>E-mail:</span> <a href="mailto:cyber_x@mail.com">cyberx@cybergal.com</a></li>
                                <li><span>Location:</span> United Kingdom</li>
                            </ul>
                            <ul class="social-icon social-default icon-naked justify-content-start mt--20">
                                <li><a href="https://www.facebook.com/">
                                        <i class="feather-facebook"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.twitter.com">
                                        <i class="feather-twitter"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.instagram.com/">
                                        <i class="feather-instagram"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.linkdin.com/">
                                        <i class="feather-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer area -->
	
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="assets/js/vendor/sal.js"></script>
    <script src="assets/js/vendor/swiper.js"></script>
    <script src="assets/js/vendor/magnify.min.js"></script>
    <script src="assets/js/vendor/jquery-appear.js"></script>
    <script src="assets/js/vendor/odometer.js"></script>
    <script src="assets/js/vendor/backtotop.js"></script>
    <script src="assets/js/vendor/isotop.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>

    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/waypoint.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <script src="assets/js/vendor/magnify-popup.min.js"></script>
    <script src="assets/js/vendor/paralax-scroll.js"></script>
    <script src="assets/js/vendor/paralax.min.js"></script>
    <script src="assets/js/vendor/countdown.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
	
</body>
</html>