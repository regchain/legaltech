@extends('themes.user.template')

@section('title', 'Dashboard')

@section('judulhalaman', 'e-LAPDU')

@section('subjudul', 'KEJAKSAAN AGUNG R.I.')

@section('stylesheets')
{{-- expr --}}
@endsection

@section('content')

<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <h2 class="box-title">HALAMAN PELAPOR</h2>
  </div>
  <div class="box-body">
  <div class="row">
    <div class="col-md-12">
      <!-- Custom Tabs (Pulled to the right) -->
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">
          <li class="active"><a href="#tab_1-1" data-toggle="tab"><i class="fa fa-2x fa-home"></i></a></li>
          <li><a href="#tab_2-2" data-toggle="tab"><i class="fa fa-fw fa-database"></i> Data Penunjang</a></li>
          <li><a href="#tab_3-2" data-toggle="tab"><i class="fa fa-fw fa-gear"></i> Ubah Profil</a></li>

          <li class="pull-left header"><i class="fa fa-bullhorn"></i> Laporan Pengaduan</li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1-1">
              <div class="box-body">

                @include('was.elapdu.process.themes.pelapor.partials.progress')
              </div>
              <!-- /.box-body -->

          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="tab_2-2">
            <div class="box-body">
              <div class="col-xs-12">
                <div class="input-group margin">
                  <input class="form-control" type="text">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-info btn-flat">Unggah!</button>
                  </span>
                </div>
                <p>&nbsp;&nbsp;&nbsp;<code>&nbsp;* Jenis data yang dapat diunggah: .doc .docx .jpg .png .mp4 .mp3</code></p>
              </div>
            </div>
            <div class="box-body">
              <div class="col-xs-12">
                <div class="box-header">
                  <h3 class="box-title">List Data Penunjang</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th width="30%">Nama File</th>
            <th>Jenis</th>
            <th>Kapasitas</th>
            <th width="30%">Keterangan</th>
            <th>Tindakan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Trident</td>
            <td>.jpg
            </td>
            <td>3 mb </td>
            <td> 4</td>
            <td>
              <div class="btn-group pull-right" role="group" aria-label="...">
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-remove"></i></a>
              </div>
            </td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>.jpg
            </td>
            <td>9 mb</td>
            <td>6</td>
            <td>
              <div class="btn-group pull-right" role="group" aria-label="...">
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-remove"></i></a>
              </div>
            </td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>.mp3</td>
            <td>800 kb</td>
            <td>7</td>
            <td>
              <div class="btn-group pull-right" role="group" aria-label="...">
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-remove"></i></a>
              </div>
            </td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>.mp3</td>
            <td>800 kb</td>
            <td>6</td>
            <td>
              <div class="btn-group pull-right" role="group" aria-label="...">
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-remove"></i></a>
              </div>
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th width="30%">Nama File</th>
            <th>Jenis</th>
            <th>Kapasitas</th>
            <th width="30%">Keterangan</th>
            <th>Tindakan</th>
          </tr>
        </tfoot>
      </table>
    </div>

                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2">
                <div class="box-body">
                  @include('was.elapdu.process.lapdu.partials.pelapor_edit')
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</div>
</div>

{{-- <div class="row">
  <div class="box-body">
    <div class="col-xs-12">Row Box 1</div>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.row-box-body --> --}}

{{-- <div class="box-footer">
  Footer
</div>
 /.box-footer
</div>
<!-- /.box --> --}}

@endsection

@section('scripts')
<!-- DataTables -->
<script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{ asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>

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
  })
</script>

