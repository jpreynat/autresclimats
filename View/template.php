<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?= $page_title ?></title>
        
        <link href="autresclimats.ico" rel="shortcut icon" type="image/x-icon">
        <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/yeti/bootstrap.min.css" rel="stylesheet">
        <link href="../css/styles.css" rel="stylesheet">
    </head>
    
    <body>
        <header>
            <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a id="home" class="navbar-brand" href="index.php">Accueil</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Liste des projets <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="index.php?action=projectsList">Tous les projets</a></li>
                                    <li><a href="index.php?action=projectsList&section=1">Volet 1</a></li>
                                    <li><a href="index.php?action=projectsList&section=2">Volet 2</a></li>
                                </ul>
                            </li>
                            <li><a id="projectList" href="index.php?action=projectsList">Liste des projets</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <?php
                                if (admin()) {
                                    echo '<li><a id="newProject" href="index.php?action=newProject">Nouveau projet</a></li>';
                                    echo '<li><a id="adminProjects" href="index.php?action=adminProjects">Gérer les projets</a></li>';
                                }
                            ?>
                            
                            <li class="dropdown">
                                <a id="language" href="#" class="dropdown-toggle" data-toggle="dropdown">Langue <b class="caret"></b></a>
                                <ul id="languages" class="dropdown-menu">
                                    <li id="fr"><a href="#">Français</a></li>
                                    <li id="en"><a href="#">English</a></li>
                                    <li id="es"><a href="#">Español</a></li>
                                </ul>
                            </li>
                            
                            <?php // SET ADMINISTRATION TAB 
                                if (admin()) echo '<li><a id="login" href="index.php?action=logout">Déconnexion</a></li>';
                                else echo '<li><a id="login" href="index.php?action=login">Administration</a></li>';
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
        <div id="contents" class="container">
        <div class="col-md-10 col-md-offset-1">
            <?= $contents ?>
        </div>
        </div>
        
        <footer>
        
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>  
        <script src="js/bootstrap-filestyle.min.js"></script>
        <script src="js/holder.js"></script>
        
        <?= $javascript ?>
        
    </body>
</html>