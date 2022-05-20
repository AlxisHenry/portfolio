@component('components.underline-title')
    @slot('Title')
        Projects
    @endslot
@endcomponent

<div class="_projects_cards_">

    @include('components.projects.timken')

    @include('components.projects.sport')

</div>

@include('components.more', ['to' => '/projects'])

