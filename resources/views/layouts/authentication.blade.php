<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ isset($title)? $title: config('app.name') }}</title>
	<link href="{{asset('assets/fonts-awesome/css/all.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="shortcut icon" href="{{url('images/dev3dao_fav_icon.png')}}" type="{{url('images/dev3dao_fav_icon.png')}}" />
	<link href="{{asset('assets/fonts-awesome/css/all.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/notify.css')}}" rel="stylesheet">

</head>

<body>
	@yield('content')
	<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/notify.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/theme.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/auth.js')}}"></script>
</body>

</html>