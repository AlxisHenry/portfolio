<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&family=Libre+Franklin:wght@200&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Portfolio Henry Alexis BTS SIO Web Developer"/>
    <meta name="keywords" content="powershell, bash, linux, sysadmin, devops, symfony, freelance, github,geek, windows,veille technologique, veille juridique, technologie, juridique, scrapping, laravel 8, grafikart, mangaflix, learn dev, portfolio, web, developer, laravel, php, python, html, css, webdeveloper, bts, sio, services, informatique, organisations, strasbourg, france, modern, fiver, profesional, henry, alexis, network, system, reseau, systeme, portfolio bts, bts-sio portfolio, cci campus bts sio, cci campus strasbourg, cci campus, full stack, front end, back end, javascript, Alexis Henry, Alexis, Henry"/>
    <meta name="googlebot" content="index,follow,nosnippet"/>
    <meta name="robots" content="index, follow"/>
    <meta name="copyright" content="© {{ date("Y") }} Alexis Henry. All Rights Reserved" />
    <meta property="og:type" content="portfolio"/>
    <meta property="og:title" content="{{ $title ?? 'Portfolio - Henry Alexis' }}"/>
    <meta property="og:image" content="{{ url('assets/icons/favicon-16x16.ico') }}"/>
    <meta property="og:url" content="{{ Request::url() }}"/>
    <meta property="og:site_name" content="alexishenry.eu">
    <meta property="og:description" content="{{ $og_description ?? 'Portfolio Projects/Board/Home - Henry Alexis' }}"/>
    <meta property="og:video" content="{{ url('assets/cafe.gif') }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:locale:alternate" content="fr_FR">
    <title>{{ $title ?? 'Portfolio - Henry Alexis' }}</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('assets/icons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ url('assets/icons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ url('assets/icons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="{{ url('assets/icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
</head>

@if(Route::currentRouteName() === "home" || Route::currentRouteName() === 'home.contact')
    <body class="loader-body">
    @include('layouts.loader')
@else
    <body>
@endif

@include('components.scrollbar')
@include('components.cursor')
