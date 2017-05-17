@extends('base.layout-home')

@section('title')
	Kost.in
@endsection

@section('content')
	<div class="col-md-4" style="position: absolute;top: 55%; left: 20%;transform: translateY(-50%)">
      <h1  style="font-size:76px; color: white"><b>KOST</b>IN</h1>
    </div>
    <div class="col-md-4" style="position: absolute;top: 55%; left: 50%;transform: translateY(-50%)">
      <h4 style="color: white">Cari Kost</h4>
      <form action="{{ url('/search') }}" method="get" accept-charset="utf-8">
        <div class="form-group">
            <label class="control-label" style="color: white">Provinsi</label>
            <select name="provinsi" id="provinsi" class="form-control">
                <option value="0">Provinsi</option>
                @foreach ($provinsis as $provinsi)
                  <option value="{{$provinsi->id_provinsi}}">{{$provinsi->nama_provinsi}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="control-label" style="color: white">Kota</label>
            <select name="kota" id="kota" class="form-control">
                <option value="">Kota</option>
            </select>
        </div>
        <a href="#" style="color: white; font-weight: bolder;" id="moreSearch" title="" data-toggle="modal" data-target="#customModal">Custom Search</a>
        <div class="row">
        <!-- /.col -->
          <button type="submit" class="btn btn-primary btn-flat" style="position:absolute;right:0;margin-right:15px;">Cari</button>
        <!-- /.col -->
        </div>
      </form>
    </div>
  <!-- /.content-wrapper -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
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
                          <select id="provinsi_cs" name="provinsi" class="form-control">
                              <option value="0">Provinsi</option>
                              @foreach ($provinsis as $provinsi)
                                <option value="{{$provinsi->id_provinsi}}">{{$provinsi->nama_provinsi}}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Kota</label>
                          <select id="kota_cs" name="kota" class="form-control">
                              <option value="">Kota</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Kata Kunci</label>
                          <input type="text" class="form-control" name="keyword" value="" placeholder="Kata Kunci">
                      </div>
                      <input type="text" name="lat" value="" class="lat">
                      <input type="text" name="lg" value="" class="lon">
                      <div class="form-group">
                          <label class="control-label"><input type="checkbox" id="radius" name="radius" value="1"> Pencarian berdasarkan lokasi terdekat</label>
                      </div>
                      <div id="fieldRadius" class="form-group hidden">
                          <label class="control-label">Radius</label>
                          <input type="text" class="form-control" name="jrds" value="25" placeholder="Radius (km)">
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
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js??sensor=false&libraries=places&key=AIzaSyA2HYBg5HU17qWpTDKGM7nsrxclhcvN5Go"></script>
	<script>

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
                     $('#kota').append('<option value="'+kotas[index].id_kota+'">'+kotas[index].nama_kota+'</option>');
                });
            });
            
        });

    $(document).on('change', '#provinsi_cs', function(e){
            e.preventDefault();
            var id_provinsi = $(this).val();
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
                     $('#kota_cs').append('<option value="'+kotas[index].id_kota+'">'+kotas[index].nama_kota+'</option>');
                });
            });
            
        });
	</script>
@endsection
