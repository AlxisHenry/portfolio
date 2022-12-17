<nav id="admin-navbar">
    <div class="navbar-redirections">
        <div class="navbar-button {{ $view === 'projects' ? 'active-navbar-button' : '' }}">
            <a href="{{ route('administration.view', ['view' => 'projects']) }}">Projects</a>
        </div>
        <div class="navbar-button {{ $view === 'resources' ? 'active-navbar-button' : '' }}">
            <a href="{{ route('administration.view', ['view' => 'resources']) }}">Resources</a>
        </div>
        <div class="navbar-button {{ $view === 'news' ? 'active-navbar-button' : '' }}">
            <a href="{{ route('administration.view', ['view' => 'news']) }}">News</a>
        </div>
        <div class="navbar-button {{ $view === 'contacts' ? 'active-navbar-button' : '' }}">
            <a href="{{ route('administration.view', ['view' => 'contacts']) }}">Contacts</a>
        </div>
    </div>
</nav>
<div class="navbar-indicator">
    <div class="navbar-url" data-navbar-url="/admin/{{ $view }}">
        <a href="{{ route('administration.view', ['view' => $view]) }}">{{ ucfirst($view) }}</a>
        &nbsp;\&nbsp;
    </div>
    <div class="optionals-redirection">
        <div class="optional-button">
            <a href="{{ route('administration.server.phpinfo') }}">PHP</a>
        </div>
        <div class="optional-button">
            <a href="{{ route('administration.server.laravel') }}">Laravel</a>
        </div>
        <div class="optional-button">
            <form method="POST" action="{{ route('administration.logout.post') }}">
                @csrf
                <button type="submit" style="cursor: pointer;">
                    Logout
                </button>
            </form>
        </div>
        <div class="optional-button">
            <a href="{{ route('index') }}">Home</a>
        </div>
    </div>
</div>
