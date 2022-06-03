@component('components.cards')

    @slot('MainTitle')
    @endslot

    @slot('Image')

        <img src="{{ url('assets/images/gs-timken.png') }}" alt="Timken Inventory Management" class="">

    @endslot

    @slot('Title', 'Inventory Management')

    @slot('Description')

        Durant mon alternance chez Timken, j'ai réalisé
        une interface web permettant la gestion du stock de Colmar.

    @endslot

    @slot('GithubLink', 'https://github.com/AlxisHenry/stock-interface-app')

    @slot('Languages')

        <a href="/language/php">
                                <span class="_project_language">
                                    PHP
                                </span>
        </a>
        <a href="/language/javascript">
                                <span class="_project_language">
                                    Javascript
                                </span>
        </a>
        <a href="/language/powershell">
                                <span class="_project_language">
                                    Powershell
                                </span>
        </a>

    @endslot

    @slot('Project', '/projects/timken')

@endcomponent


