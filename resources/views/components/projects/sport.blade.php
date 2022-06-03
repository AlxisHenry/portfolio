@component('components.cards')

    @slot('MainTitle')

    @endslot

    @slot('Image')

        <img src="{{ url('assets/images/gs-sport_addict.png') }}" alt="Timken Inventory Management" class="">

    @endslot

    @slot('Title', 'Sport Addict')

    @slot('Description')

        Durant mes études, il m'a été demandé de remettre en forme un site web. Cela à l'aide de langages front.

    @endslot

    @slot('GithubLink', 'https://github.com/AlxisHenry/Learn-CSS-Schlegel')

    @slot('Languages')

        <a href="/language/html">
                                <span class="_project_language">
                                    HTML
                                </span>
        </a>
        <a href="/language/css">
                                <span class="_project_language">
                                    CSS
                                </span>
        </a>
        <a href="/language/javascript">
                                <span class="_project_language">
                                    Javascript
                                </span>
        </a>

    @endslot

    @slot('Project', '/projects/sport-addict')

@endcomponent


