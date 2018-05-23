@extends('administrator.template')

@section('title', 'Tambah Pasal')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
      
@endsection

@section('content')
  
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Pasal Baru</h3>

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
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <form method="POST" action="http://localhost/ek/elpidsus/public/pasal" accept-charset="UTF-8"><input name="_token" type="hidden" value="tCeXbti8deSlxwXrsTT00CfquQi493s9fSqY5ArV">
                        <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="form-group">
                <label for="undang_undang">Undang Undang</label>
                <input class="form-control" placeholder="Enter ..." readonly="" name="undang_undang" type="text" value="UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 20 TAHUN 2001 TENTANG PEMBERANTASAN TINDAK PIDANA KORUPSI" id="undang_undang">
                    
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="form-group">
                <label for="article_category">Kategori Pasal</label>
                <input class="form-control" placeholder="Enter ..." required="" name="article_category" type="text" id="article_category">
                
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="form-group">
                <label for="article">Pasal</label>
                <input class="form-control" placeholder="Enter ..." required="" name="article" type="number" id="article">
                
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="form-group">
                <label for="article_number">Angka</label>
                <input class="form-control" placeholder="Enter ..." name="article_number" type="number" id="article_number">
                
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="form-group">
                <label for="article_alphabet">Huruf</label>
                <input class="form-control" placeholder="Enter ..." name="article_alphabet" type="text" id="article_alphabet">
                
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="form-group">
                <label for="sentence_min">Masa Hukuman Minimal</label>
                <div class="input-group">
                  <input class="form-control" placeholder="Enter ..." name="sentence_min" type="number" id="sentence_min">
                  <span class="input-group-addon">Tahun</span>
                </div>
                
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="form-group">
                <label for="sentence_max">Masa Hukuman Maksimal</label>
                <div class="input-group">
                  <input class="form-control" placeholder="Enter ..." name="sentence_max" type="number" id="sentence_max">
                  <span class="input-group-addon">Tahun</span>
                </div>
                
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="form-group">
                <label for="penalty_min">Denda Minimal</label>
                <div class="input-group">
                  <span class="input-group-addon">Rp</span>
                  <input class="form-control" placeholder="Enter ..." name="penalty_min" type="number" id="penalty_min">
                </div>
                
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="form-group">
                <label for="penalty_max">Denda Maksimal</label>
                <div class="input-group">
                  <span class="input-group-addon">Rp</span>
                  <input class="form-control" placeholder="Enter ..." name="penalty_max" type="number" id="penalty_max">
                </div>
                
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="form-group">
                <label for="article_detail">Keterangan</label>
                <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>
                
              </div>
            </div>

                    </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="box-footer">
          <div class="col-xs-12">
                <a href="peraturan" class="btn btn-success pull-right"><i class="fa fa-check-square-o"></i> Lanjut
                </a>
                <a href="peraturan" class="btn btn-danger pull-right" style="margin-right: 5px;">
                  <i class="fa fa-exclamation-triangle"></i> Batal
                </a>
              </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

@endsection

@section('scripts')
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('/bower_components/admin-lte/dist/js/demo.js')}}"></script>
  <!-- CK Editor -->
  <script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    })
  </script>
@endsection

