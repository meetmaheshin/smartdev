<header>
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand pe-2" href="{{url('/')}}">
				{{-- <img src="{{asset('images/logo.png')}}" alt="logo" width="100"> --}}
				<img src="{{asset('images/new-logo.svg')}}" alt="logo" width="100">

			</a>
			<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-bar top-bar"></span>
				<span class="icon-bar middle-bar"></span>
				<span class="icon-bar bottom-bar"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 left_nav">
					@if(Auth::user()->is_admin == App\Models\User::ROLE_FREELANCER)
					<li class="nav-item dropdown pe-3">
						<a class="nav-link dropdown-toggle position-relative" href="javascript:void(0)">
							Find Work
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="{{route('dashboard')}}">Find Work</a></li>
							<li><a class="dropdown-item" href="{{route('proposals.list')}}">Proposals</a></li>
						</ul>
					</li>
					@endif
					<li class="nav-item dropdown pe-3">
						<a class="nav-link dropdown-toggle position-relative" href="Javascript:void(0)">
							Jobs
						</a>
						<ul class="dropdown-menu">
							@if(Auth::user()->is_admin == App\Models\User::ROLE_CLIENT)
							<li><a class="dropdown-item" href="{{route('project_started')}}">Post a Job</a></li>
							<li><a class="dropdown-item" href="{{route('project.all_jobs',['statuses'=>'all'])}}">All Job Posts</a></li>
							<!-- <li><a class="dropdown-item" href="{{route('project.all_contracts')}}">All Contracts</a></li> -->

							@endif
							<li><a class="dropdown-item" href="{{ Auth::user()->is_admin == 1 ? route('clientdashboard') : route('home') }}">My Jobs</a></li>
						</ul>
					</li>

					<li class="nav-item dropdown pe-3">
						<a class="nav-link dropdown-toggle position-relative" href="Javascript:void(0)">
							Reports
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="{{ route('transaction-history') }}">Transaction history</a></li>
						</ul>
					</li>


					<li class="nav-item">
						<a class="nav-link position-relative" aria-current="page" href="{{route('messages.list')}}">Messages <span class="start-100 notifi_count notifi_count_{{auth()->user()->id}} badge rounded-pill">{{ getUnreadMessageCount()!= 0 ? getUnreadMessageCount() : '' }}</span></a>
					</li>
				</ul>
				<ul class="d-none d-lg-flex navbar-nav right_nav d-flex align-items-center">
					<li class="nav-item pe-4">
						<form class="d-flex header_search_bar" action="{{route('search_project')}}" method="GET" role="search">
							<input type="hidden" value="0" name="searchType" id="searchType" />
							<div class="seach_item position-relative">
								<input class="form-control me-2" id="project_talent_Search" type="search" value="" placeholder="Search" aria-label="Search">
								<i class="fa fa-search position-absolute" aria-hidden="true"></i>
							</div>
							<div class="searchbar_dropdown dropdown">
								<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Talent</button>
								<ul class="dropdown-menu">
									<li class="dropdown-item d-flex">
										<div class="me-2">
											<i class="fas fa-user-friends"></i>
										</div>
										<div class="search_in">
											<h6 class="m-0">Talent</h6>
											<span class="d-block w-100 font_12 text-muted">Hire professionals and agencies</span>
										</div>
									</li>
									<li class="dropdown-item d-flex">
										<div class="me-2">
											<i class="fas fa-briefcase"></i>
										</div>
										<div class="search_in">
											<h6 class="m-0">Projects</h6>
											<span class="d-block w-100 font_12 text-muted">Buy ready-to-start services</span>
										</div>
									</li>
								</ul>
							</div>
						</form>
					</li>
					<li>
						<div class="dropdown bell_dropdown me-3 cursor_pointer position-relative">
							<div class="dropdown-toggle font_22" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
								<i class="far fa-bell"><span class="newnoti_{{auth()->user()->id}} {{count($unreadnotifications)>0 ? 'red' : ''}}"></span></i>
							</div>
							<ul class="dropdown-menu p-0 dropdown-menu-end pt-2 notification_{{auth()->user()->id}}">
								@forelse ($notifications as $notification)
								<li>
									<div class="inner_notification font_14 p-3 pe-5 d-flex position-relative font_weight_600 border_bottom">
										<i class="fas fa-rocket me-2"></i>
										<p class="m-0">
											@switch($notification->type)
											@case('App\Notifications\NewJobPosted')
											<a class="text-decoration-none color_black read_noti" data-id="{{ $notification->id }}" href="{{ $notification->data['url'] }}">You posted the job "{{ $notification->data['title'] }}" in {{ auth()->user()->fullname }}</a>
											@break
											@case('App\Notifications\SendInvitation')
											<a class="text-decoration-none color_black read_noti"  data-id="{{ $notification->id }}" href="{{ $notification->data['url'] }}">You have received an invitation to interview for the job "{{ $notification->data['title'] }}"</a>
											@break
											@case('App\Notifications\UnsendInvitation')
											<a class="text-decoration-none color_black read_noti"  data-id="{{ $notification->id }}" href="{{ $notification->data['url'] }}">the invitation has been retracted. Please contact the client for further information "{{ $notification->data['title'] }}"</a>
											@break
											@case('App\Notifications\FinishedWork')
											<a class="text-decoration-none color_black read_noti"  data-id="{{ $notification->id }}" href="{{ @$notification->data['url'] }}">Your milestone work has finished "{{ $notification->data['title'] }}"</a>
											@break
											@case('App\Notifications\PaymentReceived')
											<a class="text-decoration-none color_black read_noti"  data-id="{{ $notification->id }}" href="{{ @$notification->data['url'] }}">Your milestone has Ended and payment received "{{ $notification->data['title'] }}"</a>
											@break
											@case('App\Notifications\AcceptInterview')
											@if ($notification->data['status'] == 2)
											<a class="text-decoration-none color_black read_noti"  data-id="{{ $notification->id }}" href="{{ $notification->data['url'] }}">{{ $notification->data['freelancer_id'] }} declined your invitation to interview for the job "{{ $notification->data['title'] }}"</a>
											@elseif ($notification->data['status'] == 1)
											<a class="text-decoration-none color_black read_noti"   data-id="{{ $notification->id }}" href="{{ $notification->data['url'] }}">{{ $notification->data['freelancer_id'] }} accepted your invitation to interview for the job "{{ $notification->data['title'] }}"</a>
											@endif
											@break
											@default
											<!-- Do nothing -->
											@endswitch
										</p>
										<span class="position-absolute"><i class="fas fa-times notificatin_delete" data-id="{{$notification->id}}"></i></span>
									</div>
								</li>
								@empty
								<li>
									<h6 class="text-center font_weight_600 m-0 p-3">No New Notifications</h6>
								</li>
								@endforelse

								@if (count($notifications) > 0)
								<li>
									<div class="see_allNotification text-center p-2">
										<a class="text-decoration-none color_green font_weight_600" href="{{ route('notifications') }}">See All Notifications</a>
									</div>
								</li>
								@endif
							</ul>
							<span class="tooltiptext">Notifications</span>
						</div>
					</li>
					<li class="nav-item user_icon position-relative">
						<div class="dropdown ">
							<button class="btn btn-secondary dropdown-toggle nav-link d-flex justify-content-center align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								<!-- <i class="far fa-user"></i> -->
								<img class="rounded-circle border-0 object-fit-cover" src="{{ auth()->user()->profile_photo_path ? asset('/storage/images/client_profile/'.auth()->user()->profile_photo_path):  asset('images/user_default.jpeg') }}" width="40" height="40" alt="">
							</button>
							<ul class="dropdown-menu">
								<li class="text-center">
									<div class="d-flex justify-content-center align-items-center user_img m-auto">
										<img class="rounded-circle border-0 object-fit-cover" src="{{ auth()->user()->profile_photo_path ? asset('/storage/images/client_profile/'.auth()->user()->profile_photo_path):  asset('images/user_default.jpeg') }}" width="88" height="88" alt="">
									</div>
									<span class="d-block font_16 font_weight_600 block_heading">{{Auth::user()->fullname}}</span>
									<span class="d-block font_11 color_grey">{{Auth::user()->is_admin== App\Models\User::ROLE_FREELANCER ? 'Web3 Professional':'Client'}}</span>
								</li>
								@php
								$route = auth()->user()->is_admin == 0 ? 'contact.info.settings' : 'settings.myinfo';
								@endphp
								<li>
									<a class="text-decoration-none d-flex color_green align-items-center color_black font_14" href="{{ route($route) }}">
										<i class="fas fa-cog me-3"></i>Settings
									</a>
								</li>
								<li>
									<a class="text-decoration-none d-flex color_green align-items-center color_black font_14" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
										<i class="fas fa-sign-out-alt me-3"></i>{{ __('Logout') }}
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>