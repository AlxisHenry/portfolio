@extends('layouts.app')

@section('content')
    <section class="__legals__">
        @component('components.underline-title')
            @slot('title')
                {{ __('Legals') }}
            @endslot
        @endcomponent
        <div class="__legals__content__">
            {!! __('legals.content',[
                "today" => $today,
                "updated_at" => $updated_at,
            ]) !!}
        </div>
    </section>
    @include('sections.contact')
@endsection