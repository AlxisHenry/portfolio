
<h1>News</h1>

<div class="__cards__">

    @foreach($spoiler_cards as $card)

        @include('components.news')

    @endforeach

</div>

@include('components.more', ['to' => '/news'])