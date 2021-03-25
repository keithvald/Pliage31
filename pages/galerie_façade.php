<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Galerie Façades</title>
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
			<div class="col-lg-2 text-center bg-light">
				<ul class="nav nav-pills nav-fill" id="myTabEx" role="tablist">
					<!-- TAB 1 -->
          <!--Pour modifier le texte des boutons, modifiez le texte avant la balise "</a>-->
					<li class="nav-item"> <a class="nav-link active show btn p-2" id="tb-tab1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Simply Market</a>
					</li>
					<!-- TAB 2 -->
					<li class="nav-item"> <a class="nav-link btn p-2" id="tb-tab2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Auchan</a>
					</li>
					<!-- TAB 3 -->
					<li class="nav-item"> <a class="nav-link btn p-2" id="tb-tab3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">La Mie de Pain</a>
					</li>
					<!-- TAB 4 -->
					<li class="nav-item"> <a class="nav-link btn p-2" id="tb-tab4" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Valse des Pains</a>
					</li>
					<!-- TAB 5 -->
					<li class="nav-item"> <a class="nav-link btn p-2" id="tb-tab5" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">Divers</a>
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
									<img src="../assets/images/galeries/façades/façade1.jpg" alt="façade1" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="1">
									<img src="../assets/images/galeries/façades/façade2.jpg" alt="façade2" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="2">
									<img src="../assets/images/galeries/façades/façade3.jpg" alt="Ossature tubulaire 30x30 Galvanisées" width="600" class="img-fluid">
									<div class="carousel-caption ">
										<p class="h5">Ossature tubulaire 30x30 galva</p>
									</div>
								</div>
								<div class="carousel-item" data-slide-number="3">
									<img src="../assets/images/galeries/façades/façade4.jpg" alt="façade4" width="600" class="img-fluid">
									<div class="carousel-caption ">
										<p class="h5">Pose des premieres cassettes</p>
									</div>
								</div>
								<div class="carousel-item" data-slide-number="4">
									<img src="../assets/images/galeries/façades/façade5.jpg" alt="façade5" width="600" class="img-fluid">
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
										<img src="../assets/images/galeries/façades/façade1.jpg" alt="façade1" class="img-fluid">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
										<img src="../assets/images/galeries/façades/façade2.jpg" alt="façade2" class="img-fluid one">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
										<img src="../assets/images/galeries/façades/façade3.jpg" alt="façade3" class="img-fluid two">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
										<img src="../assets/images/galeries/façades/façade4.jpg" alt="façade4" class="img-fluid three">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
										<img src="../assets/images/galeries/façades/façade5.jpg" alt="façade5" class="img-fluid four">
									</a>
								</li>
							</ul>
						</div>
						<!-- caption slideshow -->
						<div class="main-text mx-auto">
							<div class="col-md-12  text-center caption">
								<h1> Nos Façades</h1>
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
									<img src="../assets/images/galeries/façades/façade6.jpg" alt="façade6" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="1">
									<img src="../assets/images/galeries/façades/façade7.jpg" alt="façade7" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="2">
									<img src="../assets/images/galeries/façades/façade8.jpg" alt="façade8" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="3">
									<img src="../assets/images/galeries/façades/façade9.jpg" alt="façade9" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="4">
									<img src="../assets/images/galeries/façades/façade10.jpg" alt="Sous-façe aluminium sur rail" width="600" class="img-fluid">
									<div class="carousel-caption ">
										<p class="h5">Sous-façe alu sur rail</p>
									</div>
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
										<img src="../assets/images/galeries/façades/façade6.jpg" alt="façade6" class="img-fluid">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel1">
										<img src="../assets/images/galeries/façades/façade7.jpg" alt="façade7" class="img-fluid one">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel1">
										<img src="../assets/images/galeries/façades/façade8.jpg" alt="façade8" class="img-fluid two">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel1">
										<img src="../assets/images/galeries/façades/façade9.jpg" alt="façade9" class="img-fluid three">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel1">
										<img src="../assets/images/galeries/façades/façade10.jpg" alt="façade10" class="img-fluid four">
									</a>
								</li>
								</a>
								</li>
							</ul>
						</div>
						<!-- caption slideshow -->
						<div class="main-text mx-auto">
							<div class="col-md-12  text-center caption">
								<h1> Nos Façades</h1>
								<h3>  </h3>
							</div>
						</div>
					</div>
					<!-- TAB 2 ends above   -->
					<!-- Tab 3 Starts Here  -->
          <!--PARTIE QUI CONCERNE LE TROISIÈME CARROUSEL-->
					<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tb-tab3">
						<div id="myCarousel2" class="carousel slide">
							<!-- main slider carousel items -->
							<div class="carousel-inner text-center pb-4">
								<div class="active carousel-item" data-slide-number="0">
									<img src="../assets/images/galeries/façades/façade11.jpg" alt="façade11" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="1">
									<img src="../assets/images/galeries/façades/façade12.jpg" alt="façade12" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="2">
									<img src="../assets/images/galeries/façades/façade13.jpg" alt="Pose du bardage et bandeaux" width="600" class="img-fluid">
									<div class="carousel-caption ">
										<p class="h5">Pose du bardage et bandeaux</p>
									</div>
								</div>
								<div class="carousel-item" data-slide-number="3">
									<img src="../assets/images/galeries/façades/façade14.jpg" alt="Fabrication et pose" width="600" class="img-fluid">
									<div class="carousel-caption ">
										<p class="h5">Fabrication et pose</p>
									</div>
								</div>
								<div class="carousel-item" data-slide-number="4">
									<img src="../assets/images/galeries/façades/façade15.jpg" alt="Ossature porteuse" width="600" class="img-fluid">
									<div class="carousel-caption ">
										<p class="h5">Ossature porteuse</p>
									</div>
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
										<img src="../assets/images/galeries/façades/façade11.jpg" alt="façade11" class="img-fluid">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel2">
										<img src="../assets/images/galeries/façades/façade12.jpg" alt="façade12" class="img-fluid one">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel2">
										<img src="../assets/images/galeries/façades/façade13.jpg" alt="façade13" class="img-fluid two">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel2">
										<img src="../assets/images/galeries/façades/façade14.jpg" alt="façade14" class="img-fluid three">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel2">
										<img src="../assets/images/galeries/façades/façade15.jpg" alt="façade15" class="img-fluid four">
									</a>
								</li>
								</a>
								</li>
							</ul>
						</div>
						<!-- caption slideshow -->
						<div class="main-text mx-auto">
							<div class="col-md-12  text-center caption">
								<h1> Nos Façades</h1>
								<h3>  </h3>
							</div>
						</div>
					</div>
					<!-- Tab 3 ends Here -->
					<!-- Tab 4 Starts Here -->
          <!--PARTIE QUI CONCERNE LE QUATRIEME CARROUSEL-->
					<div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tb-tab4">
						<div id="myCarousel4" class="carousel slide">
							<!-- main slider carousel items -->
							<div class="carousel-inner text-center pb-4">
								<div class="active carousel-item" data-slide-number="0">
									<img src="../assets/images/galeries/façades/façade16.jpg" alt="façade16" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="1">
									<img src="../assets/images/galeries/façades/façade17.jpg" alt="Cassettes sur ossature galavanisées" width="600" class="img-fluid">
									<div class="carousel-caption ">
										<p class="h5">Cassettes sur ossature galva</p>
									</div>
								</div>
								<div class="carousel-item" data-slide-number="2">
									<img src="../assets/images/galeries/façades/façade18.jpg" alt="façade18" width="600" class="img-fluid">
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
										<img src="../assets/images/galeries/façades/façade16.jpg" alt="façade16" class="img-fluid">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel4">
										<img src="../assets/images/galeries/façades/façade17.jpg" alt="façade17" class="img-fluid one">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel4">
										<img src="../assets/images/galeries/façades/façade18.jpg" alt="façade18" class="img-fluid two">
									</a>
								</li>
								</a>
								</li>
							</ul>
						</div>
						<!-- caption slideshow -->
						<div class="main-text mx-auto">
							<div class="col-md-12  text-center caption">
								<h1> Nos Façades</h1>
								<h3>  </h3>
							</div>
						</div>
					</div>
					<!-- Tab 4 ends here -->
					<!-- Tab 5 Starts Here  -->
          <!--PARTIE QUI CONCERNE LE CINQUIEME CARROUSEL-->
					<div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tb-tab5">
						<div id="myCarousel5" class="carousel slide">
							<!-- main slider carousel items -->
							<div class="carousel-inner text-center pb-4">
								<div class="active carousel-item" data-slide-number="0">
									<img src="../assets/images/galeries/façades/façade19.jpg" alt="façade19" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="1">
									<img src="../assets/images/galeries/façades/façade20.jpg" alt="façade20" width="600" class="img-fluid">
								</div>
								<div class="carousel-item" data-slide-number="2">
									<img src="../assets/images/galeries/façades/façade21.jpg" alt="façade21" width="600" class="img-fluid">
								</div>
								<a class="carousel-control-prev" href="#myCarousel5" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>  <span class="sr-only">Previous</span> 
								</a>
								<a class="carousel-control-next" href="#myCarousel5" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>  <span class="sr-only">Next</span> 
								</a>
							</div>
							<!-- main slider carousel nav controls -->
							<ul class="carousel-indicators list-inline mx-auto px-2">
								<li class="list-inline-item active">
									<a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel5">
										<img src="../assets/images/galeries/façades/façade19.jpg" alt="façade19" class="img-fluid">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel5">
										<img src="../assets/images/galeries/façades/façade20.jpg" alt="façade20" class="img-fluid one">
									</a>
								</li>
								<li class="list-inline-item">
									<a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel5">
										<img src="../assets/images/galeries/façades/façade21.jpg" alt="façade21" class="img-fluid two">
									</a>
								</li>
								</a>
								</li>
							</ul>
						</div>
						<!-- caption slideshow -->
						<div class="main-text mx-auto">
							<div class="col-md-12  text-center caption">
								<h1> Nos Façades</h1>
								<h3>  </h3>
							</div>
						</div>
					</div>
					<!-- Tab 5 ends Here  -->
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