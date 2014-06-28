<?php


include_once('./modeles/Modele.class.php');

try {
    $bdd      = BD::getInstance("eureka", "dbconnect");
   
    if (!$bdd) {
            throw new Exception("Connexion Impossible à la base de données : ".HOST);
    }
	$monArticle = $bdd->get_article_acceuil();
     var_dump($monArticle);
	
    for ($i = 0; $i < count($monArticle); $i++) {

       // ici c'est un exemple de ce que le controleur fait
      // acceder au tableau retourné par le modele.

    }
   
    
    
    include_once('./vues/content/accueil.php');
    
}catch (Exception $e) {
    echo $e->getMessage();
}



?>




