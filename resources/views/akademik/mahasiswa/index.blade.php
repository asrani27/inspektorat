@extends('layouts.default')

@section('title', 'Managed Tables - Responsive')

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
					<h4 class="panel-title">Daftar Mahasiswa</h4>
				</div>
				<!-- end panel-heading -->
				<!-- begin alert -->
				<div class="alert alert-secondary fade show">
                    <a href="/mahasiswa/tambah" class="btn btn-primary btn-sm" target="_blank">Tambah Mahasiswa</a>
				</div>
				<!-- end alert -->
				<!-- begin panel-body -->
				<div class="panel-body">
					<table id="data-table-responsive2" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th></th>
								<th class="text-nowrap">Nama</th>
								<th class="text-nowrap">NIM</th>
								<th class="text-nowrap">L/P</th>
								<th class="text-nowrap">Tgl Lahir</th>
								<th class="text-nowrap">Prodi</th>
								<th class="text-nowrap">Status</th>
								<th class="text-nowrap">Aksi</th>
							</tr>
						</thead>
						<tbody>
                            {{-- @php
                            $no = 1; 
                            @endphp
                            @foreach ($dataMhs as $item)
							<tr class="odd gradeX">
                                <td width="1%" class="f-s-600 text-inverse">{{$no++}}</td>
								<td>{{$item['nama_mahasiswa']}}</td>
								<td>{{$item['nim']}}</td>
								<td>{{$item['jenis_kelamin']}}</td>
								<td>{{$item['tanggal_lahir']}}</td>
								<td>{{$item['nama_program_studi']}}</td>
								<td>{{$item['nama_status_mahasiswa']}}</td>
								<td>
                                    <div class="btn-group">
                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Biodata</a></li>
                                        <li><a href="#">User & Pass</a></li>
                                        <li><a href="/mahasiswa/delete/{{$item['id_mahasiswa']}}">Delete</a></li>
                                    </ul>
                                    </div>
                                </td>
							</tr> 
                            @endforeach--}}
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
		$('#data-table-responsive2').DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: "{{ url('/mahasiswa/getdata') }}",
			columns: [
            			{ data: 'DT_RowIndex'},
						{ data: 'nama_mahasiswa'},
						{ data: 'nim'},
						{ data: 'jenis_kelamin'},
						{ data: 'tanggal_lahir'},
						{ data: 'nama_program_studi'},
						{ data: 'nama_status_mahasiswa'},
                		{ data: 'action', orderable:false, searchable:false },
					]
			});

			TableManageResponsive.init();
		});
	</script>
@endpush