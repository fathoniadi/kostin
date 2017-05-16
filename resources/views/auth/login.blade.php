@extends('base.layout-auth')

@section('title')
	Login
@endsection

@section('content')
	<div class="login-box-body">
		<p class="login-box-msg">Login</p>

		<form action="../../index.html" method="post">
			<div class="form-group has-feedback">
				<input type="text" class="form-control" placeholder="Email">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="Password">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="form-group">
				<!-- /.col -->
					<button type="submit" class="btn btn-primary btn-flat">Cari</button>
				<!-- /.col -->
			</div>
		</form>
	</div>
@endsection