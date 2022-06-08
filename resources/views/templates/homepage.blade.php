@extends('layouts.app')

@section('content')

    <section id="__homePresentation" class="__homepage__presentation__">

        @include('components.sections.spoilers.presentation')

    </section>

    @include('components.mouse')

    <section id="__spoilerAbout" class="__spoiler__about__">

        @include('components.sections.spoilers.about')

    </section>

    <section id="__spoilerProjects" class="__spoiler__projects__">

        <!--
        todo : Optimize responsive of projects cards
        -->

        @include('components.sections.spoilers.projects')

    </section>

    <section id="__spoilerBoard" class="__spoiler__board__">

        <!--
        todo: Section will contain available documentations
        -->

        @include('components.sections.spoilers.board')

    </section>

    <section id="__spoilerCards" class="__spoiler__cards__">

        @include('components.sections.spoilers.news')

    </section>

@stop

@section('footer')

    <script src="{{ url('js/homepage.js') }}"></script>

@stop