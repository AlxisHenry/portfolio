<?php
use Stichoza\GoogleTranslate\GoogleTranslate;
$Google = new GoogleTranslate();
$Google->setSource('fr');
$Google->setTarget('en');
?>

@include('__header__')
@include('__navbar__clean__')

<section id="__TargetArticle__" class="__target__article__ layout-maxed">

    <div class="__article__">

        @foreach(DB::select("SELECT * FROM `Articles`
                                INNER JOIN Dates ON Articles.identifier = Dates.identifier
                                INNER JOIN Images ON Articles.identifier = Images.identifier
                                INNER JOIN Themes ON Articles.identifier = Themes.identifier
                                WHERE Articles.UrlArticle LIKE '%". substr(Request::url(), strrpos(Request::url(), '/', '0') + 1) ."%'") as $card)

            <div class="__article-nb{{$card->identifier}}__" data-article="{{$card->identifier}}" data-url="{{$card->UrlArticle}}">

                <blockquote>
                    <div class="__article__title__">
                            {{ $Google->translate($card->title) }}
                    </div>
                </blockquote>

                <div class="__article__informations__">
                    <time data-time="{{ date($card->UploadDate) }}"> Published on {{ date('d/m/Y', strtotime(date($card->UploadDate)))  }} &nbsp;</time> {{ $Google->translate($card->author ?? '') }}
                </div>

                <main class="__article__center__presentation__">
                    <figure class="__article__image__">
                        <picture>
                            <img src="{{ $card->LinkImage }}" alt="{{ $Google->translate(str($card->AltImage)) }}" title="{{ $Google->translate($card->title) }}">
                        </picture>
                        <figcaption>
                            {{ $Google->translate($card->AltImage ?? '') }}
                        </figcaption>
                    </figure>
                    <div class="__article__right__menu__">
                        <div class="__article_introduction__">
                            {{ $Google->translate($card->introduction ?? $card->AltImage) ?? $Google->translate('Cet article ne contient pas de description') }}
                        </div>

                        <div class="__article_url__">
                            <a href="{{ $card->UrlArticle ?? ''}}" target="_blank">
                                <button>{{ $Google->translate("Aller à cet article") }}</button>
                            </a>
                        </div>
                    </div>
                </main>

                <div class="__article_theme__">
                    {{ $Google->translate('Thèmes associés') }}
                    <div class="__keywords__">
                        @foreach(explode(' ', $card->Theme) as $theme)
                            <span class="__article_keyword__"> {{ $Google->translate($theme ?? '') }} </span>
                        @endforeach
                    </div>
                </div>

            </div>

        @endforeach

    </div>

</section>

@include('__footer__')