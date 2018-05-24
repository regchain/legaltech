@extends('pidsus.themes.core.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Edit Perkara Penyidikan Umum')

@section('content')

{!! Form::model($case, ['url' => route('rp3mum.update', $case->id), 'method' => 'put']) !!}
<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-12">
		<!-- Judul Surat -->
		<div class="form-group">
			<label>Judul Kasus: </label>
			{!! Form::text('judul_kasus', null, ['class' => 'form-control', 'placeholder' => 'ANIM PARIATUR CLICHE REPREHENDERIT', 'required' => '']) !!}
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
		<!-- Tanggal Surat -->
		<div class="form-group">
			<label>Tanggal</label>
			<div class="input-group date">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				{!! Form::date('tanggal_surat_perkara', \Carbon\Carbon::now(), ['class' => 'form-control pull-right', 'id' => 'datepicker']) !!}
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
		<!-- No. Surat -->
		<div class="form-group">
			<label> No. Surat</label>
			{!! Form::text('no_surat_perkara', null, ['class' => 'form-control', 'placeholder' => 'PRINT-']) !!}
			{!! Form::hidden('surat_id', null) !!}
		</div>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-12">
		<label>Kasus Posisi</label>
		{!! Form::textarea('kasus_posisi', null, ['class' => 'form-control', 'size' => '120x10', 'required' => '']) !!}
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12">
		<label>Status</label>
		<div class="input-group">
{{-- 			{!! Form::select('status_rp3mum', ['1' => 'BARU', '3' => 'DITERUSKAN', '2' => 'DIALIHKAN', '4' => 'DIHENTIKAN'], $status_rp3mum, ['class' => 'form-control']) !!} --}}
			<!--
			<div class="input-group-btn"> 
				<button type="button" class="btn btn-default" aria-label="stop" title="DIHENTIKAN"><span class="glyphicon glyphicon-minus-sign"></span> </button>
				<button type="button" class="btn btn-default" aria-label="transfer" title="DIALIHKAN"><span class="glyphicon glyphicon-transfer"></span></button> </div> 
				<input class="form-control" aria-label="Text input with multiple buttons" placeholder="Keterangan Status...">
			</div>
			-->

			<!-- Disposisi / Petunjuk -->
			<div class="form-group">
				<label>Disposisi / Petunjuk</label>
				{!! Form::textarea('disposisi', null, ['class' => 'form-control', 'size' => '0x7']) !!}
			</div>
		</div>
	</div>
	<div class="rows"> 
		<div class="col-lg-6 col-md-6 col-sm-12">
			<!-- Print Lid -->
			<h4>Data Terlapor</h4>
			<!-- Institusi / Lembaga -->
			<div class="form-group">
				<label>Institusi / Lembaga</label>
				{!! Form::text('lembaga', null, ['class' => 'form-control', 'placeholder' => 'Enter ...', 'required' => '']) !!}
				{!! Form::hidden('subyek_id', null) !!}
			</div>
			<!-- Nama Lengkap -->
			<div class="form-group">
				<label>Nama Lengkap</label>
				{!! Form::text('nama_terlapor', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
			</div>
			<!-- Jabatan Resmi -->
			<div class="form-group">
				<label>Jabatan Resmi</label>
				{!! Form::text('jabatan_resmi', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
			</div>
			<!-- Jabatan Lain -->
			<div class="form-group">
				<label>Jabatan Lain</label>
				{!! Form::text('jabatan_lain', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
			</div>
		
			<!-- Kategori Subyek -->
			<div class="form-group">
				<label>Kategori Subyek</label>
				{!! Form::select('kategori_subyek_id', $kategori_subyek, $case->kategori_subyek_id, ['class'=>'form-control', 'placeholder' => '']) !!}
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<h4>Data Obyek</h4>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="form-group">
						<label>Obyek Pidana</label>
						{!! Form::text('obyek_pidana', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
						{!! Form::hidden('obyek_id', null) !!}
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="form-group">
						<label class="text-red">* Nilai Anggaran</label>
						<div class="input-group">
							<span class="input-group-addon">Rp</span>
							{!! Form::number('nilai_kontrak', null, ['class' => 'form-control', 'placeholder' => 'Enter ...', 'step' => 'any']) !!}
							<span class="input-group-addon">,-</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="form-group">
						<label>Kerugian Negara</label>
						<div class="input-group">
							<span class="input-group-addon">Rp</span>
							{!! Form::number('kerugian_negara', null, ['class' => 'form-control', 'placeholder' => 'Enter ...', 'step' => 'any']) !!}
							<span class="input-group-addon">,-</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="form-group">
						<label>Pemulihan Aset</label>
						<div class="input-group">
							<span class="input-group-addon">Rp</span>
							{!! Form::number('pemulihan_aset', null, ['class' => 'form-control', 'placeholder' => 'Enter ...', 'step' => 'any']) !!}
							<span class="input-group-addon">,-</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box-body">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h4>Data Jaksa Yang Telah Dipilih</h4>
				<div class="form-group">
					@include('pidsus.dik.partials._jaksa', ['surat_jaksa' => $surat_jaksa, 'tipe' => 'RP3MUM', 'kasus_id' => $case->id])
		        </div>
			</div>
		</div>	
	</div>
	<div class="rows">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h4>Data Jaksa</h4>
			<div align="center" class="thumbnail">
				{!! Form::select('jaksa_id[]', $jaksas, 0, ['class'=>'form-control', 'placeholder' => 'Pilih Jaksa', 'multiple' => 'multiple', 'size' => '10']) !!}
			</div>
			<div class="box-tools pull-right">
				<a href="{{ route('rp3mum.index') }}" class="btn btn-danger"> BATAL</a>
				{{ Form::submit('KIRIM', ['class' => 'btn btn-success']) }}
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}
@stop

@section('script')

	<!-- Form Kasus Posisi -->
	<script src='{{ asset('bower_components/js/kasus_posisi.js') }}'></script>

@endsection
