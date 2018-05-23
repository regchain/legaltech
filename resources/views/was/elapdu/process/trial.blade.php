@extends('was.elapdu.themes.operator.template')

@section('title', 'Subyek Hukum')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('stylesheets')
  <!-- selectpicker -->
        <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
@endsection

@section('content')
  
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">TAMBAH LAPORAN PENGADUAN</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>

        extends('was.elapdu.process.partials.kasus_edit')

        extends('was.elapdu.process.partials.pelapor_edit')

        extends('was.elapdu.process.partials.terlapor_edit')

        extends('was.elapdu.process.partials.datapenunjang_edit')

        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-xs-12">
                
                <a href='laporan' class="btn btn-success pull-right"><i class="fa fa-check-square-o"></i> Lanjut
                </a>
                <a href='laporan' class="btn btn-danger pull-right" style="margin-right: 5px;">
                  <i class="fa fa-exclamation-triangle"></i> Batal
                </a>
              </div>
            </div>
          </section>
          <!-- /.content -->
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

        <!-- InputMask -->
        <script src="{{ asset('/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js')}}"></script>
        <script src="{{ asset('/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
        <script src="{{ asset('/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

        <!-- CK Editor -->
        <script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>

        <script>
          $(function () {
      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()
      $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
  })
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
    
@endsection