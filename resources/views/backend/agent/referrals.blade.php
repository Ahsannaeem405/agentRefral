@extends('backend.agent.main')
@section('css')


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />


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
        <div class="col">
            <div class="ui-block">
                <div class="m-3">
                    <select class="loction js-example-basic-single" name="refer_id" style="width: 200px; margin-top: 7px;">
                        @foreach($citiy as $row_citiy)
                        <option value="{{$row_citiy->id}}">{{$row_citiy->name}} </option>
                        @endforeach

                    </select>
                </div>
            </div>
        </div>
        <!-- <div class="col col-xl-12 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12 pt-3"> -->
        <div class="col">
            <div class="ui-block ui-block2">
                <div class="ui-block-title">
                    <h6 class="title">Referrals </h6>
                    <!-- <a href="#" class="more"><svg class="olymp-three-dots-icon"> -->
                    <use xlink:href="#olymp-three-dots-icon"></use>
                    </svg></a>
                </div>
                <!-- W-Action -->
                <div class="ui-block">


                    <table class="event-item-table event-item-table-fixed-width " id="">

                        <thead>

                            <tr>

                                <th class="author">
                                    Name
                                </th>
                                <th class="author">
                                    Email
                                </th>
                                <th class="location">
                                    City
                                </th>

                                <th class="location">
                                    Tier
                                </th>
                                <th class="add-event">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $l=0; @endphp
                            @php $q=0; @endphp
                            @foreach ($user as $key => $value_k)

                            @php
                            $orders2 =collect($value_k);
                            $max_gold_id = $orders2->max('get_refrral_count');
                            $gold=$orders2->where('get_refrral_count','=',$max_gold_id);

                            $silver_gold=$orders2->where('get_refrral_count','<',$max_gold_id); $silver_gold=collect($silver_gold); $silver_gold_id=$silver_gold->max('get_refrral_count');
                                $silver=$orders2->where('get_refrral_count','=',$silver_gold_id);
                                $bronze=$orders2->where('get_refrral_count','<',$silver_gold_id); @endphp
                                @if($max_gold_id!=0)
                                    @foreach ($gold as $key=> $row_user)
                                    @php $l++ @endphp
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
                                                @if($row_user->get_city!=null)
                                                <span>{{$row_user->get_city->name}}
                                                    @endif
                                                </span>

                                            </div>
                                        </td>
                                        <td class="location">
                                            <div class="place inline-items">

                                                Gold
                                            </div>
                                        </td>



                                        <td class="add-event">
                                            @if($my_badge==1)
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{$l}}">Send Referrals</button>
                                            @else
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{$l}}" disabled>Send Referrals</button>
                                            @endif
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal{{$l}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Referral Request</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ url('user/add/referral') }}">
                                                        @csrf
                                                        <input type="hidden" value="{{Auth()->user()->id}}" name="sender_id">
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
                                                        <style type="text/css">
                                                            .active {
                                                                color: #000 !important;
                                                                background-color: #08ddc1 !important;
                                                                border-color: #08ddc1 !important;

                                                            }
                                                        </style>
                                                        <div class="container mt-3">
                                                            <div class="d-flex">
                                                                <button type="button" class="btn btyn active" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Buyer">
                                                                    Buyer
                                                                </button>
                                                                <button type="button" class="btn  btyn" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Seller">
                                                                    Seller
                                                                </button>
                                                                <button type="button" class="btn  btyn" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Tenant">
                                                                    Tenant
                                                                </button>
                                                                <button type="button" class="btn  btyn" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Landlord">
                                                                    Landlord
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <input type="hidden" class="btyn_value" name="type" value="Buyer">
                                                            <input type="hidden" name="reciver_id" value="{{$row_user->id}}">

                                                            <div class="form-group">
                                                                <label for="formControlRange">Referral Fee</label>
                                                                <div style="display: flex;">
                                                                    <input id="rangeInput" type="range" min="0" value="24" max="99" oninput="amount.value=rangeInput.value" />
                                                                    <input id="amount" type="text" value="24" min="0" name="profit" max="99" oninput="rangeInput.value=amount.value" readonly style="width: 62px;border: none;">
                                                                    <span style="margin-top: 4%;margin-left: -6%;">%</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div>


                                                            <div class="form-group">
                                                                <label for="formControlRange">Acceptence Deadline</label>
                                                                <div style="display: flex;">
                                                                    <input id="rangeInput2" type="range" min="0" value="24" max="99" oninput="amount2.value=rangeInput2.value" />
                                                                    <input id="amount2" name="timeout" type="text" value="24" min="0" max="99" oninput="rangeInput2.value=amount2.value" readonly style="width: 62px;border: none;">
                                                                    <span style="margin-top: 4%;margin-left: -6%;">h</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="">Min </label>
                                                                    <input type="number" name="min" placeholder="Min Range" Required>
                                                                </div>
                                                                <div class="col">
                                                                    <label for="">Max </label>
                                                                    <input type="number" name="max" placeholder="Max Range" Required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="">Notes</label>
                                                            <input type="text" placeholder="Write a Message" name="notes" Required>
                                                        </div>
                                                        <p>0/3000</p>
                                                        <div class="row">
                                                            <p>Select a client From Your Database or Create a new client</p>
                                                            <div class="col d-flex align-items-center">
                                                                <input type="radio" name="contact" class="w-25 from-database" value="1" checked><span>Select from database</span>
                                                            </div>
                                                            <div class="col d-flex align-items-center">
                                                                <input type="radio" name="contact" class="w-25 new-contact" value="2"><span>Create a new New Contact</span>
                                                            </div>

                                                        </div>
                                                        <div class="mt-3">
                                                            <select class="database" name="refer_id" style=" margin-top: 7px;
                                                            
                                                             display:none" required>
                                                                <option value="">
                                                                    Please Select a User
                                                                </option>
                                                                @foreach($ref_user as $row_ref_user)
                                                                <option value="{{$row_ref_user->id}}">{{$row_ref_user->name}} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="container">
                                                            <div class="row d-flex justify-content-end contact d-none" style="display:none">
                                                                <div class="mt-3">
                                                                    <label for="">Name</label>
                                                                    <input type="text" placeholder="Write a Name" name="name" class="name" required>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <label for="">Email</label>
                                                                    <input type="text" placeholder="Write a Email" name="email" class="email" required>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <label for="">Phone</label>
                                                                    <input type="text" placeholder="Write a Phone" name="phone" class="phone" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-5 text-end">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-primary" id="sendreferral">Send</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   @endforeach
                                   @php $k=0; @endphp
                                   @foreach ($silver as $key => $row_user)
                                    @php $k++ @endphp
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
                                                @if($row_user->get_city!=null)
                                                <span>{{$row_user->get_city->name}}
                                                    @endif
                                                </span>

                                            </div>
                                        </td>
                                        <td class="location">
                                            <div class="place inline-items">

                                                Silver
                                            </div>
                                        </td>




                                        <td class="add-event">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{$k}}">Send Referrals</button>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal{{$l}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Referral Request</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ url('user/add/referral') }}">
                                                        @csrf
                                                        <input type="hidden" value="{{Auth()->user()->id}}" name="sender_id">
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
                                                        <style type="text/css">
                                                            .active {
                                                                color: #000 !important;
                                                                background-color: #08ddc1 !important;
                                                                border-color: #08ddc1 !important;

                                                            }
                                                        </style>
                                                        <div class="container mt-3">
                                                            <div class="d-flex">
                                                                <button type="button" class="btn btyn active" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Buyer">
                                                                    Buyer
                                                                </button>
                                                                <button type="button" class="btn  btyn" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Seller">
                                                                    Seller
                                                                </button>
                                                                <button type="button" class="btn  btyn" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Tenant">
                                                                    Tenant
                                                                </button>
                                                                <button type="button" class="btn  btyn" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Landlord">
                                                                    Landlord
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <input type="hidden" class="btyn_value" name="type" value="Buyer">
                                                            <input type="hidden" name="reciver_id" value="{{$row_user->id}}">

                                                            <div class="form-group">
                                                                <label for="formControlRange">Referral Fee</label>
                                                                <div style="display: flex;">
                                                                    <input id="rangeInput" type="range" min="0" value="24" max="99" oninput="amount.value=rangeInput.value" />
                                                                    <input id="amount" type="text" value="24" min="0" name="profit" max="99" oninput="rangeInput.value=amount.value" readonly style="width: 62px;border: none;">
                                                                    <span style="margin-top: 4%;margin-left: -6%;">%</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div>


                                                            <div class="form-group">
                                                                <label for="formControlRange">Acceptence Deadline</label>
                                                                <div style="display: flex;">
                                                                    <input id="rangeInput2" type="range" min="0" value="24" max="99" oninput="amount2.value=rangeInput2.value" />
                                                                    <input id="amount2" name="timeout" type="text" value="24" min="0" max="99" oninput="rangeInput2.value=amount2.value" readonly style="width: 62px;border: none;">
                                                                    <span style="margin-top: 4%;margin-left: -6%;">h</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="">Min </label>
                                                                    <input type="number" name="min" placeholder="Min Range">
                                                                </div>
                                                                <div class="col">
                                                                    <label for="">Max </label>
                                                                    <input type="number" name="max" placeholder="Max Range">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="">Notes</label>
                                                            <input type="text" placeholder="Write a Message" name="notes">
                                                        </div>
                                                        <p>0/3000</p>
                                                        <div class="row">
                                                            <p>Select a client From Your Database or Create a new client</p>
                                                            <div class="col d-flex align-items-center">
                                                                <input type="radio" name="contact" class="w-25 from-database" value="1" checked><span>Select from database</span>
                                                            </div>
                                                            <div class="col d-flex align-items-center">
                                                                <input type="radio" name="contact" class="w-25 new-contact" value="2"><span>Create a new New Contact</span>
                                                            </div>

                                                        </div>
                                                        <div class="mt-3">
                                                            <select class="database" name="refer_id" style=" margin-top: 7px;
                                                            
                                                             display:none" required>
                                                               <option value="">
                                                                    Please Select a User
                                                                </option>
                                                                @foreach($ref_user as $row_ref_user)
                                                                <option value="{{$row_ref_user->id}}">{{$row_ref_user->name}} </option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                        <div class="container">
                                                            <div class="row d-flex justify-content-end contact d-none" style="display:none">
                                                                <div class="mt-3">
                                                                    <label for="">Name</label>
                                                                    <input type="text" placeholder="Write a Name" name="name" class="name" required>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <label for="">Email</label>
                                                                    <input type="text" placeholder="Write a Email" name="email" class="email" required>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <label for="">Phone</label>
                                                                    <input type="text" placeholder="Write a Phone" name="phone" class="phone" required>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="mt-5 text-end">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-primary" id="sendreferral">Send</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                    @php $p=0; @endphp
                                    @foreach ($bronze as $key => $row_user)
                                    @php $p++ @endphp
                                    <tr class="event-item">
                                        <td class="author">
                                            <div class="event-author inline-items">
                                                <div class="author-thumb">
                                                    <img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" alt="author" width="36" height="36">
                                                </div>
                                                <div class="author-date">
                                                    {{$row_user->first_name}} Sliver</a>
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
                                                @if($row_user->get_city!=null)
                                                <span>{{$row_user->get_city->name}}
                                                    @endif
                                                </span>

                                            </div>
                                        </td>
                                        <td class="location">
                                            <div class="place inline-items">

                                                Bronze
                                            </div>
                                        </td>




                                        <td class="add-event">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{$p}}">Send Referrals</button>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal{{$l}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Referral Request</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ url('user/add/referral') }}">
                                                        @csrf
                                                        <input type="hidden" value="{{Auth()->user()->id}}" name="sender_id">
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
                                                        <style type="text/css">
                                                            .active {
                                                                color: #000 !important;
                                                                background-color: #08ddc1 !important;
                                                                border-color: #08ddc1 !important;

                                                            }
                                                        </style>
                                                        <div class="container mt-3">
                                                            <div class="d-flex">
                                                                <button type="button" class="btn btyn active" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Buyer">
                                                                    Buyer
                                                                </button>
                                                                <button type="button" class="btn  btyn" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Seller">
                                                                    Seller
                                                                </button>
                                                                <button type="button" class="btn  btyn" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Tenant">
                                                                    Tenant
                                                                </button>
                                                                <button type="button" class="btn  btyn" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Landlord">
                                                                    Landlord
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <input type="hidden" class="btyn_value" name="type" value="Buyer">
                                                            <input type="hidden" name="reciver_id" value="{{$row_user->id}}">

                                                            <div class="form-group">
                                                                <label for="formControlRange">Referral Fee</label>
                                                                <div style="display: flex;">
                                                                    <input id="rangeInput" type="range" min="0" value="24" max="99" oninput="amount.value=rangeInput.value" />
                                                                    <input id="amount" type="text" value="24" min="0" name="profit" max="99" oninput="rangeInput.value=amount.value" readonly style="width: 62px;border: none;">
                                                                    <span style="margin-top: 4%;margin-left: -6%;">%</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div>


                                                            <div class="form-group">
                                                                <label for="formControlRange">Acceptence Deadline</label>
                                                                <div style="display: flex;">
                                                                    <input id="rangeInput2" type="range" min="0" value="24" max="99" oninput="amount2.value=rangeInput2.value" />
                                                                    <input id="amount2" name="timeout" type="text" value="24" min="0" max="99" oninput="rangeInput2.value=amount2.value" readonly style="width: 62px;border: none;">
                                                                    <span style="margin-top: 4%;margin-left: -6%;">h</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="">Min </label>
                                                                    <input type="number" name="min" placeholder="Min Range">
                                                                </div>
                                                                <div class="col">
                                                                    <label for="">Max </label>
                                                                    <input type="number" name="max" placeholder="Max Range">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="">Notes</label>
                                                            <input type="text" placeholder="Write a Message" name="notes">
                                                        </div>
                                                        <p>0/3000</p>
                                                        <div class="row">
                                                            <p>Select a client From Your Database or Create a new client</p>
                                                            <div class="col d-flex align-items-center">
                                                                <input type="radio" name="contact" class="w-25 from-database" value="1" checked><span>Select from database</span>
                                                            </div>
                                                            <div class="col d-flex align-items-center">
                                                                <input type="radio" name="contact" class="w-25 new-contact" value="2"><span>Create a new New Contact</span>
                                                            </div>

                                                        </div>
                                                        <div class="mt-3">
                                                            <select class="database" name="refer_id" style=" margin-top: 7px;
                                                                
                                                                 display:none" required>
                                                                   <option value="">
                                                                    Please Select a User
                                                                </option>
                                                                @foreach($ref_user as $row_ref_user)
                                                                <option value="{{$row_ref_user->id}}">{{$row_ref_user->name}} </option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                        <div class="container">
                                                            <div class="row d-flex justify-content-end contact d-none" style="display:none">
                                                                <div class="mt-3">
                                                                    <label for="">Name</label>
                                                                    <input type="text" placeholder="Write a Name" name="name" class="name" required>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <label for="">Email</label>
                                                                    <input type="text" placeholder="Write a Email" name="email" class="email" required>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <label for="">Phone</label>
                                                                    <input type="text" placeholder="Write a Phone" name="phone" class="phone" required>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="mt-5 text-end">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-primary">Send</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @else
                                    
                                    @foreach ($value_k as $key => $row_user)
                                    @php $q++ @endphp
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
                                                @if($row_user->get_city!=null)
                                                <span>{{$row_user->get_city->name}}
                                                    @endif
                                                </span>

                                            </div>
                                        </td>
                                        <td class="location">
                                            <div class="place inline-items">

                                                Gold
                                            </div>
                                        </td>



                                        <td class="add-event">
                                            @if($my_badge==1)
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{$q}}">Send Referrals</button>
                                            @else
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{$q}}" disabled>Send Referrals</button>
                                            @endif

                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal{{$q}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Referral Request</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ url('user/add/referral') }}">
                                                        @csrf
                                                        <input type="hidden" value="{{Auth()->user()->id}}" name="sender_id">
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
                                                        <style type="text/css">
                                                            .active {
                                                                color: #000 !important;
                                                                background-color: #08ddc1 !important;
                                                                border-color: #08ddc1 !important;

                                                            }
                                                        </style>
                                                        <div class="container mt-3">
                                                            <div class="d-flex">
                                                                <button type="button" class="btn btyn active" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Buyer">
                                                                    Buyer
                                                                </button>
                                                                <button type="button" class="btn  btyn" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Seller">
                                                                    Seller
                                                                </button>
                                                                <button type="button" class="btn  btyn" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Tenant">
                                                                    Tenant
                                                                </button>
                                                                <button type="button" class="btn  btyn" style="width: 100px;margin-right:2px;background-color:#fff;border-color:gray;color: #515365;" val="Landlord">
                                                                    Landlord
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <input type="hidden" class="btyn_value" name="type" value="Buyer">
                                                            <input type="hidden" name="reciver_id" value="{{$row_user->id}}">

                                                            <div class="form-group">
                                                                <label for="formControlRange">Referral Fee</label>
                                                                <div style="display: flex;">
                                                                    <input id="rangeInput" type="range" min="0" value="24" max="99" oninput="amount.value=rangeInput.value" />
                                                                    <input id="amount" type="text" value="24" min="0" name="profit" max="99" oninput="rangeInput.value=amount.value" readonly style="width: 62px;border: none;">
                                                                    <span style="margin-top: 4%;margin-left: -6%;">%</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div>


                                                            <div class="form-group">
                                                                <label for="formControlRange">Acceptence Deadline</label>
                                                                <div style="display: flex;">
                                                                    <input id="rangeInput2" type="range" min="0" value="24" max="99" oninput="amount2.value=rangeInput2.value" />
                                                                    <input id="amount2" name="timeout" type="text" value="24" min="0" max="99" oninput="rangeInput2.value=amount2.value" readonly style="width: 62px;border: none;">
                                                                    <span style="margin-top: 4%;margin-left: -6%;">h</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="">Min </label>
                                                                    <input type="number" name="min" placeholder="Min Range">
                                                                </div>
                                                                <div class="col">
                                                                    <label for="">Max </label>
                                                                    <input type="number" name="max" placeholder="Max Range">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="">Notes</label>
                                                            <input type="text" placeholder="Write a Message" name="notes">
                                                        </div>
                                                     
                                                        <div class="row">
                                                            <p>Select a client From Your Database or Create a new client</p>
                                                            <div class="col d-flex align-items-center">
                                                                <input type="radio" name="contact" class="w-25 from-database" value="1" checked><span>Select from database</span>
                                                            </div>
                                                            <div class="col d-flex align-items-center">
                                                                <input type="radio" name="contact" class="w-25 new-contact" value="2"><span>Create a new New Contact</span>
                                                            </div>

                                                        </div>
                                                        <div class="mt-3">
                                                            <select class="database" name="refer_id" style=" margin-top: 7px;
                                                                
                                                                 display:none">
                                                                   <option value="">
                                                                    Please Select a User
                                                                </option>
                                                                @foreach($ref_user as $row_ref_user)
                                                                <option value="{{$row_ref_user->id}}">{{$row_ref_user->name}} </option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                        <div class="container">
                                                            <div class="row d-flex justify-content-end contact d-none" style="display:none">
                                                                <div class="mt-3">
                                                                    <label for="">Name</label>
                                                                    <input type="text" placeholder="Write a Name" name="name" class="name" required>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <label for="">Email</label>
                                                                    <input type="text" placeholder="Write a Email" name="email" class="email" required>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <label for="">Phone</label>
                                                                    <input type="text" placeholder="Write a Phone" name="phone" class="phone" required>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="mt-5 text-end">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-primary">Send</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif

                                    @endforeach

                        </tbody>
                    </table>

                </div>

            </div>
            <!-- ... end W-Action -->
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
    $(document).ready(function() {


        $(".from-database").click(function() {

            $('.database').show();
            $('.contact').addClass("d-none");
            $(".from-database").attr("required", true);
            $(".new-contact").attr("required", false);
            $(".name").attr("required", false);
            $(".email").attr("required", false);
            $(".phone").attr("required", false);


        });
        $(".new-contact").click(function() {
            $('.database').hide();
            $('.contact').removeClass("d-none");
            $(".new-contact").attr("required", true);
            $(".from-database").attr("required", false);
            $(".database").attr("required", false);
        });
       

        $(".btyn").click(function() {

            var data = $(this).attr('val');
            $(".btyn").removeClass("active")
            $(this).addClass("active");
            $(".btyn_value").val(data);

        });
        $(document).on('change', '.loction', function() {
            var id = $('.loction').val();

            var csrf = document.querySelector('meta[name="csrf-token"]').content;

            $.ajax({

                type: 'post',
                url: '{{URL::to('/user/loc_referrals ')}}',
                data: {
                    'id': id,
                    '_token': csrf
                },
                success: function(datas) {

                    $(".ui-block2").empty();
                    $(".ui-block2").append(datas);


                },
            });


        });

    });
</script>
<script>

</script>
</div>
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