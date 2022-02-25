@extends('../frontend.main')
@include('../frontend.layouts.navbar')
@section('css')
<style type="text/css">
    .select2-container--default .select2-selection--single {
        border: none!important;
        background-color: #ecf5ff!important;
     }
     .select2-selection__rendered{
        font-family: Poppins-Medium!important;
        font-size: 15px!important;
        line-height: 1.5!important;
        color: #666666!important;
        display: block!important;
        width: 100%!important;
        background: #e6e6e6!important;
        height: 50px!important;
        border-radius: 25px!important;
        padding: 0 30px 0 68px!important;
        padding-top: 14px!important;
     }
    .select2-selection__arrow{
        padding-top: 47px!important;
     }
</style>


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

@endsection
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
            <h1>Register</h1>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Register </li>
            </ul>
        </div>
    </div>
</section>
<div class="limiter">
    <div class="container-login100" style="">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{asset('images/img-01.png')}}" alt="IMG">
            </div>
            <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                @csrf
            
                <span class="login100-form-title">
                      Register
                </span>

                <div class="wrap-input100" >
                    <input class="input100  @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
                    

                                
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    
                        <i class="fa fa-user-tie"></i>
                    
                    </span>
                    
                </div>
                @error('first_name')
                    <span class="invalid-feedback"  role="alert" style="display: block;margin-top: -12px;margin-left: 5%;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="wrap-input100" >
                    <input class="input100 @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-user-tie"></i>
                    </span>
                </div>
                <div class="wrap-input100">


                                
                    <input class="input100  @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required  placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>

                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert" style="display: block;margin-top: -12px;margin-left: 5%;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="wrap-input100" >     
                    <input class="input100  @error('password') is-invalid @enderror" name="password" required  type="password"  placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert" style="display: block;margin-top: -12px;margin-left: 5%;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="wrap-input100">
                    <input class="input100" type="password" name="password_confirmation" required placeholder="Confirm Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100">
                    
                    <select name="city" class="input100 js-example-basic-single"  required>
                      <option value="">Select City</option>
                      @foreach($citiy as $citiy)
                      <option value="{{$citiy->id}}">{{$citiy->name}}</option>
                      @endforeach
                    </select>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100" style="padding-top: 17px!important;">
                    <i class="fa fa-city" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit" >
                        
                        Register
                        
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">
                        You are already member?
                    </span>
                    <span>
                       <a href="{{url('log_in')}}"> Login</a>
                    </span>
</div>
            </form>
        </div>
    </div>
</div>

<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
@endsection

@section('js')


<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
@endsection