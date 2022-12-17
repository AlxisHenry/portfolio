<a href='/{{ $to }}'
    class="@if ($navbar === 'null') @elseif($navbar === $to) nav-active @else nav-disabled @endif">
    <div class="nav-content">
        <span class="nav-title">
            @foreach (str_split($title) as $letter)
                @if ($letter === ' ')
                    <span class="nav-title_letter">&nbsp;</span>
                @else
                    <span class="nav-title_letter">{{ $letter }}</span>
                @endif
            @endforeach
        </span>
        <div class="hover_loading_nav"></div>
    </div>
</a>
