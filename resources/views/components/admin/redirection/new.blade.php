<div class="add-new-{{$view}}">
    <form method="POST" action="/admin/{{$view}}/new">
        @csrf
        <button type="submit" data-action="new" data-category="{{$view}}">
            <i class="fa-solid fa-plus"></i>
        </button>
    </form>
</div>