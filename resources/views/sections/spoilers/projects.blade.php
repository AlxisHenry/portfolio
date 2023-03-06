<section id="__spoilerProjects" class="section __spoiler__projects__">
    @component('components.underline-title')
        @slot('title')
            Projects
        @endslot
    @endcomponent

    <div class="_projects_cards_">
        @foreach ($projects as $project)
            @include('components.project')
        @endforeach
    </div>

    @include('components.more', ['to' => '/projects'])
</section>