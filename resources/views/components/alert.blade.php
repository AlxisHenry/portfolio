<div class="alert-wrapper alert-{{ $type }}">
    <div class="alert-title title-{{ $type }}">
        {{ $title }}
    </div>
    <div class="alert-content">
        {{ $content }}
    </div>
    <div class="alert-close"></div>
</div>
<script>
    setTimeout(() => {
        document.querySelector('.alert-wrapper').classList.add('remove-alert');
    }, {{ $delay }});
    setTimeout(() => {
        document.querySelector('.alert-wrapper').remove();
    }, {{ $delay }} + 100);
</script>
