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
        
        @include('was.elapdu.process.lapdu.partials._disposisi_kajati')
        
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
        @include('was.elapdu.process.lapdu.partials._disposisi_aswas')
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

          @include('was.elapdu.process.lapdu.partials._disposisi_riksa')
      <div class="box-footer">
        <br>
        <a href='ba_was3_qna' class="btn btn-flat btn-info" data-toggle="tooltip" data-placement="top" title="FORM KARTU WAWANCARA" style="margin-right: 5px;"><i class="fa fa-plus"></i> Form Wawancara</a>
      </div>



      </div>
    </div>
  </div>
</div>