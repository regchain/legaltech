@extends('administrator.template')

@section('title', 'Hak Akses')

@section('judulhalaman', 'GROUP PENGGUNA')

@section('subjudul', 'KEJAKSAAN AGUNG REPUBLIK INDONESIA')

@section('stylesheets')
<!-- JQueryUI Tabs -->
<link rel="stylesheet" href="{{ asset('/bower_components/jquery-ui/themes/humanity/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('/bower_components/jquery-ui/themes/humanity/theme.css')}}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')

<!-- Default box -->
<div class="box box-success">
  <div class="box-header with-border">
    <h2 class="box-title">GROUP EKSEKUTIF</h2>
  </div>
  
  <div class="box-body">
    <div class="row">
      @include('administrator.partials.jaksaagung')
      @include('administrator.partials.jamwas')
    </div>
  </div>
  <!-- /.box-body -->
</div>
<div class="box box-success">
  <div class="box-header with-border">
    <span class="pull-right"> BIDANG PENGAWASAN</span> 
    <h1 class="box-title">GROUP KEJAKSAAN AGUNG</h1>
  </div>
  <!-- /.box-body -->
  <div class="box-body">
    <div id="tabs">
      <ul>
        <li><a href="#tabs-1">INSPEKTUR I</a></li>
        <li><a href="#tabs-2">INSPEKTUR II</a></li>
        <li><a href="#tabs-3">INSPEKTUR III</a></li>
        <li><a href="#tabs-4">INSPEKTUR IV</a></li>
        <li><a href="#tabs-5">INSPEKTUR V</a></li>
      </ul>
      <div id="tabs-1">
        <div class="row">
          @include('administrator.partials.inspektur1')
        </div>
      </div>
      <div id="tabs-2">
        <div class="row">
          @include('administrator.partials.inspektur2')
        </div>
      </div>
      <div id="tabs-3">
        <div class="row">
          @include('administrator.partials.inspektur3')
        </div>
      </div>
      <div id="tabs-4">
        <div class="row">
          @include('administrator.partials.inspektur4')
        </div>
      </div>
      <div id="tabs-5">
        <div class="row">
          @include('administrator.partials.inspektur5')
        </div>
      </div>
    </div>
  </div>
</div>

<div class="box box-success">
  <div class="box-header with-border">
    <div class="col-md-4">
      <h1 class="box-title">GROUP KEJAKSAAN TINGGI</h1>
    </div>
    <div class="col-md-8">

          <form class="form-inline pull-right">
            <div class="form-group">
              <code for="institution">institution::name</code>
              <select class="form-control select2">
                      <option selected="selected">Kejaksaan Tinggi</option>
                      <option>...</option>
                      <option>...</option>
                      <option>...</option>
                      <option>...</option>
                      <option>...</option>
                    </select>
            </div>
            <div class="form-group">
              <code for="kejari">::region</code>
              <select class="form-control select2">
                      <option selected="selected">Kejaksaan Negeri</option>
                      <option>...</option>
                      <option>...</option>
                      <option>...</option>
                      <option>...</option>
                      <option>...</option>
                    </select>
            </div>
          </form>

         </div>
  </div>
  <div class="box-body">
    @include('administrator.partials.kejati')
  </div>
</div>
<!-- /.row-box-body -->
<!-- /.box-header -->





<div class="box box-success">
  <div class="box-header with-border">
    <h2 class="box-title">GROUP BIDANG TEKNIS</h2>
  </div>
  
  <div class="box-body">
    <div class="row">
      @include('administrator.partials.bidangteknis1')
    </div>
  </div>
  <!-- /.box-body -->
  <div class="box-body">
    <div class="row">
      @include('administrator.partials.bidangteknis2')
    </div>
  </div>
  <!-- /.box-body -->
</div>

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
    $( "#kejati" ).tabs({
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

