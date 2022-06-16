@extends('layouts.app')

@section('content')

<section class="__news__ test layout-maxed">

    @component('components.underline-title')
        @slot('Title')
            News
        @endslot
    @endcomponent

    @component('components.pop-up')
        @slot('Icon')
            <i class="fa-solid fa-xmark"></i>
        @endslot
        @slot('Alert')
            Complete the fields.
        @endslot
    @endcomponent

    <div class="section-explication">
        On this page are available a number of articles retrieved from France Inter.
        I retrieved them using <a href="https://selenium-python.readthedocs.io/">selenium</a>, a <a href="https://www.python.org/">python</a> tool.
        The source code is available on <a href="https://github.com/AlxisHenry/CCI-2021-PORTFOLIO/tree/v2.1.0/extension">github</a>.
    </div>

    <div class="__search__article__">

        <div class="__contain__search__">
            <label>
                <input type="text" class="__search__input__" placeholder="Search">
            </label>
            <div class="__submit__search__"><i class="fa-solid fa-magnifying-glass"></i></div>
        </div>

    </div>

    <div class="__news__container__ __news__container__keyword__" data-categories="{{ $word }}">

        <div class="__news__category__ __news__category__keyword__" data-category="{{ $word }}">

            <div class="__news__category__title" data-category-title="{{ $word }}">

                <h2> {{ mb_strtoupper($word) }} </h2>

            </div>

            <div class="__news__category__cards__" data-category-cards="{{ $word }}" data-nb-cards="{{ mb_strlen($word) }}">

                @foreach($related_news as $card)

                    @include('components.news')

                @endforeach

                @if($items)
                        <div class="no-cards-error">
                            <div>
                                No items match your search...
                            </div>
                        </div>
                @endif

            </div>

        </div>

    </div>

</section>

@stop

@section('footer')

    <script src="{{ url('js/news.js') }}"></script>

@endsection