@extends('layouts.default')

@section('title', 'MAHASISWA')

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
					<h4 class="panel-title">FORM TAMBAH MAHASISWA</h4>
				</div>
				<!-- end panel-heading -->
				<!-- begin panel-body -->
				<div class="panel-body panel-form">
					<form class="form-horizontal form-bordered" method="POST" action="/mahasiswa/tambah/simpan">
                        @csrf
                        <div class="form-group row">
							<label class="col-md-4 col-form-label">Nama Mahasiswa</label>
							<div class="col-md-8">
                                <input class="form-control" type="text" name="nama_mahasiswa" required />
							</div>
                        </div>
                        <div class="form-group row">
							<label class="col-md-4 col-form-label">NIK KTP</label>
							<div class="col-md-8">
                                <input class="form-control" type="text" name="nik" required />
							</div>
                        </div>
                        <div class="form-group row">
							<label class="col-md-4 col-form-label">Tempat Lahir</label>
							<div class="col-md-8">
                                <input class="form-control" type="text" name="tempat_lahir" required/>
							</div>
                        </div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label">Tanggal Lahir</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="datepicker-default"  data-date-format="dd/mm/yyyy" name="tanggal_lahir" required placeholder="Select Date"/>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label">Jenis Kelamin</label>
							<div class="col-md-3">
								<select class="default-select2 form-control" name="jenis_kelamin" required>
										<option value="L">Laki-Laki</option>
										<option value="P">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label">Agama</label>
							<div class="col-md-3">
								<select class="default-select2 form-control" name="id_agama" required>
                                    @foreach ($agama as $item)
                                        <option value="{{$item->id_agama}}">{{$item->nama_agama}}</option>
                                    @endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label">Kewarganegaraan</label>
							<div class="col-md-3">
								<select class="default-select2 form-control" name="kewarganegaraan" required>
                                    @foreach ($negara as $item)
                                        @if($item->id_negara == 'ID')
                                        <option value="{{$item->id_negara}}" selected>{{$item->nama_negara}}</option>
                                        @else
                                        <option value="{{$item->id_negara}}">{{$item->nama_negara}}</option>
                                        @endif
                                    @endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label">Kelurahan</label>
							<div class="col-md-8">
                              <input class="form-control" type="text" name="kelurahan" required/>
							</div>
                        </div>
                        {{-- Hidden Input --}}
                              <input class="form-control" type="hidden" name="penerima_kps" value="0" required/>
                              <input class="form-control" type="hidden" name="id_wilayah" value="{{$wilayah->id_wilayah}}" required/>
						
                        <div class="form-group row">
							<label class="col-md-4 col-form-label">Nama Ibu</label>
							<div class="col-md-8">
                                <input class="form-control" type="text" name="nama_ibu" required />
							</div>
                        </div>
						<div class="form-group row">
							<label class="col-md-4 col-form-label"></label>
							<div class="col-md-8">
                                <button type="submit">SIMPAN</button>
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