<!-- Sidebar Menu -->
  <ul class="sidebar-menu tree" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="">
      <a href="http://localhost/legaltech/public/welcome">
        <i class="fa fa-fw fa-home "></i>
        <span>LegalTech</span>
      </a>
    </li>

    @include('themes.user.menu.core.ekejaksaan')
    
    <li class="header">BIDANG TEKNIS</li>

    @include('themes.user.menu.core.bin')

    @include('themes.user.menu.core.intel')

    @include('themes.user.menu.core.pidum')

    @include('themes.user.menu.core.pidsus')

    @include('themes.user.menu.core.datun')

    @include('themes.user.menu.core.was')  


    @include('themes.user.menu.left.example')

    {{-- @include('themes.user.menu.left.others') --}}
    
  </ul>
  <!-- /.sidebar-menu -->
