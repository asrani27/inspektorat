@extends('layouts.default')

@section('title', 'SKPD')

@push('css')

@endpush

@section('content')
	<!-- begin breadcrumb -->
	{{-- <ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item active">Dashboard</li>
	</ol> --}}
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<!-- end page-header -->

<div class="row">
	<div class="col-lg-12">
		<!-- begin panel -->
		<div class="panel panel-inverse" data-sortable-id="table-basic-7">
			<!-- begin panel-heading -->
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
				</div>
				<h4 class="panel-title">KATEGORI UPLOAD</h4>
			</div>
            <!-- end panel-heading -->
            
				<div class="alert alert-secondary fade show">
                    <a href="/home" class="btn btn-danger btn-sm">Kembali</a>
				</div>
			<!-- begin panel-body -->
			<div class="panel-body">
				<!-- begin table-responsive -->
				<div class="table-responsive table-bordered">
					<table class="table table-striped m-b-0 ">
						<thead>
							<tr>
								<th width="4%">No</th>
								<th width="90%">Kategori</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
                            <?php
                            $no=1;
                            ?>
                            <tr>
								<td>1</td>
								<td><h5 class="widget-table-title">Fakta Integritas</h5>
									<div class="progress progress-sm rounded-corner m-b-5">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning f-s-10 f-w-600" style="width: 90%;">90%</div>
									</div>
									<div class="clearfix f-s-10">
											status: 
									<b class="text-inverse" data-id="widget-elm" data-light-class="text-inverse" data-dark-class="text-white">Proses</b>
									</div>
								</td>
								<td class="with-btn" nowrap>
									<a href="#" class="btn btn-sm btn-primary rounded-corner">Detail</a>
								</td>
							</tr>
                            @foreach ($data as $item)
							<tr>
                                <td>{{$no++}}</td>
								<td><h5 class="widget-table-title">{{$item->nama}}</h5>
									<div class="progress progress-sm rounded-corner m-b-5">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-orange f-s-10 f-w-600" style="width: 0%;">0%</div>
									</div>
									<div class="clearfix f-s-10">
											status: 
									<b class="text-inverse" data-id="widget-elm" data-light-class="text-inverse" data-dark-class="text-white">On Going</b>
									</div>
								</td>
								<td class="with-btn" nowrap>
									<a href="#" class="btn btn-sm btn-primary rounded-corner disabled">Detail</a>
								</td>
							</tr>
                            @endforeach
							
						</tbody>
					</table>
				</div>
				<!-- end table-responsive -->
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
<script src="/assets/plugins/highlight/highlight.min.js"></script>
<script src="/assets/js/demo/render.highlight.js"></script>
<script>
	$(document).ready(function() {
		Highlight.init();
	});
</script>
@endpush
