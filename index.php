<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pliage31</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="assets/css/header.css" rel="stylesheet" type="text/css">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="assets/css/footer.css" rel="stylesheet" type="text/css">
	<link rel="icon" href="favicon.ico" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
	 crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
	 crossorigin="">

	</script>
	<meta name="description" content="Site de Pliage, Découpage, Tôlerie, Poinçonnage" />
	<meta property="og:locale" content="fr_FR" />
	<meta property="og:type" content="sitewebindustriel" />
	<meta property="og:title" content="Pliage 31" />
	<meta property="og:description" content="Site de Pliage, Découpage, Tôlerie, Poinçonnage" />
	<meta property="og:url" content="pliage31.com" />
	<meta property="og:site_name" content="Pliage31" />
	<meta property="og:image" content="{{ assets/images/section/background.jpg }}" />
	<meta property="og:image:secure_url" content="" />
	<meta property="og:image:type" content="image/jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="627" />
	<meta property="og:image:alt" content="Locaux de pliage 31" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="pliage31.com" />
	<meta name="twitter:title" content="Site Pliage 31" />
	<meta name="twitter:description" content="Site de Pliage, Découpage, Tôlerie, Poinçonnage " />
	<meta name="twitter:image" content="{{ assets/images/section/background.jpg }}" />
</head>

