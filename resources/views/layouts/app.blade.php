<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ isset($title)? $title: config('app.name') }}</title>
	<link rel="shortcut icon" href="{{url('images/dev3dao_fav_icon.png')}}" type="{{url('images/dev3dao_fav_icon.png')}}" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/fonts-awesome/css/all.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/freelancer.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/toastr.css')}}">
	<link href="{{asset('css/notify.css')}}" rel="stylesheet">
	
	  
	@yield('before_styles')

</head>

<body>
	@include('layouts.header')
	@yield('content')
	@include('layouts.footer')
	<script type="text/javascript" src="{{asset('js/socket.io.min.js')}}"></script>
	<script>

		let receiverData= "<?php echo auth()->user()->id ?>";
		let receiverDataName= "<?php echo auth()->user()->firstname ?>";
		let ip_address;
		if (window.location.hostname === '127.0.0.1') {
			// Use local development server
			ip_address = 'http://localhost:4000';
		} else {
			// Use production server
			ip_address = 'https://' + window.location.hostname + ':4000';
		}
		let socket = io.connect(ip_address, {
			auth: {
				id: "<?= auth()->user()->id ?>"
			}
		});
		socket.once('connect', function() {
			socket.emit('join', {
				id: receiverData
			});
		});		
		socket.on("send_message_dashboard_new", function(data) {
			console.log("send_message_dashboard_new-nd");
			// if (data.sender_id == receiver) {
				console.log("SENDERiD",data.sender_id);
				console.log("receiver",receiverData);
				var count = parseInt($('.notifi_count_' + receiverData).html(), 10); // Parse the count as an integer
				var total = count+1;
				$('.notifi_count_'+receiverData).html(total);

		});

		var base_url = "<?= url('/') ?>";
		var rovi_contract_address = "{{env('ROVI_CONTRACT_ADDRESS')}}";

		var bsc_rpc_url = "<?= env('BSC_RPC_URL') ?>";

		var dev_contract_address = "<?= env('DEV_CONTRACT_ADDRESS') ?>";
		var poloygon_rpc_url = "<?= env('POLYGON_RPC_URL') ?>";
		
		var usdt_contract_address = "<?= env('USDT_CONTRACT_ADDRESS') ?>";
		var ethereum_rpc_url = "<?= env('ETHEREUM_RPC_URL') ?>";
		var To_Address = "<?= env('To_Address') ?>";
		var spender_address = "<?= env('spender_address') ?>";

		var BSC_chain_id = "{{env('BSC_chain_id')}}";
		var ETHEREUM_chain_id = "{{env('ETHEREUM_chain_id')}}";
		var POLYGON_chain_id = "{{env('POLYGON_chain_id')}}";

		
	</script>
	<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/timeago.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/sweetalert2.all.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/notify.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/toastr.js')}}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="{{asset('js/theme.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/socket.js')}}"></script>
	@yield('before_js')
	<script> 
		// toastr.options.timeOut = 10000;
		// @if (Session::has('error'))
		// 	toastr.error("{{ Session::get('error') }}");
		// @elseif(Session::has('success'))
		// 	toastr.success("{{ Session::get('success') }}");
		// @endif
		Filevalidation = () => {
            const fi = document.getElementById('file');
            // Check if any file is selected.
            if (fi.files.length > 0) {
                for ( i = 0; i <= fi.files.length - 1; i++) {
          
                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));
                    // The size of the file.
                    if (file >= 2048) {
                        alert(
                          "File too Big, please select a file less than 2mb");
						  fi.value= '';
                    }  
                }
            }
        }

		

    </script>

	@yield('js')

</body>

</html>