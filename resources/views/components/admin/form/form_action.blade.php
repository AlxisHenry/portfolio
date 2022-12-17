<form method="post" class="action-form"
    @if ($type === 'new') action="{{ route('administration.view.store', ['view' => $view]) }}"
    @else
        action="{{ route('administration.view.update', [
            'view' => $view,
            'id' => $data->identifier,
            'action' => $action,
        ]) }}" @endif>
    @csrf
    <input name="identifier" type="hidden" value="{{ $type !== 'new' ? $data->identifier : '' }}">
    <input type="hidden" id="type_object" name="type_object" value="{{ $view }}">
    <input type="hidden" id="type_action" name="type_action" value="{{ $type }}">
    <div class="dup-form">
        <div class="right-form">
            <label for="title">Title
                <input name="title" id="title" type="text" value="{{ $type !== 'new' ? $data->title : '' }}"
                    required>
            </label>
            <label
                for="{{ $view === 'news' ? 'introduction' : 'description' }}">{{ $view === 'news' ? 'Introduction' : 'Description' }}
                <input name="{{ $view === 'news' ? 'introduction' : 'description' }}"
                    id="{{ $view === 'news' ? 'introduction' : 'description' }}" type="text"
                    value="{{ $type !== 'new' ? ($view === 'news' ? $data->introduction : $data->description) : '' }}"
                    required>
            </label>
            <label for="id">Author
                <input name="author" id="author" type="text" value="{{ $type !== 'new' ? $data->author : '' }}"
                    required>
            </label>
            @if ($view === 'resources')
                <label for="documentation">Documentation
                    <input name="documentation" id="documentation" type="text"
                        value="{{ $type !== 'new' ? $data->documentationLink : '' }}" required>
                </label>
            @elseif($view === 'news')
                <label for="link_news">Link news
                    <input name="link_news" id="link_news" type="text"
                        value="{{ $type !== 'new' ? $data->UrlArticle : '' }}" required>
                </label>
            @else
                <label for="github_link">Github Link
                    <Link>
                    <input name="github_link" id="github_link" type="text"
                        value="{{ $type !== 'new' ? $data->GithubLink : '' }}" required>
                </label>
            @endif
        </div>
        <div class="left-form">
            @if ($view === 'projects')
                <label for="link_img">Image file name
                    <input name="link_img" id="link_img" type="text"
                        value="{{ $type !== 'new' ? $data->linkImage : '' }}" required>
                </label>
                <label for="languages">Languages (4 max)
                    <input name="languages" id="languages" type="text" placeholder="Lang1,Lang2,Lang3,..."
                        value="{{ $type !== 'new' ? $data->languages : '' }}" required>
                </label>
                <label for="url_name">Url name
                    <input name="url_name" id="url_name" type="text" placeholder="/projects/url_name"
                        value="{{ $type !== 'new' ? $data->url_name : '' }}" required>
                </label>
            @endif
            @if ($view === 'news')
                <label for="link_img">Link image
                    <input name="link_img" id="link_img" type="text"
                        value="{{ $type !== 'new' ? $data->LinkImage : '' }}" required>
                </label>
                <label for="themes">Themes
                    <input name="themes" id="themes" type="text"
                        value="{{ $type !== 'new' ? $data->Theme : '' }}" required>
                </label>
                <label for="theme_principal">Theme principal
                    <input name="theme_principal" id="theme_principal" type="text"
                        value="{{ $type !== 'new' ? $data->ThemePrincipal : ' Technologique ' }}" required>
                </label>
            @endif
            <label for="published_at">Published at
                <input name="published_at" id="published_at" type="text"
                    value="{{ $type !== 'new' ? date('Y/m/d', strtotime(date($data->published_at))) : '' }}"
                    placeholder="YYYY-MM-DD" {{ $view === 'news' ? 'required' : '' }}>
            </label>
        </div>
    </div>
    <input type="submit" value="{{ $type === 'new' ? 'create' : 'save changes' }}">
</form>
