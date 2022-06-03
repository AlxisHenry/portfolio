@extends('layouts.app')

@section('content')

    <section class="layout-maxed" style="min-height: 100vh">

        @foreach($LANGUAGE as $data)

            <h1 class="ml-36 mr-36">{!! $data->title !!}</h1>

            <div class="extract text-justify ml-36 mr-36" data-id="{{ $data->pageid }}" data-ns="{{ $data->ns ?? 'null' }}" data-url="{{ $url }}">

                <p class="text-justify">

                    {!! $data->extract !!}

                </p>

            </div>

        @endforeach

    </section>

@endsection

<style>

    h1 {
        height: 80px;
        display: flex;
        align-items: center;
    }

    .extract {
        margin-top: -225px;
    }


</style>