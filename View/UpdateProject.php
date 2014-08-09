<?php $page_title = 'Mise à jour du projet'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //*********** UPDATE CONTACT IN DB! *************//
    
    // GET THE FIELDS AND TRIM THE STRINGS
    $c_first    = trim($_POST['c_first']);
    $c_last     = trim($_POST['c_last']);
    $c_mail     = trim($_POST['c_mail']);
    $c_phone    = trim($_POST['c_phone']);
    $c_street   = trim($_POST['c_street']);
    $c_city     = trim($_POST['c_city']);
    $c_postal   = trim($_POST['c_postal']);
    $c_coun_id  = $_POST['c_coun_id'];
    $c_id       = $_POST['c_id'];
    
    // PUT IN DETAILS ARRAY
    $details = array('c_first'  => $c_first,
                     'c_last'   => $c_last,
                     'c_mail'   => $c_mail,
                     'c_phone'  => $c_phone,
                     'c_street' => $c_street,
                     'c_city'   => $c_city,
                     'c_postal' => $c_postal,
                     'coun_id'  => $c_coun_id,
                     'c_id'     => $c_id
                     );
    
    // RECORD IN DATABASE AND GET CONTACT ID FOR PROJECT
    $recordOK = updateContact($details);
    
    
    // IN CASE OF BAD RECORD
    if(!$recordOK){
        $a = "Erreur à la mise à jour du contact.";
    }
    
    // ELSE
    else {
        // GET THE FIELDS AND TRIM THE STRINGS
        $p_id       = $_POST['p_id'];
        $p_name     = trim($_POST['p_name']);
        $p_coun_id  = $_POST['p_coun_id'];
        $p_city     = trim($_POST['p_city']);
        
        $t_id       = $_POST['t_id'];
        $p_sect     = $_POST['p_sect'];
        
        $p_proj_fr  = trim($_POST['p_proj_fr']);
        $p_proj_en  = trim($_POST['p_proj_en']);
        $p_proj_es  = trim($_POST['p_proj_es']);
        
        $p_summ_fr  = trim($_POST['p_summ_fr']);
        $p_summ_en  = trim($_POST['p_summ_en']);
        $p_summ_es  = trim($_POST['p_summ_es']);
        
        $p_bene_fr  = trim($_POST['p_bene_fr']);
        $p_bene_en  = trim($_POST['p_bene_en']);
        $p_bene_es  = trim($_POST['p_bene_es']);
        
        $p_logo     = trim($_POST['p_logo']);
        
        $p_pic1     = trim($_POST['p_pic1']);
        $p_pic2     = trim($_POST['p_pic2']);
        $p_pic3     = trim($_POST['p_pic3']);
        
        $p_vid1     = trim($_POST['p_vid1']);
        $p_vid2     = trim($_POST['p_vid2']);
        $p_vid3     = trim($_POST['p_vid3']);
        
        // $c_id already exists
        
        // PREPARE ARRAY FOR RECORDING
        $details = array('p_id'         => $p_id,
                         'p_name'       => $p_name,
                         'coun_id'      => $p_coun_id,
                         'p_city'       => $p_city,
                         't_id'         => $t_id,
                         'p_sect'       => $p_sect,
                         'p_proj_fr'    => $p_proj_fr,
                         'p_proj_en'    => $p_proj_en,
                         'p_proj_es'    => $p_proj_es,
                         'p_summ_fr'    => $p_summ_fr,
                         'p_summ_en'    => $p_summ_en,
                         'p_summ_es'    => $p_summ_es,
                         'p_bene_fr'    => $p_bene_fr,
                         'p_bene_en'    => $p_bene_en,
                         'p_bene_es'    => $p_bene_es,
                         'p_logo'       => $p_logo,
                         'p_pic1'       => $p_pic1,
                         'p_pic2'       => $p_pic2,
                         'p_pic3'       => $p_pic3,
                         'p_vid1'       => $p_vid1,
                         'p_vid2'       => $p_vid2,
                         'p_vid3'       => $p_vid3,
                         'c_id'         => $c_id
                         );
                         
        // ACTUALLY UPDATE IN DATABASE
        $recordOK = updateProject($details);
        
        if ($recordOK) {
            $a = "Le projet a bien été mis à jour.";
        }
        else {
            $a = "Erreur à la mise à jour du projet.";
        }
    }
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