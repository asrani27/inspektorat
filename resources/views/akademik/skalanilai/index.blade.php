@extends('layouts.default')

@section('title', 'SKALA NILAI')

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
					<h4 class="panel-title">Daftar Skala Nilai</h4>
				</div>
				<!-- end panel-heading -->
				<!-- begin alert -->
				<div class="alert alert-secondary fade show">
					<a href="/setting/skala_nilai/add" class="btn btn-sm btn-primary">
						<span aria-hidden="true">Tambah</span>
					</a>
				</div>
				<!-- end alert -->
				<!-- begin panel-body -->
				<div class="panel-body">
					<table id="data-table-responsive" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th width="1%"></th>
								<th class="text-nowrap">Prodi</th>
								<th class="text-nowrap">Nilai Huruf</th>
								<th class="text-nowrap">Nilai Indeks</th>
								<th class="text-nowrap">Bobot Min</th>
								<th class="text-nowrap">Bobot Max</th>
								<th class="text-nowrap">Tgl Mulai</th>
								<th class="text-nowrap">Tgl Akhir</th>
								<th class="text-nowrap">Aksi</th>
							</tr>
						</thead>
						<tbody>
                            @php
                            $no = 1; 
                            @endphp
                            @foreach ($data as $item)
							<tr class="odd gradeX">
                                <td width="1%" class="f-s-600 text-inverse">{{$no++}}</td>
								<td>{{$item['nama_program_studi']}}</td>
								<td>{{$item['nilai_huruf']}}</td>
								<td>{{$item['nilai_indeks']}}</td>
								<td>{{$item['bobot_minimum']}}</td>
								<td>{{$item['bobot_maksimum']}}</td>
								<td>{{\Carbon\Carbon::parse($item['tanggal_mulai_efektif'])->isoFormat('d MMMM Y')}}</td>
								<td>{{\Carbon\Carbon::parse($item['tanggal_akhir_efektif'])->isoFormat('d MMMM Y')}}</td>
                                <td>       
                                    <a href="/setting/skala_nilai/{{$item['id_bobot_nilai']}}/delete" class="btn btn-danger btn-xs">Delete</a>
                                </td>
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