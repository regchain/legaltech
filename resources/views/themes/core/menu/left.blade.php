<!-- Sidebar Menu -->
  <ul class="sidebar-menu tree" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="">
      <a href="{{ url('/welcome')}}">
        <i class="fa fa-fw fa-home "></i>
        <span>LegalTech</span>
      </a>
    </li>

    <li class="">
      <a href="{{ url('/home')}}">
        <i class="fa fa-fw fa-dashboard "></i>
        <span>DASHBOARD</span>
      </a>
    </li>

    @include('themes.admin.menu.core.ekejaksaan')
    
    <li class="header">BIDANG TEKNIS</li>

    @include('themes.admin.menu.core.bin')

    @include('themes.admin.menu.core.was') 
     
    @include('themes.admin.menu.core.intel')

    @include('themes.admin.menu.core.pidum')

    @include('themes.admin.menu.core.pidsus')

    @include('themes.admin.menu.core.datun')



    @include('themes.admin.menu.left.example')

    {{-- @include('themes.admin.menu.left.others') --}}
    
  </ul>
  <!-- /.sidebar-menu -->
