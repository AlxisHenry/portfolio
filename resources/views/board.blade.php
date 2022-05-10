<?php
use Stichoza\GoogleTranslate\GoogleTranslate;
$Google = new GoogleTranslate();
$Google->setSource('fr');
$Google->setTarget('en');
?>

@include('__header__')
@include('__navbar__')

<section class="__spoiler__cards__ test layout-maxed">
</section>

@include('__footer__')
