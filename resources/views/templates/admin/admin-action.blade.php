@extends('layouts.admin.app')

@section('content')

    <section class="admin-action-section action-{{$action}}">

        @if($action === 'edit' || $action === 'delete')

            @foreach($data_target as $data)

                @if($delete_status)

                    @include('components.admin.deleted-with-success')

                @else

                    <div class="contain-action-form">

                        <h1 data-action="{{ $action }}" data-id="{{ $data->identifier }}">
                            {{ substr($data->title, 0, 60) }}...
                        </h1>

                        <comment data-id="{{ $data->identifier }}" data-action="{{ $action }}">

                            You are currently editing <span>{{ucfirst($view)}} #{{$data->identifier}}</span>

                        </comment>

                        @include('components.admin.form.form_action', ['type' => $action])

                        @include('components.admin.form.form_delete', ['button' => true])

                    </div>

                @endif

            @endforeach

        @else

            <div class="contain-action-form">

                <h1 data-action="{{ $view }}">
                    {{ucfirst($view)}}
                </h1>

                <comment>
                    You are currently creating a new <span>{{ucfirst($view)}}</span>
                </comment>

                @include('components.admin.form.form_action', ['type' => 'new'])

            </div>

        @endif

        @if($callback_message_status)

            <div class="callback-message">

                @if($action === 'edit')
                    Changes have been made,&nbsp;
                    <form method="POST" action="{{ Request::url() }}">
                        @csrf
                        <button type="submit">refresh the page</button>
                    </form>.
                @elseif($action === 'new')
                    A new record has been made. You can view it
                    <form method="POST" action="/admin/{{$view}}">
                        @csrf
                        <button type="submit">here</button>
                    </form>.
                @endif

            </div>

        @endif

    </section>

@endsection
