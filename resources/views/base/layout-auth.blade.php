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
	<!-- iCheck -->
	<link rel="stylesheet" href="{{URL::asset('/plugins/iCheck/square/blue.css')}}">
	
	@yield('moreCss')
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="../index2.html"><b>KOST</b>IN</a>
	</div>
	@yield('content')
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="{{URL::asset('/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{URL::asset('/plugins/iCheck/icheck.min.js')}}"></script>
<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' // optional
		});
	});
</script>
@yield('moreJs')
</body>
</html>