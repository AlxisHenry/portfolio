<div class="__documentation__card__">

    <div class="__documentation__card__title__">
        <span class="title">{{ $Board->title }}</span>
    </div>

    <div class="__documentation__card__description__">
        <div class="description">
            {{ $Board->description }}
        </div>
    </div>

    <div class="__documentation__card__author__">
        Published at <time data-time="{{date('d/m/Y',strtotime($Board->published_at))}}" data-edit="{{$Board->edit_at}}" data-published="{{$Board->published_at}}">
            &nbsp; {{date('d/m/Y',strtotime($Board->published_at))}}</time>, by <span class="author">&nbsp;{{ $Board->author }}</span>.
    </div>

    <div class="__documentation__card__download__">
        <a href="{{ $Board->documentationLink }}">
            <span> <i class="fa-solid fa-arrow-down-long"></i> Download</span>
            <div class="__documentation__card__download__animation__">
                <div class="__documentation__card__download__animation-bar"></div>
            </div>
        </a>
    </div>

</div>
