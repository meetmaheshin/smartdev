<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{url('images/dev3dao_fav_icon.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{url('assets/vendor/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{url('assets/vendor/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
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
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link href="{{asset('assets/fonts-awesome/css/all.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/toastr.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datepicker.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/select2.min.css')}}">
	<!-- DataTables Search Highlight CSS -->
	<link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/2.1.6/features/searchHighlight/dataTables.searchHighlight.css">

	<title>SmartDev3</title>
</head>

<body>
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<a class="navbar-brand" href="{{ url('/admin/dashboard') }}">
					<img src="{{url('images/logo.png')}}" alt="SmartDev3" width="180">
				</a>
				{{-- <div>
					<h4 class="logo-text">SmartDev3</h4>
				</div> --}}
				
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
							<img src="{{asset('images/user_default.jpeg')}}" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">{{auth()->user()->fullname}}</p>
								<p class="designattion mb-0">Admin</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="{{route('admin.profile')}}"><i class="bx bx-user"></i><span>Profile</span></a>
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
	<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
	<!-- jQuery Highlight Plugin -->
	<script src="https://bartaz.github.io/sandbox.js/jquery.highlight.js"></script>
	<!-- DataTables Search Highlight JS -->
	<script src="https://cdn.datatables.net/plug-ins/2.1.6/features/searchHighlight/dataTables.searchHighlight.min.js"></script>

	<script> 
		var table = $('#example').DataTable({
			searchHighlight: true // Enable search term highlighting
		});

		// Set initial filter value based on URL parameter
        var filterRole = '{{ request()->get("filter") }}';
        if (filterRole) {
            table.column(2).search(filterRole).draw();
        }
		// Filter the table based on the Role column
        $('#roleFilter').on('change', function() {
            var selectedRole = $(this).val();
            // Search in the Role column (index 2) based on the selected value
            table.column(2).search(selectedRole).draw();
        });

		toastr.options.timeOut = 10000;
		@if (Session::has('error'))
			toastr.error("{{ Session::get('error') }}");
		@elseif(Session::has('success'))
			toastr.success("{{ Session::get('success') }}");
		@endif


		$(document).on('click', '.delete_row', function(e) {
			var id = $(this).data('id');
			var url = $(this).data('url');

			swal.fire({
				title: '<div style="display: flex; justify-content: center; margin-bottom: 10px;">' +
					'<div style="width: 80px; height: 80px; border-radius: 50%; background-color: #ffc107; display: flex; align-items: center; justify-content: center;">' +
					'<i class="fa fa-exclamation" style="color: white; font-size: 24px;"></i>' +
					'</div>' +
					'</div>' +
					'Are you sure?', // Your alert title after the icon
				text: "Do you really want to delete this record? This process cannot be undone.",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!',
				cancelButtonText: 'No',
				showLoaderOnConfirm: true,
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
						url: url,
						type: "POST",
						data: {
							"_token": "{{ csrf_token() }}",
							id: id,
						},
						dataType: "json",
						success: function(response) {
							console.log(id);
							if (response.status == true) {
								swal.fire("success!", response.message, "success");
								setTimeout(function() {
									location.reload();
								}, 500);
							} else if (response.showDeleteJobBtn == true) {
								swal.fire({
									title: "Error",
									text: response.message,
									icon: "error",
									showCancelButton: true,
									confirmButtonText: 'Delete Jobs',
									cancelButtonText: 'Close',
									confirmButtonColor: '#3085d6',
									cancelButtonColor: '#d33'
								}).then((errorResult) => {
									if (errorResult.isConfirmed) {
										// Redirect to the admin jobs route
										window.location.href = "{{ route('admin.jobs') }}?user_id=" + id;
									}
								});
							} else {
								swal.fire("error", response.message, "error");
							}
						},
						error: function(xhr, ajaxOptions, thrownError) {
							swal.fire(
								"Error deleting!!",
								"Please try again",
								"error"
							);
						}
					});
				} else if (result.isDenied) {
					swal.fire("Changes are not saved", "", "info");
				}
			});
		});



		// auto fill popular
		$(document).ready(function () {
            $('.popular_title').on('input', function () {
                const inputValue = $(this).val().toLowerCase(); // Convert input value to lowercase
                if (inputValue.includes('popular')) {
                    $(this).val('Popular skills');
                }
            });
        });

	</script>
</body>

</html>
