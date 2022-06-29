@extends('layouts.admin.app')

@section('content')

    <section>

        <div class="contain-all-{{$view}}-list">

            @include('components.admin.redirection.new')

            @foreach($targets as $data)

                <div class="admin-{{$view}}"
                     data-view="{{$view}}"
                     data-title="{{$data->title}}"
                     data-id="{{$data->identifier}}"
                     data-targets="{{count($targets)}}">
                    <div class="{{$view}}-{{$data->identifier}}-id id">
                        <span data-id="{{$data->identifier}}">
                            {{$data->identifier}}
                        </span>
                    </div>

                    @if($view === 'resources' || $view === 'projects')
                        <div class="{{$view}}-{{$data->identifier}}-title title"
                             title="Description: {{$data->description}}">
                            <span data-title="{{$data->title}}"
                                  data-description="{{$data->description}}">
                                {{$data->title}}
                            </span>
                        </div>
                    @elseif($view === 'news')
                        <div class="{{$view}}-{{$data->identifier}}-title title"
                             title="Description: {{$data->introduction}}">
                            <span data-title="{{$data->title}}"
                                  data-description="{{$data->introduction}}">
                                {{ substr($data->title, 0, 80) }}...
                            </span>
                        </div>
                    @endif

                    <div class="{{$view}}-{{$data->identifier}}-author">
                        <span data-author="{{$data->author}}">
                            {{ substr($data->author, 0, 20) }}...
                        </span>
                    </div>

                    <div class="{{$view}}-{{$data->identifier}}-published_at">

                        @if($view === 'resources' || $view === 'projects')
                            <time data-published-at="{{$data->published_at}}">
                                {{$data->published_at}}
                            </time>
                        @elseif($view === 'news')
                            <time data-published-at="{{ $data->published_at }}">
                                le
                                {{ date('d/m/Y', strtotime(date($data->published_at))) }}
                            </time>
                        @endif

                    </div>

                    <div class="contain_actions">

                        @include('components.admin.redirection.download')

                        @include('components.admin.redirection.edit')

                        @include('components.admin.form.form_delete', ['button' => false])

                    </div>

                </div>

            @endforeach

        </div>

    </section>

@endsection
