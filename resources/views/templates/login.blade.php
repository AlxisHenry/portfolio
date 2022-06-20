@extends('layouts.app')

@section('content')

    <section id="__LoginSection" class="layout-hero">

        @include('components.sections.login')

    </section>

@endsection

@section('footer')

    <script src="{{ url('js/login.js') }}"></script>

@endsection

