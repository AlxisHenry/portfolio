<div class="__presentation__">
    <div class="__presentation__separator__"></div>
    <div class="__main__presentation__">
        <div class="__me__">
            <div class="name">
                <p><span> </span></p>
            </div>
            <div class="job">
                <p><span> </span></p>
            </div>
            <div class="__language__">
                @foreach ($languages as $lang)
                    {!! $lang !!}
                @endforeach
            </div>
        </div>
        <div class="__main__asset__">
            <img src="{{ url('assets/cafe.gif') }}" alt="Computer" title="Computer" class="__asset__">
        </div>
    </div>
</div>
