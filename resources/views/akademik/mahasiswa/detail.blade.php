@extends('layouts.default')

@section('title', 'PROFIL KAMPUS')

@push('css')
	<link href="/assets/plugins/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap3-editable/inputs-ext/address/address.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap3-editable/inputs-ext/typeaheadjs/lib/typeahead.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap3-editable/inputs-ext/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap3-editable/inputs-ext/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap3-editable/inputs-ext/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap3-editable/inputs-ext/select2/select2.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap3-editable/inputs-ext/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet" />
@endpush

@section('content')
	
	<!-- begin row -->
	<div class="row">
		<!-- begin col-8 -->
		<div class="col-lg-8">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">Biodata Mahasiswa</h4>
				</div>
				<!-- begin table-responsive -->
				<div class="table-responsive">
					<table id="user" class="table table-condensed table-bordered">
						<thead>
							<tr>
								<th width="30%">Label</th>
								<th>Deskripsi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="bg-silver-lighter">NIM</td>
                                <td><span class="text-black-lighter">{{$mhs['nim']}}</span></td>
							</tr>
							<tr>
								<td class="bg-silver-lighter">Nama Mahasiswa</td>
                                <td><span class="text-black-lighter">{{$mhs['nama_mahasiswa']}}</span></td>
							</tr>
							<tr>
								<td class="bg-silver-lighter">Nama Program Studi</td>
                                <td><span class="text-black-lighter">{{$mhs['nama_program_studi']}}</span></td>
							</tr>
							<tr>
								<td class="bg-silver-lighter">Jenis Kelamin</td>
                                <td><span class="text-black-lighter">{{$mhs['jenis_kelamin']}}</span></td>
							</tr>
							<tr>
								<td class="bg-silver-lighter">Tanggal lahir</td>
                                <td><span class="text-black-lighter">{{\Carbon\Carbon::parse($mhs['tanggal_lahir'])->isoFormat('d MMMM Y')}}</span></td>
							</tr>
							<tr>
								<td class="bg-silver-lighter">Agama</td>
                                <td><span class="text-black-lighter">{{$mhs['nama_agama']}}</span></td>
							</tr>
							<tr>
								<td class="bg-silver-lighter">Periode Masuk</td>
                                <td><span class="text-black-lighter">{{$mhs['nama_periode_masuk']}}</span></td>
							</tr>
							<tr>
								<td class="bg-silver-lighter">STATUS</td>
                                <td><span class="text-black-lighter">{{$mhs['nama_status_mahasiswa']}}</span></td>
							</tr>
						
						</tbody>
					</table>
				</div>
				<!-- end table-responsive -->
			</div>
			<!-- end panel -->
		</div>
        <!-- end col-8 -->
        <div class="col-lg-4">
            <div class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">Account</h4>
                </div>
                <div class="panel-body p-t-10">
                    <div class="text-center">
                    @if($foto == null)
                        <i class="fas fa-user fa-9x"></i>
                    @else
                        <img src="/assets/img/user/user-13.jpg" alt=""> 
                    @endif
                    </div><br />
                    <form method="POST" action="">
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3">Username</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control"  value="{{$mhs['nim']}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                </div>
            </div>
        </div>
	</div>
	<!-- end row -->
@endsection

@push('scripts')
	<script src="/assets/plugins/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
	<script src="/assets/plugins/bootstrap3-editable/inputs-ext/address/address.js"></script>
	<script src="/assets/plugins/bootstrap3-editable/inputs-ext/typeaheadjs/lib/typeahead.js"></script>
	<script src="/assets/plugins/bootstrap3-editable/inputs-ext/typeaheadjs/typeaheadjs.js"></script>
	<script src="/assets/plugins/bootstrap3-editable/inputs-ext/bootstrap-wysihtml5/wysihtml5.js"></script>
	<script src="/assets/plugins/bootstrap3-editable/inputs-ext/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
	<script src="/assets/plugins/bootstrap3-editable/inputs-ext/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
	<script src="/assets/plugins/bootstrap3-editable/inputs-ext/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="/assets/plugins/bootstrap3-editable/inputs-ext/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script src="/assets/plugins/bootstrap3-editable/inputs-ext/select2/select2.min.js"></script>
	<script src="/assets/plugins/jquery-mockjax/dist/jquery.mockjax.js"></script>
	<script src="/assets/plugins/moment/moment.js"></script>
	<script src="/assets/js/demo/form-editable.demo.js"></script>
	<script>
		$(document).ready(function() {
			FormEditable.init();
		});
	</script>
@endpush