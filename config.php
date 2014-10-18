<?php
/**
 * Fichier de configuration. Il est appelé par index.php et par test/index.php
 * Il contient notamment l'autoloader
 * @author Jonathan Martel
 * @version 1.1
 * @update 2013-03-11
 * @update 2014-09-23 Modification de la fonction autoload, utilisation des path + appel à la fonction native.
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
	define('MODELE_DIR', 'modeles/');	// Chemin vers les modèles
	define('VUES_DIR', 'vues/');	// Chemin vers les vues
	define('LIB_DIR', 'lib/');	// Chemin vers les librairies
	set_include_path(get_include_path().PATH_SEPARATOR.MODELE_DIR.PATH_SEPARATOR.VUES_DIR.PATH_SEPARATOR.LIB_DIR);	// Ajoute le chemin dans les "path"
    spl_autoload_extensions('.class.php');	// Défini l'extension de fichier ".class.php" = Personne.class.php
    spl_autoload_register();	// Démarre la fonction autoload (chargement automatique de fichier sur appel de new NomClasse())
	
	
?>
