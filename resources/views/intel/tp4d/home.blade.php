@extends('themes.admin.template')

@section('title', 'Dashboard')

@section('judulhalaman', 'LegalTech Indonesia')

@section('subjudul', 'RegChain© Regulatory Analytic Management')

@section('stylesheets')

@endsection

@section('content')
<div class="box">
  <div class="box-header with-border">
    <h3><i class="fa fa-dashboard"> </i> Executive Information System</h3>    
  </div>
  <!-- /.row-collapsible accordion -->
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="box-group" id="accordion">
            <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
            <div class="panel box box-primary">
              <div class="box-header with-border">
                <h4 class="box-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    <i class="fa fa-puzzle-piece"></i> PERENCANAAN
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="box-body">
                  <!-- .row-perencanaan -->
                          <!-- Custom Tabs (Pulled to the right) -->
                          <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                              <li class="active"><a href="#perencanaan_1-1" data-toggle="tab">e-Budgeting</a></li>
                              <li><a href="#perencanaan_2-2" data-toggle="tab">e-RUP</a></li>
                              <li><a href="#perencanaan_3-3" data-toggle="tab">e-Project Planning</a></li>
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane active" id="perencanaan_1-1">
                                
                                @include('intel.tp4d.partials.ebudgeting')
                                
                              </div>
                              <!-- /.tab-pane -->
                              <div class="tab-pane" id="perencanaan_2-2">
                                
                                @include('intel.tp4d.partials.erup')
                                
                              </div>
                              <!-- /.tab-pane -->
                              <div class="tab-pane" id="perencanaan_3-3">
                                
                                @include('intel.tp4d.partials.eproject')
                                
                              </div>
                              <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                          </div>
                          <!-- nav-tabs-custom -->
                  <!-- /.row-perencanaan -->
                </div>
              </div>
            </div>
            <div class="panel box box-primary">
              <div class="box-header with-border">
                <h4 class="box-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    <i class="fa fa-balance-scale"></i> PENGADAAN
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="box-body">
                  
                  <!-- .row-pengadaan -->
                    <!-- Custom Tabs (Pulled to the right) -->
                    <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#pengadaan_1-1" data-toggle="tab">e-ULP</a></li>
                        <li><a href="#pengadaan_2-2" data-toggle="tab">e-Procurment</a></li>
                        <li><a href="#pengadaan_3-3" data-toggle="tab">e-Swakelola</a></li>
                        <li><a href="#pengadaan_4-4" data-toggle="tab">e-Kontrak</a></li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="pengadaan_1-1">
                          
                          @include('intel.tp4d.partials.eulp')
                          
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="pengadaan_2-2">
                          
                          @include('intel.tp4d.partials.eproc')
                          
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="pengadaan_3-3">
                          
                          @include('intel.tp4d.partials.swakelola')
                          
                        </div>
                        <!-- /.tab-pane -->
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="pengadaan_4-4">
                          
                          @include('intel.tp4d.partials.ekontrak')
                          
                        </div>
                        <!-- /.tab-pane -->
                      </div>
                      <!-- /.tab-content -->
                    </div>
                    <!-- nav-tabs-custom -->
                  <!-- /.row-pengadaan -->
                  
                </div>
              </div>
            </div>
            <div class="panel box box-primary">
              <div class="box-header with-border">
                <h4 class="box-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    <i class="fa fa-eye"></i> MONITORING & EVALUASI
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="box-body">
                  
                  <!-- .row-monev -->
                      <!-- Custom Tabs (Pulled to the right) -->
                      <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#monev_1-1" data-toggle="tab">e-Progress</a></li>
                          <li><a href="#monev_2-2" data-toggle="tab">e-Performance</a></li>
                          <li><a href="#monev_3-3" data-toggle="tab">e-Asset</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="monev_1-1">
                            
                            @include('intel.tp4d.partials.eprogress')
                            
                          </div>
                          <!-- /.tab-pane -->
                          <div class="tab-pane" id="monev_2-2">
                            
                            @include('intel.tp4d.partials.eperformance')
                            
                          </div>
                          <!-- /.tab-pane -->
                          <div class="tab-pane" id="monev_3-3">
                            
                            @include('intel.tp4d.partials.easset')
                            
                          </div>
                          <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                      </div>
                      <!-- nav-tabs-custom -->
                  <!-- /.row-monev -->
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row-collapsible accordion -->
  
  
  <div class="box-footer">
    <small class="pull-right"> source: <a href="http://eberkas.com" target="_blank">e-BERKAS©</a></small>RegChain©
  </div>
  <!-- /.box-footer-->
</div>
<!-- /.box -->
@stop


@section('scripts')

<script>
  
</script>

@endsection