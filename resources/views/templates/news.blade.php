@extends('layouts.app')

@section('content')

<section class="__spoiler__cards__ test layout-maxed">

    <div class="__cards__">

        @foreach($TECH_CARDS as $card)

            @include('components.news')

        @endforeach

    </div>

    <div class="__cards__">

        @foreach($JURI_CARDS as $card)

            @include('components.news')

        @endforeach

    </div>

</section>

@stop