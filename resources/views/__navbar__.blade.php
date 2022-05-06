<nav class="__navbar__" data-navbar="{{ $navbar }}">

    <button class="burger-button" type="button" role="button" aria-label="open/close navigation">
        <i></i>
    </button>

    <div class="burger-element">

        <a {{ $navbar === 'home' ? '' : 'href=/home' }} class="{{ $navbar === 'home' ? 'nav-active' : 'nav-disabled' }}">
            <div class="nav-content">
                <span class="nav-title">Home</span>
                <div class="hover_loading_nav"></div>
            </div>
        </a>

        <a {{ $navbar === 'about' ? '' : 'href=/about' }} class="{{ $navbar === 'about' ? 'nav-active' : 'nav-disabled' }}">
            <div class="nav-content">
                <span class="nav-title">About me</span>
                <div class="hover_loading_nav"></div>
            </div>
        </a>

        <a {{ $navbar === 'projects' ? '' : 'href=/projects' }} class="{{ $navbar === 'projects' ? 'nav-active' : 'nav-disabled' }}">
            <div class="nav-content">
                <span class="nav-title">Projects</span>
                <div class="hover_loading_nav"></div>
            </div>
        </a>

        <a {{ $navbar === 'board' ? '' : 'href=/board' }} class="{{ $navbar === 'board' ? 'nav-active' : 'nav-disabled' }}">
            <div class="nav-content">
                <span class="nav-title">Board</span>
                <div class="hover_loading_nav"></div>
            </div>
        </a>

    </div>

    <div class="__github__icon__">
        <a href="https://github.com/AlxisHenry">
            <i title="My Github Profile" class="fa-brands fa-github"></i>
        </a>
    </div>

</nav>