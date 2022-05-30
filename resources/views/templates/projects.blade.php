@extends('layouts.app')

@section('content')

    @include('components.sections.templates.projects')

@endsection

@section('footer')

    <script src="{{ url('js/templates/projects.js') }}"></script>

@stop