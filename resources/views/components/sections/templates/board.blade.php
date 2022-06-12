<section id="__board" class="__main__board__ layout-maxed">

    @component('components.underline-title')
        @slot('Title')
            Resources
        @endslot
    @endcomponent

    <div class="__main__board__cards__">

        @foreach($Boards as $Board)
            @include('components.board-cards')
        @endforeach

    </div>

</section>
