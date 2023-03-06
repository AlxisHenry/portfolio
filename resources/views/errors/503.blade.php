@extends('layouts.app')

@section('content')
    <style>
        .container {
            height: 75vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container h1 {
            margin-top: 80px;
            font-size: 2rem;
            color: var(--color-text);
        }
        .container img {
            width: 100%;
            max-width: 500px;
        }
    </style>
    <div class="container">
        <div class="wrapper">
            <img src="{{ url("/assets/svg/errors/503.svg") }}" style="height: 500px;" alt="Website in maintenance...">
            <h1>Sorry, the website is in maintenance...</h1>
        </div>
    </div>
@stop
