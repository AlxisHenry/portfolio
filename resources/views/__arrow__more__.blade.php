<div class="__page__more__">

    <div class="__page__more__arrow">

        <a {{ $next != 'none' ? "href=/$next" : ''}}>
            <div class="arrow {{ $next === 'none' ? 'arrow-disabled' : 'next-to-' . $next}}"></div>
        </a>

    </div>

</div>