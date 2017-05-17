@extends('base.layout-wsidebar')

@section('title')
	Dashboard
@endsection

@section('content')
	<section class="content-header">
		<h1>
			Dashboard
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		</ol>
	</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
				@if(Session::get('message'))
			        <div class="alert alert-success alert-dismissible" role="alert">
			            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			            <h4>Sukses!</h4> 
			            {{Session::get('message')}}.
			        </div>
				@endif
					<!-- general form elements -->
					<div class="box box-primary" style="padding: 10px">
						<div class="box-header with-border">
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-sm-12 panel-kost" style="padding: 10px">
									<a href="{{ url('/dashboard/kamar/create') }}" class="btn btn-primary pull-right" title="">Tambah Kamar Kost</a>
								</div>
								@foreach ($kamars as $key => $kamar)
									<div class="col-sm-12 panel-kost">
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
					                            	<h3 style="margin-top: 0">{{$kamar->nama_kamar}}</h3>
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
					                       	<form class="form-delete" action="{{ url('/dashboard/kamar') }}/{{$kamar->id_kamar}}" method="post" accept-charset="utf-8">
					                       		{{csrf_field()}}
												{{method_field('DELETE')}}
				                               <button type="button" class="btn btn-danger btn-fill pull-right btn-circle btn-delete" style="" type="button"><span class="fa fa-close" style="font-weight: bolder;"></span></button>
				                            </form>
					                        <div class="col-md-12">
					                            <h4>Sisa : {{$kamar->jumlah_kamar}}</h4>
					                            <div style="padding: 10px;" class="btn-success btn-fill text-center">
					                                <p>Rp. {{$kamar->harga_kamar}}/@if($kamar->sewa_kamar==1)
					                                	Bulan
					                                @elseif($kamar->sewa_kamar==2)
					                                	Tahun
					                                @endif</p>
					                            </div>
					                        </div>
					                        <div class="col-md-12" style="padding: 10px">
				                                <a href="#" class="btn btn-default btn-fill pull-right">Lihat</a>
				                                <a href="#"  class="btn btn-warning btn-fill pull-right">Edit</a>
				                            </div>
					                    </div>
					                	<div class="clearfix"></div>
									</div>
								@endforeach
							</div>
						</div>
						<div class="box-footer text-right">
			                {{$kamars->links()}}
			            </div>
					</div>
				</div>
			</div>
		</section>
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

        .panel-kost{
            margin-bottom: 10px;
            border-bottom: 5px solid;
            border-bottom-color: #005F6B;
            padding: 10px;
        }
	</style>
@endsection

@section('moreJs')
	<script>
	$(document).on('click','.btn-delete', function (e) {
            e.preventDefault();
            e.stopPropagation();
            var form = $(this).parents('form');
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
            	form.submit();
            });
        });
</script>
@endsection