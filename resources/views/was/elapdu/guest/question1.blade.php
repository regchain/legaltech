@extends('templates.alpha.templatealt')

@section('title', 'Data Pelapor')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
<!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')

<!-- Default box -->
<div class="box">
  <div class="row">
    <div class="box-tools pull-right text-blue">
      <i class="fa fa-angle-double-right" aria-hidden="true"></i>
      Data Terlapor
    </div>
    <h4 class="box-title">DATA PELAPOR</h4>
    <div class="box-body">
      <div class="col-xs-12">
        <div class="progress">
          <div class="progress-bar progress-bar-primary progress-bar-striped progress-sm" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
            <span class="sr-only">5% Complete (success)</span>
          </div>
        </div>
        <pre class="text-justify"><code>Masukkan identitas anda sebagai pelapor (Kerahasiaan data terjamin) Anda tidak perlu khawatir terungkapnya identitas diri anda karena kami akan MERAHASIAKAN IDENTITAS DIRI ANDA sebagai whistleblower. JAKSA AGUNG MUDA BIDANG PENGAWASAN menghargai informasi yang Anda laporkan. Fokus kami kepada materi informasi yang Anda Laporkan.</code></pre>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="email" class="form-control" placeholder="Nama Lengkap">
        </div><br>
        <div class="form-group">
         <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>

          <input type="text" class="form-control" placeholder="Tanggal Lahir" id="tgllahir">
        </div>
        <!-- /.input group -->
      </div><!-- /date --> 
    </div>
    <div class="col-md-6 col-sm-6">
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
        <input type="email" class="form-control" placeholder="Pekerjaan">
      </div><br>
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-users"></i></span>
        <input type="email" class="form-control" placeholder="Organisasi">
      </div>
    </div>
    <div class="col-md-12 col-sm-12">
      <div class="row"> 
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-id-badge"></i>
              </div>
              <input type="text" class="form-control" placeholder="HP..." 
              data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
            </div>
            <!-- /.input group -->
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-phone"></i>
              </div>
              <input type="text" class="form-control" placeholder="Telpon..."
              data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
            </div>
            <!-- /.input group -->
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
              <input class="form-control" placeholder="email ..." name="kontak_email" type="text">
            </div>
            <!-- /.input group -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-sm-12">

      <div class="form-group">
        <label></label>
        <textarea class="form-control" placeholder="Alamat lengkap : Jalan / Gg. ..." name="alamat" cols="0" rows="3"></textarea>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <label></label>
            <input class="form-control" name="kodepos" type="text" placeholder="Kode Pos">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <!-- Kota -->
          <div class="form-group">
            <label></label>
            <input class="form-control" name="kota" type="text" placeholder="Kota">
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <label></label>
            <input class="form-control" name="propinsi" type="text" placeholder="Propinsi">
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- /.row-box-body -->
  </div>
<div class="box-footer">
  <a href="#" class="btn btn-primary pull-right"><span class="fa fa-plus"></span> Pelapor / Saksi</a>
</div>
      <div class="row">
        @include('was.elapdu.guest.pelapor_view')
      </div>

      <div class="box-footer">
        <!-- this row will not appear when printing -->
        <div class="row no-print">
          <div class="col-xs-12">

            <a href='question2' class="button special small pull-right"><i class="fa fa-check"></i> Lanjut
            </a>
            <a href='#' class="button alt small pull-right" style="margin-right: 5px;">
              <i class="fa fa-exclamation-triangle"></i> Batal
            </a>
          </div>
        </div>
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

   <!-- date-range-picker -->
  <script src="{{ asset('/bower_components/moment/min/moment.min.js')}}"></script>
  <script src="{{ asset('/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <!-- bootstrap datepicker -->
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.id.min.js')}}"></script>

  <!-- InputMask -->
  <script src="{{ asset('/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js')}}"></script>
  <script src="{{ asset('/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
  <script src="{{ asset('/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

  <script>
    $(function () {
      $('#sandbox-container .input-group.date').datepicker({
          format: "d MM yyyy",
          weekStart: 1,
          startView: 3,
          language: "id",
          daysOfWeekDisabled: "0",
          daysOfWeekHighlighted: "0",
          autoclose: true,
          todayHighlight: true
      });
      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
       //Date picker
        $('#tgllahir').datepicker({
          format: "dd MM yyyy",
              weekStart: 1,
              startView: 3,
              language: "id",
              daysOfWeekHighlighted: "0"
        })
      //Money Euro
      $('[data-mask]').inputmask()
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

