<div class="__article__card__ __article__nb__{{ $card->id }}__">
    <div class="__article__card__content__">
        <div class="__article__image__">
            <img
            @if($card->image !== "")
                src="{{ $card->image }}"
            @else
                src="{{ asset('assets/default-image.jpg') }}"
            @endif
            alt="{{ $card->alt }}" title="{{ $card->title }}">
        </div>
        <div class="__article__date__">
            <time data-time="{{ date($card->published_at) }}"> Published on
                {{ date('d/m/Y', strtotime(date($card->published_at))) }}</time>
        </div>
        <div class="__article__title__">
            <span>{{ substr($card->title, 0, 80) }}...</span>
        </div>
        @include('components.about', [
            'link' => (str_contains($card->url, "01net") 
                    ? $card->url
                    : ('/news/' . (strlen(explode('/', $card->url)[array_key_last(explode('/', $card->url))]) === 0
                    ? explode('/', $card->url)[array_key_last(explode('/', $card->url)) - 1]
                    : explode('/', $card->url)[array_key_last(explode('/', $card->url))]))
            ),
            'blank' => str_contains($card->url, "01net") ? true : false
        ])
    </div>
</div>
