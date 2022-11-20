@include('layouts.header')
@if(Route::currentRouteName() === "index" || Route::currentRouteName() === 'contact.get')
        <body class="loader-body" data-theme="light">
        @include('layouts.loader', ['status' => true])
    @else
        <body data-theme="light">
@endif
@include('components.scrollbar')
@include('components.cursor')
@include('layouts.navbar')
@yield('content')
@include('layouts.footer')
@if(session('popup'))
    <x-alert :popup="session('popup')"/>
@endif