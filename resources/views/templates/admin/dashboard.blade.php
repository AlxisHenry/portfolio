<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>

<body>

<nav id="admin-navbar">

    <div class="navbar-redirections">

        <div class="navbar-button active-navbar-button">
            <a href ="/admin/projects">
                <span>Projects</span>
            </a>
        </div>

        <div class="navbar-button">
            <a href ="/admin/resources">
                <span>Resources</span>
            </a>
        </div>

        <div class="navbar-button">
            <a href ="/admin/news">
                <span>News</span>
            </a>
        </div>

    </div>

</nav>

<div class="navbar-indicator">

    <div class="navbar-url" data-navbar-url="{{""}}">

        <span>
           <a href="/admin/{{"projects"}}">{{ "Projects" }}</a>
            \
            <a href="/admin/{{"projects"}}/{{"timken"}}">{{ "timken" }}</a>
        </span>

    </div>

    <div class="optionals-redirection">

        <div class="optional-button">
            <a href="/admin/laravel">
                <span>Laravel</span>
            </a>
        </div>

        <div class="optional-button">
            <a href="/admin/php">
                <span class="mr-20">PHP</span>
            </a>
        </div>

    </div>

</div>


<section>

    <!-- todo => Section will contain all projects -->

</section>

</body>