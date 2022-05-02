<nav class="__navbar__">

    <button class="burger-button" type="button" role="button" aria-label="open/close navigation"><i></i></button>

    <div class="burger-element primary-navbar">

        <a href="/home">
            <div class="nav-content">
                <span class="nav-title {{ $navbar === 'home' ? 'nav-active' : '' }}">Home</span>
            </div>
        </a>

        <a href="/projects">
            <div class="nav-content">
                <span class="nav-title {{ $navbar === 'projects' ? 'nav-active' : '' }}">Projects</span>
            </div>
        </a>

        <a href="/board">
            <div class="nav-content">
                <span class="nav-title {{ $navbar === 'board' ? 'nav-active' : '' }}">Board</span>
            </div>
        </a>

        <a href="/about">
            <div class="nav-content">
                <span class="nav-title {{ $navbar === 'about' ? 'nav-active' : '' }}">About me</span>
            </div>
        </a>

    </div>

</nav>