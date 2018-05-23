<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingMasalah">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseMasalah" aria-expanded="false" aria-controls="collapseMasalah">
          <span class="label label-default pull-right">Detil</span> I. PERMASALAHAN
        </a>
      </h4>
    </div>
    <div id="collapseMasalah" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingMasalah">
      <div class="panel-body">

        <div class="box-body">

          @include('was.elapdu.lapdu.partials.kasus_view')

        </div>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingData">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseData" aria-expanded="false" aria-controls="collapseData">
          <span class="label label-default pull-right">Detil</span> II. DATA
        </a>
      </h4>
    </div>
    <div id="collapseData" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingData">
      <div class="panel-body">

        <div class="box-body">

          @include('was.elapdu.lapdu.partials.pelapor_view')

        </div>
        
        <div class="box-body">

          @include('was.elapdu.lapdu.partials.terlapor_view')

        </div>

        <div class="box-body">

          @include('was.elapdu.lapdu.partials.datapenunjang_view')

        </div>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTelaahan">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTelaahan" aria-expanded="false" aria-controls="collapseTelaahan">
          <span class="label label-default pull-right">Detil</span> III. ANALISA
        </a>
      </h4>
    </div>
    <div id="collapseTelaahan" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTelaahan">
      <div class="panel-body">


          @include('was.elapdu.surat.partials._was1_view')


      
      </div>
    </div>
  </div>
</div>
