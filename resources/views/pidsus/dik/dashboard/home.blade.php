@extends('pidsus.themes.core.template')

@section('title', 'Dashboard')

@section('judulhalaman', 'J.A.M. Pidana Khusus')

@section('subjudul', 'Kejaksan Agung R.I')

@section('stylesheets')
{{-- expr --}}
@endsection


@section('content')

@include('pidsus.dik.partials._dataperkara', ['dashboard' => $dashboard])

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
      
@stop

@section('scripts')

@endsection
