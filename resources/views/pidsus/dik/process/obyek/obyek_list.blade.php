@extends('pidsus.themes.core.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('judulhalaman', 'DIREKTORAT PENYIDIKAN')

@section('subjudul', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Daftar Benda Sitaan')

@section('content')
<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Daftar Benda Sitaan <small>[RB-1]</small></h3>
    
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
      title="Collapse">
      <i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="row">
      <div class="box-body">
        
        <div class="table table-responsive">
          <div class="col-md-12">
    <div class="box-body">
		@include('pidsus.dik.partials._bendasitaan', ['cases' => $cases])
	</div>
		  </div>
		</div>
      </div>
@stop

@section('script')

@endsection