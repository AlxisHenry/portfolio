@extends('layouts.app')

@section('content')
    <section id="__board" class="__main__board__ layout-maxed">
        @component('components.underline-title')
            @slot('title')
                {{ __('titles.resources') }}
            @endslot
        @endcomponent
        <div class="section-explication">
            {!! __('paragraphs.resources') !!}
        </div>
        <div class="__main__board__cards__">
            @foreach ($resources as $resource)
                @include('components.resource')
            @endforeach
        </div>
    </section>
@endsection

@section('footer')
    @vite('resources/js/pages/board.js')
    @vite('resources/js/pages/projects.js')
@stop
