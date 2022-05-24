@component('components.underline-title')
    @slot('Title')
        Board
    @endslot
@endcomponent

<div class="__cards__" data-aos="fade-left">

    @foreach($spoiler_cards as $card)

        @include('components.news')

    @endforeach

</div>

@include('components.more', ['to' => '/board'])