<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<div class="logo">
				<a onclick="window.history.back(-1);" class="pull-left" style="color: white"><i class="fa fa-chevron-left" style="font-size: 20px; font-weight: bolder;"></i></a>
		        <a href="{{ url('/') }}" class="" style="color: white">
		            Kost.in
		        </a>
			</div>

			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- User Account: style can be found in dropdown.less -->
					@if(Auth::user())
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="{{URL::asset('/img/boxed-bg.jpg')}}" class="user-image" alt="User Image">
							<span class="hidden-xs">{{Auth::user()->email}}</span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="{{URL::asset('/img/boxed-bg.jpg')}}" class="img-circle" alt="User Image">

								<p>
									{{Auth::user()->email}}
								</p>
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="col-md-6">
									<a href="{{url('/datadiri')}}" class="btn btn-default btn-flat">Data Diri</a>
								</div>
								<div class="col-md-6">
									<a href="{{url('/logout')}}" class="btn btn-default btn-flat">Sign out</a>
								</div>
							</li>
						</ul>
					</li>
					@endif
				</ul>
			</div>
		</nav>