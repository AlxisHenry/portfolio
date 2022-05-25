@component('components.underline-title')
    @slot('Title')
        Board
    @endslot
@endcomponent

<div class="__board__cards__" data-aos="fade-left">

    @foreach($spoiler_cards as $card)

        @include('components.news')

    @endforeach

</div>

@include('components.more', ['to' => '/board'])