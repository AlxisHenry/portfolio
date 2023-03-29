@extends('layouts.app')

@section('content')
    <section class="__legals__">
        <div class="__legals__content__">
            {!! __('legals.content',[
                "today" => $today,
                "updated_at" => $updated_at,
            ]) !!}
        </div>
    </section>
    @include('sections.contact')
@endsection