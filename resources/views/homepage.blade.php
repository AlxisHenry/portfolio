@include('__header__')
@include('__navbar__')

<section class="__homepage__presentation__">

    <div class="screen">

    </div>

    <div class="__presentation__myself__">

        <div class="name">
                Henry Alexis
        </div>

        <div class="job">
                Développeur Web
        </div>

        <div class="language">
            <img src="{{ url('assets/svg/javascript.svg') }}" alt="Javascript" title="Javascript" class="language-icon">
            <img src="{{ url('assets/svg/nodejs.svg') }}" alt="NodeJS" title="NodeJS" class="language-icon">
            <img src="{{ url('assets/svg/php.svg') }}" alt="PHP" title="PHP" class="language-icon">
            <img src="{{ url('assets/svg/laravel.svg') }}" alt="Laravel" title="Laravel" class="language-icon">
            <img src="{{ url('assets/svg/bash.svg') }}" alt="Bash" title="Bash" class="language-icon">
        </div>

    </div>

</section>



@include('__footer__')
