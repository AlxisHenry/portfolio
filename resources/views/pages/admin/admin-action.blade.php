@extends('layouts.admin.app')

@section('content')
    <section class="admin-action-section action-{{ $action }}">
        @if ($action === 'edit')
            @foreach ($target as $data)
                <div class="contain-action-form">
                    <h1 data-action="{{ $action }}" data-id="{{ $data->identifier }}">
                        {{ substr($data->title, 0, 60) }}...
                    </h1>
                    <comment data-id="{{ $data->identifier }}" data-action="{{ $action }}">
                        You are currently editing <span>{{ ucfirst($view) }} #{{ $data->identifier }}</span>
                    </comment>
                    @include('components.admin.form.form_action', ['type' => $action])
                    @include('components.admin.form.form_delete', ['button' => true])
                </div>
            @endforeach
        @else
            <div class="contain-action-form">
                <h1 data-action="{{ $view }}">
                    {{ ucfirst($view) }}
                </h1>
                <comment>
                    You are currently creating a new <span>{{ ucfirst($view) }}</span>
                </comment>
                @include('components.admin.form.form_action', ['type' => 'new'])
            </div>
        @endif
    </section>
@endsection
