@extends('base.layout-auth')

@section('title')
	Detail Kamar
@endsection
		<section class="content-header">
			<h1>
				Detail Kamar
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i>Detail Kamar</a></li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="box box-primary" style="padding: 10px">
						<div class="box-header">
							<div class="box-header with-border">
								<h5>Kost Putra</h5>
								<h3>Kost Mawar</h3>
							</div>
							<div class="col-md-8">
								<div class="col-md-6 pull-right">
	                    	    	<img src="../dist/img/photo2.png" class="img-responsive img-thumbnail" alt="">
	                    	    </div>
							</div>
							<div class="col-md-10 pull-right">
	                        	<div class="row">
	                            	<div class="col-md-2">
	                                	<img src="../dist/img/photo2.png" class="img-responsive img-thumbnail" alt="">
	                            	</div>
	                            	<div class="col-md-2">
	                                	<img src="../dist/img/photo2.png" class="img-responsive img-thumbnail" alt="">
	                            	</div>
	                            	<div class="col-md-2">
	                                	<img src="../dist/img/photo2.png" class="img-responsive img-thumbnail" alt="">
	                            	</div>
	                            	<div class="col-md-2">
	                                	<img src="../dist/img/photo2.png" class="img-responsive img-thumbnail" alt="">
	                            	</div>
	                            	<div class="col-md-2">
	                                	<img src="../dist/img/photo2.png" class="img-responsive img-thumbnail" alt="">
	                            	</div>
	                        	</div>
	                    	</div>
	                    	<div class="col-md-12 box-header with-border">
	                    	<div class="col-md-6">
	                            <h3 style="margin-top: 0">Kamar Kost Tipe A</h3>
	                            <h4 style="margin-top: 0"><u>Fasilitas</u></h4>
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
	                        <div class="col-md-4 pull-right">
	                        	<div class="col-md-12">
	                            	<h4>Sisa : 3</h4>
	                            <div style="padding: 10px;" class="btn-success btn-fill text-center">
	                                <p>Rp. 10.000.000/Tahun</p>
	                            </div>
	                        </div>
	                    </div>
	                	<div class="clearfix"></div>
	                    </div>
	                    <div class="col-md-12 box-header with-border">
	                    	<div class="col-md-6">
	                            <h3 style="margin-top: 0">Deskripsi Kamar Kost</h3>
	                            <div class="row">
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                            	        <p>Alamat  : Jl. Banjaran No. 3B Surabaya</p>
	                            	        <p>Kec/Kel : Banjaran/Simpangan</p>
	                            	        <p>Kode Pos: 61111</p>
	                            	        <p>No Tlpn : 088881123123</p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-group col-md-4 pull-right">
                            	<label class="control-label">Lokasi Kost</label>
                            	<div id="location-picker" style="height: 200px; overflow: hidden;"></div>
                        	</div>
                        	<div class="form-group">
                        		<input hidden id="location-lat" name="latitude">
                        	</div>
                        	<div class="form-group">
                            	<input hidden id="location-lon" name="longitude"> 
                        	</div>
	                		<div class="clearfix"></div>
	                    </div>
	                    </div>
	                    
					</div>
					<!-- /.box -->
				</div>
			</div>
		</section>
	
@endsection