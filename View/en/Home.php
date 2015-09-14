<?php $page_title = 'Welcome to Other Climates'; ?>

<?php ob_start(); ?>

<header>

<div class="row">

  	<div class="col-sm-7 col-xs-12 home-page">
  	
        <h1>Other Climates</h1>
        <br>
        <p>
            The next conference on climate will be held in Paris in 2015.
            <br>
            It is not a scoop. Climate is changing, leading to increasing<br>
            economical, political and ecological instabilities.
        </p>

        <p>
            <em><strong>But climate isn’t the only thing to change!</strong></em>
            <br>
            Social, economical, educational, political climates change too.
        </p>
        
        <p>
            Other Climates wants to highlight the witnesses of these changes and the actors 
            who work for a future with more solidarity and fight against discrimination 
            on a daily basis all around the world.
        </p>
        
        <p>
            See our network and join these researchers, artists, associations 
            and citizens acting for a fairer future.
        </p>
        
        <a href="index.php?action=contact">
            <p>Join us!</p>
        </a>
    
    </div>
  
    <div class="col-sm-4 col-xs-12">
    
        <img src="https://lh3.googleusercontent.com/-1cgJdyB4JFw/U-kTSyZtGbI/AAAAAAAAACs/37Yu383VAm0/w608-h602-no/Other%2BClimates%2BSquare%2BLogo.png"
             class="img-responsive home-logo"/>
    
    </div>

</div>

</header>

<section id="home-gallery">
  <div class="row">
    <div class="col-xs-12">
      <h4 class="page-header">
        <strong>Focus on the old rainwater collection systems in India</strong>
      </h4>
      <a href="files/img/stepwells/01.jpg" data-lightbox="stepwells" data-title="Neemrana Baoli - Neemrana, Rajasthan">
        <img src="files/img/stepwells/01.jpg" class="img-responsive img-thumbnail center-block" />
      </a>
      <a href="files/img/stepwells/02.jpg" data-lightbox="stepwells" data-title=""></a>
      <a href="files/img/stepwells/03.jpg" data-lightbox="stepwells" data-title="Helical Vav - Champaner"></a>
      <a href="files/img/stepwells/04.jpg" data-lightbox="stepwells" data-title="Rani ki Vav - Patan"></a>
      <a href="files/img/stepwells/05.jpg" data-lightbox="stepwells" data-title=""></a>
      <a href="files/img/stepwells/06.jpg" data-lightbox="stepwells" data-title="Rudabai Vav - Adalaj"></a>
      <a href="files/img/stepwells/07.jpg" data-lightbox="stepwells" data-title="Dada Harir Vav - Ahmedabad"></a>
      <a href="files/img/stepwells/08.jpg" data-lightbox="stepwells" data-title="Mertani Baoli - Jhunjhunu"></a>
      <a href="files/img/stepwells/09.jpg" data-lightbox="stepwells" data-title="Bhamaria Vav - Mehmedabad"></a>
    </div>
  </div>
</section>

<article class="home-page">

<h4 class="page-header"><strong>They joined Other Climates</strong></h4>

<div class="row">
    
<?php foreach ($projects as $project): ?>
<?php if (!$project['p_logo'])
        $project['p_logo'] = 'js/holder.js/200x200'; ?>

    <div class="col-md-3 col-xs-6 text-center">
        <div class="img-container">
            <div class="row img-thumbnail">
                <a href="<?= "index.php?action=project&id=" . $project['p_id'] ?>">
                    <img src="<?= $project['p_logo'] ?>" alt="..." class="img-pres"/>
                </a>
            </div>
        </div>
        <div class="row">
            <label class="proj-name"><?= $project['p_name'] ?></label>
        </div>
        <div class="row empty">
        </div>
    </div>

<?php endforeach; ?>

</div>
</article>

<section>
<h4 class="page-header"><strong>Discover Other Climates projects worldwide</strong></h4>
<div class="row">
    <div class="col-xs-12">
        <div class="map_container">
            <div id="map_canvas" class="map_canvas"></div>
        </div>
    </div>
</div>
</section>

