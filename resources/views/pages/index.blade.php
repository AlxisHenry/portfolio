@extends('layouts.app')

@section('content')

    @component('components.pop-up')
        @slot('Icon')
            <i class="fa-solid fa-check"></i>
        @endslot
        @slot('Alert')
            Copied to the clipboard.
        @endslot
    @endcomponent

    <section id="__homePresentation" class="__homepage__presentation__">

        @include('components.sections.spoilers.presentation')

    </section>

    @include('components.arrow-container')

    <section id="__spoilerAbout" class="section __spoiler__about__">

        @include('components.sections.spoilers.about')

    </section>

    <section id="__spoilerProjects" class="section __spoiler__projects__">

        @include('components.sections.spoilers.projects')

    </section>

    <section id="__spoilerBoard" class="section __spoiler__board__">

        <!--
        todo => Responsive of this cards
        -->
        @include('components.sections.spoilers.board')

    </section>

    <section id="__spoilerCards" class="section __spoiler__cards__">

        @include('components.sections.spoilers.news')

    </section>

    <section id="__ContactForm" class="section __contact__form__">

        <!--
        todo => Link contact form to laravel mails
        -->
        @include('components.sections.contact')

    </section>

@stop

@section('footer')
    @vite('resources/js/templates/homepage.js')
@stop