@extends('layouts.navbar')

@section('content')
    <!-- Page Banner Area Start -->
	<div class="page__banner" data-background="{{ asset('front/assets/img/page-banner.jpg') }}">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
						<h1>Contactez-Nous</h1>
						<div class="page__banner-menu">
							<ul>
								<li><a href="#"><i class="flaticon-home-icon-silhouette"></i> Accueil - </a>
								</li>
								<li> Contact
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Banner Area End -->
<!-- Contact Details Start -->
	<div class="contact__list section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6 lg-mb-30 wow fadeInUp" data-wow-delay=".4s">
					<div class="contact__list-item">
						<div class="contact__list-item-icon">
							<img src="{{ asset('front/assets/img/icon/locations.png') }}" alt="">
						</div>
						<p>Riviera Palmeraie, rond point ADO route de bonoumin</p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 md-mb-30 wow fadeInUp" data-wow-delay=".8s">
					<div class="contact__list-item">
						<div class="contact__list-item-icon">
							<img src="{{ asset('front/assets/img/icon/phone-call.png') }}" alt="">
						</div>
						<a href="tel:+123-568-4758">
							<p>+225-0707-494-772</p>
						</a>
						<a href="tel:+123-508-4008">
							<p>+225-2724-361-197</p>
						</a>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.2s">
					<div class="contact__list-item">
						<div class="contact__list-item-icon">
							<img src="{{ asset('front/assets/img/icon/email.png') }}" alt="">
						</div>
						<a href="#">
							<p>info@attouco.com</p>
						</a>
						<a href="#">
							<p>info.@fac-immo.com</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Details End -->
	<!-- Contact Form Start -->
	<div class="contact__form">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="contact__form t-center">
						<div class="contact__form-form">
							<div class="contact__form-form-title">	<span class="section-top">Entrer en contact</span>
								<h2>Toujours prêt pour vos solutions</h2>
							</div>
							<form action="mailto:andreakouakou38@gmail.com" method="post" enctype="text/plain">
                                {{ csrf_field() }}
								<div class="row">
									<div class="col-lg-4 col-md-6 mb-30">
										<div class="contact__form-form-group icon">	<i class="far fa-user"></i>
											<input type="text" name="name" placeholder="Votre Nom" required="required">
										</div>
									</div>
									<div class="col-lg-4 col-md-6 md-mb-30">
										<div class="contact__form-form-group icon">	<i class="far fa-envelope-open"></i>
											<input type="text" name="email" placeholder="Votre Email" required="required">
										</div>
									</div>
									<div class="col-lg-4 lg-mb-30">
										<div class="contact__form-form-group icon">	<i class="far fa-address-book"></i>
											<input type="text" name="subject" placeholder="Sujet" required="required">
										</div>
									</div>
									<div class="col-lg-12 mb-30">
										<div class="contact__form-form-group icon">	<i class="far fa-comments"></i>
											<textarea name="message" rows="8" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="contact__form-form-group">
											<button class="theme-btn" type="submit" name="button">Soumettre <i class="flaticon-send"></i>
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Form End -->
	<!-- Map Area Start -->
	<div class="contact__map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.26700776722797!2d-3.9676765256107545!3d5.375413123584498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ed21e0ebdea3%3A0x1a25ff6b2ba8f672!2sFirme%20Attou%20%26%20Co!5e0!3m2!1sfr!2sci!4v1702995481638!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>


	</div>
	<!-- Map Area End -->
@endsection
