@include('__header__')
@include('__navbar__')

<section class="__spoiler__cards__ test layout-maxed">

    <div class="__cards__">

        @foreach($TECH_CARDS as $card)

            @include('__card__')

        @endforeach

    </div>

    <div class="__cards__">

        @foreach($JURI_CARDS as $card)

            @include('__card__')

        @endforeach

    </div>

</section>

@include('__footer__')
