@extends('layouts.app')

@section('content')
    <section id="__mainProject" class="__main__projects__ layout-maxed">
        @component('components.underline-title')
            @slot('title')
                {{ __('titles.projects') }}
            @endslot
        @endcomponent
        <div class="section-explication">
            {!! __('paragraphs.projects') !!}
        </div>
        <div class="__main__projects__cards__">
            <div class="__main__projects__cards__elements__">
                @foreach ($projects as $project)
                    @include('components.project')
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @vite('resources/js/pages/projects.js')
@endsection
