@extends('themes.admin.template')

@section('title', 'Dashboard')

@section('judulhalaman', 'LegalTech Indonesia')

@section('subjudul', 'RegChain© Regulatory Analytic Management')

@section('stylesheets')

@endsection

@section('content')
<div class="box">
  <div class="box-header with-border">
    <a href="home"><h3><i class="fa fa-dashboard"> </i> Executive Information System</h3> </a>       
  </div>
  <!-- /.row-collapsible accordion -->
  <div class="row">
    <div class="col-md-12">
      <div class="box-body">
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified indigo" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab"><i class="fa fa-user"></i> Perencanaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel2" role="tab"><i class="fa fa-heart"></i> Pengadaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel3" role="tab"><i class="fa fa-eye"></i> Monitoring & Evaluasi</a>
          </li>
        </ul>
        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 1-->
          <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
            <div class="row">
              <div class="col-md-12">
                <div class="box-body">
                  @include('intel.tp4d.partials.ebudgeting')
                </div>
              </div>
            </div>
          </div>
          <!--/.Panel 1-->
          <!--Panel 2-->
          <div class="tab-pane fade in" id="panel2" role="tabpanel">
             <div class="row">
              <div class="col-md-12">
                <div class="box-body">
                  @include('intel.tp4d.partials.erup')
                </div>
              </div>
            </div>
          </div>
          <!--/.Panel 2-->
          <!--Panel 3-->
          <div class="tab-pane fade in" id="panel3" role="tabpanel">
             <div class="row">
              <div class="col-md-12">
                <div class="box-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.
                </div>
              </div>
            </div>
          </div>
          <!--/.Panel 3-->
        </div>
        
      </div>
      <!-- /.box-body -->
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
<!-- bootstrap wysihtml5 - text editor -->



<script>
  
</script>

@endsection