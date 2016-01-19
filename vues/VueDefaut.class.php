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
                <link rel="stylesheet" href="fonts/style.css" type="text/css">

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

                                <a href="index.php?requete=inscription" class="inscription"><span class='icon-add-user'></span> S'INSCRIRE</a>
                                <a href="index.php?requete=connexion" class="connexion"><span class='icon-login'></span> SE CONNECTER</a>
                                <a href="#"><span class='icon-language'></span> FR/EN</a>
         
                            </div>

                            <div class="menu">
                                <nav>
                                    <a href="index.php?requete=accueil" class="accueil"><span class='icon-home'></span> ACCUEIL</a>
                                    <a href="index.php?requete=artistes" class="artiste"><span class='icon-man'></span> ARTISTE</a>
                                    <a href="index.php?requete=arrondissements" class="arrondisement"><span class='icon-map'></span> ARRONDISSEMENT</a>
                                    <a href="index.php?requete=categories" class="categorie"><span class='icon-list'></span> CATEGORIE</a>
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
                    <form action="index.php?requete=recherche"  method="post" >
                    <input type="text" id="recherche" name="mot" size="40" value=""> 
                    <input type="submit" id="submit" name="submit" value="Rechercher" alt="Lancer la recherche">
                    </form>
            </div>

        <?php

    }

    /**
     * Affiche le résultat de RECHERCHE
     * Auteure: Thuy Tien VO
     * @access public
     *
     */

    public function rechercheOeuvre()
    {   ?>
       
        <h2>Recherche</h2>

     
        <?php

        if(isset($_POST['submit']))
            {
                if($_POST['mot']=="")
                    {
                      echo "Veuillez saisir un mot clé avant d'effectuer la recherche";    
                    }
                else
                    {
                      $mot=$_POST['mot'];
                    }    
            }

    }

    /**
     * Affiche la page d'inscription
     * @access public
     * @auteure: Thuy Tien Vo
     * @modifie: Jorge Blanco
     */
    public function afficheInscription() 
    {
        ?>
        <div>
        <h2 id="titre">Formulaire d'inscription</h2>
        <form method="POST" class="formulaire" action="index.php?requete=inscription&action=ajoutUtilisateur">
        
            <fieldset>
                <!-- MODIFICATION TEMPORAIRE DU FORMULAIRE Jorge -->
            <!-- Prénom:<br>
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
            <br> <br> -->
            Biographie:<br>
            <textarea rows="8" cols="60" name="bio"placeholder="Entrer un text ici..."></textarea>
            <br><br>
             Nom d'utilisateur:<br> 
            <input type="text" name="utilisateur" >
            <br><br>
            Mot de passe:<br>
            <input type="password" name="motDePasse" >
            <br><br>
            Confirmer le mot de passe:<br>
            <input type="password" name="motDePasse" value="">
            <br><br>
            score:<br>
            <input type="text" name="score" value="">
            <br><br>
            photo:<br>
            <input type="text" name="photoUtilisateur" value="">
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
                    <script src='js/jquery.js'></script>
                    <script src='js/jquery.slides.js'></script>
                    
                    <script >
                        $(function(){
                            $('.slides').slidesjs({
                               play: {
                                      active: true,
                                        // [boolean] Generate the play and stop buttons.
                                        // You cannot use your own buttons. Sorry.
                                      effect: "slide",
                                        // [string] Can be either "slide" or "fade".
                                      interval: 3000,
                                        // [number] Time spent on each slide in milliseconds.
                                      auto: true,
                                        // [boolean] Start playing the slideshow on load.
                                      swap: true,
                                        // [boolean] show/hide stop and play buttons
                                      pauseOnHover: false,
                                        // [boolean] pause a playing slideshow on hover
                                      restartDelay: 2500
                                        // [number] restart delay on inactive slideshow
                                    } 
                            });
                        });

                   </script>
                </body>
            </html>
        <?php
    }


    /**
     * Affiche la page d'accueil
     * @access public
     * @auteur: German Mahecha
     */
    public function afficheAccueil($oeuvres) 
    {
        
        ?>
            <div class="slides">
                <img src="images/img1.jpg" alt=''>
                <img src="images/img2.jpg" alt=''>
                <img src="images/img3.jpg" alt=''>
            </div>
            
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
                   echo "<a href='index.php?requete=accueil&idOeuvre=".$idOeuvre."'><img src='images/img_2.jpg' alt=''></a>";
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
     * @auteur: German Mahecha
     */
    public function afficheUnOeuvre($oeuvre) 
    {
         ?>
        <section class='contenu container'>
            <div class= 'fourcol '>
                <img src='images/img_2.jpg' alt="">
            </div>
            <div class= 'sixcol'>
                <p>Artiste: <?php echo $oeuvre->getPrenomArtiste()." ".$oeuvre->getNomArtiste(); ?></p>
                <p>Nom de l'oeuvre: <?php echo $oeuvre->getTitreOeuvre(); ?></p>
                <p>Categorie: <?php echo $oeuvre->getNomCategorie(); ?></p>
                <p>Souscategorie: <?php echo $oeuvre->getNomSousCat(); ?></p>
                <p>Technique: <?php echo $oeuvre->getTechnique(); ?></p>
                <p>Materiaux: <?php echo $oeuvre->getNomMateriaux(); ?></p>
                <p>Arrondissement: <?php echo $oeuvre ->getNomArrondissement(); ?></p>
                <p>Parc: <?php echo $oeuvre ->getParc(); ?></p>
                <p>Batiment: <?php echo $oeuvre ->getBatiment(); ?></p>
                <p>adresse: <?php echo $oeuvre ->getAdresse(); ?></p>
                <p>Description:<?php echo  $oeuvre->getDescription(); ?></p>
                <a href='index.php?requete=accueil'><span class='icon-reply'></span> Retourner</a>
            </div>
        
        </section>
    
    <?php
       
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
                   // echo "<li>" . $titreOeuvre . "</li>";
                    echo "<li><a href='index.php?requete=artistes&idOeuvre=" . $idOeuvre . "'>" . $titreOeuvre . "</a></li>";
                    $compteurContenu = $compteurContenu+1;
                }
                
                $titreOeuvre = $oeuvre->getTitreOeuvre();
                $idOeuvre = $oeuvre->getIdOeuvre();
                //echo "<li>" . $titreOeuvre . "</li>";
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

        <h2>Arrondissements</h2>
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
            echo "<a href = 'index.php?requete=arrondissements&idArrondissement=$id_Arrondissement' class='arrondisement'> " . $nom . "</a>";
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

        <h2>Oeuvres par Arrondissements</h2>
        <?php
        foreach($aOevuresParArr as $OevuresParArr)
        {
            $idOeuvre= $OevuresParArr->getIdOeuvre();
            $titre = $OevuresParArr->getTitreOeuvre();

            echo "<a href = 'index.php?requete=unOeuvre&idOeuvre=$idOeuvre' class='arrondisement'>" . $titre . "</a>" . '</br>';
   
        }
    }    //FIN FUNCTION afficheOeuvre_Par_Arr
    

    /**
     * Affiche catégories
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
            $id_Categorie= $categorie->getIdCategorie();
            //$categorie->afficher();
            $nom = $categorie->getNomCategorie();

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
        
    /**
     * Affiche le header de la partie Admin
     * @access public
     * @author Gautier Piatek
     * @version 1.0
     * 
     */
    public function afficheHeaderAdmin() 

    {
        ?>
         <!DOCTYPE html>
        <html lang="fr">
            <head>
                <title>Chass'Oeuvres - Administration</title>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width">

                <link rel="stylesheet" href="./css/normalize.css" type="text/css" media="screen">
                <link rel="stylesheet" href="./css/base_h5bp.css" type="text/css" media="screen">
                <link rel="stylesheet" href="./css/main.css" type="text/css" media="screen">
                <link rel="stylesheet" href="./css/_grid.css" type="text/css" media="screen">
                <link rel="stylesheet" href="fonts/style.css" type="text/css">

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

                                <a href="index.php?requete=connexion" class="connexion">SE CONNECTER</a>
                                <a href="#">FR/EN</a>
                                <a href="index.php?requete=accueil" class="accueil"><span class="icon-home"></span> ACCUEIL</a>
         
                            </div>

                        </div>

                    </div>


                </header>
        <?php

        
    }
    
    /**
     * Affiche le contenu de l'admin
     * @access public
     * @author Gautier Piatek
     * @version 1.0
     * 
     */
    public function afficheContenuAdmin($aArtistes, $aCategories, $aArrondissements, $aSousCategories, $erreurTitre, $message) 

    {   
        
        ?>
        <div class="admin">
           <div class="menuAdmin">
                <nav>
                    <ul>
                         
                        <li>
                            GESTION
                            <ul>
                                <li>
                                    <a href="#">OEUVRES</a>
                                       <ul>
                                            <li><a href="index.php?requete=ajoutOeuvre">Ajouter</a></li>
                                            <li><a href="index.php?requete=listeModifierOeuvres">Modifier</a></li>
                                            <li><a href="index.php?requete=listeSupprimerOeuvres">Supprimer</a></li>
                                        </ul>
                                </li>

                                <li>
                                    <a href="#">ARTISTES</a>
                                        <ul>
                                            <li><a href="index.php?requete=ajouterUnArtiste">Ajouter</a></li>
                                            <li><a href="index.php?requete=listeModifierArtistes">Modifier</a></li>
                                            <li><a href="index.php?requete=listeSupprimerArtistes">Supprimer</a></li>
                                        </ul>
                                </li>

                                <li>
                                    <a href="#">CATEGORIES</a>
                                        <ul>
                                            <li><a href="#">Ajouter</a></li>
                                            <li><a href="index.php?requete=listeModifierCategories">Modifier</a></li>
                                            <li><a href="index.php?requete=listeSupprimerCategories">Supprimer</a></li>
                                        </ul>
                                </li>

                                <li>
                                    <a href="index.php?requete=listerUtilisateurs">UTILISATEURS</a>
                                        <ul>
                                            <li><a href="index.php?requete=afficheInscription">Ajouter</a></li>
                                            <li><a href="index.php?requete=listeModifierUtilisateurs">Modifier</a></li>
                                            <li><a href="index.php?requete=listeSupprimerUtilisateurs">Supprimer</a></li>
                                        </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            MODERATION
                            <ul>
                                <li><a href="#">Photos</a></li>
                                <li><a href="#">Commentaires</a></li>
                            </ul>
                        </li>
                        <br>
                        <li>
                            <a href="#">MISE A JOUR BDD</a>
                        </li> 

                    </ul>

                </nav>
            </div>
            
            <section class="contenu container">
        
                <h2>Administration</h2>

                <div class="administration">
                   <div class="twelvecol">
                       <h3>Ajouter une oeuvre</h3>

                       <form method="POST" action="index.php?requete=ajoutOeuvre&action=ajoutOeuvre">
                           
                            <label>Titre : </label> <input type="text" name="titre"><span><?php echo $erreurTitre;?><br>
                            <label>Titre (Variante) : </label> <input type="text" name="titreVariante"><br>
                            <label>Technique : </label> <input type="text" name="technique"><br>
                            <label>Technique (anglais) : </label> <input type="text" name="techniqueAng"><br>
                            <label>Description : </label> <input type="text" name="description"><br>
                            <label>Validation : </label> <input type="radio" checked name="validation" value="1"> Oui <input type="radio" name="validation" value="0"> Non<br>
                            
                            <label>Adresse Civique : </label> <input type="text" name="adresse"><br>
                            <label>Batiment : </label> <input type="text" name="batiment"><br>
                            <label>Parc : </label> <input type="text" name="parc"><br>
                            <label>Latitude : </label> <input type="text" name="latitude"><br>
                            <label>Longitude : </label> <input type="text" name="longitude"><br>
                            <label>Arrondissement : </label> <select name="arrondissement">
                                <option value="nonChoisi">Choisir un Arrondissement</option>
                            <?php
                                foreach ($aArrondissements as $arrondissement) {
                                    echo "<option value='".$arrondissement->getidArrondissement()."'>".$arrondissement->getnomArrondissement()."</option>"; 
                                }
                            ?>
                           </select><br>
                               <label>Artiste/Collectif : </label> <select name="artiste">
                                <option value="nonChoisi">Choisir un Artiste/Collectif</option>
                            <?php
                                foreach ($aArtistes as $artiste) {
                                    
                                    if($artiste->getNom() == "") {
                                        
                                         echo "<option value='".$artiste->getIdArtiste()."'>".$artiste->getCollectif()."</option>"; 
                                    } else {                                    
                                       
                                        echo "<option value='".$artiste->getIdArtiste()."'>". $artiste->getPrenom() . " " . $artiste->getNom()."</option>";
                                    }
                                }
                            ?>
                           </select><br>
                               <label>Catégorie : </label> <select name="categorie">
                                <option value="nonChoisi">Choisir une Catégorie</option>
                            <?php 
                                foreach ($aCategories as $categorie) {
                                    echo "<option value='".$categorie->getidCategorie()."'>".$categorie->getnomCategorie()."</option>"; 
                                }
                            ?>
                           </select><br>
                               <label>Sous-Catégorie : </label> <select name="sousCategorie">
                                <option value="nonChoisi">Choisir une Sous-Catégorie</option>
                            <?php
                                foreach ($aSousCategories as $sousCategorie) {
                                    echo "<option value='".$sousCategorie->getidSousCategorie()."'>".$sousCategorie->getnomSousCategorie()."</option>"; 
                                }
                            ?>    
                           </select><br>
                               <label>Matériaux : </label> <input type="text" name="materiaux"><br>
                               <label>Matériaux (anglais) : </label> <input type="text" name="materiauxAng"><br><br>
                            
                            <input type="submit" name="sauvegarder" value="Valider"> <span><?php echo $message; ?></span>
                       </form>

                   </div>

                </div>
            </section>
        </div>
        
        
        <?php

        
    }
    
    /**
     * Fonction qui modifie une Oeuvre
     * @access public
     * @author Gautier Piatek
     * @version 1.0
     */
    
    public function modifierOeuvre($aOeuvre, $aAdresse, $aArrondissements, $aArtistes, $aCategories, $aSousCategories, $erreurTitre, $message) {
        
        $idOeuvre = $aOeuvre['idOeuvre'];
        $titre = $aOeuvre['titreOeuvre'];
        $titreVariante = $aOeuvre['titreVariante'];
        $technique = $aOeuvre['technique'];
        $techniqueAng = $aOeuvre['techniqueAng'];
        $description = $aOeuvre['description'];
        $validation = $aOeuvre['validationOeuvre'];
        $adresseCiv = $aAdresse['adresseCiv'];
        $batiment = $aAdresse['batiment'];
        $parc = $aAdresse['parc'];
        $latitude = $aAdresse['latitude'];
        $longitude = $aAdresse['longitude'];
        $idArrondissement = $aOeuvre['idArrondissement'];
        $idCategorie = $aOeuvre['idCategorie'];
        $idSousCategorie = $aOeuvre['idSousCategorie'];
        $nomMateriaux = $aOeuvre['nomMateriaux'];
        $nomMateriauxAng = $aOeuvre['nomMateriauxAng'];
        $idArtiste = $aOeuvre['idArtiste'];
        ?>
        <div class="administration">
                   <div class="twelvecol">
                       <h3>Modifier une oeuvre</h3>

                       <form method="POST" action="index.php?requete=modifierOeuvre&idOeuvre=<?php echo $idOeuvre; ?>&action=valider">
                           
                            <label>Titre : </label> <input type="text" name="titre" value="<?php echo $titre; ?>"><span><?php echo $erreurTitre;?><br>
                            <label>Titre (Variante) : </label> <input type="text" name="titreVariante" value="<?php echo $titreVariante; ?>"><br>
                            <label>Technique : </label> <input type="text" name="technique" value="<?php echo $technique; ?>"><br>
                            <label>Technique (anglais) : </label> <input type="text" name="techniqueAng" value="<?php echo $techniqueAng; ?>"><br>
                            <label>Description : </label> <input type="text" name="description" value="<?php echo $description; ?>"><br>
                            <label>Validation : </label> <input type="radio" checked name="validation" value="<?php echo $validation; ?>"> Oui <input type="radio" name="validation" value="0"> Non<br>
                            
                            <label>Adresse Civique : </label> <input type="text" name="adresse" value="<?php echo $adresseCiv; ?>"><br>
                            <label>Batiment : </label> <input type="text" name="batiment" value="<?php echo $batiment; ?>"><br>
                            <label>Parc : </label> <input type="text" name="parc" value="<?php echo $parc; ?>"><br>
                            <label>Latitude : </label> <input type="text" name="latitude" value="<?php echo $latitude; ?>"><br>
                            <label>Longitude : </label> <input type="text" name="longitude" value="<?php echo $longitude; ?>"><br>
                            <label>Arrondissement : </label> <select name="arrondissement" >
                                <option value="nonChoisi">Choisir un Arrondissement</option>
                            <?php
                                foreach ($aArrondissements as $arrondissement) {
                                    echo "<option value='". $arrondissement->getidArrondissement() . "'";
                                    if($arrondissement->getidArrondissement() == $idArrondissement){
                                        echo " selected";
                                    }  
                                    echo ">".$arrondissement->getnomArrondissement()."</option>"; 
                                }
                            ?>
                           </select><br>
                               <label>Artiste/Collectif : </label> <select name="artiste">
                                <option value="nonChoisi">Choisir un Artiste/Collectif</option>
                            <?php
                                foreach ($aArtistes as $artiste) {
                                    
                                    if($artiste->getNom() == "") {
                                        
                                        echo "<option value='".$artiste->getIdArtiste()."'";
                                        if($artiste->getIdArtiste() == $idArtiste){
                                            echo " selected";
                                        } 
                                        echo ">".$artiste->getCollectif()."</option>"; 
                                    } else {                                    
                                       
                                        echo "<option value='".$artiste->getIdArtiste()."'";
                                        if($artiste->getIdArtiste() == $idArtiste){
                                            echo " selected";
                                        }
                                        echo ">". $artiste->getPrenom() . " " . $artiste->getNom()."</option>";
                                    }
                                }
                            ?>
                           </select><br>
                               <label>Catégorie : </label> <select name="categorie">
                                <option value="nonChoisi">Choisir une Catégorie</option>
                            <?php 
                                foreach ($aCategories as $categorie) {
                                    echo "<option value='".$categorie->getidCategorie()."'";
                                    if($categorie->getidCategorie() == $idCategorie){
                                        echo " selected";
                                    }
                                    echo">".$categorie->getnomCategorie()."</option>"; 
                                }
                            ?>
                           </select><br>
                               <label>Sous-Catégorie : </label> <select name="sousCategorie">
                                <option value="nonChoisi">Choisir une Sous-Catégorie</option>
                            <?php
                                foreach ($aSousCategories as $sousCategorie) {
                                    echo "<option value='".$sousCategorie->getidSousCategorie()."'";
                                    if($sousCategorie->getidSousCategorie() == $idSousCategorie){
                                        echo " selected";
                                    }
                                    echo ">".$sousCategorie->getnomSousCategorie()."</option>"; 
                                }
                            ?>    
                           </select><br>
                               <label>Matériaux : </label> <input type="text" name="materiaux" value="<?php echo $nomMateriaux; ?>"><br>
                               <label>Matériaux (anglais) : </label> <input type="text" name="materiauxAng" value="<?php echo $nomMateriauxAng; ?>"><br><br>
                            
                            <input type="submit" name="sauvegarder" value="Valider"> <span><?php echo $message; ?></span>
                       </form>

                   </div>

                </div> 
                <?
    }
    
     /**
     * Affiche Liste Artistes
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    public function afficheListeModifierArtistes($aArtistes){
        ?>
            <h2>Modifier nos <span class="artistes">artistes</span> et <span class="collectif">collectifs</span></h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Artiste</th>";
                echo "<th>Modifier</th>	";
                echo "</tr>";
                    foreach($aArtistes as $artiste) {
                        echo "<tr>";
                        $idArtiste = $artiste->getIdArtiste();
                        if($artiste->getNom()==NULL) {
                            echo "<td><span class='icon-users'></span>";
                            echo "<td>" .$artiste->getCollectif()."</td>" ;

                        }else{
                            echo "<td><span class='icon-user'></span>";
                            echo "<td>".$artiste->getPrenom()." ". $artiste->getNom()."</td>" ;
                        }
                        echo "<td><a href='index.php?requete=modifierArtiste&idArtiste=$idArtiste'><span class='icon-edit'></span></a></td>";
                        
                        //$idArtiste = $artiste->getIdArtiste();
                         echo "</tr>";
                    }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }
    
    
        /**
     * Affiche Liste Artistes
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    public function afficheListeSupprimerArtistes($aArtistes){
        ?>
            <h2>Supprimer un <span class="artistes">artiste</span> ou <span class="collectif">collectif</span></h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Artiste</th>";
                echo "<th>Supprimer</th>";
                echo "</tr>";
                    foreach($aArtistes as $artiste) {
                        echo "<tr>";
                        $idArtiste = $artiste->getIdArtiste();
                        if($artiste->getNom()==NULL) {
                            echo "<td><span class='icon-users'></span>";
                            echo "<td>" .$artiste->getCollectif()."</td>" ;

                        }else{
                            echo "<td><span class='icon-user'></span>";
                            echo "<td>".$artiste->getPrenom()." ". $artiste->getNom()."</td>" ;
                        }
                        echo "<td><a href='index.php?requete=supprimerArtistes&idArtiste=$idArtiste'><span class='icon-remove-user'></span></a></td>";
                       
                         echo "</tr>";
                    }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }
    
     /**
     * Affiche Liste des utilisateurs
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    public function afficheListeModifierUtilisateurs($aUtilisateurs){
        ?>
            <h2>Modifier nos utilisateurs</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Utilisateur</th>";
                echo "<th>Modifier</th>	";
                echo "</tr>";
                foreach($aUtilisateurs as $utilisateur) {
                        echo "<tr>";
                        $idUtilisateur = $utilisateur->getIdUtilisateur();
                        echo "<td><span class='icon-user'></span>";
                        echo "<td>" .$utilisateur->getLoginUtilisateur()."</td>" ;
                        echo "<td><a href='index.php?requete=modifierUtilisateur&idUtilisateur=$idUtilisateur'><span class='icon-edit'></span></a></td>";
                        echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }
    
    /**
     * Affiche Liste des utilisateurs
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    public function afficheListeSupprimerUtilisateurs($aUtilisateurs){
        ?>
            <h2>Supprimer nos utilisateurs</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Utilisateur</th>";
                echo "<th>Supprimer</th>	";
                echo "</tr>";
                
                foreach($aUtilisateurs as $utilisateur) {
                        echo "<tr>";
                        $idUtilisateur = $utilisateur->getIdUtilisateur();
                        echo "<td><span class='icon-user'></span>";
                        echo "<td>" .$utilisateur->getLoginUtilisateur()."</td>" ;
                        echo "<td><a href='index.php?requete=supprimerUtilisateurs&idUtilisateur=$idUtilisateur'><span class='icon-remove-user'></span></a></td>";
                        echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }
    

    
    /**
     * Affiche Liste des categories
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
    
    public function afficheListeModifierCategories($aCategories){
        ?>
            <h2>Modifier nos categories</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Categorie</th>";
                echo "<th>Modifier</th>	";
                echo "</tr>";
                    foreach($aCategories as $categorie) {
                        echo "<tr>";
                        $idCategorie = $categorie->getIdCategorie();
                        echo "<td><span class='icon-list'></span>";
                        echo "<td>".$categorie->getNomCategorie()."</td>" ;
                        echo "<td><a href='index.php?requete=modifierCategorie&idCategorie=$idCategorie'><span class='icon-edit'></span></a></td>";
                        echo "</tr>";
                    }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }
    
    /**
     * Affiche Liste des categories
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
     public function afficheListeSupprimerCategories($aCategories){
        ?>
            <h2>Supprimer nos categories</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Categorie</th>";
                echo "<th>Supprimer</th>	";
                echo "</tr>";
                    foreach($aCategories as $categorie) {
                        echo "<tr>";
                        $idCategorie = $categorie->getIdCategorie();
                        echo "<td><span class='icon-list'></span>";
                        echo "<td>".$categorie->getNomCategorie()."</td>" ;
                        echo "<td><a href='index.php?requete=eliminerCategorie&idCategorie=$idCategorie'><span class='icon-erase'></span></a></td>";
                        echo "</tr>";
                    }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }
    
    
    
    public function afficheListeModifierOeuvres($aOeuvres){
        ?>
            <h2>Modifier nos Oeuvres</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Titre</th>";
                echo "<th>Artiste</th>";
                echo "<th>Arrondissement</th>";
                echo "<th>Modifier</th>	";
                echo "</tr>";
                    foreach($aOeuvres as $oeuvre) {
                        echo "<tr>";
                        $idOeuvre = $oeuvre->getIdOeuvre();
                        echo "<td><span class='icon-blackboard'></span>";
                        echo "<td>".$oeuvre->getTitreOeuvre()."</td>" ;
                                               
                       if($oeuvre->getCollectif() =="") {
                          echo "<td>".$oeuvre->getNomArtiste()." ".$oeuvre->getPrenomArtiste()."</td>" ;
                       } else {
                           echo "<td>".$oeuvre->getCollectif()."</td>" ;
                       }
                       
                        echo "<td>".$oeuvre->getNomArrondissement()."</td>" ;
                        echo "<td><a href='index.php?requete=modifierOeuvre&idOeuvre=$idOeuvre'><span class='icon-edit'></span></a></td>";
                        echo "</tr>";
                    }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }
    
    /**
     * Affiche Liste des categories
     * @access public
     * @author German Mahecha
     * @version 1.0
     */
    
     public function afficheListeSupprimerOeuvres($aOeuvres){
        ?>
            <h2>Supprimer une oeuvre</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Titre</th>";
                echo "<th>Artiste</th>";
                echo "<th>Arrondissement</th>";
                echo "<th>Supprimer</th>	";
                echo "</tr>";
                    foreach($aOeuvres as $oeuvre) {
                        echo "<tr>";
                        $idOeuvre = $oeuvre->getIdOeuvre();
                        echo "<td><span class='icon-blackboard'></span>";
                        echo "<td>".$oeuvre->getTitreOeuvre()."</td>" ;
                                               
                       if($oeuvre->getCollectif() =="") {
                          echo "<td>".$oeuvre->getNomArtiste()." ".$oeuvre->getPrenomArtiste()."</td>" ;
                       } else {
                           echo "<td>".$oeuvre->getCollectif()."</td>" ;
                       }
                       echo "<td>".$oeuvre->getNomArrondissement()."</td>" ;
                       echo "<td><a href='index.php?requete=supprimerOeuvres&idOeuvre=$idOeuvre'><span class='icon-erase'></span></a></td>";
                       echo "</tr>";
                    }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";
    }


    /**
     * Affiche la page pour ajouter un artiste
     * @access public
     * @author: Jorge Blanco
     */
    public function ajouterUnArtiste() 
    {
        ?>
        <div>
        <h2 id="titre">Ajouter un artiste</h2>
        <form class="formulaire" action="">
            <fieldset>
            Prénom:<br>
            <input type="text" name="prenom" >
            <br> <br>
            Nom:<br>
            <input type="text" name="nom" >
            <br> <br>
            Collectif:<br>
            <input  type="text" name="Collectif" >
             <br> <br>
            Prendre une photo:<br><br>
            <input type="button" name="photoArtiste" value = "prendre une photo" >
            <br> <br>
            
            <input type="submit" value="Envoyer" id="button">
            <fieldset>
        </form>  
        </fieldset>
        </fieldset>
        </div>          
        <?php

    }

    /**
     * Affiche la page pour modifier un artiste
     * @access public
     * @author: Gautier Piatek
     */
    public function modifierUnArtiste($aArtiste) 
    {   
        $idArtiste = $aArtiste['idArtiste'];
        $prenom = $aArtiste['prenom'];
        $nom = $aArtiste['nom'];
        $collectif = $aArtiste['collectif'];
        $photoArtiste = $aArtiste['photoArtiste'];
        ?>
        <div>
        <h2 id="titre">Modifier un artiste</h2>
        <form class="formulaire" action="index.php?requete=modifierArtiste&idArtiste=<?php echo $idArtiste; ?>&action=valider" method='POST'>
            <fieldset>
            Prénom:<br>
            <input type="text" name="prenom" value="<?php echo $prenom; ?>">
            <br> <br>
            Nom:<br>
            <input type="text" name="nom" value="<?php echo $nom; ?>">
            <br> <br>
            Collectif:<br>
            <input  type="text" name="collectif" value="<?php echo $collectif; ?>">
             <br> <br>
            Photo:<br><br>
            <input type="text" name="photoArtiste" value="<?php echo $photoArtiste; ?>">
            <br> <br>
            
            <input type="submit" value="Envoyer" id="button">
            <fieldset>
        </form>  
        </fieldset>
        </fieldset>
        </div>          
        <?php

    }

    /**
     * Affiche la page d'inscription - admin
     * @access public
     * @auteure: Thuy Tien Vo
     * @modifie: Jorge Blanco
     */
    public function afficheInscriptionAdmin() 
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
     * Afficher un liste d'utilisateurs 
     * @access public
     * @auteure: Jorge Blanco
     */
    public function listerUtilisateurs($aUtilisateurs)
    {
        ?>
            <h2>Utilisateurs</h2>
            <section class='contenu container'>
                <div class='tableArtistes'>
        <?php
                echo "<table>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th>Utilisateur</th>";
                //echo "<th>Supprimer</th>    ";
                echo "</tr>";
                
                foreach($aUtilisateurs as $utilisateur) {
                        echo "<tr>";
                        $idUtilisateur = $utilisateur->getIdUtilisateur();
                        echo "<td><span class='icon-user'></span>";
                        echo "<td><a href='index.php?requete=profilUtilisateur&idUtilisateur=$idUtilisateur'>".$utilisateur->getLoginUtilisateur()."</a>" ."</td>" ;
                        //echo "<td><a href='index.php?requete=supprimerUtilisateurs&idUtilisateur=$idUtilisateur'><span class='icon-remove-user'></span></a></td>";
                        echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            echo "</section> ";
       echo "</div>";

    }
    
    
    
    
    
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

}
?>
