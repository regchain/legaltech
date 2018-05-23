<div class="panel-group" id="kejati" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingkajati">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#kejati" href="#collapsekajati" aria-expanded="false" aria-controls="collapsekajati">
          <span class="pull-right">WAKAJATI / WAKAJARI <i class="fa fa-arrows-v"></i></span> <i class="fa fa-arrows-v"></i> KAJATI / KAJARI 
        </a>
      </h4>
    </div>
    <div id="collapsekajati" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingkajati">
      <div class="panel-body">
        
        @include('elapdu.lapdu.partials._disposisi_kajati')
        
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingAswas">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#kejati" href="#collapseAswas" aria-expanded="false" aria-controls="collapseAswas">
          <span class="pull-right"> <i class="fa fa-arrows-v"></i></span><i class="fa fa-arrows-v"></i> ASWAS / KASI WAS
        </a>
      </h4>
    </div>
    <div id="collapseAswas" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAswas">
      <div class="panel-body">
       <div class="box-footer">
       <a href='was16a_create' for="spwas1" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Pemberitahuan Usulan Hukuman Disiplin" style="margin-right: 5px;"><i class="fa fa-plus"></i> WAS-16A</a>
     </div>
      </div>
    </div>
  </div>
  
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingRiksajati">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#kejati" href="#collapseRiksajati" aria-expanded="false" aria-controls="collapseRiksajati">
          <span class="fa fa-arrows-v pull-right"></span> <i class="fa fa-arrows-v"></i> R I K S A
        </a>
      </h4>
    </div>
    <div id="collapseRiksajati" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingRiksajati">
      <div class="panel-body">

         @include('elapdu.klarifikasi.partials._disposisi_riksa')
      <div class="box-footer">
        <br>
        <a href='ba_was2_qna' class="btn btn-flat btn-info" data-toggle="tooltip" data-placement="top" title="FORM KLARIFIKASI" style="margin-right: 5px;"><i class="fa fa-plus"></i> Form Klarifikasi</a>
      </div>



      </div>
    </div>
  </div>
  <div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingTerlapor2">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#disposisi" href="#collapseDisTerlapor2" aria-expanded="false" aria-controls="collapseDisTerlapor2">
        <span class="fa fa-arrows-v pull-right"></span> <i class="fa fa-arrows-v"></i> TERLAPOR
      </a>
    </h4>
  </div>
  <div id="collapseDisTerlapor2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTerlapor2">
    <div class="panel-body">

      <div class="box-footer">
       <a href='ba_was6_create' for="spwas1" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Surat Pernyataan Keberatan Terhadap SK PHD" style="margin-right: 5px;"><i class="fa fa-plus"></i> BA.WAS-6</a>
       <a href='ba_was8_create' for="spwas1" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Pemberitahuan Usulan Hukuman Disiplin" style="margin-right: 5px;"><i class="fa fa-plus"></i> BA.WAS-8</a>
     </div>
     </div>
    </div>
  </div>
</div>