@extends('base.layout-sidebar')

@section('title')
	Dashboard
@endsection

@section('navbar')
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top">
		<!-- Sidebar toggle button-->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
			</ul>
		</div>
	</nav>
@endsection

@section('sidebar')
	<div class="user-panel" style="">
	    <h4>Hasil Pencarian</h4>
	    <form action="{{ url('/search') }}" method="get">
	        <div class="form-group">
	            <label class="control-label">Provinsi</label>
	            <select name="provinsi" id="provinsi" class="form-control">
	                <option required value="0">Provinsi</option>
                      	@foreach ($provinsis as $provinsi)
                        	<option @if($provinsi_terpilih==$provinsi->id_provinsi) selected @endif value="{{$provinsi->id_provinsi}}">{{$provinsi->nama_provinsi}}</option>
	            		@endforeach
	            </select>
	        </div>
	        <div class="form-group">
	            <label class="control-label">Kota</label>
	            <select name="kota" id="kota" class="form-control">
	                <option value="">Kota</option>
	            </select>
	        </div>
	        <a href="#" id="moreSearch" title="" data-toggle="modal" data-target="#customModal">Custom Search</a>
	        <button type="submit" class="btn btn-primary pull-right" style="color: white">Cari</button>
	    </form>
	</div>
	<div class="clearfix"></div>
	<div style="border-top: 1px solid; margin-top: 10px; padding: 10px;">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="form-group">
	                <label class="control-label">Harga</label>
	                <select name="harga" class="form-control filter">
	                    <option value="">Pilih Range Harga</option>
	                    <option @if(isset($params['harga'])) @if($params['harga'] == 1) selected @endif @endif value="1">< 500.000</option>
	                    <option @if(isset($params['harga'])) @if($params['harga'] == 2) selected @endif @endif value="2">500.001-1.000.000</option>
	                    <option @if(isset($params['harga'])) @if($params['harga'] == 3) selected @endif @endif value="3">> 1.000.000</option>
	                </select>
	            </div>
	        </div>
	        <div class="col-md-6">
	            <div class="form-group">
	                <label class="control-label">Gender</label>
	                <select class="form-control filter" name="gender">
	                    <option value="">Pilihan Gender</option>
	                    <option @if(isset($params['gender'])) @if($params['gender'] == 1) selected @endif @endif value="1">Laki-laki</option>
	                    <option @if(isset($params['gender'])) @if($params['gender'] == 2) selected @endif @endif value="2">Perempuan</option>
	                    <option @if(isset($params['gender'])) @if($params['gender'] == 3) selected @endif @endif value="3">Campur</option>
	                </select>
	            </div>
	        </div>
	        <div class="col-md-6">
	            <div class="form-group">
	                <label class="control-label ">Penyewaan</label>
	                <select class="form-control filter" name="penyewaan">
	                    <option value="">Tipe Waktu Penyewaan</option>
	                    <option @if(isset($params['penyewaan'])) @if($params['penyewaan'] == 1) selected @endif @endif value="1">Bulanan</option>
	                    <option @if(isset($params['penyewaan'])) @if($params['penyewaan'] == 2) selected @endif @endif value="2">Tahunan</option>
	                </select>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="control-label">Fasilitas</label>
	        </div>
	        <div class="col-md-6">
	            <div class="form-group">                              
	                <label><input style="background-color: #141414" type="checkbox" class="filter" name="fasilitas_tv" @if(isset($params['fasilitas_tv'])) @if($params['fasilitas_tv'] == 1) checked @endif @endif value="1">TV</label>
	            </div>
	            <div class="form-group">                              
	                <label><input  style="background-color: #141414" type="checkbox" class="filter" name="fasilitas_ac" @if(isset($params['fasilitas_ac'])) @if($params['fasilitas_ac'] == 1) checked @endif @endif value="1">AC</label>
	            </div>
	            <div class="form-group">                              
	                <label><input style="background-color: #141414" type="checkbox" class="filter" name="fasilitas_wifi" @if(isset($params['fasilitas_wifi'])) @if($params['fasilitas_wifi'] == 1) checked @endif @endif value="1">WIFI</label>
	            </div>
	            <div class="form-group">                              
	                <label><input style="background-color: #141414" type="checkbox" class="filter" name="fasilitas_km"  @if(isset($params['fasilitas_km'])) @if($params['fasilitas_km'] == 1) checked @endif @endif value="1">Kamar Mandi Dalam</label>
	            </div>
	        </div>
	        <div class="col-md-6">
	            <div class="form-group">                              
	                <label><input style="background-color: #141414" type="checkbox" class="filter" name="fasilitas_meja" @if(isset($params['fasilitas_meja'])) @if($params['fasilitas_meja'] == 1) checked @endif @endif   value="1">Meja</label>
	            </div>
	            <div class="form-group">                              
	                <label><input style="background-color: #141414" type="checkbox" class="filter" name="fasilitas_kursi" @if(isset($params['fasilitas_kursi'])) @if($params['fasilitas_kursi'] == 1) checked @endif @endif value="1">Kursi</label>
	            </div>
	            <div class="form-group">                              
	                <label><input style="background-color: #141414" type="checkbox" class="filter" name="fasilitas_kulkas" e="background-color: #141414" type="checkbox" class="filter" name="fasilitas_kulkas" @if(isset($params['fasilitas_kulkas'])) @if($params['fasilitas_kulkas'] == 1) checked @endif @endif value="1">Kulkas</label>
	            </div>
	        </div>
	    </div>
	</div>
