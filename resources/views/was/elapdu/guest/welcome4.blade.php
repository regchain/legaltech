<!-- four -->
<section id="four" class="main special">
    <div class="container">
        <span class="image fit primary"><img src="{{ asset('/bower_components/templates/welcome/images/jam.jpg')}}"/></span>
        <div class="content">
            <header class="major">
                <h2>DATA TERLAPOR</h2>
            </header>
            <div class="row">
        <div class="box-body">
          <div class="col-xs-12">
            <div class="progress">
              <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                <span class="sr-only">25% Complete (success)</span>
              </div>
            </div>
            <p><code>Masukkan identitas data pegawai (yang dilaporkan)</code></p>
          </div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

                <div class="row">
        <div class="box-body">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Nama Jaksa / Pegawai</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="email" class="form-control" placeholder="Nama Lengkap...">
            </div>
          <div class="form-group">
                <label>Jabatan dalam permasalahan / kasus</label>
                <textarea class="form-control" placeholder="Jelaskan posisi terlapor dalam permasalahan. ..." name="alamat" cols="0" rows="3"></textarea>
              </div>
        </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <!-- Kota -->
                  <div class="form-group">
                    <label>Kejaksaan Tinggi</label>
                    <input class="form-control" name="kejati" placeholder="selet type" type="text">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label>Kejaksaan Negeri</label>
                    <input class="form-control" name="kejari" placeholder="selet type" type="text">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <label>Kejaksaan Cabang</label>
                    <input class="form-control" name="kejaricab" placeholder="selet type" type="text">
                  </div>
                </div>
              </div>
            <div class="row"> 
              <div class="col-lg-4 col-md-4 col-sm-12">
                <label>Status :&nbsp;</label>
                <select>
                  <option value="Jaksa">Jaksa&nbsp;</option>
                  <option value="Pegawai">Pegawai&nbsp;</option>
                </select>
              </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-mobile"></i>
                      </div>
                      <input type="text" class="form-control"
                             data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                    </div>
                    <!-- /.input group -->
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control"
                             data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                    </div>
                    <!-- /.input group -->
                    </div>
                  </div>
                </div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        {{-- <div class="row">
        <div class="box-body">
          <div class="col-xs-12">Row Box 1</div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body --> --}}
      </div>
        </div>
        <a href="#five" class="goto-next scrolly">Next</a>
    </div>
</section>