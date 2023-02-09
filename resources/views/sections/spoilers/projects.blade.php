<section id="__spoilerProjects" class="section __spoiler__projects__">
    @component('components.underline-title')
        @slot('Title')
            Projects
        @endslot
    @endcomponent

    <div class="_projects_cards_">
        @foreach ($Projects as $project)
            @include('components.cards')
        @endforeach
    </div>

    @include('components.more', ['to' => '/projects'])
</section>