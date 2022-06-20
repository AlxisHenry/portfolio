<form method="POST" action="/admin/{{$view}}/{{$data->identifier}}/{{$action}}" data-url-action="/admin/{{$view}}/{{$data->identifier}}/{{$action}}" data-action="{{$action}}" data-id="{{$data->identifier}}">

    @csrf

    <input type="hidden" name="id_verification" value="{{ $data->identifier }}">




    <input type="submit" value="Submit">

</form>