@extends('pidsus.themes.core.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('judulhalaman', 'DIREKTORAT PENYIDIKAN')

@section('subjudul', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Daftar Perkara Penyelidikan [RP-2]')

@section('content')
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Daftar Perkara Penyelidikan  <small>[RP-2]</small></h3>
        
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
                        <div class="table-responsive no-padding">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th width="75%">Kasus Posisi</th>
                                        <th width="25%">No. & Tanggal Surat</th>
                                    </tr>
                                    @forelse ($cases as $case)
                                    <tr>
                                        <td colspan="2">
                                            @include('pidsus.dik.partials._kasusrp2a', ['case' => $case])
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="2">No data.</td>
                                    </tr>
                                    @endforelse
                                </tbody></table>
                            </div>
                        </div>
                    </div>
                    
                    @stop
                    
                    @section('script')
                    
                    @endsection