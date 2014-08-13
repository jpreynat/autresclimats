<?php $page_title = 'Pour nous contacter...'; ?>

<?php ob_start(); ?>

<header>
</header>

<article>
<div class="row contact-page">
<div class="col-sm-12">
<h3 class="page-header">NOUS CONTACTER</h3>

<p>
    Vous souhaitez rejoindre Autres Climats ?
</p>

<p>
    Vous êtes déjà membres d’Autres Climats, adhérents ou journalistes et 
    souhaitez recevoir des informations supplémentaires sur l’association et son réseau ?
</p>

<p>
    <strong>N’hésitez pas à nous contacter<strong> pour nous présenter votre association et vos projets 
    à l’adresse suivante: <a href="mailto:autresclimats@gmail.com" target="_top">autresclimats@gmail.com</a>
<p>

<p>
    Nos coordinatrices prendront contact avec vous dans les plus brefs délais.
</p>

</div>
</div>
</article>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>