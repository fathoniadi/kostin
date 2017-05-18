<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="{{URL::asset('/css/AdminLTE.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('/css/skins/_all-skins.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('/css/sweetalert2.min.css')}}">
	<link rel="icon" href="{{URL::asset('/tema/assets/img/home-xxl.png')}}" type="image/x-icon"/>
	<style>
		.main-sidebar { background-color: white !important }
	</style>
	@yield('moreCss')
</head>
<body class="hold-transition skin-red-light sidebar-mini">
<div class="wrapper">
	<header class="main-header">
		<div class="logo">
			<a onclick="window.history.back(-1);" class="pull-left" style="color: white"><i class="fa fa-chevron-left" style="font-size: 20px; font-weight: bolder;"></i></a>
	        <a href="{{ url('/') }}" class="" style="color: white">
	            Kost.in
	        </a>
		</div>
		@yield('navbar')
	</header>
	<aside class="main-sidebar" >
		<section class="sidebar">
			@yield('sidebar')
		</section>
	</aside>
	<div class="content-wrapper">
		@yield('content')
	</div>
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>IMK</b> E
		</div>
		<strong>Copyright &copy; 2017 <a>Kost.in</a>.</strong> All rights
		reserved.
	</footer>
	<div class="control-sidebar-bg"></div>
</div>
	<script src="{{URL::asset('/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
	<script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('/plugins/fastclick/fastclick.js')}}"></script>
	<script src="{{URL::asset('/js/app.min.js')}}"></script>
	<script src="{{URL::asset('/js/demo.js')}}"></script>
	<script src="{{URL::asset('/js/sweetalert2.min.js')}}"></script>
	@yield('moreJs')
</body>
</html>