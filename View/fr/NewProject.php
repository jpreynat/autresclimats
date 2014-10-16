<?php $page_title = 'Enregistrer un nouveau projet'; ?>

<?php ob_start(); ?>

<header>
    <div class="row">
        <div class="page-header">
            <h1>Enregistrer un nouveau projet</h1>
        </div>
    </div>
</header>

<article>
    <form class="form-horizontal" autocomplete="off" role="form" enctype="multipart/form-data" method="POST" action="index.php?action=saveProject" accept-charset="utf-8">
         
         
        <!--####################### GENERAL INFORMATIONS ########################## -->
        <fieldset>
            <legend>Présentation générale</legend>
            
                                        <!-- NAME -->
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Nom</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Nom" required>
            </div>
        </div>
        
                                        <!-- COUNTRY -->
        <div class="form-group">
            <label for="inputCountry" class="col-sm-2 control-label">Pays</label>
            <div class="col-sm-3">
                <select class="form-control" id="p_coun_id" name="p_coun_id">
                    <?php $countries = getCountries();
                        foreach ($countries as $country): ?>
                    <?= '<option value="' . $country['id'] . '">' . $country['name'] . '</option>'; ?>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        
                                        <!-- CITY -->
        <div class="form-group">
            <label for="inputCity" class="col-sm-2 control-label">Ville</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="p_city" name="p_city" placeholder="Ville">
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
                    <option value="1">Volet 1</option>
                    <option value="2">Volet 2</option>
                </select>
            </div>
        </div>
        
        </fieldset>
        
        <!--####################### PROJECTS DESCRIPTION ########################## -->
        
        <fieldset>
            <legend>Projets menés par l'association</legend>
        
                                        <!-- PROJECTS-TEXT-FR -->
        <div class="form-group">
            <label for="inputProjectsFR" class="col-sm-2 control-label">Français</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_proj_fr" name="p_proj_fr"></textarea>
            </div>
        </div>
        
                                        <!-- PROJECTS-TEXT-EN -->
        <div class="form-group">
            <label for="inputProjectsEN" class="col-sm-2 control-label">Anglais</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_proj_en" name="p_proj_en"></textarea>
            </div>
        </div>
        
                                        <!-- PROJECTS-TEXT-ES -->
        <div class="form-group">
            <label for="inputProjectsES" class="col-sm-2 control-label">Espagnol</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_proj_es" name="p_proj_es"></textarea>
            </div>
        </div>
        
        </fieldset>
        
        <!--####################### ACTIONS SUMMARY ########################## -->
        
        <fieldset>
            <legend>Actions présentées dans le cadre d'Autres Climats</legend>
        
                                        <!-- SUMMARY-TEXT-FR -->
        <div class="form-group">
            <label for="inputSummaryFR" class="col-sm-2 control-label">Français</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_summ_fr" name="p_summ_fr"></textarea>
            </div>
        </div>
        
                                        <!-- SUMMARY-TEXT-EN -->
        <div class="form-group">
            <label for="inputSummaryEN" class="col-sm-2 control-label">Anglais</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_summ_en" name="p_summ_en"></textarea>
            </div>
        </div>
        
                                        <!-- SUMMARY-TEXT-ES -->
        <div class="form-group">
            <label for="inputSummaryES" class="col-sm-2 control-label">Espagnol</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_summ_es" name="p_summ_es"></textarea>
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
                <textarea class="form-control" rows="3" id="p_bene_fr" name="p_bene_fr"></textarea>
            </div>
        </div>
        
                                        <!-- BENEFICIARIES-TEXT-EN -->
        <div class="form-group">
            <label for="inputBenefEN" class="col-sm-2 control-label">Anglais</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_bene_en" name="p_bene_en"></textarea>
            </div>
        </div>
        
                                        <!-- BENEFICIARIES-TEXT-ES -->
        <div class="form-group">
            <label for="inputBenefES" class="col-sm-2 control-label">Espagnol</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="p_bene_es" name="p_bene_es"></textarea>
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
              <input type="text" class="form-control" id="c_first" name="c_first" placeholder="Prénom" required>
            </div>
        </div>    
            
                                         <!-- LAST NAME -->
        <div class="form-group">
            <label for="inputLastName" class="col-sm-2 control-label">Nom</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="c_last" name="c_last" placeholder="Nom" required>
            </div>
        </div>
        
                                         <!-- MAIL -->
        <div class="form-group">
            <label for="inputMail" class="col-sm-2 control-label">eMail</label>
            <div class="col-sm-3">
              <input type="email" class="form-control" id="c_mail" name="c_mail" placeholder="mon.exemple@gmail.com" required>
            </div>
        </div>
        
                                         <!-- PHONE -->
        <div class="form-group">
            <label for="inputPhone" class="col-sm-2 control-label">Téléphone</label>
            <div class="col-sm-3">
              <input type="tel" class="form-control" id="c_phone" name="c_phone" placeholder="04 72 00 22 44">
            </div>
        </div>
            
                                        <!-- STREET -->
        <div class="form-group">
            <label for="inputStreet" class="col-sm-2 control-label">Adresse</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="c_street" name="c_street" placeholder="1, place des Terreaux">
            </div>
        </div>
        
                                        <!-- STREET 2 -->
        <div class="form-group">
            <label for="inputStreet2" class="col-sm-2 control-label">Adresse 2</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="c_street2" name="c_street2" placeholder="Bâtiment C">
            </div>
        </div>

                                        <!-- POSTAL CODE -->
        <div class="form-group">
            <label for="inputPostal" class="col-sm-2 control-label">Code Postal</label>
            <div class="col-sm-2">
              <input type="tel" class="form-control" id="c_postal" name="c_postal" placeholder="69001">
            </div>
        </div>
            
                                        <!-- CITY -->
        <div class="form-group">
            <label for="inputCCity" class="col-sm-2 control-label">Ville</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="c_city" name="c_city" placeholder="Lyon">
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
              <input type="text" class="form-control" id="p_logo" name="p_logo" placeholder="URL du logo">
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
              <input type="text" class="form-control" id="p_pic1" name="p_pic1" placeholder="URL de l'image">
            </div>
        </div>
        
                                         <!-- PICTURE 2 -->
        <div class="form-group">
            <label for="inputPicture2" class="col-sm-2 control-label">Photo 2</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="p_pic2" name="p_pic2" placeholder="URL de l'image">
            </div>
        </div>

                                         <!-- PICTURE 3 -->
        <div class="form-group">
            <label for="inputPicture3" class="col-sm-2 control-label">Photo 3</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="p_pic3" name="p_pic3" placeholder="URL de l'image">
            </div>
        </div>
        
                                         <!-- VIDEO 1 -->
        <div class="form-group">
            <label for="inputVideo1" class="col-sm-2 control-label">Vidéo 1</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="p_vid1" name="p_vid1" placeholder="URL de la vidéo">
            </div>
        </div>
        
                                         <!-- VIDEO 2 -->
        <div class="form-group">
            <label for="inputVideo2" class="col-sm-2 control-label">Vidéo 2</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="p_vid2" name="p_vid2" placeholder="URL de la vidéo">
            </div>
        </div>
        
                                         <!-- VIDEO 3 -->
        <div class="form-group">
            <label for="inputVideo3" class="col-sm-2 control-label">Vidéo 3</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="p_vid3" name="p_vid3" placeholder="URL de la vidéo">
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