<?php
  /**
   * Faire l'assignation des variables ici avec les isset() ou !empty()
   */
   
    //EMPTY
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

    if(empty($_GET['action']))
	{
		$_GET['action'] = '';
	}

?>