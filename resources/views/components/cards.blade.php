<div class="__projects__">

    <div class="__project__card__ _project-nb-{{$project->identifier}}_" data-id="{{$project->identifier}}" data-aos="fade-up">

        <div class="_this_project_">

            <figure class="unselectable _project_image_">
                <img src="{{ $project->linkImage }}" alt="{{$project->title}}" class="">
            </figure>

            <div class="_project_content_">

                <h1>{{ $project->title }}</h1>

                <div class="_little_description_">
                    {{ $project->description }}
                </div>

                <div class="_github_link_">
                    <a target="_blank" href="{{ $project->GithubLink }}" rel="noreferrer nofollow">
                        Available on Github
                    </a>
                </div>

                <div class="_language_use_">

                    @foreach(explode(',', $project->languages) as $language)

                        <a href="/language/{{strtolower($language)}}">
                                <span class="_project_language">
                                    {{ ucfirst($language) }}
                                </span>
                        </a>

                    @endforeach

                </div>

                @include('components.about', ['link' => $project->url_name])

            </div>

        </div>

    </div>

</div>