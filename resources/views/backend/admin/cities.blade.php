@extends('backend.admin.main')
@include('backend.admin.layouts.head')
@include('backend.admin.layouts.topbar')
@include('backend.admin.layouts.sidebar')
@section('css')
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
@endsection
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
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="city" placeholder="ex. Washington">
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
                   
                    <div class="ui-block">
                        <table class="event-item-table " id="example">
                            <thead>
                                <tr>
                                    <td class="">
                                       <strong> Name</strong>
                                    </td>
                                    <td class="">
                                        <strong> Action</strong>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @php $m=0; @endphp
                                @foreach($user as $row_user)
                                @php $m++ @endphp
                                                
                                                    
                                                       
                                    <tr class="event-item">
                                        <td class="author">
                                            <div class="event-author inline-items">
                                               
                                                <div class="author-date">
                                                    {{$row_user->name}}
                                                </div>
                                            </div>
                                        </td>
                                    
                            
                                        <td class="add-event" style="text-align: left;">
                                            
                                            <i class="fa fa-edit" data-target="#exampleModaledit{{$m}}" data-toggle="modal" style="font-size:20px;color:red;"></i>


                                            <a href="{{url('admins/cities/delete/' .$row_user->id)}}">
                                                <i class="fa fa-trash" aria-hidden="true" style="font-size:20px;color:red;"></i>

                                            </a>
                                        </td>
                                    </tr>
                                        <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModaledit{{$m}}" role="dialog" tabindex="-1">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            Update City
                                                        </h5>
                                                      
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ url('admins/cities/update/'.$row_user->id) }}" method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label class="form-label" for="exampleInputEmail1">
                                                                    City
                                                                </label>
                                                                <input aria-describedby="emailHelp" class="form-control" id="exampleInputEmail1" name="city" type="text" value="{{$row_user->name}}">
                                                                </input>
                                                            </div>
                              
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" data-dismiss="modal" type="button">
                                                            Close
                                                        </button>
                                                        <button type="submit" class="btn btn-success" type="submit">
                                                            Update 
                                                        </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var webpMachine = new webpHero.WebpMachine()
            webpMachine.polyfillDocument()
        });
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</div>
@endsection
@section('js')
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js
"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
@endsection

