
<div class="contain-back-arrow">

    <a {{ $back != 'none' ? "href=/$back" : ''}}>
        <div class="arrow {{ $back === 'none' ? 'arrow-disabled' : 'back-to-' . $back}}"></div>
    </a>

</div>
