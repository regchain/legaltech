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

    @include('themes.core.menu.core.ekejaksaan')
    
    <li class="header">BIDANG TEKNIS</li>

    @include('themes.core.menu.core.was') 

    @include('themes.core.menu.core.bin')

    @include('themes.core.menu.core.intel')

    @include('themes.core.menu.core.pidum')

    @include('themes.core.menu.core.pidsus')

    @include('themes.core.menu.core.datun')

    @include('themes.core.menu.left.example')

    {{-- @include('themes.core.menu.left.others') --}}
    
  </ul>
  <!-- /.sidebar-menu -->
