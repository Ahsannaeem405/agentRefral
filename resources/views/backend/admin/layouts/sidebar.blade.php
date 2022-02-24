<div class="fixed-sidebar left">
	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

		<a href="{{route('index')}}" class="logo" style="background-color: #3a92ff;">
			<div class="img-wrap">
				<img loading="lazy" src="{{asset('dashboard/img/dark.png')}}" alt="Olympus" width="34" height="34" style="height:40px;width:40px">
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-menu-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="">
							<use xlink:href="#olymp-menu-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="{{route('index')}}">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="">
							<use xlink:href="#olymp-newsfeed-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="{{route('agents')}}">
						<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="">
							<use xlink:href="#olymp-happy-faces-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="{{route('users')}}">
						<svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="">
							<use xlink:href="#olymp-weather-icon"></use>
						</svg>
					</a>
				</li>
			
				<li>
					<a href="{{route('cities')}}">
						<svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="">
							<use xlink:href="#olymp-cupcake-icon"></use>
						</svg>
					</a>
				</li>
				<li>
					<a href="{{route('settings')}}">
						<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="">
							<use xlink:href="#olymp-badge-icon"></use>
						</svg>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
		<a href="{{route('index')}}" class="logo" style="background-color: #38aafe;">
			<div class="img-wrap">
				<img loading="lazy" src="{{asset('dashboard/img/dark.png')}}" alt="Olympus" width="34" height="34" style="height:40px;width:65px">
			</div>
			<div class="title-block">
				<h6 class="logo-title">Agent Referrals</h6>
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
						<span class="left-menu-title">Collapse Menu</span>
					</a>
				</li>
				<li>
					<a href="{{route('index')}}">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="">
							<use xlink:href="#olymp-newsfeed-icon"></use>
						</svg>
						<span class="left-menu-title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="{{route('agents')}}">
						<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="">
							<use xlink:href="#olymp-happy-faces-icon"></use>
						</svg>
						<span class="left-menu-title">Agents</span>
					</a>
				</li>
				<li>
					<a href="{{route('users')}}">
						<svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="">
							<use xlink:href="#olymp-weather-icon"></use>
						</svg>
						<span class="left-menu-title">Users </span>
					</a>
				</li>
			
				<li>
					<a href="{{route('cities')}}">
						<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="">
							<use xlink:href="#olymp-cupcake-icon"></use>
						</svg>
						<span class="left-menu-title">Cities</span>
					</a>
				</li>
				<li>
					<a href="{{route('settings')}}">
						<svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="">
							<use xlink:href="#olymp-badge-icon"></use>
						</svg>
						<span class="left-menu-title">Settings</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar left fixed-sidebar-responsive">

	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
		<a href="#" class="logo js-sidebar-open" style="background-color: #38aafe;">
			<img loading="lazy" src="{{asset('dashboard/img/dark.png	')}}" alt="Olympus" width="26" height="26" style="height: 26px;width:30px;">
		</a>

	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
		<a href="#" class="logo" style="background-color: #38aafe;">
			<div class="img-wrap">
				<img loading="lazy" src="{{asset('dashboard/img/dark.png')}}" alt="Olympus" width="34" height="34">
			</div>
			<div class="title-block">
				<h6 class="logo-title">Summit Referrals</h6>
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="control-block">
				<div class="author-page author vcard inline-items">
					<div class="author-thumb">
						<img alt="author" src="{{asset('dashboard/img/user.jpg')}}" width="36" height="36" class="avatar">
						<span class="icon-status online"></span>
					</div>
					<a href="" class="author-name fn">
						<div class="author-title">
							John Doe <svg class="olymp-dropdown-arrow-icon">
								<use xlink:href="#olymp-dropdown-arrow-icon"></use>
							</svg>
						</div>
						<span class="author-subtitle">Admin</span>
					</a>
				</div>
			</div>

		

			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon">
							<use xlink:href="#olymp-close-icon"></use>
						</svg>
						<span class="left-menu-title">Collapse Menu</span>
					</a>
				</li>
				<li>
					<a href="{{route('index')}}">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="NEWSFEED">
							<use xlink:href="#olymp-newsfeed-icon"></use>
						</svg>
						<span class="left-menu-title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="{{route('agents')}}">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="">
							<use xlink:href="#olymp-newsfeed-icon"></use>
						</svg>
						<span class="left-menu-title">Agents</span>
					</a>
				</li>
				<li>
					<a href="{{route('users')}}">
						<svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="">
							<use xlink:href="#olymp-star-icon"></use>
						</svg>
						<span class="left-menu-title">Users </span>
					</a>
				</li>
		
				<li>
					<a href="{{route('cities')}}">
						<svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="">
							<use xlink:href="#olymp-happy-faces-icon"></use>
						</svg>
						<span class="left-menu-title">Cities</span>
					</a>
				</li>
			</ul>

		</div>
	</div>

</div>


<!-- ... end Fixed Sidebar Right -->

