 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('bower_components/admin-lte/dist/img/user.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->

     <ul class="sidebar-menu" data-widget="tree">
        <li><a href="operator"><i class="fa fa-home fa-lg"></i>&nbsp; <span>DASHBOARD</span></a></li>
        <li><a href="administrator"><i class="fa fa-gears fa-lg text-orange"></i> <span class="text-orange">&nbsp;PANEL KONTROL</span></a></li>
        <!-- Optionally, you can add icons to the links -->

          <li class="active treeview">
            <a href="#"><i class="fa fa-users"></i> <span>PENGGUNA</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
            <ul class="treeview-menu">
              <li><a href="pegawai"><i class="fa fa-angle-right"></i> Kelola Pengguna</a></li>
              <li><a href="group"><i class="fa fa-angle-right"></i> Group Pengguna</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Hak Akses</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-map"></i> <span>SATUAN KERJA</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
            <ul class="treeview-menu">
              <li><a href="wilayah"><i class="fa fa-angle-right"></i> Wilayah</a></li>
              <li><a href="jabatan"><i class="fa fa-angle-right"></i> Jabatan</a></li>
              <li><a href="pangkat"><i class="fa fa-angle-right"></i> Pangkat</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-database"></i> <span>DATA PENUNJANG</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
            <ul class="treeview-menu">
              <li><a href="administrator"><i class="fa fa-angle-right"></i> Peraturan dan UU</a></li>
              {{-- <li><a href="administrator"><i class="fa fa-angle-right"></i> Kategori 1</a></li> --}}
              {{-- <li><a href="administrator"><i class="fa fa-angle-right"></i> Kategori 2</a></li> --}}
            </ul>
          </li>
          <li><a href="operator"><i class="fa fa-sign-out fa-lg text-orange pull-right"></i> <span class="text-orange">SELESAI</span></a></li>
    </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
