@extends('backend.agent.main')
@include('backend.agent.layouts.head')
@include('backend.agent.layouts.topbar')
@include('backend.agent.layouts.sidebar')
@section('content')
<div class="main-header">
    <div class="content-bg-wrap bg-group"></div>
    <div class="container">
        <div class="row">
            <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                <div class="main-header-content mt-5">
                    <h1>Send Referrals </h1>
                    <p>Welcome to your stats and analytics dashboard! Here you’l see all your profile stats like: visits,
                        new friends, average comments, likes, social media reach, annual graphs, and much more!</p>
                </div>
            </div>
        </div>
    </div>
    <img loading="lazy" class="img-bottom" src="{{asset('dashboard/img/group-bottom.html')}}" alt="friends" width="1087" height="148">
</div>


<div class="container">
    <div class="">
        <!-- <div class="col col-xl-12 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12 pt-3"> -->
        <div class="col">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Referrals </h6>
                    <!-- <a href="#" class="more"><svg class="olymp-three-dots-icon"> -->
                    <use xlink:href="#olymp-three-dots-icon"></use>
                    </svg></a>
                </div>
                <!-- W-Action -->
                <div class="widget w-friend-pages-added notification-list friend-requests">
                    <div class="container">
                        <div class="inline-items p-0 d-flex justify-content-between mt-3">
                            <div class="d-flex">
                                <div class="author-thumb" style="">
                                    <img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" alt="author" width="36" height="36">
                                </div>
                                <div class="notification-event d-flex align-items-center">
                                    <a href="#" class="h6 notification-friend">John doe </a>
                                    <!-- <span class="chat-message-item">8 Friends in Common</span> -->
                                </div>
                            </div>
                            <div class="notification-event d-flex align-items-center" style="">
                                <span class="chat-message-item">Gold</span>
                            </div>
                            <div class="notification-event d-flex align-items-center" style="">
                                <span class="chat-message-item">Torento</span>
                            </div>
                            <div class="notification-event d-flex align-items-center" style="">
                                <button type="button" class="btn btn-success">Send Referrals</button>
                            </div>
                        </div>
                        <div class="inline-items p-0 d-flex justify-content-between mt-3">
                            <div class="d-flex">
                                <div class="author-thumb" style="">
                                    <img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" alt="author" width="36" height="36">
                                </div>
                                <div class="notification-event d-flex align-items-center">
                                    <a href="#" class="h6 notification-friend">John doe </a>
                                    <!-- <span class="chat-message-item">8 Friends in Common</span> -->
                                </div>
                            </div>
                            <div class="notification-event d-flex align-items-center" style="">
                                <span class="chat-message-item">Gold</span>
                            </div>
                            <div class="notification-event d-flex align-items-center" style="">
                                <span class="chat-message-item">Torento</span>
                            </div>
                            <div class="notification-event d-flex align-items-center" style="">
                                <button type="button" class="btn btn-success">Send Referrals</button>
                            </div>
                        </div>
                        <div class="inline-items p-0 d-flex justify-content-between mt-3">
                            <div class="d-flex">
                                <div class="author-thumb" style="">
                                    <img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" alt="author" width="36" height="36">
                                </div>
                                <div class="notification-event d-flex align-items-center">
                                    <a href="#" class="h6 notification-friend">John doe </a>
                                    <!-- <span class="chat-message-item">8 Friends in Common</span> -->
                                </div>
                            </div>
                            <div class="notification-event d-flex align-items-center" style="">
                                <span class="chat-message-item">Gold</span>
                            </div>
                            <div class="notification-event d-flex align-items-center" style="">
                                <span class="chat-message-item">Torento</span>
                            </div>
                            <div class="notification-event d-flex align-items-center" style="">
                                <button type="button" class="btn btn-success">Send Referrals</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- ... end W-Action -->
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var webpMachine = new webpHero.WebpMachine()
            webpMachine.polyfillDocument()
        });
    </script>
</div>
@endsection