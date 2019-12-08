@extends('layouts.default')

@section('title', 'Kelas Kuliah')

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
                <h4 class="panel-title">Daftar Kelas Prodi : {{$prodi->nama_jenjang_pendidikan}} {{$prodi->nama_program_studi}}, Periode : {{$semester->nama_semester}}</h4>
				</div>
				<!-- end panel-heading -->
				<!-- begin alert -->
				<div class="alert alert-secondary fade show">
                    <a href="/perkuliahan/kelas" class="btn btn-danger btn-sm">Kembali</a>
                    <a href="/perkuliahan/prodi/{{$prodi->id_prodi}}/kelas/tambah" class="btn btn-primary btn-sm">Tambah Kelas Kuliah</a>
				</div>
				<!-- end alert -->
				<!-- begin panel-body -->
				<div class="panel-body">
					<table id="data-table-responsive" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th width="1%"></th>
								<th class="text-nowrap">Kode MK</th>
								<th class="text-nowrap">Nama MK</th>
								<th class="text-nowrap">Nama Kelas</th>
								<th class="text-nowrap">SKS</th>
								<th class="text-nowrap">Dosen Pengajar</th>
								<th class="text-nowrap">Jml MHS</th>
								<th class="text-nowrap">Aksi</th>
							</tr>
						</thead>
						<tbody>
                            @php
                            $no = 1; 
                            @endphp
                            @foreach ($kelas as $item)
							<tr class="odd gradeX">
                                <td width="1%" class="f-s-600 text-inverse">{{$no++}}</td>
								<td>{{$item['kode_mata_kuliah']}}</td>
								<td>{{$item['nama_mata_kuliah']}}</td>
								<td>{{$item['nama_kelas_kuliah']}}</td>
								<td>{{round($item['sks'])}}</td>
								<td>{{$item['nama_dosen']}}</td>
								<td>{{$item['jumlah_mahasiswa']}}</td>
								<td>
                                    <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-primary"
                                        data-toggle="dropdown"><i class="fa fa-cogs"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="/perkuliahan/prodi/{{$item['id_prodi']}}/edit/kelas/{{$item['id_kelas_kuliah']}}"><i class="fa fa-edit"></i> Edit</a></li>
                                        <li><a href="/perkuliahan/prodi/{{$item['id_prodi']}}/delete/kelas/{{$item['id_kelas_kuliah']}}"><i class="fa fa-times"></i> Delete Kelas</a></li>
										@if($item['id_dosen'] == null)
										<li><a href="/perkuliahan/prodi/{{$item['id_prodi']}}/pengajar/{{$item['id_kelas_kuliah']}}"><i class="fa fa-user"></i> Isi Pengajar</a></li>
										@else
										<li><a href="/perkuliahan/prodi/{{$item['id_prodi']}}/pengajar/{{$item['id_kelas_kuliah']}}/edit"><i class="fa fa-user"></i> Edit Pengajar</a></li>
										<li><a href="/perkuliahan/prodi/{{$item['id_prodi']}}/pengajar/{{$item['id_kelas_kuliah']}}/delete"><i class="fa fa-user"></i> Delete Pengajar</a></li>
										@endif
									</ul>
                                    </div>
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