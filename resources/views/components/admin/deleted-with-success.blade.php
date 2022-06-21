<div class="object-deleted" data-type="{{$view}}" data-action="{{$action}}" data-id="{{$data->identifier}}">

    <span>
        <span class="target">{{ucfirst($view)}} #{{$data->identifier}}</span>,
        has been successfully
        <span>deleted</span>.
    </span>

    <form method="POST" action="/admin/{{$view}}">

        <input type="hidden" name="id" value="{{$data->identifier}}">

        @csrf

        <button type="submit">
            Back to {{ucfirst($view)}}
        </button>

    </form>

</div>