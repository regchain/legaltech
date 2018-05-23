<!DOCTYPE HTML>

<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | e-LAPDU</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('elapdu.guest.head')

    @yield('stylesheets')

  </head>
  <body>

    

    <!-- Main content -->
    <section class="content">
      
      <!-- Your Page Content Here -->
      @yield('content')
    
    </section>
    <!-- /.content -->
   

    @include('elapdu.guest.footer')


      <!-- REQUIRED JS SCRIPTS -->

       @include('elapdu.guest.scripts')

      <!-- Optionally, you can add Slimscroll and FastClick plugins.
           Both of these plugins are recommended to enhance the
           user experience. -->
        @yield('scripts')    


      </body>
      </html>
  </body>
</html>