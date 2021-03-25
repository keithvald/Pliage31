<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pièce sur mesure</title>
	<link rel="icon" href="favicon.ico" />
	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/style_dsp.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/header.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/footer.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!--________________________________________ HEADER ___________________________________________-->
	<header>
		<?php require 'header.php' ;?>
	</header>
	<!--________________________________________ /HEADER___________________________________________-->
	<!--________________________________________TITRE ___________________________________________-->
	<div class="container-fluid  surmesure text-center  mt-5">
		<div class="jumbotron mx-auto w-75">
			<!-- Pour modifier le titre, il faut modifier le texte entre <h1><span> et </span></h1> -->
			<!-- Pour modifier la ligne suivante, il faut modifier le texte entre <p class"lead"> et </p> -->
			<!-- Pour modifier la troisième ligne, il faut modifier le texte entre <p> et </p> -->
			<!-- Pour modifier le texte du bouton, il faut modifier le texte entre <p class"lead"><a> et </a></p> -->
			<h1 class="display-5"><span class="gné">Sur-mesure</span></h1>
			<p class="lead">Choisissez un matériau, une couleur pour les Alu RAL et une finition (si applicable) puis une épaisseur.
				<br>Nous avons toute une palette de formes possibles, contactez-nous par mail ou par téléphone en nous communiquant vos choix.</p>
			</p>
		</div>
	</div>
	<!--_______________________________________/TITRE ___________________________________________-->
	<!--________________________________________ PAGE ___________________________________________-->
	<div class="container my-4 col-left ctn-first">
		<div class="row">
			<div class="col-md-12">
				<!--------------------------------------CARD------------------------------------->
				<div class="metal text-center bg-light rounded">
					<h2>Nos matériaux</h2>
				</div>
			</div>
			<div class="row no-gutters my-2">
				<div class="col-md-4 my-auto">
					<div class="card-group">
						<div class="card ">
							<img class="card-img-top" src="../assets/images/dessiner_piece/toles/tolesperf.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles perforées</h3>
						</div>
						<a class="card stretched-link text-decoration-none" data-toggle="collapse" data-target="#tôlegalva">
							<img class="card-img-top" src="../assets/images/dessiner_piece/toles/tolesgalva.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles Galvanisées</h3>
						</a>
						<a class="card stretched-link text-decoration-none" data-toggle="collapse" data-target="#tôleelectro">
							<img class="card-img-top" src="../assets/images/dessiner_piece/toles/toleselectro.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles électro-zinguées</h3>
						</a>
					</div>
				</div>
				<div class="col-md-4 my-auto">
					<div class="card-group">
						<a class="card stretched-link text-decoration-none" data-toggle="collapse" data-target="#epDKP">
							<img class="card-img-top" src="../assets/images/dessiner_piece/toles/tolesDKP.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles en acier DKP</h3>
						</a>
						<a class="card stretched-link text-decoration-none" data-toggle="collapse" data-target="#epTôleLarmée">
							<img class="card-img-top" src="../assets/images/dessiner_piece/toles/tolesacierlamée.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles en aciers larmées</h3>
						</a>
						<a class="card stretched-link text-decoration-none" data-toggle="collapse" data-target="#epTôleAnod">
							<img class="card-img-top" src="../assets/images/dessiner_piece/alu/aluannodisé.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Aluminium Anodisé</h3>
						</a>
					</div>
				</div>
				<div class="col-md-4 my-auto">
					<div class="card-group">
						<a class="card stretched-link text-decoration-none" data-toggle="collapse" data-target="#epAluBrut">
							<img class="card-img-top" src="../assets/images/dessiner_piece/alu/alubrut.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Aluminium Brut</h3>
						</a>
						<a class="card stretched-link text-decoration-none" data-toggle="collapse" data-target="#epAluDam">
							<img class="card-img-top" src="../assets/images/dessiner_piece/alu/aludamiers.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Aluminium Damiers</h3>
						</a>
						<a class="card stretched-link text-decoration-none" data-toggle="collapse" data-target="#couleursRAL">
							<img class="card-img-top" src="../assets/images/dessiner_piece/alu/alulaquées.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">Tôles Alu Laquées RAL</h3>
						</a>
					</div>
					<!--card group-->
				</div>
			</div>
			<!--/Col-->
		</div>
		<!--/row-->
	</div>
	<!--/Container-->
	<div class="container col-left my-4 ctn-second">
		<div class="metal text-center bg-light rounded">
			<h2>Nos options</h2>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center text-white couleurs">Couleurs RAL</h3>
				<div class="collapse" id="couleursRAL">
					<div class="card-group" data-toggle="collapse" data-target="#epAluRAL">
						<div class="card RAL1013">
							<h3 class="card-title my-auto text-center">1013 Blanc perlé</h3>
						</div>
						<div class="card RAL1015">
							<h3 class="card-title my-auto text-center">1015 Ivoire clair</h3>
						</div>
						<div class="card RAL1034">
							<h3 class="card-title my-auto text-center">1034 Jaune pastel</h3>
						</div>
						<div class="card RAL1247 text-white">
							<h3 class="card-title my-auto text-center">1247 Bronze</h3>
						</div>
						<div class="card RAL3012">
							<h3 class="card-title my-auto text-center">3012 Rouge Beige</h3>
						</div>
						<div class="card RAL7015 text-white">
							<h3 class="card-title my-auto text-center">7015 Gris Ardoise</h3>
						</div>
						<div class="card RAL7016 text-white" data-toggle="collapse" data-target="#SAT">
							<h3 class="card-title my-auto text-center">7016 Gris Anthracite</h3>
						</div>
						<div class="card RAL7021 text-white">
							<h3 class="card-title my-auto text-center" data-toggle="collapse" data-target="#SAT">7021 Gris Noir</h3>
						</div>
						<div class="card RAL7022 text-white">
							<h3 class="card-title my-auto text-center" data-toggle="collapse" data-target="#SAT">7022 Gris Terre d'ombre</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="card-group" data-toggle="collapse" data-target="#epAluRAL">
								<div class="card RAL7031 text-white">
									<h3 class="card-title my-auto text-center">7031 Gris Bleu</h3>
								</div>
								<div class="card RAL7035">
									<h3 class="card-title my-auto text-center">7035 Gris Clair</h3>
								</div>
								<div class="card RAL9001">
									<h3 class="card-title my-auto text-center">9001 Blanc Crème</h3>
								</div>
								<div class="card RAL9005 text-white">
									<h3 class="card-title my-auto text-center">9005 Noir Foncé</h3>
								</div>
								<div class="card RAL9006">
									<h3 class="card-title my-auto text-center">9006 Aluminium Blanc</h3>
								</div>
								<div class="card RAL9010" data-toggle="collapse" data-target="#MAT" data-parent="#finitions">
									<h3 class="card-title my-auto text-center">9010 Blanc pur</h3>
								</div>
								<div class="card RAL9016" data-toggle="collapse" data-target="#SAT" data-parent="#finitions">
									<h3 class="card-title my-auto text-center">9016 Blanc Signalisation</h3>
								</div>
								<div class="card RAL9840 text-white">
									<h3 class="card-title my-auto text-center">9840 Marron</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb-2">
			<!--------------------------------------CARD------------------------------------->
			<div class="col-lg-6">
				<h3 class="text-center text-white">Finition</h3>
				<div class="" id="finitions">
					<div class="card-group">
						<div class="card collapse" id="MAT" data-parent="#finitions">
							<img class="card-img-top" src="../assets/images/dessiner_piece/textures/mat.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">MAT</h3>
						</div>
						<div class="card collapse text-decoration-none" id="PIEDRA" data-parent="#finitions">
							<img class="card-img-top" src="../assets/images/dessiner_piece/textures/sat.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">PIEDRA</h3>
						</div>
						<div class="card collapse text-decoration-none" id="SAT" data-parent="#finitions">
							<img class="card-img-top" src="../assets/images/dessiner_piece/textures/sat.png" alt="Card image cap">
							<h3 class="card-title my-auto text-center">SAT</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 text-white">
				<h3 class="text-center text-white">Epaisseur</h3>
				<div class="collapse show" id="épaisseur">
					<div class="collapse" id="epTôleAnod" data-parent="#épaisseur">
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">1mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">1,5mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">2mm</span>
						</label>
					</div>
					<div class="collapse" id="epAluBrut" data-parent="#épaisseur">
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">1mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">1,5mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">2mm</span>
						</label>
					</div>
					<div class="collapse" id="epDKP" data-parent="#épaisseur">
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">1,5mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">2mm</span>
						</label>
					</div>
					<div class="collapse" id="tôlegalva" data-parent="#épaisseur">
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">0.8mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">1mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">1,5 mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">2mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">4mm</span>
						</label>
					</div>
					<div class="collapse" id="tôleelectro" data-parent="#épaisseur">
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">1,5 mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">2mm</span>
						</label>
					</div>
					<div class="collapse" id="epTôleLarmée" data-parent="#épaisseur">
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">4mm</span>
						</label>
					</div>
					<div class="collapse" id="epAluDam" data-parent="#épaisseur">
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">2mm/3,2mm</span>
						</label>
						<label class="radio radio-gradient"> <span class="radio__input">
						    <input type="radio" name="radio" data-toggle="collapse" data-target="#dimDéfaut">
						    <span class="radio__control"></span>
							</span> <span class="radio__label">3mm/4,5mm</span>
						</label>
					</div>
					<div class="collapse" id="epAluRAL" data-parent="#épaisseur">
						<p>Toutes les références RAL sont disponibles en 1,5mm d'épaisseur, exceptées les références
							<br>1015, 1034 et 9010 qui sont aussi disponibles en épaisseur 1mm.</p>
					</div>
				</div>
				<!--card group-->
			</div>
			<!--col-->
			<!--/Col-->
		</div>
		<!--/row-->
	</div>
	<!--/Container-->
	<!--________________________________________ /PAGE ___________________________________________-->
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