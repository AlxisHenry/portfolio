@extends('layouts.app')

@section('content')

    <section id="__LoginSection" class="layout-hero">

        @include('components.sections.login')

    </section>

    <div class="connexion-failed
    {{ Illuminate\Support\Facades\Session::get('connect') === false ? "" : "invisible" }}
    ">

        {{ \Illuminate\Support\Facades\Session::remove('connect') }}

        <div>
            Connexion failed
        </div>

    </div>

@endsection

@section('footer')

    <script src="{{ url('js/login.js') }}"></script>

@endsection

