@include('themes.main.header.head')

 @yield('stylesheets')

@include('themes.main.header.default')

@yield('content')


@include('themes.main.footer.default')

 @yield('scripts')

@include('themes.main.footer.scripts')
