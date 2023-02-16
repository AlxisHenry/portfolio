@extends('layouts.app')

@section('content')
    @include('components.sections.templates.board')
@endsection

@section('footer')
    @vite('resources/js/pages/board.js')
    @vite('resources/js/pages/projects.js')
@stop
