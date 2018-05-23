@extends('was.elapdu.themes.operator.template')

@section('title', 'Tambah Laporan')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('stylesheets')
<!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}">
            <!-- Select2 -->
            <link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">
            <!-- selectpicker -->
            <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
            <!-- DataTables -->
            <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')



      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">TAMBAH LAPORAN PENGADUAN</h3>
          </div>

          <div class="box-body">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <span class="label label-success pull-right">Detil</span> PERMASALAHAN
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">

                  <div class="box-body">
                    @include('was.elapdu.process.lapdu.partials.kasus_create')
                  </div>

                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <span class="label label-success pull-right">Detil</span> DATA PELAPOR
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <div class="box-body">
                    @include('was.elapdu.process.lapdu.partials.pelapor_create')
                  </div>

                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <span class="label label-success pull-right">Detil</span> DATA TERLAPOR
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">

                  <div class="box-body">
                    @include('was.elapdu.process.lapdu.partials.terlapor_create')
                  </div>
                </div>

              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingFour">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <span class="label label-success pull-right">Detil</span> DATA PENUNJANG
                  </a>
                </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="panel-body">

                  <div class="box-body">
                    @include('was.elapdu.process.lapdu.partials.datapenunjang_create')
                  </div>
                </div>

              </div>
            </div>
        </div>
      </div>

        
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
<!-- bootstrap datepicker -->
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.id.min.js')}}"></script>

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

        <!-- Select2 -->
        <script src="{{ asset('/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

        <!-- CK Editor -->
        <script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>

        <script>
          $(function () {
            //Date picker
        $('#tgllahir').datepicker({
          format: "dd MM yyyy",
              weekStart: 1,
              startView: 3,
              language: "id",
              daysOfWeekHighlighted: "0"
        })
            //Initialize Select2 Elements
      $('.select2').select2()
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
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false
    })
    })
  </script>
    
@endsection