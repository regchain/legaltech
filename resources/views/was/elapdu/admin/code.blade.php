@extends('administrator.template')

@section('title', 'Peraturan / UU')

@section('judulhalaman', 'Peraturan / Undang Undang')

@section('subjudul', 'KEJAKSAAN AGUNG REPUBLIK INDONESIA')

@section('stylesheets')
<!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">

<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

<!-- selectpicker -->
        <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
@endsection

@section('content')

<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <a href="peraturan_create" class="btn btn-flat btn-info pull-right"><i class="fa fa-plus"></i> Peraturan / UU</a>
    <h3 class="box-title">Peraturan & Undang-Undang</h3>
    </div>
  <div class="box-body">
    <form class="form-inline pull-right">
          <div class="form-group" style="width: 100%">
            <div class="input-group">
              <div class="input-group-addon">Tampilkan:</div>
              <div class="input-group-addon">
              <select class="form-control select2">
                <option selected="selected">Semua Peraturan / UU</option>
                <optgroup label="Peraturan">
                  <option>PP No. 53 / 2010 TENTANG DISIPLIN PEGAWAI NEGERI SIPIL </option>
                </optgroup>
                <optgroup label="Undang-Undang">
                  <option>UU No. 20 / 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI</option>
                </optgroup>
              </select>
              <a href="pasal_create" class="btn btn-flat btn-info"><i class="fa fa-plus"></i> Pasal</a>
            </div>
            </div>
          </div>
        </form>
<!-- /.row-box-body -->
</div>

<div class="box-body table-responsive">
<table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Kategori</th>
      <th>Pasal</th>
      <th>Angka</th>
      <th>Huruf</th>
      <th>Keterangan</th>
      <th>Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Ringan</td>
      <td>7</td>
      <td>2</td>
      <td>a</td>
      <td>teguran lisan; </td>
      <td>
        <div class="btn-group pull-right" role="group" aria-label="...">
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-remove"></i></a>
        </div>
      </td>
    </tr>
    <tr>
      <td>Ringan</td>
      <td>7</td>
      <td>2</td>
      <td>b</td>
      <td>teguran tertulis;</td>
      <td>
        <div class="btn-group pull-right" role="group" aria-label="...">
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-remove"></i></a>
        </div>
      </td>
    </tr>
    <tr>
      <td>Sedang</td>
      <td>7</td>
      <td>3</td>
      <td>a</td>
      <td>penundaan  kenaikan  gaji  berkala  selama  1  (satu) tahun</td>
      <td>
        <div class="btn-group pull-right" role="group" aria-label="...">
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-remove"></i></a>
        </div>
      </td>
    </tr>
    <tr>
      <td>Sedang</td>
      <td>7</td>
      <td>3</td>
      <td>b</td>
      <td>penundaan  kenaikan  pangkat  selama  1  (satu) tahun; </td>
      <td>
        <div class="btn-group pull-right" role="group" aria-label="...">
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-remove"></i></a>
        </div>
      </td>
    </tr>
    <tr>
      <td>Berat</td>
      <td>7</td>
      <td>4</td>
      <td>a</td>
      <td>penurunan  pangkat  setingkat  lebih  rendah selama 3 (tiga) tahun</td>
      <td>
        <div class="btn-group pull-right" role="group" aria-label="...">
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-remove"></i></a>
        </div>
      </td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>Kategori</th>
      <th>Pasal</th>
      <th>Angka</th>
      <th>Huruf</th>
      <th>Keterangan</th>
      <th>Tindakan</th>
    </tr>
  </tfoot>
</table>
</div>
<!-- /.box-body -->
<div class="box-footer">
  &nbsp;
</div>
<!-- /.box-footer-->
</div>
<!-- /.box -->

@endsection

@section('scripts')
    <!-- Select2 -->
<script src="{{ asset('/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- DataTables -->
<script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{ asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>

<!-- selectpicker -->
    <script src="{{ asset('/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('.selectpicker').selectpicker({
          style: 'btn-default',
          size: 4
        })
    //Initialize Select2 Elements
      $('.select2').select2()
  })
</script>
@endsection

