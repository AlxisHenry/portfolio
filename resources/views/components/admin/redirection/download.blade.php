@if ($view === 'resources' || $view === 'projects')
    <a style="text-decoration: none" href="{{ $data->documentationLink }}" title="{{ $data->documentationLink }}"
        target="_blank" rel="noreferrer nofollow" data-download-url="{{ $data->documentationLink }}">
        <i class="fa-solid fa-download"></i>
    </a>
@elseif($view === 'news')
    <a style="text-decoration: none" href="{{ $data->LinkImage }}" target="_blank" rel="noreferrer nofollow"
        title="{{ $data->LinkImage }}" data-download-url="{{ $data->LinkImage }}">
        <i class="fa-solid fa-download"></i>
    </a>
@endif
