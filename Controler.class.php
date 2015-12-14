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
                case 'artistes':
                    $this->artistes();
                    break;
               case 'arrondissements':
                    $this->arrondissements();
                    break;
                   case 'categories':
                    $this->categories();
                    break;
                    
                    default:
				    $this->accueil();
					break;
			}
            
		}
		
        private function accueil()
		{
            $oVue = new VueDefaut();
			$oVue->afficheHeader();
			$oVue->afficheAccueil();
			$oVue->afficheFooter();
			
		}
		
          private function artistes()
		{
            $oArtistes = new MArtistes('', '', '' ,'', '', '');
            $aArtistes = $oArtistes::listeArtistes();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheArtistes($aArtistes);
            $oVue->afficheFooter();
    
		}
    
        private function arrondissements()
		{
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheArrondissements();
            $oVue->afficheFooter();
    
		}
    
        private function categories()
		{
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheCategories();
            $oVue->afficheFooter();
    
		}
    
		
		
}
?>















