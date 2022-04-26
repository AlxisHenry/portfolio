<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio</title>

    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="icon" href="{{ url('assets/images/favicon.png') }}" />

</head>
<body>



<button class="burger-button" type="button" role="button" aria-label="open/close navigation"><i></i></button>

<nav class="burger-element menu-navigation">

    <div class="nav-content"><span class="nav-title">Qui suis-je ?</span></div>
    <div class="nav-content"><span class="nav-title">Mes projets</span></div>
    <div class="nav-content"><span class="nav-title">Mes projets2</span></div>
    <div class="nav-content"><span class="nav-title">Mes projets3</span></div>

</nav>


</body>

<script src="{{ url('js/app.js') }}"></script>

</html>
