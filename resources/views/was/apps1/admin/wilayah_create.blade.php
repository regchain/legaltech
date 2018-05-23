@extends('administrator.template')

@section('title', 'home')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
      
@endsection

@section('content')
  
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Satuan Kerja Baru</h3>

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
            <div class="col-xs-12">
              <div class="input-group">
                <span class="input-group-addon">Kejaksaan Tinggi</span>
                <input class="form-control" placeholder="KEJATI...." type="text">
              </div>
            </div>
          </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="row">
        <div class="box-body">
            <div class="col-xs-12">
              <div class="input-group">
                <span class="input-group-addon">Kejaksaan Negeri </span>
                <input class="form-control" placeholder="KEJARI...." type="text">
              </div>
            </div>
          </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="row">
          <div class="box-body">
            <div class="col-xs-12">
              <div class="input-group">
                <span class="input-group-addon">Cabang Kejari</span>
                <input class="form-control" placeholder="KECAPJARI...." type="text">
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="box-footer">
          <div class="col-xs-12">
                <a href="administrator" class="btn btn-success pull-right"><i class="fa fa-check-square-o"></i> Lanjut
                </a>
                <a href="administrator" class="btn btn-danger pull-right" style="margin-right: 5px;">
                  <i class="fa fa-exclamation-triangle"></i> Batal
                </a>
              </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

@endsection

@section('scripts')
    
@endsection

