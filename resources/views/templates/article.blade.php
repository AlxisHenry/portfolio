@extends('layouts.app')

@section('content')


    <section id="__TargetArticle__" class="__target__article__ layout-maxed">

        <div class="__article__">

                <div class="__article-nb{{$ARTICLE->identifier}}__" data-article="{{$ARTICLE->identifier}}" data-url="{{$ARTICLE->UrlArticle}}">

                    <blockquote>
                        <div class="__article__title__">
                            {{ $ARTICLE->title }}
                        </div>
                    </blockquote>

                    <div class="__article__informations__">
                        <time data-time="{{ date($ARTICLE->UploadDate) }}"> Published on {{ date('d/m/Y', strtotime(date($ARTICLE->UploadDate)))  }}</time> {{ $ARTICLE->author ? ',' . $ARTICLE->author : '' }}
                    </div>

                    <main class="__article__center__presentation__">
                        <figure class="__article__image__">
                            <picture>
                                <img src="{{ $ARTICLE->LinkImage }}" alt="{{ $ARTICLE->AltImage === 'null' ? '' : ($ARTICLE->AltImage ?? '') }}" title="{{ $ARTICLE->title }}">
                            </picture>
                            <figcaption>
                                {{ $ARTICLE->AltImage === 'null' ? '' : ($ARTICLE->AltImage ?? '') }}
                            </figcaption>
                        </figure>
                        <div class="__article__right__menu__">
                            <div class="__article_introduction__">
                                {{ $ARTICLE->introduction === 'null' ? $ARTICLE->AltImage : ($ARTICLE->introduction ?? '') }}
                            </div>

                            <div class="__article_url__">
                                <a href="{{ $ARTICLE->UrlArticle ?? ''}}" rel="nofollow noreferrer" target="_blank">
                                    <button> Aller à cet article </button>
                                </a>
                            </div>
                        </div>
                    </main>

                    <div class="__article_theme__">
                        {{ $Google->translate('Thèmes associés') }}
                        <div class="__keywords__">
                            @foreach(explode(' ', $ARTICLE->Theme) as $theme)
                                @if (strlen($theme) > 5)
                                    <a href="/news/word/{{ strtolower(strtr($theme, $unwanted_array)) }}"> <span class="__article_keyword__"> {{ $Google->translate(strtolower($theme) ?? '') }} </span> </a>
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>

        </div>

    </section>

@stop