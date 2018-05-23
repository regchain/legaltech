@extends('elapdu.operator.template')

@section('title', 'Dashboard')

@section('judulhalaman', 'Kejaksaan Agung')

@section('subjudul', 'Republik Indonesia')

@section('stylesheets')
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}">
@endsection

@section('content')
  
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Dashboard</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>

        {{-- @include('elapdu.partials.new') --}}
        <div class="input-group date">
          <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
        </div>



        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

@endsection

@section('scripts')
<!-- bootstrap datepicker -->
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker3.min.js')}}"></script>
  <script>
     $(function () {
    $('#datepicker').datepicker({
      format: "dd MM yyyy",
      weekStart: 1,
      maxViewMode: 3,
      todayBtn: "linked",
      language: "id",
      daysOfWeekHighlighted: "0",
      todayHighlight: true
  })
  });
</script>
@endsection