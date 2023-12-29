@extends('layouts.navbar')

@section('content')

	<!-- Page Banner Area Start -->
	<div class="page__banner" data-background="{{ asset('front/assets/img/page-banner.png') }}">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
						<h1>Nos Services</h1>
						<div class="page__banner-menu">
							<ul>
								<li><a href="#"><i class="flaticon-home-icon-silhouette"></i> Accueil - </a>
								</li>
								<li> Services
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Banner Area End -->
	<!-- Services Area Start -->
	<div class="services__area section-padding" data-background="{{ asset('front/assets/img/shape.png') }}">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6 mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="{{ asset('front/assets/img/icon/services-1.png') }}" alt="">
						</div>
						<h3><a href="services-details.html">Formation</a></h3>
						<p>Renforcez vos capacités en suivant des formations pratiques</p> <a href="services-details.html">Lire plus</a>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="{{ asset('front/assets/img/icon/services-2.png') }}" alt="">
						</div>
						<h3><a href="services-details.html">Coaching</a></h3>
						<p>Phasellus aliquam fermentum tincidunt. Duis accumsan,</p> <a href="services-details.html">Read More</a>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 lg-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="{{ asset('front/assets/img/icon/services-3.png') }}" alt="">
						</div>
						<h3><a href="services-details.html">Develop. Personel</a></h3>
						<p>Phasellus aliquam fermentum tincidunt. Duis accumsan,</p> <a href="services-details.html">Read More</a>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="{{ asset('front/assets/img/icon/services-4.png') }}" alt="">
						</div>
						<h3><a href="services-details.html">Communication</a></h3>
						<p>Phasellus aliquam fermentum tincidunt. Duis accumsan,</p> <a href="services-details.html">Read More</a>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="{{ asset('front/assets/img/icon/services-5.png') }}" alt="">
						</div>
						<h3><a href="services-details.html">Marketing Digital</a></h3>
						<p>Phasellus aliquam fermentum tincidunt. Duis accumsan,</p> <a href="services-details.html">Read More</a>
					</div>
				</div>
                <div class="col-xl-4 col-lg-4 col-md-6 lg-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="{{ asset('front/assets/img/icon/services-6.png') }}" alt="">
						</div>
						<h3><a href="services-details.html">Equipement Informatique</a></h3>
						<p>Phasellus aliquam fermentum tincidunt. Duis accumsan,</p> <a href="services-details.html">Lire Plus</a>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 ">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="{{ asset('front/assets/img/icon/services-7.png') }}" alt="">
						</div>
						<h3><a href="services-details.html">Transport</a></h3>
						<p>Phasellus aliquam fermentum tincidunt. Duis accumsan,</p> <a href="services-details.html">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Services Area End -->
	<!-- Pricing Area Start -->
	<div class="pricing__area-services">
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

@endsection
