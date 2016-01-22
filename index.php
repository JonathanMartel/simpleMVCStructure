<?php

/**
 * Fichier de lancement du MVC, Il appel le fichier de configuration.php et le fichier d'initialisation des GET/POST initialisation.php 
 * @author Jonathan Martel
 * @version 1.1
 * @update 2016-01-22 : Adaptation du code aux standards de codage du département de TIM
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
	 /***************************************************/
    /** Fichier de configuration, contient l'autoloader **/
    /***************************************************/
	require_once("./configuration.php");
	
   /***************************************************/
    /** Initialisation des variables **/
    /***************************************************/
	require_once("./initialisation.php");
   
   /***************************************************/
    /** Démarrage du controleur **/
    /***************************************************/
	$oCtl = new Controleur();
	$oCtl->gerer();

?>
