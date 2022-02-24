<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Summit Refferals </title>


    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">



    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">
    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{asset('dependencies/bootstrap/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/fontawesome/css/all.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/select2/css/select2.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/flaticon/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/wow/css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/page-piling/css/jquery.pagepiling.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/nivo-slider/css/nivo-slider.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/meanmenu/css/meanmenu.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/magnific-popup/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/owl.carousel/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/owl.carousel/css/owl.theme.default.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/slick/css/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/slick/css/slick-theme.css')}}" type="text/css">
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" type="text/css">
    <!-- Animation Stylesheet -->
    <link rel="stylesheet" href="{{asset('dependencies/animation-css/animation-css.css')}}" type="text/css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
</head>
<header class="sticky-on">
    <div id="sticky-placeholder"></div>
    <div id="navbar-wrap" class="navbar-wrap">
        <div class="navbar-layout1">
            <div class="container">
                <div class="row no-gutters d-flex align-items-center position-relative">
                    <div class="col-lg-2 d-flex justify-content-start">
                        <div class="temp-logo text-center">
                            <a href="{{route('index2')}}" class="default-logo">
                                <img src="{{asset('media/dark.png')}}" alt="logo" class="img-fluid" style="height:80px!important">
                            </a>
                            <a href="index.html" class="sticky-logo">
                                <img src="{{asset('media/light.png')}}" alt="logo" class="img-fluid" style="height:80px!important">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-7 d-flex justify-content-end possition-static">
                        <nav id="dropdown" class="template-main-menu">
                            <!-- <div class='mobile-menu-nav-back d-lg-none'>
                                    <a class='logo-mobile' href='index.html'>
                                        <img src='media/logo-mobile.png' alt='logo' class='img-fluid'/></a>
                                    </div> -->
                            <ul>
                                <li class="position-static d-none d-lg-block">
                                    <a href="{{route('index2')}}">Home</a>
                                </li>

                                <li>
                                    <a href="{{route('about-us')}}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{route('contact-us')}}">Contact Us</a>
                                </li>
                                <li>
                                    <a href="{{route('faqs')}}">FAQs</a>

                                </li>
                                @if(!Auth::check())
                                <li>
                                    <a href="{{url('log_in')}}">Login</a>

                                </li>
                                <li>
                                    <a href="{{url('get/register')}}"><span>Register</span></a>
                                </li>
                                @else
                                @if(Auth()->user()->role==1)
                                <li>
                                    <a href="{{route('index')}}"><span>Dashboard</span></a>
                                </li>
                                @else
                                <li>
                                    <a href="{{route('index1')}}"><span>Dashboard</span></a>
                                </li>
                                @endif
                                @endif
                          
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>