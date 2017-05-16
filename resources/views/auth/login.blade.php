@extends('base.layout-auth')

@section('title')
	Login
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
	<div class="login-box-body">
		<p class="login-box-msg">Login</p>
		<form action="{{ url('/login') }}" method="post">
			{{csrf_field()}}
			{{method_field('POST')}}
			<div class="form-group has-feedback">
				<input type="text" class="form-control" name="email" placeholder="Email">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" name="password" class="form-control" placeholder="Password">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="form-group">
				<!-- /.col -->
					<button type="submit" class="btn btn-primary btn-flat">Login</button>
				<!-- /.col -->
			</div>
		</form>
	</div>
@endsection