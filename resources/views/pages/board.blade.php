@extends('layouts.app')

@section('content')

    @include('components.sections.templates.board')

@endsection

@section('footer')

    <script src="{{ url('js/board.js') }}"></script>

@stop