
@extends('backend.agent.main')
@section('content')
<div class="main-header">
    <div class="content-bg-wrap bg-group"></div>
    <div class="container">
        <div class="row">
            <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                <div class="main-header-content mt-5">
                    <h1>My Network</h1>
                    <p>Welcome to your stats and analytics dashboard! Here you’l see all your profile stats like: sent referrals,
                        recived referrals, invites , graphs, and much more!</p>
                </div>
            </div>
        </div>
    </div>
    <img loading="lazy" class="img-bottom" src="{{asset('dashboard/img/group-bottom.html')}}" alt="friends" width="1087" height="148">
</div>
<div class="container">
    <div class="row">
        <h4><b>Referral Notifications </b></h4>


        <div class="col-12 col-md-6">

            <div class="container bg-white mt-3">
                <div class="row">
                    @foreach($reciver as $row_sender)
                    

                    <div class="d-flex justify-content-between pt-5">
                        <div>
                            <p>
                                <i class="fa fa-upload"></i>
                                <b style="">
                                    Referred Location
                                </b>
                            </p>
                            <p style=" margin-top:-7px">

                                {{$row_sender->refer_user2->get_city->name}}
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
                            <h4 class="">
                                <b> Personal information</b>
                            </h4>
                        </div>

                        <div class="d-flex mt-4">
                            <div>
                            @if($row_sender->refer_user2!=null)
                                <img loading="lazy" src="{{asset('upload/images/'.$row_sender->refer_user2->profile_image)}}" style="border-radius: 100%;width: 30px;height: 30px;" alt="author" alt="author">
                                @else
                                <img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" width="34" height="34" alt="author">
                                @endif
                               
                            </div>
                            <div style="margin-left:10px">
                                <p class="m-0"><b> {{$row_sender->refer_user2->first_name}}</b></p>
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
                             <div class="row mt-4 ">
                                <div class="col-6 col-md-6">
                                    <p class="m-0">
                                        <b>
                                            Min
                                        </b>
                                    </p>
                                    @php
                                    
                                    @endphp
                                    <p class="m-0">
                                        {{$row_sender->min}}
                                    </p>
                                </div>
                                <div class="col-6 col-md-6">
                                    <p class="m-0">
                                        <b>
                                            Max
                                        </b>
                                    </p>
                                    <p class="m-0">
                                        
                                        {{$row_sender->max}}
                                       



                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="">
                            <h4 class="">
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

                        </div>
                        @if($row_sender->status=="accepted")
                        <div class="row">
                            <div class="col col-md-6">

                            </div>
                            <div class="col col-md-6">
                                <p class="m-0">
                                    <b style="color: #ff5e3a;">

                                       Accepted
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
                                    <b style="color: #ff5e3a;">
                                        Rejected
                                    </b>
                                </p>
                                <p class="m-0"><i class="fas fa-times-circle"></i> No</p>
                            </div>
                        </div>
                        @else
                        <div class="row">
                            <div class="col col-md-6">
                                <p class="m-0">
                                    <b>
                                        <a href="{{route('user.status',['id'=>$row_sender->id,'status'=>'rejected'])}}" onclick="return confirm('Are You Sure?');">Reject</a>
                                    </b>
                                </p>

                                <p class="m-0"><i style="margin-right:10px" class="fas fa-times-circle"></i>No</p>
                            </div>
                            <div class="col col-md-6">
                                <p class="m-0">
                                    <b>

                                        <a href="{{route('user.status',['id'=>$row_sender->id,'status'=>'accepted'])}}">Accept</a>
                                    </b>
                                </p>

                                <p class="m-0"><i class="fa fa-check"></i> Yes</p>
                            </div>

                        </div>
                        @endif
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