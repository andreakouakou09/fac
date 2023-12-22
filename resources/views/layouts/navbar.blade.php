<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Start Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Sarfox - Technology & IT Solutions HTML5 Template" />
	<meta name="keywords" content="Creative, Digital, multipage, landing, freelancer template" />
	<meta name="author" content="ThemeOri">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title of Site -->
	<title>FAC - Firme Attou & Co</title>
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('front/assets/img/favicon.png') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome.min.css') }}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">
	<!-- Swiper -->
	<link rel="stylesheet" href="{{ asset('front/assets/css/swiper-bundle.min.css') }}">
	<!-- Magnific -->
	<link rel="stylesheet" href="{{ asset('front/assets/css/magnific-popup.css') }}">
	<!-- Nice Select -->
	<link rel="stylesheet" href="{{ asset('front/assets/css/nice-select.css') }}">
	<!-- Mean menu -->
	<link rel="stylesheet" href="{{ asset('front/assets/css/meanmenu.min.css') }}">
	<!-- Flaticon -->
	<link rel="stylesheet" href="{{ asset('front/assets/fonts/flaticon.css') }}">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('front/assets/sass/style.css') }}">
</head>

<body>
	<!-- Preloader start -->
	<div class="theme-loader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!-- Preloader end -->
	<!-- Header Area Start -->
	<div class="header__area">
		<div class="header__area-topbar-area">
			<div class="header__area-topbar custom-container">
				<div class="header__area-topbar-left">
					<div class="header__area-topbar-left-info md-mb-10">
						<ul>
							<li><a href="#"><i class="flaticon-placeholder"></i>Riviera Bonoumin</a>
							</li>
							<li><a href="#"><i class="flaticon-email"></i>info@attouco.com</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="header__area-topbar-right">
					<div class="header__area-topbar-right-language">
						<select name="select">
							<option value="1">French</option>
							<option value="2">English</option>
						</select>
					</div>
					<div class="header__area-topbar-right-social">
						<ul>
							<li><a href="https://www.facebook.com/profile.php?id=61552336384280&locale=fr_FR"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li><a href="{{ asset('front/') }}"><i class="fab fa-twitter"></i></a>
							</li>
							<li><a href="https://www.instagram.com/firme_attou_co/"><i class="fab fa-instagram"></i></a>
							</li>
							<li><a href="https://www.linkedin.com/company/firme-attou-co/"><i class="fab fa-linkedin-in"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- TopBar Area Start -->
		<!-- Menu Bar Area Start -->
		<div class="header__area-menubar-area">
			<div class="header__area-menubar custom-container">
				<div class="header__area-menubar-logo">
					<a href="{{ asset('/') }}">
						<img src="{{ asset('front/assets/img/Logo.png') }}" alt="">
					</a>
					<div class="responsive-menu"></div>
				</div>
				<div class="header__area-menubar-main-menu">
					<ul id="mobilemenu">
						<li><a href="{{ asset('/') }}">Accueil</a></li>
						<li><a href="{{ asset('/apropos') }}">A Propos</a>
						<li><a href="{{ asset('/services') }}">Services</a></li>
						<li><a href="{{ asset('/actualites') }}">News</a>
						<li><a href="{{ asset('contact') }}">Contact</a></li>

						<!-- <li class="header__area-menubar-main-menu-icon"><a href="#">Page</a>
							<ul class="sub-menu">

								</li>
								<li><a href="pricing.html">Pricing</a>
								</li>
								<li><a href="services-details.html">Services Details</a>
								<li><a href="faq.html">FAQS</a>
								</li>
								<li><a href="project.html">Projects</a>
								</li>
								<li><a href="project-details.html">Projects Details</a>
								</li>
								<li><a href="team.html">Team</a>
								</li>
							</ul>
						</li>
						<li class="header__area-menubar-main-menu-icon"><a href="#">News</a>
							<ul class="sub-menu">

								<li><a href="blog-standard.html">Blog Standard</a>
								</li>
								<li><a href="blog-single.html">Blog Single</a>
								</li>
							</ul>
						</li> -->

					</ul>
				</div>
				<div class="header__area-menubar-right">
					<!-- <div class="header__area-menubar-right-search">
						<div class="search">
							<span class="header__area-menubar-right-search-icon open"><i class="flaticon-search"></i></span>
						</div>
						<div class="header__area-menubar-right-search-box">
							<form>

								<button type="submit"><i class="flaticon-search"></i>
								</button>
							</form> <span class="header__area-menubar-right-search-box-icon"><i class="flaticon-close"></i></span>
						</div>
					</div> -->
					<div class="header__area-menubar-right-hamburger">
						<div class="hamburger-icon">
							<i class="fas fa-bars"></i>
						</div>
					</div>
					<div class="header__area-menubar-right-btn">
						<a class="theme-btn" href="{{ asset('/contact') }}">nous contacter</a>
					</div>
				</div>
			</div>
			<!-- Hamburger Menu Start -->
			<div class="hamburger-popup">
				<div class="hamburger-close-btn">
					<img src="{{ asset('front/assets/img/close.png') }}" alt="">
				</div>
				<div class="menu-box">
					<div class="hamburger-popup-logo">
						<a href="{{ asset('/') }}">
							<img src="{{ asset('front/assets/img/logo.png') }}" alt="logo">
						</a>
					</div>
					<p class="pb-30">Proin cursus ex a vestibulum mattis. Vivamus in mauris dignissim, imperdiet risus ac, congue nunc. Nullam feugiat id dolor id iaculis. Maecenas diam justo, consectetur vitae enim non, maximus venenatis nisl. Pellentesque habitant morbi tristique senectus et</p>
					<img src="{{ asset('front/assets/img/bar.jpg') }}" alt="">
					<div class="contact__info">
						<h3 class="mb-25">Info Contact</h3>
						<div class="contact__info-list">
							<a href="tel:+1(002)568-958"><i class="flaticon-phone-call"></i>+225 0707494772</a>
							<a href="#"><i class="flaticon-email"></i>info.attouco.com</a>
							<a href="#"><i class="flaticon-placeholder"></i>Riviera Bonoumin</a>
						</div>
					</div>
					<div class="follow__us">
						<h3 class="mb-25">Nous Suivre</h3>
						<div class="follow__us-social">
							<ul>
								<li><a href="{{ asset('front/') }}"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li><a href="{{ asset('front/') }}"><i class="fab fa-twitter"></i></a>
								</li>
								<li><a href="{{ asset('front/') }}"><i class="fab fa-instagram"></i></a>
								</li>
								<li><a href="{{ asset('front/') }}"><i class="fab fa-linkedin-in"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="hamburger-overlay"></div>
			<!-- Hamburger Menu Start -->
		</div>
		<!-- Menu Bar Area Start -->
	</div>
	<!-- Header Area End -->

        @yield('content')

    	<!-- Footer Area Start -->
	<div class="footer__area pt-100 pb-100" data-background="assets/img/footer.png">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-5 col-md-8 md-mb-30">
					<div class="footer__area-footer-widget">
						<div class="footer__area-logo">
							<a href="index.html">
								<img src="{{ asset('front/assets/img/footer-logo.png') }}" alt="">
							</a>
						</div>
						<div class="footer__area-content">
							<p>Aliquam erat volutpat. In a porttitor lacus. Donec nisi ante, laoreet non sodales ac, rhoncus vitae ipsum. Donec ut purus eu nulla dapibus fringilla.Pellentesque metus massa, porttitor ac mauris sit amet,</p>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-lg-3 fo-b col-md-4">
					<div class="footer__area-footer-widget">
						<div class="footer__area-title">
							<h3>Nos Services</h3>
						</div>
						<div class="footer__area-footer-menu">
							<ul>
								<li><a href="services-details.html">- Informatique</a>
								</li>
								<li><a href="services-details.html">- Formation</a>
								</li>
								<li><a href="services-details.html">- Marketing Digital</a>
								</li>
								<li><a href="services-details.html">- Transport</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
					<div class="footer__area-footer-widget">
						<div class="footer__area-title">
							<h3>Information</h3>
						</div>
						<div class="footer__area-contact-info">
							<div class="footer__area-contact-info-item d-inline-flex mb-20">
								<div class="footer__area-contact-info-item-icon">
									<i class="fas fa-phone-alt"></i>
								</div>
								<div class="footer__area-contact-info-item-text">
									<a href="tel:+(225)-0707494772">+(225)-2724361197</a>
								</div>
							</div>
							<div class="footer__area-contact-info-item d-inline-flex mb-20">
								<div class="footer__area-contact-info-item-icon">
									<i class="fas fa-phone-alt"></i>
								</div>
								<div class="footer__area-contact-info-item-text">
									<a href="tel:+(225)-0707494772">+(225)-0707494772</a>
								</div>
							</div>
							<div class="footer__area-contact-info-item d-inline-flex mb-20">
								<div class="footer__area-contact-info-item-icon">
									<i class="fas fa-envelope"></i>
								</div>
								<div class="footer__area-contact-info-item-text">
									<a href="#">info@attouco.com</a>
								</div>
							</div>
							<div class="footer__area-contact-info-item d-inline-flex">
								<div class="footer__area-contact-info-item-icon">
									<i class="fas fa-map-marker-alt"></i>
								</div>
								<div class="footer__area-contact-info-item-text">
									<a href="#">Riviera Bonoumin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="footer__area-footer-widget">
						<div class="footer__area-title">
							<h3>Entrer en contact</h3>
						</div>
						<form action="#">
							<input type="email" name="email" placeholder="Email" required="required">
							<button type="submit" class="theme-banner-btn">Soumettre</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Area End -->
	<!-- Copyright Area Start -->
	<div class="footer__area-bottom">
		<div class="container">
			<div class="row align-items-center pt-40 pb-40">
				<div class="col-xl-6 col-lg-6 col-md-7 md-mb-30">
					<div class="footer__area-bottom-left">
						<p>Copyright © 2022 - <a href="index.html">FirmeAttouCo</a> Tous droits reservés</p>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-5">
					<div class="footer__area-bottom-right t-right">
						<ul class="d-inline-flex">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li><a href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li><a href="#"><i class="fab fa-instagram"></i></a>
							</li>
							<li><a href="#"><i class="fab fa-linkedin-in mr-0"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Copyright Area End -->
	<!-- scroll_up_btn -->
	<div class="scroll-top"> <i class="flaticon-up-arrow"></i>
	</div>
	<!-- scroll_up_btn end -->
	<!-- Main JS -->
	<script src="{{ asset('front/assets/js/jquery-3.6.0.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
	<!-- Counterup -->
	<script src="{{ asset('front/assets/js/jquery.counterup.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('front/assets/js/popper.min.js') }}"></script>
	<!-- Progressbar JS -->
	<script src="{{ asset('front/assets/js/progressbar.min.js') }}"></script>
	<!-- Magnific JS -->
	<script src="{{ asset('front/assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- Swiper JS -->
	<script src="{{ asset('front/assets/js/swiper-bundle.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('front/assets/js/jquery.waypoints.min.js') }}"></script>
	<!-- Mean menu -->
	<script src="{{ asset('front/assets/js/jquery.meanmenu.min.js') }}"></script>
	<!-- Nice Select -->
	<script src="{{ asset('front/assets/js/jquery.nice-select.min.js') }}"></script>
	<!-- WOW JS -->
	<script src="{{ asset('front/assets/js/wow.min.js') }}"></script>
	<!-- Custom JS -->
	<script src="{{ asset('front/assets/js/custom.js') }}"></script>
</body>

</html>

