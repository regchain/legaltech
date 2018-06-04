@extends('decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('judulhalaman', 'DIREKTORAT PENYIDIKAN')

@section('subjudul', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Edit Jaksa')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						{!! Form::model($jaksa, ['url' => route('jaksa.update', $jaksa->id), 'method' => 'put']) !!}
						@include('jaksa._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection