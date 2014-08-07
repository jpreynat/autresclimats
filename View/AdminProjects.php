<?php $page_title = 'Administration des projets'; ?>

<?php ob_start(); ?>

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
        
<?php if (!$project['img_path'])
        $project['img_path'] = 'js/holder.js/32x32'; ?>

    <tr>
        <td><?= $project['name'] ?></td>    
        <td><?= $project['country'] ?></td>
        <!--
        <td class="text-center"><img src="img/<?= $project['img_path'] ?>" alt="..." class="img-table"></td>
        -->
        <td><a href="index.php?action=project&id=<?= $project['id'] ?>">Voir</a></td>
        <td><a href="index.php?action=edit&id=<?= $project['id'] ?>">Modifier</a></td>
        <td><a href="index.php?action=delete&id=<?= $project['id'] ?>">Supprimer</a></td>
    </tr>

<?php endforeach; ?>
    
    </tbody>
</table>
</article>
    
<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>