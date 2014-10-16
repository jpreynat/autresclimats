<?php $page_title = 'Suppression de ' . $project['p_name']; ?>

<?php ob_start(); ?>

<header>
    <div class="jumbotron">
        <h3><?= $project['p_name'] ?> a bien été supprimé.</h3>
    </div>
</header>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php // REDIRECT TO LIST OF PROJECTS AFTER 5s
    header("Refresh: 5; URL=http://".BASE_HOST.BASE_URI."/index.php?action=adminProjects");
?>

<?php require 'template.php'; ?>