<script src="{{url('assets/vendor/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{url('assets/vendor/js/jquery.min.js')}}"></script>
	<script src="{{url('assets/vendor/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{url('assets/vendor/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{url('assets/vendor/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{url('assets/vendor/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{url('assets/vendor/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{url('assets/vendor/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{url('assets/vendor/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sweetalert2.all.min.js')}}"></script>

    <!--app JS-->

  <!-- Include Scripts -->
  <script type="text/javascript">
    if (window.history && window.history.pushState) {
        window.history.pushState('forward', null, '');
        window.onpopstate = function () {
            window.history.pushState('forward', null, '');
            window.location.href = '/admin/dashboard'; // Change this to your intended authenticated user's route
        };
    }
</script>