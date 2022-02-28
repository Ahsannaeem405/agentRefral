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
                    <h1>Agents</h1>
                    <p>Welcome to your stats and analytics dashboard! Here you’l see all profile stats like: Sent referrals,
                        recived referrals, approve disapprove users, graphs, and much more!</p>
                </div>
            </div>
        </div>
    </div>
    <img loading="lazy" class="img-bottom" src="{{asset('dashboard/img/group-bottom.html')}}" alt="friends" width="1087" height="148">
</div>

<div class="container">
<div class="">
     @if (session()->has('success'))

    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
        <!-- <div class="col col-xl-12 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12 pt-3"> -->
        <div class="col">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Waiting For Approval</h6>
                    <!-- <a href="#" class="more"><svg class="olymp-three-dots-icon"> -->
                    <use xlink:href="#olymp-three-dots-icon"></use>
                    </svg></a>
                </div>
                <!-- W-Action -->
                <div class="widget w-friend-pages-added notification-list friend-requests">
                    <div class="container">
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
                                        Location
                                    </th>
                                     <th class="location">
                                        Action
                                    </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                 
                                @foreach($waiting_user as $row_waiting_user)

                                 
                                <tr class="event-item">
                                    <td class="author">
                                        <div class="event-author inline-items">
                                           
                                            <div class="author-date">
                                                {{$row_waiting_user->first_name}} {{$row_waiting_user->last_name}}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="location">
                                        <div class="place inline-items">

                                            {{$row_waiting_user->email}}
                                        </div>
                                    </td>
                                    <td class="location">
                                        <div class="place inline-items">
                                            
                                         
                                            @if($row_waiting_user->get_city !=null)
                                                <span class="chat-message-item">{{$row_waiting_user->get_city->name}} </span>
                                            @endif
                                           
                                        </div>
                                    </td>
                                    <td class="location">
                                        <div class="d-flex">
                                            
                                         
                                           {{--  <span>{{$row_user->refer_user->first_name}} {{$row_user->refer_user->last_name}}</span> --}}
                                            <a href="{{url('admins/approve/agents/' .$row_waiting_user->id)}}">
                                            <button type="button" class="btn btn-success" style="margin-right: 5px;">Approve</button></a>
                                            <a href="{{url('admins/reject/agents/' .$row_waiting_user->id)}}">
                                            <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure?')">Reject</button></a>
                                                       
                                        </div>
                                    </td>



                                    
                                </tr>
                                
                               
                                @endforeach
                            </tbody>
                        </table>
                        
                        
                        
                    </div>
                </div>
                <!-- ... end W-Action -->
            </div>
        </div>
    </div>
    <div class="">
        <!-- <div class="col col-xl-12 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12 pt-3"> -->
        <div class="col">
            <div class="ui-block">
                <div class="d-flex ">
                    <div class="ui-block-title">
                        <h6 class="title">Agents</h6>
                        <!-- <a href="#" class="more"><svg class="olymp-three-dots-icon"> -->
                        <use xlink:href="#olymp-three-dots-icon"></use>
                        </svg></a>
                    </div>

                    {{-- <div class="ui-block-title d-flex align-items-end flex-column border-bottom">
                        <a data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-plus" style="font-size: 20px;color:#2f94e2"></i>
                        </a>
                    </div> --}}
                    <!-- Button trigger modal -->

                    <!-- Modal -->
                   

                </div>

                <!-- W-Action -->
                <div class="widget w-friend-pages-added notification-list friend-requests">
                    <div class="container">
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
                                        Location
                                    </th>
                                     <th class="location">
                                        Action
                                    </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                 @php $n=0; @endphp
                                 @foreach($user as $row_user)

                                 @php $n++; @endphp
                                <tr class="event-item">
                                    <td class="author">
                                        <div class="event-author inline-items">
                                           
                                            <div class="author-date">
                                                {{$row_user->first_name}} {{$row_user->last_name}}</a>
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
                                            
                                         
                                            @if($row_user->get_city !=null)
                                               {{$row_user->get_city->name}}
                                            @endif
                                           
                                        </div>
                                    </td>
                                    <td class="location">
                                        <div class="d-flex">
                                            
                                         
                                           {{--  <span>{{$row_user->refer_user->first_name}} {{$row_user->refer_user->last_name}}</span> --}}
                                           <a href="{{url('admins/agent-details/' .$row_user->id)}}">
                                        <button  class="btn btn-primary" data-toggle="" data-target="" style="margin-right: 5px;">Details</button>
                                        </a>
                                        <button  class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{$n}}" style="margin-right: 5px;">Edit</button>
                                        <a href="{{url('admins/reject/agents/' .$row_user->id)}}">
                                        <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button></a>
                                           
                                        </div>
                                    </td>



                                    
                                </tr>
                                
                               
                                @endforeach
                            </tbody>
                        </table>
                                @php $m=0; @endphp
                                @foreach($user as $row_user)
                                @php $m++; @endphp

                                    <div class="modal fade" id="exampleModal{{$m}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Agent</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ url('admins/update/' .$row_user->id) }}">
                                                    @csrf
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">First Name</label>
                                                            <input type="text" class="form-control"  name="first_name" value="{{$row_user->first_name}}">
                                                        </div>
                                                         <div class="mb-3">
                                                            <label for="" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control"  name="last_name" value="{{$row_user->last_name}}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">City</label>
                                                           

                                                            <select name="city" class="form-control"  required>
                                                              <option value="">Select City</option>
                                                              @foreach($citiy as $get_citiy)
                                                              <option value="{{$get_citiy->id}}" @if($row_user->city==$get_citiy->id) selected @endif>{{$get_citiy->name}}</option>
                                                              @endforeach
                                                            </select>
                                                        </div>
                                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                    </form>
                                                       
                                                </div>
                                                <div class="modal-footer">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                       
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