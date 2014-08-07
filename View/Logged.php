<?php
// CHECK FOR IDENTIFICATION
if (admin()) {
    $statut_identification = "Mode administration actif!";
}
else {
    $statut_identification = "Vous n'avez pas les droits pour accéder à cette partie du site.";
}
?>

<?php $page_title = 'Identification'; ?>

<?php ob_start(); ?>

<header>
    <div class="jumbotron">
        <h3><?= $statut_identification ?></h3>
    </div>
</header>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>