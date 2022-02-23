<!DOCTYPE html>
<html lang="en">
<body>
    @yield('css')
    <div id="preloader" class="tlp-preloader">
        <div class="animation-preloader">
            <div class="tlp-spinner"></div>
            
            <img src="{{asset('media/light.png')}}" alt="Preloader">
        </div>
    </div>
    <div id="wrapper" class="wrapper">
        <a href="#main_content" data-type="section-switch" class="return-to-top">
            <i class="fas fa-angle-double-up"></i>
        </a>
        <div id="main_content">
            @yield('content')
            @include('frontend.layouts.footer')
        </div>
    </div>
    @include('frontend.layouts.script')
</body>
@yield('js')
</html>