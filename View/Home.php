<?php $page_title = 'Bienvenue sur Autres Climats'; ?>

<?php ob_start(); ?>

<header>

    <div class="jumbotron">

        <h1>Bienvenue !</h1>

        <p>Bienvenue sur le site d'Autres Climats.</p>

        <p>Venez rejoindre nos <?= $nbProjects ?> projets !</p>

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

<?php $contents = <?php $javascript = ''; ?>ob_ge