@extends('layouts.app')

@section('content')

<section class="__news__ test layout-maxed">

    @component('components.underline-title')
        @slot('Title')
            News
        @endslot
    @endcomponent

    <div class="section-explication">
        On this page are available a number of articles retrieved from France Inter.
        I retrieved them using <a href="https://selenium-python.readthedocs.io/">selenium</a>, a <a href="https://www.python.org/">python</a> tool.
        The source code is available on <a href="https://github.com/AlxisHenry/CCI-2021-PORTFOLIO/tree/v2.1.0/extension">github</a>.
    </div>

    <div class="__search__article__">
        <label>
            <input type="text" class="__search__input__" placeholder="Search">
        </label>
        <div class="__submit__search__"><i class="fa-solid fa-magnifying-glass"></i></div>
    </div>

    <div class="__news__cards__">

        @foreach($news as $card)

            @include('components.news')

        @endforeach

    </div>

</section>

@stop

@section('footer')

    <script src="{{ url('js/news.js') }}"></script>

@endsection