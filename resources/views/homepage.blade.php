@include('__header__')

<?php
use Stichoza\GoogleTranslate\GoogleTranslate;
$Google = new GoogleTranslate();
$Google->setSource('fr');
$Google->setTarget('en');
?>


@include('__navbar__')

<section class="__homepage__presentation__">
    <div class="__presentation__">
        <div class="__presentation__separator__"></div>
                <div class="__main__presentation__">
                    <div class="__me__">
                        <div class="name">
                            {{ config('data.name') }}
                        </div>
                        <div class="job">
                            {{ config('data.job') }}
                        </div>
                        <div class="__language__">
                            <img src="{{ url('assets/svg/javascript.svg') }}" alt="Javascript" title="Javascript" class="language_icon">
                            <img src="{{ url('assets/svg/nodejs.svg') }}" alt="NodeJS" title="NodeJS" class="language_icon">
                            <img src="{{ url('assets/svg/php.svg') }}" alt="PHP" title="PHP" class="language_icon">
                            <img src="{{ url('assets/svg/python.svg') }}" alt="Python" title="Python" class="language_icon">
                            <img src="{{ url('assets/svg/laravel.svg') }}" alt="Laravel" title="Laravel" class="language_icon">
                            <img src="{{ url('assets/svg/powershell.svg') }}" alt="Powershell" title="Powershell" class="language_icon">
                            <img src="{{ url('assets/svg/bash.svg') }}" alt="Bash" title="Bash" class="language_icon">
                        </div>
                    </div>
                    <div class="__main__asset__">
                        <img src="{{ url('assets/cafe.gif') }}" alt="Computer" title="Computer" class="__asset__">
                    </div>
                </div>
        </div>
</section>

@include('__arrow__')

<section id="__spoilerAbout" class="__spoiler__about__">

    <div class="__about__title__">

    </div>

    <div class="__about__card__">

        <div class="__about__">
            <span class="_about_descript_">

                {{ config('data.presentation') }} <br>
                Hope to become Full Stack Developer. <br>
                I'm ready to learn every language if I need to use it. <br>
                My favorites langague is Javascript. <br>

            </span>

            <div class="__more__about__">
                <a href="/about">
                    <span class="__more__title__">More</span>
                </a>
            </div>

        </div>

    </div>

</section>

<section id="__spoilerProjects" class="__spoiler__projects__">

</section>

<section id="__spoilerCards" class="__spoiler__cards__ hidden">

    @foreach(DB::select('SELECT * FROM `Articles`
                            INNER JOIN Dates ON Articles.identifier = Dates.identifier
                            INNER JOIN Images ON Articles.identifier = Images.identifier
                            INNER JOIN Themes ON Articles.identifier = Themes.identifier
                            WHERE Articles.identifier > 155 AND Articles.identifier < 161') as $card)

        <div class="__article__card__ __article__nb__{{ $card->identifier }}__">

            <div class="__article__image__">
                <img src="{{ $card->LinkImage }}" alt="{{ $Google->translate(str($card->introduction)) }}" title="{{ $Google->translate($card->title) }}">
            </div>

            <div class="__article__date__">
                <time data-time="{{ date($card->UploadDate) }}"> Published on {{ date('d/m/Y', strtotime(date($card->UploadDate)))  }}</time>
            </div>

            <div class="__article__title__">
                <span>{{ $Google->translate($card->title) }}</span>
            </div>

            <div class="__article_url__">
                <a href="{{ $card->UrlArticle }}" target="_blank">
                    <button>{{ $Google->translate("Voir l'article") }}</button>
                </a>
            </div>

        </div>

    @endforeach

</section>

@include('__footer__')
