<section id="__spoilerAbout" class="section __spoiler__about__" style="@isset($customCss) {{ $customCss }} @endif">
    @component('components.underline-title')
        @slot('title')
            {{ __('titles.about') }}
        @endslot
    @endcomponent
    <div class="__about__card__ aos-init" @if ($animation ?? true) data-aos="fade-right" @endif>
        <div class="__about__">
            <div class="_about_descript_">
                {!! __('paragraphs.about') !!}
            </div>
            <div class="_about_contact">
                <div>
                    <div>
                        <a target="_blank" href="https://www.linkedin.com/in/alexishenry03/" rel="noreferrer nofollow">
                            <img class="test" src="{{ url('assets/svg/socials/linkedin.svg') }}" alt="Linkedin"
                                title="Linkedin" width="24">
                        </a>
                        <a target="_blank" href="https://www.linkedin.com/in/alexishenry03/" rel="noreferrer nofollow">
                            <span class="copy-this">alexishenry03</span>
                        </a>
                    </div>
                    <div>
                        <a class="" href="{{ route('contact.index') }}"">
                            <img class="test" src="{{ url('assets/svg/socials/mail.svg') }}" alt="Mail"
                                title="Mail" width="20">
                        </a>

                        <a class="" href="{{ route('contact.index') }}">
                            <span class="copy-this">alexis.henry150357@gmail.com</span>
                        </a>
                    </div>
                    <div>
                        <a target="_blank" href="https://github.com/AlxisHenry" rel="noreferrer nofollow">
                            <img class="test" src="{{ url('assets/svg/socials/github-blue.svg') }}" alt="Github"
                                title="Github" width="24">
                        </a>
                        <a target="_blank" href="https://github.com/AlxisHenry" rel="noreferrer nofollow">
                            <span class="copy-this">@AlxisHenry</span>
                        </a>
                    </div>
                    <div>
                        <a target="_blank" href="https://wakatime.com/@AlxisHenry" rel="noreferrer nofollow">
                            <img class="test" src="{{ url('assets/svg/socials/wakatime.svg') }}" alt="Wakatime"
                                title="Wakatime" width="20">
                        </a>
                        <a target="_blank" href="https://wakatime.com/@AlxisHenry" rel="noreferrer nofollow">
                            <span class="copy-this">@AlxisHenry</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="click-to-copy-indicator invisible">
                {!! __('labels.copyIndicator') !!}
            </div>
        </div>
    </div>
    @if ($more)
        @include('components.more', ['to' => '/about'])
    @else
        <div class="__more__button__"></div>
    @endif
</section>

@if ($scroll)
    @include('components.arrow-container', [
        'customCss' => 'margin-top: -160px; margin-bottom: 0;',
    ])
@endif