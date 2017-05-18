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
	@if(Session::get('message'))
	    <div class="alert alert-success alert-dismissible" role="alert">
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	        <h4>Sukses!</h4> 
	        {{Session::get('message')}}.
	    </div>
	@endif
	<div class="login-box-body">
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
			<div class="row">
		        <!-- /.col -->
		        	<div class="col-xs-4 pull-right">
		          	<button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
		        </div>
		</form>
	</div>
@endsection