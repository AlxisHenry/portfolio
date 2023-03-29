@extends('layouts.app')

@section('content')
    <section class="__news__ layout-maxed">
        @component('components.underline-title')
            @slot('title')
                {{ __('titles.news') }}
            @endslot
        @endcomponent
        <div class="section-explication">
            {!! __('paragraphs.news', [
                'route' => route('news.search', [
                    'key' => "Veille technologique"
                ])
            ]) !!}
        </div>
        <div class="__search__article__">
            <div class="__contain__search__">
                <label>
                    <input type="text" class="__search__input__" placeholder="Search" value="{{ $search ?? '' }}">
                </label>
                <div class="__submit__search__"><i class="fa-solid fa-magnifying-glass"></i></div>
            </div>
            <div class="show_all {{ $show ? '' : 'disabled' }}">
                <a href="{{ $show ? '/news' : '' }}">show all</a>
            </div>
        </div>
        <div class="__news__container__" data-categories="{{ 'technology' }}">
            @if (!$show)
                @for ($i = 0; $i < count(array_keys($categories)); $i++)
                    <div class="__news__category__" data-category="{{ array_keys($categories)[$i] }}">
                        <div class="__news__category__title" data-category-title="{{ array_keys($categories)[$i] }}">
                            <h2>
                                {{ mb_strtoupper(array_keys($categories)[$i]) }}
                            </h2>
                        </div>
                        <div class="__news__category__cards__" data-category-cards="{{ array_keys($categories)[$i] }}"
                            data-nb-cards="{{ count($categories[array_keys($categories)[$i]]) }}">
                            @foreach ($categories[array_keys($categories)[$i]][1] as $card)
                                @include('components.news')
                            @endforeach
                        </div>
                        <div class="__news__category__more__">
                            @include('components.more', [
                                "to" => $categories[array_keys($categories)[$i]][0]
                            ])
                        </div>
                    </div>
                @endfor
            @else
                <div class="__news__category__ __news__category__keyword__">
                    <div class="__news__category__title" >
                        <h2> {{ mb_strtoupper($search) }} </h2>
                    </div>
                    <div class="__news__category__cards__">
                        @foreach ($related_news as $card)
                            @include('components.news')
                        @endforeach
                        @if ($items)
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
