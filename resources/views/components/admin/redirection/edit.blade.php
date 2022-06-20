<form method="POST"
      data-id="{{$data->identifier}}"
      action="/admin/{{$view}}/{{$data->identifier}}/edit">
    @csrf
    <button type="submit"
            data-id="{{$data->identifier}}"
            data-action="{{$view}}">
        <i class="fa-solid fa-pen-to-square"></i>
    </button>
</form>
