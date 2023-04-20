@extends('layouts.app')

@section('content')
    <section
        class="layout-hero-img @isset($show) section-language @else section-specific-lang @endisset">
        @isset($show)
            <h1 class="h1-language ml-36 mr-36"> All languages </h1>
            <div class="contain-all-lang">
                @foreach ($languages as $language => $name)
                    <a href="{{ route('languages.show', [
                        'name' => strtolower($language),
                    ]) }}"> {{ $name }} </a>
                @endforeach
            </div>
        @else
            @foreach ($language as $data)
                <div class="lang-content">
                    <h1 class="h1-spe ml-36 mr-36">{!! $data->title !!}</h1>
                    <div class="contain-specific-lang extract text-justify ml-36 mr-36" data-id="{{ $data->pageid }}"
                        data-ns="{{ $data->ns ?? 'null' }}" data-url="{{ $url }}">
                        <p class="text-justify">
                            {!! $data->extract !!}
                        </p>
                    </div>
                    <div class="list_all">
                        <a href="{{ route('languages.show', [
                            'name' => $random,
                        ]) }}">Show me a random language !</a>
                        <a href="{{ route('languages.index') }}">Show me all languages !</a>
                    </div>
                </div>
            @endforeach
        @endif
    </section>
@endsection
