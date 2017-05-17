@extends('base.layout-home')

@section('title')
	Dashboard
@endsection

@section('content')
	<div class="col-md-4" style="position: absolute;top: 55%; left: 20%;transform: translateY(-50%)">
      <h1 style="font-size:76px;"><b>KOST</b>IN</h1>
    </div>
    <div class="col-md-4" style="position: absolute;top: 55%; left: 50%;transform: translateY(-50%)">
      <h4 style="color: white">Cari Kost</h4>
      <form action="" method="get" accept-charset="utf-8">
        <div class="form-group">
            <label class="control-label" style="color: white">Provinsi</label>
            <select name="provinsi" class="form-control">
                <option value="">Provinsi</option>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label" style="color: white">Kota</label>
            <select name="kota" class="form-control">
                <option value="">Kota</option>
            </select>
        </div>
        <a href="#" id="moreSearch" title="" data-toggle="modal" data-target="#customModal">Custom Search</a>
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
                  <form action="" method="get">
                      <div class="form-group">
                          <label class="control-label">Provinsi</label>
                          <select name="provinsi" class="form-control">
                              <option value="">Provinsi</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Kota</label>
                          <select name="kota" class="form-control">
                              <option value="">Kota</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label class="control-label">Kata Kunci</label>
                          <input type="text" class="form-control" name="keyword" value="" placeholder="Kata Kunci">
                      </div>
                      <div class="form-group">
                          <label class="control-label"><input type="checkbox" id="radius" name="radius" value=""> Pencarian berdasarkan lokasi terdekat</label>
                      </div>
                      <div id="fieldRadius" class="form-group hidden">
                          <label class="control-label">Radius</label>
                          <input type="text" class="form-control" name="jarak_radius" value="" placeholder="Radius (km)">
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cancel</button>
                  <a href="" class="btn btn-primary btn-fill pull-right">Cari</a>
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
	<script>
	  $(document).on('click','.btn-delete', function (e) {
	            e.preventDefault();
	            e.stopPropagation();

	            swal({
	              title: 'Apakah anda yakin?',
	              text: "Data sudah terhapus tidak dapat dikembalikan lagi.",
	              type: 'warning',
	              showCancelButton: true,
	              confirmButtonColor: '#3085d6',
	              cancelButtonColor: '#d33',
	              cancelButtonText:'Batalkan',
	              confirmButtonText: 'Ya, Hapus!'
	            }).then(function () {
	              swal(
	                'Deleted!',
	                'Your file has been deleted.',
	                'success'
	              )
	            });
	        });
	</script>
@endsection
