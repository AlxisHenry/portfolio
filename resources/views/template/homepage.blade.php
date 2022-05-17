@extends('layouts.app')

@section('content')

    <section class="__homepage__presentation__">

        @include('components.sections.spoilers.presentation')

    </section>

    @include('components.arrow')

    <section id="__spoilerAbout" class="__spoiler__about__">

        @include('components.sections.spoilers.about')

    </section>

    <section id="__spoilerProjects" class="__spoiler__projects__">

        @include('components.sections.spoilers.projects')

    </section>

    <section id="__spoilerCards" class="__spoiler__cards__ hidden">

        @include('components.sections.spoilers.news')

    </section>

@stop

@section('footer')

    <script src="{{ url('js/homepage.js') }}"></script>

@stop