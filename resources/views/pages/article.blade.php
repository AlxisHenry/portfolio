@extends('layouts.app')

@section('content')
    <section id="__TargetArticle__" class="__target__article__ layout-maxed">
        <div class="__article__">
            <div class="__article-nb{{ $news->id }}__"
                data-url="{{ $news->url }}">
                <blockquote>
                    <div class="__article__title__">
                        {{ $news->title }}
                    </div>
                </blockquote>
                <div class="__article__informations__">
                    <time data-time="{{ date($news->published_at) }}">
                        published at {{ date('d/m/Y', strtotime($news->published_at)) }}
                    </time>
                    @if($news->auther !== "null")
                        , by {{ $news->author }}
                    @endif
                </div>
                <main class="__article__center__presentation__">
                    <figure class="__article__image__">
                        <picture>
                            <img src="{{ $news->image }}"
                                alt="{{ $news->alt === 'null' ? '' : $news->alt ?? '' }}"
                                title="{{ $news->title }}">
                        </picture>
                        <figcaption>
                            {{ $news->alt === 'null' ? '' : $news->alt ?? '' }}
                        </figcaption>
                    </figure>
                    <div class="__article__right__menu__">
                        <div class="__article_introduction__">
                            {{ $news->introduction === 'null' ? $news->alt : $news->introduction ?? '' }}
                        </div>
                        <div class="__article_url__">
                            <a href="{{ $news->url ?? '' }}" rel="nofollow noreferrer" target="_blank">
                                <button> Aller à cet article </button>
                            </a>
                        </div>
                    </div>
                </main>
                <div class="__article_theme__">
                    Related topics
                    <div class="__keywords__">
                        @foreach (explode(' ', $news->topics) as $topic)
                            @if (strlen($topic) > 5)
                                <a href="/news/search/{{ strtolower(strtr($topic, $unwanted_array)) }}" class="main-link">
                                    <span class="__article_keyword__">{{ $topic }}</span>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
