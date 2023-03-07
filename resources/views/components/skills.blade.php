<div class="skill">
    <div class="skill-part">
        @if(App\Helpers\Language::match($skill))
            <a href="{{ route("languages.show", ["name" => $skill]) }}">
        @endif
            <img title="{{ ucfirst($skill) }}" src="{{ asset("assets/svg/skills/$svg.svg") }}"
            alt="Présentation de mes compétences : {{ $skill }}">
        @if(App\Helpers\Language::match($skill))
            </a>
        @endif
    </div>
</div>
