@extends('layouts.default')

@section('title', 'Pembangunan')

@push('css')

@endpush

@section('content')
<div class="row">
		<!-- begin col-10 -->
		<div class="col-lg-12">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<!-- begin panel-heading -->
				<div class="panel-heading">
                <h4 class="panel-title">PEMBANGUNAN - {{strtoupper($skpd->nama)}}</h4>
				</div>
				<!-- end panel-heading -->
				<!-- begin alert -->
				<div class="alert alert-secondary fade show">
                    <a href="/" class="btn btn-danger btn-sm">Kembali</a>
                </div>
				<!-- end alert -->
				<!-- begin panel-body -->
				<div class="panel-body">
					<div class="table-responsive table-bordered">
					<table id="data-table-responsive" class="table table-bordered">
						<thead>
							<tr>
								<th width="1%">NO</th>
								<th class="text-nowrap">KOMPONEN PENGUNGKIT</th>
								<th class="text-nowrap">BOBOT</th>
								<th class="text-nowrap">NILAI</th>
								<th class="text-nowrap">KETERANGAN</th>
								<th class="text-nowrap">FILE</th>
								<th class="text-nowrap">STATUS</th>
								<th class="text-nowrap">AKSI</th>
							</tr>
						</thead>
						<tbody>
                            @php
                            $no = 1; 
                            @endphp
                            @foreach ($map as $item)
							<tr class="odd gradeX">
                                <td width="1%" class="f-s-600 text-inverse">{{$no++}}</td>
                                <td>{{$item->nama}}</td>
                                <td class="text-center" width="10px">{{$item->bobot}} %</td>
                                <td class="text-center" >{{$item->nilai}}</td>
                                <td>{{$item->keterangan}}</td>
                                <td>{{$item->filename}}</td>
                                <td>
									
									@if($item->filename == null)
									-
									@else
										@if($item->status == 0)
										<a href="#" class="btn btn-xs btn-primary edit-status" data-id="{{$item->upload_id}}" data-status="{{$item->status}}">Dalam Proses</a>
										@elseif($item->status == 1)
										<a href="#" class="btn btn-xs btn-primary edit-status" data-id="{{$item->upload_id}}" data-status="{{$item->status}}">Sesuai</a>
										@elseif($item->status == 2)
										<a href="#" class="btn btn-xs btn-primary edit-status" data-id="{{$item->upload_id}}" data-status="{{$item->status}}">Belum Di Tidak Lanjuti</a>
										@elseif($item->status == 3)
										<a href="#" class="btn btn-xs btn-primary edit-status" data-id="{{$item->upload_id}}" data-status="{{$item->status}}">Tidak Sesuai</a>
										@endif
									@endif
								</td>
                                <td>
									@if($item->filename == null)
									<a href="#" class="btn btn-xs btn-primary add-upload" data-id="{{$item->id}}">Upload</a>
                                    @else
                                        @if($item->status == 1)
                                        <a href="/storage/pembangunan/{{$id_skpd}}/{{$item->filename}}" target="_blank" class="btn btn-xs btn-purple">Unduh</a>
                                        @else
                                        <a href="/storage/pembangunan/{{$id_skpd}}/{{$item->filename}}" target="_blank" class="btn btn-xs btn-purple">Unduh</a>
                                        <a href="#" class="btn btn-xs btn-warning edit-upload" data-id="{{$item->upload_id}}">Edit</a>		
                                        <a href="/pembangunan/delete/{{$item->upload_id}}" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda Yakin ingin menghapus Data Ini?');">Delete</a> 	
                                        @endif
                                    @endif
                                </td>
							</tr>
                            @endforeach
                        </tbody>
					</table>
					</div>
				</div>
				<!-- end panel-body -->
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-10 -->
</div>
<div class="modal fade" id="modal-dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Upload File</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
                <form action="/pembangunan/upload" method="POST" enctype="multipart/form-data">
					@csrf
				<div class="modal-body">
					<p> 
						<div class="form-group row m-b-15">
							<label class="col-md-2 col-form-label">FILE :</label>
							<div class="col-md-8">
								<input type="file" class="form-control" name="file" id="upload_file" required>
								<input type="hidden" class="form-control" id="komponen_id" name="komponen_id" readonly>
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
<div class="modal fade" id="modal-dialog-edit-file">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit File</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<form action="/pembangunan/updatefile" method="POST" enctype="multipart/form-data">
					@csrf
				<div class="modal-body">
					<p>
						<div class="form-group row m-b-15">
							<label class="col-md-3 col-form-label">File Baru</label>
							<div class="col-md-8">
								<input type="file" name="file" required>
								<input type="hidden" class="form-control" id="edit_komponen_id" name="komponen_id" readonly>
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

@endsection

@push('scripts')
<script src="/assets/plugins/highlight/highlight.min.js"></script>
<script src="/assets/js/demo/render.highlight.js"></script>
<script>
	$(document).ready(function() {
			
		$(document).on('click', '.add-upload', function() {
			$('#komponen_id').val($(this).data('id'));
            document.getElementById("upload_file").value = null;
            $('#modal-dialog').modal('show');
		});
		
		$(document).on('click', '.edit-upload', function() {
			$('#edit_komponen_id').val($(this).data('id'));
            $('#modal-dialog-edit-file').modal('show');
		});
		Highlight.init();
	});
</script>
@endpush

