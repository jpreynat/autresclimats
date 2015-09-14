<?php $page_title = 'Bienvenue sur Autres Climats'; ?>

<?php ob_start(); ?>

<header>

<div class="row">

  	<div class="col-sm-7 col-xs-12 home-page">
  	
        <h1>Autres Climats</h1>
        <br>
        <p>
            En 2015 aura lieu à Paris la prochaine conférence sur le climat.
            <br>
            Car ce n’est un scoop pour personne, le climat change et avec lui de nombreux 
            déséquilibres économiques, politiques, écologiques vont s’accentuer.
        </p>

        <p>
            <em><strong>Le climat n’est pas seul à changer !</strong></em>
            <br>
            Le climat social, économique, éducatif, politique changent également.
        </p>
        
        <p>
            Autres Climats entend mettre en avant les témoins de ces changements 
            et les acteurs qui oeuvrent quotidiennement pour un avenir plus solidaire, 
            équitable et contre l’exclusion, partout dans le monde.
        </p>
        
        <p>
            Consultez les projets du réseau d’Autres Climats et rejoignez 
            ces dizaines de chercheurs, artistes, associations et citoyens.
        </p>
        
        <a href="index.php?action=contact">
            <p>Rejoignez-nous !</p>
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
      <h2>Focus sur les anciens systèmes de collecte d'eau de pluie en Inde</h2>
      <a href="files/img/stepwells/01.jpg" data-lightbox="stepwells">
        <img src="files/img/stepwells/01.jpg" class="img-responsive" />
      </a>
      <a href="files/img/stepwells/02.jpg" data-lightbox="stepwells"></a>
      <a href="files/img/stepwells/03.jpg" data-lightbox="stepwells"></a>
      <a href="files/img/stepwells/04.jpg" data-lightbox="stepwells"></a>
      <a href="files/img/stepwells/05.jpg" data-lightbox="stepwells"></a>
      <a href="files/img/stepwells/06.jpg" data-lightbox="stepwells"></a>
      <a href="files/img/stepwells/07.jpg" data-lightbox="stepwells"></a>
      <a href="files/img/stepwells/08.jpg" data-lightbox="stepwells"></a>
      <a href="files/img/stepwells/09.jpg" data-lightbox="stepwells"></a>
    </div>
  </div>
</section>
<!--
<section id="events">
  <div class="row">
    <div class="col-xs-12">
      <h2>Événement</h2>
      <p>
        INDP India et AEIP participeront au <a href="http://fr.unesco.org/events/role-femmes-lutte-contre-pauvrete-quatrieme-forum-international-ong-partenaires-officiels" target="_blank">
        Quatrième Forum international des ONG partenaires officiels de l'UNESCO</a>. <br/>
        A cette occasion, INDP interviendra le mardi 30 juin à la table ronde :
      </p>
      
      <div class="event">
        <p class="text-center">
          <strong>« Redynamiser la lutte contre la pauvreté »</strong><br>
     	    <em>Les femmes agents du changement pour un développement durable<br>
          Le rôle des médias, le rôle des TIC et de la recherche</em><br>
        </p>
        <p class="text-center event-time">
          Mardi 30 Juin<br/>
          14:30 - 16:00
        </p>
      </div>
      <p>
        Pour plus d'informations, nous vous invitons à contacter <a href="mailto:indp1999@gmail.com">Augustin Brutus</a> d'INDP ou <a href="mailto:raoulalonso@yahoo.fr">Raul Alonso</a> de l'AIEP.
      </p>
    </div>
  </div>
</section>
-->

<article class="home-page">

<h4 class="page-header"><strong>Ils ont déjà rejoint Autres Climats</strong></h4>

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
<h4 class="page-header"><strong>Retrouvez les projets d'Autres Climats à travers le monde</strong></h4>
<div class="row">
    <div class="col-xs-12">
        <div class="map_container">
            <div id="map_canvas" class="map_canvas"></div>
        </div>
    </div>
</div>
</section>

<section id="articles">
  <h4 class="page-header"><strong>Les articles disponibles</strong></h4>
  <div class="row">
    <div id="french-articles" class="col-xs-12 col-md-6 articles-list">
      <h4>En français</h4>
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
      <h4>En anglais</h4>
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
      <h4>En espagnol</h4>
      <p>A venir...</p>
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