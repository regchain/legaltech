<div class="panel-group" id="kejati" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingkejati1">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#kejati" href="#collapsekejati1" aria-expanded="false" aria-controls="collapsekejati1">
          <span class=" pull-right text-blue"><i class="glyphicon glyphicon-resize-full"></i> edit</span>Group Eksekutif
        </a>
      </h4>
    </div>
    <div id="collapsekejati1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingkejati1">
      <div class="panel-body">
        <div class="box-body with-border">
            <div class="row">
              @include('administrator.partials.kajati')
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingKejati2">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#kejati" href="#collapseKejati2" aria-expanded="true" aria-controls="collapseKejati2">
          <span class=" pull-right text-blue"><i class="glyphicon glyphicon-resize-full"></i> edit</span>Bidang Pengawasan
        </a>
      </h4>
    </div>
    <div id="collapseKejati2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingKejati2">
      <div class="panel-body">
        <div class="box-body">
            <div class="row">
              @include('administrator.partials.kejati_aswas')
            </div>
          </div>
      </div>
    </div>
  </div>
  </div>