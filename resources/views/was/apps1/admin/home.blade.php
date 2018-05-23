@extends('administrator.template')

@section('title', 'Administrator')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
{{-- expr --}}
@endsection

@section('content')

<!-- Default box -->
<div class="col-md-4">
  <div class="box">
    <div class="box-header with-border">
      <h1 class="box-title">Pengguna</h1>
    </div>
    <div class="box-body">
      <a href="pegawai" class="btn btn-app"><i class="fa fa-users"></i> Pengguna</a>
      <a href="group" class="btn btn-app"> <i class="fa fa-sitemap"></i> Group Pengguna</a>
      <a href="#" class="btn btn-app" disabled><i class="fa fa-eye"></i> Hak Akses</a>
    </div>
    <!-- /.box-body -->
  </div>

</div>
<div class="col-md-4">
  <div class="box">
    <div class="box-header with-border">
      <h1 class="box-title">Satuan Kerja</h1>
    </div>
    <div class="box-body">
            <a href="wilayah" class="btn btn-app"><i class="fa fa-globe"></i> Wilayah Kerja</a>
            <a href="jabatan" class="btn btn-app"><i class="fa fa-balance-scale"></i> Jabatan</a>
            <a href="pangkat" class="btn btn-app"><i class="fa fa-star-o"></i> Pangkat </a>
          </div>
  </div>
</div>

<div class="col-md-4">
  <div class="box">
    <div class="box-header with-border">
      <h1 class="box-title">Data Penunjang</h1>
    </div>
    <div class="box-body">
          <a href="peraturan" class="btn btn-app"><i class="fa fa-gavel"></i> Peraturan / UU</a>
        </div>
      </div>
      <!-- /.box-body -->
  <!-- /.box -->
</div>
@endsection

@section('scripts')
{{-- expr --}}
@endsection

