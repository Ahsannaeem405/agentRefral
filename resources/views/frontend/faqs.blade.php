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
			<h1>FAQ</h1>
			<ul>
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>Pages</li>
			</ul>
		</div>
	</div>
</section>
<section class="faq-wrap bg-color-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-2">
                <h2 class="inner-section-heading">How Our Pricing Plans Work</h2>
                <div class="faq-box">
                    <div id="accordion">
                        <div class="card single-item">
                            <div class="card-header item-nav">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Are there any discounts included?</a>
                            </div>
                            <div id="collapse1" class="collapse show item-content-wrap" data-parent="#accordion">
                                <div class="card-body item-content">
                                    <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more a ametion consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm ipsum that dolocons rsus suada fadolorit to the consectetur elit dummy text ready.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card single-item">
                            <div class="card-header item-nav">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Should I buy this theme?</a>
                            </div>
                            <div id="collapse2" class="collapse item-content-wrap" data-parent="#accordion">
                                <div class="card-body item-content">
                                    <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more a ametion consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm ipsum that dolocons rsus suada fadolorit to the consectetur elit dummy text ready.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card single-item">
                            <div class="card-header item-nav">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">What is UX?</a>
                            </div>
                            <div id="collapse3" class="collapse item-content-wrap" data-parent="#accordion">
                                <div class="card-body item-content">
                                    <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more a ametion consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm ipsum that dolocons rsus suada fadolorit to the consectetur elit dummy text ready.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card single-item">
                            <div class="card-header item-nav">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4">Is there a warranty on my item?</a>
                            </div>
                            <div id="collapse4" class="collapse item-content-wrap" data-parent="#accordion">
                                <div class="card-body item-content">
                                    <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more a ametion consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm ipsum that dolocons rsus suada fadolorit to the consectetur elit dummy text ready.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card single-item">
                            <div class="card-header item-nav">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5">Are there any discounts included?</a>
                            </div>
                            <div id="collapse5" class="collapse item-content-wrap" data-parent="#accordion">
                                <div class="card-body item-content">
                                    <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more a ametion consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm ipsum that dolocons rsus suada fadolorit to the consectetur elit dummy text ready.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 order-lg-1 template-sidebar">
                <div class="widget widget-padding bg-color-accent2">
                    <div class="widget-section-heading heading-layout1">
                        <h3 class="item-heading">Popular Articles</h3>
                    </div>
                    <div class="widget-article">
                        <ul class="list-item">
                            <li><a href="#">How to Create an Account</a></li>
                            <li><a href="#">How Our Pricing Plans Work</a></li>
                            <li><a href="#">How Does the 14 Day Free Trial Work?</a></li>
                            <li><a href="#">How Can I Edit My Already Exisiting Page?</a></li>
                            <li><a href="#">How Do I See My Fublished Page?</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function() {
		$("#question").click(function() {
			$('#first-question').css('display', 'block');
			$('#second-question').css('display', 'none');
			$('#third-question').css('display', 'none');
			$('#fourth-question').css('display', 'none');
			$('#fifth-question').css('display', 'none');
		});

		$("#question2").click(function() {
			$('#first-question').css('display', 'none');
			$('#second-question').css('display', 'block');
			$('#third-question').css('display', 'none');
			$('#fourth-question').css('display', 'none');
			$('#fifth-question').css('display', 'none');
		});
		$("#question3").click(function() {
			$('#first-question').css('display', 'none');
			$('#third-question').css('display', 'block');
			$('#second-question').css('display', 'none');
			$('#fourth-question').css('display', 'none');
			$('#fifth-question').css('display', 'none');
		});
		$("#question4").click(function() {
			$('#first-question').css('display', 'none');
			$('#third-question').css('display', 'none');
			$('#second-question').css('display', 'none');
			$('#fourth-question').css('display', 'block');
			$('#fifth-question').css('display', 'none');
		});
		$("#question5").click(function() {
			$('#third-question').css('display', 'none');
			$('#second-question').css('display', 'none');
			$('#fourth-question').css('display', 'none');
			$('#fifth-question').css('display', 'block');
		});
	});
</script> -->
<!--=====================================-->
<!--=       Team Section Area End       =-->
<!--=====================================-->


<!--=====================================-->
<!--=      Brand Section Area End       =-->
<!--=====================================-->
@endsection