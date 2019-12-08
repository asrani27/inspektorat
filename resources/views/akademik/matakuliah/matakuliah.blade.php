@extends('layouts.default')

@section('title', 'Prodi')

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
                <h4 class="panel-title">Daftar Mata Kuliah Prodi : {{$prodi->nama_jenjang_pendidikan}} {{$prodi->nama_program_studi}}</h4>
				</div>
				<!-- end panel-heading -->
				<!-- begin alert -->
				<div class="alert alert-secondary fade show">
                    <a href="/perkuliahan/prodi" class="btn btn-danger btn-sm">Kembali</a>
                    <button class="btn btn-primary btn-sm tambah-matakuliah" target="_blank">Tambah Mata Kuliah</button>
				</div>
				<!-- end alert -->
				<!-- begin panel-body -->
				<div class="panel-body">
					<table id="data-table-responsive" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th width="1%"></th>
								<th class="text-nowrap">Kode</th>
								<th class="text-nowrap">Mata Kuliah</th>
								<th class="text-nowrap">SKS</th>
								<th class="text-nowrap">Jenis</th>
								<th class="text-nowrap">Aksi</th>
							</tr>
						</thead>
						<tbody>
                            @php
                            $no = 1; 
                            @endphp
                            @foreach ($matakuliah as $item)
							<tr class="odd gradeX">
                                <td width="1%" class="f-s-600 text-inverse">{{$no++}}</td>
								<td>{{$item['kode_mata_kuliah']}}</td>
								<td>{{$item['nama_mata_kuliah']}}</td>
								<td>{{round($item['sks_mata_kuliah'])}}</td>
								<td>
									@if ($item['id_jenis_mata_kuliah'] == 'A')
										Wajib
									@elseif ($item['id_jenis_mata_kuliah'] == 'B')
										Pilihan
									@elseif ($item['id_jenis_mata_kuliah'] == 'C')
										Wajib Peminatan
									@elseif ($item['id_jenis_mata_kuliah'] == 'D')
										Pilihan Peminatan
									@elseif ($item['id_jenis_mata_kuliah'] == 'S')
										Tugas akhir/Skripsi/Tesis/Disertasi 
									@endif
								</td>
								<td>
								<button class="btn btn-primary btn-xs edit-matakuliah"
								data-id_mata_kuliah="{{$item['id_matkul']}}"
								data-nama_mata_kuliah="{{$item['nama_mata_kuliah']}}"
								data-kode_mata_kuliah="{{$item['kode_mata_kuliah']}}"
								data-sks_mata_kuliah="{{$item['sks_mata_kuliah']}}"
								data-id_jenis_mata_kuliah="{{$item['id_jenis_mata_kuliah']}}">Edit</button> 
                                    -
									<a href="/perkuliahan/prodi/{{$item['id_prodi']}}/delete/{{$item['id_matkul']}}" class="btn btn-primary btn-xs">Delete</a>
                                </td>
							</tr>
                            @endforeach
						</tbody>
					</table>
					<!-- #modal-dialog -->
					<div class="modal fade" id="tambah-matakuliah">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">TAMBAH MATA KULIAH</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <form action="/perkuliahan/prodi/{{$prodi->id_prodi}}/mata_kuliah/simpan" method="POST">
                                    @csrf
								<div class="modal-body">
									<p>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-4 col-form-label">Kode Mata Kuliah</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" required id="kode_mata_kuliah" name="kode_mata_kuliah" />
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-4 col-form-label">Nama Mata Kuliah</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" required id="nama_mata_kuliah" name="nama_mata_kuliah" />
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-4 col-form-label">Jenis Mata Kuliah</label>
                                            <div class="col-md-8">
                                                <select class="form-control " name="id_jenis_mata_kuliah">
                                                    <option value="A">Wajib</option>
                                                    <option value="B">Pilihan</option>
                                                    <option value="S">TA/Skripsi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-4 col-form-label">Jumlah SKS</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" required name="sks_mata_kuliah" />
                                            </div>
                                        </div>
									</p>
								</div>
								<div class="modal-footer">
									<a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
									<button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                                </form>
							</div>
						</div>
					</div>
					<!-- #modal-dialog -->
					<div class="modal fade" id="edit-matakuliah">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">EDIT MATA KULIAH</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <form action="/perkuliahan/prodi/{{$prodi->id_prodi}}/mata_kuliah/update" method="POST">
                                    @csrf
								<div class="modal-body">
									<p>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-4 col-form-label">Kode Mata Kuliah</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" required id="e_kode_mata_kuliah" name="kode_mata_kuliah" />
                                                <input type="hidden" class="form-control" required id="id_mata_kuliah" name="id_mata_kuliah" />
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-4 col-form-label">Nama Mata Kuliah</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" required id="e_nama_mata_kuliah" name="nama_mata_kuliah" />
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-4 col-form-label">Jenis Mata Kuliah</label>
                                            <div class="col-md-8">
                                                <select class="form-control" id="e_id_jenis_mata_kuliah" name="id_jenis_mata_kuliah">
                                                    <option value="A">Wajib</option>
                                                    <option value="B">Pilihan</option>
                                                    <option value="S">TA/Skripsi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-4 col-form-label">Jumlah SKS</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" required id="e_sks_mata_kuliah" name="sks_mata_kuliah" />
                                            </div>
                                        </div>
									</p>
								</div>
								<div class="modal-footer">
									<a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
									<button type="submit" class="btn btn-success">Update</button>
                                </div>
                                </form>
							</div>
						</div>
					</div>
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
			$(document).on('click', '.tambah-matakuliah', function() {
				document.getElementById('kode_mata_kuliah').value = "";
				document.getElementById('nama_mata_kuliah').value = "";
            $('#tambah-matakuliah').modal('show');
            });
			$(document).on('click', '.edit-matakuliah', function() {
				var id_jenis_mata_kuliah = $(this).data('id_jenis_mata_kuliah');
            $('#e_kode_mata_kuliah').val($(this).data('kode_mata_kuliah'));
            $('#id_mata_kuliah').val($(this).data('id_mata_kuliah'));
            $('#e_nama_mata_kuliah').val($(this).data('nama_mata_kuliah'));
            $('#e_sks_mata_kuliah').val($(this).data('sks_mata_kuliah'));
			if(id_jenis_mata_kuliah == 'A')
			{
			$('#e_id_jenis_mata_kuliah').children().remove().end()
			.append('<option value="A" selected>Wajib</option><option value="B">Pilihan</option><option value="S">TA/Skripsi</option>');
			}
			else
			if(id_jenis_mata_kuliah == 'B')
			{
			$('#e_id_jenis_mata_kuliah').children().remove().end()
			.append('<option value="A">Wajib</option><option value="B" selected>Pilihan</option><option value="S">TA/Skripsi</option>');
			}
			else
			if(id_jenis_mata_kuliah == 'S')
			{
			$('#e_id_jenis_mata_kuliah').children().remove().end()
			.append('<option value="A">Wajib</option><option value="B">Pilihan</option><option value="S" selected>TA/Skripsi</option>');
			}
            $('#edit-matakuliah').modal('show');
            });

			TableManageResponsive.init();
		});
	</script>
@endpush