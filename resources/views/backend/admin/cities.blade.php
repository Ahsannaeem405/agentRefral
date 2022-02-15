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
                    <h1>Cities</h1>
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

   
   @if (session()->has('success'))

    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif


        <!-- <div class="col col-xl-12 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12 pt-3"> -->
        <div class="col">
            <div class="ui-block">
                <div class="d-flex ">
                    <div class="ui-block-title">
                        <h6 class="title">Cities</h6>
                        <!-- <a href="#" class="more"><svg class="olymp-three-dots-icon"> -->
                        <use xlink:href="#olymp-three-dots-icon"></use>
                        </svg></a>
                    </div>

                    <div class="ui-block-title d-flex align-items-end flex-column border-bottom">
                        <a data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-plus" style="font-size: 20px;color:#2f94e2"></i>
                        </a>
                    </div>
                    <!-- Button trigger modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Ctiy</h5>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ url('admins/add/cities') }}">
                                  @csrf
            
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">City</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="city">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- W-Action -->
                <div class="widget w-friend-pages-added notification-list friend-requests">
                    <div class="container">
                    @php $m=0; @endphp
                    @foreach($user as $row_user)
                     @php $m++ @endphp
                        <div class="inline-items p-0 d-flex justify-content-between mt-3">
                            <div class="d-flex">

                                <div class="notification-event d-flex align-items-center">
                                    <!-- <a href="#" class="h6 notification-friend">Francine Smith</a> -->
                                    <span class="chat-message-item" style="margin-right: 5px;font-size:20px;">{{$m}} </span>
                                    <span class="chat-message-item" style="font-size:20px;">{{$row_user->name}} </span>
                                </div>
                            </div>
                            <div class="notification-event d-flex align-items-center" style="">
                                <button data-toggle="modal" data-target="#exampleModaledit{{$m}}" class="btn btn-primary" style="margin-right: 5px;width:80px">Edit</button>
                                <a href="{{url('admins/cities/delete/' .$row_user->id)}}">
                                <button type="button" class="btn btn-danger">Delete</button></a>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModaledit{{$m}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Ctiy</h5>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ url('admins/cities/update/' .$row_user->id) }}">
                                  @csrf
            
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">City</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="city" value="{{$row_user->name}}">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                    </form>
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