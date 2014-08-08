<?php $page_title = 'Détail du projet ' . $project['name']; ?>

<?php ob_start(); ?>
<?php if (!$project['p_logo'])
        $project['p_logo'] = 'js/holder.js/100x100'; ?>

<header>
    <div class="row">
        <!-- INSERT IMAGE IF EXISTS -->
        <?php if ($project['p_logo']): ?>
        <?php echo '<img src="img/' . $project['p_logo'] . '" alt="..." class="img-thumbnail img-description pull-right" />'; ?>
        <?php endif; ?>
        
        <div class="page-header">
            <h1><?= $project['p_name'] ?></h1>
        </div>
    </div>
</header>

<article>

    <!-- #################### GENERAL INFORMATIONS ################### -->

    <div class="row">
        <h3>Lieu</h3>
        
        <?php if (strlen($project['p_city']) > 0): ?>
        <h4><?= "{$project['p_city']}, {$project['country']}" ?></h4>
        
        <?php else: ?>
        <h4><?= $project['country'] ?></h4>
        
        <?php endif; ?>
    </div>
    
    
    <div class="row">
        <h3>Description du projet</h3>
        <p><?= $project['p_proj'] ?></p>
    </div>
</article>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>