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
        $(document).ready(function() {
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
        });
    </script>
    @yield('js')
</body>

</html>