<form method="POST"
      data-id="{{$data->identifier ?? $data->id}}"
      class="{{ $button ? 'delete-form' : '' }}"
      action="/admin/{{$view}}/{{$data->identifier ?? $data->id}}/delete">

    @csrf

    <input type="hidden" value="{{$data->identifier ?? $data->id}}">

    @if($button)

        <button class="delete-form-submit" data-id="{{$data->identifier ?? $data->id}}" data-action="{{$view}}">
            <span>delete</span>
            <i class="fa-solid fa-trash"></i>
        </button>

    @else

    <button type="submit" data-id="{{$data->identifier ?? $data->id}}" data-action="{{$view}}">
        <i class="fa-solid fa-trash"></i>
    </button>

    @endif

</form>