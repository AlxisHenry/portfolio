@extends('layouts.app')

@section('content')
    <style>
    .container {
	    display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
    }
    .container h1 {
        margin-top: 80px;
        font-size: 2rem;
        color: var(--color-text);
    }
    </style>
    <div class="container">
		<img src="{{ url("/assets/svg/errors/404.svg") }}" alt="Page not found...">
		<h1>Sorry, we couldn't find what you were looking for...</h1>
	</div>
@stop
