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

<div class="row">
    
    
<?php // LIST OF 3 LAST PROJECTS
    foreach($projects as $project):
?>
    <div class="col-sm-4">
    <a href="<?= "index.php?action=project&id=" . $project['p_id'] ?>" class="thumbnail">
        <img src="<?= $project['p_logo'] ?>" alt="..." class="img-pres"/>
    </a>
    </div>
<?php
    endforeach;
?>

</div>
<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>