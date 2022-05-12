@include('__header__')
@include('__navbar__clean__')

<section class="__spoiler__cards__ __keywords__cards__">

    <div class="__research__">Keyword : {{ $KEYWORD }}</div>

    <div class="__cards__">

        @foreach($CORRESPONDING_KEYWORD_ARTICLE as $card)

            @include('__card__')

        @endforeach

    </div>

</section>

@include('__footer__')