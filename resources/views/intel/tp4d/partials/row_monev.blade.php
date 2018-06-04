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