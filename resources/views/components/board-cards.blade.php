<div class="__documentation__card__" data-id="{{ $board->identifier }}" data-aos="fade-up">
    <div class="__documentation__card__title__" data-title="{{ $board->title }}" title="Title">
        <span class="title">{{ $board->title }}</span>
    </div>
    <div class="__documentation__card__description__" title="Description">
        <div class="description" data-description="{{ $board->description }}">
            {{ $board->description }}
        </div>
    </div>
    <div class="__documentation__card__author__">
        Published at <time data-time="{{ date('d/m/Y', strtotime($board->published_at)) }}"
            data-edit="{{ $board->edit_at }}" data-published="{{ $board->published_at }}" title="Published at">
            &nbsp; {{ date('d/m/Y', strtotime($board->published_at)) }}</time>, by <span class="author"
            data-author="{{ $board->author }}" title="Author">&nbsp;{{ $board->author }}</span>.
    </div>    
    <div class="__main__board__cards__">
        @include('components.about', [
            'link' => $board->documentationLink,
            'blank' => true,
        ])
    </div>
</div>