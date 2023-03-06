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
      justify-content: center;
      margin-right: 20px;
      margin-left: 20px
    }
    .container h1 {
      margin-top: 80px;
      font-size: 2rem;
      color: var(--color-text);
      text-align: center
    }
    .container img {
      width: 100%;
      max-width: 400px;
    }
  </style>
  <div class="container">
    <div class="wrapper">
      <img src="{{ url("/assets/svg/errors/403.svg") }}" alt="Page not found...">
      <h1>Oops, you don't have permission to access this page.</h1>
    </div>
	</div>
@stop
