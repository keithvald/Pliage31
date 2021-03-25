<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galerie Inox cuisine et autres</title>
  <link rel="icon" href="favicon.ico" />
  <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/style_pages.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/header.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/footer.css" rel="stylesheet" type="text/css">
</head>

<body>
  <!--___________________________________________ HEADER ___________________________________________-->
  <?php require 'header.php' ;?>
  <!--__________________________________________ /HEADER ___________________________________________-->
  <div class="container slider bg-light shadow-lg">
    <div class="row">
      <!--PARTIE QUI CONCERNE LES BOUTONS POUR CHANGER DE CARROUSEL-->
      <div class="col-lg-2  text-center bg-light">
        <ul class="nav nav-pills nav-fill" id="myTabEx" role="tablist">
          <!-- TAB 1 -->
          <!--Pour modifier le texte des boutons, modifiez le texte avant la balise "</a>-->
          <li class="nav-item"> <a class="nav-link active show btn p-2" id="tb-tab1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Cuisine 1</a>
          </li>
          <!-- TAB 2 -->
          <li class="nav-item"> <a class="nav-link btn p-2" id="tb-tab2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Cuisine 2</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 col-12 tab-content " id="slider">
        <!-- Lightbox below  -->
        <div id="mdb-lightbox-ui0"></div>
        <div class="mdb-lightbox"></div>
        <!-- Tab Set up Here -->
        <!-- Top of Tab Section  -->
        <div class="tab-content" id="myTabContentEx">
          <!-- Tab 1 Starts Here -->
          <!--PARTIE QUI CONCERNE LE PREMIER CARROUSEL-->
          <div class="tab-pane fade active show" id="tab1" role="tabpanel" aria-labelledby="tb-tab1">
            <div id="myCarousel" class="carousel slide">
              <!-- main slider carousel items -->
              <div class="carousel-inner text-center pb-4">
                <div class="active carousel-item" data-slide-number="0">
                  <img src="../assets/images/galeries/inox_cuisine_autre/inox_1.jpg" alt="Crédence inox 304L" width="600" class="img-fluid">
                  <div class="carousel-caption ">
                    <p class="h5">Crédence inox 304 L</p>
                  </div>
                </div>
                <div class="carousel-item" data-slide-number="1">
                  <img src="../assets/images/galeries/inox_cuisine_autre/inox_2.jpg" alt="inox_cuisine_autre2" width="600" class="img-fluid">
                </div>
                <div class="carousel-item" data-slide-number="2">
                  <img src="../assets/images/galeries/inox_cuisine_autre/inox_3.jpg" alt="inox_cuisine_autre3" width="600" class="img-fluid">
                </div>
                <!--Pour rajouter une image (sans commentaire) au carrousel, voici le code :
                <div class="carousel-item" data-slide-number="3">
                  <img src="*chemin de l'image*" width="600" class="img-fluid">
                </div>-->
                <!--Pour rajouter une image (avec commentaire) au carrousel, voici le code :
                <div class="carousel-item" data-slide-number="3">
                  <img src="*chemin de l'image*" width="600" class="img-fluid">
                  <div class="carousel-caption ">
                    <p class="h5">TEXTE À AJOUTER</p>
                  </div>
                </div>-->
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>  <span class="sr-only">Previous</span> 
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>  <span class="sr-only">Next</span> 
                </a>
              </div>
              <!-- main slider carousel nav controls -->
              <ul class="carousel-indicators list-inline mx-auto px-2">
                <li class="list-inline-item active">
                  <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                    <img src="../assets/images/galeries/inox_cuisine_autre/inox_1.jpg" alt="inox_cuisine_autre1" class="img-fluid">
                  </a>
                </li>
                <li class="list-inline-item">
                  <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                    <img src="../assets/images/galeries/inox_cuisine_autre/inox_2.jpg" alt="inox_cuisine_autre2" class="img-fluid one">
                  </a>
                </li>
                <li class="list-inline-item">
                  <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                    <img src="../assets/images/galeries/inox_cuisine_autre/inox_3.jpg" alt="inox_cuisine_autre3" class="img-fluid two">
                  </a>
                </li>
              </ul>
            </div>
            <!-- caption slideshow -->
            <div class="main-text mx-auto">
              <div class="col-md-12  text-center caption">
                <h1>Inox Cuisines et autres</h1>
                <h3>  </h3>
              </div>
            </div>
          </div>
          <!-- Tab 1 ends here -->
          <!-- TAB 2 starts below  -->
          <!--PARTIE QUI CONCERNE LE SECOND CARROUSEL--> 
          <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tb-tab2">
            <div id="myCarousel1" class="carousel slide">
              <!-- main slider carousel items -->
              <div class="carousel-inner text-center pb-4">
                <div class="active carousel-item" data-slide-number="0">
                  <img src="../assets/images/galeries/inox_cuisine_autre/inox_4.jpg" alt="Habillage de bar et plan de travail inox" width="600" class="img-fluid">
                  <div class="carousel-caption ">
                    <p class="h5">Habillage de bar et plan de travail inox</p>
                  </div>
                </div>
                <div class="carousel-item" data-slide-number="1"> 
                  <img src="../assets/images/galeries/inox_cuisine_autre/inox_5.jpg" alt="inox_cuisine_autre5" width="600" class="img-fluid">
                </div>
                <a class="carousel-control-prev" href="#myCarousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>  <span class="sr-only">Previous</span> 
                </a>
                <a class="carousel-control-next" href="#myCarousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>  <span class="sr-only">Next</span> 
                </a>
              </div>
              <!-- main slider carousel nav controls -->
              <ul class="carousel-indicators list-inline mx-auto px-2">
                <li class="list-inline-item active">
                  <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel1">
                    <img src="../assets/images/galeries/inox_cuisine_autre/inox_4.jpg" alt="inox_cuisine_autre4" class="img-fluid">
                  </a>
                </li>
                <li class="list-inline-item">
                  <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel1">
                    <img src="../assets/images/galeries/inox_cuisine_autre/inox_5.jpg" alt="inox_cuisine_autre5" class="img-fluid one">
                  </a>
                </li>
              </ul>
            </div>
            <!-- caption slideshow -->
            <div class="main-text mx-auto">
              <div class="col-md-12  text-center caption">
                <h1>Inox Cuisines et autres</h1>
                <h3>  </h3>
              </div>
            </div>
          </div>
          <!-- TAB 2 ends above   -->
        </div>
      </div>
    </div>
  </div>
  <!-- END OF Tab Section  -->
  <!--________________________________________ FOOTER ___________________________________________-->
  <footer>
    <?php require 'footer.php' ;?>
  </footer>
  <!--________________________________________ /FOOTER ___________________________________________-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../assets/js/script_pages.js"></script>
</body>

</html>