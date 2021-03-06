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
	<link rel="stylesheet" href="{{URL::asset('/plugins/iCheck/square/blue.css')}}">
	<link rel="icon" href="{{URL::asset('/tema/assets/img/home-xxl.png')}}" type="image/x-icon"/>
	@yield('moreCss')
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="../index2.html"><b>@yield('title')</b></a>
	</div>
	@yield('content')
</div>
<script src="{{URL::asset('/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
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
