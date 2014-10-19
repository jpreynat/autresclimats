<?php $page_title = "Para contactarnos"; ?>

<?php ob_start(); ?>

<header>
</header>

<article>
<div class="row contact-page">
<div class="col-sm-12">
<h3 class="page-header">CONTACTARNOS</h3>

<p>
   ¿ Desean alcanzar a Otros Climas ?
</p>

<p>
    Si ustedes estan ya miembros de Otros Climas, periodistas o interesados por nuestras acciones y desean recibir más información sobre la asociación y su red, no vacilán en contactarnos a : <a href="mailto:autresclimats@gmail.com"  target="_top">autresclimats@gmail.com</a> 
    precisando 1era Parte o 2nda Parte en el título de su mensaje.
<p>

<p>
    Nustras coordinadores tomarán contacto con ustedes lo antes posible.
</p>

</div>
</div>
</article>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>