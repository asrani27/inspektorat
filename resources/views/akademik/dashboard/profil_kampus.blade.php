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
					<h4 class="panel-title">Profil Kampus</h4>
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
								<td class="bg-silver-lighter">Kode Perguruan Tinggi</td>
                                <td><span class="text-black-lighter">{{$data->kode_perguruan_tinggi}}</span></td>
							</tr>
							<tr>
								<td class="bg-silver-lighter">Nama Perguruan Tinggi</td>
                                <td><span class="text-black-lighter">{{$data->nama_perguruan_tinggi}}</span></td>
							</tr>
							<tr>
								<td class="bg-silver-lighter">Alamat</td>
                                <td><span class="text-black-lighter">{{$data->jalan}}</span></td>
							</tr>
							<tr>
								<td class="bg-silver-lighter">Website</td>
                                <td><span class="text-black-lighter">{{$data->website}}</span></td>
							</tr>
							<tr>
								<td class="bg-silver-lighter">Nama Wilayah</td>
                                <td><span class="text-black-lighter">{{$data->nama_wilayah}}</span></td>
							</tr>
							<tr>
								<td class="bg-silver-lighter">Email</td>
                                <td><span class="text-black-lighter">{{$data->email}}</span></td>
							</tr>
							<tr>
								<td class="bg-silver-lighter">Telepon</td>
                                <td><span class="text-black-lighter">{{$data->telepon}}</span></td>
							</tr>
							<tr>
								<td class="bg-silver-lighter">Fax</td>
                                <td><span class="text-black-lighter">{{$data->faximile}}</span></td>
							</tr>
							<tr>
								<td class="bg-silver-lighter">Kodepos</td>
                                <td><span class="text-black-lighter">{{$data->kode_pos}}</span></td>
							</tr>
							
							<tr>
								<td class="bg-silver-lighter">Nama Status Milik State</td>
                                <td><span class="text-black-lighter">{{$data->nama_status_milik}}</span></td>
							</tr>
						
						</tbody>
					</table>
				</div>
				<!-- end table-responsive -->
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-8 -->
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