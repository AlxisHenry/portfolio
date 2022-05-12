@extends('layouts.master')

@section('content')

<section class="__spoiler__cards__ test layout-maxed">

    <div class="__cards__">

        @foreach($TECH_CARDS as $card)

            @include('component.articles.card')

        @endforeach

    </div>

    <div class="__cards__">

        @foreach($JURI_CARDS as $card)

            @include('component.articles.card')

        @endforeach

    </div>

</section>

@stop