<?php
/**
 * Class Controler
 * Gère les requêtes HTTP
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-10
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */

class Controler 
{
	
		/**
		 * Traite la requête
		 * @return void
		 */
		public function gerer()
		{
			
			switch ($_GET['requete']) {
				case 'accueil':
					$this->accueil();
					break;
				default:
					$this->accueil();
					break;
			}
		}
		private function accueil()
		{
			$oVue = new Vue();
			$oVue->afficheAccueil();
		}
		// Placer les méthodes du controleur.
		
		
}
?>















