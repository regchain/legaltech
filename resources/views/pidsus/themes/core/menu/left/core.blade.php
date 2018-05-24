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

    @include('pidsus.themes.core.menu.core.bin')

    @include('pidsus.themes.core.menu.core.intel')

    @include('pidsus.themes.core.menu.core.pidum')

    @include('pidsus.themes.core.menu.core.pidus')

    @include('pidsus.themes.core.menu.core.datun')

    @include('pidsus.themes.core.menu.core.was')  


    @include('pidsus.themes.core.menu.core.setting')

    @include('pidsus.themes.core.menu.core.others')
    
  </ul>
  <!-- /.sidebar-menu -->
</section>