@extends('layouts.app')

@section('content')

<!-- todo : Responsive -->

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

        <div class="__contain__search__">
            <label>
                <input type="text" class="__search__input__" placeholder="Search">
            </label>
            <div class="__submit__search__"><i class="fa-solid fa-magnifying-glass"></i></div>
        </div>

        <div class="no-cards-error {{ old('no-items') ? "" : "invisible" }}">
           <span>
               {{ old('no-items') }}
           </span>
        </div>

    </div>

    <div class="__news__container__" data-categories="{{ "technology" }}">

        @for($i = 0; $i < count(array_keys($categories)); $i++)

            <div class="__news__category__" data-category="{{ array_keys($categories)[$i] }}">

                <div class="__news__category__title" data-category-title="{{ array_keys($categories)[$i] }}">

                    <h2>
                        {{ mb_strtoupper($Google->translate(array_keys($categories)[$i])) }}
                    </h2>

                </div>

                <div class="__news__category__cards__" data-category-cards="{{ array_keys($categories)[$i] }}" data-nb-cards="{{ count($categories[array_keys($categories)[$i]]) }}">

                    @foreach($categories[array_keys($categories)[$i]] as $card)

                        @include('components.news')

                    @endforeach

                </div>

            </div>

        @endfor

    </div>

</section>

@stop

@section('footer')

    <script src="{{ url('js/news.js') }}"></script>

@endsection