@extends('pidsus.themes.core.template')

@section('title', 'Dashboard')

@section('judulhalaman', 'el-PIDSUS')

@section('subjudul', 'J.A.M. PIDSUS - Kejaksan Agung R.I')

@section('stylesheets')
{{-- expr --}}
@endsection


@section('content')

<!-- Default box -->
<div class="box box-success">
	<div class="box-header with-border">
		<h2 class="box-title">EXECUTIVE INFORMATION SYSTEM</h2>
		
	</div>
	<div class="box-body">
		
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				@include('pidsus.dik.partials._dataperkara', ['dashboard' => $dashboard])
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				@include('pidsus.dik.partials._kategorisubyek', ['subyek_hukum' => $subyek_hukum])
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				@include('pidsus.dik.partials._kategoriobyek', ['obyek_pidana' => $obyek_pidana])
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				@include('pidsus.dik.partials._kerugianvspemulihan', ['kerugian_pemulihan' => $kerugian_pemulihan, 'nama_bulan' => $nama_bulan])
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				@include('pidsus.dik.partials._totalmasatahanan', ['masa_tahanan' => $masa_tahanan])
			</div>
		</div>
	</div> 
	<!-- /.box-body -->
</div>
<!-- /.box -->
@stop

@section('scripts')

@endsection
