@extends('base.layout-wsidebar')

@section('title')
	Edit Kamar
@endsection

@section('moreCss')
	<link rel="stylesheet" href="{{URL::asset('/css/sweetalert2.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('/css/jquery.fileuploader.css')}}">
	<link rel="stylesheet" href="{{URL::asset('/css/jquery.fileuploader-theme-thumbnails.css')}}">
@endsection

@section('content')
	<section class="content-header">
			<h1>
				Edit Kamar Kost
			</h1>
			<ol class="breadcrumb">
				<li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li class="active">Edit Kamar Kost</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="box box-primary" style="padding: 10px">
						<div class="box-header with-border">
							<h4>Edit Kamar Kost</h4>
						</div>
						<form method="POST" action="{{ url('/dashboard/kamar') }}/{{$kamar->id_kamar}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            @if ($errors->count()>0)
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4>Terjadi kesalahan: </h4>
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
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Judul</label>
                                        <input type="text" name="judul" value="{{$kamar->nama_kamar}}" class="form-control" placeholder="Judul">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" >Fasilitas</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">                              
                                                <label><input style="background-color: #141414" type="checkbox" @if($kamar->tv==1) checked @endif; value="1" name="fasilitas_tv">TV</label>
                                            </div>
                                            <div class="form-group">                              
                                                <label><input style="background-color: #141414" type="checkbox" value="1" @if($kamar->ac==1) checked @endif; name="fasilitas_ac">AC</label>
                                            </div>
                                            <div class="form-group">                              
                                                <label><input style="background-color: #141414" type="checkbox" value="1" @if($kamar->km==1) checked @endif; name="fasilitas_km">Kamar Mandi Dalam</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">                              
                                                <label><input style="background-color: #141414" type="checkbox" value="1" @if($kamar->wf==1) checked @endif; name="fasilitas_wifi">WIFI</label>
                                            </div>
                                            <div class="form-group">                              
                                                <label><input style="background-color: #141414" type="checkbox" value="1" @if($kamar->mj==1) checked @endif; name="fasilitas_meja">Meja</label>
                                            </div>
                                            <div class="form-group">                              
                                                <label><input style="background-color: #141414" type="checkbox" value="1" @if($kamar->kr==1) checked @endif; name="fasilitas_kursi">Kursi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">                              
                                                <label><input style="background-color: #141414" type="checkbox" value="1" @if($kamar->kk==1) checked @endif; name="fasilitas_kulkas">Kulkas</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Ketersediaan</label>
                                        <input type="text" name="ketersediaan" value="{{$kamar->jumlah_kamar}}" class="form-control" placeholder="Ketersediaan">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Harga</label>
                                        <input type="text" name="harga" value="{{$kamar->harga_kamar}}" class="form-control" placeholder="Harga">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Penyewaan</label>
                                        <select class="form-control" name="penyewaan">
                                            <option value="">Tipe Waktu Penyewaan</option>
                                            <option @if($kamar->sewa_kamar ==1 ) selected @endif; value="1">Bulanan</option>
                                            <option @if($kamar->sewa_kamar ==2 ) selected @endif; value="2">Tahunan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Gender</label>
                                        <select class="form-control" name="gender">
                                            <option value="">Pilihan Gender</option>
                                            <option @if($kamar->gender_kamar ==1 ) selected @endif; value="1">Laki-laki</option>
                                            <option @if($kamar->gender_kamar ==2 ) selected @endif;  value="2">Perempuan</option>
                                            <option @if($kamar->gender_kamar ==3 ) selected @endif;  value="3">Campur</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Provinsi</label>
                                        <select id="fieldProvinsi" name="provinsi" class="form-control">
                                            <option value="0">Provinsi</option>
                                            @foreach ($provinsis as $provinsi)
                                                <option @if($kamar->provinsi_kamar == $provinsi->id_provinsi ) selected @endif;  value="{{$provinsi->id_provinsi}}">{{$provinsi->nama_provinsi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Kota</label>
                                        <select id="fieldKota" name="kota" class="form-control">
                                            <option value="">Kota</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Media</label>
                                        <div class="form-controls"> 
                                            <div id="list-media">
                                                
                                            </div>
                                            <input type="file" class="image-uploads" name="media[]"/> 
                                        </div>
                                    </div>
                                    <div class="col-md-12 pull-right">
                                        <div class="row">
                                            @foreach ( $kamar->medias as $value)
                                                <div class="col-md-4" style="text-align: center">
                                                    <img src="{{ url($value->path_media.$value->nama_media) }}" class="img-responsive img-thumbnail list-gambar" alt="">
                                                    <a href="{{ url('/dashboard/kamar/deletemedia/') }}/{{$value->id_media}}" class="btn btn-delete-gambar btn-danger">Delete</a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Lokasi Peta</label>
                                        <div id="location-picker" style="height: 400px; overflow: hidden;"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="location-address" class="form-control" name="lokasi" placeholder="Enter a location" autocomplete="on"> 
                                    </div>
                                    <div class="form-group">
                                        <input hidden id="location-lat" name="latitude">
                                    </div>
                                    <div class="form-group">
                                        <input hidden id="location-lon" name="longitude"> 
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn pull-right btn-primary">Simpan</button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
	                	<div class="clearfix"></div>
					</div>
					<!-- /.box -->
				</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
	</div>
		<!-- /.content -->
@endsection

@section('moreCss')
	<style>
		.main-sidebar { background-color: white !important }
		.btn-circle {
            width: 40px;
            height: 40px;
            padding: 6px 0px;
            border-radius: 50%;
            text-align: center;
            font-size: 13px;
            color: white;
        }
	</style>
@endsection

@section('moreJs')
<script src="{{URL::asset('/js/jquery.fileuploader.min.js')}}"></script>
<script src="{{URL::asset('/js/jquery.fileuploader.custom.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js??sensor=false&libraries=places&key=AIzaSyA2HYBg5HU17qWpTDKGM7nsrxclhcvN5Go"></script>
<script src="{{URL::asset('/js/locationpicker.jquery.min.js')}}"></script>
<script>
	getLocation();

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, errorPosition, {
                    timeout: 5000
                });
            } else {
                alert('Browser tidak mendukung')
            }
        }

        function showPosition(position) {
            lat = position.coords.latitude;
            lon = position.coords.longitude;

            $('#location-lat-original').val(lat);
            $('#location-lon-original').val(lon);

            $('#location-picker').locationpicker({
                location: {
                    latitude: '{{$kamar->lat}}',
                    longitude: '{{$kamar->lon}}'
                },
                radius: 0,
                inputBinding: {
                    latitudeInput: $('#location-lat'),
                    longitudeInput: $('#location-lon'),
                    radiusInput: $('#location-radius'),
                    locationNameInput: $('#location-address')
                },
                enableAutocomplete: true,
            });
        };

        function errorPosition() {
            $('#location-picker').locationpicker({
                location: {
                    latitude: 46.15242437752303,
                    longitude: 2.7470703125
                },
                radius: 100,
                inputBinding: {
                    latitudeInput: $('#location-lat'),
                    longitudeInput: $('#location-lon'),
                    radiusInput: $('#location-radius'),
                    locationNameInput: $('#location-address')
                },
                enableAutocomplete: true,
            });
        }

        function route()
        {
            var long_current = $('#location-lon').val();
            var lat_current = $('#location-lat').val();
            var uri = 'https://maps.google.com?saddr=Current+Location&daddr='+lat_current+','+long_current;
            window.open(uri, '_blank');
        }

        getKota('{{$kamar->provinsi_kamar}}','{{$kamar->kota_kamar}}');

        function getKota(id_provinsi, id_kota=null)
        {
            $.ajax({
                url: "{{url('/api/kotabyidprovinsi')}}/"+id_provinsi,
            })
            .done(function() {
            })
            .fail(function() {
            })
            .always(function(response) {
                $('#fieldKota').html('<option value="">Kota</option>');
                if(!response) return false;
                var kotas = JSON.parse(response);
                $.each(kotas, function(index, val) {
                    if(id_kota == kotas[index].id_kota)
                    {
                        var selected='selected';
                    }
                    else
                        var selected = '';
                    $('#fieldKota').append('<option '+selected+' value="'+kotas[index].id_kota+'">'+kotas[index].nama_kota+'</option>');
                });
            });
        }
        $(document).on('change', '#fieldProvinsi', function(e){
            e.preventDefault();
            var id_provinsi = $(this).val();
            getKota(id_provinsi);
            
        });
</script>
@endsection