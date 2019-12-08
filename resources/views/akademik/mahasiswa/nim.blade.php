@extends('layouts.default')

@section('title', 'RIWAYAT PENDIDIKAN')

@push('css')
	<link href="/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
	<link href="/assets/plugins/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" />
	<link href="/assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinNice.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
	<link href="/assets/plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
	<link href="/assets/plugins/tag-it/css/jquery.tagit.css" rel="stylesheet" />
    <link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link href="/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="/assets/plugins/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css" rel="stylesheet" />
    <link href="/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css" rel="stylesheet" />
    <link href="/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css" rel="stylesheet" />
    <link href="/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin row -->
	<div class="row">
		<!-- begin col-12 -->
		<div class="col-lg-12">
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="form-plugins-3">
				<!-- begin panel-heading -->
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">FORM RIWAYAT PENDIDIKAN</h4>
				</div>
				<!-- end panel-heading -->
				<!-- begin panel-body -->
				<div class="panel-body panel-form">
                    <form class="form-horizontal form-bordered" method="POST" action="/mahasiswa/nim/{{$id_mhs}}/simpan">
                        @csrf
                        <div class="form-group row">
							<label class="col-md-4 col-form-label">NIM</label>
							<div class="col-md-8">
                                <input class="form-control" type="text" name="nim" required />
							</div>
                        </div>
                        <div class="form-group row">
							<label class="col-md-4 col-form-label">Jenis Pendaftaran</label>
							<div class="col-md-3">
								<select class="default-select2 form-control" name="id_jenis_daftar" required>
                                    @foreach ($jenisdaftar as $item)
                                         <option value="{{$item['id_jenis_daftar']}}">{{$item['nama_jenis_daftar']}}</option>
                                    @endforeach
								</select>
							</div>
                        </div>
                        <div class="form-group row">
							<label class="col-md-4 col-form-label">Jalur Pendaftaran</label>
							<div class="col-md-3">
								<select class="default-select2 form-control" name="id_jalur_daftar" required>
                                    @foreach ($jalurdaftar as $item)
                                        <option value="{{$item['id_jalur_masuk']}}">{{$item['nama_jalur_masuk']}}</option>
                                   @endforeach
								</select>
							</div>
                        </div>
                        <div class="form-group row">
							<label class="col-md-4 col-form-label">Periode Pendaftaran</label>
							<div class="col-md-8">
                                <input class="form-control" type="text" value="{{$semester->nama_semester}}" readonly />
                                <input class="form-control" type="hidden" name="id_periode_masuk" value="{{$semester->id_semester}}" readonly />
							</div>
                        </div>
                        <div class="form-group row">
							<label class="col-md-4 col-form-label">Tanggal Daftar</label>
							<div class="col-md-8">		
                                <input type="text" class="form-control" id="datepicker-default"  data-date-format="dd/mm/yyyy" name="tanggal_daftar" required placeholder="Select Date"/>
							</div>
                        </div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label">Perguruan Tinggi</label>
							<div class="col-md-8"> 
                            <input class="form-control" type="text" value="{{$pt['kode_perguruan_tinggi']}} - {{$pt['nama_perguruan_tinggi']}}" readonly/>
                            <input class="form-control" type="hidden" name="id_perguruan_tinggi" value="{{$pt['id_perguruan_tinggi']}}"/>
							</div>
                        </div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label">Program Studi</label>
							<div class="col-md-3">
								<select class="default-select2 form-control" name="id_prodi" required>
									@foreach ($prodi as $item)
                                        <option value="{{$item['id_prodi']}}">{{$item['nama_jenjang_pendidikan']}}-{{$item['nama_program_studi']}}</option>
                                   @endforeach
								</select>
							</div>
						</div>
                        <div class="form-group row">
							<label class="col-md-4 col-form-label">Jumlah SKS Di Akui</label>
							<div class="col-md-3">
                                <label>Selain jenis pendaftaran peserta didik baru, Silahkan lengkapi data di Bawah berikut</label><br />
                                <input class="form-control" type="text" name="sks_diakui"/>
							</div>
                        </div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label">Asal Perguruan Tinggi</label>
							<div class="col-md-3">
								<select class="default-select2 form-control" name="id_perguruan_tinggi_asal" >
                                        <option value=null>--Pilih--</option> 
                                        @foreach ($allpt as $item)
                                        <option value="{{$item->id_perguruan_tinggi}}">{{$item->kode_perguruan_tinggi}} - {{$item->nama_perguruan_tinggi}}</option>
                                        @endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label">Asal Program Studi</label>
							<div class="col-md-3">
								<select class="default-select2 form-control" name="id_prodi_asal" >
                                        <option value=null>--Pilih--</option>
                                       
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label"></label>
							<div class="col-md-8">
                                <button type="submit">SIMPAN</button>
                                <a href="/mahasiswa">KEMBALI</a>
							</div>
                        </div>
					</form> 
				</div>
				<!-- end panel-body -->
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-12 -->
	</div>
	<!-- end row -->
@endsection

@push('scripts')
	<script src="/assets/plugins/jquery-migrate/jquery-migrate.min.js"></script>
	<script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
	<script src="/assets/plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	<script src="/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
	<script src="/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="/assets/plugins/password-indicator/js/password-indicator.js"></script>
	<script src="/assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	<script src="/assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
	<script src="/assets/plugins/tag-it/js/tag-it.min.js"></script>
    <script src="/assets/plugins/moment/moment.js"></script>
    <script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/assets/plugins/select2/dist/js/select2.min.js"></script>
    <script src="/assets/plugins/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/plugins/bootstrap-show-password/bootstrap-show-password.js"></script>
    <script src="/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
    <script src="/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
    <script src="/assets/plugins/clipboard/dist/clipboard.min.js"></script>
	<script src="/assets/js/demo/form-plugins.demo.js"></script>
	<script>
		$(document).ready(function() {
			FormPlugins.init();
		});
    </script>
@endpush