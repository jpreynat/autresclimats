<!DOCTYPE html>
<html lang="en">
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
                        <a id="home" class="navbar-brand" href="index.php">Home</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="index.php?action=about" class="dropdown-toggle" data-toggle="dropdown">About</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="index.php?action=about">Other Climates</a></li>
                                    <li><a href="index.php?action=about#historique">History</a></li>
                                    <li><a href="index.php?action=about#organisation">Organisation</a></li>
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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">The network of actors</span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="text-right"><a href="index.php?action=projectsList">See all projects</a></li>
                                    <li class="text-right"><a href="index.php?action=projectsList&section=1">Section 1 - Actions</a></li>
                                    <li class="text-right"><a href="index.php?action=projectsList&section=2">Section 2 - Research</a></li>
                                </ul>
                            </li>
                            <li><a href="index.php?action=contact">Contact us</a></li>
                            <li class="dropdown">
                                <a id="language" href="#" class="dropdown-toggle" data-toggle="dropdown">Language</b></a>
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
        <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDgF9-hv09KVH_BYGZgv-Rund5lKZkLifM"></script>
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
                
                // DOC FOR PART 1
                $('#docVolet1').click(function(e) {
                   e.preventDefault();
                   window.open('files/ACVolet1.pdf');
                });
                
                // DOC FOR PART 2
                $('#docVolet2').click(function(e) {
                   e.preventDefault();
                   window.open('files/ACVolet2.pdf');
                });
                
                //FRENCH ARTICLES
                // ARTICLE BALLONS POUR ENERGIE VERTE
                $('#artBallonsPourEnergie').click(function(e) {
                   e.preventDefault();
                   window.open('files/Ballons pour energie verte.odt');
                });
                
                // ARTICLE CHEVRON POLLUEUR MAIS PAS PAYEUR EN EQUATEUR
                $('#artChevronPollueur').click(function(e) {
                   e.preventDefault();
                   window.open('files/Chevron pollueur mais pas payeur en Equateur.pdf');
                });
                
                // ARTICLE CONTRE LA FASCINATION DU DESASTRE
                $('#artContreLaFascination').click(function(e) {
                   e.preventDefault();
                   window.open('files/Contre la fascination du desastre.pdf');
                });
                
                // ARTICLE DES PARENTS D'ELEVES DEFENDENT L'ECOLE POUR TOUS
                $('#artEcolePourTous').click(function(e) {
                   e.preventDefault();
                   window.open("files/Des parents d'eleves defendent l'ecole pour tous.pdf");
                });
                                
                // ARTICLE EN EQUATEUR, LA BIODIVERSITE A L'EPREUVE DE LA SOLIDARITE INTERNATIONALE
                $('#artEquateurBiodiversite').click(function(e) {
                   e.preventDefault();
                   window.open("files/En Equateur, la biodiversite a l'epreuve de la solidarite internationale.pdf");
                });
                
                // ARTICLE EXTREMES DROITES MUTANTES EN EUROPE
                $('#artExtremesDroitesMutantes').click(function(e) {
                   e.preventDefault();
                   window.open("files/Extremes droites mutantes en Europe.pdf");
                });
                
                // ARTICLE L'INTERNATIONALE DES DECLASSES
                $('#artInternationaleDesDeclasses').click(function(e) {
                   e.preventDefault();
                   window.open("files/L'internationale des declasses.pdf");
                });
                
                // ARTICLE LE LOCALISME EST DECALE, LE MONDIALISME EST ILLUSOIRE
                $('#artLocalismeMondialisme').click(function(e) {
                   e.preventDefault();
                   window.open("files/Le localisme est decale, le mondialisme est illusoire.pdf");
                });
                
                // ARTICLE LES ENTREPRISES NE CREENT PAS L'EMPLOI
                $('#artEntreprisesEmploi').click(function(e) {
                   e.preventDefault();
                   window.open("files/Les entreprises ne creent pas l'emploi.pdf");
                });
                
                // ARTICLE PART DU PLASTIQUE PERDU EN MER
                $('#artPartDuPlastique').click(function(e) {
                   e.preventDefault();
                   window.open("files/Part du plastique perdu en mer.odt");
                });
                
                // ARTICLE QUAND LA FINANCE SE BRANCHE SUR LA NATURE
                $('#artQuandLaFinance').click(function(e) {
                   e.preventDefault();
                   window.open("files/Quand la finance se branche sur la nature.pdf");
                });
                
                // ARTICLE TELERAMA - LE CLIMAT EST A LA SPECULATION
                $('#artTeleramaSpeculation').click(function(e) {
                   e.preventDefault();
                   window.open("files/Telerama - Le climat est a la speculation.pdf");
                });
                
                // ARTICLE UN ECOLOGISTE PEUT EN CACHER UN AUTRE
                $('#artUnEcologiste').click(function(e) {
                   e.preventDefault();
                   window.open("files/Un ecologiste peut en cacher un autre.pdf");
                });
                
                //ENGLISH ARTICLES
                // ARTICLE THE HINDU - COMPILATION
                $('#artHinduCompilation').click(function(e) {
                   e.preventDefault();
                   window.open("files/The Hindu - Compilation.odt");
                });
                
                // ARTICLE THE HINDU - THE ECONOMIC CONSEQUENCES OF NEHRU
                $('#artHinduNehru').click(function(e) {
                   e.preventDefault();
                   window.open("files/The Hindu - The economic consequences of Nehru.docx");
                });
                
                // ARTICLE THE HINDU - WORRISOME TRENDS IN AGRICULTURE
                $('#artHinduWorrisome').click(function(e) {
                   e.preventDefault();
                   window.open("files/The Hindu - Worrisome trends in agriculture.docx");
                });
                
                //SPANISH ARTICLES
                
                //ENABLE MAPS
                locateProjects();
            });
        </script>
        
        <?= $javascript ?>
        
    </body>
</html>