<div class="loader" @if (!$status) style="flex-direction: column;" @endif>
    <div class="circles">
        <div class="circle r1"></div>
        <div class="circle r2"></div>
        <div class="circle r3"></div>
    </div>
    @if (!$status)
        <div class="infinite-loader-error-500" style="text-align: center">
            An error has occurred. Try again later.
        </div>
    @endif
</div>
