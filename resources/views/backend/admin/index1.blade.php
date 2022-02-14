@extends('backend.main')
@include('backend.layouts.head')
@include('backend.layouts.topbar')
@include('backend.layouts.sidebar')
@section('content')
<div class="container" style="margin-top:80px">
	<div class="row">

		<div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Last Month Visitors
								</span>
							</div>
							<div class="count-stat">28.432
								<span class="indicator positive"> + 4.207</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Last Year Visitors
								</span>
							</div>
							<div class="count-stat">450.623
								<span class="indicator negative"> - 12.352</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Last Month Posts
								</span>
							</div>
							<div class="count-stat">16.502
								<span class="indicator positive"> + 1.056</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Last Year Posts
								</span>
							</div>
							<div class="count-stat">390.822
								<span class="indicator positive"> + 2.847</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>
<div class="pt-5">
	<div class="col col-xl-12 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12 pt-3">
		<div class="ui-block">
			<div class="ui-block-title">
				<h6 class="title">Total Agents</h6>
				<a href="#" class="more"><svg class="olymp-three-dots-icon">
						<use xlink:href="#olymp-three-dots-icon"></use>
					</svg></a>
			</div>

			<!-- W-Action -->


			<ul class="widget w-friend-pages-added notification-list friend-requests">
				<li class="inline-items p-0">
					<div class="author-thumb">
						<img loading="lazy" src="{{asset('dashboard/img/avatar38-sm.html')}}" alt="author" width="36" height="36">
					</div>
					<div class="notification-event">
						<a href="#" class="h6 notification-friend">Francine Smith</a>
						<span class="chat-message-item">8 Friends in Common</span>
					</div>

					<div class="notification-event" style="margin-left: 170px;">
						<span class="chat-message-item">8 Friends in Common</span>
					</div>
					<div class="notification-event" style="margin-left: 170px;">
						<span class="chat-message-item">8 Friends in Common</span>
					</div>
					<div class="notification-event" style="margin-left: 170px;">
						<button type="button" class="btn btn-success mt-3">Send Referrals</button>
					</div>
				</li>
				<li class="inline-items p-0">
					<div class="author-thumb">
						<img loading="lazy" src="{{asset('dashboard/img/avatar38-sm.html')}}" alt="author" width="36" height="36">
					</div>
					<div class="notification-event">
						<a href="#" class="h6 notification-friend">Francine Smith</a>
						<span class="chat-message-item">8 Friends in Common</span>
					</div>

					<div class="notification-event" style="margin-left: 170px;">
						<span class="chat-message-item">8 Friends in Common</span>
					</div>
					<div class="notification-event" style="margin-left: 170px;">
						<span class="chat-message-item">8 Friends in Common</span>
					</div>
					<div class="notification-event" style="margin-left: 170px;">
						<button type="button" class="btn btn-success mt-3">Send Referrals</button>
					</div>
				</li>
			</ul>



			<!-- ... end W-Action -->
		</div>



	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col col-lg-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title">Monthly Bar Graphic</div>
					<select class="form-select form-control without-border">
						<option value="LY">LAST YEAR (2016)</option>
						<option value="CUR">CURRENT YEAR (2017)</option>
					</select>
					<a href="#" class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>
					</a>
				</div>

				<div class="ui-block-content">

					<!----------------------------------------- ONE-BAR-CHART ----------------------------------------->

					<div class="chart-js chart-js-one-bar">
						<canvas id="one-bar-chart" width="1400" height="380"></canvas>
					</div>

					<!--
						JS libraries for ONE-BAR-CHART:
						js/libs/Chart.min.js
						js/libs/chartjs-plugin-deferred.min.js
						js/libs/loader.min.js
					 -->


					<!-- JS-init for ONE-BAR-CHART: js/libs/run-chart.min.js -->

					<!-------------------------------------- ... end ONE-BAR-CHART ------------------------------------>

				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mb-3">
			<div class="ui-block responsive-flex h-100 mb-0">
				<div class="ui-block-title">
					<div class="h6 title">Lines Graphic</div>

					<div class="points align-right">

						<span>
							<span class="statistics-point bg-yellow"></span>
							THIS YEAR
						</span>

						<span>
							<span class="statistics-point bg-primary"></span>
							LAST YEAR
						</span>

					</div>

					<select class="form-select form-control without-border">
						<option value="CUR">LAST 3 MONTH</option>
						<option value="LY">LAST YEAR (2016)</option>
					</select>

					<a href="#" class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>
					</a>

				</div>

				<div class="ui-block-content">

					<!----------------------------------------- LINE-GRAPHIC-CHART ------------------------------------>

					<div class="chart-js chart-js-line-graphic">
						<canvas id="line-graphic-chart" width="730" height="300"></canvas>
					</div>

					<!--
						JS libraries for LINE-GRAPHIC-CHART:
						js/libs/Chart.min.js
						js/libs/chartjs-plugin-deferred.min.js
						js/libs/loader.min.js
					 -->


					<!-- JS-init for LINE-GRAPHIC-CHART: js/libs/run-chart.min.js -->

					<!--------------------------------- ... end LINE-GRAPHIC-CHART ------------------------------------>

				</div>

			</div>
		</div>
		<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
			<div class="ui-block h-100 mb-0">
				<div class="ui-block-title">
					<div class="h6 title">Colors Pie Chart</div>
					<a href="#" class="more">
						<svg class="olymp-three-dots-icon">
							<use xlink:href="#olymp-three-dots-icon"></use>
						</svg>
					</a>
				</div>
				<div class="ui-block-content">
					<div class="chart-with-statistic">
						<ul class="statistics-list-count">
							<li>
								<div class="points">
									<span>
										<span class="statistics-point bg-purple"></span>
										Status Updates
									</span>
								</div>
								<div class="count-stat">8.247</div>
							</li>
							<li>
								<div class="points">
									<span>
										<span class="statistics-point bg-breez"></span>
										Multimedia
									</span>
								</div>
								<div class="count-stat">5.630</div>
							</li>
							<li>
								<div class="points">
									<span>
										<span class="statistics-point bg-primary"></span>
										Shared Posts
									</span>
								</div>
								<div class="count-stat">1.498</div>
							</li>
							<li>
								<div class="points">
									<span>
										<span class="statistics-point bg-yellow"></span>
										Blog Posts
									</span>
								</div>
								<div class="count-stat">1.136</div>
							</li>
						</ul>

						<!---------------------------------------- PIE-COLOR-CHART ------------------------------------>

						<div class="chart-js chart-js-pie-color">
							<canvas id="pie-color-chart" width="180" height="180"></canvas>
							<div class="general-statistics">16.502
								<span>Last Month Posts</span>
							</div>
						</div>

						<!--
							JS libraries for PIE-COLOR-CHART:
							js/libs/Chart.min.js
							js/libs/chartjs-plugin-deferred.min.js
							js/libs/loader.min.js
						 -->


						<!-- JS-init for PIE-COLOR-CHART: js/libs/run-chart.min.js -->

						<!--------------------------------- ... end PIE-COLOR-CHART ----------------------------------->

					</div>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection