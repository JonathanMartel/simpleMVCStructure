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
                case 'oeuvreDetails':
                    $this->oeuvreDetails();
                    break;
                    default:
				    $this->accueil();
					break;
			}
            
		}
		
        private function accueil()
		{
            $oOeuvres = new MOeuvres ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $aOeuvres = $oOeuvres::listeOeuvres();
            $oVue = new VueDefaut();
			$oVue->afficheHeader();
			$oVue->afficheAccueil($aOeuvres);
			$oVue->afficheFooter();
			
		}
		
          private function artistes()
		{
            $oArtistes = new MArtistes('', '', '' ,'', '', '');
            $oOeuvres = new MOeuvres ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
              
            $aArtistes = $oArtistes::listeArtistes();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheArtistes($aArtistes, $oOeuvres);
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
    
		/*private function oeuvreDetails()
		{
            $idOeuvre = $_GET["idOeuvre"];
            $oOeuvre = new MOeuvres ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheOeuvreDetails($idOeuvre, $oOeuvre);
            $oVue->afficheFooter();
    
		}*/
		
}
?>















