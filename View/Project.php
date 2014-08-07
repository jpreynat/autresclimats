<?php $page_title = 'Détail du projet ' . $project['name']; ?>

<?php ob_start(); ?>
<?php if (!$project['img_path'])
        $project['img_path'] = 'js/holder.js/100x100'; ?>

<header>
    <div class="row">
        <!-- INSERT IMAGE IF EXISTS -->
        <?php if ($project['img_path'])
            echo '<img src="img/' . $project['img_path'] . '" alt="..." class="img-thumbnail img-description pull-right" />';
        ?>
        <div class="page-header">
            <h1><?= $project['name'] ?></h1>
        </div>
    </div>
</header>

<article>
    <div class="row">
        <h3>Pays</h3>
        <h4><?= $project['country'] ?></h4>
    </div>
    <div class="row">
        <h3>Description du projet</h3>
        <p><?= $project['description'] ?></p>
    </div>
</article>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>