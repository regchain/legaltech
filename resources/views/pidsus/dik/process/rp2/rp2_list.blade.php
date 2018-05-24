@extends('pidsus.themes.core.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Daftar Perkara Penyelidikan [RP-2]')

@section('content')

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
                        @include('decay-case.partials._kasusrp2a', ['case' => $case])
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="2">No data.</td>
                </tr>
                @endforelse
        </tbody></table>
    </div>

@stop

@section('script')

@endsection