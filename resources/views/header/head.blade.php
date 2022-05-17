<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
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
    <meta property="og:image" content="{{ url('assets/icons/favicon.ico') }}"/>
    <meta property="og:url" content="{{ Request::url() }}"/>
    <meta property="og:site_name" content="alexishenry.eu">
    <meta property="og:description" content="{{ $og_description ?? 'Portfolio Projects/Board/Home - Henry Alexis' }}"/>
    <meta property="og:video" content="{{ url('assets/cafe.gif') }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:locale:alternate" content="fr_FR">
    <title>{{ $title ?? 'Portfolio - Henry Alexis' }}</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/icons/favicon.ico') }}" sizes="16x16">
    <link rel="icon" href="{{ url('assets/icons/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" href="{{ url('assets/icons/favicon-48x48.png') }}" sizes="48x48">
    <link rel="icon" href="{{ url('assets/icons/favicon-96x96.png') }}" sizes="96x96">
    <link rel="icon" href="{{ url('assets/icons/favicon-144x144.png') }}" sizes="144x144">
    <link rel="apple-touch-icon" href="{{ url('assets/icons/touch-favicon-244x244.png') }}">
    <link rel="manifest" href="{{ url('assets/icons/manifest.json') }}">
    <link rel="mask-icon" href="{{ url('assets/icons/favicon.ico') }}" color="#009af6">
</head>
<body>

@include('header.progress')

@include('header.cursor')