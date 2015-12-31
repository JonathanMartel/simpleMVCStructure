<?php
/**
 * Class Vue
 * Template de classe Vue. Dupliquer et modifier pour votre usage.
 *
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 *
 */
class VueDefaut 
{


    /**
     * Affiche l'entete
     * @access public
     *
     */
    public function afficheHeader() 

    {
        ?>
        <!DOCTYPE html>
        <html lang="fr">
            <head>
                <title>Chass'Oeuvres</title>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width">

                <link rel="stylesheet" href="./css/normalize.css" type="text/css" media="screen">
                <link rel="stylesheet" href="./css/base_h5bp.css" type="text/css" media="screen">
                <link rel="stylesheet" href="./css/main.css" type="text/css" media="screen">
                <link rel="stylesheet" href="./css/_grid.css" type="text/css" media="screen">

                <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
                <script src="./js/plugins.js"></script>
                <script src="./js/main.js"></script>
            </head>

            <body>
                <div id="wrapper">
                <header>
                    <div class="conteneurNav">

                        <img src="images/logo.png" alt="logo">

                        <div class="conteneurMenu">

                            <div class="langue">

                                <a href="index.php?requete=inscription" class="inscription">S'INSCRIRE</a>
                                <a href="index.php?requete=connexion" class="connexion">SE CONNECTER</a>
                                <a href="#">FR/EN</a>
         
                            </div>

                            <div class="menu">
                                <nav>
                                    <a href="index.php?requete=accueil" class="accueil">ACCUEIL</a>
                                    <a href="index.php?requete=artistes" class="artiste">ARTISTE</a>
                                    <a href="index.php?requete=arrondissements" class="arrondisement">ARRONDISSEMENT</a>
                                    <a href="index.php?requete=categories" class="categorie">CATEGORIE</a>
                                </nav>
                            </div><br><br>

                         
                            </form>
                        </div>

                    </div>


                </header>

        <?php

    }
    

    /**
     * Affiche le moteur de RECHERCHE
     * Auteure: Thuy Tien VO
     * @access public
     *
     */
    public function afficheMoteurRecherche()

    { 
        ?>

            <div class="moteurRecherche">
                    <form method="post" action="">
                    <input type="text" id="recherche" name="mot" size="40">
                    <input type="submit" id="submit" value="Rechercher" alt="Lancer la recherche">
                    </form>
            </div>

        <?php

    }



    /**
     * Affiche la page d'inscription
     * @access public
     * @auteure: Thuy Tien Vo
     */
    public function afficheInscription() 
    {
        ?>
        <div>
        <h2 id="titre">Formulaire d'inscription</h2>
        <form class="formulaire"action="">
            <fieldset>
            Prénom:<br>
            <input type="text" name="prenom" >
            <br> <br>
            Nom:<br>
            <input type="text" name="nom" >
            <br> <br>
            Date de naissance:<br>
            <input  type="date" name="dateDeNaissance" placeholder="jj/mm/aaaa">
             <br> <br>
            Sexe:<br><br>
            <input type="radio" name="sex" value="male" checked> Male
            <input type="radio" name="sex" value="female"> Female<br><br>
            Courriel:<br>
            <input type="text" name="courriel" placeholder="exemple@domaine.com" >
            <br> <br>
            Biographie:<br>
            <textarea rows="8" cols="60" name="bio"placeholder="Entrer un text ici..."></textarea>
            <br><br>
             Nom d'utilisateur:<br> 
            <input type="text" name="utilisateur" >
            <br><br>
            Mot de passe:<br>
            <input type="text" name="motDePasse" >
            <br><br>
            Confirmer le mot de passe:<br>
            <input type="text" name="motDePasse" value="">
            <br><br>
            <input type="submit" value="Envoyer" id="button">
            <fieldset>
        </form>  
        </fieldset>
        </fieldset>
        </div>          
        <?php

    }

