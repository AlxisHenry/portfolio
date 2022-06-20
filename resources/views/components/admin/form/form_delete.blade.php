<form method="POST"
      data-id="{{$data->identifier}}"
      action="/admin/{{$view}}">
    @csrf
    <input type="hidden" value="{{$data->identifier}}">
    <button type="submit"
            data-id="{{$data->identifier}}"
            data-action="{{$view}}">
        <i class="fa-solid fa-trash"></i>
    </button>
</form>