<section id="__spoilerBoard" class="section __spoiler__board__">
    @component('components.underline-title')
        @slot('title')
            {{ __('titles.resources') }}
        @endslot
    @endcomponent

    <div class="__board__cards__">
        @foreach ($resources as $resource)
            @include('components.resource')
        @endforeach
    </div>

    @include('components.more', ['to' => '/resources'])
</section>