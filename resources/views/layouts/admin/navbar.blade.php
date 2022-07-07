<nav id="admin-navbar">

    <div class="navbar-redirections">

        <div class="navbar-button {{ $view === "projects" ? "active-navbar-button" : "" }}">
            <form method="POST" action="/admin/projects" data-url="/admin/projects">
                @csrf
                <input type="submit" VALUE="Projects">
            </form>
        </div>

        <div class="navbar-button {{ $view === "resources" ? "active-navbar-button" : "" }}">
            <form method="POST" action="/admin/resources" data-url="/admin/resources">
                @csrf
                <input type="submit" VALUE="Resources">
            </form>
        </div>

        <div class="navbar-button {{ $view === "news" ? "active-navbar-button" : "" }}">
            <form method="POST" action="/admin/news" data-url="/admin/news">
                @csrf
                <input type="submit" VALUE="News">
            </form>
        </div>

        <div class="navbar-button {{ $view === "contacts" ? "active-navbar-button" : "" }}">
            <form method="POST" action="/admin/contacts" data-url="/admin/contacts">
                @csrf
                <input type="submit" VALUE="Contacts">
            </form>
        </div>

    </div>

</nav>

<div class="navbar-indicator">

    <div class="navbar-url" data-navbar-url="/admin/{{$view}}">

        <form method="POST" action="/admin/{{$view}}" data-url="/admin/{{$view}}}">
            @csrf
            <input type="submit" VALUE="{{ ucfirst($view) }}">
        </form>
        &nbsp;\&nbsp;
        @if(isset($id_target))
            <form method="POST" action="/admin/{{$view}}/{{$id_target}}/{{$action}}" data-url="/admin/{{$view}}/{{$id_target}}/{{$action}}">
                @csrf
                <input type="submit" VALUE="{{ $id_target }}">
            </form>
        @endif

    </div>

    <div class="optionals-redirection">

        <div class="optional-button">
            <form method="POST" action="/admin/server/laravel" data-url="/admin/server/laravel">
                @csrf
                <input type="submit" VALUE="Laravel">
            </form>
        </div>

        <div class="optional-button">
            <form method="POST" action="/admin/server/php" data-url="/admin/server/php">
                @csrf
                <input type="submit" VALUE="PHP">
            </form>
        </div>

        <div class="optional-button">
            <form method="POST" action="/" data-url="/">
                @csrf
                <input type="submit" VALUE="Home">
            </form>
        </div>

    </div>

</div>
