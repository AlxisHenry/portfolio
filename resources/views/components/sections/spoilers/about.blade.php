@component('components.underline-title')
    @slot('Title')
        about me
    @endslot
@endcomponent

<div class="__about__card__" data-aos="fade-right">

        <div class="__about__">

            <div class="_about_descript_">

                <comment style="font-size: 16px;">&lt;/&gt;</comment>

                    Hi, I'm Henry Alexis, junior web developer since <span class="years">2022</span>, based in Strasbourg, France <img alt="" src="https://cdn-icons-png.flaticon.com/512/197/197560.png" width="20">
                    I'm currently attending a 2-year high  vocational sandwich course at the <a data-aos="zoom-in" href="https://www.ccicampus.fr/" rel="noreferrer nofollow">CCI Campus</a> of Strasbourg vocational sandwich course to become a web developer.
                    Thanks to this internship I feel I have developed some <a href="/about">skills</a>. After my diploma, I will continue my studies with a license Application Developer Designer.
                    Therefore I'm looking for a sandwich course starting in 2023. My dream is to make my passion my job.

                <comment style="font-size: 16px;">&lt;/&gt;</comment>

            </div>

            <div class="_about_contact">

                <div>
                    <div>
                        <a href="https://www.linkedin.com/in/alexishenry03/" rel="noreferrer nofollow">
                            <img class="test" src="{{ url('assets/svg/contacts/linkedin.svg') }}" alt="Linkedin" title="Linkedin" width="24">
                        </a>
                        <a href="https://www.linkedin.com/in/alexishenry03/" rel="noreferrer nofollow">
                            <span>alexishenry03</span>
                        </a>
                    </div>
                    <div>
                        <a class="to-contact-form">
                            <img class="test" src="{{ url('assets/svg/contacts/mail.svg') }}" alt="Mail" title="Mail" width="20">
                        </a>
                        <a class="to-contact-form">
                            <span>alexis.henry150357@gmail.com</span>
                        </a>
                    </div>
                    <div>
                        <a href="https://github.com/AlxisHenry03" rel="noreferrer nofollow">
                            <img class="test" src="{{ url('assets/svg/contacts/github-blue.svg') }}" alt="Github" title="Github" width="24">
                        </a>
                        <a href="https://github.com/AlxisHenry" rel="noreferrer nofollow">
                            <span>@AlxisHenry</span>
                        </a>
                    </div>
                    <div>
                        <a href="https://wakatime.com/@AlxisHenry" rel="noreferrer nofollow">
                            <img class="test" src="{{ url('assets/svg/contacts/wakatime.svg') }}" alt="Wakatime" title="Wakatime" width="20">
                        </a>
                        <a href="https://wakatime.com/@AlxisHenry" rel="noreferrer nofollow">
                            <span>@AlxisHenry</span>
                        </a>
                    </div>
              </div>

            </div>


        </div>

</div>

@include('components.more', ['to' => '/about'])
