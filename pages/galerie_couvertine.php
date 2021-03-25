<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Galerie Couvertines</title>
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
			<div class="col-lg-2 wow text-center bg-light">
				<ul class="nav nav-pills nav-fill" id="myTabEx" role="tablist">
					<!-- TAB 1 -->
           <!--Pour modifier le texte des boutons, modifiez le texte avant la balise "</a>-->
					<li class="nav-item"> <a class="nav-link active show" id="tb-tab1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Rondes</a> 
					</li>
					<!-- TAB 2 -->
					<li class="nav-item"> <a class="nav-link" id="tb-tab2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Sur balcon</a> 
					</li>
					<!-- TAB 3 -->
					<li class="nav-item"> <a class="nav-link" id="tb-tab3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Sur murette biaise</a> 
					</li>
					<!-- TAB 4 -->
					<li class="nav-item"> <a class="nav-link" id="tb-tab4" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">A double pentes</a> 
					</li>
				</ul>
			</div>
			<div class="col-lg-9 col-12 tab-content " id="slider">
				<!-- Tab Set up Here -->
				<!-- Top of Tab Section  -->
				<div class="tab-content" id="myTabContentEx">
					<!-- TAB 1 starts below  -->
          <!--PARTIE QUI CONCERNE LE PREMIER CARROUSEL-->
					<div class="tab-pane fade active show" id="tab1" role="tabpanel" aria-labelledby="tb-tab1">
						<div id="myCarousel" class="carousel slide">
							<!-- main slider carousel items -->
							<div class="carousel-inner text-center pb-4">
								<div class="active carousel-item" data-slide-number="0">
									<img src="../assets/images/galeries/couvertines_atg/couvertines_rondes_1.jpg" alt="Couvertines arrondies sur murette" width="600" class="img-fluid">
									<div class="carousel-caption">
										<p class="h5">Couvertines arrondies sur murette</p>
									</div>
								</div>
								<div class="carousel-item" data-slide-number="1">
									<img src="../assets/images/galeries/couvertines_atg/couvertines_rondes_2.jpg" alt="Couvertines rondes sous garde corps" width="600" class="img-fluid">
									<div class="carousel-caption">
										<p class="h5">Couvertines rondes sous garde corps</p>
									</div>
								</div>
								<div class="carousel-item" data-slide-number="2">
									<img src="../assets/images/galeries/couvertines_atg/couvertines_rondes_3.jpg" alt="couvertines rondes3" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="3">
									<img src="../assets/images/galeries/couvertines_atg/couvertines_rondes_4.jpg" alt="couvertines rondes4" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="4">
									<img src="../assets/images/galeries/couvertines_atg/couvertines_rondes_5.jpg" alt="couvertines rondes5" width="600" class="img-fluid">
								</div>
                <!--Pour rajouter une image (sans commentaire) au carrousel, voici le code :
								<div class="carousel-item" data-slide-number="5">
									<img src="*chemin de l'image*" width="600" class="img-fluid">
								</div>-->
                <!--Pour rajouter une image (avec commentaire) au carrousel, voici le code :
								<div class="carousel-item" data-slide-number="5">
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
										<img src="../assets/images/galeries/couvertines_atg/couvertines_rondes_1.jpg" alt="couvertines rondes1"  class="img-fluid">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
										<img src="../assets/images/galeries/couvertines_atg/couvertines_rondes_2.jpg" alt="couvertines rondes2" class="img-fluid one">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
										<img src="../assets/images/galeries/couvertines_atg/couvertines_rondes_3.jpg" alt="couvertines rondes3" class="img-fluid two">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
										<img src="../assets/images/galeries/couvertines_atg/couvertines_rondes_4.jpg" alt="couvertines rondes4" class="img-fluid three">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
										<img src="../assets/images/galeries/couvertines_atg/couvertines_rondes_5.jpg" alt="couvertines rondes5" class="img-fluid four">
									</a>
								</li>
							</ul>
						</div>
						<!-- caption slideshow -->
						<div class="main-text mx-auto">
							<div class="col-md-12 text-center caption">
								<h1>Nos Couvertines</h1>
							</div>
						</div>
					</div>
					<!-- TAB 1 ends above  -->
					<!-- TAB 2 starts below  -->
          <!--PARTIE QUI CONCERNE LE SECOND CARROUSEL--> 
					<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tb-tab2">
						<div id="myCarousel2" class="carousel slide">
							<!-- main slider carousel items -->
							<div class="carousel-inner text-center pb-4">
								<div class="active carousel-item" data-slide-number="0">
									<img src="../assets/images/galeries/couvertines_atg/couvertines_balcon (2).jpg" alt="couvertines balcon3" width="600" class="img-fluid">
									<div class="carousel-caption">
										<p class="h5">Alu RAL 1015</p>
									</div>
								</div>
								<div class="carousel-item" data-slide-number="1">
									<img src="../assets/images/galeries/couvertines_atg/couvertines_balcon (3).jpg" alt="couvertines balcon3" width="600" class="img-fluid">
									<div class="carousel-caption">
										<p class="h5">Pose d'angle sans coupe à 45 °</p>
									</div>
								</div>
								<div class="carousel-item" data-slide-number="2">
									<img src="../assets/images/galeries/couvertines_atg/couvertines_balcon (1).jpg" alt="couvertines balcon1" width="600" class="img-fluid">
								</div>
								<a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>  <span class="sr-only">Previous</span> 
								</a>
								<a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>  <span class="sr-only">Next</span> 
								</a>
							</div>
							<!-- main slider carousel nav controls -->
							<ul class="carousel-indicators list-inline mx-auto px-2">
								<li class="list-inline-item active">
									<a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel2">
										<img src="../assets/images/galeries/couvertines_atg/couvertines_balcon (2).jpg" alt="couvertines balcon2" class="img-fluid">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel2">
										<img src="../assets/images/galeries/couvertines_atg/couvertines_balcon (3).jpg" alt="couvertines balcon3" class="img-fluid one">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel2">
										<img src="../assets/images/galeries/couvertines_atg/couvertines_balcon (1).jpg" alt="couvertines balcon1" class="img-fluid two">
									</a>
								</li>
							</ul>
						</div>
						<!-- caption slideshow -->
						<div class="main-text mx-auto">
							<div class="col-md-12  text-center caption">
								<h1>Nos Couvertines</h1>
							</div>
						</div>
					</div>
					<!-- TAB 2 ends above   -->
					<!-- Tab 3 Starts Here  -->
          <!--PARTIE QUI CONCERNE LE TROISIEME CARROUSEL--> 
					<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tb-tab3">
						<div id="myCarousel3" class="carousel slide">
							<!-- main slider carousel items -->
							<div class="carousel-inner text-center pb-4">
								<div class="active carousel-item" data-slide-number="0">
									<img src="../assets/images/galeries/couvertines_atg/couvertines_biaise (1).jpeg" alt="Couvertines sur murette biaise avec fond intégré" width="600" class="img-fluid">
									<div class="carousel-caption ">
										<p class="h5">Couvertine sur murette biaise avec fond intégré</p>
									</div>
								</div>
								<div class="carousel-item" data-slide-number="1">
									<img src="../assets/images/galeries/couvertines_atg/couvertines_biaise (2).jpeg" alt="couvertines biaise2" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="2">
									<img src="../assets/images/galeries/couvertines_atg/couvertines_biaise (3).jpeg" alt="couvertines biaise3" width="600" class="img-fluid">
								</div>
								<a class="carousel-control-prev" href="#myCarousel3" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>  <span class="sr-only">Previous</span> 
								</a>
								<a class="carousel-control-next" href="#myCarousel3" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>  <span class="sr-only">Next</span> 
								</a>
							</div>
							<!-- main slider carousel nav controls -->
							<ul class="carousel-indicators list-inline mx-auto px-2">
								<li class="list-inline-item active">
									<a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel3">
										<img src="../assets/images/galeries/couvertines_atg/couvertines_biaise (1).jpeg" alt="couvertines biaise1" class="img-fluid">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel3">
										<img src="../assets/images/galeries/couvertines_atg/couvertines_biaise (2).jpeg" alt="couvertines biaise2" class="img-fluid one">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel3">
										<img src="../assets/images/galeries/couvertines_atg/couvertines_biaise (3).jpeg" alt="couvertines biaise3" class="img-fluid two">
									</a>
								</li>
							</ul>
						</div>
						<!-- caption slideshow -->
						<div class="main-text mx-auto">
							<div class="col-md-12  text-center caption">
								<h1>Nos Couvertines</h1>
							</div>
						</div>
					</div>
					<!-- Tab Three ends Here -->
					<!-- Tab Four Starts Here -->
          <!--PARTIE QUI CONCERNE LE QUATRIEME CARROUSEL--> 
					<div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tb-tab4">
						<div id="myCarousel4" class="carousel slide">
							<!-- main slider carousel items -->
							<div class="carousel-inner text-center pb-4">
								<div class="active carousel-item" data-slide-number="0">
									<img src="../assets/images/galeries/couvertines_atg/couvertines_doublepentes (1).jpg" alt="couvertines doublespentes1" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="1">
									<img src="../assets/images/galeries/couvertines_atg/couvertines_doublepentes (2).jpg" alt="couvertines doublespentes2" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="2">
									<img src="../assets/images/galeries/couvertines_atg/couvertines_doublepentes (3).jpg" alt="couvertines doublespentes3" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="3">
									<img src="../assets/images/galeries/couvertines_atg/couvertines_doublepentes (4).jpg" alt="Bouchon sur mesure" width="600" class="img-fluid">
									<div class="carousel-caption ">
										<p class="h5">Bouchon sur mesure</p>
									</div>
								</div>
								<a class="carousel-control-prev" href="#myCarousel4" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>  <span class="sr-only">Previous</span> 
								</a>
								<a class="carousel-control-next" href="#myCarousel4" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>  <span class="sr-only">Next</span> 
								</a>
							</div>
							<!-- main slider carousel nav controls -->
							<ul class="carousel-indicators list-inline mx-auto px-2">
								<li class="list-inline-item active">
									<a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel4">
										<img src="../assets/images/galeries/couvertines_atg/couvertines_doublepentes (1).jpg" alt="couvertines doublespentes1" class="img-fluid">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel4">
										<img src="../assets/images/galeries/couvertines_atg/couvertines_doublepentes (2).jpg" alt="couvertines doublespentes2" class="img-fluid one">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel4">
										<img src="../assets/images/galeries/couvertines_atg/couvertines_doublepentes (3).jpg" alt="couvertines doublespentes3" class="img-fluid two">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel4">
										<img src="../assets/images/galeries/couvertines_atg/couvertines_doublepentes (4).jpg" alt="couvertines doublespentes4" class="img-fluid three">
									</a>
								</li>
							</ul>
						</div>
						<!-- caption slideshow -->
						<div class="main-text mx-auto">
							<div class="col-md-12  text-center caption">
								<h1>Nos couvertines</h1>
							</div>
						</div>
					</div>
					<!-- Tab 4 ends here -->
				</div>
				<!-- END OF Tab Section  -->
				<!--/caption slideshow -->
				<!--/main slider carousel-->
				<div class="col-lg-1 my-auto text-center bg-light"></div>
			</div>
		</div>
	</div>
	<!--________________________________________ FOOTER ___________________________________________-->
	<footer>
		<?php require 'footer.php' ;?>
	</footer>
	<!--________________________________________ /FOOTER ___________________________________________-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="../assets/js/script.js"></script>
</body>

</html>