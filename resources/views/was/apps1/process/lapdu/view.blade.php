@extends('elapdu.operator.template')

@section('title', 'Lapdu Baru')

@section('judulhalaman', 'Laporan Pengaduan')

@section('subjudul', 'Kejaksaan Agung Republik Indonesia')

@section('stylesheets')
          
        <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
      
@endsection

@section('content')
  
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-commenting fa-3x"> </i> Laporan Baru </h3>
        </div>

        <div class="box-body">
          
        @include('elapdu.lapdu.partials._pengaduan')

        </div>

        <div class="box-footer">
            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-xs-12">
                
                <a href='laporan' class="btn btn-default pull-right"><i class="fa fa-mail-reply"></i>&nbsp; KEMBALI
                </a>
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
  
    <!-- DataTables -->
        <script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
        <!-- SlimScroll -->
        <script src="{{ asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

        <!-- FastClick -->
        <script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script
@endsection