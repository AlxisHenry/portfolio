@include('__header__')

@include('__navbar__')

<section class="__homepage__presentation__">

    <div class="__presentation__">
        <div class="__presentation__separator__"></div>
                <div class="__main__presentation__">
                    <div class="__me__">
                        <div class="name">
                            Henry Alexis
                        </div>
                        <div class="job">
                            Web Developer
                        </div>
                        <div class="__language__">
                            <img src="{{ url('assets/svg/javascript.svg') }}" alt="Javascript" title="Javascript" class="language_icon">
                          <!--  <img src="" alt="NodeJS" title="NodeJS" class="language_icon"> -->
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


@include('__footer__')
