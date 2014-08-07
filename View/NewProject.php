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
                                        <!-- DESCRIPTION -->
        <div class="form-group">
            <label for="inputDescription" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-8">
                <textarea class="form-control" rows="3" id="description" name="description"></textarea>
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