    /**
     * Affiche la page de connexion
     * @access public
     * @auteure: Thuy Tien Vo
     */
    public function afficheConnexion() 
    {
        ?>
        <div>
        <h2 id="titre1">Connexion</h2>
        <form class="formulaire1" action="">
            <fieldset>
            Nom d'utilisateur:<br> 
            <input type="text" name="utilisateur" >
            <br>
            Mot de passe:<br>
            <input type="text" name="motDePasse" >
            <br> <br>
            <input type="submit" value="Connexion" id="button">
            <fieldset>
        </form>
        </div>            
        <?php

    }
    /**
     * Affiche le pied de page
     * @access public
     *
     */
    public function afficheFooter() 
    {
        ?>
                        <footer >

                                Chass'Oeuvres 2015-2016 - Certains droits réservés @ Jonathan Martel (2013)<br>
                                Sous licence Creative Commons (BY-NC 3.0)


                        </footer>


                    </div>
                </body>
            </html>
        <?php

    }


    /**
     * Affiche la page d'accueil
     * @access public
     *
     */
    public function afficheAccueil($oeuvres) 
    {
        ?>
            <section id="gallery">
                <img src="images/img1.jpg">
            </section>
            
        <?php
           $compteur = 1;
           echo "<section class='contenu container'>";
           foreach($oeuvres as $oeuvre) {
                             
               if($compteur == 1){
                   echo "<div class= 'threecol first'>";
               }else if($compteur == 2||$compteur == 3){
                    echo "<div class= 'threecol'>";
               }else if  ($compteur == 4){
                    echo "<div class= 'threecol last'>";
               }
                              
                   $idOeuvre= $oeuvre->getIdOeuvre();
                   $titre = $oeuvre->getTitreOeuvre();
                   $arrondissement= $oeuvre ->getNomArrondissement();
                   $prenom = $oeuvre->getPrenomArtiste();
                   $nom = $oeuvre->getPreNomArtiste();
                   $collectif = $oeuvre->getCollectif();
                   $categorie = $oeuvre->getNomCategorie();

                   echo "<figure>";
                   echo "<a href='index.php?requete=accueil&idOeuvre=".$idOeuvre."'><img src='images/img_2.jpg'></a>";
                   echo "<figcaption>".$idOeuvre."</figcaption>";
                   echo "</figure>";

                   if($collectif =="") {
                      echo "<p>Artiste: ". $prenom . " " . $nom . "</p>";
                   } else {
                       echo "<p>Collectif: " . $collectif . "</p>";
                   }
                   echo "<p>Arondissement: ". $arrondissement ."</p>";
                   echo "<p>Categorie: ". $categorie ."</p>";
               echo "</div>";            
               if  ($compteur == 4){
                   $compteur=1;
               }
            }
        echo "</section>";
    }

    
    /**
     * Affiche un Oeuvre
     * @access public
     *
     */
    public function afficheUnOeuvre($oeuvre) 
    {
        echo "</br>";
         echo $idOeuvre= $oeuvre->getIdOeuvre();
         echo "</br>";
         echo $oeuvre->getTitreOeuvre();
        echo "</br>";
         echo $oeuvre ->getNomArrondissement();
        echo "</br>";
         echo $oeuvre->getPrenomArtiste();
        echo "</br>";
         echo $oeuvre->getPreNomArtiste();
        echo "</br>";
         echo $oeuvre->getNomCategorie();
       
    }

    
    
    
    
