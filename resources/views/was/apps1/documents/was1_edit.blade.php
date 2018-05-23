@extends('elapdu.operator.template')

@section('title', 'Dashboard')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('stylesheets')
  {{-- expr --}}
@endsection

@section('content')
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">EDIT TELAAHAN</h3>

    <div class="box-body">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              I. PERMASALAHAN
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">

           @include('elapdu.lapdu.partials.kasus_view')

         </div>
       </div>
     </div>
     <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            II. DATA 
          </a>
        </h4>
      </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">

        <h4>1. Data Pelapor</h4>
        @include('elapdu.lapdu.partials.pelapor_view')

        <h4>2. Data Terlapor</h4>
        @include('elapdu.lapdu.partials.terlapor_view')

        <h4>3. Data Penunjang</h4>
        @include('elapdu.lapdu.partials.datapenunjang_view')

      </div>
    </div>
  </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            III. ANALISA 
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">

          <form>
            <textarea id="analisa" name="analisa_telaahan" rows="10" cols="80">
              <i>Uraikan analisa yang singkat dan lengkap</i>
            </textarea>
          </form>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingFour">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            IV. KESIMPULAN 
          </a>
        </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
        <div class="panel-body">

          <form>
            <textarea id="kesimpulan" name="analisa_telaahan" rows="10" cols="80">
              <i>Uraikan kesimpulan yang singkat dan lengkap</i>
            </textarea>
          </form>
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
              Belum ditemukan bukti awal adanya dugaan pelanggaran disiplin
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              Ditemukan bukti awal adanya dugaan pelanggaran disiplin ringan atau sedang atau
              berat
            </label>
          </div>
          <div class="radio disabled">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
              Substansi permasalahannnya merupakan kewenangan bidang teknis
            </label>
          </div>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingFour">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            III. SARAN 
          </a>
        </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
        <div class="panel-body">


          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
              1. Tidak perlu ditindak lanjuti
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              2. Perlu ditindak lanjuti dengan melakukan Klarifikasi atau lnspeksi Kasus oleh atasan
              langsung atau tim pemeriksa
            </label>
          </div>
          <div class="radio disabled">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
              3. Perlu ditindaklanjuti dengan meneruskan laporan pengaduan tersebut kepada bidang
              teknis terkait
            </label>
          </div>              
        </div>
      </div>
    </div>
  </div>

    <div class="box-footer">
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href='#' class="btn btn-info pull-right"><i class="fa fa-save"></i> Simpan
          </a>
          <a href='laporan_disposisi' class="btn btn-danger pull-right" style="margin-right: 5px;">
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
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- iCheck 1.0.1 -->
    <script src="{{ asset('/bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

      <script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>


      <script>
        $(function () {
           //Radio Button
    $( "input[type='radio']" ).checkboxradio()
    $( ".selector" ).checkboxradio({
  icon: false
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
          //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })
          //Date picker
        $('#datepicker2').datepicker({
          autoclose: true
        })
        //Date picker
        $('#notadinas').datepicker({
          autoclose: true
        })
        //Date picker
        $('#klarifikasi').datepicker({
          autoclose: true
        })

         // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('analisa')
        CKEDITOR.replace('kesimpulan')
        CKEDITOR.replace('pendapat')
        CKEDITOR.replace('saran')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()

        })
      </script>
@endsection