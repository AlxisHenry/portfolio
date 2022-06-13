@extends('layouts.app')

@section('content')

<section id="__ContactForm" class="homepage-section __contact__form__">

    @component('components.underline-title')
        @slot('Title')
            Contact
        @endslot
    @endcomponent

    @if(Session::has('success'))

        @include('components.contact-form-success')

    @else

        @include('components.contact-form')

    @endif

</section>

@stop