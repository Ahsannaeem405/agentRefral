@extends('frontend.main')
@include('frontend.layouts.navbar')
@section('content')

<section id="page-banner" class="page-banner bg-gradient-layout6 has-animation">
	<ul class="shape-holder">
		<li>
			<div class="translate-top-50 opacity-animation transition-200 transition-delay-10">
				<svg width="827px" height="827px">
					<defs>
						<linearGradient id="shape1" x1="0%" x2="50%" y1="86.603%" y2="0%">
							<stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.6" />
							<stop offset="100%" stop-color="rgb(117,14,213)" stop-opacity="0.6" />
						</linearGradient>
					</defs>
					<path fill="url(#shape1)" d="M413.500,0.000 C641.870,0.000 827.000,185.130 827.000,413.500 C827.000,641.870 641.870,827.000 413.500,827.000 C185.130,827.000 -0.000,641.870 -0.000,413.500 C-0.000,185.130 185.130,0.000 413.500,0.000 Z" />
				</svg>
			</div>
		</li>
		<li>
			<div class="translate-top-50 opacity-animation transition-100 transition-delay-300">
				<svg width="615px" height="615px">
					<defs>
						<linearGradient id="shape2" x1="0%" x2="50%" y1="86.603%" y2="0%">
							<stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.6" />
							<stop offset="100%" stop-color="rgb(109,26,223)" stop-opacity="0.6" />
						</linearGradient>
					</defs>
					<path fill="url(#shape2)" d="M307.500,0.000 C477.327,0.000 615.000,137.673 615.000,307.500 C615.000,477.327 477.327,615.000 307.500,615.000 C137.672,615.000 -0.000,477.327 -0.000,307.500 C-0.000,137.673 137.672,0.000 307.500,0.000 Z" />
				</svg>
			</div>
		</li>
		<li>
			<div class="translate-top-50 opacity-animation transition-50 transition-delay-600">
				<svg width="441px" height="441px">
					<defs>
						<linearGradient id="shape3" x1="0%" x2="50%" y1="86.603%" y2="0%">
							<stop offset="13%" stop-color="rgb(82,63,255)" stop-opacity="0.4" />
							<stop offset="100%" stop-color="rgb(130,33,221)" stop-opacity="0.4" />
						</linearGradient>
					</defs>
					<path fill="url(#shape3)" d="M220.500,0.000 C342.279,0.000 441.000,98.721 441.000,220.500 C441.000,342.279 342.279,441.000 220.500,441.000 C98.721,441.000 -0.000,342.279 -0.000,220.500 C-0.000,98.721 98.721,0.000 220.500,0.000 Z" />
				</svg>
			</div>
		</li>
	</ul>
	<div class="container">
		<div class="breadcrumbs-area">
			<h1>Contact Us</h1>
			<ul>
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>Contact</li>
			</ul>
		</div>
	</div>
</section>
<!--=====================================-->
<!--=           Main Banner End         =-->
<!--=====================================-->
<!--=====================================-->
<!--=      Team Section Area Start      =-->
<!--=====================================-->
<section class="contact-wrap-layout3 section-padding-md-equal">
	<div class="container">
		<div class="row gutters-50">
			<div class="col-lg-4 mb-5 has-animation">
				<div class="single-item translate-left-75 opacity-animation transition-150 transition-delay-100">
					<div class="address-box-layout2">
						<div class="item-icon">
							<i class="flaticon-mail"></i>
						</div>
						<div class="item-content">
							<h3 class="item-title">Email &amp; Phone</h3>
							<ul class="list-item">
								<li>info@summitreferrals.com</li>
								<li>+21 842 755 5575</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="single-item translate-left-75 opacity-animation transition-150 transition-delay-600">
					<div class="address-box-layout2">
						<div class="item-icon">
							<i class="flaticon-placeholder"></i>
						</div>
						<div class="item-content">
							<h3 class="item-title">Our Location</h3>
							<ul class="list-item">
								<li>yourweb@gmail.com</li>
								<li>+21 842 755 5575</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="single-item translate-left-75 opacity-animation transition-150 transition-delay-1100">
					<div class="address-box-layout2">
						<div class="item-icon">
							<i class="flaticon-share"></i>
						</div>
						<div class="item-content">
							<h3 class="item-title">Get In Touch</h3>
							<ul class="list-item">
								<li>yourweb@gmail.com</li>
								<li>+21 842 755 5575</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 has-animation">
				<div class="contact-box-layout3">
					<form class="contact-form-box"  action="{{url('contact_saved')}}">
						@csrf
						    @if ($errors->any())
							    <div class="alert alert-danger">
							        <ul>
							            @foreach ($errors->all() as $error)
							                <li>{{ $error }}</li>
							            @endforeach
							        </ul>
							    </div>
							@endif
							@if(session()->has('success'))
						        <div class="alert alert-success">
						            {{ session()->get('success') }}
						        </div>
						    @endif

						<div class="row">

							<div class="col-md-6 form-group">
								<div class="translate-bottom-50 opacity-animation transition-100 transition-delay-1200">
									<label for="exampleInputEmail1">Name</label>
									<input type="text" placeholder="John" class="form-control" name="Name" >

								</div>
							</div>
							<div class="col-md-6 form-group">

								<div class="translate-bottom-50 opacity-animation transition-100 transition-delay-1400">
									<label for="exampleInputEmail1">Email</label>
									<input type="email" placeholder="example@gmail.com" class="form-control" name="Email"  >

								</div>
							</div>
							<div class="col-12 form-group">

								<div class="translate-bottom-50 opacity-animation transition-100 transition-delay-1600">
									<label for="exampleInputEmail1">Subject</label>
									<input type="text" placeholder="Subject" class="form-control" name="subject" >

								</div>
							</div>
							<div class="col-12 form-group">
								<div class="translate-bottom-50 opacity-animation transition-100 transition-delay-1800">
									<label for="exampleInputEmail1">Comment</label>
									<textarea placeholder="Comment" class="textarea form-control" name="Message" id="form-message" rows="7" cols="20"></textarea>

								</div>
							</div>
							<div class="col-12 form-group mb-0">
								<div class="translate-bottom-50 opacity-animation transition-100 transition-delay-2000">
									<button type="submit" class="btn-fill btn-gradient send-message">Send Message</button>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
		<div class="box-bottom-margin">
			<div class="google-map">
				<div class="map-layout1" data-lat="40.741895" data-lng="-73.989308" data-mrkr="assets/img/map-marker.png"></div>
			</div>

		</div>
	</div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script>
	// $(".send-message").click(function(){
 //     $(".message").removeClass('d-none');
	// });
</script>




<!--=====================================-->
<!--=       Team Section Area End       =-->
<!--=====================================-->
<!--=====================================-->

@endsection