<?php $page_title = "Other Climates' network"; ?>

<?php ob_start(); ?>

<article>
    
<?php foreach ($projects as $key=>$project): ?>

<?php // Conditionnaly add row if new line of 4 cols
    if ($key % 4 == 0): ?>
<div class="row">
<?php
    endif; ?>

<?php if (!$project['p_logo'])
        $project['p_logo'] = 'js/holder.js/200x200'; ?>

    <div class="col-md-3 col-xs-6 text-center">
        <div class="img-container">
        
            <div class="row img-thumbnail">
                <a href="<?= "index.php?action=project&id=" . $project['p_id'] ?>">
                    <img src="<?= $project['p_logo'] ?>" alt="..." class="img-pres"/>
                </a>
            </div>
                
        </div>
        <div class="row">
            <label class="proj-name"><?= $project['p_name'] ?></label>
        </div>
        <div class="row empty">
        </div>
    </div>

<?php // Conditionnaly close row if new line of 4 ended or last index
    if ($key != 0 && ($key % 4 == 3 || $key == count($projects) - 1)): ?>
</div>
<?php
    endif; ?>

<?php endforeach; ?>
    
</div>

</article>
    
<?php $contents = ob_get_clean(); ?>

<?php $javascript = '<script src="js/thumbnails.js"></script>'; ?>

<?php require 'template.php'; ?>