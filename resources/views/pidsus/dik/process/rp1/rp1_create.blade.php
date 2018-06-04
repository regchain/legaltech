@extends('pidsus.themes.core.template')

@section('title', 'Dir.Dik')


@section('judulhalaman', 'DIREKTORAT PENYIDIKAN')

@section('subjudul', 'Tindak Pidana Khusus')

@section('stylesheet')

@endsection
@section('judulhalaman', 'Tambah Laporan Masyarakat / Kasus')

@section('content')

{!! Form::open(['url' => route('rp1.store'), 'method' => 'post']) !!}
	@include('pidsus.dik.process.rp1.rp1_form')
{!! Form::close() !!}

@stop

@section('script')
	<!-- Form Kasus Posisi -->
	<script src='{{ asset('bower_components/js/kasus_posisi.js') }}'></script>
@endsection