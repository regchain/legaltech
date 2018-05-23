<div class="col-md-6">
  <div class="box-body box-profile">
    <img class="profile-user-img img-responsive img-circle" src="{{ asset('bower_components/admin-lte/dist/img/user.png')}}" alt="User profile picture">
  </div>
  <div class="col-sm-12">
    <div class="description-block">
      <div class="form-group">
        <label>[Nama Lengkap]</label>
        <select class="form-control select2" style="width: 100%;" id="ja">
          <option selected="selected">Asisten Bidang Pengawasan [ASWAS]</option>
          <option>[N.R.P] | [Nama Lengkap]</option>
          <option>[N.R.P] | [Nama Lengkap]</option>
          <option>[N.R.P] | [Nama Lengkap]</option>
          <option>[N.R.P] | [Nama Lengkap]</option>
          <option>[N.R.P] | [Nama Lengkap]</option>
        </select>
      </div>
      <span class="input-group-btn">
        <a href="#" class="btn btn-default btn-flat"> EDIT</a>
      </span>
      <!-- /.form-group -->
    </div>
    <!-- /.description-block -->
  <hr>
        <div class="col-sm-6 no-padding">
          <div class="description-block">
            <div class="form-group">
              <select class="form-control select2" style="width: 100%;" id="ja">
                <option selected="selected">Nama</option>
                <option>[N.R.P] | [Nama Lengkap]</option>
                <option>[N.R.P] | [Nama Lengkap]</option>
                <option>[N.R.P] | [Nama Lengkap]</option>
                <option>[N.R.P] | [Nama Lengkap]</option>
                <option>[N.R.P] | [Nama Lengkap]</option>
              </select>
            </div>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-6 no-padding">
          <div class="description-block">
            <div class="form-group">
              <select class="form-control select2" style="width: 100%;" id="ja">
                <option selected="selected">Jabatan</option>
                <option>SATGAS LAPDU</option>
                <option>JAKSA FUNGSIONAL</option>
                <option>OPERATOR KOMPUTER</option>
              </select>
            </div>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
      <button type="button" class="btn btn-default btn-flat btn-block"><i class="fa fa-plus"></i> Tambah!</button>

        <table id="example2" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Jabatan</th>
              <th width="5%">edit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>[Nama Lengkap]</td>
              <td>SATGAS LAPDU</td>
              <td><a href="#"><i class="btn btn-default btn-flat fa fa-remove"></i> </a></td>
            </tr>
            <tr>
              <td>[Nama Lengkap]</td>
              <td>JAKSA FUNGSIONAL</td>
              <td><a href="#"><i class="btn btn-default btn-flat fa fa-remove"></i> </a></td>
            </tr>
            <tr>
              <td>[Nama Lengkap]</td>
              <td>OPERATOR KOMPUTER</td>
              <td><a href="#"><i class="btn btn-default btn-flat fa fa-remove"></i> </a></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>Nama</th>
              <th>Jabatan</th>
              <th>edit</th>
            </tr>
          </tfoot>
        </table>
        </div>
</div>
<div class="col-sm-6">
  <div class="row">
    <div class="panel-group" id="kasiwas" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingKasiwas11">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#kasiwas" href="#collapseKasiwas11" aria-expanded="false" aria-controls="collapseKasiwas11">
          <small class="pull-right">[ASWAS]</small>KasiWAS - PEGASUM & KEPBANG
        </a>
      </h4>
    </div>
    <div id="collapseKasiwas11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingKasiwas11">
      <div class="panel-body">
        <div class="col-xs-12">
    @include('administrator.partials.kejati_kasiwas1')
    </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingKasiwas12">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#kasiwas" href="#collapseKasiwas12" aria-expanded="false" aria-controls="collapseKasiwas12">
          <small class="pull-right">[ASWAS]</small>KasiWAS - PIDUM & DATUN
        </a>
      </h4>
    </div>
    <div id="collapseKasiwas12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingKasiwas12">
      <div class="panel-body">
        <div class="col-xs-12">
    @include('administrator.partials.kejati_kasiwas2')
    </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingKasiwas13">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#kasiwas" href="#collapseKasiwas13" aria-expanded="true" aria-controls="collapseKasiwas13">
          <small class="pull-right">[ASWAS]</small>KasiWAS - INTEL & PIDSUS
        </a>
      </h4>
    </div>
    <div id="collapseKasiwas13" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingKasiwas13">
      <div class="panel-body">
        <div class="col-xs-12">
    @include('administrator.partials.kejati_kasiwas3')
    </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
    
  <!-- /.col -->


