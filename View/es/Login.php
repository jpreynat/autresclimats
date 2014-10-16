<?php $page_title = 'Login'; ?>

<?php
    // CHECKING POST METHOD
    if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
        if (isset($_POST['userName']) && isset($_POST['password'])) {
            // CHECKING CORRECT IDENTIFICATION
            if ($_POST['userName'] == ADMIN_NAME && $_POST['password'] == ADMIN_PASS) {
                // IF OK
                session_start();
                $_SESSION['userName'] = ADMIN_NAME;
                $_SESSION['password'] = ADMIN_PASS;
            }
        }
        header('location: index.php?action=logged');
    }
?>

<?php ob_start(); ?>

<header>
    <div class="row">
        <div class="page-header">
            <h1>Identification</h1>
        </div>
    </div>
</header>

<article>
    <form class="form-horizontal" autocomplete="off" role="form" method="POST" action="index.php?action=login" accept-charset="utf-8">
                                        <!-- USER NAME -->
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Identifiant</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="userName" name="userName" placeholder="Identifiant" required>
            </div>
        </div>
                                        <!-- PASSWORD -->
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Mot de passe</label>
            <div class="col-sm-2">
              <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-7">
              <button type="submit" class="btn btn-default">OK</button>
            </div>
        </div>
    </form>
</article>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>