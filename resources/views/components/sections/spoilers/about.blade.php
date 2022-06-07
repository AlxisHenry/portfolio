@component('components.underline-title')
    @slot('Title')
        about me
    @endslot
@endcomponent

<div class="__about__card__" data-aos="fade-right">

        <div class="__about__">

            <span class="_about_descript_">

                <comment style="font-size: 22px;">&lt;/&gt;</comment>

                    Hi, I'm Henry Alexis, Web Developer Junior since <span class="years">2022</span>, based in Strasbourg, France.
                    I'm currently student at the <a data-aos="zoom-in" href="https://www.ccicampus.fr/" rel="noreferrer nofollow">CCI Campus</a> of Strasbourg.
                    My work at the <a data-aos="zoom-in" href="https://www.timken.com/fr/" rel="noreferrer nofollow">Timken Company</a> allows me to further my
                    knowledge in development.<span>&nbsp;My goal is to make my passion my job.</span>

                <comment style="font-size: 22px;">&lt;/&gt;</comment>

            </span>

        </div>

</div>

@include('components.more', ['to' => '/about'])
