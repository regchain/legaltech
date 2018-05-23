@extends('administrator.template')

@section('title', 'Daftar Pangkat')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
  <!-- selectpicker -->
        <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')
  
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Daftar Pangkat</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
        {{-- <div class="row">
        <div class="box-body">
        <div class="col-xs-12">Row Box 1</div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body --> --}}

        <div class="row">
        <div class="box-body">
          <div class="col-xs-12">
            <a href="pangkat_create" class="btn btn-primary btn-xs"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Pangkat</a>
            <select class="selectpicker">
              <option value="volvo">Golongan</option>
              <option value="saab">...</option>
              <option value="mercedes">...</option>
            </select>
          </div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->
        <!-- /.box-header -->
        <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th width="10%">Golongan</th>
              <th width="80%">Pangkat</th>
              <th width="10%">Tindakan</th>
            </tr>
          </thead>
          <tbody><tr>
              <td>IV a</td>
              <td>Jaksa Madya</td>
              <td>
            <div class="btn-group pull-right" role="group" aria-label="...">
              <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
              <a href="#" class="btn btn-default btn-sm"><i class="fa fa-remove"></i></a>
            </div>
          </td>
            </tr>
            <tr>
              <td>IV b</td>
              <td>Jaksa Utama Pratama</td>
              <td>
            <div class="btn-group pull-right" role="group" aria-label="...">
              <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
              <a href="#" class="btn btn-default btn-sm"><i class="fa fa-remove"></i></a>
            </div>
          </td>
            </tr>
            <tr>
              <td>IV c</td>
              <td>Jaksa Utama Muda</td>
              <td>
            <div class="btn-group pull-right" role="group" aria-label="...">
              <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
              <a href="#" class="btn btn-default btn-sm"><i class="fa fa-remove"></i></a>
            </div>
          </td>
            </tr>
            <tr>
              <td>IV d</td>
              <td>Jaksa Utama Madya</td>
              <td>
            <div class="btn-group pull-right" role="group" aria-label="...">
              <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
              <a href="#" class="btn btn-default btn-sm"><i class="fa fa-remove"></i></a>
            </div>
          </td>
            </tr>
            <tr>
              <td>IV e</td>
              <td>Jaksa Utama</td>
              <td>
            <div class="btn-group pull-right" role="group" aria-label="...">
              <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
              <a href="#" class="btn btn-default btn-sm"><i class="fa fa-remove"></i></a>
            </div>
          </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>Golongan</th>
              <th>Pangkat</th>
              <th>Tindakan</th>
            </tr>
          </tfoot>
        </table>
        </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Footer
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

@endsection

@section('scripts')
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
  })
</script>
@endsection
