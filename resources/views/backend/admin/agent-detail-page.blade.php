@extends('backend.admin.main')
@include('backend.admin.layouts.head')
@include('backend.admin.layouts.topbar')
@include('backend.admin.layouts.sidebar')
@section('content')
<div class="main-header">
    <div class="content-bg-wrap bg-group"></div>
    <div class="container">
        <div class="row">
            <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                <div class="main-header-content mt-5">
                    <h1>My Network</h1>
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
        <h4><b>My Referrals</b></h4>
        <div class="col col-md-6">

            <div class="d-flex justify-content-between align-items-center bg-white p-2">
                <p class="text-center m-0">
                    <i class="fa fa-upload"></i>
                    <b style="margin-left:10px">
                        Sent
                    </b>
                </p>
                <!-- <div class="btn-group">
                    <button class="btn btn-secondary btn-sm m-0" type="button">
                        Newest
                    </button>
                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split m-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        ...
                    </div>
                </div> -->
            </div>
            <div class="container bg-white mt-3">
                <div class="row">
                    @foreach($send as $row_sender)

                    <div class="d-flex justify-content-between pt-5">
                        <div>
                            <p>
                                <i class="fa fa-upload"></i>
                                <b style="margin-left: 20px;">
                                    Referred Location
                                </b>
                            </p>
                            <p style="margin-left: 40px; margin-top:-7px">
                                @if($row_sender->refer_user!=null)
                                {{$row_sender->refer_user->get_city->name}}
                                @endif
                            </p>
                        </div>
                        <div>
                            <button class="btn btn-primary" style="border-radius:10px;height:35px;background-color:#3a91fd;border:none">
                                {{$row_sender->type}}
                            </button>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">

                        <div style="">
                            <h4 class="text-center">
                                <b> Personal information</b>
                            </h4>
                        </div>

                        <div class="d-flex mt-4">
                            <div>
                                @if($row_sender->refer_user!=null)
                                <img loading="lazy" src="{{asset('upload/images/'.$row_sender->refer_user->profile_image)}}" width="34" height="34" alt="author">
                                @else
                                <img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" width="34" height="34" alt="author">
                                @endif
                            </div>
                            <div style="margin-left:10px">
                                @if($row_sender->refer_user!=null)
                                <p class="m-0"><b> {{$row_sender->refer_user->first_name}}</b></p>
                                @endif
                                <p class="m-0">
                                    Referral Partner
                                </p>
                            </div>

                        </div>
                        <div class="container-fluid p-0">

                            <div class="row mt-4 ">
                                <div class="col-6 col-md-6">
                                    <p class="m-0">
                                        <b>
                                            Referral fee
                                        </b>
                                    </p>
                                    @php
                                    $days=\Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $row_sender->created_at);

                                    $today=\Carbon\Carbon::now();
                                    $diff_in_days = $today->diffInDays($days);
                                    // $a=30;
                                    // $b=39;
                                    //dd($b%$a);
                                    @endphp
                                    <p class="m-0">
                                        {{$row_sender->profit}}%
                                    </p>
                                </div>
                                <div class="col-6 col-md-6">
                                    <p class="m-0">
                                        <b>
                                            Sent
                                        </b>
                                    </p>
                                    <p class="m-0">
                                        @if($diff_in_days!=0)
                                        {{$diff_in_days}} days Ago
                                        @else
                                        Today
                                        @endif



                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="">
                            <h4 class="text-center">
                                <b> Notes and Updates</b>
                            </h4>
                        </div>
                        <div class="container-fluid p-0">
                            <div class="row mt-4 ">
                                <div class="mb-3">
                                    <p class="m-0">
                                        <b>
                                            {{$row_sender->clint_user->name}}
                                        </b>
                                    </p>
                                    <p class="m-0">
                                        Client name
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <p class="m-0">
                                        <b>
                                            Phoen Number
                                        </b>
                                    </p>
                                    <p class="m-0">
                                        {{$row_sender->clint_user->phone}}
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <p class="m-0">
                                        <b>
                                            Email
                                        </b>
                                    </p>
                                    <p class="m-0">
                                        {{$row_sender->clint_user->email}}
                                    </p>
                                </div>
                            </div>
                            @if($row_sender->status=="accepted")
                            <div class="row">
                                <div class="col col-md-6">
                                    <p class="m-0">
                                        <b>
                                            Status
                                        </b>
                                    </p>

                                    <p class="m-0"><i style="margin-right:10px" class="fas fa-check"></i>Accepted</p>
                                </div>


                            </div>
                            @elseif($row_sender->status=="rejected")
                            <div class="row">
                                <div class="col col-md-6">
                                    <p class="m-0">
                                        <b>
                                            Status
                                        </b>
                                    </p>

                                    <p class="m-0"><i style="margin-right:10px" class="fas fa-times-circle"></i>Rejected</p>
                                </div>


                            </div>
                            @else
                            <div class="row">
                                <div class="col col-md-6">
                                    <p class="m-0">
                                        <b>
                                            Status
                                        </b>
                                    </p>

                                    <p class="m-0"><i style="margin-right:10px" class="fas fa-times-circle"></i>Pending</p>
                                </div>


                            </div>
                            @endif
                        </div>
                    </div>

                    <hr style="margin-top: 20px;">

                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="d-flex justify-content-between align-items-center bg-white p-2">
                <p class="text-center m-0">
                    <i class="fa fa-inbox"></i>
                    <b class="" style="margin-left:10px">
                        Recived
                    </b>
                </p>
                <!-- <div class="btn-group">
                        <button class="btn btn-secondary btn-sm m-0" type="button">
                            Newest
                        </button>
                        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split m-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            ...
                        </div>
                    </div> -->
            </div>
            <div class="container bg-white mt-3">
                <div class="row">
                    @foreach($reciver as $row_sender)
                    <div class="d-flex justify-content-between pt-5">
                        <div>
                            <p>
                                <i class="fa fa-upload"></i>
                                <b style="margin-left: 20px;">
                                    Referred Location
                                </b>
                            </p>
                            <p style="margin-left: 40px; margin-top:-7px">
                                @if($row_sender->refer_user2!=null)
                                {{$row_sender->refer_user2->get_city->name}}
                                @endif
                            </p>
                        </div>
                        <div>
                            <button class="btn btn-primary" style="border-radius:10px;height:35px;background-color:#3a91fd;border:none">
                                {{$row_sender->type}}
                            </button>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">

                        <div style="">
                            <h4 class="text-center">
                                <b> Personal information</b>
                            </h4>
                        </div>

                        <div class="d-flex mt-4">
                            <div>

                                @if($row_sender->refer_user2!=null)
                                <img loading="lazy" src="{{asset('upload/images/'.$row_sender->refer_user2->profile_image)}}" width="34" height="34" alt="author">
                                @else
                                <img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" width="34" height="34" alt="author">
                                @endif
                            </div>
                            <div style="margin-left:10px">
                                @if($row_sender->refer_user2!=null)
                                <p class="m-0"><b>
                                        {{$row_sender->refer_user2->first_name}}</b></p>
                                @endif
                                <p class="m-0">
                                    Referral Partner
                                </p>
                            </div>

                        </div>
                        <div class="container-fluid p-0">

                            <div class="row mt-4 ">
                                <div class="col-6 col-md-6">
                                    <p class="m-0">
                                        <b>
                                            Referral fee
                                        </b>
                                    </p>
                                    @php
                                    $days=\Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $row_sender->created_at);

                                    $today=\Carbon\Carbon::now();
                                    $diff_in_days = $today->diffInDays($days);
                                    // $a=30;
                                    // $b=39;
                                    //dd($b%$a);
                                    @endphp
                                    <p class="m-0">
                                        {{$row_sender->profit}}%
                                    </p>
                                </div>
                                <div class="col-6 col-md-6">
                                    <p class="m-0">
                                        <b>
                                            Sent
                                        </b>
                                    </p>
                                    <p class="m-0">
                                        @if($diff_in_days!=0)
                                        {{$diff_in_days}} days Ago
                                        @else
                                        Today
                                        @endif



                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="">
                            <h4 class="text-center">
                                <b> Notes and Updates</b>
                            </h4>
                        </div>
                        <div class="container-fluid p-0">
                            <div class="row mt-4 ">
                                <div class="mb-3">
                                    <p class="m-0">
                                        <b>
                                            @if($row_sender->clint_user!=null)
                                            {{$row_sender->clint_user->name}}
                                            @endif
                                        </b>
                                    </p>
                                    <p class="m-0">
                                        Client name
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <p class="m-0">
                                        <b>
                                            Phone Number
                                        </b>
                                    </p>
                                    <p class="m-0">
                                        @if($row_sender->clint_user!=null)
                                        {{$row_sender->clint_user->phone}}
                                        @endif

                                    </p>
                                </div>
                                <div class="mb-3">
                                    <p class="m-0">
                                        <b>
                                            Email
                                        </b>
                                    </p>
                                    <p class="m-0">
                                        @if($row_sender->clint_user!=null)
                                        {{$row_sender->clint_user->email}}
                                        @endif
                                    </p>
                                </div>
                            </div>
                            @if($row_sender->status=="accepted")
                            <div class="row">
                                <div class="col col-md-6">

                                </div>
                                <div class="col col-md-6">
                                    <p class="m-0">
                                        <b>

                                            <a href="">Accepted</a>
                                        </b>
                                    </p>

                                    <p class="m-0"><i class="fa fa-check"></i> Yes</p>
                                </div>
                            </div>
                            @elseif($row_sender->status=="rejected")
                            <div class="row">
                                <div class="col col-md-6">
                                </div>
                                <div class="col col-md-6">
                                    <p class="m-0">
                                        <b>
                                            <a href="">Rejected</a>
                                        </b>
                                    </p>
                                    <p class="m-0"><i class="fas fa-times-circle"></i> No</p>
                                </div>
                            </div>
                            @else
                            <div class="row">
                                <div class="col col-md-6">
                                </div>
                                <div class="col col-md-6">
                                    <p class="m-0">
                                        <b>
                                            <a href="">Pending</a>
                                        </b>
                                    </p>
                                    <p class="m-0"><i class="fas fa-times-circle"></i> No</p>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <hr style="margin-top: 20px;">

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var webpMachine = new webpHero.WebpMachine()
        webpMachine.polyfillDocument()
    });
</script>
</div>
@endsection