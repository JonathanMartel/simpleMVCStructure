<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

	<head>

		<title>Test unitaire</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="../css/global.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div id="header">
			<h1>Test - Modèles</h1>
		</div>
		<div id="contenu">
			<?php
            
            include ("../modeles/MOeuvres.class.php");
            include ("../lib/PdoBDD.class.php");
            
			//$oArrondisement = new MArrondissement('', '');
			//$aArrondissements = $oArrondisement::listeArrondissement();
			//var_dump($oArrondisement);
            
            $oOeuvre = new MOeuvres('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $aOeuvre = $oOeuvre::ajouterOeuvre();
			?>
		</div>
		<div id="footer">

		</div>
	</body>
</html>








