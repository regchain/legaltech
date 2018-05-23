@include('themes.main.header.head')

 @yield('stylesheets')


@include('themes.main.header.default')


{{-- @include('themes.main.menu.mainnav')	 --}}


@yield('content')
	
		

		
@include('themes.main.footer.default')   



@include('themes.main.footer.script')

@include('themes.main.footer.login_modal')


@section('scripts')


@endsection()