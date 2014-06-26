<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin cms</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="css/membres.css">
      <link rel="stylesheet" href="css/inscription.css">
      <link href="css/articles.css" rel="stylesheet">
       


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     <div class="container">
          <header class="page-header">
              <h2>ADMINISTRATION <small>connecté</small></h2>
            </header>
            <!-- navigation de la page-->
             <nav class="navbar navbar-inverse" role="navigation">
             <div class="container-fluid">
                <div class="navbar-header">
                  <!-- menu mobile-->
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="../index.php">Site</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Accueil</a></li>
                        <li><a href="adminArticles.php">Articles </a></li>
                        <li><a href="adminMembres.php">Membres </a></li>
                        <li><a href="adminForum.php">Forum </a></li>  
                        <li><a href="adminActualites.php">Actualités </a></li>  
                      </ul>
                     <!-- le menu principale-->
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Déconnexion</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuration <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Lorem</a></li>
                          </ul>
                        </li>
                      </ul>
                </div><!-- /.navbar-collapse -->
             </div><!-- /.container-fluid -->
            </nav>
        