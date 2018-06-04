@extends('decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('judulhalaman', 'DIREKTORAT PENYIDIKAN')

@section('subjudul', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Edit Kategori Subyek')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						{!! Form::model($kategori_subyek, ['url' => route('kategori_subyek.update', $kategori_subyek->id), 'method' => 'put']) !!}
						@include('kategori_subyek.ks_form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection