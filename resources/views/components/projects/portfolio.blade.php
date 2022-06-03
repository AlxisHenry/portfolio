@component('components.cards')

    @slot('MainTitle')
    @endslot

    @slot('Image')

        <img src="{{ url('assets/images/gs-portfolio.png') }}" alt="Laravel Portfolio Development" class="">

    @endslot

    @slot('Title', 'Portfolio')

    @slot('Description')

        Création d'un portfolio basé sur Laravel

    @endslot

    @slot('GithubLink', 'https://github.com/AlxisHenry/CCI-2021-PORTFOLIO')

    @slot('Languages')

        <a href="/language/php">
                                <span class="_project_language">
                                    Laravel
                                </span>
        </a>
        <a href="/language/javascript">
                                <span class="_project_language">
                                    PHP
                                </span>
        </a>
        <a href="/language/powershell">
                                <span class="_project_language">
                                    Javascript
                                </span>
        </a>
        <a href="/language/scss">
                                <span class="_project_language">
                                    SCSS
                                </span>
        </a>

    @endslot

    @slot('Project', '/projects/portfolio')

@endcomponent


