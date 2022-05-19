@component('components.cards')

    @slot('MainTitle')
    @endslot

    @slot('Image')

        <img src="{{ url('assets/images/gs-portfolio.png') }}" alt="Portfolio v1 HTML CSS & JAVASCRIPT" class="">

    @endslot

    @slot('Title', 'First Portfolio')

    @slot('Description')

        Création d'un portfolio à l'aide d'HTML, CSS et Javascript

    @endslot

    @slot('GithubLink', 'https://github.com/AlxisHenry/CCI-2021-PORTFOLIO/tree/v2.1.0')

    @slot('Languages')

        <a href="/home/language/HTML">
                                <span class="_project_language">
                                    HTML
                                </span>
        </a>
        <a href="/home/language/CSS">
                                <span class="_project_language">
                                    CSS
                                </span>
        </a>
        <a href="/home/language/Javascript">
                                <span class="_project_language">
                                    Javascript
                                </span>
        </a>
    @endslot

    @slot('Project', '/projects/portfolio')

@endcomponent