<section id="articles">
  <h4 class="page-header"><strong>Available articles</strong></h4>
  <div class="row">
    <div id="french-articles" class="col-xs-12 col-md-6 articles-list">
      <h4>French</h4>
      <a id="artBallonsPourEnergie" href="#">Ballons pour énergie verte</a><br>
      <a id="artChevronPollueur" href="#">Chevron pollueur mais pas payeur en Équateur</a><br>
      <a id="artContreLaFascination" href="#">Contre la fascination du désastre</a><br>
      <a id="artEcolePourTous" href="#">Des parents d'élèves défendent l'ecole pour tous</a><br>
      <a id="artEquateurBiodiversite" href="#">En Équateur, la biodiversité à l'épreuve de la solidarité internationale</a><br>
      <a id="artExtremesDroitesMutantes" href="#">Extrêmes droites mutantes en Europe</a><br>
      <a id="artEcologieIndustrielle" href="#">L'écologie industrielle comme processus de developpement territorial</a><br>
      <a id="artInternationaleDesDeclasses" href="#">L'internationale des déclassés</a><br>
      <a id="artLocalismeMondialisme" href="#">Le localisme est décalé, le mondialisme est illusoire</a><br>
      <a id="artEntreprisesEmploi" href="#">Les entreprises ne créent pas l'emploi</a><br>
      <a id="artPartDuPlastique" href="#">Part du plastique perdu en mer</a><br>
      <a id="artQuandLaFinance" href="#">Quand la finance se branche sur la nature</a><br>
      <a id="artTeleramaSpeculation" href="#">Télérama - Le climat est à la spéculation</a><br>
      <a id="artUnEcologiste" href="#">Un écologiste peut en cacher un autre</a><br>
      <a id="artUneNouvelleSynergie" href="#">Une nouvelle synergie entre le territoire, la firme et le consommateur</a><br>
      <a id="artUNESCOLesJeunes" href="#">UNESCO - Les jeunes, un passage obligé pour la paix</a><br>
      <a id="artVersDeNouveaux" href="#">Vers de nouveaux modèles productifs et organisationnels</a>
    </div>
    
    <div id="english-articles" class="col-xs-12 col-md-6 articles-list text-right">
      <h4>English</h4>
      <a id="artAPortrait" href="#">A portrait of modern inequality</a><br>
      <a id="artAWhiff" href="#">A whiff of fresh air</a><br>
      <a id="artAbandoningTheIdea" href="#">Abandoning the idea of India</a><br>
      <a id="artAnEngineeringGraduate" href="#">An engineering graduate turns into a successful entrepreneur</a><br>
      <a id="artDecentHumour" href="#">Decent humour, dissent, not prohibited</a><br>
      <a id="artEasyToCarry" href="#">Easy to carry effective solar powered insect trapper</a><br>
      <a id="artHowExpensive" href="#">How expensive it is to be poor</a><br>
      <a id="artIdeologyAndTheRise" href="#">Ideology and the rise of terror</a><br>
      <a id="artImprovingAnUnworkable" href="#">Improving an unworkable law</a><br>
      <a id="artInDavos" href="#">In Davos, worrying about inequality</a><br>
      <a id="artIntellectualClimate" href="#">Intellectual climate of inspiring concepts</a><br>
      <a id="artIslamicDifference" href="#">Islamic difference and radicalisation</a><br>
      <a id="artMeaningfulMemory" href="#">Meaningful memory</a><br>
      <a id="artNGOsOppose" href="#">NGOs oppose panel report</a><br>
      <a id="artNoEndToChild" href="#">No end to child Labour</a><br>
      <a id="artSheSoldHerKidney" href="#">She sold her kidney to set right land records</a><br>
      <a id="artSolarPanels" href="#">Solar panels on top of canal impress UN chief</a><br>
      <a id="artHinduCompilation" href="#">The Hindu - Compilation</a><br>
      <a id="artHinduNehru" href="#">The Hindu - The economic consequences of Nehru</a><br>
      <a id="artHinduWorrisome" href="#">The Hindu - Worrisome trends in agriculture</a><br>
      <a id="artTheOscars" href="#">The oscars and the rest of us</a><br>
      <a id="artTheyDefyDisability" href="#">They defy disability with dance</a>
    </div>
    
    <div id="spanish-articles" class="col-xs-12 articles-list">
      <h4>Spanish</h4>
      <p>Coming soon...</p>
    </div>
  </div>
</section>

<section id="footer-admin">
    <div class="container">
        <p class="text-muted"><a href="index.php?action=login">Administration</a></p>
        <p class="text-muted">&copy; jpreynat</p><br>
    </div>
</section>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>