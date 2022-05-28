@extends('layouts.app')

@section('content')

<section class="__keywords__cards__ layout-maxed">

    <div class="__research__">Keyword : {{ $KEYWORD }}</div>

    <div class="__keywords__cards__">

        @foreach($CORRESPONDING_KEYWORD_ARTICLE as $card)

            @include('components.news')

        @endforeach

    </div>

</section>

@stop