@include('__header__')

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

            <div class="__more__button__ __more__about__">
                <a href="/about">
                    <span class="__more__title__">More</span>
                </a>
            </div>

        </div>

    </div>

</section>

<section id="__spoilerProjects" class="__spoiler__projects__ hidden">

    <div class="__projects__">

        <div class="__project__card__ _project-nb-1_">

            <h1>{{ $Google->translate('Gestion de stock') }}</h1>

            <div class="_this_project_">

                <div class="_project_image_">
                    <img src="{{ url('assets/images/gs-timken.png') }}" alt="Timken Inventory Management" class="">
                </div>

                <div class="_about_project_">



                </div>

                <div class="_language_use_">
                    <span class="_project_language">Javascript</span>
                    <span class="_project_language">PHP</span>
                    <span class="_project_language">Powershell</span>
                </div>

            </div>

        </div>

    </div>

</section>

<section id="__spoilerCards" class="__spoiler__cards__">

    <div class="__cards__">

        @foreach($spoiler_cards as $card)

            <div class="__article__card__ __article__nb__{{ $card->identifier }}__ ">

                <div class="__article__image__">
                    <img src="{{ $card->LinkImage }}" alt="{{ $Google->translate(str($card->AltImage)) }}" title="{{ $Google->translate($card->title) }}">
                </div>

                <div class="__article__date__">
                    <time data-time="{{ date($card->UploadDate) }}"> Published on {{ date('d/m/Y', strtotime(date($card->UploadDate)))  }}</time>
                </div>

                <div class="__article__title__">
                    <span>{{ $Google->translate($card->title) }}</span>
                </div>

                <div class="__article_url__">
                    <a href="/news/{{ substr($card->UrlArticle, strrpos($card->UrlArticle, '/', '0') + 1) }}">
                        <button>{{ $Google->translate("Voir l'article") }}</button>
                    </a>
                </div>

            </div>

    @endforeach

    </div>

        <div class="__more__button__ __more__cards__">
            <a href="/news">
                <span class="__more__cards__">More</span>
            </a>
        </div>

</section>

@include('__footer__')