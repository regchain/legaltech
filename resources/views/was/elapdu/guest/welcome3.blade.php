<!-- Three -->
<section id="three" class="main special">
    <div class="container">
        <span class="image fit primary"><img src="{{ asset('/bower_components/templates/welcome/images/ja.jpg')}}"/></span>
        <div class="content">
            <header class="major">
                <h2>DATA PELAPOR</h2>
            </header>
            <div class="row">
                <div class="box-body">
                  <div class="col-xs-12">
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
                        <span class="sr-only">5% Complete (success)</span>
                      </div>
                    </div>
                    <p class="text-justify"><code>Masukkan identitas anda sebagai pelapor (Kerahasiaan data terjamin) Anda tidak perlu khawatir terungkapnya identitas diri anda karena kami akan MERAHASIAKAN IDENTITAS DIRI ANDA sebagai whistleblower. JAKSA AGUNG MUDA BIDANG PENGAWASAN menghargai informasi yang Anda laporkan. Fokus kami kepada materi informasi yang Anda Laporkan.</code></p>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.row-box-body -->

              <div class="row">
                <div class="box-body">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <label>Nama Lengkap</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="email" class="form-control">
                    </div>
                    <label>Organisasi</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-users"></i></span>
                      <input type="email" class="form-control">
                    </div>
                    <label>Kontak</label>
                    <div class="row"> 
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-id-badge"></i>
                            </div>
                            <input type="text" class="form-control" placeholder="HP..." 
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
                            <input type="text" class="form-control" placeholder="Telpon..."
                            data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                          </div>
                          <!-- /.input group -->
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" placeholder="email ..." name="kontak_email" type="text">
                          </div>
                          <!-- /.input group -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">

                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control" placeholder="Jalan / Gg. ..." name="alamat" cols="0" rows="3"></textarea>
                    </div>
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                          <label>Kode Pos</label>
                          <input class="form-control" name="kodepos" type="text">
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- Kota -->
                        <div class="form-group">
                          <label>Kota</label>
                          <input class="form-control" name="kota" type="text">
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                          <label>Propinsi</label>
                          <input class="form-control" name="propinsi" type="text">
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
        <a href="#four" class="goto-next scrolly">Next</a>
    </div>
</section>