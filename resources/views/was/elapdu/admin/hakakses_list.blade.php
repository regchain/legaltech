@extends('administrator.template')

@section('title', 'Hak Akses')

@section('judulhalaman', 'HAK AKSES PENGGUNA')

@section('subjudul', 'KEJAKSAAN AGUNG REPUBLIK INDONESIA')

@section('stylesheets')
<!-- JQueryUI Tabs -->
<link rel="stylesheet" href="{{ asset('/bower_components/jquery-ui/themes/base/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('/resources/demos/style.css')}}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')
<div class="box box-success">
<div class="box-body">
    <div id="tabs">
      <ul>
        <li><a href="#tabs-1">LAPORAN PENGADUAN</a></li>
        <li><a href="#tabs-2">TAHAP KLARIFIKASI</a></li>
        <li><a href="#tabs-3">INSPEKSI KASUS</a></li>
        <li><a href="#tabs-4">USULAN HUKUMAN</a></li>
        <li><a href="#tabs-5">PUTUSAN</a></li>
      </ul>
      <div id="tabs-1">
        <div class="row">
          @include('administrator.partials.akses_lapdu')
        </div>
      </div>
      <div id="tabs-2">
        <div class="row">
          @include('administrator.partials.akses_klarifikasi')
        </div>
      </div>
      <div id="tabs-3">
        <div class="row">
          @include('administrator.partials.akses_inspeksi')
        </div>
      </div>
      <div id="tabs-4">
        <div class="row">
          @include('administrator.partials.akses_usulan')
        </div>
      </div>
      <div id="tabs-5">
        <div class="row">
          @include('administrator.partials.akses_putusan')
        </div>
      </div>
    </div>
  </div>
</div>


<!-- /.row-box-body -->
<!-- /.box-header -->



@endsection

@section('scripts')
<!-- JQueryUI Tabs -->
<script src="{{ asset('bower_components/jquery-3.3.1.min/index.js')}}"></script>
  <script src="{{ asset('/bower_components/jquery-ui/jquery-ui.js')}}"></script>
  <!-- DataTables -->
  <script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{ asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- Select2 -->
<script src="{{ asset('/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
  <script>
    //-- JQueryUI Tabs 
    $(function () {
      $( "#tabs" ).tabs({
      collapsible: true
    })
      //Initialize Select2 Elements
      $('.select2').select2()
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : false,
        'lengthChange': true,
        'searching'   : false,
        'ordering'    : false,
        'info'        : false,
        'autoWidth'   : false
      })
      $('#example3').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
      })
    })
  </script>
@endsection

