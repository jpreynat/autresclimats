<?php $page_title = 'Bienvenue sur Autres Climats'; ?>

<?php ob_start(); ?>

<header>
    <div class="jumbotron">
        <h1>Bienvenue !</h1>
        <p>Bienvenue sur le site d'Autres Climats.</p>
        <p>Venez rejoindre nos <?= $nbProjects ?> projets !</p>
    </div>
</header>

<article>
</article>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>