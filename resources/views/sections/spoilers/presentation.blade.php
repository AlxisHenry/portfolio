<section id="__homePresentation" class="__homepage__presentation__">
    <div class="__presentation__">
        <div class="__presentation__separator__"></div>
        <div class="__main__presentation__">
            <div class="__me__">
                <div class="name">
                    <p data-value='HENRY ALEXIS'><span> </span></p>
                </div>
                <div class="job">
                    <p data-value='{{__('titles.job')}}'><span> </span></p>
                </div>
                <div class="__language__">
                    @foreach ($languages as $lang)
                        {!! $lang !!}
                    @endforeach
                </div>
            </div>
            <div class="__main__asset__">
                <img src="{{ url('assets/me-light.svg') }}">
            </div>
        </div>
    </div>
</section>