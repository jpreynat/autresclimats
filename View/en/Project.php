<?php $page_title = $project['p_name'] . ' project details'; ?>

<?php ob_start(); ?>
<?php if (!$project['p_logo'])
        $project['p_logo'] = 'js/holder.js/100x100'; ?>

<header>
    <div class="row">
        <!-- INSERT IMAGE IF EXISTS -->
        <?php if ($project['p_logo']): ?>
        <?php echo '<img src="' . $project['p_logo'] . '" alt="' . $project['p_name'] . '" class="img-thumbnail img-description pull-right" />'; ?>
        <?php endif; ?>
        
        <div class="page-header">
            <h1><?= $project['p_name'] ?></h1>
        </div>
    </div>
</header>

<article>

    <!-- #################### GENERAL INFORMATIONS ################### -->

    <div class="row">
        <div class="col-sm-4">
            
            <h4 class="page-header">Location</h4>
        
            <?php if (strlen($project['p_city']) > 0): ?>
            <p><?= "{$project['p_city']}, {$project['country_en']}" ?></p>
        
            <?php else: ?>
            <p><?= $project['country_en'] ?></p>
            
            <?php endif; ?>
            
        </div>
        
        <div class="col-sm-4 col-sm-offset-4">
            
            <h4 class="page-header">Theme</h4>
            <p><?= $project['theme_en'] ?></p>
            
        </div>
    </div>
    
    <!-- #################### PROJECTS INFORMATIONS ################### -->
    
    <div class="row">
        <h4 class="page-header">Projects led by the association</h4>
        <p><?= $project['p_proj_en'] ?></p>
    </div>
    
    <div class="row">
        <h4 class="page-header">Proposed actions in the context of Other Climates</h4>
        <p><?= $project['p_summ_en'] ?></p>
    </div>
    
    <div class="row">
        <h4 class="page-header">Beneficiaries</h4>
        <p><?= $project['p_bene_en'] ?></p>
    </div>
    
    <!-- #################### CONTACT INFORMATIONS ################### -->
    
    <div class="row">
        <div class="col-sm-5">
        
            <h4 class="page-header">Contact</h4>
            
            <p><?= "{$project['c_first']} {$project['c_last']}" ?></p>
            
            <p>
            <?php if(strlen($project['c_street']) > 0) : ?>
            <?= "{$project['c_street']}</br>" ?>
            <?php endif; ?>
            
            <?php if(strlen($project['c_street2']) > 0) : ?>
            <?= "{$project['c_street2']}</br>" ?>
            <?php endif; ?>
            
            <?php if(strlen($project['c_city']) > 0) : ?>
            
                <?php if(strlen($project['c_postal']) > 0) : ?>
                <?= "{$project['c_postal']} " ?>
                <?php endif; ?>
            <?= "{$project['c_city']}</br>" ?>
            
            <?php endif; ?>
            
            <?php if(strlen($project['c_country']) > 0) : ?>
            <?= $project['c_country'] ?>
            <?php endif; ?>
            </p>
            
            <p><?= "{$project['c_mail']}</br>" ?>
            
            <?php if(strlen($project['c_phone']) > 0) : ?>
            <?= $project['c_phone'] ?></p>
            <?php else: ?>
            </p>
            <?php endif; ?>
            
        </div>
    </div>
    
    <!-- #################### FILLER ################### -->
    
    <div class="filler">
        &nbsp;
    </div>
    
    <!-- #################### MEDIAS ################### -->
    
                        <!-- Pictures -->
    
    <div class="row">
        
        <?php if(strlen($project['p_pic1']) > 0) : ?>
        <div class="col-sm-4">
            <a href="<?= $project['p_pic1'] ?>" data-lightbox="project">
            <img src="<?= $project['p_pic1'] ?>" class="img img-responsive img-thumbnail" alt="Photo 1">
            </a>
        </div>
        <?php endif; ?>
        
        <?php if(strlen($project['p_pic2']) > 0) : ?>
        <div class="col-sm-4">
            <a href="<?= $project['p_pic2'] ?>" data-lightbox="project">
            <img src="<?= $project['p_pic2'] ?>" class="img img-responsive img-thumbnail" alt="Photo 2">
            </a>
        </div>
        <?php endif; ?>
        
        <?php if(strlen($project['p_pic3']) > 0) : ?>
        <div class="col-sm-4">
            <a href="<?= $project['p_pic3'] ?>" data-lightbox="project">
            <img src="<?= $project['p_pic3'] ?>" class="img img-responsive img-thumbnail" alt="Photo 3">
            </a>
        </div>
        <?php endif; ?>
        
    </div>
    
    <!-- #################### FILLER ################### -->
    
    <div class="filler">
        &nbsp;
    </div>
    
                        <!-- Videos -->
    
    <div class="row">
        
        <?php if(strlen($project['p_vid1']) > 0) : ?>
        <div class="col-sm-4">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="<?= $project['p_vid1'] ?>&output=embed"></iframe>
            </div>
        </div>
        <?php endif; ?>
        
        <?php if(strlen($project['p_vid2']) > 0) : ?>
        <div class="col-sm-4">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="<?= $project['p_vid2'] ?>"></iframe>
            </div>
        </div>
        <?php endif; ?>
        
        <?php if(strlen($project['p_vid3']) > 0) : ?>
        <div class="col-sm-4">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="<?= $project['p_vid3'] ?>"></iframe>
            </div>
        </div>
        <?php endif; ?>
        
    </div>
    
    <!-- #################### FILLER ################### -->
    
    <div class="filler">
        &nbsp;
    </div>
    
</article>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>