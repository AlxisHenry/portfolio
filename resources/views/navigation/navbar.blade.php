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

    <div class="__navbar__features__">

        <a href="https://github.com/AlxisHenry" target="_blank" rel="nofollow noreferrer">
            <img title="Github" src="{{ url('assets/svg/contacts/github.svg') }}" alt="Github Link">
        </a>
       <!-- <a href="https://wakatime.com/@AlxisHenry" target="_blank" rel="noreferrer nofollow">
            <img title="Wakatime" src="{{-- url('assets/svg/contacts/wakatime.svg') --}}" alt="Wakatime Link">
        </a> -->
        <div class="__theme__ invisible">
            <div class="__theme__main__" id="moon">
                <img id="moon" title="Moon" src="{{ url('assets/svg/themes/moon.svg') }}" alt="Moon" data-next="Sun">
            </div>
        </div>

    </div>

</nav>