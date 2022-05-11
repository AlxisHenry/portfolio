<?php
use Stichoza\GoogleTranslate\GoogleTranslate;
$Google = new GoogleTranslate();
$Google->setSource('fr');
$Google->setTarget('en');
?>

@include('__header__')
@include('__navbar__')

<section class="__spoiler__cards__ test layout-maxed">

    <div class="__cards__">

        @foreach(DB::select('SELECT * FROM `Articles`
                                INNER JOIN Dates ON Articles.identifier = Dates.identifier
                                INNER JOIN Images ON Articles.identifier = Images.identifier
                                INNER JOIN Themes ON Articles.identifier = Themes.identifier
                                WHERE Themes.ThemePrincipal = " Technologique " LIMIT 5') as $card)

            <div class="__article__card__ __article__nb__{{ $card->identifier }}__ ">

                <div class="__article__image__">
                    <img src="{{ $card->LinkImage }}" alt="{{ $Google->translate(str($card->AltImage)) }}" title="{{ $Google->translate($card->title) }}" loading="lazy">
                </div>

                <div class="__article__date__">
                    <time data-time="{{ date($card->UploadDate) }}"> Published on {{ date('d/m/Y', strtotime(date($card->UploadDate)))  }}</time>
                </div>

                <div class="__article__title__">
                    <span>{{ $Google->translate($card->title) }}</span>
                </div>

                <div class="__article_url__">
                    <a href="/news/article/{{ substr($card->UrlArticle, strrpos($card->UrlArticle, '/', '0') + 1) }}">
                        <button>{{ $Google->translate("Voir l'article") }}</button>
                    </a>
                </div>

            </div>

        @endforeach

    </div>

    <div class="__cards__">

        @foreach(DB::select('SELECT * FROM `Articles`
                                INNER JOIN Dates ON Articles.identifier = Dates.identifier
                                INNER JOIN Images ON Articles.identifier = Images.identifier
                                INNER JOIN Themes ON Articles.identifier = Themes.identifier
                                WHERE Themes.ThemePrincipal = "Juridique" LIMIT 5') as $card)

            <div class="__article__card__ __article__nb__{{ $card->identifier }}__ ">

                <div class="__article__image__">
                    <img src="{{ $card->LinkImage }}" alt="{{ $Google->translate(str($card->AltImage)) }}" title="{{ $Google->translate($card->title) }}" loading="lazy">
                </div>

                <div class="__article__date__">
                    <time data-time="{{ date($card->UploadDate) }}"> Published on {{ date('d/m/Y', strtotime(date($card->UploadDate)))  }}</time>
                </div>

                <div class="__article__title__">
                    <span>{{ $Google->translate($card->title) }}</span>
                </div>

                <div class="__article_url__">
                    <a href="/news/article/{{ substr($card->UrlArticle, strrpos($card->UrlArticle, '/', '0') + 1) }}">
                        <button>{{ $Google->translate("Voir l'article") }}</button>
                    </a>
                </div>

            </div>

        @endforeach

    </div>

</section>

@include('__footer__')
