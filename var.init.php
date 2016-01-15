<?php
  /**
   * Faire l'assignation des variables ici avec les isset() ou !empty()
   */
   
   
	if(empty($_GET['requete']))
	{
		$_GET['requete'] = '';
	}
    if(empty($_GET['idOeuvre']))
	{
		$_GET['idOeuvre'] = '';
	}
    if(empty($_GET['idArrondissement']))
    {
		$_GET['idArrondissement'] = '';
	}
	
	if(empty($_GET['idCategorie']))
    {
		$_GET['idCategorie'] = '';
	}
	
    if(empty($_POST['categorie']))
	{
		$_POST['categorie'] = '';
	}
   
    if(empty($oeuvres))
    {
        $oeuvres = '';
    }

    if(isset($_GET["action"]) && $_GET["action"] == "ajouter")
    {
        //en ajout, pas d'initialisation puisque les champs sont vides
        //déterminer la prochaine action
        $action = "sauvegardeAjout";

    }
    
    

?>