@include('themes.website.header.head')

 @yield('stylesheets')

@include('themes.website.header.default')

@yield('content')


@include('themes.website.footer.default')

 @yield('scripts')

@include('themes.website.footer.scripts')
