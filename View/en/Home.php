<?php $page_title = 'Welcome to Other Climates'; ?>

<?php ob_start(); ?>

<header>

<div class="row">

  	<div class="col-sm-7 home-page">
  	
        <h1>Other Climates</h1>
        <br>
        <p>
            The next conference on climate will be held in Paris in 2015.
            <br>
            It is not a scoop. Climate is changing, leading to increasing economical, 
            political and ecological instabilities.
        </p>

        <p>
            <em><strong>But climate isn’t the only thing to change!</strong></em>
            <br>
            Social, economical, educational, political climates change too.
        </p>
        
        <p>
            Other Climates wants to highlight the witnesses of these changes and the actors 
            who work for a future with more solidarity and fight against discrimination 
            on a daily basis all around the world.
        </p>
        
        <p>
            See our network and join these researchers, artists, associations 
            and citizens acting for a fairer future.
        </p>
        
        <a href="index.php?action=contact">
            <p>Join us!</p>
        </a>
    
    </div>
  
    <div class="col-sm-4">
    
        <img src="https://lh3.googleusercontent.com/-1cgJdyB4JFw/U-kTSyZtGbI/AAAAAAAAACs/37Yu383VAm0/w608-h602-no/Other%2BClimates%2BSquare%2BLogo.png"
             class="img-responsive home-logo"/>
    
    </div>

</div>

</header>


<article class="home-page">

<h4 class="page-header"><strong>They joined Other Climates</strong></h4>

<div class="row">
    
<?php foreach ($projects as $project): ?>
<?php if (!$project['p_logo'])
        $project['p_logo'] = 'js/holder.js/200x200'; ?>

    <div class="col-md-3 text-center">
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

<?php endforeach; ?>

</div>
</article>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>