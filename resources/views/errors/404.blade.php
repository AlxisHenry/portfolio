<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page not found - Henry Alexis</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="icon" href="{{ url('assets/images/favicon.png') }}" />
</head>
<body>

@include('__navbar__clean__')

<section class="__page_not_found__">

    <h1>Sorry, we can't find this page</h1>
    <h2>404 Error</h2>

</section>

@include('__footer__')