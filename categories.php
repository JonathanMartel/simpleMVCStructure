<!DOCTYPE html>
<?php
    if (isset($_GET['cat'])) {
        $categorie = $_GET['cat'];
    }
    else {
        $categorie = 'Santé';
    }
?>
<html lang="fr">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Journal Eureka</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/mimi.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- container qui va centrer le reste du site -->
      <div id="retour" class="container container-globale">
        <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  MENU -->
         <?php include("menu.php"); ?>

        <!--  - - - - - - - - - - - - - - - - - - - - - - -ARTICLE PRINCIPAL -->
        <article class="enssemble-articles">
            <div class="row">
                
                <!-- - - - - - - - - - Colonne de gauche (MENU DES ARTICLES) -->
                <div class="col-sm-2">
                    <div class="panel panel-default pousser_bas">
                        
                        <div class="panel-heading" >Les inventions</div> 
                        <div class="panel-body">
                            <ul class="nav nav-stacked">
                                <li><a href="categories.php?cat=sante">Santé</a></li>
                                <li><a href="categories.php?cat=environnement">Environnement</a></li>
                                <li><a href="categories.php?cat=education">Éducation</a></li>
                                <li><a href="categories.php?cat=technologie">Technologie</a></li>
                                <li><a href="categories.php?cat=ingenierie">Ingénierie</a></li>
                                <li><a href="categories.php?cat=insolite">Insolite</a></li>
                            </ul>
                        </div><!-- fin du panel body -->
                    </div><!-- fin du panel heading -->
                </div><!-- fin de la colonne du menu des articles -->
      			
                <!-- - - - - - - - -  Colonne de droite (LISTE DES ARTICLES) -->
                <div class="col-sm-10">
                    <div class="panel panel-default pousser_bas">
                        <!-- Boîte de recherche dans l'entête -->
                        <div class="panel-heading">
                            <form class="form-inline form-search" role="form">
                                <span class='col-md-3'>CATÉGORIE : Ingénierie</span> 
                                Rechercher :
                                <input type="text" class="form-control input-large boite-recherche" placeholder="Recherche">
                                <span class="glyphicon glyphicon-search"></span></a>
                            </form>
                        </div>
                    
                    
                        <div class="panel-body">
                           
                            <div class="row">
                                <h3>Les articles (plus récent au plus ancien)</h3>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>Brevet?</th>
                                            <th class="td-milieu">Cherche<br />financement ?</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <a href='articles.php' target='_blank'>
                                        <tr>
                                            <td><a href='articles.php' target='_blank'><img src="img/categories/adn_150.png" width="70" height="70" alt="ordinateur ADN"</a></td>
                                            <td><a href='articles.php' target='_blank'>Un ordinateur qui fonctionne à l'ADN</a></td>    
                                            <td class="td-milieu"><i class="glyphicon glyphicon-ok"></i></td>
                                            <td class="td-milieu"><i class="glyphicon glyphicon-ok"></i></td>
                                        </tr>
                                    </a>
                                        <tr>
                                            <td><a href='articles.php' target='_blank'><img src="img/categories/auto_300.jpg" width="70" height="70" alt="auto hydrogène"</a></td>
                                            <td><a href='articles.php' target='_blank'>La voiture à hydrogène plus forte que l'électrique ?</a></td>    
                                            <td</td>
                                            <td class="td-milieu"><i class="glyphicon glyphicon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td><a href='articles.php' target='_blank'><img src="img/categories/arbre_lampe.png" width="70" height="70" alt="arbre-lampe"</a></td>
                                            <td><a href='articles.php' target='_blank'>Des arbres lampadaires pour éclairer les rues</a></td>    
                                            <td class="td-milieu"><i class="glyphicon glyphicon-ok"></i></td>
                                            <td></td>
                                        </tr>
                                         <tr>
                                            <td><a href='articles.php' target='_blank'><img src="img/categories/ferme_150.png" width="70" height="70" alt="ferme verticale"</a></td>
                                            <td><a href='articles.php' target='_blank'>La ferme verticale qui nourrit les citadins</a></td>    
                                            <td class="td-milieu"><i class="glyphicon glyphicon-ok"></i></td>
                                            <td class="td-milieu"><i class="glyphicon glyphicon-ok"></i></td>
                                        </tr>
                                    </tbody>

                                </table>                            
                            </div><!-- fin du "row" -->
                        </div><!-- fin du panel body -->
                    </div><!-- fin du panel -->
                </div><!-- fin de la colonne du menu des articles -->
            </div><!-- fin de l'article principal -->
  	</article> 
        
        <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - -  FOOTER -->
        <?php include("footer.php"); ?>
      </div>
	<!-- script references -->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/mimi.js"></script>
    </body>
</html>