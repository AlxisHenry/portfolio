@extends('layouts.app')

@section('content')

    <section class="layout-hero-img @isset($show_all_languages) section-language @else section-specific-lang @endisset ">

        @isset($show_all_languages)

            <h1 class="h1-language ml-36 mr-36"> All languages </h1>

            <div class="contain-all-lang">

                @foreach($languages as $lang => $complete_name)

                    <a href="/language/{{$lang}}"> {{ $complete_name }} </a>

                @endforeach

            </div>

        @else

            @foreach($lang as $data)

                <h1 class="h1-spe ml-36 mr-36">{!! $data->title !!}</h1>

                <div class="contain-specific-lang extract text-justify ml-36 mr-36" data-id="{{ $data->pageid }}" data-ns="{{ $data->ns ?? 'null' }}" data-url="{{ $url }}">

                    <p class="text-justify">

                        {!! $data->extract !!}

                    </p>

                </div>

            @endforeach

        @endif

    </section>

@endsection