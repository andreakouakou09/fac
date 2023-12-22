@extends('layouts.navbar')

@section('content')
    <!-- Page Banner Area Start -->
	<div class="page__banner" data-background="assets/img/page-banner.png">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
						<h1>Nos News</h1>
						<div class="page__banner-menu">
							<ul>
								<li><a href="{{ asset('/') }}"><i class="flaticon-home-icon-silhouette"></i> Accueil - </a>
								</li>
								<li> News
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Banner Area End -->
	<!-- Blog Area Start -->
	<div class="blog__area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-6 mb-30">
					<div class="blog__area-item">
						<div class="blog__area-image">
							<img src="{{ asset('front/assets/img/blog-1.jpg') }}" alt="">
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
							<h3><a href="blog-single.html">Product Idea Solution for New Generation</a></h3>
							<p>Pellentesque metus massa, porttitor ac mauris sit amet,</p> <a href="blog-single.html">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 lg-mb-30">
					<div class="blog__area-item">
						<div class="blog__area-image">
							<img src="{{ asset('front/assets/img/blog-2.jpg') }}" alt="">
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
				<div class="col-xl-4 col-lg-6 xl-mb-30">
					<div class="blog__area-item">
						<div class="blog__area-image">
							<img src="{{ asset('front/assets/img/blog-3.jpg') }}" alt="">
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
							<h3><a href="blog-single.html">Because databases are Updated so frequently</a></h3>
							<p>Pellentesque metus massa, porttitor ac mauris sit amet,</p> <a href="blog-single.html">Read More</a>
						</div>
					</div>
				</div>
				{{-- <div class="col-xl-4 col-lg-6 lg-mb-30">
					<div class="blog__area-item">
						<div class="blog__area-image">
							<img src="{{ asset('front/assets/img/blog-4.jpg') }}" alt="">
							<div class="blog__area-date">
								<h3>07</h3>
								<p>Jan,22</p>
							</div>
						</div>
						<div class="blog__area-content">
							<ul>
								<li><i class="flaticon-user"></i> Admin</li>
								<li><i class="flaticon-bubble-chat"></i> 2 Comment</li>
							</ul>
							<h3><a href="blog-single.html">What is Holding Back the IT Solution Industry?</a></h3>
							<p>Pellentesque metus massa, porttitor ac mauris sit amet,</p> <a href="blog-single.html">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 lg-mb-30">
					<div class="blog__area-item">
						<div class="blog__area-image">
							<img src="{}assets/img/blog-5.jpg" alt="">
							<div class="blog__area-date">
								<h3>05</h3>
								<p>Jan,22</p>
							</div>
						</div>
						<div class="blog__area-content">
							<ul>
								<li><i class="flaticon-user"></i> Admin</li>
								<li><i class="flaticon-bubble-chat"></i> 9 Comment</li>
							</ul>
							<h3><a href="blog-single.html">Technology allows profit to serve the community</a></h3>
							<p>Pellentesque metus massa, porttitor ac mauris sit amet,</p> <a href="blog-single.html">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6">
					<div class="blog__area-item">
						<div class="blog__area-image">
							<img src="assets/img/blog-6.jpg" alt="">
							<div class="blog__area-date">
								<h3>03</h3>
								<p>Jan,22</p>
							</div>
						</div>
						<div class="blog__area-content">
							<ul>
								<li><i class="flaticon-user"></i> Admin</li>
								<li><i class="flaticon-bubble-chat"></i> 6 Comment</li>
							</ul>
							<h3><a href="blog-single.html">The Future of Enterprise API Development</a></h3>
							<p>Pellentesque metus massa, porttitor ac mauris sit amet,</p> <a href="blog-single.html">Read More</a>
						</div>
					</div>
				</div> --}}
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="blog__area-pagination text-center mt-50">
						<ul>
							<li><a href="#"><i class="fas fa-chevron-left"></i></a>
							</li>
							<li><a class="active" href="#">01</a>
							</li>
							<li><a href="#">02</a>
							</li>
							<li><a href="#">03</a>
							</li>
							<li><a href="#"><i class="fas fa-chevron-right"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Blog Area End -->
@endsection
