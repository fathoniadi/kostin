@extends('base.layout-auth')

@section('title')
	Register
@endsection

@section('content')
	@if ($errors->count()>0)
	    <div class="alert alert-danger alert-dismissible" role="alert">
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	        @foreach ($errors->all() as $error)
	            <p>{!! $error !!}</p>
	        @endforeach
	    </div>
	@endif
	<div class="register-box-body">
	    <form action="{{ url('/register') }}" method="post">
	    	{{csrf_field()}}
		      	<div class="form-group has-feedback">
		        	<input type="text" class="form-control" placeholder="Email" name="email">
		        	<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		      	</div>
	      		<div class="form-group has-feedback">
			        <input type="password" class="form-control" placeholder="Password" name="password">
			        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      		</div>
	      		<div class="form-group has-feedback">
			        <input type="password" class="form-control" placeholder="Konfirmasi Password" name="konfirmasi">
			        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      		</div>
	      		<!-- <div class="form-group has-feedback">
	      					        <input type="text" class="form-control" placeholder="Captcha" name="">
	      					        <span class="glyphicon form-control-feedback"></span>
	      		</div> -->
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