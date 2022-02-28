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
					<h1>Settings</h1>
					<p>Welcome to your stats and analytics dashboard! Here you’l see all profile stats like: Sent referrals,
                        recived referrals, approve disapprove users, graphs, and much more!</p>
				</div>
			</div>
		</div>
	</div>
	<img loading="lazy" class="img-bottom" src="{{asset('dashboard/img/group-bottom.html')}}" alt="friends" width="1087" height="148">
</div>


<!-- ... end Responsive Header-BP -->
<div class="header-spacer header-spacer-small"></div>

<!-- Main Header Account -->



<!-- ... end Main Header Account -->


<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Personal Information</h6>
				</div>
				<div class="ui-block-content">

					@if (session()->has('success'))
					<div class="alert alert-success">
						{{ session()->get('success') }}
					</div>
					@endif
					<!-- Personal Information Form  -->

					<form method="post" action="{{ url('admins/personal-information')}}" enctype='multipart/form-data'>
						@csrf
						<input class="form-control" placeholder="" name="agent_id" type="hidden" value="{{Auth()->user()->id}}">
						<div class="row">
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">First Name</label>
									<input class="form-control" placeholder="" name="first_name" type="text" value="{{Auth()->user()->first_name}}">
								</div>

								<div class="form-group label-floating">
									<label class="control-label">Your Email</label>
									<input class="form-control" placeholder="" name="email" type="email" value="{{Auth()->user()->email}}">
								</div>


							</div>

							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Last Name</label>
									<input class="form-control" placeholder="" name="last_name" type="text" value="{{Auth()->user()->last_name}}">
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Your Phone Number</label>
									<input class="form-control" placeholder="" type="text" name="phone_number" value="{{Auth()->user()->phone_number}}">
								</div>

							</div>




							<div class="col col-lg-6 col-md-3 col-sm-12 col-12">

								<div class="form-group label-floating is-select">
									<label class="control-label">Your Gender</label>
									<select class="form-select" name="gender">
										<option value="{{auth()->user()->gender}}">{{Auth()->user()->gender}}</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>


							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">


								<div class="form-group label-floating is-select">
									<input class="form-control" placeholder="" type="file" name="file">


								</div>



							</div>



							<div class="col col-lg-12 col-md-6 col-sm-12 col-12">
								<button type="submit" class="btn btn-primary btn-lg full-width">Save all Changes</button>
							</div>

						</div>
					</form>

					<!-- ... end Personal Information Form  -->
				</div>
			</div>
		</div>

		<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12 responsive-display-none">
			<div class="ui-block">

				<!-- Your Profile  -->

				<div class="your-profile">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Your PROFILE</h6>
					</div>

					<div class="accordion" id="accordionExample1">
						<div class="accordion-item">
							<h6 class="accordion-header" id="headingOne1">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
									Profile Settings
									<svg class="olymp-dropdown-arrow-icon">
										<use xlink:href="#olymp-dropdown-arrow-icon"></use>
									</svg>
								</button>
							</h6>
							<div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
								<div class="accordion-body">
									<ul class="your-profile-menu">
										<li>
											<a href="{{route('settings')}}">Personal Information</a>
										</li>

										<li>
											<a href="{{route('changepassword')}}">Change Password</a>
										</li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- ... end Your Profile  -->

			</div>
		</div>
	</div>
</div>

<!-- ... end Your Account Personal Information -->



@endsection