@extends('themes.admin.template')

@section('title', 'Dashboard')

@section('judulhalaman', 'LegalTech Indonesia')

@section('subjudul', 'RegChain© Regulatory Analytic Management')

@section('stylesheets')

@endsection

@section('content')
<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <h3><i class="fa fa-dashboard"> </i> Executive Information System</h3>    
  </div>
  <div class="row">
    <div class="box-body">
      <div class="col-xs-12">
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.row-box-body -->
  <div class="row">
    <div class="box-body">
      <div class="col-xs-12">

        @include('intel.tp4d.partials.eprogress')
        
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.row-box-body -->
  
  <div class="row">
    <div class="box-body">
      <div class="col-xs-12">
        Row 2
        {{-- @include('admin.map') --}}
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.row-box-body -->
  
  <div class="box-footer">
    <small class="pull-right"> source: <a href="http://eberkas.com" target="_blank">e-BERKAS©</a></small>RegChain©
  </div>
  <!-- /.box-footer-->
</div>
<!-- /.box -->
@stop


@section('scripts')

<script>
  
</script>

@endsection