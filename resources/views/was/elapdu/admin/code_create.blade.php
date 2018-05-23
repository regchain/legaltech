@extends('administrator.template')

@section('title', 'Tambah Pasal')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
      <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('content')
  
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Peraturan / UU Baru</h3>
        </div>
        <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                        <form method="POST" action="http://localhost/ek/elpidsus/public/pasal" accept-charset="UTF-8"><input name="_token" type="hidden" value="tCeXbti8deSlxwXrsTT00CfquQi493s9fSqY5ArV">
                        
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="form-group">
                <label for="article_category">Jenis Peraturan / UU</label>
                <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Pilih Jenis</option>
                          <option>Undang-Undang Dasar</option>
                          <option>Undang-Undang</option>
                          <option>Peraturan Pemerintah Pengganti Undang-undang</option>
                          <option>Peraturan Pemerintah</option>
                          <option>Peraturan Presiden</option>
                          <option>Peraturan Badan Pemeriksa Keuangan</option>
                          <option>Peraturan Bank Indonesia</option>
                          <option>Peraturan Menteri</option>
                          <option>Peraturan Lembaga Pemerintah Non Kementerian</option>
                          <option>Peraturan Daerah</option>
                          <option>Otoritas Jasa Keuangan</option>
                    </select>
                
              </div>
            </div>
            <div class="col-md-1 col-sm-3 col-xs-6">
              <div class="form-group">
                <label for="pasal">Nomor</label>
                <input class="form-control" placeholder="No ..." required="" name="article" type="text" id="article">
                
              </div>
            </div>
            <div class="col-md-1 col-sm-3 col-xs-6">
              <div class="form-group">
                <label for="ayat">Tahun</label>
                <input class="form-control" placeholder="Tahun ..." name="article_number" type="text" id="article_number">
                
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="huruf">Tentang</label>
                <input class="form-control" placeholder="Tentang ..." name="article_alphabet" type="text" id="article_alphabet">
                
              </div>
            </div>
            
                    </form>
                  </div>
                </div>
          </div>
        <!-- /.box-body -->
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

<!-- Select2 -->
<script src="{{ asset('/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
    })
  </script>
@endsection

