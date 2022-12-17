@component('components.underline-title')
    @slot('Title')
        about me
    @endslot
@endcomponent

<div class="__about__card__" data-aos="fade-right">
    <div class="__about__">
        <div class="_about_descript_">
            <comment style="font-size: 16px;">&lt;/&gt;</comment>
            Hi, I'm Henry Alexis, junior web developer since <span class="years">2022</span>, based in Strasbourg,
            France <img alt="" src="https://cdn-icons-png.flaticon.com/512/197/197560.png" width="20">
            I'm currently attending a 2-year work study program at <a data-aos="zoom-in" href="https://www.ccicampus.fr/"
                rel="noreferrer nofollow">CCI Campus</a> in Strasbourg to become a web developer.
            Thanks to this internship I feel I have developed some <a href="/about">skills</a>. After my diploma, I
            will continue my studies with a license Application Developer Designer.
            Therefore I'm looking for a sandwich course starting in 2023. My dream is to make my passion my job.
            <comment style="font-size: 16px;">&lt;/&gt;</comment>
        </div>
        <div class="_about_contact">
            <div>
                <div>
                    <a target="_blank" href="https://www.linkedin.com/in/alexishenry03/" rel="noreferrer nofollow">
                        <img class="test" src="{{ url('assets/svg/contacts/linkedin.svg') }}" alt="Linkedin"
                            title="Linkedin" width="24">
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/in/alexishenry03/" rel="noreferrer nofollow">
                        <span class="copy-this">alexishenry03</span>
                    </a>
                </div>
                <div>
                    <a class="" href="{{ route('contact.index') }}"">
                        <img class="test" src="{{ url('assets/svg/contacts/mail.svg') }}" alt="Mail"
                            title="Mail" width="20">
                    </a>

                    <a class="" href="{{ route('contact.index') }}">
                        <span class="copy-this">alexis.henry150357@gmail.com</span>
                    </a>
                </div>
                <div>
                    <a target="_blank" href="https://github.com/AlxisHenry" rel="noreferrer nofollow">
                        <img class="test" src="{{ url('assets/svg/contacts/github-blue.svg') }}" alt="Github"
                            title="Github" width="24">
                    </a>
                    <a target="_blank" href="https://github.com/AlxisHenry" rel="noreferrer nofollow">
                        <span class="copy-this">@AlxisHenry</span>
                    </a>
                </div>
                <div>
                    <a target="_blank" href="https://wakatime.com/@AlxisHenry" rel="noreferrer nofollow">
                        <img class="test" src="{{ url('assets/svg/contacts/wakatime.svg') }}" alt="Wakatime"
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
