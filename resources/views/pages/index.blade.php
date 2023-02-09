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
    @include('sections.spoilers.presentation')
    @include('components.arrow-container')
    @include('sections.spoilers.about')
    @include('sections.spoilers.projects')
    @include('sections.spoilers.board')
    @include('sections.spoilers.news')
    @include('sections.contact')
@stop

@section('footer')
    @vite('resources/js/pages/homepage.js')
@stop
