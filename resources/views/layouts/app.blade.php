@include('layouts.header')

<body data-theme="{{$_COOKIE['theme'] ?? "light"}}" class="@if(Route::currentRouteName() === 'index') loader-body @endif">

@if(Route::currentRouteName() === 'index')
    @include('layouts.loader', ['status' => true])
@endif

@include('components.scrollbar')
@include('components.cursor')

@include('layouts.navbar')

@yield('content')

@include('layouts.footer')

@if(session('popup'))
    <x-alert :popup="session('popup')"/>
@endif