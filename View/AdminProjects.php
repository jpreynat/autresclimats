<?php $page_title = 'Administration des projets'; ?>

<?php ob_start(); ?>

<?= count($projects); ?>

<article>
<table class="table table-striped table-hover">
    
    <thead>
        <th>Nom</th>
        <th>Pays</th>
        <!--
        <th>Logo</th>
        -->
        <th></th>
        <th></th>
        <th></th>
    </thead>
    
    <tbody>
<?php foreach ($projects as $project): ?>
        
<?php if (!$project['p_logo'])
        $project['p_logo'] = 'js/holder.js/32x32'; ?>

    <tr>
        <td><?= $project['p_name'] ?></td>    
        <td><?= $project['country'] ?></td>
        <!--
        <td class="text-center"><img src="img/<?= $project['p_logo'] ?>" alt="..." class="img-table"></td>
        -->
        <td><a href="index.php?action=project&id=<?= $project['p_id'] ?>">Voir</a></td>
        <td><a href="index.php?action=edit&id=<?= $project['p_id'] ?>">Modifier</a></td>
        <td><a href="index.php?action=delete&id=<?= $project['p_id'] ?>">Supprimer</a></td>
    </tr>

<?php endforeach; ?>
    
    </tbody>
</table>
</article>
    
<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>