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
                    if($_GET['idOeuvre'] != '')
                    {
                        $this->unOeuvre($_GET['idOeuvre']);    
                    }
                    else
                    {
                        $this->accueil();
                    }
					break;
                
                case 'artistes':
                    if($_GET['idOeuvre'] != '')
                    {
                        $this->unOeuvre($_GET['idOeuvre']);    
                    }
                    else
                    {
                        $this->artistes();
                    }

                    break;
                    
                case 'listeModifierArtistes':
                        $this->listeModifierArtistes();
                    break;
                case 'listeSupprimerArtistes':
                        $this->listeSupprimerArtistes();
                    break;
                
                case 'listeModifierUtilisateurs':
                        $this->listeModifierUtilisateurs();
                    break;
                case 'listeSupprimerUtilisateurs':
                        $this->listeSupprimerUtilisateurs();
                    break;
                case 'listeModifierCategories':
                        $this->listeModifierCategories();
                    break;
                case 'listeSupprimerCategories':
                        $this->listeSupprimerCategories();
                    break;  
                case 'listeModifierOeuvres':
                        $this->listeModifierOeuvres();
                    break;
                case 'listeSupprimerOeuvres':
                        $this->listeSupprimerOeuvres();
                    break;   
                    
                case 'modifierArtiste':
                        $this->modifierArtiste($_GET['idArtiste']);
                    break;
                case 'supprimerArtistes':
                        $this->supprimerArtistes($_GET['idArtiste']);
                    break;
                case 'modifierUtilisateurs':
                        $this->modifierUtilisateurs($_GET['idUtilisateur']);
                    break;
                case 'supprimerUtilisateurs':
                        $this->supprimerUtilisateurs($_GET['idUtilisateur']);
                    break;
                case 'modifierCategories':
                        $this->modifierCategories($_GET['idCategorie']);
                    break;
                case 'supprimerCategories':
                        $this->supprimerCategories($_GET['idCategorie']);
                    break;
                case 'supprimerOeuvres':
                        $this->supprimerOeuvres($_GET['idOeuvre']);
                    break; 
                case 'modifierOeuvre':
                        $this->modifierOeuvre($_GET['idOeuvre']);
                    break;     
                    
                    
                case 'inscription':
                    $this->inscription();
                    break;

                case 'afficheInscriptionAdmin':
                    $this->afficheInscriptionAdmin();
                    break;

            
                case 'connexion':
                    $this->connexion();
                    break;
                case 'recherche':
                    $this->rechercheOeuvre();
                    break;
                
                case 'arrondissements':
                    if($_GET['idArrondissement'] !='')
                    {
                        $this->oeuvresParArr($_GET['idArrondissement']);
                    }
                    else
                    {
                        $this->arrondissements();
                    } 
                    break;

                case 'unOeuvre':
                    $this->unOeuvre($_GET['idOeuvre']);
                    break;

                case 'categories':
                    $this->categories();
                    break;
                case 'oeuvresParCat':
                    $this->oeuvresParCat();
                    break;
                case 'oeuvresParArr';
                 	$this->oeuvresParArr();
                 	break;

                case 'ajoutOeuvre':
                    $this->ajoutOeuvre();
                    break;

                case 'ajouterUnArtiste':
                    $this->ajouterUnArtiste();
                    break;

                case 'profilUtilisateur':
                    $this->profilUtilisateur();
                    break;

                case 'listerUtilisateurs':
                    $this->listerUtilisateurs();
                    break;
                
                case 'admin':
                    $this->admin();
                    break;
                    
                default:
			    $this->accueil();
				break;
			}
            
		}
		
        private function accueil()
		{
            $oOeuvres = new MOeuvres ('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $aOeuvres = $oOeuvres::listeOeuvres();
            $oVue = new VueDefaut();
			$oVue->afficheHeader();
			$oVue->afficheAccueil($aOeuvres);
			$oVue->afficheFooter();
			
		} 

        private function unOeuvre($idget)
		{
            $oOeuvre = new MOeuvres ('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $oeuvre = $oOeuvre::listeUnOeuvre($idget);
            $oVue = new VueDefaut();
			$oVue->afficheHeader();
			$oVue->afficheUnOeuvre($oeuvre);
			$oVue->afficheFooter();
			
		}
		
		
         private function artistes()
		{
            $oArtistes = new MArtistes('', '', '' ,'', '', '');
            $oOeuvres = new MOeuvres ('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
              
            $aArtistes = $oArtistes::listeArtistes();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheArtistes($aArtistes, $oOeuvres);
            $oVue->afficheFooter();
    
		}
    
        private function listeModifierArtistes()
		{
            $oArtistes = new MArtistes('', '', '' ,'', '', '');
            $aArtistes = $oArtistes::listeArtistes();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheListeModifierArtistes($aArtistes);
            $oVue->afficheFooter();
    
		}
        private function listeSupprimerArtistes()
		{
            $oArtistes = new MArtistes('', '', '' ,'', '', '');
            $aArtistes = $oArtistes::listeArtistes();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheListeSupprimerArtistes($aArtistes);
            $oVue->afficheFooter();
    
		}


        private function listerUtilisateurs()
        {
            $oUtilisateurs = new MUtilisateurs('','','','','','');
            $aUtilisateurs = $oUtilisateurs::listeUtilisateurs();

            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->listerUtilisateurs($aUtilisateurs);
            $oVue->afficheFooter();
        }
    
        private function listeModifierUtilisateurs()
		{
            $oUtilisateurs = new MUtilisateurs('','','','','','');
            $aUtilisateurs = $oUtilisateurs::listeUtilisateurs();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheListeModifierUtilisateurs($aUtilisateurs);
            $oVue->afficheFooter();
    
		}
        private function listeSupprimerUtilisateurs()
		{
            $oUtilisateurs = new MUtilisateurs('', '', '' ,'', '', '');
            $aUtilisateurs = $oUtilisateurs::listeUtilisateurs();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheListeSupprimerUtilisateurs($aUtilisateurs);
            $oVue->afficheFooter();
    
		}
    
        private function listeModifierCategories()
		{
            $oCategories = new MCategories('','','');
            $aCategories = $oCategories::listeCategories();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheListeModifierCategories($aCategories);
            $oVue->afficheFooter();
    
		}
        private function listeSupprimerCategories()
		{
            $oCategories = new MCategories('','','');
            $aCategories = $oCategories::listeCategories();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheListeSupprimerCategories($aCategories);
            $oVue->afficheFooter();
    
		}
    
        private function listeModifierOeuvres()
		{
            $oOeuvres = new MOeuvres ('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $aOeuvres = $oOeuvres::listeOeuvres();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheListeModifierOeuvres($aOeuvres);
            $oVue->afficheFooter();
    
		}
        private function listeSupprimerOeuvres()
		{
            $oOeuvres = new MOeuvres ('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $aOeuvres = $oOeuvres::listeOeuvres();
              
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheListeSupprimerOeuvres($aOeuvres);
            $oVue->afficheFooter();
    
		}
    
    
    
        private function modifierArtiste($idArt)
        {   
            $oArtiste = new MArtistes('', '', '', '', '', '');
            $aArtiste = $oArtiste->getArtisteParId($idArt);
            $aArtistes = $oArtiste->listeArtistes();
            
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            
            if($_GET['idArtiste'] && $_GET['action'] == 'valider') {
                
                try
                {
                $oArtiste->modifierArtiste($_GET['idArtiste'], $_POST['prenom'], $_POST['nom'], $_POST['collectif'], $_POST['photoArtiste']);
                
                $oVue = new VueDefaut();
                $aArtistes = $oArtiste->listeArtistes();
                $oVue->afficheListeModifierArtistes($aArtistes); 
                    
                }
                catch (Exception $e)
                {
                    $message = $e->getMessage();     
                } 
                
    
            } else {
                $oVue->modifierUnArtiste($aArtiste);
            }     
            $oVue->afficheFooter();   
        }
    
        private function supprimerArtistes($idArtiste)
        {   
            $oArtiste = new MArtistes('', '', '', '', '', '');
            $oArtiste->supprimerArtiste($idArtiste);
            $aArtistes = $oArtiste::listeArtistes();
            
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheListeSupprimerArtistes($aArtistes);
            $oVue->afficheFooter();
        }
        
        private function modifierUtilisateur($idUtil)
        {   
            
        }
    
        private function supprimerUtilisateurs($idUtil)
        {   
            $oUtilisateur = new MUtilisateurs('', '', '','', '', '');
            $oUtilisateur->supprimerUtilisateurs($idUtil);

            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheInscription();
            $oVue->afficheFooter();
        }
    
        private function modifierOeuvre($idOeuvre)
        {   
            $erreurTitre ='';
            $message ='';
            
            $oArtistes = new MArtistes('', '', '' ,'', '', '');
            $aArtistes = $oArtistes::listeArtistes();
            
            $oCategories = new MCategories('', '', '' ,'', '','');
            $aCategories = $oCategories::listeCategories();
            
            $oSousCategories = new MSousCategories('', '', '', '');
            $aSousCategories = $oSousCategories::listeSousCategories();
            
            $oArrondissements = new MArrondissement('', '');
            $aArrondissements = $oArrondissements::listeArrondissement();
            
            $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            
            $aOeuvre = $oOeuvre->getOeuvreParId($idOeuvre);
            $aOeuvres = $oOeuvre->listeOeuvres();
            
            $idAdresse = $oOeuvre->recupererIdAdresse($idOeuvre);
            $aAdresse = $oOeuvre->getAdresseParId($idAdresse);
                       
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            
            
            if($_GET['idOeuvre'] && $_GET['action'] == 'valider') {
                $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
                
                $oOeuvre->modifierAdresse($idAdresse, $_POST['adresse'], $_POST['batiment'], $_POST['parc'], $_POST['latitude'], $_POST['longitude']);
                
                                         
                try
                {
                    $oOeuvre->modifierOeuvre($_GET['idOeuvre'], $_POST['titre'], $_POST['titreVariante'],  $_POST['technique'], $_POST['techniqueAng'], $_POST['description'], $_POST['validation'], $_POST['arrondissement'], $idAdresse, $_POST['artiste'], $_POST['categorie'], $_POST['sousCategorie'], $_POST['materiaux'], $_POST['materiauxAng']);
                
                $message = "Oeuvre modifiée.";
                    
                }
                catch (Exception $e)
                {
                    $message = $e->getMessage();     
                } 
            } else {
                $oVue->modifierOeuvre($aOeuvre, $aAdresse, $aArrondissements, $aArtistes, $aCategories, $aSousCategories, $erreurTitre, $message);
            }     
            $oVue->afficheFooter();  
        }
    
        private function supprimerOeuvres($idOeuvre) 
        {   
            $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $oOeuvre->supprimerOeuvre($idOeuvre);
            
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheAjoutOeuvre($aArtistes, $aCategories, $aArrondissements, $aSousCategories, $erreurTitre, $message);
            $oVue->afficheFooter();
        }
    
        
		private function arrondissements()
		{

			$oArrondisement = new MArrondissement('', '');
			//$aArrondissements = $oArrondisement::listeArrondissement($id_Arrondissement);
			$aArrondissements = $oArrondisement::listeArrondissement();

            $oVue = new VueDefaut();
            $oVue->afficheHeader();
			$oVue->afficheArrondissements($aArrondissements);
            $oVue->afficheFooter();
    
		}
    
		private function categories()
		{
            $oCategories = new MCategories('', '', '' ,'', '','');
            $aCategories = $oCategories::listeCategories();
            $oVue = new VueDefaut();

            $oVue->afficheHeader();
			$oVue->afficheCategories($aCategories);
            $oVue->afficheFooter();
    
		}


        private function oeuvresParCat()
        {   
            $id_cat = $_GET['idCategorie'];
            $oOeuvreParCat = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $aOeuvreParCat = $oOeuvreParCat::listeOeuvresParCat($id_cat);

            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheOeuvre_Par_Cat($aOeuvreParCat);
            $oVue->afficheFooter();
    
        }

		private function oeuvresParArr($getIdArr)
        {   
            $oOeuvreParArr = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $aOeuvreParArr = $oOeuvreParArr::listerOeuvresParArr($getIdArr);

            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheOeuvre_Par_Arr($aOeuvreParArr);
            $oVue->afficheFooter();
        }
    
        private function inscription()
        {
            $erreurTitre ='';
            $message ='';
          
            $oVue = new VueDefaut();
            $oVue->afficheHeader();

            if($_GET['action'] == 'ajoutUtilisateur') 
            {
                
                $oUtilisateur = new MUtilisateurs('', '', '','', '', '');
                $oUtilisateur->ajoutUtilisateur($_POST['utilisateur'], $mdp=MD5($_POST['motDePasse']),  $_POST['bio'], $_POST['score'], $_POST['photoUtilisateur']);
                $message = "Utilisateur ajoutée.";
            }

            $oVue->afficheInscription();
            $oVue->afficheFooter();    
        } 

        private function connexion()
        {
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheConnexion();
            $oVue->afficheFooter();
            
        } 

        private function rechercheOeuvre()
        {
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->rechercheOeuvre();
            $oVue->afficheFooter();
                
        }
    
        private function ajoutOeuvre()
        {
            $erreurTitre ='';
            $message ='';
            
            $oArtistes = new MArtistes('', '', '' ,'', '', '');
            $aArtistes = $oArtistes::listeArtistes();
            
            $oCategories = new MCategories('', '', '' ,'', '','');
            $aCategories = $oCategories::listeCategories();
            
            $oSousCategories = new MSousCategories('', '', '', '');
            $aSousCategories = $oSousCategories::listeSousCategories();
            
            $oArrondissements = new MArrondissement('', '');
            $aArrondissements = $oArrondissements::listeArrondissement();
            
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            
            if($_GET['action'] == 'ajoutOeuvre') {
                $oOeuvre = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
                
                $oOeuvre->ajouterAdresse($_POST['adresse'], $_POST['batiment'], $_POST['parc'], $_POST['latitude'], $_POST['longitude']);
                $idAdresse = $oOeuvre->recupererDernierId();
                                         
                try
                {
                    $oOeuvre->ajouterOeuvre($_POST['titre'], $_POST['titreVariante'],  $_POST['technique'], $_POST['techniqueAng'], $_POST['description'], $_POST['validation'], $_POST['arrondissement'], $idAdresse, $_POST['artiste'], $_POST['categorie'], $_POST['sousCategorie'], $_POST['materiaux'], $_POST['materiauxAng']);
                
                $message = "Oeuvre ajoutée.";
                    
                }
                catch (Exception $e)
                {
                    $message = $e->getMessage();     
                }
                
            }
            
            $oVue->afficheAjoutOeuvre($aArtistes, $aCategories, $aArrondissements, $aSousCategories, $erreurTitre, $message);
            $oVue->afficheFooter();

        }

        private function afficheInscriptionAdmin()
        {
          
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->afficheInscriptionAdmin();
            $oVue->afficheFooter();
            
        } 

        

        private function ajouterUnArtiste()
        {
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            $oVue->ajouterUnArtiste();
            $oVue->afficheFooter();
        }

        private function profilUtilisateur()
        {
            $oVue = new VueDefaut();
            $oVue->afficheHeader();
            //$oVue->ajouterUnArtiste();
            $oVue->afficheFooter();
        }

         private function admin()
        {
             
            $oOeuvres = new MOeuvres('', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $aOeuvres = $oOeuvres->listeOeuvres();
             
            $oArtistes = new MArtistes('', '', '', '', '', '');
            $aArtistes = $oArtistes->listeArtistes();
             
            $oUtilisateurs = new MUtilisateurs('', '', '', '', '', '');
            $aUtilisateurs = $oUtilisateurs->listeUtilisateurs();
             
            $oVue = new VueDefaut();
            $oVue->afficheHeaderAdmin();
            $oVue->afficheListeModifierOeuvres($aOeuvres);
            $oVue->afficheListeModifierUtilisateurs($aUtilisateurs);
            $oVue->afficheListeModifierArtistes($aArtistes);
            $oVue->afficheFooter();
        }

}
?>