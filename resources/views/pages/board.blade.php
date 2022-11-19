@extends('layouts.app')

@section('content')

    @include('components.sections.templates.board')

@endsection

@section('footer')
    @vite('resources/js/templates/board.js')
@stop