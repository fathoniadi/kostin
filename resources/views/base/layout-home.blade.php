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
  @yield('moreCss')
  
</head>
<body class="hold-transition skin-red-light layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          @if(Auth::user())
            <li>
              <a href="{{ url('/dashboard') }}" title="">Dashboard</a>
            </li>
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{URL::asset('/img/boxed-bg.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->email}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="{{URL::asset('/img/boxed-bg.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  {{Auth::user()->email}}
                </p>
              </li>
              <li class="user-footer">
                <div class="col-md-6">
                  <a href="{{url('/datadiri')}}" class="btn btn-default btn-flat">Data Diri</a>
                </div>
                <div class="col-md-6">
                  <a href="{{url('/logout')}}" class="btn btn-danger btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          @else
            <li><a href="{{ url('/register') }}" style="color:white;">Register&nbsp;</a></li>
            <li><h4 style="color:white;">&nbsp;|&nbsp;</h4></li>
            <li><a href="{{ url('/login') }}" style="color:white;margin-right:15px;">Login</a></li>
          @endif
        </ul>
      </div>
    </nav>
  </header>
<<<<<<< Updated upstream
    <div class="content-wrapper" style="background-image: url('{{URL::asset("/img/kos1.jpg")}}');background-size: cover; background-position: center; ">
    </div>
  @yield('content')
     <footer class="main-footer" style="position: fixed;bottom: 0px; background-color: transparent;">
      <div class="pull-right hidden-xs">
        <b>IMK</b> E
      </div>
      <strong>Copyright &copy; 2017 <a>Kost.in</a>.</strong> All rights
      reserved.
    </footer>

  
  
=======
  <div class="content-wrapper" style="background-image: url('{{URL::asset("/img/kos.jpg")}}');background-size:cover; background-attachment:fixed">
  @yield('content')
</div>
>>>>>>> Stashed changes

<script src="{{URL::asset('/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('/plugins/fastclick/fastclick.js')}}"></script>
<script src="{{URL::asset('/js/app.min.js')}}"></script>
<script src="{{URL::asset('/js/demo.js')}}"></script>
<script src="{{URL::asset('/js/sweetalert2.min.js')}}"></script>
@yield('moreJs')
</body>
</html>
