  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/welcome') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class="fa fa-cubes"></i> </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Legal</b>Tech</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        @include('pidsus.themes.core.menu.top')
      </div>
    </nav>
  </header>