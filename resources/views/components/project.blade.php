<div class="__projects__">
    <div class="__project__card__ _project-nb-{{ $project->id }}_"
        data-aos="fade-up">
        <div class="_this_project_">
            <figure class="unselectable _project_image_">
                <img src="{{ $project->image }}" alt="{{ $project->title }}" class="">
            </figure>
            <div class="_project_content_">
                <h1>{{ $project->title }}</h1>
                <div class="_little_description_">
                    {{ $project->description }}
                </div>
                @if($project->github)
                    <div class="_github_link_">
                        <a target="_blank" href="{{ $project->github }}" rel="noreferrer nofollow" class="main-link">
                            {{ __('labels.availableOnGithub') }}
                        </a>
                    </div>
                @endif
                <div class="_language_use_">
                    @foreach (explode(',', $project->languages) as $language)
                        <a href="/language/{{ strtolower($language) }}" class="main-link">
                            <span class="_project_language">
                                {{ ucfirst($language) }}
                            </span>
                        </a>
                    @endforeach
                </div>
                @include('components.about', [
                    'link' => $project->link,
                    'blank' => true,
                ])
            </div>
        </div>
    </div>
</div>
