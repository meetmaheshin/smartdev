<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ isset($title)? $title: config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fonts-awesome/css/all.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/freelancer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.css')}}">
    <link rel="shortcut icon" href="{{url('images/dev3dao_fav_icon.png')}}" type="{{url('images/dev3dao_fav_icon.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/toastr.css')}}">

    @yield('before_styles')
</head>

<body>
    <nav class="navbar border-bottom border-1">
        <div class="container-fluid">
            <div class="mobile_center">
                <a class="navbar-brand pe-2" href="@if(auth()->check())
                                                        @if(auth()->user()->is_admin == 1)
                                                            {{ url('/client/dashboard') }}
                                                        @elseif(auth()->user()->is_admin == 0)
                                                            {{ url('/freelancer/dashboard') }}
                                                        @endif
                                                    @else
                                                        {{ url('/') }}
                                                    @endif">
                    <img src="{{asset('images/logo.png')}}" alt="logo" width="100">
                    {{-- <img src="{{asset('images/new-logo.svg')}}" alt="logo" width="100"> --}}
                    
                </a>
            </div>
            <div class="d-sm-block mobile_ham w-100 d-md-none">
                <nav class="navbar navbar-light">
                    <div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-light p-4">
                        <ul class="px-0 list-unstyled">
                            <li class="mob_list">
                                <span class="d-flex justify-content-center align-items-center" href="#">
                                    <i class="far fa-user-circle"></i>
                                </span>
                                <div class="avtar_decrp">
                                    <h6 class="m-0">{{auth()->user()->firstname}} {{auth()->user()->lastname}}</h6>
                                    <p class="m-0">Web3 Professional</p>
                                </div>
                            </li>
                            <li class="drop_op"><a class="dropdown-item" href="#"><i class="fas me-2 fa-user-cog"></i> Settings</a></li>
                            <li class="drop_op"><a class="dropdown-item" href="#"><i class="fas me-2 fa-sign-out-alt"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dropdown  d-none d-md-block p-2 log_drop">
                <button class="dropdown-toggle border-0 bg-transparent" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-user-circle"></i></button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <span class="d-flex justify-content-center align-items-center" href="#">
                            <i class="far fa-user-circle"></i>
                        </span>
                        <div class="avtar_decrp text-center">
                            <h6 class="m-0 mt-3">{{auth()->user()->firstname}} {{auth()->user()->lastname}}</h6>
                            <p>Web3 Professional</p>
                        </div>
                    </li>
                    <!-- <li class="drop_op"><a class="dropdown-item" href="#"><i class="fas me-2 fa-user-cog"></i> Settings</a></li> -->
                    <li class="drop_op">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt me-2"></i>{{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- <script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> -->
    <script type="text/javascript" src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sweetalert2.all.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/toastr.js')}}"></script>

    <script>
        // $(document).ready(function() {
            // toastr.options.timeOut = 10000;
            // @if (Session::has('error'))
            //     toastr.error("{{ Session::get('error') }}");
            // @elseif(Session::has('success'))
            //     toastr.success("{{ Session::get('success') }}");
            // @endif
            
            jQuery(function() {
                jQuery('#start_datepicker').datepicker();
                jQuery('#end_datepicker').datepicker();
                // education year's date-picker
                $("#start_year_datepicker").datepicker({
                    format: "yyyy",
                    viewMode: "years",
                    minViewMode: "years",
                });
                $("#end_year_datepicker").datepicker({
                    format: "yyyy",
                    viewMode: "years",
                    minViewMode: "years",
                });
            });
            jQuery(function() {
                jQuery('[name="end_date_check"]').change(function() {
                    if (jQuery(this).is(':checked')) {
                        jQuery(".end_date_input").hide();
                    } else if (!jQuery(this).is(':checked')) {
                        jQuery(".end_date_input").show();
                    };
                });
            });
            jQuery('.skills_select').select2({
                placeholder: "Select a skill",
            });
        // });
    </script>
    @yield('js')
</body>

</html>