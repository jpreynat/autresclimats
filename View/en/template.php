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
                <div class="container-fluid">
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
                // ENABLE ACTIVE CLASS FOR MENU ----------------------------------------------------------------------
                $('.dropdown').hover(function() {
                    $(this).children('.dropdown-menu').show();
                    $(this).addClass('open');
                },
                                     function() {
                    $(this).children('.dropdown-menu').hide();
                    $(this).removeClass('open');
                });
                
                // ENABLE POPUP FOR DOCUMENTATION ----------------------------------------------------------------------
                
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
                
                //FRENCH ARTICLES -----------------------------------------------------------------------------------------------
                // ARTICLE BALLONS POUR ENERGIE VERTE
                $('#artBallonsPourEnergie').click(function(e) {
                   e.preventDefault();
                   window.open('files/fr/Ballons pour energie verte.odt');
                });
                
                // ARTICLE CHEVRON POLLUEUR MAIS PAS PAYEUR EN EQUATEUR
                $('#artChevronPollueur').click(function(e) {
                   e.preventDefault();
                   window.open('files/fr/Chevron pollueur mais pas payeur en Equateur.pdf');
                });
                
                // ARTICLE CONTRE LA FASCINATION DU DESASTRE
                $('#artContreLaFascination').click(function(e) {
                   e.preventDefault();
                   window.open('files/fr/Contre la fascination du desastre.pdf');
                });
                
                // ARTICLE DES PARENTS D'ELEVES DEFENDENT L'ECOLE POUR TOUS
                $('#artEcolePourTous').click(function(e) {
                   e.preventDefault();
                   window.open("files/fr/Des parents d'eleves defendent l'ecole pour tous.pdf");
                });
                                
                // ARTICLE EN EQUATEUR, LA BIODIVERSITE A L'EPREUVE DE LA SOLIDARITE INTERNATIONALE
                $('#artEquateurBiodiversite').click(function(e) {
                   e.preventDefault();
                   window.open("files/fr/En Equateur, la biodiversite a l'epreuve de la solidarite internationale.pdf");
                });
                
                // ARTICLE EXTREMES DROITES MUTANTES EN EUROPE
                $('#artExtremesDroitesMutantes').click(function(e) {
                   e.preventDefault();
                   window.open("files/fr/Extremes droites mutantes en Europe.pdf");
                });
                
                // ARTICLE L'ECOLOGIE INDUSTRIELLE COMME PROCESSUS DE DEVELOPPEMENT TERRITORIAL
                $('#artEcologieIndustrielle').click(function(e) {
                   e.preventDefault();
                   window.open("files/fr/L'ecologie industrielle comme processus de developpement territorial.pdf");
                });
                
                // ARTICLE L'INTERNATIONALE DES DECLASSES
                $('#artInternationaleDesDeclasses').click(function(e) {
                   e.preventDefault();
                   window.open("files/fr/L'internationale des declasses.pdf");
                });
                
                // ARTICLE LE LOCALISME EST DECALE, LE MONDIALISME EST ILLUSOIRE
                $('#artLocalismeMondialisme').click(function(e) {
                   e.preventDefault();
                   window.open("files/fr/Le localisme est decale, le mondialisme est illusoire.pdf");
                });
                
                // ARTICLE LES ENTREPRISES NE CREENT PAS L'EMPLOI
                $('#artEntreprisesEmploi').click(function(e) {
                   e.preventDefault();
                   window.open("files/fr/Les entreprises ne creent pas l'emploi.pdf");
                });
                
                // ARTICLE PART DU PLASTIQUE PERDU EN MER
                $('#artPartDuPlastique').click(function(e) {
                   e.preventDefault();
                   window.open("files/fr/Part du plastique perdu en mer.odt");
                });
                
                // ARTICLE QUAND LA FINANCE SE BRANCHE SUR LA NATURE
                $('#artQuandLaFinance').click(function(e) {
                   e.preventDefault();
                   window.open("files/fr/Quand la finance se branche sur la nature.pdf");
                });
                
                // ARTICLE TELERAMA - LE CLIMAT EST A LA SPECULATION
                $('#artTeleramaSpeculation').click(function(e) {
                   e.preventDefault();
                   window.open("files/fr/Telerama - Le climat est a la speculation.pdf");
                });
                
                // ARTICLE UN ECOLOGISTE PEUT EN CACHER UN AUTRE
                $('#artUnEcologiste').click(function(e) {
                   e.preventDefault();
                   window.open("files/fr/Un ecologiste peut en cacher un autre.pdf");
                });
                
                // ARTICLE UNE NOUVELLE SYNERGIE ENTRE LE TERRITOIRE, LA FIRME ET LE CONSOMMATEUR
                $('#artUneNouvelleSynergie').click(function(e) {
                   e.preventDefault();
                   window.open("files/fr/Une nouvelle synergie entre le territoire, la firme et le consommateur.pdf");
                });
                
                // ARTICLE UNESCO - LES JEUNES, UN PASSAGE OBLIGE POUR LA PAIX
                $('#artUNESCOLesJeunes').click(function(e) {
                   e.preventDefault();
                   window.open("files/fr/UNESCO - Les jeunes, un passage oblige pour la paix.pdf");
                });
                
                // ARTICLE VERS DE NOUVEAUX MODELES PRODUCTIFS ET ORGANISATIONNELS
                $('#artVersDeNouveaux').click(function(e) {
                   e.preventDefault();
                   window.open("files/fr/Vers de nouveaux modeles productifs et organisationnels.pdf");
                });
                
                //ENGLISH ARTICLES -----------------------------------------------------------------------------------------------
                // ARTICLE A PORTRAIT OF MODERN INEQUALITY
                $('#artAPortrait').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/A portrait of modern inequality.pdf");
                });
                
                // ARTICLE A WHIFF OF FRESH AIR
                $('#artAWhiff').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/A whiff of fresh air.pdf");
                });
                
                // ARTICLE ABANDONING THE IDEA OF INDIA
                $('#artAbandoningTheIdea').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/Abandoning the idea of India.pdf");
                });
                
                // ARTICLE AN ENGINEERING GRADUATE TURNS INTO A SUCCESSFUL ENTREPRENEUR
                $('#artAnEngineeringGraduate').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/An engineering graduate turns into a successful entrepreneur.pdf");
                });
                
                // ARTICLE DECENT HUMOUR, DISSENT, NOT PROHIBITED
                $('#artDecentHumour').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/Decent humour, dissent, not prohibited.pdf");
                });
                
                // ARTICLE EASY TO CARRY EFFECTIVE SOLAR POWERED INSECT TRAPPER
                $('#artEasyToCarry').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/Easy to carry effective solar powered insect trapper.pdf");
                });
                
                // ARTICLE HOW EXPENSIVE IT IS TO BE POOR
                $('#artHowExpensive').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/How expensive it is to be poor.pdf");
                });
                
                // ARTICLE IDEOLOGY AND THE RISE OF TERROR
                $('#artIdeologyAndTheRise').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/Ideology and the rise of terror.pdf");
                });
                
                // ARTICLE IMPROVING AN UNWORKABLE LAW
                $('#artImprovingAnUnworkable').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/Improving an unworkable law.pdf");
                });
                
                // ARTICLE IN DAVOS, WORRYING ABOUT INEQUALITY
                $('#artInDavos').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/In Davos, worrying about inequality.pdf");
                });
                
                // ARTICLE INTELLECTUAL CLIMATE OF INSPIRING CONCEPTS
                $('#artIntellectualClimate').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/Intellectual climate of inspiring concepts.pdf");
                });
                
                // ARTICLE ISLAMIC DIFFERENCE AND RADICALISATION
                $('#artIslamicDifference').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/Islamic difference and radicalisation.pdf");
                });
                
                // ARTICLE MEANINGFUL MEMORY
                $('#artMeaningfulMemory').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/Meaningful memory.pdf");
                });
                
                // ARTICLE NGOS OPPOSE PANEL REPORT
                $('#artNGOsOppose').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/NGOs oppose panel report.pdf");
                });
                
                // ARTICLE NO END TO CHILD LABOUR
                $('#artNoEndToChild').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/No end to child Labour.pdf");
                });
                
                // ARTICLE SHE SOLD HER KIDNEY TO SET RIGHT LAND RECORDS
                $('#artSheSoldHerKidney').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/She sold her kidney to set right land records.pdf");
                });
                
                // ARTICLE SOLAR PANELS ON TOP OF CANAL IMPRESS UN CHIEF
                $('#artSolarPanels').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/Solar panels on top of canal impress UN chief.pdf");
                });
                
                // ARTICLE THE HINDU - COMPILATION
                $('#artHinduCompilation').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/The Hindu - Compilation.odt");
                });
                
                // ARTICLE THE HINDU - THE ECONOMIC CONSEQUENCES OF NEHRU
                $('#artHinduNehru').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/The Hindu - The economic consequences of Nehru.docx");
                });
                
                // ARTICLE THE HINDU - WORRISOME TRENDS IN AGRICULTURE
                $('#artHinduWorrisome').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/The Hindu - Worrisome trends in agriculture.docx");
                });
                
                // ARTICLE THE OSCARS AND THE REST OF US
                $('#artTheOscars').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/The oscars and the rest of us.pdf");
                });
                
                // ARTICLE THEY DEFY DISABILITY WITH DANCE
                $('#artTheyDefyDisability').click(function(e) {
                   e.preventDefault();
                   window.open("files/en/They defy disability with dance.pdf");
                });
                
                //SPANISH ARTICLES -----------------------------------------------------------------------------------------------
                
                //ENABLE MAPS
                locateProjects();
            });
        </script>
        
        <?= $javascript ?>
        
    </body>
</html>