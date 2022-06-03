@component('components.cards')

    @slot('MainTitle')
    @endslot

    @slot('Image')

        <img src="{{ url('assets/images/gs-snipe-it.png') }}" style="width: 250px" alt="Installation & Configuration SNIPE-IT" class="">

    @endslot

    @slot('Title', 'Snipe-IT Installation')

    @slot('Description')

        Création d'un portfolio à l'aide d'HTML, CSS et Javascript

    @endslot

    @slot('GithubLink', 'https://github.com/AlxisHenry/Snipe-IT')

    @slot('Languages')
        <a href="/language/shell">
                                <span class="_project_language">
                                    Shell
                                </span>
        </a>
        <a href="/language/laravel">
                                <span class="_project_language">
                                    Laravel
                                </span>
        </a>
    @endslot

    @slot('Project', '/projects/snipe-it')

@endcomponent


