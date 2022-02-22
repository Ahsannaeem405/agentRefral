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
                    <h1>Users</h1>
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
            <div class="ui-block ui-block2">
                <div class="ui-block-title">
                    <h6 class="title">User </h6>
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
                                    Phone
                                </th>
                                 <th class="location">
                                    Add By
                                </th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @php $l=0; @endphp
                            @foreach($user as $row_user)

                            @php $l++ @endphp
                            <tr class="event-item">
                                <td class="author">
                                    <div class="event-author inline-items">
                                        <div class="author-thumb">
                                            <img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" alt="author" width="36" height="36">
                                        </div>
                                        <div class="author-date">
                                            {{$row_user->name}}</a>
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
                                        
                                     
                                        <span>{{$row_user->phone}} </span>
                                       
                                    </div>
                                </td>
                                  <td class="location">
                                    <div class="place inline-items">
                                        
                                       @if($row_user->refer_user!=null)
                                        <span>{{$row_user->refer_user->first_name}} {{$row_user->refer_user->last_name}}</span>
                                       @endif
                                    </div>
                                </td>



                                
                            </tr>
                           
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="widget w-friend-pages-added notification-list friend-requests">
                    <div class="container">




                    </div>
                </div>
            </div>
            <!-- ... end W-Action -->
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
