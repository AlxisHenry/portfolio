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
                        <?php
                        $unwanted_array = array('Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
                        ?>
                        @foreach(explode(' ', $card->Theme) as $theme)
                            @if (strlen($theme) > 5)
                                <a href="/board/keyword/{{ strtolower(strtr($theme, $unwanted_array)) }}"> <span class="__article_keyword__"> {{ $Google->translate(strtolower($theme) ?? '') }} </span> </a>
                            @endif
                        @endforeach
                    </div>
                </div>

            </div>

        @endforeach

    </div>

</section>

@include('__footer__')