<div class="__documentation__card__" data-aos="fade-up">
    <div class="__documentation__card__title__">
        <span class="title">{{ $resource->title }}</span>
    </div>
    <div class="__documentation__card__description__">
        <div class="description">
            {{ $resource->description }}
        </div>
    </div>
    <div class="__documentation__card__author__">
        Publié le <time>&nbsp;{{ date('d/m/Y', strtotime($resource->created_at)) }}</time>,
        par <span class="author" title="Author">&nbsp;{{ $resource->author }}</span>.
    </div>
    <div class="__main__resource__cards__">
        @include('components.about', [
            'link' => $resource->link,
            'blank' => true,
        ])
    </div>
</div>