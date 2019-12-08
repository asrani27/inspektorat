@extends('layouts.default')

@section('title', 'AKADEMIK')

@push('css')
	<link href="/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
	{{-- <ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item active">Dashboard</li>
	</ol> --}}
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">User : {{$data->name}} </h1>
	<!-- end page-header -->
	
	<!-- begin row -->
	<div class="row">
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-grey-darker">
				<div class="stats-icon"><i class="fa fa-users"></i></div>
				<div class="stats-info">
					<h4>JUMLAH MAHASISWA</h4>
					<p>{{$JmlMhs->jumlah}}</p>	
				</div>
				<div class="stats-link">
					<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-red">
				<div class="stats-icon"><i class="fa fa-desktop"></i></div>
				<div class="stats-info">
					<h4>JUMLAH PRODI</h4>
					<p>{{$JmlProdi->jumlah}}</p>
				</div>
				<div class="stats-link">
					<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-orange">
				<div class="stats-icon"><i class="fa fa-link"></i></div>
				<div class="stats-info">
					<h4>JUMLAH DOSEN</h4>
					<p>{{$JmlDosen->jumlah}}</p>
				</div>
				<div class="stats-link">
					<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-black-lighter">
				<div class="stats-icon"><i class="fa fa-clock"></i></div>
				<div class="stats-info">
					<h4>SEMESTER AKTIF</h4>
					<p>
						@if($semester == null)
						Tidak Ada
						@else
						{{$semester}}
						@endif
					</p>	
				</div>
				<div class="stats-link">
					<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
	</div>
	<!-- end row -->
	<!-- begin row -->
	<div class="row">
		
		<div class="col-lg-3">
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">Info Mahasiswa</h4>
				</div>
				<div class="panel-body">
					<div id="interactive-chart" class="height-sm"></div>
				</div>
			</div>
		</div>
		
		<div class="col-lg-3">
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">Info Dosen</h4>
				</div>
				<div class="panel-body">
					<div id="interactive-chart" class="height-sm"></div>
				</div>
			</div>
		</div>
		
		<div class="col-lg-6">
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">Info Penting</h4>
				</div>
				<div class="panel-body p-t-0">
					<div class="table-responsive">
						<table class="table table-valign-middle">
							<tbody>
								<tr>
									<td><label class="label label-danger">KRS MHS DI PROSES</label></td>
									<td>13 <span class="text-success"></span></td>
									<td><div id="sparkline-unique-visitor"></div></td>
								</tr>
								<tr>
									<td><label class="label label-warning">NILAI MHS BELUM DI ISI</label></td>
									<td>28</td>
									<td><div id="sparkline-bounce-rate"></div></td>
								</tr>
								<tr>
									<td><label class="label label-success">DEADLINE INPUT KRS</label></td>
									<td>2 Nov 2019</td>
									<td><div id="sparkline-total-page-views"></div></td>
								</tr>
								<tr>
									<td><label class="label label-primary">DEADLINE INPUT NILAI</label></td>
									<td>2 Des 2019</td
									<td><div id="sparkline-avg-time-on-site"></div></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-4 -->
	</div>
	<!-- end row -->
@endsection

@push('scripts')
	<script src="/assets/plugins/flot/dom-tools.js"></script>
    <script src="/assets/plugins/flot/EventEmitter.js"></script>
	<script src="/assets/plugins/flot/flot.js"></script>
	<script src="/assets/plugins/flot/flot.time.js"></script>
	<script src="/assets/plugins/flot/flot.pie.js"></script>
	<script src="/assets/plugins/gritter/js/jquery.gritter.min.js"></script>
	<script src="/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="/assets/js/demo/dashboard-v1.js"></script>
	<script>
		$(document).ready(function() {
			//Dashboard.init();
		});
	</script>
@endpush
