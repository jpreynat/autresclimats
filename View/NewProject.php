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
         
                                        <!-- NAME -->
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Nom</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
            </div>
        </div>
        
                                        <!-- COUNTRY -->
        <div class="form-group">
            <label for="inputCountry" class="col-sm-2 control-label">Pays</label>
            <div class="col-sm-3">
                <select class="form-control" id="country" name="country">
                    <?php $countries = getCountries();
                        foreach ($countries as $country): ?>
                    <?= '<option value="' . $country['id'] . '">' . $country['name'] . '</option>'; ?>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        
                                        <!-- CITY -->
        <div class="form-group">
            <label for="inputCity" class="col-sm-2 control-label">Nom</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="city" name="city" placeholder="Ville" required>
            </div>
        </div>
        
                                        <!-- THEME -->
        <div class="form-group">
            <label for="inputTheme" class="col-sm-2 control-label">Pays</label>
            <div class="col-sm-3">
                <select class="form-control" id="theme" name="theme">
                    <?php $themes = getThemes();
                        foreach ($themes as $theme): ?>
                    <?= '<option value="' . $theme['id'] . '">' . $theme['name'] . '</option>'; ?>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        
                                        <!-- PROJECTS-TEXT-FR -->
        <div class="form-group">
            <label for="inputProjectsFR" class="col-sm-2 control-label">Projets (français)</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="proj_fr" name="proj_fr"></textarea>
            </div>
        </div>
        
                                        <!-- PROJECTS-TEXT-EN -->
        <div class="form-group">
            <label for="inputProjectsEN" class="col-sm-2 control-label">Projets (anglais)</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="proj_en" name="proj_en"></textarea>
            </div>
        </div>
        
                                        <!-- PROJECTS-TEXT-ES -->
        <div class="form-group">
            <label for="inputProjectsES" class="col-sm-2 control-label">Projets (espagnol)</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="proj_es" name="proj_es"></textarea>
            </div>
        </div>
        
                                        <!-- SUMMARY-TEXT-FR -->
        <div class="form-group">
            <label for="inputSummaryFR" class="col-sm-2 control-label">Résumé des actions (français)</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="summ_fr" name="summ_fr"></textarea>
            </div>
        </div>
        
                                        <!-- SUMMARY-TEXT-EN -->
        <div class="form-group">
            <label for="inputSummaryEN" class="col-sm-2 control-label">Résumé des actions (anglais)</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="summ_en" name="summ_en"></textarea>
            </div>
        </div>
        
                                        <!-- SUMMARY-TEXT-ES -->
        <div class="form-group">
            <label for="inputSummaryES" class="col-sm-2 control-label">Résumé des actions (espagnol)</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="summ_es" name="summ_es"></textarea>
            </div>
        </div>
        
                                        <!-- BENEFICIARIES-TEXT-FR -->
        <div class="form-group">
            <label for="inputBenefFR" class="col-sm-2 control-label">Bénéficiaires (français)</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="bene_fr" name="bene_fr"></textarea>
            </div>
        </div>
        
                                        <!-- BENEFICIARIES-TEXT-EN -->
        <div class="form-group">
            <label for="inputBenefEN" class="col-sm-2 control-label">Bénéficiaires (anglais)</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="bene_en" name="bene_en"></textarea>
            </div>
        </div>
        
                                        <!-- BENEFICIARIES-TEXT-ES -->
        <div class="form-group">
            <label for="inputBenefES" class="col-sm-2 control-label">Bénéficiaires (espagnol)</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="bene_es" name="bene_es"></textarea>
            </div>
        </div>
        
                                        <!-- SECTION -->
        <div class="form-group">
            <label for="inputSection" class="col-sm-2 control-label">Volet</label>
            <div class="col-sm-3">
                <select class="form-control" id="sect" name="sect">
                    <option value="1">Volet 1</option>
                    <option value="2">Volet 2</option>
                </select>
            </div>
        </div>
        
                                        <!-- INSERT LOGO -->
        <div class="form-group">
            <label for="inputDescription" class="col-sm-2 control-label">Logo</label>
            <div class="col-sm-8">
                                        <!-- FILE SIZE LIMIT TO 500ko -->
                <input type="hidden" name="MAX_FILE_SIZE" value="512000">
                <input name="logo" type="file" class="filestyle" data-iconName="glyphicon-inbox" data-input="false">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-7">
              <button type="submit" class="btn btn-default">Enregistrer</button>
            </div>
        </div>
    </form>
</article>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>