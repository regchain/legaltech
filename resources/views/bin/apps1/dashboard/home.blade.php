@extends('themes.admin.template')

@section('title', 'Dashboard')

@section('judulhalaman', 'J.A.M. PENGAWASAN')

@section('subjudul', 'Kejaksan Agung R.I')

@section('stylesheets')
{{-- expr --}}
@endsection

@section('content')
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Judul</h3>
        
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="Collapse">
            <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="box-body    ">
                <div class="col-xs-12">Row Box 1</div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->
        
        <div class="row">
            <div class="box-body">
                <div class="col-xs-12">Row Box 1</div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="row">
            <div class="box-body">
                <div class="col-xs-12">Row Box 1</div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->
@endsection

@section('scripts')

<script>
  
</script>

@endsection