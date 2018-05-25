@include('themes.website.header.head')

 @yield('stylesheets')


@include('themes.website.header.default')


{{-- @include('themes.website.menu.mainnav')	 --}}


@yield('content')
	
		

		
@include('themes.website.footer.default')   



@include('themes.website.footer.script')

@include('themes.website.footer.login_modal')


@section('scripts')


@endsection()