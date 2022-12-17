@include('layouts.header')

@include('layouts.admin.navbar')

@yield('content')

@include('layouts.admin.footer')

@if (session('popup'))
    <x-alert :popup="session('popup')" />
@endif
