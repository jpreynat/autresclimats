<?php $page_title = 'Liste des projets'; ?>

<?php ob_start(); ?>

<article>
<div class="row">
    
<?php foreach ($projects as $project): ?>
<?php if (!$project['img_path'])
        $project['img_path'] = 'js/holder.js/200x200'; ?>

    <div class="col-md-3 text-center">
        <div class="img-container">
                <div class="row img-thumbnail">
                    <a href="<?= "index.php?action=project&id=" . $project['id'] ?>">
                        <img src="img/<?= $project['img_path'] ?>" alt="..." class="img-pres"/>
                    </a>
                </div>
                <div class="row">
                    <label><?= $project['name'] ?></label>
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