@extends('layouts.app')

@section('content')
    @component('components.pop-up')
        @slot('Icon')
            <i class="fa-solid fa-check"></i>
        @endslot
        @slot('Alert')
            Copied to the clipboard.
        @endslot
    @endcomponent
    @include('sections.spoilers.about', [
        "customCss" => "margin-top: 0;",
        "animation" => false
    ])
    <section id="__Skills" class="section">
        @component('components.underline-title')
            @slot('Title')
                Skills
            @endslot
        @endcomponent
        <div class="contain-all-skills">
            <div class="skills-navbar">
                <div class="skill-category selected" data-category="tech">
                    Techs
                    <span></span>
                </div>
                <div class="skill-category" data-category="front">
                    Front
                    <span></span>
                </div>
                <div class="skill-category" data-category="back">
                    Back
                    <span></span>
                </div>
            </div>
            <div class="all-skills">
                <div class="container tech-skills">
                    <div class="category-skills">
                        @foreach ([...$chunks[0], ...$chunks[1]] as $skill)
                            @include('components.skills', ['svg' => $skill, 'timing' => $animateTiming + 120])
                        @endforeach
                        <div class="category-skills-parts">
                            @foreach (array_slice($chunks, 2) as $chunk)
                                <div class="part" style="display: none;">
                                    @foreach ($chunk as $skill)
                                        @include('components.skills', ['svg' => $skill, 'timing' => $animateTiming + 120])
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @if (count($chunks) > 1)
                        <div class="show-more-skills">
                            <div class="__more__button__">
                                <a class="__more__button-action">
                                    <span class="__more__button-text">More</span>
                                </a>
                            </div>                        
                        </div>
                    @endif
                </div>
                <div class="container front-skills hidden">
                    <div class="category-skills">
                        @foreach ($skills['front'] as $skill)
                            @include('components.skills', ['svg' => $skill, 'timing' => $animateTiming + 120])
                        @endforeach
                    </div>
                </div>
                <div class="container back-skills hidden">
                    <div class="category-skills">
                        @foreach ($skills['back'] as $skill)
                            @include('components.skills', ['svg' => $skill, 'timing' => $animateTiming + 120])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="__ContactForm" class="section __contact__form__">
        @component('components.underline-title')
            @slot('Title')
                Contact
            @endslot
        @endcomponent
        @include('components.contact-form')
    </section>
    <section id="__MoreInformations" class="section">
        <div class="contain-contacts left-part" data-aos="fade-right">
            <div>
                <a target="_blank" href="https://www.linkedin.com/in/alexishenry03/" rel="noreferrer nofollow">
                    <img class="test" src="{{ url('assets/svg/contacts/linkedin.svg') }}" alt="Linkedin" title="Linkedin"
                        width="24">
                </a>
                <a target="_blank" href="https://www.linkedin.com/in/alexishenry03/" rel="noreferrer nofollow">
                    <span class="copy-this">alexishenry03</span>
                </a>
            </div>
            <div>
                <a class="" href="{{ route('contact.index') }}">
                    <img class="test" src="{{ url('assets/svg/contacts/mail.svg') }}" alt="Mail" title="Mail"
                        width="20">
                </a>
                <a class="" href="{{ route('contact.index') }}">
                    <span class="copy-this">alexis.henry150357@gmail.com</span>
                </a>
            </div>
            <div>
                <a target="_blank" href="https://github.com/AlxisHenry" rel="noreferrer nofollow">
                    <img class="test" src="{{ url('assets/svg/contacts/github-blue.svg') }}" alt="Github" title="Github"
                        width="24">
                </a>
                <a target="_blank" href="https://github.com/AlxisHenry" rel="noreferrer nofollow">
                    <span class="copy-this">@AlxisHenry</span>
                </a>
            </div>
            <div>
                <a target="_blank" href="https://wakatime.com/@AlxisHenry" rel="noreferrer nofollow">
                    <img class="test" src="{{ url('assets/svg/contacts/wakatime.svg') }}" alt="Wakatime" title="Wakatime"
                        width="20">
                </a>
                <a target="_blank" href="https://wakatime.com/@AlxisHenry" rel="noreferrer nofollow">
                    <span class="copy-this">@AlxisHenry</span>
                </a>
            </div>
        </div>
        <div class="contain-map right-part" data-aos="fade-left">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d784.4613127826574!2d7.764601838343562!3d48.598303247727976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c88acb16fd21%3A0x54d59286dbf255d6!2s10%20All.%20des%20Marquises%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1655580714812!5m2!1sfr!2sfr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@stop

@section('footer')
    @vite('resources/js/pages/about-me.js')
@endsection
