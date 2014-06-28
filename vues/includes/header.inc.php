<!DOCTYPE html>

<html lang="fr">
   <head>
      <meta charset="utf-8">
      <!-- Ce commentaire qui suite (balise meta) c'est pour
         fixerle probleme de validation -->
      <!--[if ie]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Journal Eureka</title>
      
      <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/contact.css" rel="stylesheet">
	    <link href="css/inscription.css" rel="stylesheet">
      <link href="css/categories.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/jacques.css" rel="stylesheet">
      <link href="css/font-awesome.css" rel="stylesheet">  

      
   </head>
   <!-- début document -->
   <body>
      <!-- header (haut de page) -->
      
      <!-- fin header -->
      <!-- container qui va centrer le reste du site -->
      <div id="retour" class="container container-globale">
         <!-- section qui va comporter le carousel -->
         <header class="header-principal">
           <div class="menu">       
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container fixed">
	  <!--<a class="navbar-brand hidden-xs" href="index.php"><img src="./img/logo.png" alt="logo"/></a>-->
          <figure class=" hidden-xs">
              <h1>EUREKA</h1>
              <span>Journal d'idées</span>
          </figure>
	  <div class="inscription">
      <button type="button" class="btn btn-primary btn-sm">Connexion</button>
      <button id="inscription" type="button" class="btn btn-default btn-sm">Inscription</button>
          
	</div>
      </div>
    </nav>



    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="index.php"><span class="logo"> Eureka </span></a>
		  <a class="navbar-brand hidden-xs" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
		  
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inventions <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?p=categories&cat=sante">Santé</a></li>
                <li><a href="index.php?p=categories&cat=environnement">Environnement</a></li>
                <li><a href="index.php?p=categories&cat=education">Éducation</a></li>
                <li><a href="index.php?p=categories&cat=technologie">Technologie</a></li>
                <li><a href="index.php?p=categories&cat=ingenierie">Ingénierie</a></li>
                <li><a href="index.php?p=categories&cat=insolite">Insolite</a></li>
              </ul>
            </li>
              

                <li><a href="index.php?p=form_article">Je veux publier une invention</a></li>
                <li><a href="index.php?p=forum">Forum</a></li>
                <li><a href="index.php?p=contact">Contact</a></li>
                   
          </ul>
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="recherche">
            </div>
            <button type="submit" class="btn btn-default"> <span class="glyphicon glyphicon-search"></span></a></button>
          </form>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</div>

         </header>
         <!-- fin header -->