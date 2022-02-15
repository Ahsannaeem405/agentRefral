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
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Send Referrals</button>
                            </div>
                        </div>
                        <!-- model code -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Referral Request</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-between">
                                                <p>Select an in-network agent to send a referral to </p>
                                                <button class="btn btn-success" style="height: 33px;">Find Agent</button>
                                            </div>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select Agent</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="container mt-3">
                                            <div class="d-flex">
                                                <button class="btn btn-success" style="width: 100px;margin-right:2px">
                                                    Buyer
                                                </button>
                                                <button class="btn btn-success" style="width: 100px;margin-right:2px">
                                                    Seller
                                                </button>
                                                <button class="btn btn-success" style="width: 100px;margin-right:2px">
                                                    Tenant
                                                </button>
                                                <button class="btn btn-success" style="width: 100px;margin-right:2px">
                                                    Landlord
                                                </button>
                                            </div>
                                        </div>
                                        <div>
                                            <form>
                                                <div class="form-group">
                                                    <label for="formControlRange">Referral Fee</label>
                                                    <input type="range" class="form-control-range" id="formControlRange">
                                                </div>
                                            </form>
                                        </div>
                                        <div>
                                            <form>
                                                <div class="form-group">
                                                    <label for="formControlRange">Acceptence Deadline</label>
                                                    <input type="range" class="form-control-range" id="formControlRange">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="">Min </label>
                                                    <input type="text" placeholder="Min Range">
                                                </div>
                                                <div class="col">
                                                    <label for="">Max </label>
                                                    <input type="text" placeholder="Max Range">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="">Notes</label>
                                            <input type="text" placeholder="Write a Message">
                                        </div>
                                        <p>0/3000</p>
                                        <div class="row">
                                            <p>Select a client From Your Database or Create a new client</p>
                                            <div class="col d-flex align-items-center">
                                                <input type="radio" class="w-25"><span>Select from database</span>
                                            </div>
                                            <div class="col d-flex align-items-center">
                                                <input type="radio" class="w-25"><span>Create a new New Contact</span>
                                            </div>
                                        </div>
                                        <div class="mt-5 text-end">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ... end W-Action -->
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