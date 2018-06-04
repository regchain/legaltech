    <li class="treeview">
      <a href="{{ url('#')}}">
        <i class="fa fa-fw fa-binoculars "></i>
        <span>Pengawasan</span>
        <span class="pull-right-container">
          <span class="label label-danger pull-right">new</span>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="treeview">
          <a href="{{ url('#')}}">
            <i class="fa fa-fw fa-bullhorn "></i>
            <span>eLAPDU</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="">
              <a href="{{ asset('was/elapdu/operator')}}">
                <i class="fa fa-fw fa-dashboard "></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="">
              <a href="{{ asset('was/elapdu/pelapor')}}">
                <i class="fa fa-fw fa-user "></i>
                <span>Pelapor</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ url('#')}}">
                <i class="fa fa-fw fa-balance-scale "></i>
                <span>Pemeriksaan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="">
                  <a href="{{ url('was/elapdu/laporan')}}">
                    <i class="fa fa-fw fa-commenting "></i>
                    <span>Pengaduan Baru</span>
                  </a>
                </li>
                <li class="">
                  <a href="{{ url('was/elapdu/klarifikasi')}}">
                    <i class="fa fa-fw fa-comments-o "></i>
                    <span>Klarifikasi</span>
                  </a>
                </li>
                <li class="">
                  <a href="{{ url('was/elapdu/inspeksi')}}">
                    <i class="fa fa-fw fa-search-plus "></i>
                    <span>Inspeksi Kasus</span>
                  </a>
                </li>
                <li class="">
                  <a href="{{ url('was/elapdu/usulan')}}">
                    <i class="fa fa-fw fa-balance-scale "></i>
                    <span>Usulan Hukum</span>
                  </a>
                </li>
                <li class="">
                  <a href="{{ url('was/elapdu/putusan')}}">
                    <i class="fa fa-fw fa-gavel "></i>
                    <span>Putusan Hukuman</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="{{ url('was/elapdu/subyek_terlapor')}}">
                <i class="fa fa-fw fa-user "></i>
                <span>Terlapor</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="">
                  <a href="{{ url('was/elapdu/subyek_terlapor')}}">
                    <i class="fa fa-fw fa-angle-right "></i>
                    <span>Pengaduan Baru</span>
                  </a>
                </li>
                <li class="">
                  <a href="{{ url('was/elapdu/subyek_klarifikasi')}}">
                    <i class="fa fa-fw fa-angle-right "></i>
                    <span>Klarifikasi</span>
                  </a>
                </li>
                <li class="">
                  <a href="{{ url('was/elapdu/subyek_inspeksi')}}">
                    <i class="fa fa-fw fa-angle-right "></i>
                    <span>Inspeksi Kasus</span>
                  </a>
                </li>
                <li class="">
                  <a href="{{ url('was/elapdu/subyek_usulan')}}">
                    <i class="fa fa-fw fa-angle-right "></i>
                    <span>Usulan Hukum</span>
                  </a>
                </li>
                <li class="">
                  <a href="{{ url('was/elapdu/subyek_putusan')}}">
                    <i class="fa fa-fw fa-angle-right "></i>
                    <span>Putusan Hukuman</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="{{ url('#')}}">
            <i class="fa fa-fw fa-angle-right "></i>
            <span>Apps 2</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="">
              <a href="{{ url('#')}}">
                <i class="fa fa-fw fa-angle-right "></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="">
              <a href="{{ url('#')}}">
                <i class="fa fa-fw fa-angle-right "></i>
                <span>Page 1</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ url('#')}}">
                <i class="fa fa-fw fa-angle-right "></i>
                <span>Progress 1</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="">
                  <a href="{{ url('#')}}">
                    <i class="fa fa-fw fa-angle-right "></i>
                    <span>List</span>
                  </a>
                </li>
                <li class="">
                  <a href="{{ url('#')}}">
                    <i class="fa fa-fw fa-angle-right "></i>
                    <span>Edit</span>
                  </a>
                </li>
                <li class="">
                  <a href="{{ url('#')}}">
                    <i class="fa fa-fw fa-angle-right "></i>
                    <span>Process</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>