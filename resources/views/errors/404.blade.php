@extends('layouts.app')

@section('content')
    <section class="error_section flex justify-center align-center" style="width: 100%; margin-top: -100px">
        <h1 class="text-center text-bigger text-bold text-36"> Sorry, we couldn't find what you were looking for...</h1>
        <h2 class="text-center text-italic text-24">A 404 error has occured</h2>
        <div class="error_gif flex align-center justify-center"> <img src="{{ url('assets/cafe.gif') }}" alt="Main Logo">
        </div>
    </section>
@stop
