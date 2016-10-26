<?php
/**
 * Fichier de configuration. Il est appelé par index.php et par test/index.php
 * Il contient notamment l'autoloader
 * @author Jonathan Martel
 * @version 1.1
 * @update 2013-03-11
 * @update 2014-09-23 Modification de la fonction autoload, utilisation des path + appel à la fonction native.
 * @update 2016-01-22 : Adaptation du code aux standards de codage du département de TIM
 * @license MIT
 * @license http://opensource.org/licenses/MIT
 * 
 */
	define('MODELE_DIR', 'modeles/');	// Chemin vers les modèles
	define('VUES_DIR', 'vues/');			// Chemin vers les vues
	define('LIB_DIR', 'lib/');			// Chemin vers les librairies
	
	
	
	
	/**
	 * Fonction utilisée par Php pour charger les fichiers des classes instanciées
	 * @param {string} sClasse Nom de la classe
	 * @return void
	 */
	function chargeurDeClasse($sClasse) 
	{
		$aDossierClasse = array(MODELE_DIR, VUES_DIR, LIB_DIR, '' );
		
		foreach ($aDossierClasse as $sDossier) 
		{
			//var_dump('./'.$dossier.$class.'.class.php');
			if(file_exists('./'.$sDossier.$sClasse.'.class.php'))
			{
				require_once('./'.$sDossier.$sClasse.'.class.php');
			}
		}
	}
	spl_autoload_register('chargeurDeClasse');
	
	/*
	// Retrait de l'autoloader natif, non fonctionnel sur webdev
	set_include_path(get_include_path().PATH_SEPARATOR.MODELE_DIR.PATH_SEPARATOR.VUES_DIR.PATH_SEPARATOR.LIB_DIR);	// Ajoute le chemin dans les "path"
    spl_autoload_extensions('.class.php');	// Défini l'extension de fichier ".class.php" = Personne.class.php
	spl_autoload_register();	// Démarre la fonction autoload (chargement automatique de fichier sur appel de new NomClasse())
	*/
?>