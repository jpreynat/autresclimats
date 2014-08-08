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
        <div class="col-sm-5">
            
            <h4 class="page-header">Lieu</h4>
        
            <?php if (strlen($project['p_city']) > 0): ?>
            <p><?= "{$project['p_city']}, {$project['country']}" ?></p>
        
            <?php else: ?>
            <p><?= $project['country'] ?></p>
            
            <?php endif; ?>
            
        </div>
        
        <div class="col-sm-5 col-sm-offset-2">
            
            <h4 class="page-header">Thème</h4>
            <p><?= $project['theme'] ?></p>
            
        </div>
    </div>
    
    <!-- #################### PROJECTS INFORMATIONS ################### -->
    
    <div class="row">
        <h4 class="page-header">Projets</h4>
        <p><?= $project['p_proj'] ?></p>
    </div>
    
    <div class="row">
        <h4 class="page-header">Résumé des actions</h4>
        <p><?= $project['p_summ'] ?></p>
    </div>
    
    <div class="row">
        <h4 class="page-header">Bénéficiaires</h4>
        <p><?= $project['p_bene'] ?></p>
    </div>
    
    <!-- #################### CONTACT INFORMATIONS ################### -->
    
    <div class="row">
        <div class="col-sm-6 col-sm-offset-1">
        
            <h4 class="page-header">Contact</h4>
            
            <p><?= "{$project['c_first']} {$project['c_last']}" ?></p>
            
            <?php if(strlen($project['c_street']) > 0) : ?>
            <p><?= $project['c_street'] ?></p>
            <?php endif; ?>
            
            <?php if(strlen($project['c_city']) > 0) : ?>
            <p>
                <?php if(strlen($project['c_postal']) > 0) : ?>
                <?= "{$project['c_street']} " ?>
                <?php endif; ?>
            <?= "{$project['c_city']} " ?>
            </p>
            <?php endif; ?>
            
            <?php if(strlen($project['c_country']) > 0) : ?>
            <p><?= $project['c_country'] ?></p>
            <?php endif; ?>
            
            <p><?= $project['c_mail'] ?></p>
            
            <?php if(strlen($project['c_phone']) > 0) : ?>
            <p><?= $project['c_phone'] ?></p>
            <?php endif; ?>
            
        </div>
    </div>
    
</article>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>