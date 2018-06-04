@extends('pidsus.themes.core.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('judulhalaman', 'DIREKTORAT PENYIDIKAN')

@section('subjudul', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Daftar Subyek Hukum')

@section('content')

<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Daftar Subyek Hukum <small>[RT]</small></h3>
    
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
        
        <div class="table table-responsive">
          <div class="col-md-12">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#terlapor">Terlapor</a></li>
    <li><a data-toggle="tab" href="#tersangka">Tersangka</a></li>
    <li><a data-toggle="tab" href="#tahanan">Tahanan</a></li>
  </ul>

  <div class="tab-content">
    <div id="terlapor" class="tab-pane fade in active">
      <table class="table table-striped table-bordered">
      <th>
        <td width="33%">
          Terlapor
        </td>
        <td width="33%">
          Lembaga
        </td>
      </th>
      @forelse ($terlapors as $terlapor)
      <tr>
        <td width="100%" colspan="4">
          <div>@include('pidsus.dik.partials._terlapor', ['terlapor' => $terlapor])</div>
        </td>
      </tr>
      @empty
      <tr>
        <td width="100%" colspan="4"> No Data</td>
      </tr>
      @endforelse
    </table>
    </div>
    <div id="tersangka" class="tab-pane fade">
      <table class="table table-striped table-bordered">
      <th>
        <td width="33%">
          Tersangka
        </td>
        <td width="33%">
          Lembaga
        </td>
      </th>
      @forelse ($tersangkas as $tersangka)
      <tr>
        <td width="100%" colspan="4">
          <div>@include('pidsus.dik.partials._tersangka', ['tersangka' => $tersangka])</div>
        </td>
      </tr>
      @empty
      <tr>
        <td width="100%" colspan="4"> No Data</td>
      </tr>
      @endforelse
    </table>
  </div>
    <div id="tahanan" class="tab-pane fade">
      <table class="table table-striped table-bordered">
      <th>
        <td width="33%">
          Tahanan
        </td>
        <td width="33%">
          Lembaga
        </td>
      </th>
      @forelse ($tahanans as $tahanan)
      <tr>
        <td width="100%" colspan="4">
          <div>@include('pidsus.dik.partials._tahanan', ['tahanan' => $tahanan])</div>
        </td>
      </tr>
      @empty
      <tr>
        <td width="100%" colspan="4"> No Data</td>
      </tr>
      @endforelse
    </table>
    </div>
  </div>
          </div>
@stop

@section('script')

@endsection