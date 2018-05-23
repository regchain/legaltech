@extends('elapdu.operator.template')

@section('title', 'Kelola Akun')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
  <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('content')

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <a href="#"> <span class="label label-default pull-right">Edit Image</span><br><img class="profile-user-img img-responsive img-circle" src="{{ asset('bower_components/admin-lte/dist/img/user.png')}}" alt="User profile picture"></a>

              <h3 class="profile-username text-center">{{ Auth::user()->name }} </h3>

              <p class="text-muted text-center">KEPALA KEJAKSAAN TINGGI
                <br>SULAWESI UTARA<br><small><i>[jabatan] + [satuan kerja]</i></small></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Pangkat</b> <a class="pull-right">Jaksa Utama Madya (IV/d)</a>
                </li>
                <li class="list-group-item">
                  <b>N.R.P.</b> <a class="pull-right">19650914 199103 1 002</a>
                </li>
                <li class="list-group-item">
                  <b>N.I.P</b> <a class="pull-right">6916581</a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          {{-- <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div> --}}
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Pribadi</a></li>
              <li><a href="#timeline" data-toggle="tab">Jabatan</a></li>
              <li><a href="#settings" data-toggle="tab">Password</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                
               <form class="form-horizontal">
                 <div class="form-group">
                   <label for="inputName" class="col-sm-2 control-label">Nama</label>

                   <div class="col-sm-10">
                     <input type="email" class="form-control" id="inputName" placeholder="Nama Lengkap" disabled="">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="inputName" class="col-sm-2 control-label">N.R.P</label>

                   <div class="col-sm-10">
                     <input type="text" class="form-control" id="inputnrp" placeholder="Nomor Registrasi Pokok" disabled="">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="inputSkills" class="col-sm-2 control-label">N.I.P</label>

                   <div class="col-sm-10">
                     <input type="text" class="form-control" id="inputnip" placeholder="Nomor Induk Pegawai" disabled="">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="inputEmail" class="col-sm-2 control-label">Surel</label>

                   <div class="col-sm-10">
                     <input type="email" class="form-control" id="inputEmail" placeholder="Surat Elektronik">
                   </div>
                 </div>
                 <div class="form-group">
                   <div class="col-sm-offset-2 col-sm-10">
                     <div class="checkbox">
                       {{-- <label>
                         <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                       </label> --}}
                     </div>
                   </div>
                 </div>
                 <div class="form-group">
                   <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-danger">Ubah</button>
                   </div>
                 </div>
               </form>
               

                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jabatan</label>

                    <div class="col-sm-10">
                      <div class="col-xs-3" style="margin-right: 5px;">
                        <!-- Jabatan -->
                        <div class="form-group">
                          <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">Eselon</option>
                            <optgroup label="Eselon">
                              <option>Eselon 1</option>
                              <option>Eselon 2</option>
                              <option>Eselon 3</option>
                              <option>Eselon 4</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                      <div class="col-xs-8" style="margin-right: 5px;">
                        <!-- Jabatan -->
                        <div class="form-group">
                          <select class="form-control select2" style="width: 100%;">
                            <optgroup label="Kejaksan Agung">
                              <option selected="selected">Jabatan</option>
                            </optgroup>
                            <optgroup label="Jabatan">
                              <option>Jabatan 1</option>
                              <option>Jabatan 2</option>
                              <option>Jabatan 3</option>
                              <option>Jabatan 4</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Satuan Kerja</label>

                    <div class="col-sm-10">
                      <div class="col-xs-4" style="margin-right: 5px;">
                        <!-- Kota -->
                        <div class="form-group">
                          <select class="form-control select2" style="width: 100%;">
                            <optgroup label="Kejaksan Agung">
                              <option selected="selected">Kejaksaan Agung</option>
                            </optgroup>
                            <optgroup label="Kejaksan Tinggi">
                              <option>Aceh</option>
                              <option>Sumatera Utara</option>
                              <option>Jawa Barat</option>
                              <option>Jawa Tengah</option>
                              <option>DKI Jakarta</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                      <div class="col-xs-4" style="margin-right: 5px;">
                        <div class="form-group">
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Kejaksaan Negeri</option>
                            <optgroup label="Kejaksaan Negeri">
                              <option>Kejari ...</option>
                              <option>Kejari ...</option>
                              <option>Kejari ...</option>
                              <option>Kejari ...</option>
                              <option>Kejari ...</option>
                              <option>Kejari ...</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                      <div class="col-xs-3" style="margin-right: 5px;">
                        <div class="form-group">
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Kejaksaan Cabang</option>
                            <option>Kecapjari ...</option>
                            <option>Kecapjari ...</option>
                            <option>Kecapjari ...</option>
                            <option>Kecapjari ...</option>
                            <option>Kecapjari ...</option>
                            <option>Kecapjari ...</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Pangkat</label>

                    <div class="col-sm-10">
                      <div class="col-xs-7" style="margin-right: 5px;">
                        <!-- Jabatan -->
                        <div class="form-group">
                          <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">Pangkat</option>
                            <optgroup label="Pangkat">
                              <option>Pangkat 1</option>
                              <option>Pangkat 2</option>
                              <option>Pangkat 3</option>
                              <option>Pangkat 4</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                      <div class="col-xs-4" style="margin-right: 5px;">
                        <!-- Jabatan -->
                        <div class="form-group">
                          <select class="form-control select2" style="width: 100%;">
                            <optgroup label="Kejaksan Agung">
                              <option selected="selected">Golongan</option>
                            </optgroup>
                            <optgroup label="Golongan">
                              <option>Golongan 1</option>
                              <option>Golongan 2</option>
                              <option>Golongan 3</option>
                              <option>Golongan 4</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        {{-- <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label> --}}
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Ubah</button>
                    </div>
                  </div>
                </form>

                </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Password lama</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword" placeholder="Lama">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Password baru</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPasswordnew" placeholder="baru">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Ulangi</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputUlangi" placeholder="ulang">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Ubah</button>
                    </div>
                  </div>
                </form>
               
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      {{-- </div> --}}
      <!-- /.row -->



@endsection


@section('scripts')
 <!-- Select2 -->
 <script src="{{ asset('/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
   <script>
     $(function () {
       //Initialize Select2 Elements
       $('.select2').select2()
     })
   </script>
@endsection