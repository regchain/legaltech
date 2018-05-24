@extends('themes.core.template')

@section('title', 'Dashboard')

@section('judulhalaman', 'LegalTech Indonesia')

@section('subjudul', 'Matter Management')

@section('stylesheets')

@endsection

@section('content')
<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
  </div>
  <div class="row">
    <div class="box-body">
      <div class="col-xs-12">
        Row - 1    
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.row-box-body -->
  <div class="row">
    <div class="box-body">
      <div class="col-xs-12">
        {{-- @include('admin.map2') --}}
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.row-box-body -->
  
  <div class="row">
    <div class="box-body">
      <div class="col-xs-12">
        @include('admin.map')
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.row-box-body -->
  
  {{-- <div class="box-footer">
    Footer
  </div>
  <!-- /.box-footer--> --}}
</div>
<!-- /.box -->
@stop


@section('scripts')

<script>
  
</script>

@endsection