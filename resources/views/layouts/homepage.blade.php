@extends('layouts.master')

@section('content')

    <section class="__homepage__presentation__">

        @include('sections.spoilers.presentation')

    </section>

    @include('component.arrow.arrow-down')

    <section id="__spoilerAbout" class="__spoiler__about__">

        @include('sections.spoilers.about')

    </section>

    <section id="__spoilerProjects" class="__spoiler__projects__">

        @include('sections.spoilers.projects')

    </section>

    <section id="__spoilerCards" class="__spoiler__cards__ hidden">

        @include('sections.spoilers.news')

    </section>

@stop

@section('footer')

    <script src="{{ url('js/homepage.js') }}"></script>

@stop