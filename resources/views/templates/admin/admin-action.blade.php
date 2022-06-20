@extends('templates.admin.layouts.app')

@section('content')

    <section>

        @foreach($data_target as $data)

            <h1 data-action="{{ $action }}" data-id="{{ $data->identifier }}">
                {{ substr($data->title, 0, 60) }}...
            </h1>

            <comment data-id="{{ $data->identifier }}" data-action="{{ $action }}">

                {{ ucfirst($action) }} => {{ $data->identifier }}

            </comment>

            @include('components.admin.form.form_action', ['type' => $action])

            @include('components.admin.form.form_delete')

        @endforeach

    </section>

@endsection
