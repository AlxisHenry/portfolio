<div class="object-deleted" data-type="{{$view}}" data-action="{{$action}}" data-id="{{$data->identifier ?? $data->id }}">

    <span>
        <span class="target">{{ucfirst($view)}} #{{$data->identifier ?? $data->id }}</span>,
        has been successfully
        <span>deleted</span>.
    </span>

    <a href="{{route('administration.view')}}">Back to {{ucfirst($view)}}</a>

</div>