<nav class="__navbar__">

    <button class="burger-button" type="button" role="button" aria-label="open/close navigation"><i></i></button>

    <div class="burger-element primary-navbar">

        <a href="/home" class="{{ $navbar === 'home' ? 'nav-active' : '' }}">
            <div class="nav-content">
                <span class="nav-title">Home</span>
                <div class="hover_loading_nav"></div>
            </div>
        </a>

        <a href="/projects" class="{{ $navbar === 'projects' ? 'nav-active' : '' }}">
            <div class="nav-content">
                <span class="nav-title">Projects</span>
                <div class="hover_loading_nav"></div>
            </div>
        </a>

        <a href="/board" class="{{ $navbar === 'board' ? 'nav-active' : '' }}">
            <div class="nav-content">
                <span class="nav-title">Board</span>
                <div class="hover_loading_nav"></div>
            </div>
        </a>

        <a href="/about" class="{{ $navbar === 'about' ? 'nav-active' : '' }}">
            <div class="nav-content">
                <span class="nav-title">About me</span>
                <div class="hover_loading_nav"></div>
            </div>
        </a>

    </div>

</nav>