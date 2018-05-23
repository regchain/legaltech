  <div class="box-header">
    <h3 class="box-title">LANJUTAN KEJATI / KEJARI</h3>
  </div>
<div class="panel-group" id="kejati" role="tablist" aria-multiselectable="true">

  <!-- JA -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#kejati" href="#kejatiOne" aria-expanded="false" aria-controls="collapseOne">
          <span class="pull-right">WAKAJATI / WAKAJARI <i class="fa fa-arrows-v"></i></span> <i class="fa fa-arrows-v"></i> KAJATI / KAJARI 
        </a>
      </h4>
    </div>
    <div id="kejatiOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        
        @include('elapdu.lapdu.partials._lanjutan_kejati_kajati')
        <div class="box-footer">
         <a href='sp_was1_create' for="spwas1" class="btn btn-flat btn-info" data-toggle="tooltip" data-placement="top" title="SURAT PERINTAH KLARIFIKASI" style="margin-right: 5px;"><i class="fa fa-plus"></i> SP.WAS-1</a>
       </div>


      </div>
    </div>
  </div>

  <!-- JAMWAS -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#kejati" href="#kejatiThree" aria-expanded="false" aria-controls="collapseThree">
          <span class="pull-right"> <i class="fa fa-arrows-v"></i></span><i class="fa fa-arrows-v"></i> ASWAS / KASIWAS
        </a>
      </h4>
    </div>
    <div id="kejatiThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <div class="box-body">
        @include('elapdu.lapdu.partials._lanjutan_kejati_aswas')
        </div>
        <div class="box-footer">
         <a href='sp_was1_create' for="spwas1" class="btn btn-info btn-flat pull-right" data-toggle="tooltip" data-placement="top" title="SURAT PERINTAH KLARIFIKASI" style="margin-right: 5px;"><i class="fa fa-plus"></i> SP.WAS-1</a>
       </div>

      </div>
    </div>
  </div>

  


    <!-- RIKSA -->
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#kejati" href="#kejatiSeven" aria-expanded="false" aria-controls="collapseSeven">
          <span class="label label-default pull-right">Detil</span> <i class="fa fa-arrows-v"></i> R I K S A
        </a>
      </h4>
    </div>
    <div id="kejatiSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
        @include('elapdu.lapdu.partials._lanjutan_inspektur_riksa')
       
          
       



      </div>
    </div>
  </div>
</div>