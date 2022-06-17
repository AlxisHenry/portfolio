<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>

<body>

<nav id="admin-navbar">

    <div class="navbar-redirections">

        <div class="navbar-button {{ $view === "projects" ? "active-navbar-button" : "" }}">
            <form method="POST" action="/admin/projects">
                @csrf
                <input type="submit" VALUE="Projects">
            </form>
        </div>

        <div class="navbar-button {{ $view === "resources" ? "active-navbar-button" : "" }}">
            <form method="POST" action="/admin/resources">
                @csrf
                <input type="submit" VALUE="Resources">
            </form>
        </div>

        <div class="navbar-button {{ $view === "news" ? "active-navbar-button" : "" }}">
            <form method="POST" action="/admin/news">
                @csrf
                <input type="submit" VALUE="News">
            </form>
        </div>

    </div>

</nav>

<div class="navbar-indicator">

    <div class="navbar-url" data-navbar-url="{{""}}">

        <form method="POST" action="/admin/{{$view}}">
            @csrf
            <input type="submit" VALUE="{{ ucfirst($view) }}">
        </form>
        &nbsp;\&nbsp;
        @if(1 === 2)
            <form method="POST" action="/admin/{{$view}}/{{$target}}">
                @csrf
                <input type="submit" VALUE="{{ "timken" }}">
            </form>
        @endif

    </div>

    <div class="optionals-redirection">

        <div class="optional-button">
            <form method="POST" action="/admin/server/laravel">
                @csrf
                <input type="submit" VALUE="Laravel">
            </form>
        </div>

        <div class="optional-button">
            <form method="POST" action="/admin/server/php">
                @csrf
                <input type="submit" VALUE="PHP">
            </form>
        </div>

        <div class="optional-button">
            <form method="POST" action="/">
                @csrf
                <input type="submit" VALUE="Home">
            </form>
        </div>

    </div>

</div>

<section>

    <div class="contain-all-{{$view}}-list">

        <div class="add-new-{{$view}}">
            <form method="POST" action="/admin/{{$view}}/new">
                @csrf
                <button type="submit"
                        data-action="new"
                        data-category="{{$view}}"
                >
                    <i class="fa-solid fa-plus"></i>
                </button>
            </form>
        </div>

        @foreach($targets as $target)

            <div class="admin-{{$view}}"
                 data-view="{{$view}}"
                 data-title="{{$target->title}}"
                 data-id="{{$target->identifier}}"
                 data-targets="{{count($targets)}}"
            >

                <div class="{{$view}}-{{$target->identifier}}-id id">
                    <span data-id="{{$target->identifier}}">
                        {{$target->identifier}}
                    </span>
                </div>

                @if($view === 'resources' || $view === 'projects')
                    <div class="{{$view}}-{{$target->identifier}}-title title"
                         title="Description: {{$target->description}}"
                    >
                        <span data-title="{{$target->title}}"
                              data-description="{{$target->description}}"
                        >
                            {{$target->title}}
                        </span>
                    </div>
                @elseif($view === 'news')
                    <div class="{{$view}}-{{$target->identifier}}-title title"
                         title="Description: {{$target->introduction}}"
                    >
                        <span data-title="{{$target->title}}"
                              data-description="{{$target->introduction}}"
                        >
                            {{ substr($target->title, 0, 80) }}...
                        </span>
                    </div>
                @endif

                <div class="{{$view}}-{{$target->identifier}}-author">
                    <span data-author="{{$target->author}}">
                        {{ substr($target->author, 0, 20) }}...
                    </span>
                </div>

                <div class="{{$view}}-{{$target->identifier}}-published_at">
                    @if($view === 'resources' || $view === 'projects')
                        <time data-published-at="{{$target->published_at}}">
                            {{$target->published_at}}
                        </time>
                    @elseif($view === 'news')
                        <time data-published-at="{{$target->UploadDate}}">
                            {{ explode('T', $target->UploadDate)[0] }}
                            à
                            {{ substr(explode('T', $target->UploadDate)[1], 0, 5) }}
                        </time>
                    @endif
                </div>

                <div class="contain_actions">

                    @if($view === 'resources' || $view === 'projects')
                        <a style="text-decoration: none"
                           href="{{$target->LinkImage}}"
                           title="{{$target->LinkImage}}"
                           data-download-url="{{$target->LinkImage}}"
                        >
                            <i class="fa-solid fa-download"></i>
                        </a>
                    @elseif($view === 'news')
                        <a style="text-decoration: none"
                           href="{{$target->documentationLink}}"
                           title="{{$target->documentationLink}}"
                           data-download-url="{{$target->documentationLink}}"
                        >
                            <i class="fa-solid fa-download"></i>
                        </a>
                    @endif

                    <form method="POST"
                          data-id="{{$target->identifier}}"
                          action="/admin/{{$view}}/{{$target->identifier}}/edit"
                    >
                        @csrf
                        <button type="submit"
                                data-id="{{$target->identifier}}"
                                data-action="{{$view}}"
                        >
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                    </form>

                    <form method="POST"
                          data-id="{{$target->identifier}}"
                          action="/admin/{{$view}}/{{$target->identifier}}/delete"
                    >
                        @csrf
                        <button type="submit"
                                data-id="{{$target->identifier}}"
                                data-action="{{$view}}"
                        >
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>

                </div>

            </div>

        @endforeach

    </div>

</section>

</body>