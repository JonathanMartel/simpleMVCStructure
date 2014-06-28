
<?php
    if (isset($_GET['cat'])) {
        $categorie = $_GET['cat'];
    }
    else {
        $categorie = 'Santé';
    }
?>

      <article class="enssemble-articles">
            <div class="row">
                
                <!-- - - - - - - - - - Colonne de gauche (MENU DES ARTICLES) -->
                <div class="col-sm-2">
                    <div class="panel panel-default ">
                        
                        <div class="panel-heading" >Les inventions</div> 
                        <div class="panel-body m-panel-body">
                            <ul class="nav nav-stacked">
                                <li><a href="index.php?p=categories&cat=sante">Santé</a></li>
                                <li><a href="index.php?p=categories&cat=environnement">Environnement</a></li>
                                <li><a href="index.php?p=categories&cat=education">Éducation</a></li>
                                <li><a href="index.php?p=categories&cat=technologie">Technologie</a></li>
                                <li><a href="index.php?p=categories&cat=ingenierie">Ingénierie</a></li>
                                <li><a href="index.php?p=categories&cat=insolite">Insolite</a></li>
                            </ul>
                        </div><!-- fin du panel body -->
                    </div><!-- fin du panel heading -->
                </div><!-- fin de la colonne du menu des articles -->
      			
                <!-- - - - - - - - -  Colonne de droite (LISTE DES ARTICLES) -->
                <div class="col-sm-10">
                    <div class="panel panel-default  ">
                        <!-- Boîte de recherche dans l'entête -->
                        <div class="panel-heading">
                            <form class="form-inline form-search" role="form">
                                <span class='col-md-3'><?= "CATÉGORIE :".$categorie ; ?></span> 
                                Rechercher :
                                <input type="text" class="form-control input-large boite-recherche" placeholder="Recherche">
                                <span class="glyphicon glyphicon-search"></span></a>
                            </form>
                        </div>
                    
                    
                        <div class="panel-body m-panel-body">

                            <div class="row m-panel-body">
                                <img src="img/articles/auto_300.jpg" class="img-responsive pull-right" alt="">
                                Numéro de projet : T00122<br />
                                Date : 4 juin 2014<br />
                                Catégorie : Santé<br />
                                Brevet : NON <br />
                                Financé : NON <br />
                                Recherche financement : OUI&nbsp;&nbsp; <a class="btn btn-default btn-financer" href="#" >Je veux FINANCER ce projet</a> <br />

                                <h3>La voiture à hydrogène plus forte que l'électrique ?</h3>
                                <p>
                                    En 2050, c'est une quasi certitude, la voiture à essence aura fait long feu. 
                                    Et la voiture électrique est encore loin de pouvoir la remplacer complètement, 
                                    faute d'autonomie suffisante. Le futur carburant pour alimenter le parc 
                                    automobile sera donc peut-être l'hydrogène. Le projet HyWays, financé par l'UE,
                                    a calculé qu'il faudrait dépenser 60 milliards d'euros d'ici 2030 pour mettre 
                                    en place l'infrastructure nécessaires à la circulation de 16 millions de 
                                    véhicules à hydrogène d'ici 2030. Plusieurs problèmes restent néanmoins à 
                                    résoudre : le stockage (pile à combustible) et surtout la production en grande 
                                    quantité d'hydrogène, qui n'est pour l'instant possible qu'à partir... 
                                    d'énergies fossiles.
                                </p>

                                <p>Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem laniatu miserando discerpsit. post cuius lacrimosum interitum in unius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.
                                </p>

                                 <p>Thalassius vero ea tempestate praefectus praetorio praesens ipse quoque adrogantis ingenii, considerans incitationem eius ad multorum augeri discrimina, non maturitate vel consiliis mitigabat, ut aliquotiens celsae potestates iras principum molliverunt, sed adversando iurgandoque cum parum congrueret, eum ad rabiem potius evibrabat, Augustum actus eius exaggerando creberrime docens, idque, incertum qua mente, ne lateret adfectans. quibus mox Caesar acrius efferatus, velut contumaciae quoddam vexillum altius erigens, sine respectu salutis alienae vel suae ad vertenda opposita instar rapidi fluminis irrevocabili impetu ferebatur.
                                </p>

                                <p>Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem laniatu miserando discerpsit. post cuius lacrimosum interitum in unius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.
                                </p>
                            </div><!-- fin du "row" -->
                        </div><!-- fin du panel body -->
                    </div><!-- fin du panel -->
                </div><!-- fin de la colonne du menu des articles -->
            </div><!-- fin de l'article principal -->
  	</article> 
        <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - -  FOOTER -->
        

	
  