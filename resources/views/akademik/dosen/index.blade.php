@extends('layouts.default')

@section('title', 'Dosen')

@push('css')
	<link href="/assets/plugins/datatables/css/dataTables.bootstrap4.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables/css/responsive/responsive.bootstrap4.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin row -->
	<div class="row">
		<!-- begin col-10 -->
		<div class="col-lg-12">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<!-- begin panel-heading -->
				<div class="panel-heading">
					<h4 class="panel-title">Daftar Dosen</h4>
				</div>
				<!-- end panel-heading -->
				<!-- begin alert -->
				<div class="alert alert-secondary fade show">
					<button type="button">
						<span aria-hidden="true">Syncrone</span>
					</button>
				</div>
				<!-- end alert -->
				<!-- begin panel-body -->
				<div class="panel-body">
					<table id="data-table-responsive" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th width="1%"></th>
								<th class="text-nowrap">Nama</th>
								<th class="text-nowrap">NIDN</th>
								<th class="text-nowrap">L/P</th>
								<th class="text-nowrap">Agama</th>
								<th class="text-nowrap">Tanggal Lahir</th>
								<th class="text-nowrap">Status</th>
							</tr>
						</thead>
						<tbody>
                            @php
                            $no = 1; 
                            @endphp
                            @foreach ($data as $item)
							<tr class="odd gradeX">
                                <td width="1%" class="f-s-600 text-inverse">{{$no++}}</td>
								<td>{{$item->nama_dosen}}</td>
								<td>{{$item->nidn}}</td>
								<td>{{$item->jenis_kelamin}}</td>
								<td>{{$item->nama_agama}}</td>
								<td>{{$item->tanggal_lahir}}</td>
								<td>{{$item->nama_status_aktif}}</td>
							</tr>
                            @endforeach
						</tbody>
					</table>
				</div>
				<!-- end panel-body -->
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-10 -->
	</div>
	<!-- end row -->
@endsection

@push('scripts')
	<script src="/assets/plugins/datatables/js/jquery.dataTables.js"></script>
	<script src="/assets/plugins/datatables/js/dataTables.bootstrap4.js"></script>
	<script src="/assets/plugins/datatables/js/responsive/dataTables.responsive.js"></script>
	<script src="/assets/plugins/datatables/js/responsive/responsive.bootstrap4.js"></script>
	<script src="/assets/js/demo/table-manage-responsive.demo.js"></script>
	<script>
		$(document).ready(function() {
			TableManageResponsive.init();
		});
	</script>
@endpush