@endsection

@section('content')
	<section class="content-header">
		<h1>
			Hasil Pencarian
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
			<li><a href="#">Hasil Pencarian</a></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				@if($kamars->count())
			        <div class="alert alert-success alert-dismissible" role="alert">
			            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			            Hasil Pencarian Ditemukan @if(isset($params['radius'])) Dengan Radius {{$params['jrds']}} KM
			            @endif
			        </div>
				@else
					<div class="alert alert-danger alert-dismissible" role="alert">
			            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			            Hasil Pencarian Tidak Ditemukan @if(isset($params['radius'])) Dengan Radius {{$params['jrds']}} KM
			            @endif
			        </div>
				@endif
			</div>
			@foreach ($kamars as $kamar)
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary" style="padding: 10px">
					<div class="box-header with-border">
					</div>
					<div class="col-md-8">
	                    <div class="row">
	                        <div class="col-lg-4">
	                           @if($kamar->medias->count())
                                	<img src="{{ url($kamar->medias[0]->path_media.$kamar->medias[0]->nama_media) }}" class="img-responsive img-thumbnail" alt="">
                                @else
                                <img src="{{ url('/img/boxed-bg.jpg') }}" class="img-responsive img-thumbnail" alt="">
                                @endif
	                        </div>
	                        <div class="col-lg-8">
	                        	<h3 style="margin-top: 0"><a href="{{ url('/detailkamar') }}/{{$kamar->id_kamar}}">{{$kamar->nama_kamar}}</a> (Kost @if ($kamar->gender_kamar==1)
									Laki-laki
								@elseif($kamar->gender_kamar==2)
									Perempuan
								@else
									Campur
								@endif)</h3>
	                        	<h4>Lokasi: {{$kamar->alamat_kamar}}</h4>
	                        	<h4>No Telepon: {{$kamar->owner->no_tlp_pengguna}}</h4>
	                            <div class="row">
	                                @php
									$fasilitas = [];
										if($kamar->tv==1)
										{
											$fasilitas['TV'] = 1;
										}

										if($kamar->ac==1){
											$fasilitas['AC'] = 1;
										}

										if($kamar->km==1){
											$fasilitas['Kamar Mandi Dalam']=1;
										}

										if($kamar->wf==1){
											$fasilitas['Wifi']=1;
										}

										if($kamar->mj==1){
											$fasilitas['Meja']=1;
										}

										if($kamar->kr==1){
											$fasilitas['Kursi']=1;
										}

										if($kamar->kk==1){
											$fasilitas['Kulkas']=1;
										}
										$counter = 0;
										@endphp
										
											<div class="col-md-4">
										@if($fasilitas)
											<label class="control-label">Fasilitas</label>
										@endif
										@foreach ($fasilitas as $key => $element)
											<div class="form-group">              
	                                           <p>- {{$key}}</p>
	                                        </div>
	                                        @php
	                                        	$counter++;
	                                        @endphp
	                                        @if ($counter>2)
	                                        	 </div>
	                                    		<div class="col-md-4">
		                                    	@php
		                                        	$counter=0;
		                                        @endphp
	                                        @endif
										@endforeach
	                                    </div>
	                                </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-4">
	                    <div class="col-md-12">
	                        <h3 @if ($kamar->jumlah_kamar==0)
                            	style="color: orange" 
                            @endif>Sisa : {{$kamar->jumlah_kamar}}</h3>
                            @if ($kamar->jumlah_kamar==0)
                            	<div style="padding: 10px;" class="btn-warning btn-fill text-center">
                                <p>Kamar Tidak Tersedia</p>
                            </div>
                            @else
								<div style="padding: 10px;" class="btn-success btn-fill text-center">
                                <h4>Rp. {{$kamar->harga_kamar}}/@if($kamar->sewa_kamar==1)
                                	Bulan
                                @elseif($kamar->sewa_kamar==2)
                                	Tahun
                                @endif</h4>
                            </div>
                            @endif
	                    </div>
	                </div>
	            	<div class="clearfix"></div>
				</div>
				<!-- /.box -->
			</div>
			@endforeach
		</div>
		<div class="box-footer text-right">
    		{{$kamars->appends($params)->links()}}
    	</div>
		
		<!-- /.row -->
	</section>
