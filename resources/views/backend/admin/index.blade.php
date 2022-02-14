@extends('backend.admin.main')
@include('backend.admin.layouts.head')
@include('backend.admin.layouts.topbar')
@include('backend.admin.layouts.sidebar')
@section('content')
@include('backend.admin.include.main-header')
<div class="container">
    <div class="row">
        <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-content">
                    <ul class="statistics-list-count">
                        <li>
                            <div class="points">
                                <span>
                                    Total Agents
                                </span>
                            </div>
                            <div class="count-stat">2028
                                <!-- <span class="indicator positive"></span> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-content">
                    <ul class="statistics-list-count">
                        <li>
                            <div class="points">
                                <span>
                                    Total Referral Users
                                </span>
                            </div>
                            <div class="count-stat">11450
                                <!-- <span class="indicator negative"> - 12.352</span> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-content">
                    <ul class="statistics-list-count">
                        <li>
                            <div class="points">
                                <span>
                                    Total Cities
                                </span>
                            </div>
                            <div class="count-stat">2400
                                <!-- <span class="indicator positive"> </span> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-content">
                    <ul class="statistics-list-count">
                        <li>
                            <div class="points">
                                <span>
                                    Gold Agents
                                </span>
                            </div>
                            <div class="count-stat">996
                                <!-- <span class="indicator positive"> + 2.847</span> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('backend.admin.include.monthly-bar')
<div class="container">
    <div class="">
        <!-- <div class="col col-xl-12 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12 pt-3"> -->
        <div class="col">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Total Agents</h6>
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
                                    <img loading="lazy" src="{{asset('dashboard/img/avatar38-sm.html')}}" alt="author" width="36" height="36">
                                </div>
                                <div class="notification-event">
                                    <a href="#" class="h6 notification-friend">Francine Smith</a>
                                    <span class="chat-message-item">8 Friends in Common</span>
                                </div>
                            </div>
                            <div class="notification-event d-flex align-items-center" style="">
                                <span class="chat-message-item">8 Friends in Common</span>
                            </div>
                            <div class="notification-event d-flex align-items-center" style="">
                                <span class="chat-message-item">8 Friends in Common</span>
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