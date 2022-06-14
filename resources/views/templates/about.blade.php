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

<div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="1000" height="1450" id="gmap_canvas" src="https://maps.google.com/maps?q=%20All%C3%A9e%20des%20Marquises%20Strasbourg&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
        <style>.mapouter{position:relative;text-align:right;height:1450px;width:1000px;}</style>
        <style>.gmap_canvas {overflow:hidden;background:none!important;height:450px;width:600px;}</style>
    </div>
</div>

@stop

@section('footer')

    <script src="{{ url('js/about-me.js') }}"></script>

@endsection