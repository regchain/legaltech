@include('layouts.main.header.head')

 @yield('stylesheets')

@include('layouts.main.header.default')

@yield('content')


@include('layouts.main.footer.default')

 @yield('scripts')

@include('layouts.main.footer.scripts')
