<section class="sidebar" style="height: auto;">
  
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu tree" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="">
      <a href="http://localhost/legaltech/public/welcome">
        <i class="fa fa-fw fa-home "></i>
        <span>LegalTech</span>
      </a>
    </li>
    <li class="header">e-KEJAKSAAN</li>
    <li class="active">
      <a href="http://localhost/legaltech/public/home">
        <i class="fa fa-fw fa-dashboard "></i>
        <span>DASHBOARD</span>
      </a>
    </li>

    @include('themes.admin.menu.core.bin')

    @include('themes.admin.menu.core.intel')

    @include('themes.admin.menu.core.pidum')

    @include('themes.admin.menu.core.pidus')

    @include('themes.admin.menu.core.datun')

    @include('themes.admin.menu.core.was')  


    @include('themes.admin.menu.core.setting')

    @include('themes.admin.menu.core.others')
    
  </ul>
  <!-- /.sidebar-menu -->
</section>