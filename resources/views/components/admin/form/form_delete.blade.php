<form method="POST"
      data-id="{{$data->identifier}}"
      class="{{ $button ? 'delete-form' : '' }}"
      action="/admin/{{$view}}/{{$data->identifier}}/delete">

    @csrf

    <input type="hidden" value="{{$data->identifier}}">

    @if($button)

        <button class="delete-form-submit" data-id="{{$data->identifier}}" data-action="{{$view}}">
            <span>delete</span>
            <i class="fa-solid fa-trash"></i>
        </button>

    @else

    <button type="submit" data-id="{{$data->identifier}}" data-action="{{$view}}">
        <i class="fa-solid fa-trash"></i>
    </button>

    @endif

</form>