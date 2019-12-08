@extends('layouts.default')

@section('title', 'Modal & Notification')

@push('css')
	<link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
@endpush

@section('content')
		<!-- begin row -->
	<div class="row">
		<!-- begin col-6 -->
		<div class="col-lg-12">
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-modal-notification-2">
				<div class="panel-heading">
					<h4 class="panel-title">SETTING TANGGAL PENGINPUTAN NILAI MAHASISWA</h4>
				</div>
				<div class="panel-body">
					<table id="data-table-responsive" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th class="text-nowrap">Keterangan</th>
								<th class="text-nowrap">Mulai</th>
								<th class="text-nowrap">Selesai</th>
								<th class="text-nowrap">Aksi</th>
							</tr>
						</thead>
						<tbody>
                          	<tr class="odd gradeX">
								<td>MASA PENGINPUTAN NILAI</td>
                                <td>{{\Carbon\Carbon::parse($data->mulai)->format('d M Y')}}</td>
                                <td>{{\Carbon\Carbon::parse($data->selesai)->format('d M Y')}}</td>
                              <td><button class="btn btn-sm btn-success edit-krs" data-toggle="modal" data-mulai="{{\Carbon\Carbon::parse($data->mulai)->format('m/d/Y')}}" data-selesai="{{\Carbon\Carbon::parse($data->selesai)->format('m/d/Y')}}">Edit</button></td>
							</tr>
						</tbody>
                    </table>
                    
					<!-- #modal-dialog -->
					<div class="modal fade" id="modal-dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Edit Masa Penginputan NILAI</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <form action="/setting/tanggal_nilai/update" method="POST">
                                    @csrf
								<div class="modal-body">
									<p>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-2 col-form-label">Mulai</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" required id="datepicker-autoClose" name="mulai" placeholder="Tanggal Mulai KRS" />
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-15">
                                            <label class="col-md-2 col-form-label">Selesai</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" required id="datepicker-autoClose2" name="selesai" placeholder="Tanggal Selesai KRS" />
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
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
	</div>
	<!-- end row -->
		
@endsection

@push('scripts')
	<script src="/assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="/assets/plugins/sweetalert/sweetalert.min.js"></script>
	<script src="/assets/js/demo/ui-modal-notification.demo.js"></script>
	<script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="/assets/js/demo/form-plugins.demo.js"></script>
	<script>
		$(document).ready(function() {
            
            $(document).on('click', '.edit-krs', function() {
            $('#datepicker-autoClose').val($(this).data('mulai'));
            $('#datepicker-autoClose2').val($(this).data('selesai'));
            $('#modal-dialog').modal('show');
            });

			FormPlugins.init();
			Notification.init();
		});
	</script>
@endpush