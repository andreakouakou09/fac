@extends('layouts.navbar')

@section('content')
	<!-- Banner Area Start -->
	<div class="banner__area" data-background="{{ asset('front/assets/img/banner.jpg') }}">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="banner__area-title">
						<span>Nous fournissons les meilleurs services</span>
						<h2>Nous vous Aidons à Bâtir une Entreprise Rentable. </h2>
						<a class="theme-btn" href="{{ asset('/contact') }}">Consultation gratuite</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner Area End -->
	<!-- About Area Start -->
	<div class="about__area section-padding">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 lg-mb-30">
					<div class="about__area-left">
						<div class="about__area-left-content">
							<h6><span class="counter">5</span>+</h6>
							<p>Années Experience</p>
						</div>
						<div class="about__area-left-image">
							<img src="{{ asset('front/assets/img/about.jpg') }}" alt="">
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="about__area-right">
						<div class="about__area-right-title">
							<p class="section-top">À Propos de la Firme</p>
							<h2>Intégrer l'informatique à votre entreprise</h2>
							<p>Aliquam suscipit purus hendrerit erat auctor fermentum. Morbi pharetra orci tortor, nec tempus quam posuere ac. Aenean dapibus eget velit ut tristique.</p>
						</div>
						<div class="about__area-right-list">
							<div class="about__area-right-list-item">
								<div class="about__area-right-list-item-icon">
									<img src="{{ asset('front/assets/img/icon/services-1.png') }}" alt="">
								</div>
								<div class="about__area-right-list-item-text">
									<h4>Formation</h3>
								</div>
							</div>
							<div class="about__area-right-list-item center">
								<div class="about__area-right-list-item-icon">
									<img src="{{ asset('front/assets/img/icon/services-2.png') }}" alt="">
								</div>
								<div class="about__area-right-list-item-text">
									<h4>Coaching</h4>
								</div>
							</div>
							<div class="about__area-right-list-item">
								<div class="about__area-right-list-item-icon">
									<img src="{{ asset('front/assets/img/icon/services-5.png') }}" alt="">
								</div>
								<div class="about__area-right-list-item-text">
									<h4>Marketing Digital</h4>
								</div>
							</div>
						</div>
						<div class="about__area-right-contact">
							<div class="about__area-right-contact-item">
								<a class="theme-btn" href="{{ asset('/services') }}s">Découvrir plus</a>
							</div>
							<div class="about__area-right-contact-item">
								<div class="about__area-right-contact-item-call">
									<div class="about__area-right-contact-item-call-icon">
										<i class="flaticon-phone-call"></i>
									</div>
									<div class="about__area-right-contact-item-call-content">
										<span>Téléphone :</span>
										<p><a href="tel:+123-568-4758">+123-568-4758</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About Area End -->
	<!-- Services Area Start -->
	<div class="services__area section-padding" data-background="{{ asset('front/assets/img/shape.png') }}">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12">
					<div class="services__area-title section-title">
						<p class="section-top">Meilleurs Services</p>
						<h2>En permanence, nous offrons les meilleurs services pour progresser !</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6 lg-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="{{ asset('front/assets/img/icon/services-1.png') }}" alt="">
						</div>
						<h3><a href="services-details.html">Formation</a></h3>
						<p>Phasellus aliquam fermentum tincidunt. Duis accumsan,</p> <a href="{{ asset('') }}">Lire Plus</a>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="{{ asset('front/assets/img/icon/services-2.png') }}" alt="">
						</div>
						<h3><a href="services-details.html">Coaching</a></h3>
						<p>Phasellus aliquam fermentum tincidunt. Duis accumsan,</p> <a href="{{ asset('') }}">Lire Plus</a>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="{{ asset('front/assets/img/icon/services-3.png') }}" alt="">
						</div>
						<h3><a href="services-details.html">Equipement Informatique</a></h3>
						<p>Phasellus aliquam fermentum tincidunt. Duis accumsan,</p> <a href="services-details.html">Lire Plus</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Services Area End -->
	<!-- Monitoring Area Start -->
	<div class="project__area">
		<div class="container-fluid pl-0 pr-0">
			<div class="row">
				<div class="col-xl-3 col-lg-4 col-md-6 xl-mb-30">
					<div class="project__area-item">
						<img src="{{ asset('front/assets/img/monitoring-1.jpg') }}" alt="">
						<div class="project__area-overly">
							<h3><a href="{{ asset('') }}">Informatique</a></h3>
							<p>IT Technology</p>
							<div class="project__area-icon">
								<a href="{{ asset('') }}"> <i class="flaticon-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 xl-mb-30">
					<div class="project__area-item project__area-item-hover">
						<img src="{{ asset('front/assets/img/monitoring-2.jpg') }}" alt="">
						<div class="project__area-overly">
							<h3><a href="{{ asset('') }}">Formation</a></h3>
							<p>Technology</p>
							<div class="project__area-icon">
								<a href="{{ asset('') }}"> <i class="flaticon-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 xl-mb-30">
					<div class="project__area-item">
						<img src="{{ asset('front/assets/img/monitoring-4.jpg') }}" alt="">
						<div class="project__area-overly">
							<h3><a href="{{ asset('') }}">Marketing Digital</a></h3>
							<p>Technology</p>
							<div class="project__area-icon">
								<a href="{{ asset('') }}"> <i class="flaticon-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="project__area-item">
						<img src="{{ asset('front/assets/img/monitoring-3.jpg') }}" alt="">
						<div class="project__area-overly">
							<h3><a href="{{ asset('') }}">Transport</a></h3>
							<p>Logistique</p>
							<div class="project__area-icon">
								<a href="{{ asset('') }}"> <i class="flaticon-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Monitoring Area End -->
	<!-- Counter Area Start -->
	<div class="counter__area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-6 lg-mb-30">
					<div class="counter__area-item">
						<ul class="d-inline-flex align-items-center t-left">
							<li><i class="flaticon-project-plan"></i>
							</li>
							<li>
								<h2><span class="counter">225</span>K</h2>
								<p>Completed Project</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 md-mb-30">
					<div class="counter__area-item">
						<ul class="d-inline-flex align-items-center t-left">
							<li><i class="flaticon-customer-satisfaction"></i>
							</li>
							<li>
								<h2><span class="counter">109</span>+</h2>
								<p>National Award</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 sm-mb-30">
					<div class="counter__area-item">
						<ul class="d-inline-flex align-items-center t-left">
							<li><i class="flaticon-badge"></i>
							</li>
							<li>
								<h2><span class="counter">220</span>+</h2>
								<p>Team Members</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="counter__area-item">
						<ul class="d-inline-flex align-items-center t-left">
							<li><i class="flaticon-team"></i>
							</li>
							<li>
								<h2><span class="counter">250</span>k</h2>
								<p>Clients Heureux</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Counter Area End -->
	<!-- Team Area Start -->
	<div class="team__area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12">
					<div class="services__area-title section-title">
						<p class="section-top">Notre Team</p>
						<h2>Membre de notre équipe d'experts</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-6 lg-mb-30">
					<div class="team__area-item">
						<div class="team__area-image p-relative">
							<div class="team__area-image-img">
								<img src="{{ asset('front/assets/img/team-1.jpg') }}" alt="">
							</div>
							<div class="team__area-icon">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a>
									</li>
									<li><a href="#"><i class="fab fa-twitter"></i></a>
									</li>
									<li><a href="#"><i class="fab fa-instagram"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="team__area-content">
							<h3>Roxane Akoué</h3>
							<p>Assistante du DG</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 md-mb-30">
					<div class="team__area-item">
						<div class="team__area-image p-relative">
							<div class="team__area-image-img">
								<img src="{{ asset('front/assets/img/team-2.jpg') }}" alt="">
							</div>
							<div class="team__area-icon">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a>
									</li>
									<li><a href="#"><i class="fab fa-twitter"></i></a>
									</li>
									<li><a href="#"><i class="fab fa-instagram"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="team__area-content">
							<h3>Andrea Kouakou</h3>
							<p>Webmaster</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 md-mb-30">
					<div class="team__area-item">
						<div class="team__area-image p-relative">
							<div class="team__area-image-img">
								<img src="{{ asset('front/assets/img/team-3.jpg') }}" alt="">
							</div>
							<div class="team__area-icon">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a>
									</li>
									<li><a href="#"><i class="fab fa-twitter"></i></a>
									</li>
									<li><a href="#"><i class="fab fa-instagram"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="team__area-content">
							<h3>Sehi Bi Mahne</h3>
							<p>Designer</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="team__area-item">
						<div class="team__area-image p-relative">
							<div class="team__area-image-img">
								<img src="{{ asset('front/assets/img/team-4.jpg') }}" alt="">
							</div>
							<div class="team__area-icon">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a>
									</li>
									<li><a href="#"><i class="fab fa-twitter"></i></a>
									</li>
									<li><a href="#"><i class="fab fa-instagram"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="team__area-content">
							<h3>Michelle yeoh</h3>
							<p>Commerciale</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Team Area End -->
	<!-- Why Choose Ua  Area Start -->
	<div class="choose__ua section-padding" data-background="{{ asset('front/assets/img/choose.png') }}">
		<div class="choose__ua-left" data-background="{{ asset('front/assets/img/choose-us.jpg') }}"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6"></div>
				<div class="col-xl-6 col-lg-6">
					<div class="s-table">
						<div class="s-tablec">
							<div class="choose__ua-right">
								<p class="section-top">Pourquoi nous-choisir ?</p>
								<h2 class="mb-35">Exemples de services technologique</h2>
								<div class="choose__ua-right-list">
									<div class="row">
										<div class="col-sm-6 mb-30">
											<div class="choose__ua-right-list-icon">
												<i class="flaticon-technical-support"></i>
												<h4>Equipement<br>Informatique</h4>
											</div>
										</div>
										<div class="col-sm-6 sm-mb-30">
											<div class="choose__ua-right-list-icon">
												<i class="flaticon-customer-service"></i>
												<h4>Communication<br>Digitale</h4>
											</div>
										</div>
										<div class="col-sm-6 sm-mb-30">
											<div class="choose__ua-right-list-icon">
												<i class="flaticon-chip"></i>
												<h4>Marketing<br>Digital</h4>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="choose__ua-right-list-icon choose__ua-right-list-icon-hover">
												<i class="flaticon-networking"></i>
												<h4>Formation<br>& Coaching</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Why Choose Ua Area End -->
	<!-- Skill Area Start -->
	<div class="skill__area section-padding pb-0" data-background="assets/img/skill.jpg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-8 col-lg-8 col-md-9 lg-mb-40">
					<div class="skill__area-title">
						<h2 class="mb-35">Skill Standards for Information Technology</h2>
						<a class="theme-banner-btn" href="services.html">Discover More</a>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-3">
					<div class="skill__area-play"> <a class="skill__area-video-icon video-popup" href="https://www.youtube.com/watch?v=0WC-tD-njcA"><span></span></a>
					</div>
				</div>
			</div>
			<div class="skilbar__area-box p-relative">
				<!-- <div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="skilbar__area-item mb-30">
							<div class="skilbar__area-content">
								<h5>Software development</h5>
								<span class="skilbar__area-count">
                                <span class="counter">75</span>%</span>
							</div>
							<div class="skilbar__area-inner">
								<div class="skilbar__area-bar" data-width="75"></div>
							</div>
						</div>
						<div class="skilbar__area-item md-mb-30">
							<div class="skilbar__area-content">
								<h5>Web Development</h5>
								<span class="skilbar__area-count">
                                <span class="counter">85</span>%</span>
							</div>
							<div class="skilbar__area-inner">
								<div class="skilbar__area-bar" data-width="85"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="skilbar__area-item mb-30">
							<div class="skilbar__area-content">
								<h5>Cyber Security</h5>
								<span class="skilbar__area-count">
                                <span class="counter">55</span>%</span>
							</div>
							<div class="skilbar__area-inner">
								<div class="skilbar__area-bar" data-width="55"></div>
							</div>
						</div>
						<div class="skilbar__area-item">
							<div class="skilbar__area-content">
								<h5>Data Recovery</h5>
								<span class="skilbar__area-count">
                                <span class="counter">90</span>%</span>
							</div>
							<div class="skilbar__area-inner">
								<div class="skilbar__area-bar" data-width="90"></div>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<!-- Skill Area End -->
	<!-- Pricing Area Start -->
	<div class="pricing__area">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12">
					<div class="pricing__area-title section-title">
						<p class="section-top">Pricing Plan</p>
						<h2>Our Pricing Plan</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6 lg-mb-30">
					<div class="pricing__area-item">
						<div class="pricing__area-price mb-60">
							<ul class="d-inline-flex align-items-center t-left">
								<li class="pricing__area-item-icon"><img src="assets/img/icon/price-1.png" alt="">
								</li>
								<li>
									<h3>Basic</h3>
									<h5>$19.00 <span> / Month</span></h5>
								</li>
							</ul>
						</div>
						<div class="pricing__area-content">
							<ul>
								<li><i class="fas fa-check"></i>Secure finance backup</li>
								<li><i class="fas fa-check"></i>Security management</li>
								<li><i class="fas fa-check mb-20"></i>Unlimited Features</li>
							</ul>
						</div> <a class="price-btn" href="pricing.html">Discover More</a>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
					<div class="pricing__area-item">
						<div class="pricing__area-price mb-60">
							<ul class="d-inline-flex align-items-center t-left">
								<li class="pricing__area-item-icon"><img src="assets/img/icon/price-2.png" alt="">
								</li>
								<li>
									<h3>Standard</h3>
									<h5>$59.00 <span> / Month</span></h5>
								</li>
							</ul>
						</div>
						<div class="pricing__area-content">
							<ul>
								<li><i class="fas fa-check"></i>Secure finance backup</li>
								<li><i class="fas fa-check"></i>Security management</li>
								<li><i class="fas fa-check mb-20"></i>Unlimited Features</li>
							</ul>
						</div> <a class="price-btn" href="pricing.html">Discover More</a>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="pricing__area-item">
						<div class="pricing__area-price mb-60">
							<ul class="d-inline-flex align-items-center t-left">
								<li class="pricing__area-item-icon"><img src="assets/img/icon/price-3.png" alt="">
								</li>
								<li>
									<h3>Premium</h3>
									<h5>$79.00 <span> / Month</span></h5>
								</li>
							</ul>
						</div>
						<div class="pricing__area-content">
							<ul>
								<li><i class="fas fa-check"></i>Secure finance backup</li>
								<li><i class="fas fa-check"></i>Security management</li>
								<li><i class="fas fa-check mb-20"></i>Unlimited Features</li>
							</ul>
						</div> <a class="price-btn" href="pricing.html">Discover More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pricing Area End -->
	<!-- Testimonial Area start -->
	<div class="testimonial__area-mt-175">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="swiper testimonial__area-bg testimonial-slider p-relative">
						<div class="swiper-wrapper testimonial__area-group">
							<div class="swiper-slide testimonial__area-item">
								<div class="row align-items-center">
									<div class="col-sm-3 md-mb-30">
										<div class="testimonial__area-image p-relative">
											<img src="{{ asset('front/assets/img/testmonials-1.jpg') }}" alt="">
										</div>
									</div>
									<div class="col-sm-9">
										<div class="testimonial__area-content p-relative">
											<p class="mb-15">Pellentesque metus massa, porttitor ac mauris sit amet, lobortis bibendum quam. Phasellus vitae viverra nisi. Vivamus faucibus bibendum lacus, eleifend porta nibh fringilla nec. Phasellus commodo aliquam arcu, vitae consectetur massa eleifend eu.</p>
											<h5>Michelle Yeoh</h5>
											<p>Developer</p> <i class="flaticon-right-quotes-symbol"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide testimonial__area-item">
								<div class="row align-items-center">
									<div class="col-sm-3 md-mb-30">
										<div class="testimonial__area-image p-relative">
											<img src="{{ asset('front/assets/img/testmonials-2.jpg') }}" alt="">
										</div>
									</div>
									<div class="col-sm-9">
										<div class="testimonial__area-content p-relative">
											<p class="mb-15">Pellentesque metus massa, porttitor ac mauris sit amet, lobortis bibendum quam. Phasellus vitae viverra nisi. Vivamus faucibus bibendum lacus, eleifend porta nibh fringilla nec. Phasellus commodo aliquam arcu, vitae consectetur massa eleifend eu.</p>
											<h5>Michelle Yeoh</h5>
											<p>Developer</p> <i class="flaticon-right-quotes-symbol"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pagination-area text-right">
							<div class="dots"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial Area End -->
	<!-- Blog Area Start -->
	<div class="blog__area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12">
					<div class="blog__area-title section-title">
						<p class="section-top">Blog & News</p>
						<h2>Notre blog et nos actualités</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-6 xl-mb-30">
					<div class="blog__area-item">
						<div class="blog__area-image">
							<img src="{{ asset('front/assets/img/blog-2.jpg') }}" alt="">
							<div class="blog__area-date">
								<h3>19</h3>
								<p>Jan,22</p>
							</div>
						</div>
						<div class="blog__area-content">
							<ul>
								<li><i class="flaticon-user"></i> Admin</li>
								<li><i class="flaticon-bubble-chat"></i> 3 Comment</li>
							</ul>
							<h3><a href="blog-single.html">Because databases are Updated so frequently</a></h3>
							<p>Pellentesque metus massa, porttitor ac mauris sit amet,</p> <a href="blog-single.html">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 lg-mb-30">
					<div class="blog__area-item">
						<div class="blog__area-image">
							<img src="{{ asset('front/assets/img/blog-3.jpg') }}" alt="">
							<div class="blog__area-date">
								<h3>10</h3>
								<p>Jan,22</p>
							</div>
						</div>
						<div class="blog__area-content">
							<ul>
								<li><i class="flaticon-user"></i> Admin</li>
								<li><i class="flaticon-bubble-chat"></i> 4 Comment</li>
							</ul>
							<h3><a href="blog-single.html">The Business Information Technology</a></h3>
							<p>Pellentesque metus massa, porttitor ac mauris sit amet,</p> <a href="blog-single.html">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6">
					<div class="blog__area-item">
						<div class="blog__area-image">
							<img src="{{ asset('front/assets/img/blog-1.jpg') }}" alt="">
							<div class="blog__area-date">
								<h3>07</h3>
								<p>Jan,22</p>
							</div>
						</div>
						<div class="blog__area-content">
							<ul>
								<li><i class="flaticon-user"></i> Admin</li>
								<li><i class="flaticon-bubble-chat"></i> 1 Comment</li>
							</ul>
							<h3><a href="blog-single.html">Product Idea Solution for New Generation</a></h3>
							<p>Pellentesque metus massa, porttitor ac mauris sit amet,</p> <a href="blog-single.html">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Blog Area End -->
@endsection
