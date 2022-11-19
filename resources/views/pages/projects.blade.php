@extends('layouts.app')
@section('content')
    @include('components.sections.templates.projects')
@endsection
@section('footer')
    @vite('resources/js/pages/projects.js')
@stop