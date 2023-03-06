<section id="__spoilerAbout" class="section __spoiler__about__" style="@isset($customCss) {{ $customCss }} @endif">
    @component('components.underline-title')
        @slot('title')
            about me
        @endslot
    @endcomponent
    <div class="__about__card__ aos-init" @if($animation ?? true) data-aos="fade-right" @endif>
        <div class="__about__">
            <div class="_about_descript_">
                <comment style="font-size: 18px;">&lt;/&gt;</comment>
                Hi, I'm Henry Alexis, junior developer since <span class="years">2022</span>, based in Strasbourg,
                France <img alt="" src="https://cdn-icons-png.flaticon.com/512/197/197560.png" width="20">
                I'm currently attending a 2-year work study program at <a data-aos="zoom-in" href="https://www.ccicampus.fr/"
                    rel="noreferrer nofollow">CCI Campus</a> in Strasbourg.
                Thanks to this internship I feel I have developed some <a href="/about">skills</a>. After my diploma, I
                will continue my studies with a Master's degree at <a href="https://www.epitech.eu/fr/ecole-informatique-strasbourg/">Epitech Technology</a> in Strasbourg.
                Therefore <span class="sandwich-course-resarch">I'm looking for a sandwich course starting in december 2023</span>. My dream is to make my passion my job.
                <comment style="font-size: 18px;">&lt;/&gt;</comment>
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
                Left click to be redirected to the link<br>
                Right click for copy to the clipboard
            </div>
        </div>
    </div>

    @include('components.more', ['to' => '/about'])
</section>