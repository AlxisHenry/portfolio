@extends('layouts.master')

@section('content')

<section class="__spoiler__cards__ __keywords__cards__">

    <div class="__research__">Keyword : {{ $KEYWORD }}</div>

    <div class="__cards__">

        @foreach($CORRESPONDING_KEYWORD_ARTICLE as $card)

            @include('component.articles.card')

        @endforeach

    </div>

</section>

@stop