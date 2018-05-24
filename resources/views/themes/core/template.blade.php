<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') | e-LAPDU</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  @include('themes.core.layouts.head')

  @yield('stylesheets')

</head>
<body class="skin-blue-light sidebar-mini layout-boxed">
<div class="wrapper">

    <!-- Header -->
    @include('themes.core.layouts.header')

    <!-- Left side column. contains the logo and sidebar -->
    @include('themes.core.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('themes.core.layouts.content-header')
    

    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('themes.core.layouts.footer')


  <!-- Control Sidebar -->
  @include('themes.core.layouts.sidebar-right')

</div>
<!-- ./wrapper -->
<!-- scripts -->
  @include('themes.core.layouts.scripts')

@yield('scripts')
</body>
</html>
