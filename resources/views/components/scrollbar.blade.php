<div class="__loading__bar__">
    <div class="__state__indicator__"></div>
</div>

<style>
    .__loading__bar__ {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        background-color: #242B40;
        width: 3px;
        z-index: 120;

    }
    .__loading__bar__ .__state__indicator__ {
        animation: All ease-in 300ms;
        position: relative;
        height: 0;
        top: 0;
        left: 0;
        width: 3px;
        background-color: #52B3D9;
    }
</style>