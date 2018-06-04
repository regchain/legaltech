@extends('was.themes.alpha.template')

@section('title', 'Tahapan')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
  {{-- expr --}}
@endsection

@section('content')

<div class="col-md-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <i class="fa fa-text-width"></i>

      <h3 class="box-title">CARA MELAKUKAN PENGADUAN MASYARAKAT</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <dl class="dl-horizontal">
        <dt>Apakah yang
        </dt>
        <dd>
          <strong>akan dilakukan terhadap Pengaduan yang disampaikan?</strong>
        </dd>
        <dd>
          Setiap Pengaduan yang disampaikan akan ditindaklanjuti dengan tahapan penanganan sebagai berikut :</dd>
          {{-- <p><img src="http://www.kejaksaan.go.id/images/pengaduan_bagan.gif" /></p> --}}
          <dd><strong>Proses pemilahan</strong></dd>
          <dd><li>Laporan pengaduan diteruskan ke bidang teknis terkait (JAM Pidum, JAM Pidsus, JAM Datun)
            <br>apabila materi pengaduan adalah mengenai masalah teknis penanganan perkara.</li>
          <li>Ditangani oleh bidang Pengawasan</li></dd>
          <dd><strong>Proses telaah</strong></dd>
          <dd><li>Klarifikasi oleh daerah</li></dd>
          <dt>Ada indikasi</dt>
          <dd>
            <li>Proses pemeriksaan oleh PPF (Pejabat Pengawasan Fungsional) *</li></dd>
          <dt>Tidak ada indikasi</dt>
          <dd><li> Pengaduan dihentikan *</li></dd>
          <dd><strong>Laporan Hasil Pemeriksaan</strong></dd>
          
          <dt>Terbukti </dt>
          <dd><li><b>Proses penjatuhan sanksi</b> (ringan, sedang, berat)</li></dd>
            <dt>Tidak terbukti</dt>
          <dd><li>pemeriksaan dihentikan</li>
          <li>Terlapor keberatan atas hukuman disiplin *</li>
          <li><b>Proses Majelis Kehormatan Jaksa</b> **</li>
          <li>Pelaksanaan hukuman disiplin</li>
        </dd>
        <dd><p><i>* optional<br />
                  ** khusus untuk jaksa yang diusulkan diberhentikan dengan hormat/tidak dengan hormat.</i></p></dd>
          <dt>
            Bagaimana cara 
          </dt>
          <dd>
            <strong>untuk mengetahui tindak lanjut yang dilakukan terhadap pengaduan yang disampaikan?</strong>
            <li>
                Tindak lanjut yang dilakukan terhadap setiap pengaduan yang diterima akan diumumkan melalui fitur Perkembangan Penanganan Pengaduan yang ada pada website Kejaksaan, berdasarkan nomor registrasi masing-masing. Untuk itu, penting bagi Anda sebagai Pelapor untuk mengingat atau mencatat dengan baik nomor registrasi dari pengaduan yang Anda sampaikan.</li>
                <a href="question1" class="btn bg-red btn-flat margin">LAPORKAN..!</a>
          </dd>
          
        </dl>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- ./col -->
</div>
  
@endsection