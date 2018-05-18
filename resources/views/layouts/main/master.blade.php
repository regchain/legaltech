@include('layouts.main.header.head')

 @yield('stylesheets')


@include('layouts.main.header.default')


{{-- @include('layouts.main.menu.mainnav')	 --}}


@yield('content')
	
		

		
@include('layouts.main.footer.default')   



@include('layouts.main.footer.script')

@include('layouts.main.footer.login_modal')


@section('scripts')


@endsection()