    /**
     * Affiche les oeuvres par artistes
     * @access public
     *
     */
    public function afficheArtistes($aArtistes, $oOeuvres) 
    {
        ?>
            <h2>Découvrez nos <span class="artistes">artistes</span> et <span class="collectif">collectifs</span></h2>

        <?php
        $compteur = 1;
        
        echo "<section class='contenu container'>";

        foreach($aArtistes as $artiste) {

            $photo = $artiste->getPhoto();
            $prenom = $artiste->getPrenom();
            $nom = $artiste->getNom();
            $collectif = $artiste->getCollectif();
            $idArtiste = $artiste->getIdArtiste();
            
            echo "<div class=' accordion sixcol ";

            if($compteur%2 == 1){
                echo "last'>";
            } else {
                 echo "first'>";
            }

            echo "<figure class='";
                if($collectif == ""){
                    echo "artistes'>";
                } else {
                    echo "collectif'>";
                }

            if($photo == ""){
                echo "<img src='./images/artisteDefaut.jpg'>";
            } else {
                echo "<img src='./images/". $photo . "'>";
            }

            if($collectif =="") {
                echo "<input type='checkbox' checked><p>". $prenom . " " . $nom . "</p>";

            } else {
                echo "<input type='checkbox' checked><p>" . $collectif . "</p>";

            }
            echo "<i></i>"
        ?>
            <div class="accordion-contenu">
               
        <?php
            
            $aOeuvres = $oOeuvres::listeOeuvresParArtiste($idArtiste);
            //var_dump($idArtiste);
            //var_dump($aOeuvres);
            $compteurContenu = 1;
            
            echo "<div class='sixcol first'>";
            echo "<ul>";
            foreach($aOeuvres as $oeuvre){
                
                if ($compteurContenu != 11) {
                    if($compteurContenu ==6) {
                    echo "</div><div class='sixcol first'>";
                    echo "<ul>";
                    $titreOeuvre = $oeuvre->getTitreOeuvre();
                    $idOeuvre = $oeuvre->getIdOeuvre();
                    echo "<li>" . $titreOeuvre . "</li>";
                    echo "<li><a href='index.php?requete=artistes&idOeuvre=" . $idOeuvre . "'>" . $titreOeuvre . "</a></li>";
                    $compteurContenu = $compteurContenu+1;
                }
                
                $titreOeuvre = $oeuvre->getTitreOeuvre();
                $idOeuvre = $oeuvre->getIdOeuvre();
                echo "<li>" . $titreOeuvre . "</li>";
                echo "<li><a href='index.php?requete=artistes&idOeuvre=" . $idOeuvre . "'>" . $titreOeuvre . "</a></li>";
                }
                
                $compteurContenu = $compteurContenu+1;
            }
        ?>            
                    </ul>
                </div>
                
        <?php
            echo "</figure>";
            echo "</div>";

            $compteur = $compteur + 1;
        }
        echo "</section> ";
    }
    
/**
     * Affiche les arrondissements 
     * @access public
     * @author Jorge Blanco
     * @version 1.0
     * 
     */
    public function afficheArrondissements($aArrondissements)

    {
        ?>

        <h2>Arrondisements</h2>
        <?php
        $compteur = 1;
        
        echo "<section class='contenu container'>";

        foreach($aArrondissements as $arrondissement)
        {
            $id_Arrondissement= $arrondissement->getidArrondissement();
            $nom = $arrondissement->getnomArrondissement();

            /////////////////////////////// DEVELOPPEMENT ////////////////////////////////////
            //var_dump($id_Arrondissement);
            //echo  $nom .'<br/>';
            //echo "<a href = 'index.php?requete=oeuvresParArr&idArrondissement=$id_Arrondissement'> " . $nom . "</a>";
            //echo "<a href = 'index.php?requete=oeuvresParArr' class='noir'> " . $nom . "</a>";

            echo "<div class=' accordion sixcol ";

             if($compteur%2 == 1){
                echo "last'>";
            } else {
                 echo "first'>";
            }
            /////////////////////////////// DEVELOPPEMENT ////////////////////////////////////
            //echo "<a href = 'index.php?requete=oeuvresParArr&idArrondissement=$id_Arrondissement' class='arrondisement'> " . $nom . "</a>";
            //<a href="index.php?requete=categories" class="categorie">CATEGORIE</a>
            //echo "<a href = 'index.php?requete=oeuvresParArr' class='arrondisement'> " . $nom . "</a>";
            echo "<figure class='arrondisement'>";   
            echo "<a href = 'index.php?requete=oeuvresParArr&idArrondissement=$id_Arrondissement' class='arrondisement'> " . $nom . "</a>";
            echo "</figure>";
            echo "</div>";
            $compteur = $compteur + 1;
        }
        echo "</section>";
        
    } //FIN FUNCTION afficheArrondissements



        /**
     * Affiche les oeuvres par arrondissement
     * @access public
     * @author Jorge Blanco
     * @version 1.0
     * 
     */
        public function afficheOeuvre_Par_Arr($aOevuresParArr) 

