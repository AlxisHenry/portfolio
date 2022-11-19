@extends('layouts.app')

@section('content')

<section class="__news__ layout-maxed">

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

        <div class="__contain__search__" data-search="{{$word ?? ''}}">
            <label>
                <input type="text" class="__search__input__" placeholder="Search" value="{{$word ?? ''}}" data-word="{{$word ?? ''}}">
            </label>
            <div class="__submit__search__"><i class="fa-solid fa-magnifying-glass"></i></div>
        </div>

        <div class="show_all {{ $show_all_status ? '' : 'disabled' }}">
                <a href="{{ $show_all_status ? '/news' : '' }}">show all</a>
        </div>

    </div>

    <div class="__news__container__" data-categories="{{ "technology" }}">

        @if(!$show_all_status)
            @for($i = 0; $i < count(array_keys($categories)); $i++)

            <div class="__news__category__" data-category="{{ array_keys($categories)[$i] }}">

                <div class="__news__category__title" data-category-title="{{ array_keys($categories)[$i] }}">

                    <h2>
                        {{ mb_strtoupper(array_keys($categories)[$i]) }}
                    </h2>

                </div>

                <div class="__news__category__cards__" data-category-cards="{{ array_keys($categories)[$i] }}" data-nb-cards="{{ count($categories[array_keys($categories)[$i]]) }}">

                    @foreach($categories[array_keys($categories)[$i]] as $card)

                        @include('components.news')

                    @endforeach

                </div>

            </div>

        @endfor
        @else
            <div class="__news__category__ __news__category__keyword__" data-category="{{ $word }}">

                <div class="__news__category__title" data-category-title="{{ $word }}">

                    <h2> {{ mb_strtoupper($word) }} </h2>

                </div>

                <div class="__news__category__cards__" data-category-cards="{{ $word }}" data-nb-cards="{{ count($related_news) }}" data-related-word="{{$word}}">

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
        @endif

    </div>

</section>

@stop

@section('footer')
    @vite('resources/js/pages/news.js')
@endsection