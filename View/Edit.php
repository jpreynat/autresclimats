<?php $page_title = 'Modification de ' . $project['p_name']; ?>

<?php ob_start(); ?>

<header>
    <div class="row">
        <div class="page-header">
            <h1>Modification de <?= $project['p_name'] ?></h1>
        </div>
    </div>
</header>

<article>
    <form class="form-horizontal" autocomplete="off" role="form" enctype="multipart/form-data" method="POST" action="index.php?action=updateProject" accept-charset="utf-8">
         
                                 <!-- SET ID FOR UPDATE -->
                                 
        <input type="hidden" id="p_id" name="p_id" value="<?= $project['p_id'] ?>">
        
        
        <!--####################### GENERAL INFORMATIONS ########################## -->
        <fieldset>
            <legend>Présentation générale</legend>
            
                                        <!-- NAME -->
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Nom</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="p_name" name="p_name" value="<?= $project['p_name'] ?>" required>
            </div>
        </div>
        
                                        <!-- COUNTRY -->
        <div class="form-group">
            <label for="inputCountry" class="col-sm-2 control-label">Pays</label>
            <div class="col-sm-3">
                <select class="form-control" id="p_coun_id" name="p_coun_id">
                    <?php $countries = getCountries();
                            foreach ($countries as $country): ?>
                    <?php   if ($country['id'] === $project['p_coun_id'])
                                $selected = ' selected';
                            else
                                $selected = ''; ?>
                    <?= '<option value="' . $country['id'] . $selected . '">' . $country['name'] . '</option>'; ?>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        
                                        <!-- CITY -->
        <div class="form-group">
            <label for="inputCity" class="col-sm-2 control-label">Ville</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="p_city" name="p_city" value="<?= $project['p_city'] ?>">
            </div>
        </div>
        
        </fieldset>
        
        <!--####################### AUTRES CLIMATS SPECIFICS ########################## -->
        
        <fieldset>
            <legend>Participation à Autres Climats</legend>
            
                                        <!-- THEME -->
        <div class="form-group">
            <label for="inputTheme" class="col-sm-2 control-label">Thème</label>
            <div class="col-sm-3">
                <select class="form-control" id="t_id" name="t_id">
                    <?php $themes = getThemes();
                        foreach ($themes as $theme): ?>
                    <?= '<option value="' . $theme['id'] . '">' . $theme['name'] . '</option>'; ?>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        
                                                <!-- SECTION -->
        <div class="form-group">
            <label for="inputSection" class="col-sm-2 control-label">Volet</label>
            <div class="col-sm-3">
                <select class="form-control" id="p_sect" name="p_sect">
                    <option value="1" <?php if($project['p_sect'] == 1) { echo "selected"; } ?>>Volet 1</option>
                    <option value="2" <?php if($project['p_sect'] == 2) { echo "selected"; } ?>>Volet 2</option>
                </select>
            </div>
        </div>
        
        </fieldset>
        
        <!--####################### PROJECTS DESCRIPTION ########################## -->
        
        <fieldset>
            <legend>Description des projets</legend>
        
                                        <!-- PROJECTS-TEXT-FR -->
        <div class="form-group">
            <label for="inputProjectsFR" class="col-sm-2 control-label">Français</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_proj_fr" name="p_proj_fr" value="<?= $project['p_proj_fr'] ?>"></textarea>
            </div>
        </div>
        
                                        <!-- PROJECTS-TEXT-EN -->
        <div class="form-group">
            <label for="inputProjectsEN" class="col-sm-2 control-label">Anglais</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_proj_en" name="p_proj_en" value="<?= $project['p_proj_en'] ?>"></textarea>
            </div>
        </div>
        
                                        <!-- PROJECTS-TEXT-ES -->
        <div class="form-group">
            <label for="inputProjectsES" class="col-sm-2 control-label">Espagnol</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_proj_es" name="p_proj_es" value="<?= $project['p_proj_es'] ?>"></textarea>
            </div>
        </div>
        
        </fieldset>
        
        <!--####################### ACTIONS SUMMARY ########################## -->
        
        <fieldset>
            <legend>Résumé des actions</legend>
        
                                        <!-- SUMMARY-TEXT-FR -->
        <div class="form-group">
            <label for="inputSummaryFR" class="col-sm-2 control-label">Français</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_summ_fr" name="p_summ_fr" value="<?= $project['p_summ_fr'] ?>"></textarea>
            </div>
        </div>
        
                                        <!-- SUMMARY-TEXT-EN -->
        <div class="form-group">
            <label for="inputSummaryEN" class="col-sm-2 control-label">Anglais</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_summ_en" name="p_summ_en" value="<?= $project['p_summ_en'] ?>"></textarea>
            </div>
        </div>
        
                                        <!-- SUMMARY-TEXT-ES -->
        <div class="form-group">
            <label for="inputSummaryES" class="col-sm-2 control-label">Espagnol</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_summ_es" name="p_summ_es" value="<?= $project['p_summ_es'] ?>"></textarea>
            </div>
        </div>
        
        </fieldset>
        
        <!--####################### ACTIONS BENEFICIARIES ########################## -->
        
        <fieldset>
            <legend>Bénéficiaires</legend>
        
                                        <!-- BENEFICIARIES-TEXT-FR -->
        <div class="form-group">
            <label for="inputBenefFR" class="col-sm-2 control-label">Français</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_bene_fr" name="p_bene_fr" value="<?= $project['p_bene_fr'] ?>"></textarea>
            </div>
        </div>
        
                                        <!-- BENEFICIARIES-TEXT-EN -->
        <div class="form-group">
            <label for="inputBenefEN" class="col-sm-2 control-label">Anglais</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_bene_en" name="p_bene_en" value="<?= $project['p_bene_en'] ?>"></textarea>
            </div>
        </div>
        
                                        <!-- BENEFICIARIES-TEXT-ES -->
        <div class="form-group">
            <label for="inputBenefES" class="col-sm-2 control-label">Espagnol</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_bene_es" name="p_bene_es" value="<?= $project['p_bene_es'] ?>"></textarea>
            </div>
        </div>
        
        </fieldset>
        
        <!--####################### CONTACT INFORMATIONS ########################## -->
        
        <fieldset>
            <legend>Contact</legend>
            
                                         <!-- FIRST NAME -->
        <div class="form-group">
            <label for="inputFirstName" class="col-sm-2 control-label">Prénom</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="c_first" name="c_first" value="<?= $project['c_first'] ?>" required>
            </div>
        </div>    
            
                                         <!-- LAST NAME -->
        <div class="form-group">
            <label for="inputLastName" class="col-sm-2 control-label">Nom</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="c_last" name="c_last" value="<?= $project['c_last'] ?>" required>
            </div>
        </div>
        
                                         <!-- MAIL -->
        <div class="form-group">
            <label for="inputMail" class="col-sm-2 control-label">eMail</label>
            <div class="col-sm-3">
              <input type="email" class="form-control" id="c_mail" name="c_mail" value="<?= $project['c_mail'] ?>" required>
            </div>
        </div>
        
                                         <!-- PHONE -->
        <div class="form-group">
            <label for="inputPhone" class="col-sm-2 control-label">Téléphone</label>
            <div class="col-sm-3">
              <input type="tel" class="form-control" id="c_phone" name="c_phone" value="<?= $project['c_phone'] ?>">
            </div>
        </div>
            
                                        <!-- STREET -->
        <div class="form-group">
            <label for="inputStreet" class="col-sm-2 control-label">Adresse</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="c_street" name="c_street" value="<?= $project['c_street'] ?>">
            </div>
        </div>

                                        <!-- POSTAL CODE -->
        <div class="form-group">
            <label for="inputPostal" class="col-sm-2 control-label">Code Postal</label>
            <div class="col-sm-2">
              <input type="tel" class="form-control" id="c_postal" name="c_postal" value="<?= $project['c_postal'] ?>">
            </div>
        </div>
            
                                        <!-- CITY -->
        <div class="form-group">
            <label for="inputCCity" class="col-sm-2 control-label">Ville</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="c_city" name="c_city" value="<?= $project['c_city'] ?>">
            </div>
        </div>
        
                                        <!-- COUNTRY -->
        <div class="form-group">
            <label for="inputCountry" class="col-sm-2 control-label">Pays</label>
            <div class="col-sm-3">
                <select class="form-control" id="c_coun_id" name="c_coun_id">
                    <?php $countries = getCountries();
                        foreach ($countries as $country): ?>
                    <?= '<option value="' . $country['id'] . '">' . $country['name'] . '</option>'; ?>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        
        </fieldset>
        
        <!--################################ MEDIAS ########################## -->
        
        <fieldset>
            <legend>Médias</legend>
        
                                        <!-- LOGO URL -->
        <div class="form-group">
            <label for="inputLogo" class="col-sm-2 control-label">Logo</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="p_logo" name="p_logo" value="<?= $project['p_logo'] ?>">
            </div>
        </div>

        <!--
        <div class="form-group">
            <label for="inputDescription" class="col-sm-2 control-label">Logo</label>
            <div class="col-sm-8">
                                        <!-- FILE SIZE LIMIT TO 500ko
                <input type="hidden" name="MAX_FILE_SIZE" value="512000">
                <input name="logo" type="file" class="filestyle" data-iconName="glyphicon-inbox" data-input="false">
            </div>
        </div>
        -->
        
                                         <!-- PICTURE 1 -->
        <div class="form-group">
            <label for="inputPicture1" class="col-sm-2 control-label">Photo 1</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="p_pic1" name="p_pic1" value="<?= $project['p_pic1'] ?>">
            </div>
        </div>
        
                                         <!-- PICTURE 2 -->
        <div class="form-group">
            <label for="inputPicture2" class="col-sm-2 control-label">Photo 2</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="p_pic2" name="p_pic2" value="<?= $project['p_pic2'] ?>">
            </div>
        </div>

                                         <!-- PICTURE 3 -->
        <div class="form-group">
            <label for="inputPicture3" class="col-sm-2 control-label">Photo 3</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="p_pic3" name="p_pic3" value="<?= $project['p_pic3'] ?>">
            </div>
        </div>
        
                                         <!-- VIDEO 1 -->
        <div class="form-group">
            <label for="inputVideo1" class="col-sm-2 control-label">Vidéo 1</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="p_vid1" name="p_vid1" value="<?= $project['p_vid1'] ?>">
            </div>
        </div>
        
                                         <!-- VIDEO 2 -->
        <div class="form-group">
            <label for="inputVideo2" class="col-sm-2 control-label">Vidéo 2</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="p_vid2" name="p_vid2" value="<?= $project['p_vid2'] ?>">
            </div>
        </div>
        
                                         <!-- VIDEO 3 -->
        <div class="form-group">
            <label for="inputVideo3" class="col-sm-2 control-label">Vidéo 3</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="p_vid3" name="p_vid3" value="<?= $project['p_vid3'] ?>">
            </div>
        </div>
        
        </fieldset>
        
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-7">
              <button type="submit" class="btn btn-primary btn-sm">Enregistrer</button>
            </div>
        </div>
    </form>
</article>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>