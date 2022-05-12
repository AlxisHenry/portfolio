<a href='/{{ $to  }}' class="@if($navbar === 'null') @elseif($navbar === $to) nav-active @else nav-disabled @endif">

    <div class="nav-content">
        <span class="nav-title">{{ $title }}</span>
        <div class="hover_loading_nav"></div>
    </div>

</a>