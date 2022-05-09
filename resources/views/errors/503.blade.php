<?php
use Stichoza\GoogleTranslate\GoogleTranslate;
$Google = new GoogleTranslate();
$Google->setSource('fr');
$Google->setTarget('en');
?>

@include('__header__')

<section class="__page_not_found__ flex justify-center align-center" style="width: 100%;">

    <h1 class="text-center text-bigger text-bold text-36">Sorry the website is actually in maintenance.</h1>
    <h2 class="text-center text-italic text-24">{{ $Google->translate('Nous essayons de faire au plus vite...') }}</h2>

</section>

<div class="flex align-center justify-center" style="width: 100%; position: absolute; bottom: 0"> <img src="{{ url('assets/cafe.gif') }}" alt="Main Logo"> </div>

