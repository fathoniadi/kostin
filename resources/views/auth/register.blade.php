@extends('base.layout-auth')

@section('title')
	Register
@endsection

@section('content')
	<div class="register-box-body">
	    <form action="../../index.html" method="post">
		      	<div class="form-group has-feedback">
		        	<input type="text" class="form-control" placeholder="Email">
		        	<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		      	</div>
	      		<div class="form-group has-feedback">
			        <input type="password" class="form-control" placeholder="Password">
			        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      		</div>
	      		<div class="form-group has-feedback">
			        <input type="password" class="form-control" placeholder="Konfirmasi Password">
			        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      		</div>
	      		<div class="form-group has-feedback">
			        <input type="text" class="form-control" placeholder="Captcha">
			        <span class="glyphicon form-control-feedback"></span>
	      		</div>
		      	<div class="row">
		        <!-- /.col -->
		        	<div class="col-xs-4">
		          	<button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
		        </div>
		        <!-- /.col -->
		      </div>
	    </form>
  </div>
@endsection