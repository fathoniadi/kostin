@extends('base.layout-wsidebar')

@section('title')
	Datadiri
@endsection

@section('content')
	<section class="content-header">
			<h1>
				Data Diri
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="box box-primary" style="padding:10px">
						<div class="box-header with-border">
							<h4>Data Diri</h4>
						</div>
						<form>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group col-md-9 pull-right">
                                        <label class="control-label">Nama</label>
                                        <input type="text" name="nama" value="" class="form-control" placeholder="Nama">
                                    </div>
                                    <div class="form-group col-md-9 pull-right">
                                        <label class="control-label">Alamat</label>
                                        <input type="text" name="alamat" value="" class="form-control" placeholder="Alamat">
                                    </div>
                                    <div class="form-group col-md-9 pull-right">
                                     	<label class="control-label">No Identitas</label>
                                     	<input type="text" name="noidentitas" value="" class="form-control" placeholder="No Identitas">
                                    </div>
                                    <div class="form-group col-md-9 pull-right">
                                        <label class="control-label">No Telepon</label>
                                        <input type="text" name="notelepon" value="" class="form-control" placeholder="No Telepon">
                                    </div>
                                    <div class="form-group col-md-9 pull-right">
                                        <label class="control-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggallahir" value="" class="form-control" placeholder="Tanggal Lahir">
                                    </div>
                                    <div class="form-group col-md-9 pull-right">
                                        <label class="control-label">Jenis Kelamin</label>
                                        <select class="form-control" name="jeniskelamin">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="1">Laki-laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn pull-right btn-info btn-fill">Simpan</button>
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

        .panel-kost{
            margin-bottom: 10px;
            border-bottom: 5px solid;
            border-bottom-color: #005F6B;
            padding: 10px;
        }
	</style>
@endsection

@section('moreJs')
	
@endsection