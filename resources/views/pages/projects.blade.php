@extends('layouts.app')

@section('content')

    @include('components.sections.templates.projects')

@endsection

@section('footer')

    <script src="{{ url('js/projects.js') }}"></script>

@stop