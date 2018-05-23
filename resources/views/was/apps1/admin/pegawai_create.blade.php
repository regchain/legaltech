@extends('administrator.template')

@section('title', 'home')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
      <!-- selectpicker -->
        <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
@endsection

@section('content')
  
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Pegawai Baru</h3>

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
              <p><strong>Nama Lengkap</strong></p>
              <div class="col-xs-3">
                <div class=" input-block">
                    <input class="form-control" placeholder="..Prof.Dr.?" type="text">
                  </div>
              </div>
              <div class="col-xs-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input class="form-control" placeholder="Nama Lengkap" type="text">
                  </div>
              </div>
              <div class="col-xs-3">
                <div class="input-block">
                    <input class="form-control" placeholder="..SH, MH.?" type="text">
                  </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->
        <div class="row">
          <div class="box-body">
            <div class="col-xs-12">
              <p><strong>NRP / NIP</strong></p>
              <div class="col-xs-4">
                <div class="input-group">
                    <span class="input-group-addon">NRP</span>
                    <input class="form-control" placeholder="Nomor Register Pegawai" type="text">
                  </div>
              </div>
              <div class="col-xs-4">
                <div class="input-group">
                    <span class="input-group-addon">NIP</span>
                    <input class="form-control" placeholder="Nomor Induk Pegawai" type="text">
                  </div>
              </div>
              <div class="col-xs-4">
                <select class="form-control selectpicker" style="width: 100%;">
                  <option selected="selected">Status </option>
                  <option>Jaksa</option>
                  <option>Staf</option>
                </select>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->
        <div class="row">
          <div class="box-body">
            <div class="col-xs-12">
              <div class="form-group">
                <p>
                  <a href="wilayah_create" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Satuan Kerja</a>
                  <strong>Wilayah Satuan Kerja</strong>
                </p>
                <div class="col-xs-4">
                <select class="form-control selectpicker" style="width: 100%;">
                  <option selected="selected">Kejaksaan Tinggi</option>
                  <option>DKI Jakarta</option>
                  <option>Jawa Barat</option>
                  <option>Jawa Tengah</option>
                  <option>DI Yogyakarta</option>
                  <option>Jawa Timur</option>
                  <option>Banten</option>
                </select>
              </div>
                <div class="col-xs-4">
                <select class="form-control selectpicker" style="width: 100%;">
                  <option selected="selected">Kejaksaan Negeri </option>
                  <option>Jakarta Selatan</option>
                  <option>Jakarta Barat</option>
                  <option>Jakarta Utara</option>
                  <option>Jakarta Timur</option>
                  <option>Jakarta Pusat</option>
                  <option>Kota Bandung</option>
                </select>
              </div>
                <div class="col-xs-4">
                <select class="form-control selectpicker" style="width: 100%;">
                  <option selected="selected">Kejaksaan Negeri Cabang </option>
                  <option>Nusa Penida</option>
                </select>
              </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->
        <!-- /.row-box-body -->
        <div class="row">
          <div class="box-body">
            <div class="col-xs-12">
              <div class="form-group">
                <p>
                  <a href="pangkat_create" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Pangkat</a>
                  <strong>Pangkat</strong>
                </p>
                <div class="col-xs-4">
                <select class="form-control selectpicker" style="width: 100%;">
                  <option selected="selected">Golongan </option>
                  <option>IV a</option>
                  <option>IV b</option>
                  <option>IV c</option>
                  <option>IV d</option>
                  <option>IV e</option>
                </select>
              </div>
              <div class="col-xs-8">
                <select class="form-control selectpicker" style="width: 100%;">
                  <option selected="selected">Pangkat </option>
                  <option>Jaksa Madya</option>
                  <option>Jaksa Utama Pratama</option>
                  <option>Jaksa Utama Muda</option>
                  <option>Jaksa Utama Madya</option>
                  <option>Jaksa Utama</option>
                </select>
              </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->
        <div class="row">
          <div class="box-body">
            <div class="col-xs-12">
              <div class="form-group">
                <p>
                  <a href="jabatan_create" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Jabatan</a>
                  <strong>Jabatan</strong>
                </p>
                <div class="col-xs-4">
                <select class="form-control selectpicker" style="width: 100%;">
                  <option selected="selected">Eselon </option>
                  <option>I</option>
                  <option>II</option>
                  <option>III</option>
                  <option>IV</option>
                  <option>V</option>
                </select>
              </div>
              <div class="col-xs-8">
                <select class="form-control selectpicker" style="width: 100%;">
                  <option selected="selected">Jabatan </option>
                  <option>Jabatan A</option>
                  <option>Jabatan B</option>
                  <option>Jabatan C</option>
                  <option>Jabatan D</option>
                  <option></option>
                </select>
              </div>
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
    <!-- selectpicker -->
    <script src="{{ asset('/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js')}}">
    </script>
      <script>
        $('.selectpicker').selectpicker({
          style: 'btn-default',
          size: 4
        })
      </script>
@endsection

