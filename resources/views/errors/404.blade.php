<?php
use Stichoza\GoogleTranslate\GoogleTranslate;
$Google = new GoogleTranslate();
$Google->setSource('fr');
$Google->setTarget('en');
?>

@include('__header__')
@include('__navbar__clean__')

<section class="__page_not_found__ flex justify-center align-center" style="width: 100%; margin-top: -100px">

    <h1 class="text-center text-bigger text-bold text-36"> {{ $Google->translate("Désolé, nous n'avons pas trouvé ce que vous cherchez...") }}</h1>
    <h2 class="text-center text-italic text-24">{{ $Google->translate("Une erreur 404 s'est produite") }}</h2>

</section>

<div class="flex align-center justify-center" style="width: 100%; position: absolute; bottom: 0"> <img src="{{ url('assets/cafe.gif') }}" alt="Main Logo"> </div>

<script src="{{ url('js/app.js') }}"></script>