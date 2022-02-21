@php
$user=Auth()->user()->id;
$notifications=App\Models\Notification::where('reciver_id',$user)->get();
$notifications2=App\Models\Notification::where('sender_id',$user)->get();

@endphp

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

						<div class="label-avatar bg-primary">8</div>

						<div class="more-dropdown more-with-triangle triangle-top-center">
							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Notifications</h6>
								<a href="#">Mark all as read</a>
								<a href="#">Settings</a>
							</div>

							<div class="mCustomScrollbar" data-mcs-theme="dark">
								<ul class="notification-list">
									@foreach($notifications as $notification)
									<li>
										<div class="author-thumb">
											<img loading="lazy" src="img/avatar62-sm.html" width="34" height="34" alt="author">
										</div>
										<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">{{$notification->user->first_name}}</a>
									<!-- @if($notification->status == 0) -->
									has Sent you a referral .
									<!-- @elseif($notification->status == 1)
									has Rejected your  referral .

									@else
									has Accepted your  referral . -->
									@endif
								
								</div>
								
											<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
										</div>
										<span class="notification-icon">
											<svg class="olymp-comments-post-icon">
												<use xlink:href="#olymp-comments-post-icon"></use>
											</svg>
										</span>
										<div class="more">
											<svg class="olymp-three-dots-icon">
												<use xlink:href="#olymp-three-dots-icon"></use>
											</svg>
											<svg class="olymp-little-delete">
												<use xlink:href="#olymp-little-delete"></use>
											</svg>
										</div>
									</li>
									@endforeach
								
								</ul>
							</div>

							<a href="#" class="view-all bg-primary">View All Notifications</a>
						</div>
					</div>



				</div>
			</div>

			<div class="author-page author vcard inline-items more">
				<div class="author-thumb">
					<img alt="author" src="{{asset('dashboard/img/user.jpg')}}" width="36" height="36" class="avatar">
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



	<!-- Tab panes -->

	<!-- ... end  Tab panes -->

</header>