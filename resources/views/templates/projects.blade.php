@extends('layouts.app')

@section('content')

    <section class="__main__projects__ layout-maxed">

        <div class="__right">
            @include('components.projects.timken')
            @include('components.projects.sport')
        </div>

        <div class="__left">
            @include('components.projects.portfolio')
            @include('components.projects.portfolio-v1')
        </div>


    </section>

@endsection

@section('footer')


@stop