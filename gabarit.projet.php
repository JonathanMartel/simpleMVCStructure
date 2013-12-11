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
				$oControleur = new Controler();	
				$oControleur->gerer();
				
			?>
			
			<div id="footer">
				Certains droits réservés @ Jonathan Martel (2013)<br>
				Sous licence Creative Commons (BY-NC 3.0)
			</div>
		</div>	
	</body>
</html>
