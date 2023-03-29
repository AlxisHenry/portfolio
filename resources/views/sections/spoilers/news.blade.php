<section id="__spoilerCards" class="section __spoiler__cards__">
    @component('components.underline-title')
        @slot('title')
        {{ __('titles.news') }}
        @endslot
    @endcomponent

    <div class="__cards__" data-aos="fade-right">
        @foreach ($news as $card)
            @include('components.news')
        @endforeach
    </div>

    @include('components.more', ['to' => '/news'])
</section>