
@component('components.underline-title')
    @slot('Title')
        News
    @endslot
@endcomponent

<div class="__cards__" data-aos="fade-right">

    @foreach($spoiler_cards as $card)

        @include('components.news')

    @endforeach

</div>

@include('components.more', ['to' => '/news'])