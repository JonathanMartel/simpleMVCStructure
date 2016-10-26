<?php
/**
 * Class Vue
 * Modèle de classe Vue. Dupliquer et modifier pour votre usage.
 * 
 * @author Jonathan Martel
 * @version 1.1
 * @update 2013-12-11
 * @update 2016-01-22 : Adaptation du code aux standards de codage du département de TIM
 * @license MIT
 * @license http://opensource.org/licenses/MIT
 * 
 */


class Vue {

	/**
	 * Produit l'entête html
	 * @access public
	 * @return void
	 */
	public function afficheEntete() {
		?>
		<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Mon simple MVC</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		
		<link rel="stylesheet" href="./css/normalize.css" type="text/css" media="screen">
		<link rel="stylesheet" href="./css/base_h5bp.css" type="text/css" media="screen">
		<link rel="stylesheet" href="./css/main.css" type="text/css" media="screen">
		
		<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script src="./js/plugins.js"></script>
		<script src="./js/main.js"></script>
	</head>

	<body>
		<?php
	}
	
	/**
	 * Contenu de la page d'accueil
	 * @access public
	 * @return void
	 */
	public function afficheAccueil() {
		
		?>
		<article>
			<h1>Bienvenue sur Simple MVC Structure </h1>
			<p>Simple MVC Structure n'est pas un framework, mais seulement une structure de base qui permet de monter un MVC rapidement en php. 
				Il suffit de forker le <a href="https://github.com/JonathanMartel/simpleMVCStructure">dépot Github</a> et de dupliquer les classes vues et modele afin d'en disposer à votre convenance.</p>
		</article>
		<?php
		
	}
	
	
	/**
	 * Produit le html du pied de page
	 * @access public
	 * @return void
	 */
	public function affichePied()
	{
		?>
		<div id="footer">
					Certains droits réservés @ Jonathan Martel (2013)<br>
					Sous licence Creative Commons (BY-NC 3.0)
				</div>
			</div>	
		</body>
	</html>
	<?php
	}
	
	
	
}
?>