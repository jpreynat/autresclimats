<?php $page_title = 'Liste des projets'; ?>

<?php ob_start(); ?>

<article>
<div class="row">
    
<?php foreach ($projects as $project): ?>
<?php if (!$project['p_logo'])
        $project['p_logo'] = 'js/holder.js/200x200'; ?>

    <div class="col-md-3 text-center">
        <div class="img-container">
                <div class="row img-thumbnail">
                    <a href="<?= "index.php?action=project&id=" . $project['p_id'] ?>">
                        <img src="img/<?= $project['p_logo'] ?>" alt="..." class="img-pres"/>
                    </a>
                </div>
                <div class="row">
                    <label class="proj-name"><?= $project['p_name'] ?></label>
                </div>
                <div class="row empty">
                </div>
        </div>
    </div>

<?php endforeach; ?>
    
</div>
</article>
    
<?php $contents = ob_get_clean(); ?>

<?php $javascript = '<script src="js/thumbnails.js"></script>'; ?>

<?php require 'template.php'; ?>