    {
        ?>

        <h2>OevuresParArr</h2>
        <?php

        /////////////////////////////// DEVELOPPEMENT ////////////////////////////////////
        //$compteur = 1;
        //echo "<section class='contenu container'>";
        foreach($aOevuresParArr as $OevuresParArr)
        {
             $nomOevure_Par_Arr = $OevuresParArr->getTitreOeuvre();
             echo $nomOevure_Par_Arr.'<br/>';   
        }
    }    //FIN FUNCTION afficheOeuvre_Par_Arr
    

    /**
     * Affiche  catégories
     * @access public
     * @author Thuy Tien VO
     * @version 1.0
     */
    public function afficheCategories($aCategories) 

    {
        ?>

        <h2>Catégories</h2>
        <?php
        $compteur = 1;
        
        echo "<section class='contenu container'>";

        foreach($aCategories as $categorie)
        {
            $id_Categorie= $categorie->getidCategorie();
            //$categorie->afficher();
            $nom = $categorie->getnomCategorie();

            echo "<div class=' accordion sixcol ";

             if($compteur%2 == 1){
                echo "last'>";
            } else {
                 echo "first'>";
            }
        
            echo "<figure class='categorie'>";   
            echo "<a href = 'index.php?requete=oeuvresParCat&idCategorie=$id_Categorie' class='categorie'> " . $nom. "</a>";
            echo "</figure>";
            echo "</div>";
            $compteur = $compteur + 1;
        }
        echo "</section>";
        
    } //FIN FUNCTION afficheCategorie

        /**
     * Affiche les oeuvres par catégorie
     * @access public
     * @author THuy Tien VO
     * @version 1.0
     * 
     */
        public function afficheOeuvre_Par_Cat($aOeuvreParCat) 

        {
            ?>
            <h2>Oeuvre Par Catégorie</h2>
            <?php

            foreach($aOeuvreParCat as $OeuvreParCat)
            {
                 $nomOeuvre_Par_Cat = $OeuvreParCat->getTitreOeuvre();
                 echo $nomOeuvre_Par_Cat.'<br/>';   
            }
        }    //FIN FUNCTION afficheOeuvreParCat
        



        //private function rechercheOeuvreParCat()
       // {
            
           // $erreur = '';
            //$aOeuvre = Array();
            
            //if($_GET['action'] == 'rechercher')
           // {
               // $oOeuvre = new Oeuvre();
                //try
               // {
                     
                  //  $aOeuvre = $oOeuvre->rechercheOeuvreParCat($_POST['categorie']);
               // }
               // catch (Exception $e)
                //{
               //     $erreur = $e->getMessage();     
                //}
                //$oVue->AfficheChampRechercheCategorie($_POST['categorie'], $erreur); 
               // $oVue->AfficheOeuvre($aOeuvre);
            //}
           // else
           // {
              //  $oVue->AfficheChampRechercheCategorie($_POST['categorie'], $erreur); 
            //}
              
            
        //}













    
    /**
     * Affiche une oeuvre en détail
     * @access public
     *
     */
    /*public function afficheOeuvreDetails($idOeuvre, $oOeuvre) {
       
        $aOeuvre = $oOeuvre::detailsOeuvreParId($idOeuvre);
         var_dump($aOeuvre);
        ?>
            <div class="contenu container">
                <div class="sixcol last">
                   <ul>
                    
        <?php
        foreach($aOeuvre as $oeuvre) {
            $titre = $oeuvre->getTitreOeuvre();
            $arrondissement = $oeuvre->getNomArrondissement();
            $anomArt = $oeuvre->getNomArt();
            $prenomArt = $oeuvre->getPrenomArt();
            $collectif = $oeuvre->getCollectif();
            $categorie = $oeuvre->getNomCategorie();       
        }
        echo "<li>Titre : " . $titre . "</li>";    
        echo "<li>Arrondissement : " . $arrondissement . "</li>";    
        echo "<li>Prénom : " . $prenom . "</li>";    
        echo "<li>Nom : " . $nom . "</li>";    
        echo "<li>Collectif : " . $collectif . "</li>";    
        echo "<li>Catégorie : " . $categorie . "</li>";    
        ?>
                    </ul>
                </div>
            </div>
        <?php
    }*/
}
?>
