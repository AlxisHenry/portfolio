@extends('layouts.app')

@section('content')
    @component('components.pop-up')
        @slot('icon')
            <i class="fa-solid fa-check"></i>
        @endslot
        @slot('alert')
            {{ __('labels.copied') }}
        @endslot
    @endcomponent
    
    @include('sections.spoilers.presentation')

    @include('components.arrow-container')

    @include('sections.spoilers.about')

    @include('sections.spoilers.projects')

    @include('sections.spoilers.resources')

    @include('sections.spoilers.news')

    @include('sections.contact')
@stop

@section('footer')
    @vite('resources/js/pages/homepage.js')
@stop
