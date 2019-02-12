<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
	    <meta content="" name="description"/>
	    <meta content="" name="author"/>

	    
	    <meta name="_token" content="{{ csrf_token() }}">
	    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
	  
	    <meta charset="utf-8"/>
	    <title>Devdrishti Infrahomes Pvt Ltd</title>

	 	<link rel="icon" type="image/png" href="{{asset('assets/img/logo.jpg')}}">
	 	<!-- Bootstrap 3.3.7 -->
	 	<link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
	 	<!-- Font Awesome -->
	  	<link rel="stylesheet" href="{{asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
	  	<!-- Ionicons -->
	  	<link rel="stylesheet" href="{{asset('assets/bower_components/Ionicons/css/ionicons.min.css')}}">
	  	<!-- Theme style -->
	  	<link rel="stylesheet" href="{{asset('assets/dist/css/AdminLTE.min.css')}}">
	  	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	  	<link rel="stylesheet" href="{{asset('assets/dist/css/skins/_all-skins.min.css')}}">
	  	<!-- Morris chart -->
	  	<link rel="stylesheet" href="{{asset('assets/bower_components/morris.js/morris.css')}}">
	  	<link rel="stylesheet" href="{{asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.css')}}">
	  	<!-- jvectormap -->
	  	<link rel="stylesheet" href="{{asset('assets/bower_components/jvectormap/jquery-jvectormap.css')}}">
	  	<!-- Date Picker -->
	  	<link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
	  	<!-- Daterange picker -->
	  	<link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
	  	<link rel="stylesheet" href="{{asset('assets/css/sweetalert2.css')}}">
	  	<!-- bootstrap wysihtml5 - text editor -->
	  	<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
	  	<!-- Google Font -->
	  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>

	<body class="hold-transition skin-blue sidebar-mini">
	    <div id="cover"></div>
	    <div class="wrapper">
	            @yield('content')
	    </div>

	    <!-- jQuery 3 -->
		<script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="{{asset('assets/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		  $.widget.bridge('uibutton', $.ui.button);
		</script>
		<!-- Bootstrap 3.3.7 -->
		<script src="{{asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<!-- Morris.js charts -->
		<script src="{{asset('assets/bower_components/raphael/raphael.min.js')}}"></script>
		<script src="{{asset('assets/bower_components/morris.js/morris.min.js')}}"></script>
		<!-- Sparkline -->
		<script src="{{asset('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
		<script src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.js')}}"></script>
		<!-- jvectormap -->
		<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
		<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
		<!-- jQuery Knob Chart -->
		<script src="{{asset('assets/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
		<!-- daterangepicker -->
		<script src="{{asset('assets/bower_components/moment/min/moment.min.js')}}"></script>
		<script src="{{asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
		<!-- datepicker -->
		<script src="{{asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
		<!-- Bootstrap WYSIHTML5 -->
		<script src="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
		<!-- Slimscroll -->
		<script src="{{asset('assets/js/sweetalert2.js')}}"></script>
		<script src="{{asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
		<script src="https://cdn.ckeditor.com/4.11.1/standard-all/ckeditor.js"></script>
		<script src="{{asset('assets/bower_components/ckeditor/ckeditor.js')}}"></script>
		<!-- FastClick -->
		<script src="{{asset('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
		<!-- AdminLTE App -->
		<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{asset('assets/dist/js/demo.js')}}"></script>
		
		<script src="{{asset('assets/js/script.js')}}"></script>
		<script type="text/javascript">
		$(function () {
		    $.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		        },isLocal: false
		    });
		});  

		$(document).ready(function(){
		    setTimeout(function(){
		        $('#cover').fadeOut(500);
		    },1000)
		});
		</script>
@yield('requirejs')

	</body>
</html>