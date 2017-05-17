<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{URL::asset('/css/AdminLTE.min.css')}}">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
			 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{URL::asset('/css/skins/_all-skins.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('/css/sweetalert2.min.css')}}">
	<style>
		.main-sidebar { background-color: white !important }
	</style>
	@yield('moreCss')
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="hold-transition skin-red-light sidebar-mini">
<div class="wrapper">

	<header class="main-header">
		<!-- Logo -->
		<div class="logo">
			<a onclick="window.history.back(-1);" class="pull-left" style="color: white"><i class="fa fa-chevron-left" style="font-size: 20px; font-weight: bolder;"></i></a>
	        <a href="{{ url('/') }}" class="" style="color: white">
	            Kost.in
	        </a>
		</div>
		@yield('navbar')
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar" >
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			@yield('sidebar')
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		@yield('content')
		<!-- Content Header (Page header) -->
		
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Version</b> 2.3.8
		</div>
		<strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
		reserved.
	</footer>

	<!-- Add the sidebar's background. This div must be placed
			 immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
	<!-- jQuery 2.2.3 -->
	<script src="{{URL::asset('/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
	<!-- FastClick -->
	<script src="{{URL::asset('/plugins/fastclick/fastclick.js')}}"></script>
	<!-- AdminLTE App -->

	<script src="{{URL::asset('/js/app.min.js')}}"></script>
	<script src="{{URL::asset('/js/demo.js')}}"></script>
	<script src="{{URL::asset('/js/sweetalert2.min.js')}}"></script>
	@yield('moreJs')
</body>
</html>