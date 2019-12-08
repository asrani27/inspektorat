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
        <div class="col-md-12">
        <div class="note note-primary">
        <div class="note-icon"><i class="fab fa-safari"></i></div>
        <div class="note-content">
            <h4><b>Selamat Datang!, {{$data->name}} </b></h4>
            <p><strong>Progress : 80%</strong></p>
        </div>
        </div>
        </div>
	</div>
	<!-- begin row -->
	<div class="row">
        <div class="col-lg-3 col-md-6">
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="/assets/handshake.jpg" height="250">
                    <div class="card-block  text-center">
                        <h4 class="card-title m-t-0 m-b-10">Pencanangan</h4>
                            <a href="/pencanangan" class="btn btn-sm btn-primary">Klik Disini</a>
                    </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="/assets/building.jpg"  height="250">
                    <div class="card-block text-center">
                        <h4 class="card-title m-t-0 m-b-10">Pembangunan</h4>
                            <a href="javascript:;" class="btn btn-sm btn-primary">Klik Disini</a>
                    </div>
            </div>
        </div>
	</div>
	<!-- end row -->
	<!-- begin row -->
	<!-- end row -->

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
