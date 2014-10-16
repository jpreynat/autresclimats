<?php $page_title = 'Welcome on Autres Climats'; ?>

<?php ob_start(); ?>

<header>

<div class="row">

  	<div class="col-sm-7 home-page">
  	
        <h1>Autres Climats English version</h1>
        <br>
        <p>
            En 2015 aura lieu à Paris la prochaine conférence sur le climat.
            <br>
            Car ce n’est un scoop pour personne, le climat change et avec lui de nombreux 
            déséquilibres économiques, politiques, écologiques vont s’accentuer.
        </p>

        <p>
            <em><strong>Le climat n’est pas seul à changer !</strong></em>
            <br>
            Le climat social, économique, éducatif, politique changent également.
        </p>
        
        <p>
            Autres Climats entend mettre en avant les témoins de ces changements 
            et les acteurs qui oeuvrent quotidiennement pour un avenir plus solidaire, 
            équitable et contre l’exclusion, partout dans le monde.
        </p>
        
        <p>
            Consultez les projets du réseau d’Autres Climats et rejoignez 
            ces dizaines de chercheurs, artistes, associations et citoyens.
        </p>
        
        <a href="index.php?action=contact">
            <p>Rejoignez-nous !</p>
        </a>
    
    </div>
  
    <div class="col-sm-4">
    
        <img src="https://lh3.googleusercontent.com/-1cgJdyB4JFw/U-kTSyZtGbI/AAAAAAAAACs/37Yu383VAm0/w608-h602-no/Other%2BClimates%2BSquare%2BLogo.png"
             class="img-responsive home-logo"/>
    
    </div>

</div>

</header>


<article class="home-page">

<h4 class="page-header"><strong>Ils ont déjà rejoint Autres Climats</strong></h4>

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