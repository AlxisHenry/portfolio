<div class="__article__card__ __article__nb__{{ $card->identifier }}__">
    <div class="__article__card__content__">
        <div class="__article__image__">
            <img
            @if($card->LinkImage !== "")
                src="{{ $card->LinkImage }}"
            @else
                src="{{ asset('assets/default-image.jpg') }}"
            @endif
            alt="{{ $card->AltImage }}" title="{{ $card->title }}">
        </div>
        <div class="__article__date__">
            <time data-time="{{ date($card->published_at) }}"> Published on
                {{ date('d/m/Y', strtotime(date($card->published_at))) }}</time>
        </div>
        <div class="__article__title__">
            <span>{{ substr($card->title, 0, 80) }}...</span>
        </div>
        @include('components.about', [
            'link' => $link,
            'blank' => $blank,
        ])
    </div>
</div>
