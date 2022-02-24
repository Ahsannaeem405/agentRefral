@php
$user=Auth()->user()->id;
$notifications=App\Models\Notification::where('reciver_id',$user)->whereNull('read')->get();

//dd($notifications);
$total_notifications=$notifications->count();

@endphp
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('46cf8e097bc3b9b6141f', {
      cluster: 'us3'
    });

    var channel = pusher.subscribe('Agent_noti-development');
    channel.bind('Notification', function(data) {
      var id={{ Auth::user()->id }};
      var datay=JSON.stringify(data);
      var op=" ";
      console.log();
      if(data['id']==id){


     
        op +='<li><div class="author-thumb">'+

											
				'<img loading="lazy" src="'+data['img']+'"   width="34" height="34" alt="author">'+
											
			'</div>'+
			'<div class="notification-event">'+
				'<div><a href="	" class="h6 notification-friend">'+
							data['name']+						
						'</a>'+
												
												
				'</div>'+
			'</div>'+
			'</li>';
		
			$(".notification-list").append(op);
			var curr=$(".notification-list").attr('abc');
			++curr;
			$(".notification-list").attr('abc',curr);
			$(".count_noti").html(curr);

			
			

		}

    });
  </script>
<header class="header" id="site-header">
	<div class="page-title">
		<h6>Dashboard</h6>
	</div>
	<div class="header-content-wrapper">
		<div class="control-block">
			<div class="header-content-wrapper">
				<div class="control-block">
					<div class="control-icon more has-items">
						<svg class="olymp-thunder-icon">
							<use xlink:href="#olymp-thunder-icon"></use>
						</svg>

						@if($total_notifications>0)
						<div class="label-avatar bg-primary count_noti">{{$total_notifications}}</div>
						@else
						@endif
						<div class="more-dropdown more-with-triangle triangle-top-center">
							<div class="ui-block-title ui-block-title-small">

								<a >Notification</a>

							</div>
							<div class="mCustomScrollbar" data-mcs-theme="dark">
								<ul class="notification-list" abc="{{$total_notifications}}">
									@php $v=0; @endphp
									@foreach($notifications as $notification)
									@php $v++; @endphp
									@if($notification->read!=1)
									<li>
										@if($notification->type==1)
										<div class="author-thumb">
											@if($notification->user!=null)
											@if($notification->user->profile_image!=null)
											<img loading="lazy" src="{{asset('upload/images/'.$notification->user->profile_image)}}" width="34" height="34" alt="author">
											@else <img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" width="34" height="34" alt="author">
											@endif
											@endif
										</div>
										<div class="notification-event">
											<div><a href="{{ url('user/notification-detail', ['id'=>$notification->referral_id,'notification_id'=>$notification->id]) }}	" class="h6 notification-friend">
													@if($notification->user!=null)
													{{$notification->user->first_name}}
												  has Sent you a referral .</a>
												@endif
											</div>
										</div>
										@else
										<div class="author-thumb">

											@if($notification->user->profile_image!=null)
											<img loading="lazy" src="{{asset('upload/images/'.$notification->user->profile_image)}}" width="34" height="34" alt="author">
											@else
											<img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" width="34" height="34" alt="author">
											@endif
										</div>
										<div class="notification-event">
											<div><a href="{{ url('user/notification-detail', ['id'=>$notification->referral_id,'notification_id'=>$notification->id])}}" class="h6 notification-friend">
													@if($notification->user!=null)
													{{$notification->user->first_name}}
													@endif
													@if($notification->status == 1)
													Rejected your referral.
													@else
													Accepted your referral.
													@endif
												</a>

											</div>
										</div>
										
										@endif

									</li>
									@endif
									@endforeach
								</ul>
							</div>
							<a href="#" class="view-all bg-primary">Notifications</a>
						</div>
					</div>
				</div>
			</div>
			<div class="author-page author vcard inline-items more">
				<div class="author-thumb">
					@if(Auth()->user()->profile_image)
					<img loading="lazy" src="{{asset('upload/images/'.auth()->user()->profile_image)}}" width="34" height="34" alt="author">
					@else
					<img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" width="34" height="34" alt="author">
					@endif
					<span class="icon-status online"></span>
					<div class="more-dropdown more-with-triangle">
						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Your Account</h6>
							</div>

							<ul class="account-settings">
								<li>
									<a href="{{url('user/settings1')}}">

										<svg class="olymp-menu-icon">
											<use xlink:href="#olymp-menu-icon"></use>
										</svg>

										<span>Profile Settings</span>
									</a>
								</li>

								<li>
									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
										<svg class="olymp-logout-icon">
											<use xlink:href="#olymp-logout-icon"></use>
										</svg>
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</li>
							</ul>
						</div>

					</div>
				</div>
				<a href="{{route('index')}}" class="author-name fn">
					<div class="author-title">
						{{Auth::user()->first_name}} <svg class="olymp-dropdown-arrow-icon">
							<use xlink:href="#olymp-dropdown-arrow-icon"></use>
						</svg>
					</div>
					<span class="author-subtitle">Profile</span>
				</a>
			</div>

		</div>
	</div>

