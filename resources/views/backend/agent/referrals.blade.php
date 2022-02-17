@extends('backend.agent.main')

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
                <div class="ui-block">


                        <table class="event-item-table event-item-table-fixed-width">

                            <thead>

                            <tr>

                                <th class="author">
                                    Name
                                </th>
                                <th class="author">
                                    Email
                                </th>

                                <th class="location">
                                    PLACE
                                </th>

                               
                               

                                

                                <th class="add-event">

                                </th>
                            </tr>

                            </thead>

                            <tbody>
                                @php $l=0;  @endphp
                            @foreach($user as $row_user)

                             @php $l++  @endphp
                            <tr class="event-item">
                                <td class="author">
                                    <div class="event-author inline-items">
                                        <div class="author-thumb">
                                            <img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" alt="author" width="36" height="36">
                                        </div>
                                        <div class="author-date">
                                            {{$row_user->first_name}}</a> 
                                        </div>
                                    </div>
                                </td>
                                <td class="location">
                                    <div class="place inline-items">
                                        
                                        {{$row_user->email}}
                                    </div>
                                </td>
                                <td class="location">
                                    <div class="place inline-items">
                                        <svg class="olymp-add-a-place-icon">
                                            <use xlink:href="#olymp-add-a-place-icon"></use>
                                        </svg>
                                        <span>{{$row_user->get_city->name}}</span>
                                    </div>
                                </td>
                               
                                
                                
                                <td class="add-event">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{$l}}">Send Referrals</button>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel{{$l}}">Referral Request</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            {{-- <div class="col-12 d-flex justify-content-between">
                                                <p>Select an in-network agent to send a referral to </p>
                                                <button class="btn btn-success" style="height: 33px;">Find Agent</button>
                                            </div>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select Agent</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select> --}}
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
                                                    <div style="display: flex;">
                                                    <input type="range" class="form-control-range" id="formControlRange"  value="24" min="1" max="100" oninput="this.nextElementSibling.value = this.value">
                                                     <output>24</output><span>%</span></div>
                                                </div>
                                            </form>
                                        </div>
                                        <div>
                                            <form>
                                                
                                                <div class="form-group">
                                                    <label for="formControlRange">Acceptence Deadline</label>
                                                    <div style="display: flex;">
                                                    <input type="range" class="form-control-range" id="formControlRange"  value="24" min="1" max="100" oninput="this.nextElementSibling.value = this.value">
                                                     <output>24</output><span>h</span></div>
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
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                <div class="widget w-friend-pages-added notification-list friend-requests">
                    <div class="container">

                        
                        <!-- model code -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Referral Request</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            {{-- <div class="col-12 d-flex justify-content-between">
                                                <p>Select an in-network agent to send a referral to </p>
                                                <button class="btn btn-success" style="height: 33px;">Find Agent</button>
                                            </div>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select Agent</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select> --}}
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
                                                    <div style="display: flex;">
                                                    <input type="range" class="form-control-range" id="formControlRange"  value="24" min="1" max="100" oninput="this.nextElementSibling.value = this.value">
                                                     <output>24</output><span>%</span></div>
                                                </div>
                                            </form>
                                        </div>
                                        <div>
                                            <form>
                                                
                                                <div class="form-group">
                                                    <label for="formControlRange">Acceptence Deadline</label>
                                                    <div style="display: flex;">
                                                    <input type="range" class="form-control-range" id="formControlRange"  value="24" min="1" max="100" oninput="this.nextElementSibling.value = this.value">
                                                     <output>24</output><span>h</span></div>
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