<a href='/{{ $to }}'
    class="@if ($navbar === 'null') @elseif($navbar === $to) nav-active @else nav-disabled @endif">
    <div class="nav-content">
        <span class="nav-title" data-title={{$title}}>
            {{ __("titles.$title") }}
        </span>
        <div class="hover_loading_nav"></div>
    </div>
</a>
