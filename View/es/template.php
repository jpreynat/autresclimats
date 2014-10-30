<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?= $page_title ?></title>
        
        <link href="autresclimats.ico" rel="shortcut icon" type="image/x-icon">
        <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/yeti/bootstrap.min.css" rel="stylesheet">
        <link href="../css/styles.css" rel="stylesheet">
        <link href="../css/lightbox.css" rel="stylesheet">
        <link href="../css/mapsstyles.css" rel="stylesheet">
    </head>
    
    <body>
        <header>
            <nav class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a id="home" class="navbar-brand" href="index.php">Inicio</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="index.php?action=about" class="dropdown-toggle" data-toggle="dropdown">Acerca de</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="index.php?action=about">Otros Climas</a></li>
                                    <li><a href="index.php?action=about#historique">Histórico</a></li>
                                    <li><a href="index.php?action=about#organisation">Organización</a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <?php
                                if (admin()) {
                                    /*
                                    echo '<li><a id="newProject" href="index.php?action=newProject">Nouveau projet</a></li>';
                                    echo '<li><a id="adminProjects" href="index.php?action=adminProjects">Gérer les projets</a></li>';
                                    echo '<li><a id="login" href="index.php?action=logout">Déconnexion</a></li>';
                                    */
                                    echo(
                                        '<li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration</span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="text-right"><a id="newProject" href="index.php?action=newProject">Nouveau projet</a></li>
                                                <li class="text-right"><a id="adminProjects" href="index.php?action=adminProjects">Gérer les projets</a></li>
                                                <li class="text-right"><a id="login" href="index.php?action=logout">Déconnexion</a></li>
                                            </ul>
                                        </li>'
                                        );
                                }
                            ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">La red de Otros Climas</span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="text-right"><a href="index.php?action=projectsList">Ver todos los proyectos</a></li>
                                    <li class="text-right"><a href="index.php?action=projectsList&section=1">Parte 1 - Acciones</a></li>
                                    <li class="text-right"><a href="index.php?action=projectsList&section=2">Parte 2 - Investigación</a></li>
                                </ul>
                            </li>
                            <li><a href="index.php?action=contact">Contactarnos</a></li>
                            <li class="dropdown">
                                <a id="language" href="#" class="dropdown-toggle" data-toggle="dropdown">Lengua</b></a>
                                <ul id="languages" class="dropdown-menu">
                                    <li id="fr" class="text-right"><a href="index.php?action=setLang&lang=fr">Français</a></li>
                                    <li id="en" class="text-right"><a href="index.php?action=setLang&lang=en">English</a></li>
                                    <li id="es" class="text-right"><a href="index.php?action=setLang&lang=es">Español</a></li>
                                </ul>
                            </li>
                            
                            <?php // SET ADMINISTRATION TAB
                            /*
                                if (admin()) echo '<li><a id="login" href="index.php?action=logout">Déconnexion</a></li>';
                                else echo '<li><a id="login" href="index.php?action=login">Administration</a></li>';
                            */
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
        <div id="contents" class="container">
            <?= $contents ?>
        </div>
        
        <footer>
        <div class="container">
            <p class="text-muted"></p>
        </div>
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>  
        <script src="js/bootstrap-filestyle.min.js"></script>
        <script src="js/jquery.jrumble.1.3.min.js"></script>
        <script src="js/holder.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="//maps.google.com/maps/api/js?sensor=false"></script>
        <script src="js/mapstools.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                // ENABLE ACTIVE CLASS FOR MENU
                $('.dropdown').hover(function() {
                    $(this).children('.dropdown-menu').show();
                    $(this).addClass('open');
                },
                                     function() {
                    $(this).children('.dropdown-menu').hide();
                    $(this).removeClass('open');
                });
                
                // ENABLE POPUP FOR DOCUMENTATION
                $('#docVolet2').click(function(e) {
                   e.preventDefault();
                   window.open('files/ACVolet2.pdf');
                });
                
                //ENABLE MAPS
                locateProjects();
            });
        </script>
        
        <?= $javascript ?>
        
    </body>
</html>