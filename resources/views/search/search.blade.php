@extends('base.layout-sidebar')

@section('title')
	Dashboard
@endsection

@section('sidebar')
	<div class="user-panel" style="">
	    <h4>Hasil Pencarian</h4>
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
	        <a href="#" id="moreSearch" title="" data-toggle="modal" data-target="#customModal">Custom Search</a>
	        <a href="" class="btn btn-primary pull-right" style="color: white">Cari</a>
	    </form>
	</div>
	<div class="clearfix"></div>
	<div style="border-top: 1px solid; margin-top: 10px; padding: 10px;">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="form-group">
	                <label class="control-label">Harga</label>
	                <select name="" class="form-control">
	                    <option value="">Pilih Range Harga</option>
	                    <option value="">< 1.000.000</option>
	                    <option value="">1.000.000</option>
	                    <option value="">>1.000.000</option>
	                </select>
	            </div>
	        </div>
	        <div class="col-md-6">
	            <div class="form-group">
	                <label class="control-label">Gender</label>
	                <select class="form-control" name="penyewaan">
	                    <option value="">Pilihan Gender</option>
	                    <option value="1">Laki-laki</option>
	                    <option value="2">Perempuan</option>
	                    <option value="3">Campur</option>
	                </select>
	            </div>
	        </div>
	        <div class="col-md-6">
	            <div class="form-group">
	                <label class="control-label">Penyewaan</label>
	                <select class="form-control" name="penyewaan">
	                    <option value="">Tipe Waktu Penyewaan</option>
	                    <option value="1">Bulanan</option>
	                    <option value="2">Tahunan</option>
	                </select>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="control-label">Fasilitas</label>
	        </div>
	        <div class="col-md-6">
	            <div class="form-group">                              
	                <label><input style="background-color: #141414" type="checkbox" name="fasilitas_tv" value="">TV</label>
	            </div>
	            <div class="form-group">                              
	                <label><input style="background-color: #141414" type="checkbox" name="fasilitas_ac" value="">AC</label>
	            </div>
	            <div class="form-group">                              
	                <label><input style="background-color: #141414" type="checkbox" name="fasilitas_wifi" value="">WIFI</label>
	            </div>
	            <div class="form-group">                              
	                <label><input style="background-color: #141414" type="checkbox" name="fasilitas_km" value="">Kamar Mandi Dalam</label>
	            </div>
	        </div>
	        <div class="col-md-6">
	            <div class="form-group">                              
	                <label><input style="background-color: #141414" type="checkbox" name="fasilitas_meja" value="">Meja</label>
	            </div>
	            <div class="form-group">                              
	                <label><input style="background-color: #141414" type="checkbox" name="fasilitas_kursi" value="">Kursi</label>
	            </div>
	            <div class="form-group">                              
	                <label><input style="background-color: #141414" type="checkbox" name="fasilitas_kursi" value="">Kulkas</label>
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
				<!-- general form elements -->
				<div class="box box-primary" style="padding: 10px">
					<div class="box-header with-border">
					</div>
					<div class="col-md-8">
	                    <div class="row">
	                        <div class="col-lg-4">
	                            <img src="../dist/img/photo2.png" class="img-responsive img-thumbnail" alt="">
	                        </div>
	                        <div class="col-lg-8">
	                        	<h3 style="margin-top: 0">Kamar Kost 1 Putra</h3>
	                            <div class="row">
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                                       <p>TV</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                        <p>AC</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                       <p>Kamar Mandi Dalam</p>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                                       <p>Wifi</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                        <p>Meja</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                        <p>Kursi</p>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                                        <p>Kulkas</p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-4">
	                    <h4 class="pull-right" style="margin:0"><i class="fa fa-trophy" style="color:orange"></i> Rekomendasi</h4>
	                    <div class="col-md-12">
	                        <h4>Sisa : 3</h4>
	                        <div style="padding: 10px;" class="btn-success btn-fill text-center">
	                            <p>Rp. 10.000.000/Tahun</p>
	                        </div>
	                    </div>
	                </div>
	            	<div class="clearfix"></div>
				</div>
				<!-- /.box -->
			</div>
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary" style="padding: 10px">
					<div class="box-header with-border">
					</div>
					<div class="col-md-8">
	                    <div class="row">
	                        <div class="col-lg-4">
	                            <img src="../dist/img/photo2.png" class="img-responsive img-thumbnail" alt="">
	                        </div>
	                        <div class="col-lg-8">
	                        	<h3 style="margin-top: 0">Kamar Kost 1 Putra</h3>
	                            <div class="row">
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                                       <p>TV</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                        <p>AC</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                       <p>Kamar Mandi Dalam</p>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                                       <p>Wifi</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                        <p>Meja</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                        <p>Kursi</p>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                                        <p>Kulkas</p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-4">
	                    <div class="col-md-12">
	                        <h4>Sisa : 3</h4>
	                        <div style="padding: 10px;" class="btn-success btn-fill text-center">
	                            <p>Rp. 10.000.000/Tahun</p>
	                        </div>
	                    </div>
	                </div>
	            	<div class="clearfix"></div>
				</div>
				<!-- /.box -->
			</div>
			<!--/.col (left) -->
			<!-- right column -->
			<!--/.col (right) -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary" style="padding: 10px">
					<div class="box-header with-border">
					</div>
					<div class="col-md-8">
	                    <div class="row">
	                        <div class="col-lg-4">
	                            <img src="../dist/img/photo2.png" class="img-responsive img-thumbnail" alt="">
	                        </div>
	                        <div class="col-lg-8">
	                        	<h3 style="margin-top: 0">Kamar Kost 1 Putra</h3>
	                            <div class="row">
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                                       <p>TV</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                        <p>AC</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                       <p>Kamar Mandi Dalam</p>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                                       <p>Wifi</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                        <p>Meja</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                        <p>Kursi</p>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                                        <p>Kulkas</p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-4">
	                    <div class="col-md-12">
	                        <h4>Sisa : 3</h4>
	                        <div style="padding: 10px;" class="btn-success btn-fill text-center">
	                            <p>Rp. 10.000.000/Tahun</p>
	                        </div>
	                    </div>
	                </div>
	            	<div class="clearfix"></div>
				</div>
				<!-- /.box -->
			</div>
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary" style="padding: 10px">
					<div class="box-header with-border">
					</div>
					<div class="col-md-8">
	                    <div class="row">
	                        <div class="col-lg-4">
	                            <img src="../dist/img/photo2.png" class="img-responsive img-thumbnail" alt="">
	                        </div>
	                        <div class="col-lg-8">
	                        	<h3 style="margin-top: 0">Kamar Kost 1 Putra</h3>
	                            <div class="row">
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                                       <p>TV</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                        <p>AC</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                       <p>Kamar Mandi Dalam</p>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                                       <p>Wifi</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                        <p>Meja</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                        <p>Kursi</p>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                                        <p>Kulkas</p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-4">
	                    <div class="col-md-12">
	                        <h4>Sisa : 3</h4>
	                        <div style="padding: 10px;" class="btn-success btn-fill text-center">
	                            <p>Rp. 10.000.000/Tahun</p>
	                        </div>
	                    </div>
	                </div>
	            	<div class="clearfix"></div>
				</div>
				<!-- /.box -->
			</div>
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary" style="padding: 10px">
					<div class="box-header with-border">
					</div>
					<div class="col-md-8">
	                    <div class="row">
	                        <div class="col-lg-4">
	                            <img src="../dist/img/photo2.png" class="img-responsive img-thumbnail" alt="">
	                        </div>
	                        <div class="col-lg-8">
	                        	<h3 style="margin-top: 0">Kamar Kost 1 Putra</h3>
	                            <div class="row">
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                                       <p>TV</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                        <p>AC</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                       <p>Kamar Mandi Dalam</p>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                                       <p>Wifi</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                        <p>Meja</p>
	                                    </div>
	                                    <div class="form-group">                              
	                                        <p>Kursi</p>
	                                    </div>
	                                </div>
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                                        <p>Kulkas</p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-4">
	                    <div class="col-md-12">
	                        <h4 style="color: red">Sisa : 0</h4>
	                        <div style="padding: 10px;" class="btn-danger btn-fill text-center">
	                            <p>Tidak ada kamar yang tersedia</p>
	                        </div>
	                    </div>
	                </div>
	            	<div class="clearfix"></div>
				</div>
				<!-- /.box -->
			</div>
		</div>
		<div class="box-footer text-right">
	        <ul class="pagination">
	            <li class="disabled"><span>«</span>
	            </li>
	            <li class="active"><span>1</span>
	            </li>
	            <li><a href="http://10.151.36.5:6969/kucinglucu/oprec/9fae20e0-2528-11e7-91c2-4fddc4684aa3?page=2">2</a>
	            </li>
	            <li><a href="http://10.151.36.5:6969/kucinglucu/oprec/9fae20e0-2528-11e7-91c2-4fddc4684aa3?page=3">3</a>
	            </li>
	            <li><a href="http://10.151.36.5:6969/kucinglucu/oprec/9fae20e0-2528-11e7-91c2-4fddc4684aa3?page=2" rel="next">»</a>
	            </li>
	        </ul>
	    </div>
		<!-- /.row -->
	</section>
@endsection

@section('moreJs')
<script>
	$(document).on('click', '#radius', function(e){
            var flag = $(this).is(':checked');
            if(flag)
            {
                $('#fieldRadius').removeClass('hidden');
            }
            else
            {
                $('#fieldRadius').addClass('hidden');
            }
        });
</script>
@endsection