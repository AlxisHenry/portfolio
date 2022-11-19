@extends('layouts.app')
@section('content')
    <section id="__LoginSection" class="layout-hero">
        @include('components.sections.login')
    </section>
@endsection
@section('footer')
    @vite('resources/js/templates/login.js')
@endsection