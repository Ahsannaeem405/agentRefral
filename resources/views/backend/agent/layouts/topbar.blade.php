<header class="header" id="site-header">
	<div class="page-title">
		<h6>Dashboard</h6>
	</div>

	<div class="header-content-wrapper">
		<div class="control-block">
			

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
									<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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