</header>

<!-- ... end Header-BP -->


<!-- Responsive Header-BP -->

<header class="header header-responsive" id="site-header-responsive">


	<div class="header-content-wrapper">
		<ul class="nav nav-tabs mobile-notification-tabs" id="mobile-notification-tabs" role="tablist">

			<li class="nav-item" role="presentation">
				<a class="nav-link" id="notification-tab" data-bs-toggle="tab" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
					<div class="control-icon has-items">
						<svg class="olymp-thunder-icon">
							<use xlink:href="#olymp-thunder-icon"></use>
						</svg>

						@if($total_notifications>0)
						<div class="label-avatar bg-primary count_noti">{{$total_notifications}}</div>
						@else
						@endif
					</div>
				</a>
			</li>
		</ul>
	</div>
	<!-- Tab panes -->
	<div class="tab-content tab-content-responsive">

		<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					
				</div>

				<ul class="notification-list">
					@foreach($notifications as $notification)
					@if($notification->read!=1)
					<li>
						@if($notification->type==1)
						<div class="author-thumb">
						@if($notification->user!=null)
							@if($notification->user->profile_image!=null)
							<img loading="lazy" src="{{asset('upload/images/'.$notification->user->profile_image)}}" width="34" height="34" alt="author">
							@else <img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" width="34" height="34" alt="author">
							@endif
							@endif
						</div>
						<div class="notification-event">
							<div><a href="{{ url('user/notification-detail', ['id'=>$notification->referral_id,'notification_id'=>$notification->id]) }}	" class="h6 notification-friend">
									@if($notification->user!=null)
									{{$notification->user->first_name}}
								has Sent you a referral .</a>
								@endif
							</div>
						</div>
						
						@else
						<div class="author-thumb">

							@if($notification->user->profile_image!=null)
							<img loading="lazy" src="{{asset('upload/images/'.$notification->user->profile_image)}}" width="34" height="34" alt="author" >
							@else
							<img loading="lazy" src="{{asset('dashboard/img/user.jpg')}}" width="34" height="34" alt="author">
							@endif
						</div>
						<div class="notification-event">
							<div><a href="{{ url('user/notification-detail', ['id'=>$notification->referral_id,'notification_id'=>$notification->id])}}" class="h6 notification-friend">
									@if($notification->user!=null)
									{{$notification->user->first_name}}
									@endif
									@if($notification->status == 1)
									has Rejected your referral.
									@else
									has Accepted your referral.
									@endif
								</a>

							</div>
						</div>
						
						@endif

					</li>
					@endif
					@endforeach
				</ul>

				<a href="#" class="view-all bg-primary">View All Notifications</a>
			</div>

		</div>

		<div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">

			<form class="search-bar w-search notification-list friend-requests">
				<div class="form-group with-button">
					<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
				</div>
			</form>

		</div>

	</div>

	<!-- ... end  Tab panes -->

</header>