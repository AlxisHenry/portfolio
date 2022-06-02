@extends('layouts.app')

@section('content')

<section class="__news__ test layout-maxed">

    <div class="__cards__categories__">

        @foreach($news as $card)

            @include('components.news')

        @endforeach

    </div>

</section>

@stop

@section('footer')

    <script src="{{ url('js/templates/news.js') }}"></script>

@endsection