<div class="__documentation__card__" data-id="{{ $Board->identifier }}">

    <div class="__documentation__card__title__" data-title="{{ $Board->title }}" title="Title">
        <span class="title">{{ $Board->title }}</span>
    </div>

    <div class="__documentation__card__description__" title="Description">
        <div class="description" data-description="{{ $Board->description }}">
            {{ $Board->description }}
        </div>
    </div>

    <div class="__documentation__card__author__">
        Published at <time data-time="{{date('d/m/Y',strtotime($Board->published_at))}}" data-edit="{{$Board->edit_at}}" data-published="{{$Board->published_at}}" title="Published at">
            &nbsp; {{date('d/m/Y',strtotime($Board->published_at))}}</time>, by <span class="author" data-author="{{ $Board->author }}" title="Author">&nbsp;{{ $Board->author }}</span>.
    </div>

    <div class="__documentation__card__download__" data-documentation="{{ $Board->documentationLink }}" title="Download this documentation">
        <a href="{{ $Board->documentationLink }}">
            <span> <i class="fa-solid fa-arrow-down-long"></i> Download</span>
            <div class="__documentation__card__download__animation__">
                <div class="__documentation__card__download__animation-bar"></div>
            </div>
        </a>
    </div>

</div>
