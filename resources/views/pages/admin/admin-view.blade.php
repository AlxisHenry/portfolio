@extends('layouts.admin.app')

@section('content')
    <section>
        <div class="contain-all-{{ $view }}-list">
            @if ($view !== 'contacts')
                @include('components.admin.redirection.new')
            @endif
            @foreach ($targets as $data)
                <div class="admin-{{ $view }}" data-view="{{ $view }}"
                    data-title="{{ $data->title ?? $data->object }}" data-id="{{ $data->identifier ?? $data->id }}"
                    data-targets="{{ count($targets) }}">
                    <div class="{{ $view }}-{{ $data->identifier ?? $data->id }}-id id">
                        <span data-id="{{ $data->identifier ?? $data->id }}">
                            {{ $data->identifier ?? $data->id }}
                        </span>
                    </div>
                    @if ($view === 'resources' || $view === 'projects')
                        <div class="{{ $view }}-{{ $data->identifier }}-title title"
                            title="Description: {{ $data->description }}">
                            <span data-title="{{ $data->title }}" data-description="{{ $data->description }}">
                                {{ $data->title }}
                            </span>
                        </div>
                    @elseif($view === 'news')
                        <div class="{{ $view }}-{{ $data->identifier }}-title title"
                            title="Description: {{ $data->introduction }}">
                            <span data-title="{{ $data->title }}" data-description="{{ $data->introduction }}">
                                {{ substr($data->title, 0, 80) }}...
                            </span>
                        </div>
                    @elseif($view === 'contacts')
                        <div class="{{ $view }}-{{ $data->id }}-object object"
                            title="Content: {{ $data->content }}">
                            <span data-object="{{ $data->object }}" data-content="{{ $data->content }}">
                                {{ substr($data->content, 0, 80) }}...
                            </span>
                        </div>
                        <div class="{{ $view }}-{{ $data->identifier ?? $data->id }}-author">
                            <span data-mail="{{ $data->email ?? '' }}">
                                {{ $data->email }}
                            </span>
                        </div>
                    @endif
                    <div class="{{ $view }}-{{ $data->identifier ?? $data->id }}-author">
                        <span data-author="{{ $data->author ?? $data->name }}" data-mail="{{ $data->email ?? '' }}">
                            {{ substr($data->author ?? $data->name, 0, 20) }}...
                        </span>
                    </div>
                    <div class="{{ $view }}-{{ $data->identifier ?? $data->id }}-published_at">
                        @if ($view === 'resources' || $view === 'projects')
                            <time data-published-at="{{ $data->published_at }}">
                                {{ $data->published_at }}
                            </time>
                        @elseif($view === 'news')
                            <time data-published-at="{{ $data->published_at }}">
                                le
                                {{ date('d/m/Y', strtotime(date($data->published_at))) }}
                            </time>
                        @elseif($view === 'projects')
                            <time data-published-at="{{ $data->created_at }}">
                                le
                                {{ date('d/m/Y', strtotime(date($data->created_at))) }}
                            </time>
                        @endif
                    </div>
                    <div class="contain_actions">
                        @if ($view !== 'contacts')
                            @include('components.admin.redirection.download')

                            @include('components.admin.redirection.edit')
                        @endif
                        @include('components.admin.form.form_delete', ['button' => false])
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
