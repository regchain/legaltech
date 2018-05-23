  <div class="col-md-12">
    @if (!$datas->isEmpty())
    <div class="box-header">
        <a href="{{ url('subyek_putusan') }}" class="btn btn-default pull-right"><i class="fa fa-list"> </i>&nbsp;Lihat Semua</a>
        <h2 class="box-title"><strong>TERHUKUM</strong></h2>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <p></p>
                <h3>{{ $counts['ringan'] }}<sup style="font-size: 20px">&nbsp;orang</sup></h3>

                <strong>RINGAN</strong>
                <p></p>
            </div>
            <div class="icon">
                <i class="ion-alert"></i>
            </div>
            <a href="{{ url('subyek_putusan?status=ringan') }}" class="small-box-footer">Lihat Daftar <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <p></p>
                <h3>{{ $counts['sedang'] }}<sup style="font-size: 20px"> orang</sup></h3>

                <strong>SEDANG</strong>
                <p></p>
            </div>
            <div class="icon">
                <i class="ion-android-alert"></i>
            </div>
            <a href="{{ url('subyek_putusan?status=sedang') }}" class="small-box-footer">Lihat Daftar <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <p></p>
                <h3>{{ $counts['berat'] }}<sup style="font-size: 20px"> orang</sup></h3>

                <strong>BERAT</strong>
                <p></p>
            </div>
            <div class="icon">
                <i class="ion-android-warning"></i>
            </div>
            <a href="{{ url('subyek_putusan?status=berat') }}" class="small-box-footer">Lihat Daftar <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <p></p>
                <h3>{{ $counts['berhenti'] }}<sup style="font-size: 20px"> orang</sup></h3>

                <strong>BERHENTI SEMENTARA</strong>
                <p></p>
            </div>
            <div class="icon">
                <i class="ion-close-circled"></i>
            </div>
            <a href="{{ url('subyek_putusan?status=berhenti') }}" class="small-box-footer">Lihat Daftar <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    @else

    <form action="{{ url('operator') }}" method="post" class="form-horizontal text-center" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="upload" class="col-sm-2 control-label">Upload File</label>
            <div class="col-sm-8">
                <input class="form-control" type="file" name="file">
            </div>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <small>{{ $error }}</small>
            @endforeach
        </div>
        @endif

        <button type="submit" class="btn btn-info">Kirim</button>
    </form>
    @endif
</div>