<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{url('images/dev3dao_fav_icon.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{url('assets/vendor/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
	<link href="{{url('assets/vendor/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{url('assets/vendor/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{url('assets/vendor/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{url('assets/vendor/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />

	<link href="{{url('assets/vendor/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{url('assets/vendor/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{url('assets/vendor/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('assets/vendor/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{url('assets/vendor/css/app.css')}}" rel="stylesheet">
	<link href="{{url('assets/vendor/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{url('assets/vendor/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{url('assets/vendor/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{url('assets/vendor/css/header-colors.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert2.min.css')}}">

	<title>SmartDev3</title>
</head>

<body>
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<!-- <div>
					<img src="{{url('images/logo.png')}}" class="logo-icon" alt="logo icon">
				</div> -->
				<div>
					<h4 class="logo-text">SmartDev3</h4>
				</div>
				
			</div>
			<!--navigation-->
			@include('admin.layouts.sections.sidebar')
			<!--end navigation-->
		</div>
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					
					<div class="top-menu ms-auto">
					
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{url('assets/vendor/images/avatars/avatar-1.png')}}" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">{{auth()->user()->fullname}}</p>
								<p class="designattion mb-0">Admin</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form>


						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!-- Layout Content -->
		@yield('content')
		<div class="overlay toggle-icon"></div>

		<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

		<footer class="page-footer">
			<p class="mb-0">Copyright © 2024. All right reserved.</p>
		</footer>
	</div>
  <!--/ Layout Content -->
  	@include('admin.layouts.sections.commonjs')
	@yield('js')
</body>

</html>
