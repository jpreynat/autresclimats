<?php $page_title = 'Enregistrement du projet'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //RECORD CONTACT IN DB!
    $c_first = $_POST['c_first'];
    $c_last = $_POST['c_last'];
    $c_mail = $_POST['c_mail'];
    $c_phone = $_POST['c_phone'];
    $c_street = $_POST['c_street'];
    $c_city = $_POST['c_city'];
    $c_postal = $_POST['c_postal'];
    $c_coun_id = $_POST['c_coun_id'];
    
    $a = "Valeur de rue : " . $c_street . "<br>Longueur : " . strlen($c_street);
    /*
    
    $details = array();
    
    
    
    $proj_name = $_POST['name'];
    $proj_description = $_POST['description'];
    $coun_id = $_POST['country'];
    $logo_id = NULL;
    

    
    // RECORD PROJECT IN DB
    // PREPARE $details ARRAY
    $details = array('p_name' => $proj_name);
                     
    
    // GET NEW PROJECT ID
    $proj_id = recordProject($details);
    
    if ($proj_id > 0) {
        $a = "Le projet a bien été enregistré.";
        
    }
    else $a = "Erreur à l'enregistrement";
    */
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