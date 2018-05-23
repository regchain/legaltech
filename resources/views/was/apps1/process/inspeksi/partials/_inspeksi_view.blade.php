
  <div class="panel-group" id="klarivikasi_view" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingSPKlarifikasi">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapseSPKlarifikasi" aria-expanded="false" aria-controls="collapseSPKlarifikasi">
            <span class="label label-default pull-right">Detil</span> I. SURAT PERINTAH INSPEKSI KASUS
          </a>
        </h4>
      </div>
      <div id="collapseSPKlarifikasi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSPKlarifikasi">
        <div class="panel-body">

          <div class="box-body">

            @include('elapdu.surat.partials._sp_was2_view')

          </div>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingPermasalahan">
        <h4 class="panel-title">
          <a  class="collapsed" role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapsePermasalahan" aria-expanded="false" aria-controls="collapsePermasalahan">
            <span class="label label-default pull-right">Detil</span> II. PERMASALAHAN
          </a>
        </h4>
      </div>
      <div id="collapsePermasalahan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPermasalahan">
        <div class="panel-body">

          @include('elapdu.lapdu.partials.kasus_view')

          <div class="box box-success">

          @include('elapdu.surat.partials._was1_view')

          </div>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <span class="label label-default pull-right">Detil</span> III. DATA
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">

          <div class="box-body">

            @include('elapdu.lapdu.partials.pelapor_view')

          </div>

          <div class="box-body">

            @include('elapdu.lapdu.partials.terlapor_view')

          </div>

          <div class="box-body">

            @include('elapdu.lapdu.partials.datapenunjang_view')

          </div>

        </div>
      </div>
    </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          <span class="label label-default pull-right">Detil</span>IV. HASIL INSPEKSI KASUS
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
        <div class="row">
          @include('elapdu.surat.partials._ba_was3_list')
          </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#klarivikasi_view" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
          <span class="label label-default pull-right">Detil</span>V. LAPORAN HASIL INSPEKSI KASUS [L.WAS-2]
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
        <div class="box-body">


          @include('elapdu.surat.partials._l_was2_view')
          
          </div>
      </div>
    </div>
  </div>
</div>
