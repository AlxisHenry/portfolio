<div class="__documentation__card__" data-id="{{ $resource->identifier }}" data-aos="fade-up">
    <div class="__documentation__card__title__" data-title="{{ $resource->title }}" title="Title">
        <span class="title">{{ $resource->title }}</span>
    </div>
    <div class="__documentation__card__description__" title="Description">
        <div class="description" data-description="{{ $resource->description }}">
            {{ $resource->description }}
        </div>
    </div>
    <div class="__documentation__card__author__">
        Published at <time data-time="{{ date('d/m/Y', strtotime($resource->published_at)) }}"
            data-edit="{{ $resource->edit_at }}" data-published="{{ $resource->published_at }}" title="Published at">
            &nbsp; {{ date('d/m/Y', strtotime($resource->published_at)) }}</time>, by <span class="author"
            data-author="{{ $resource->author }}" title="Author">&nbsp;{{ $resource->author }}</span>.
    </div>    
    <div class="__main__resource__cards__">
        @include('components.about', [
            'link' => $resource->documentationLink,
            'blank' => true,
        ])
    </div>
</div>