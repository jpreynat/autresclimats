<?php $page_title = 'Bienvenue sur Autres Climats'; ?>

<?php ob_start(); ?>

<header>

<div class="row">

  	<div class="col-sm-8">
  	
        <h1>Autres Climats</h1>
        <br>
        <p>En 2015 aura lieu à Paris la prochaine conférence sur le climat.<br>
            Le climat change et avec lui de nombreux déséquilibres économiques, politiques, écologiques vont s’accentuer.</p>

        <p>Mais le climat est-il seul à changer ?</p>
        <p>Et qu’en est-il de tous ces autres climats avec lesquels nous nous débattons chaque jour ?<br>
        Comment le climat social, économique, éducatif change t-il ?</p>
        
        <p>C’est pour répondre à ces questions et proposer des solutions concrètes qu’Autres Climats à vu le jour.</p>
    
    </div>
  
    <div class="col-sm-4">
    
        <img src="https://lh3.googleusercontent.com/-1cgJdyB4JFw/U-kTSyZtGbI/AAAAAAAAACs/37Yu383VAm0/w608-h602-no/Other%2BClimates%2BSquare%2BLogo.png"
             class="img-responsive home-logo"/>
    
    </div>

</div>

</header>


<article>

<h4 class="page-header">Ils ont rejoint Autres Climats</h4>

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