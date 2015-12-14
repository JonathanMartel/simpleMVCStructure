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
class VueDefaut {
	
    
    /**
	 * Affiche l'entete
	 * @access public
	 * 
	 */
	public function afficheHeader() {
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
    <!--
                        <a href="#">SE CONNECTER</a>
                        <a href="#">FR/EN</a>
    -->
                    </div>

                    <div class="menu">
                        <nav>
                            <a href="index.php?requete=accueil" class="accueil">ACCUEIL</a>
                            <a href="index.php?requete=artistes" class="artiste">ARTISTE</a>
                            <a href="index.php?requete=arrondissements" class="arrondisement">ARRONDISSEMENT</a>
                            <a href="index.php?requete=categories" class="categorie">CATEGORIE</a>
                        </nav>
                    </div>
                </div>
                
            </div>  
        </header>     
		
		<?php
		
	}
    
    
    /**
	 * Affiche le pied de page 
	 * @access public
	 * 
	 */
	public function afficheFooter() {
		?>
                        <footer>

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
	public function afficheAccueil() {
		?>        
            <section id="gallery">
                <img src="images/img1.jpg">
            </section>
            <section class='contenu container'>
                <div class= 'threecol first'>

                    <figure>
                        <img src="images/img_2.jpg">
                        <figcaption>nom</figcaption>
                    </figure>	
                    artiste : <br>
                    arrondissement : <br>
                    categorie : 
                </div>
                <div class= 'threecol'> 
                    <figure>
                        <img src="images/img_2.jpg">
                        <figcaption>nom</figcaption>
                    </figure>
                    artiste : <br>
                    arrondissement : <br>
                    categorie :             
                </div>	
                <div class= 'threecol'> 
                    <figure>
                        <img src="images/img_2.jpg">
                        <figcaption>nom 1</figcaption>
                    </figure>
                    artiste : <br>
                    arrondissement : <br>
                    categorie :             
                </div>	


                <div class= 'threecol last'> 
                    <figure>
                        <img src="images/img_2.jpg">
                        <figcaption>nom 1</figcaption>
                    </figure>
                    artiste : <br>
                    arrondissement : <br>
                    categorie :             
                </div>	
            </section>

            <section class='contenu container'>
                <div class= 'threecol first'>

                    <figure>
                        <img src="images/img_2.jpg">
                        <figcaption>nom</figcaption>
                    </figure>	
                    artiste : <br>
                    arrondissement : <br>
                    categorie : 
                </div>
                <div class= 'threecol'> 
                    <figure>
                        <img src="images/img_2.jpg">
                        <figcaption>nom</figcaption>
                    </figure>
                    artiste : <br>
                    arrondissement : <br>
                    categorie :             
                </div>	
                <div class= 'threecol'> 
                    <figure>
                        <img src="images/img_2.jpg">
                        <figcaption>nom 1</figcaption>
                    </figure>
                    artiste : <br>
                    arrondissement : <br>
                    categorie :             
                </div>	


                <div class= 'threecol last'> 
                    <figure>
                        <img src="images/img_2.jpg">
                        <figcaption>nom 1</figcaption>
                    </figure>
                    artiste : <br>
                    arrondissement : <br>
                    categorie :             
                </div>	
            </section>
		<?php
		
	}
    
    /**
	 * Affiche les oeuvres par artistes
	 * @access public
	 * 
	 */
	public function afficheArtistes($aArtistes) {
        ?>
            <h2>Découvrez nos artistes</h2>
            
        <?php
        $compteur = 1;
        
        echo "<section class='contenu container' id='accordion'>";
        
        foreach($aArtistes as $artiste){

            $photo = $artiste->getPhoto();
            $prenom = $artiste->getPrenom();
            $nom = $artiste->getNom();
            $collectif = $artiste->getCollectif();

            echo "<div class='accordion-toggle sixcol ";

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
                echo "<p>". $prenom . " " . $nom . "</p>";
            
            } else {
                echo "<p>" . $collectif . "</p>";
                
            }
            ?>
                <div class="accordion-content">
                    <ul>
                        <li>Oeuvre 1</li>
                        <li>Oeuvre 2</li>
                        <li>Oeuvre 3</li>
                    </ul>
                </div>
                
                <script type="text/javascript">
                  $(document).ready(function($) {
                    $('#accordion').find('.accordion-toggle').click(function(){

                      //Expand or collapse this panel
                      $(this).next().slideToggle('fast');

                      //Hide the other panels
                      $(".accordion-content").not($(this).next()).slideUp('fast');

                    });
                  });
                </script>
            <?php
            echo "</figure>";
            echo "</div>";
            
            $compteur = $compteur + 1;
        }
        echo "</section> ";
	}
	
    /**
	 * Affiche les oeuvres par arrondissement
	 * @access public
	 * 
	 */
	public function afficheArrondissements() {
		?>
		
		<?php
		
	}
    
    /**
	 * Affiche les oeuvres par catégories
	 * @access public
	 * 
	 */
	public function afficheCategories() {
		?>
		
		<?php
		
	}
}
?>