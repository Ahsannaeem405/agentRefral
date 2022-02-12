@extends('backend.main')
@include('backend.layouts.head')
@include('backend.layouts.topbar')
@include('backend.layouts.sidebar')
@section('content')
<div class="main-header">
    <div class="content-bg-wrap bg-group"></div>
    <div class="container">
        <div class="row">
            <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                <div class="main-header-content">
                    <h1>Dashboard</h1>
                    <p>Welcome to your stats and analytics dashboard! Here you’l see all your profile stats like: visits,
                        new friends, average comments, likes, social media reach, annual graphs, and much more!</p>
                </div>
            </div>
        </div>
    </div>

    <img loading="lazy" class="img-bottom" src="{{asset('dashboard/img/group-bottom.html')}}" alt="friends" width="1087" height="148">
</div>
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
                            <div class="count-stat">28.432
                                <span class="indicator positive"> + 4.207</span>
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
                            <div class="count-stat">450.623
                                <span class="indicator negative"> - 12.352</span>
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
                            <div class="count-stat">16.502
                                <span class="indicator positive"> + 1.056</span>
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
                                    Last Year Posts
                                </span>
                            </div>
                            <div class="count-stat">390.822
                                <span class="indicator positive"> + 2.847</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection