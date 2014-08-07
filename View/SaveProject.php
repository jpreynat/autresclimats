<?php $page_title = 'Enregistrement du projet'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $proj_name = $_POST['name'];
    $proj_description = $_POST['description'];
    $coun_id = $_POST['country'];
    $logo_id = NULL;
    
    // CHECK IF FILE INCLUDED AND NOT TO BIG
    if ($_FILES['logo']['error'] == 0) {
    
        // SET NAME CORRESPONDING TO PROJECT NAME LOWERCASE NO WHITESPACES
        $file_name = stripAccents($proj_name);
        $file_name = mb_strtolower(preg_replace('/\s+/u', '', $file_name), 'UTF-8');
        $file_extension = strtolower(substr(strrchr($_FILES['logo']['name'], '.'), 1));

        $file_name = "$file_name.$file_extension";
        $file_def_path = "img/$file_name";

        // TRY TO COPY FILE
        $result = move_uploaded_file($_FILES['logo']['tmp_name'], $file_def_path);

        // SUCCESS
        if ($result) {
            // RECORD IN DB
            $logo_id = recordLogo($file_name);
            $a = "file saved as '$file_def_path' with id: '$logo_id'";
        }
        // UNSUCCESSFUL
        else $a = "didn't work";
    }
    
    // RECORD PROJECT IN DB
    // PREPARE $details ARRAY
    $details = array('proj_name' => $proj_name,
                     'coun_id' => $coun_id,
                     'proj_description' => $proj_description,
                     'logo_id' => $logo_id);
    
    // GET NEW PROJECT ID
    $proj_id = recordProject($details);
    
    if ($proj_id > 0) {
        $a = "Le projet a bien été enregistré.";
        
    }
    else $a = "Erreur à l'enregistrement";
}

else {
    error('Problème de formulaire');
}
?>

<?php ob_start(); ?>

<article>
    <div class="jumbotron">
        <?= $a ?>
    </div>
</article>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php // REDIRECT TO PROJECT DETAILS AFTER 5s
    $extra = "index.php?action=project&id=$proj_id";
    header("Refresh: 5; URL=http://".BASE_HOST.BASE_URI."/$extra");
?>

<?php require 'template.php'; ?>