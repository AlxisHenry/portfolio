@extends('layouts.app')

@section('content')
    <section id="__mainProject" class="__main__projects__ layout-maxed">
        @component('components.underline-title')
            @slot('title')
                Projects
            @endslot
        @endcomponent
        <div class="section-explication">
            You can get more information about a project by moving the mouse over it.
            To see all the details of a project, click on the about button.
            Most of my projects are available on my <a href="https://github.com/AlxisHenry">github</a> profile.
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
