@component('components.underline-title')
    @slot('Title') Contact
    @endslot
@endcomponent

@if(Session::has('success'))

    @include('components.contact-form-success')

@else

    @include('components.contact-form')

@endif