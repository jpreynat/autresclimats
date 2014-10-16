<?php $page_title = 'Autres climats'; ?>

<?php ob_start(); ?>
<p>Une erreur est survenue : <?= $errorMsg ?></p>
<?php $contents = ob_get_clean(); ?>

<?php require 'template.php'; ?>