<body>
	<!--___________________________________________ HEADER ___________________________________________-->
	<!--PARTIE QUI CONTIENT LA BARRE DE NAVIGATION-->
	<header>
		<nav class="navbar navbar-expand-lg bg-light">
			<a class="navbar-brand" href="index.php">
				<!--LE LOGO-->
				<img class="logo" src="assets/images/logo/logo.png" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> 
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <!-- Pour modifier les titre, il faut remplacer le texte après la balise <a> comme "Accueil" ci-dessous.-->
          <li class="nav-item active"> <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a> 
          </li>
          <li class="nav-item dropdown"> <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Notre Savoir-Faire </a>
            <div class="dropdown-menu"> <a class="dropdown-item" href="pages/galerie_couvertine.php">Couvertines et Anti-gouttes</a>
              <a class="dropdown-item" href="pages/galerie_finitions.php">Les Finitions Portes et Fenêtres</a>
              <a class="dropdown-item" href="pages/galerie_façade.php">Les Façades</a>
              <a class="dropdown-item" href="pages/galerie_faux_plafonds.php">Les Faux Plafonds</a>
              <a class="dropdown-item" href="pages/galerie_inox_cuisine_autre.php">Inox Pour Les Cuisines Et Autres</a> 
            </div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="#">Plan D'accès</a> 
          </li>
          <li class="nav-item"> <a class="nav-link" href="#">Contact</a> 
          </li>
          <!--Pour rajouter un titre de plus, voici le code :
          <li class="nav-item"> <a class="nav-link" href="#">TITRE</a> 
          </li>-->
        </ul>
      </div>
    </nav>
  </header>
  <!--__________________________________________ /HEADER ___________________________________________-->
  <!--_________________________________________ SLIDESHOW ___________________________________________-->
  <div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide mt-lg-5 shadow-lg" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <!--PARTIE QUI CONTIENT LES IMAGES DU SLIDESHOW (IMAGES QUI DÉFILENT)-->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <!--PREMIÈRE IMAGE-->
          <!-- Pour modifier les images du slide, il faut changer le lien dans la partie "src=" -->
          <img class="d-block w-100" src="assets/images/slideshow/slideshow_2.jpg" alt="Premier slide">
        </div>
        <div class="carousel-item">
          <!--SECONDE IMAGE-->
          <img class="d-block w-100" src="assets/images/slideshow/slideshow_3.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <!--TROISIÈME IMAGE-->
          <img class="d-block w-100" src="assets/images/slideshow/slideshow_4.jpg" alt="Troisième slide">
        </div>
        <!--Pour rajouter une image au slideshow, voici le code :
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/images/slideshow/slideshow4.jpg" alt="Four slide">
        </div>-->
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>  <span class="sr-only">Previous</span> 
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>  <span class="sr-only">Next</span> 
      </a>
      <!--PARTIE QUI CONTIENT LE TEXTE DANS LE BANDEAU OPAQUE-->
      <div class="main-text">
        <div class="col-md-12 d-none d-md-block text-center">
          <!-- Pour modifier le titre, il faut modifier le texte entre <h1> et </h1> -->
          <!-- Pour modifier le texte, il faut modifier le texte entre <h3> et </h3> -->
          <h1> Pliage31, société de menuiserie métallique située à Aucamville.</h1>
          <h3> Particuliers ou professionnels, nous avons des solutions pour tous vos projets. </h3>
        </div>
      </div>
    </div>
  </div>
  <!--________________________________________ /SLIDESHOW ___________________________________________-->
  <!--________________________________________ CARDS ___________________________________________-->
  <!-- Pour modifier l'image il faudra changer le lien dans <img src=" -->
  <!-- Pour modifier le titre il faudra aller dans <h2 class="news-card__title"> -->
  <!-- Pour modifier le texte il faudra ller dans <p class="news-card__excerpt"> -->
  <div class="container-fluid savoirfaire mt-lg-5">
    <div class="row row_savoirfaire">
      <div class="col-12 text-center">
        <h1><span class="gné">Notre savoir-faire</span></h1>
      </div>
    </div>
    <!--CARDS SECTION NOTRE SAVOIR FAIRE-->
    <section>
      <div class="container">
        <div class="content-wrapper">
          <div class="news-card mx-4">
            <img src="https://www.pliage31.com/s/cc_images/cache_68027363.jpg?t=1552301316" alt="photo couvertine alu" class="news-card__image">
            <div class="news-card__text-wrapper">
              <h2 class="news-card__title">Couvertines et Anti-goutte</h2>
              <div class="news-card__details-wrapper">
                <p class="news-card__excerpt">Fabrication de couvertine et ATG alu RAL, acier, inox...</p> <a href="pages/galerie_couvertine.php" class="news-card__read-more">Voir la galerie <i class="fas fa-long-arrow-alt-right"></i></a> 
              </div>
            </div>
          </div>
          <!-- CARDS COUVERTINES ET ANTI-GOUTTES -->
          <div class="news-card mx-4">
            <img src="https://www.pliage31.com/s/cc_images/cache_68133538.jpg?t=1553004923" alt="photo finitions portes et fenêtres" class="news-card__image">
            <div class="news-card__text-wrapper">
              <h2 class="news-card__title">Finitions portes et fenêtres</h2>
              <div class="news-card__details-wrapper">
                <p class="news-card__excerpt">Entourage de porte et fenêtre, Habillage de tableau en alu, Baguette de finition.</p> <a href="pages/galerie_finitions.php" class="news-card__read-more">Voir la galerie <i class="fas fa-long-arrow-alt-right"></i></a> 
              </div>
            </div>
          </div>
          <!-- CARDS HABILLAGES ET FAÇADES -->
          <div class="news-card mx-4">
            <img src="https://www.pliage31.com/s/cc_images/cache_68036176.jpg?t=1552314854" alt="Habillage de façades" class="news-card__image">
            <div class="news-card__text-wrapper">
              <h2 class="news-card__title">Habillages de façades</h2>
              <div class="news-card__details-wrapper">
                <p class="news-card__excerpt">Habillage de bandeau: ossature, pose de cassettes, bardage, bandeaux et sous-façe.</p> <a href="pages/galerie_façade.php" class="news-card__read-more">Voir la galerie <i class="fas fa-long-arrow-alt-right"></i></a> 
              </div>
            </div>
          </div>
          <!-- CARDS FAUX PLAFONDS -->
          <div class="news-card mx-4">
            <img src="https://www.pliage31.com/s/cc_images/cache_68036186.jpg?t=1552315686" alt="Faux plafonds" class="news-card__image">
            <div class="news-card__text-wrapper">
              <h2 class="news-card__title">Faux-plafonds</h2>
              <div class="news-card__details-wrapper">
                <p class="news-card__excerpt">Lames, Métal déployé sur fet à T, Fixations invisibles.</p> <a href="pages/galerie_faux_plafonds.php" class="news-card__read-more">Voir la galerie <i class="fas fa-long-arrow-alt-right"></i></a> 
              </div>
            </div>
          </div>
          <!-- CARDS INOX POUR CUISINES ET AUTRES -->
          <div class="news-card mx-4">
            <img src="https://www.pliage31.com/s/cc_images/cache_68133586.jpg?t=1553005233" alt="Inox pour cuisines et autres" class="news-card__image">
            <div class="news-card__text-wrapper">
              <h2 class="news-card__title">Inox pour cuisines et autres</h2>
              <div class="news-card__details-wrapper">
                <p class="news-card__excerpt">Habillage en inox complet pour cuisine et autres pose en inox.</p> <a href="pages/galerie_inox_cuisine_autre.php" class="news-card__read-more">Voir la galerie <i class="fas fa-long-arrow-alt-right"></i></a> 
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--________________________________________ /CARDS ___________________________________________-->
  <!--PARTIE QUI CONTIENT LE BLOC "SUR-MESURE"-->
  <div class="container-fluid  surmesure text-center  mt-5">
    <div class="jumbotron mx-auto w-75">
      <!-- Pour modifier le titre, il faut modifier le texte entre <h1><span> et </span></h1> -->
      <!-- Pour modifier la ligne suivante, il faut modifier le texte entre <p class"lead"> et </p> -->
      <!-- Pour modifier la troisième ligne, il faut modifier le texte entre <p> et </p> -->
      <!-- Pour modifier le texte du bouton, il faut modifier le texte entre <p class"lead"><a> et </a></p> -->
      <h1 class="display-5"><span class="gné">Sur-mesure</span></h1>
      <p class="lead">Nous sommes à votre disposition pour réaliser vos pièces en fonction de vos choix de taille, matériau et angle.</p>
      <p>Afin de répondre au mieux à vos besoins de pliages nous tenons un large stock de matières.</p>
      <p class="lead"> <a class="btn btn-primary btn-lg" href="pages/dessinersapiece.php" role="button">Commandez votre pièce sur-mesure</a> 
      </p>
    </div>
  </div>
  <!--PARTIE QUI CONTIENT LES CARDS-->
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-12">
        <div class="card-deck">
          <!-- CARD TOLES ALU RAL -->
          <div class="news-card mx-4">
            <img src="https://www.pliage31.com/s/cc_images/cache_29561169.jpg?t=1408747350" alt="Images Tôles alu RAL" class="news-card__image">
            <div class="news-card__text-wrapper">
              <h2 class="news-card__title">Tôles alu RAL</h2>
              <div class="news-card__details-wrapper">
                <p class="news-card__excerpt">Afin de vous faire gagner du temps nous tenons de nombreuses références d'aluminium laqué RAL en stock permanent.</p> <a class="btn btn-primary btn-lg" href="pages/dessinersapiece.php" role="button">Liste des couleurs en stock</a> 
              </div>
            </div>
          </div>
          <!-- CARD LES AUTRES ALUMINIUMS -->
          <div class="news-card mx-4">
            <img src="https://www.pliage31.com/s/cc_images/cache_29599670.jpg?t=1408871650" alt="Images autres aluminium" class="news-card__image">
            <div class="news-card__text-wrapper">
              <h2 class="news-card__title">Les autres aluminiums</h2>
              <div class="news-card__details-wrapper">
                <p class="news-card__excerpt">Nous tenons également un large stock de feuilles d'aluminium brut, anodisé,et damiers en différents formats et épaisseurs.</p> <a class="btn btn-primary btn-lg" href="pages/dessinersapiece.php" role="button">Liste des autres matières en stock</a> 
              </div>
            </div>
          </div>
          <!-- CARD TOLES ACIER -->
          <div class="news-card mx-4">
            <img src="https://www.pliage31.com/s/cc_images/cache_29561739.jpg?t=1476981127" alt="Images Tôles Aciers" class="news-card__image">
            <div class="news-card__text-wrapper">
              <h2 class="news-card__title">Tôles acier</h2>
              <div class="news-card__details-wrapper">
                <p class="news-card__excerpt">Perforées, larmées, éléctro-zinguées.. galvanisées ou en inox.</p> <a class="btn btn-primary btn-lg" href="pages/dessinersapiece.php" role="button">Liste des autres matières en stock</a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/Sur-mesure -->
  <!--________________________________________ NOUS CONTACTER ___________________________________________-->
  <!--PARTIE QUI CONTIENT L'IMAGE DES LOCAUX + NOUS CONTACTER-->
  <div class="container-fluid apropos mt-5">
    <div class="container py-2">
      <div class="row">
        <div class="col-lg-6 text-center">
          <!-- Pour modifier l'image il faudra changer le lien dans "img src=" ci-dessous-->
          <img src="assets/images/section/background.jpg">
        </div>
        <div class="col-lg-6 my-auto text-center">
          <h2><span class="gné">Nous contacter</span></h2>
          <div class="my-5">
            <!-- Pour modifier le Téléphone, c'est ci dessous-->
            <p>Téléphone : <strong>05 62 10 26 22</strong> 
              <!-- Pour modifier le FAX, c'est ci dessous-->
              </br>Fax : <strong>05.62.10.54.20</strong> 
              <!-- Pour modifier l'Email, c'est ci dessous-->
              </br>Email : <strong>contact@pliage31.com</strong>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!--________________________________________ /NOUS CONTACTER ___________________________________________-->
    <!--________________________________________ OU NOUS TROUVER + MAP ___________________________________________-->
    <!-- OU NOUS TROUVER -->
    <!-- Modifier <h2><span class="gné">Où nous trouver ?</span></h2> pour changer le titre -->
    <!-- Modifier <p> pour changer le texte de la section -->
    <div class="container py-2">
      <div class="row">
        <div class="col-lg-6 text-center my-auto">
          <h2><span class="gné">Où nous trouver ?</span></h2>
          <div class="my-5">
            <p>Ouvert Du Lundi au Jeudi de <b>7h30 à 12h00</b> et <b>13h30 à 16h30</b> et Le Vendredi de <b>7h30 à 12h00</b>, nous proposons la livraison et un service express 24/48h pour répondre à vos urgences.</p>
          </div>
        </div>
        <!-- CARTE GOOGLE MAP -->
        <!-- Rien a modifier ici, voir dans "script.js" pour modifier le texte et l'image -->
        <div class="col-lg-6">
          <div id="map"></div>
        </div>
      </div>
    </div>
    <!--________________________________________/OU NOUS TROUVER + MAP ___________________________________________-->
  </div>
  <!--________________________________________ FOOTER ___________________________________________-->
  <!--PARTIE QUI CONTIENT LE FOOTER-->
  <footer class="mt-5">
  <div class="container-fluid">
      <div class="row text-center">
          <div class="col-lg-12">
              <div class="card-header">
                  <img src="assets/images/logo/logo_white.png" alt="logo Pliage31">
              </div>
              <p>Pliage 31 2 imp. Raymond Loewy 31140 Aucamville Téléphone : 05 62 10 26 22 Fax :05.62.10.54.20 Email : contact@pliage31.com</p>© Pliage31 | <a href="../pages/mentionslegales.php/">Mentions légales</a>
              <div class="accespages">
  <a href="pages/galerie_couvertine.php">Couvertines et gouttes</a> | <a href="pages/galerie_finitions.php">Finitions portes et fenêtres</a> | <a href="pages/galerie_façade.php">Façades</a> | <a href="pages/galerie_faux_plafonds.php">Faux Plafonds</a> | <a href="pages/galerie_inox_cuisine_autre.php">Inox cuisines et autres</a>
              </div>
          </div>
      </div>
  </div>	
  </footer>
  <!--________________________________________ /FOOTER ___________________________________________-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/630dbf8ee1.js" crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>