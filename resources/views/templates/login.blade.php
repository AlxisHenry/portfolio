@extends('layouts.app')

@section('content')

    <section id="__LoginSection" class="layout-hero">

        @include('components.sections.login')

    </section>

    @if(!$status)

        <div class="connexion-failed">

           <div>
               Connexion failed
           </div>

        </div>

    @endif

@endsection

@section('footer')

    <script src="{{ url('js/login.js') }}"></script>

@endsection

