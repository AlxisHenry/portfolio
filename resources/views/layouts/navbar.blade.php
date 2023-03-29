<nav class="__navbar__" data-navbar="{{ $navbar }}">
    <button class="burger-button" type="button" role="button" aria-label="open/close navigation">
        <i></i>
    </button>
    <div class="burger-element">
        @include('components.navbar', ['to' => 'home', 'title' => 'home'])
        @include('components.navbar', ['to' => 'about', 'title' => 'about'])
        @include('components.navbar', ['to' => 'projects', 'title' => 'projects'])
        @include('components.navbar', ['to' => 'resources', 'title' => 'resources'])
        @include('components.navbar', ['to' => 'news', 'title' => 'news'])
    </div>
    <div class="__navbar__features__">
        <a href="https://github.com/AlxisHenry" target="_blank" rel="nofollow noreferrer">
            <img title="Github" src="{{ url('assets/svg/socials/github.svg') }}" alt="Github Link">
        </a>
        <div class="__lang__">
            <div class="__lang__main__">
                <a href="{{ route('lang', ['locale' => App::getLocale() === "fr" ? "en" : "fr"]) }}">
                    <img src="{{ url('assets/svg/langs/'. ( App::getLocale() === "fr" ? "en" : "fr" ) .'.svg') }}" alt="Language">
                </a>
            </div>
        </div>
        <div class="__theme__">
            <div class="__theme__main__" id="{{ $theme ?? 'light' }}">
                <img src="{{ url('assets/svg/themes/' . $theme . '.svg') }}" data-theme="{{ $theme }}"
                    data-next="{{ $theme === 'light' ? 'dark' : 'light' }}">
            </div>
        </div>
    </div>
</nav>
