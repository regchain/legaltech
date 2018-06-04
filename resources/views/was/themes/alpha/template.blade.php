<!DOCTYPE HTML>
<!--
	This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
	<head>
		
		<title>@yield('title') | e-LAPDU</title>
		<meta charset="UTF-8">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

		@include('was.themes.alpha.head')

		@yield('stylesheets')


	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				
				    @include('was.themes.alpha.header')

			<!-- Banner -->
				
				@include('was.elapdu.guest.banner')

			<!-- Main -->
				<section id="main" class="container">

					<!-- Your Page Content Here -->
					@yield('content')

				</section>

		
			<!-- Footer -->

				  @include('was.themes.alpha.footer')

		</div>

		<<!-- REQUIRED JS SCRIPTS -->

 @include('was.themes.alpha.scripts')

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
  @yield('scripts')


	</body>
</html>