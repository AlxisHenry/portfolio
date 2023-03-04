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
		<img src="{{ url("/assets/svg/errors/503.svg") }}" style="height: 500px;" alt="Website in maintenance...">
        <h1>Sorry, the website is in maintenance...</h1>
    </div>
@stop
