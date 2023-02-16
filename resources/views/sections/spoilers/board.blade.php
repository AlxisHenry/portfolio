<section id="__spoilerBoard" class="section __spoiler__board__">
    @component('components.underline-title')
        @slot('Title')
            Resources
        @endslot
    @endcomponent

    <div class="__board__cards__">
        @foreach ($boards as $board)
            @include('components.board-cards')
        @endforeach
    </div>

    @include('components.more', ['to' => '/resources'])
</section>