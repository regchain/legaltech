@extends('was.themes.alpha.templatealt')

@section('title', 'Data Terlapor')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
  <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- Autocomplete -->
    <link rel="stylesheet" href="{{ asset('/bower_components/jquery-ui/themes/base/jquery-ui.css')}}">
    <link rel="stylesheet" href="/resources/demos/style.css">
@endsection

@section('content')
  
<div class="box">
        <div class="box-tools pull-right text-blue">
          <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          Uraian Permasalahan
        </div>
        <h4 class="box-title">DATA TERLAPOR</h4>
        <div class="progress">
          <div class="progress-bar progress-bar-primary progress-sm progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
            <span class="sr-only">25% Complete (success)</span>
          </div>
        </div>
        <pre><code>Masukkan identitas data pegawai (yang dilaporkan)</code></pre>
        

        <div class="row">
          <!-- column -->  
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <!-- Kota -->
                    <div class="form-group">
                      <label>Satuan Kerja</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Kejaksaan Agung</option>
                        <optgroup label="Kejaksan Tinggi">
                        <option>DKI Jakarta</option>
                        <option>Jawa Barat</option>
                        <option>Jawa Tengah</option>
                        <option>Jawa Timur</option>
                        <option>dst ...</option>
                      </optgroup>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label>Kejaksaan Negeri</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">...</option>
                        <option>Kejari ...</option>
                        <option>Kejari ...</option>
                        <option>Kejari ...</option>
                        <option>Kejari ...</option>
                        <option>Kejari ...</option>
                        <option>Kejari ...</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label>Kejaksaan Cabang</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">...</option>
                        <option>Kecapjari ...</option>
                        <option>Kecapjari ...</option>
                        <option>Kecapjari ...</option>
                        <option>Kecapjari ...</option>
                        <option>Kecapjari ...</option>
                        <option>Kecapjari ...</option>
                      </select>
                    </div>
                  </div>
          <!-- column -->         

        <div class="col-sm-4 col-xs-12">
          <label for=""></label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Nama Lengkap</option>
                          <option>[Nama Lengkap 1]</option>
                          <option>[Nama Lengkap 2]</option>
                          <option>[Nama Lengkap 3]</option>
                          <option>[Nama Lengkap 4]</option>
                          <option>[Nama Lengkap 5]</option>
                    </select>
              </div>
              <div class="form-group">
<br>                    <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">TERLAPOR</option>
                        <option>SAKSI</option>
                      </select>
              </div>
            </div>
            <div class="col-sm-8 col-xs-12">
              <label></label>
            <div class="form-group">
                  <textarea class="form-control" placeholder="Jelaskan posisi terlapor saat dalam permasalahan. ..." name="alamat" cols="0" rows="3"></textarea>
                </div>
          </div>
        </div>
        <!-- row -->
        <div class="box-footer">
          <a href="#" class="btn btn-primary pull-right"><span class="fa fa-plus"></span> Pelapor / Saksi</a>
        </div>
              <div class="row">
                @include('was.elapdu.guest.terlapor_view')
              </div>
        <div class="row">
          <div class="col-xs-12">
            
            <a href='question3' class="button special small pull-right"><i class="fa fa-check"></i> Lanjut
            </a>
            <a href='#' class="button alt small pull-right" style="margin-right: 5px;">
              <i class="fa fa-exclamation-triangle"></i> Batal
            </a>
          </div>
        </div>
      
</div>



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
   <!-- Select2 -->
        <script src="{{ asset('/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
        <!-- SlimScroll -->
        <script src="{{ asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

        <!-- FastClick -->
        <script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>

  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
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

