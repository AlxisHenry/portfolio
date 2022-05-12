<div class="__cards__">

    @foreach($spoiler_cards as $card)

        @include('component.articles.card')

    @endforeach

</div>

@include('component.buttons.more', ['to' => '/news'])