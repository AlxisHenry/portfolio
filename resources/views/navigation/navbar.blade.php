<nav class="__navbar__" data-navbar="{{ $navbar }}">

    <button class="burger-button" type="button" role="button" aria-label="open/close navigation">
        <i></i>
    </button>

    <div class="burger-element">

            @include('navigation.nav-menu', ['to' => 'home','title' => 'Home'])

            @include('navigation.nav-menu', ['to' => 'about','title' => 'about me'])

            @include('navigation.nav-menu', ['to' => 'projects','title' => 'projects'])

            @include('navigation.nav-menu', ['to' => 'board','title' => 'board'])

            @include('navigation.nav-menu', ['to' => 'news','title' => 'news'])

    </div>

    <div class="__github__icon__">
        <a href="https://github.com/AlxisHenry" target="_blank" rel="noreferrer">
            <i title="Github" class="fa-brands fa-github"></i>
        </a>
    </div>

</nav>