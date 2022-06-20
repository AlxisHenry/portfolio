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

<section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d784.4613127826574!2d7.764601838343562!3d48.598303247727976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c88acb16fd21%3A0x54d59286dbf255d6!2s10%20All.%20des%20Marquises%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1655580714812!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>

@stop

@section('footer')

    <script src="{{ url('js/about-me.js') }}"></script>

@endsection