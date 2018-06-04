@extends('pidsus.themes.core.template')

@section('title', 'Dir.Dik')

@section('judulhalaman', 'DIREKTORAT PENYIDIKAN')

@section('subjudul', 'Tindak Pidana Khusus')

@section('stylesheet')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">
<!-- selectpicker -->
<link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection


@section('content')

<!-- Default box -->
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Edit Pengaduan</
		</div>
		<div class="row">
			<div class="box-body">
				<div class="col-xs-12">
					{!! Form::model($case, ['url' => route('rp1.update', $case->id), 'method' => 'put']) !!}
					@include('pidsus.dik.process.rp1.rp1_form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	@stop
	
	@section('script')
	<!-- Form Kasus Posisi -->
	<script src='{{ asset('bower_components/js/kasus_posisi.js') }}'></script>
	<!-- bootstrap datepicker -->
    <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>


<<!-- DataTables -->
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

        <!-- CK Editor -->
        <script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>

        <script>
          $(function () {
            //Date picker
        $('#tgllahir').datepicker({
          autoclose: true
        })
            //Initialize Select2 Elements
      $('.select2').select2()
      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()
      $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
  })
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