<div id="customModal" class="modal fade " role="dialog">
	    <div class="modal-dialog modal-md">

	        <!-- Modal content-->
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
	                <h4 class="modal-title">Custom Search</h4>
	            </div>
	            <div class="modal-body">
	                <form action="{{ url('/search') }}" method="get">
	                    <div class="form-group">
	                        <label class="control-label">Provinsi</label>
	                        <select name="provinsi" class="form-control" id="provinsi_cs">
	                            <option value="0">Provinsi</option>
	                            @foreach ($provinsis as $provinsi)
		                        	<option @if($provinsi_terpilih==$provinsi->id_provinsi) selected @endif value="{{$provinsi->id_provinsi}}">{{$provinsi->nama_provinsi}}</option>
			            		@endforeach
	                        </select>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label">Kota</label>
	                        <select name="kota" id="kota_cs" class="form-control">
	                            <option value="">Kota</option>
	                        </select>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label">Kata Kunci</label>
	                        <input type="text" class="form-control" name="keyword" value="" placeholder="Kata Kunci">
	                    </div>
	                  <input hidden type="text" name="lat" value="" class="lat">
                      <input hidden type="text" name="lg" value="" class="lon">
                      <div class="form-group">
                          <label class="control-label"><input type="checkbox" id="radius" name="radius" value="1"> Pencarian berdasarkan lokasi terdekat</label>
                      </div>
                      <div id="fieldRadius" class="form-group hidden">
                          <label class="control-label">Radius</label>
                          <input type="text" class="form-control" name="jrds" value="10" placeholder="Radius (km)">
                      </div>
	                
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cancel</button>
	                <button type="submit" class="btn btn-primary btn-fill pull-right">Cari</a>
	            </form>
	            </div>
	        </div>

	    </div>
	</div>
@endsection

