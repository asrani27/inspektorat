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
        <p><strong>PREDIKAT : 
            @if($skpd->predikat == 'zi')
                ZONA INTEGRITAS (ZI)
            @elseif($skpd->predikat == 'wbk')
                WILAYAH BEBAS KORUPSI (WBK)
            @elseif($skpd->predikat == 'wbbm')
                WILAYAH BIROKRASI BERSIH DAN MELAYANI (WBBM)
            @else
                {{$skpd->predikat}}
            @endif
        </strong></p>
        </div>
        </div>
        </div>
	</div>
    <!-- begin row -->
    <div class="row">
	<div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="/assets/handshake.jpg" height="250">
                    <div class="card-block  text-center">
                        <h5 class="card-title m-t-0 m-b-10">Zona Integritas</h5>
                            <a href="/pencanangan" class="btn btn-sm btn-primary">PENCANANGAN</a>
                            <a href="/pembangunan" class="btn btn-sm btn-primary">PEMBANGUNAN</a>
                    </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="/assets/wbk.png"  height="250">
                    <div class="card-block text-center">
                        <h5 class="card-title m-t-0 m-b-10">Wilayah Bebas Korupsi</h5>
                            <a href="/skpd/wbk" class="btn btn-sm btn-primary btn-block">W B K</a>
                    </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="/assets/wbbm.png"  height="250">
                    <div class="card-block text-center">
                        <h5 class="card-title m-t-0 m-b-10">Wilayah Birokrasi Bersih & Melayani</h5>
                            <a href="/skpd/wbbm" class="btn btn-sm btn-primary btn-block">W B B M</a>
                    </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-inverse" data-sortable-id="index-10">
                <div class="panel-heading">
                        <h4 class="panel-title">KONTAK</h4>
                </div>
                <div class="panel-body">
                    Nama  : Muhammad Zakir<br />
                    Telp  : 0878 1423 4444<br />
                    Email : inspektorat@banjarmasinkota.go.id<br />
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
