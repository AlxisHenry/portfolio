@include('layouts.header')

@if(\Illuminate\Support\Facades\Session::get('permissions') === "administrator")


@endif

@include('layouts.admin.navbar')

@yield('content')