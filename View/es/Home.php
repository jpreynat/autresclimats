<?php $page_title = 'Bienvenidos al sitio web de Otros Climas'; ?>

<?php ob_start(); ?>

<header>

<div class="row">

  	<div class="col-xs-7 home-page">
  	
        <h1>Otros Climas</h1>
        <br>
        <p>
            La próxima conferencia sobre el cambio climático se celebrará en París, en 2015.
            <br>
            Porque no es una novedad para nadie que el clima está cambiando y con él muchos 
            desequilibrios económicos, políticos y ecológicos se amplificarán.
        </p>
        
        <p>
            <em><strong>¿Sera el clima lo único que está cambiando?</strong></em><br>
            <em><strong>¿Qué decir de todos esos otros climas con los cuales luchamos cada día?</strong></em><br>
        </p>
        
        <p>
            El clima social, económico, educativo tal como el clima político cambian igualmente.
        </p>
        
        <p>
            Otros Climas pretende poner de relieve los testigos de estos cambios y 
            los actores quienes obran día a un futuro más solidario y equitativo y 
            luchan contra la exclusión alrededor del mundo.
        </p>
        
        <p>
            Consulten los proyectos de la red Otros Climas y alcancen a las asociaciones, 
            los artistas y ciudadanos participantes.
        </p>
        
        <a href="index.php?action=contact">
            <p>¡Únanse a nosotros!</p>
        </a>
    
    </div>
  
    <div class="col-xs-4">
    
        <img src="https://lh3.googleusercontent.com/-1cgJdyB4JFw/U-kTSyZtGbI/AAAAAAAAACs/37Yu383VAm0/w608-h602-no/Other%2BClimates%2BSquare%2BLogo.png"
             class="img-responsive home-logo"/>
    
    </div>

</div>

</header>


<article class="home-page">

<h4 class="page-header"><strong>Se unirón a Otros Climas</strong></h4>

<div class="row">
    
<?php foreach ($projects as $project): ?>
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

<?php endforeach; ?>

</div>
</article>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>