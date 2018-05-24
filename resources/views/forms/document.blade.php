@extends('themes.admin.template')

@section('title', 'home')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
  <!-- iCheck for checkboxes and radio inputs -->
      <link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/iCheck/all.css')}}">
@endsection

@section('content')
  
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">KARTU PENERUS DISPOSISI</h3>

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
          <div class="col-xs-6" >
            
              KEJAKSAAN <strong>[AGUNG<br>Republik Indonesia]</strong>
              
          </div>
          
          <div class="col-xs-6 text-right">
            <!-- checkbox -->
            <div class="form-group btn-sm">
              <label>
                <input type="checkbox" class="minimal-red">
                SEGERA
              </label>
              <label>
                <input type="checkbox" class="minimal-red">
                RAHASIA
              </label>
              <label>
                <input type="checkbox" class="minimal-red">
                PENTING
              </label>
              <label>
                <input type="checkbox" class="minimal-red">
                BIASA
              </label>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="row">
        <div class="box-body">
          <div class="col-xs-7">
                  <div class="input-group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default btn-sm">KODE / INDEX</button>
                    </div>
                    <!-- /btn-group -->
                    <input type="text" class="form-control-xs">
                  </div>
                </div>
                <div class="col-xs-5">
                 <!-- Date -->
                 <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control-sm pull-right" id="datepicker">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default btn-sm">Tanggal Penyelesaian</button>
                    </div>
                    <!-- /btn-group -->
                     
                   </div>
                   <!-- /.input group -->
                 </div>
                </div><!-- /date -->
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="row">
        <div class="box-body">
          <div class="col-sm-4 invoice-col">
            
            <h4>LAPORAN PENGADUAN</h4>
            <address>
              <strong><span class="pull-right">: </span>Perihal</strong><br>
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-8 invoice-col">
            <h4>&nbsp;</h4>
            <div><b>Lorem ipsum dolor sit amet,</b>  consectetur adipisicing elit. Possimus eligendi sunt voluptate necessitatibus tempore. Accusantium dolorum ratione eaque dolores sunt provident, iure explicabo architecto atque ab, vitae, deleniti, minus itaque.<br></div>

            
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="row">
        <div class="box-body">
          <div class="col-xs-6">
                  <div class="input-group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default btn-sm">No. Surat</button>
                    </div>
                    <!-- /btn-group -->
                    <input type="text" class="form-control-xs">
                  </div>
                </div>
                <div class="col-xs-6">
                 <!-- Date -->
                 <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control-sm pull-right" id="datepicker2">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default btn-sm">Tanggal Surat</button>
                    </div>
                    <!-- /btn-group -->                     
                   </div>
                   <!-- /.input group -->
                 </div>
                 <div class="form-group btn-sm">
                   <label>
                     <input type="checkbox" class="minimal-red">
                     BARU
                   </label> /&nbsp;
                   <label>
                     <input type="checkbox" class="minimal-red">
                     LANJUTAN DITANGANI INSPEKTUR :
                   </label>
                   <div class="btn-group pull-right">
                     <button type="button" class="btn btn-default">I</button>
                     <button type="button" class="btn btn-default">II</button>
                     <button type="button" class="btn btn-default">III</button>
                     <button type="button" class="btn btn-default">IV</button>
                     <button type="button" class="btn btn-default">V</button>
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
            <form>
              <div>
                  <textarea id="editor1" name="editor1" rows="5" cols="80">
                                         Harap Isi Dengan Uraian Ringkas Tentang Terlapor & Materinya..!
                  </textarea>
                </div>
            </form>
          </div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="row">
        <div class="box-body">
          <div class="col-xs-4">
          <!-- INFORMASI / INSTRUKSI -->
          <div class="box-body">
            <div class="box-header with-border">
              <h3 class="box-title">Informasi / Instruksi</h3>
              <div class="box-tools pull-right">
                <small>[Jaksa Agung]</small>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
               <label>
               <input type="checkbox" class="minimal-red">
               Telaahan
             </label><br>
             <label>
               <input type="checkbox" class="minimal-red">
               Monitor & Evaluasi
             </label><br>
             <label>
               <input type="checkbox" class="minimal-red">
               Tindak lanjut
             </label><br>
             <label>
               <input type="checkbox" class="minimal-red">
               Teruskan ke Kejati
             </label><br>
             <label>
               <input type="checkbox" class="minimal-red">
               Teruskan ke Bidang Lain
             </label><br>
             <label>
               <input type="checkbox" class="minimal-red">
               Setuju, Saran
             </label><br>
             <label>
               <input type="checkbox" class="minimal-red">
               Teliti / Cermati
             </label><br>
             <label>
               <input type="checkbox" class="minimal-red">
               Pendapat
             </label><br>
             <label>
               <input type="checkbox" class="minimal-red">
               USP /UDK
             </label><br>
             <label>
               <input type="checkbox" class="minimal-red">
               Temui JAM WAS
             </label><br>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <form action="#" method="post">
                <div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-default btn-flat">Send</button>
                      </span>
                </div>
              </form>
            </div>
            <!-- /.box-footer-->
          </div>
          <!--/.informasi-instruksi -->  
          </div>
          <div class="col-md-4">
            <!-- DISOSISI -->
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Disposisi</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="box-group" id="accordion">
                  <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                  <div class="panel box box-default">
                    <div class="box-header with-border">
                      <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                          JAM WAS
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="box-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                      </div>
                      <div class="box-footer">
                        <form action="#" method="post">
                          <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-btn">
                                  <button type="submit" class="btn btn-default btn-flat">Send</button>
                                </span>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="panel box box-default">
                    <div class="box-header with-border">
                      <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                          SES JAMWAS
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="box-body">
                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. 
                      </div>
                      <div class="box-footer">
                        <form action="#" method="post">
                          <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-btn">
                                  <button type="submit" class="btn btn-default btn-flat">Send</button>
                                </span>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="panel box box-default">
                    <div class="box-header with-border">
                      <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          INSPEKTUR [ I-V]
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="box-body">
                        Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                      <div class="box-footer">
                        <form action="#" method="post">
                          <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-btn">
                                  <button type="submit" class="btn btn-default btn-flat">Send</button>
                                </span>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.DISPOSISI -->
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <!-- DITERUSKAN-KEPADA -->
            <div class="box-body">
              <div class="box-header with-border">
                <h3 class="box-title">Diteruskan Kepada</h3>

                <div class="box-tools pull-right">

                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <!-- Conversations are loaded here -->
                <label>
                 <input type="checkbox" class="minimal-red">
                 JAM WAS
               </label><br>
               <label>
                 <input type="checkbox" class="minimal-red">
                 SES JAM WAS
               </label><br>
               <label>
                 <input type="checkbox" class="minimal-red">
                 INSPEKTUR I
               </label><br>
               <label>
                 <input type="checkbox" class="minimal-red">
                 INSPEKTUR II
               </label><br>
               <label>
                 <input type="checkbox" class="minimal-red">
                 INSPEKTUR III
               </label><br>
               <label>
                 <input type="checkbox" class="minimal-red">
                 INSPEKTUR IV
               </label><br>
               <label>
                 <input type="checkbox" class="minimal-red">
                 INSPEKTUR V
               </label><br>
               <label>
                 <input type="checkbox" class="minimal-red">
                 PPPTPK
               </label><br>
               <label>
                 <input type="checkbox" class="minimal-red">
                 KABAG SUNPROGLAP DAN PANIL
               </label><br>
               <label>
                 <input type="checkbox" class="minimal-red">
                 KABAG TU
               </label><br>
             </div>
             <!-- /.box-body -->
             <div class="box-footer">
              <form action="#" method="post">
                <div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-flat">Send</button>
                  </span>
                </div>
              </form>
            </div>
            <!-- /.box-footer-->
          </div>
          <!--/.diteruskan-kepada -->
        </div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        {{-- <div class="row">
        <div class="box-body">
          Row Box 1
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body --> --}}

        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-xs-12">
                <a href="documentprint" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                <button type="button" class="btn btn-default" style="margin-left: 5px;">
                  <i class="fa fa-download"></i> Generate PDF
                </button>
                <button type="button" class="btn btn-success pull-right"><i class="fa fa-check-square-o"></i> Lanjut
                </button>
                <button type="button" class="btn btn-danger pull-right" style="margin-right: 5px;">
                  <i class="fa fa-exclamation-triangle"></i> Batal
                </button>
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
  <!-- iCheck 1.0.1 -->
  <script src="{{ asset('/bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- bootstrap datepicker -->
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

    <script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>


    <script>
      $(function () {
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

       // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()

      })
    </script>
@endsection

