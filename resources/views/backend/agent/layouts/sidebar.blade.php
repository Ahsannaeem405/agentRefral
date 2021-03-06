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
						
						<i class="fa fa-bars" data-toggle="tooltip" title="OPEN MENU" aria-hidden="true" style="font-size: 20px;"></i>
					</a>


				</li>
				<li>
					<a href="{{route('index1')}}">
						<i class="fa fa-suitcase" data-toggle="tooltip" title="Dashboard" style="font-size: 20px;" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href="{{route('referrals1')}}">
						<i class="fa fa-share" data-toggle="tooltip" title="Referrals" style="font-size: 20px;" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href="{{route('network')}}">
						<i class="fa fa-globe" data-toggle="tooltip" title="Network" style="font-size: 20px;" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href="{{route('settings1')}}">
						<i class="fa fa-map" data-toggle="tooltip" title="Settings" style="font-size: 20px;" aria-hidden="true"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
		<a href="{{route('index1')}}" class="logo" style="background-color: #38aafe;">
			<div class="img-wrap">
				<img loading="lazy" src="{{asset('dashboard/img/dark.png')}}" alt="Olympus" width="34" height="34" style="height:40px;width:65px">
			</div>
			<div class="title-block">
				<h6 class="logo-title">Summit Referrals</h6>
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
					<a href="{{route('index1')}}">
						<i class="fa fa-suitcase" data-toggle="tooltip" title="Dashboard" style="font-size: 20px;margin-right: 25px" aria-hidden="true"></i>
						<span class="left-menu-title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="{{route('referrals1')}}">
						<i class="fa fa-share" data-toggle="tooltip" title="Referrals" style="font-size: 20px;margin-right: 25px;" aria-hidden="true"></i>
						<span class="left-menu-title">Referrals</span>
					</a>
				</li>
				<li>
					<a href="{{route('network')}}">
						<i class="fa fa-globe" data-toggle="tooltip" title="Network" style="font-size: 20px;margin-right: 25px" aria-hidden="true"></i>
						<span class="left-menu-title">My Network</span>
					</a>
				</li>
				<li>
					<a href="{{route('settings1')}}">
						<i class="fa fa-map" data-toggle="tooltip" title="Settings" style="font-size: 20px;margin-right: 25px" aria-hidden="true"></i>
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
						<span class="author-subtitle">{{Auth::user()->first_name}}</span>
							 <svg class="olymp-dropdown-arrow-icon">
								<use xlink:href="#olymp-dropdown-arrow-icon"></use>
							</svg>
						</div>
						
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
					<a href="{{route('index1')}}">
						<i class="fa fa-suitcase" data-toggle="tooltip" title="Dashboard" style="font-size: 20px;margin-right: 25px" aria-hidden="true"></i>
						<span class="left-menu-title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="{{route('referrals1')}}">
						<i class="fa fa-share" data-toggle="tooltip" title="Referrals" style="font-size: 20px;margin-right: 25px;" aria-hidden="true"></i>
						<span class="left-menu-title">Referrals</span>
					</a>
				</li>
				<li>
					<a href="{{route('network')}}">
						<i class="fa fa-map" data-toggle="tooltip" title="Network" style="font-size: 20px;margin-right: 25px" aria-hidden="true"></i>
						<span class="left-menu-title">My Network</span>
					</a>
				</li>
				<li>
					<a href="{{route('settings1')}}">
						<i class="fa fa-cog" data-toggle="tooltip" title="Settings" style="font-size: 20px;margin-right: 25px" aria-hidden="true"></i>
						<span class="left-menu-title">Settings</span>
					</a>
				</li>
			
				
			</ul>

			

			

		

		

		</div>
	</div>

</div>


<!-- ... end Fixed Sidebar Right -->


<!-- Fixed Sidebar Right-Responsive -->

<!-- <div class="fixed-sidebar right fixed-sidebar-responsive" id="sidebar-right-responsive">

	<div class="fixed-sidebar-right sidebar--small">
		<a href="#" class="js-sidebar-open">
			<svg class="olymp-menu-icon">
				<use xlink:href="#olymp-menu-icon"></use>
			</svg>
			<svg class="olymp-close-icon">
				<use xlink:href="#olymp-close-icon"></use>
			</svg>
		</a>
	</div>

	<div class="fixed-sidebar-right sidebar--large">
		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">Close Friends</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar67-sm.html" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Carol Summers</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>

				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar62-sm.html" width="34" height="34" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Mathilda Brinker</a>
						<span class="status">AT WORK!</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>

				</li>

				<li class="inline-items js-chat-open">


					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar68-sm.html" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Carol Summers</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>


				</li>

				<li class="inline-items js-chat-open">


					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar69-sm.html" class="avatar" width="34" height="34">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Michael Maximoff</a>
						<span class="status">AWAY</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>


				</li>

				<li class="inline-items js-chat-open">


					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar70-sm.html" class="avatar" width="34" height="34">
						<span class="icon-status disconected"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Rachel Howlett</a>
						<span class="status">OFFLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>


				</li>
			</ul>


			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">MY FAMILY</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" loading="lazy" src="img/avatar64-sm.html" width="34" height="34" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Sarah Hetfield</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>
				</li>
			</ul>


			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">UNCATEGORIZED</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar71-sm.html" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Bruce Peterson</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>


				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar72-sm.html" class="avatar" width="34" height="34">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Chris Greyson</a>
						<span class="status">AWAY</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>

				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar63-sm.html" class="avatar" width="34" height="34">
						<span class="icon-status status-invisible"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Nicholas Grisom</a>
						<span class="status">INVISIBLE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>
				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar72-sm.html" class="avatar" width="34" height="34">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Chris Greyson</a>
						<span class="status">AWAY</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>
				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img loading="lazy" alt="author" src="img/avatar71-sm.html" class="avatar" width="34" height="34">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Bruce Peterson</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>

						<ul class="more-icons">
							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="START CONVERSATION" class="olymp-comments-post-icon">
									<use xlink:href="#olymp-comments-post-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon">
									<use xlink:href="#olymp-add-to-conversation-icon"></use>
								</svg>
							</li>

							<li>
								<svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon">
									<use xlink:href="#olymp-block-from-chat-icon"></use>
								</svg>
							</li>
						</ul>

					</div>
				</li>
			</ul>

		</div>

		<div class="search-friend inline-items">
			<form class="form-group">
				<input class="form-control" placeholder="Search Friends..." value="" type="text">
			</form>

			<a href="29-YourAccount-AccountSettings.html" class="settings">
				<svg class="olymp-settings-icon">
					<use xlink:href="#olymp-settings-icon"></use>
				</svg>
			</a>

			<a href="#" class="js-sidebar-open">
				<svg class="olymp-close-icon">
					<use xlink:href="#olymp-close-icon"></use>
				</svg>
			</a>
		</div>

		<a href="#" class="olympus-chat inline-items js-chat-open">

			<h6 class="olympus-chat-title">OLYMPUS CHAT</h6>
			<svg class="olymp-chat---messages-icon">
				<use xlink:href="#olymp-chat---messages-icon"></use>
			</svg>
		</a>
	</div>

</div> -->