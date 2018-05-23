@extends('was.elapdu.themes.operator.template')

@section('title', 'Surat Perintah Klarifikasi')

@section('judulhalaman', 'Surat Perintah Klarifikasi')

@section('subjudul', 'Kejaksaan AgungRepublik Indonesia')

@section('stylesheets')
  <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
<!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

<!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">

@endsection

@section('content')

<!-- Default box -->
<div class="box">
  <!-- Default box -->
  <div class="box-header with-border">
    <small class="col-xs-3 pull-right text-justify">Lampiran Petunjuk Pelaksanaan JAMWAS Nomor; 01/H/Hjw/04//2011 tanggal 01 April 2011 tentang Teknis Penanganan Laporan dan Tata Kelola Administrasi Bidang Pengawasan<br><strong class="pull-right">SP.WAS-1</strong></small>
<h1 class="box-title"><pre>table:users:institute</pre></h1>
</div>
    <div class="col-md-6 col-md-offset-3" style="padding-bottom: 30px">
    <h3 class="description-block" for="inputGroupSuccess2">SURAT PERINTAH<br>
      <div class="form-group">
        <select class="form-control select2" style="width: 100%;">
          <option selected="">JAKSA AGUNG REPUBLIK INDONESIA</option>
          <option>JJAKSA AGUNG MUDA BIDANG PENGAWASAN</option>
              <option>KEPALA Kejaksaan TINGGI</option>
              <option>KEPALA Kejaksaan NEGERI</option>
        </select>
      </div>
    </h3>
    </div>


<div class="box-body">
  <div class="col-sm-3">
     <div class="input-group">
    <span class="input-group-addon">NO :</span>
    <input type="text" class="form-control" placeholder="[no_sp.was1]">
  </div>
  </div>
<div class="col-sm-6"></div>
  <div class="col-sm-3">
    <div class="form-group">
    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker">
                    </div>
    <!-- /.input group -->
  </div>
  <!-- /.form group -->
  </div>
</div>
   {{-- <span class="description-text">(KLARIFIKASI)</span> --}}


  <div class="box-body">
    @include('was.elapdu.surat.partials._sp_was1_create')
  </div>


  <div class="box-body">
   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span class="pull-right"> <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"> </i> I. PERMASALAHAN
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

          @include('was.elapdu.process.lapdu.partials.kasus_view')

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <span class="pull-right"> <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"> </i> II. DATA
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">

          <div class="box-body">

            @include('was.elapdu.process.lapdu.partials.pelapor_view')

          </div>

          <div class="box-body">

            @include('was.elapdu.process.lapdu.partials.terlapor_view')

          </div>

          <div class="box-body">

            @include('was.elapdu.process.lapdu.partials.datapenunjang_view')

          </div>

        </div>
      </div>
    </div>
    {{-- <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <span class="pull-right"> <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"> </i> III. HASIL KLARIFIKASI
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">

        @include('was.elapdu.klarifikasi.partials._spklarifikasi_view')

        @include('was.elapdu.klarifikasi.partials._wawancara_view')

       </div>
     </div>
   </div>
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <span class="pull-right"> <i class="fa fa-angle-double-left"></i></span><i class="fa fa-angle-double-right"> </i> IV. NOTA DINAS
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">

        @include('was.elapdu.klarifikasi.partials._notadinas_view')

        
      </div>
    </div>
  </div>
   --}}
</div>
</div>


<div class="box-footer">
  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <a href='#' class="btn btn-info"><i class="fa fa-save"></i> Simpan
      </a>
      <a href='klarifikasi' class="btn btn-success pull-right"><i class="fa fa-check-square-o"></i> Lanjut
      </a>
      <a href='laporan_view' class="btn btn-danger pull-right" style="margin-right: 5px;">
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

<script src="{{ asset('/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('/bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- bootstrap datepicker -->
<!-- date-range-picker -->
  <script src="{{ asset('/bower_components/moment/min/moment.min.js')}}"></script>
  <script src="{{ asset('/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <!-- bootstrap datepicker -->
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.id.min.js')}}"></script>


<script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>
<!-- DataTables -->
  <script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{ asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>


<script>

  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      format: "dd MM yyyy",
          weekStart: 1,
          maxViewMode: 3,
          todayBtn: "linked",
          language: "id",
          daysOfWeekHighlighted: "0",
          autoclose: true,
          todayHighlight: true,
          toggleActive: true
    })
 //Initialize Select2 Elements
      $('.select2').select2()
    
    $('#example1').DataTable()
          $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
          })
   

          //iCheck for checkbox and radio inputs
          $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
          })
          //Red color scheme for iCheck
          $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
          })
          //Flat red color scheme for iCheck
          $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
          })
          
          


         // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

      });
    </script>
    @endsection