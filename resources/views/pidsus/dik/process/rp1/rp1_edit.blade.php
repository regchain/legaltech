@extends('pidsus.themes.core.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Edit / Arsip Kasus')

@section('content')

<!-- Default box -->
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Edit Pengaduan</
		</div>
		<div class="row">
			<div class="box-body">
				<div class="col-xs-12">
					{!! Form::model($case, ['url' => route('rp1.update', $case->id), 'method' => 'put']) !!}
					@include('pidsus.dik.process.rp1.rp1_form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	@stop
	
	@section('script')
	<!-- Form Kasus Posisi -->
	<script src='{{ asset('bower_components/js/kasus_posisi.js') }}'></script>
	@endsection