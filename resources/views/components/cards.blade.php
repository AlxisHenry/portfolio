<div class="__projects__">

    {{ $MainTitle }}

    <div class="__project__card__ _project-nb-1_" data-aos="fade-right">

        <div class="_this_project_">

            <figure class="unselectable _project_image_">
                {{ $Image }}
            </figure>

            <div class="_project_content_">

                <h1>{{ $Title }}</h1>

                <div class="_little_description_">
                    {{ $Description }}
                </div>

                <div class="_github_link_">
                    <a target="_blank" href="{{ $GithubLink }}" rel="noreferrer nofollow">
                        Available on Github
                    </a>
                </div>

                <div class="_language_use_">
                    {{ $Languages }}
                </div>

                @include('components.about', ['link' => $Project])

            </div>

        </div>

    </div>

</div>