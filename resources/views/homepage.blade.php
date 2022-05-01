<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio - H. Alexis</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="icon" href="{{ url('assets/images/favicon.png') }}" />
</head>
<body>

<nav class="__navbar__">

    <button class="burger-button" type="button" role="button" aria-label="open/close navigation"><i></i></button>


        <div class="burger-element primary-navbar">

           <a href=""> <div class="nav-content"><span class="nav-title">Projects</span></div> </a>
            <div class="nav-content"><span class="nav-title">V</span></div>

        </div>

        <div class="burger-element secondary-navbar">

            <div class="nav-content"><span class="nav-title">Veille</span></div>
            <div class="nav-content"><span class="nav-title">About me</span></div>

        </div>

</nav>

</body>

<script src="{{ url('js/app.js') }}"></script>

</html>