@section('moreJs')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js??sensor=false&libraries=places&key=AIzaSyA2HYBg5HU17qWpTDKGM7nsrxclhcvN5Go"></script>
<script>

		getKota('{{$provinsi_terpilih}}','{{$kota_terpilih}}')
		getKotaCs('{{$provinsi_terpilih}}','{{$kota_terpilih}}')
		function getKota(id_provinsi, id_kota='')
		{
			$.ajax({
                url: "{{url('/api/kotabyidprovinsi')}}/"+id_provinsi,
            })
            .done(function() {
            })
            .fail(function() {
            })
            .always(function(response) {
                $('#kota').html('<option value="">Kota</option>');
                if(!response) return false;
                var kotas = JSON.parse(response);
                $.each(kotas, function(index, val) {
                	if(kotas[index].id_kota == id_kota)
                		var selected = 'selected'
                	else
                		var selected = ''
                    $('#kota').append('<option '+selected+' value="'+kotas[index].id_kota+'">'+kotas[index].nama_kota+'</option>');
                });
            });
		}

		function getKotaCs(id_provinsi, id_kota='')
		{
			$.ajax({
                url: "{{url('/api/kotabyidprovinsi')}}/"+id_provinsi,
            })
            .done(function() {
            })
            .fail(function() {
            })
            .always(function(response) {
                $('#kota_cs').html('<option value="">Kota</option>');
                if(!response) return false;
                var kotas = JSON.parse(response);
                $.each(kotas, function(index, val) {
                	if(kotas[index].id_kota == id_kota)
                		var selected = 'selected'
                	else
                		var selected = ''
                    $('#kota_cs').append('<option '+selected+' value="'+kotas[index].id_kota+'">'+kotas[index].nama_kota+'</option>');
                });
            });
		}

        function getLocation() {
            if (navigator.geolocation) {
                $.when(navigator.geolocation.getCurrentPosition(showPosition, errorPosition, {
                    timeout: 5000
                }));
            } else {
                alert('Browser tidak mendukung')
            }
        }

        function errorPosition(position)
        {

        }

        function showPosition(position) {
          lat = position.coords.latitude;
          lon = position.coords.longitude;
          $('.lat').val(lat);
          $('.lon').val(lon); 

        };

	  $(document).on('click', '#radius', function(e){
            var flag = $(this).is(':checked');
            $.when(setInterval(function(){ getLocation()}, 1000));
            if(flag)
            {
                swal({
                  title: '',
                  text: "Pastikan GPS anda aktif!",
                  type: 'warning'
                });
                $('#fieldRadius').removeClass('hidden');
            }
            else
            {
                $('#fieldRadius').addClass('hidden');
            }
        });

    $(document).on('change', '#provinsi', function(e){
            e.preventDefault();
            var id_provinsi = $(this).val();
            getKota(id_provinsi);
        });

    $(document).on('change', '#provinsi_cs', function(e){
            e.preventDefault();
            var id_provinsi = $(this).val();
           getKotaCs(id_provinsi);
            
        });

   	$(document).on('change','.filter', function(){

   		var uri = document.location.href;
   		var params = uri.split('?');

   		if(params.length==1)
   		{
   			var parameter = '?'+$(this).attr('name')+'='+$(this).val();
   			window.location.href = uri+parameter;
   		}
   		else
   		{
   			var flag = 0;
	   		params = params[1].split('&');
   			for(let i=0; i<params.length; i++)
   			{
   				console.log(params[i])
   				if(params[i].split('=')[0]=='page'){
   					console.log('Masuk Page')
   					params[i] = 'page=1';
   					console.log('Jadinya > '+params[i])
   				}

   				if(params[i].split('=')[0] == $(this).attr('name')){

   					if($(this).attr('type') == 'checkbox')
   					{
   						if($(this).is(':checked'))
   						{
   							console.log('checked')
   							params[i] = $(this).attr('name')+'='+$(this).val();

   						}
   						else{
   							params[i] = $(this).attr('name')+'=';

   						}
   					}
   					else{
   						params[i] = $(this).attr('name')+'='+$(this).val();
   					}
   					flag = 1;
   				}
   			}

   			if(flag==0){
   				var params = params.join('&');
   				var parameter = '&'+$(this).attr('name')+'='+$(this).val();
   				console.log('URL '+uri.split('?')[0]+'?'+params+parameter);
   				window.location.href = uri.split('?')[0]+'?'+params+parameter;
   			}
   			else{
   				var params = params.join('&');
   				console.log(params)
   				window.location.href = uri.split('?')[0]+'?'+params;
   			}
   		}
   	});
</script>
@endsection