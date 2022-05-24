@extends('layouts.app')

@section('content')

    <!--
    todo : Responsive of sections titles / projects cards
    -->

    <section class="__homepage__presentation__">

        @include('components.sections.spoilers.presentation')

    </section>

    @include('components.arrow')

    <section id="__spoilerAbout" class="__spoiler__about__">

        @include('components.sections.spoilers.about')

        <!--
        todo : Homepage refactor responsive design (file per section)
        -->

    </section>

    <section id="__spoilerProjects" class="__spoiler__projects__">

        @include('components.sections.spoilers.projects')

    </section>

    <section id="__spoilerCards" class="__spoiler__cards__">

        @include('components.sections.spoilers.news')

    </section>

@stop

@section('footer')

    <script src="{{ url('js/templates/homepage.js') }}"></script>

@stop