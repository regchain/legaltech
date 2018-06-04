@extends('themes.admin.template')

@section('title', 'Dashboard')

@section('judulhalaman', 'LegalTech Indonesia')

@section('subjudul', 'RegChain© Regulatory Analytic Management')

@section('stylesheets')

@endsection

@section('content')
<div class="box">
  <div class="box-header with-border">
    <a href="home"><h3><i class="fa fa-dashboard"> </i> Executive Information System</h3> </a>       
  </div>
  <!-- /.row-collapsible accordion -->
  <div class="row">
    <div class="col-md-12">
      <div class="box-body">
        
        <div id="tabs">
  <ul>
    <li><a href="#tabs-1"><i class="fa fa-puzzle-piece"> </i>  PERENCANAAN</a></li>
    <li><a href="#tabs-2"><i class="fa fa-balance-scale"> </i>  PENGADAAN</a></li>
    <li><a href="#tabs-3"><i class="fa fa-eye"> </i>  MONITORING & EVALUASI</a></li>
  </ul>
  <div id="tabs-1">
    <p>@include('intel.tp4d.partials.row_perencanaan') </p>
  </div>
  <div id="tabs-2">
    <p>@include('intel.tp4d.partials.row_pengadaan') </p>
  </div>
  <div id="tabs-3">
    <p>@include('intel.tp4d.partials.row_monev') </p>
  </div>
</div>

        
      </div>
      <!-- /.box-body -->
    </div>
  </div>
  <!-- /.row-collapsible accordion -->
  
  
  <div class="box-footer">
    <small class="pull-right"> source: <a href="http://eberkas.com" target="_blank">e-BERKAS©</a></small>RegChain©
  </div>
  <!-- /.box-footer-->
</div>
<!-- /.box -->
@stop


@section('scripts')
<!-- bootstrap wysihtml5 - text editor -->



<script>
  $( function() {
    $( "#tabs" ).tabs({
      collapsible: true
    });
  } );
  </script>

@endsection