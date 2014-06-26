<?php include ("./includes/header.php"); ?>
         
            <article class="thumbnail" >       <!-- l'article principal pour le contenu-->
				<h1 class="text-center">FIL D'ACTUALITE</h1>
                    <div> <!-- commence la div pour le form -->
                        <form class="form-horizontal" >  <!-- Include tous les inputs du formulaire. -->
                            <h2>GÉRER LES ARTICLES</h2>
                            <div class="nav navbar-nav" id="nav navbar-nav">
                                <ul class="nav navbar-nav col-xs-12 col-lg-12">
                                    <li class="active"><a href="#">Voir tous les articles</a></li>
                                    <li><a href="#">Dérnier mis à jour</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Changer ton profil</a></li>
                                            <li><a href="#">Changer le mot de passe</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Fermer compte</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="form-group">
                                    <div class="input-group input-group-mini col-sm-4 col-sm-offset-6 ">  
                                        <input class="form-control" type="search" name="cherche" placeholder="Chercher"/>
                                        <span class="input-group-addon glyphicon glyphicon-search"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="categorie">Tirer par Categorie: </label>
                                    <div class="col-sm-6" id="categorie">
                                        <select  class="col-sm-12">
                                            <option value="Plus Lu">Plus Lu</option>
                                            <option value="Plus Commente">Plus Commenté</option>
                                            <option value="Plus Partage">Plus Partagé</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="section">Tirer par Section: </label>
                                    <div class="col-sm-6" id="section">
                                        <select  class="col-sm-12">
                                            <option value="sante">Santé</option>
                                            <option value="education">Éducation</option></option>
                                            <option value="environnement">Environnement</option>
                                            <option value="technologie">Technologie</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="date">Tirer par Date: </label>
                                    <div class="col-sm-6" id="date">
                                        <select  class="col-sm-12">
                                            <option value="Plus Lu">ASC</option>
                                            <option value="Plus Commente">DES</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="exampleInput"></label>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-danger btn-sm form-control">Soumettre</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <section class="row  col-xs-8 col-xs-offset-2 articles">        
                            <div>
								<li class="col-xs-8 col-xs-offset-1"><a>Aibdfiucabf dsfiuvb sbfviusb is dfivusbo</a></li>
							</div>
                            <div class=" col-xs-3">  
                               <a href="#" ><button type="button" class="btn-xs"><span class="glyphicon glyphicon-ok"></span></button></a>
                               <a href="#" ><button type="button" class="btn-xs"><span class="glyphicon glyphicon-refresh"></span></button></a>
							   <a href="#" ><button type="button " class="btn-xs"><span class="glyphicon glyphicon-remove"></span></button></a>
                            </div>
                        </section>
						<section class="row  col-xs-8 col-xs-offset-2 articles">        
                            <div>
								<li class="col-xs-8 col-xs-offset-1"><a>Aibdfiucabf dsfiuvb sbfviusb is dfivusbo</a></li>
							</div>
                            <div class=" col-xs-3">  
                               <a href="#" ><button type="button" class="btn-xs"><span class="glyphicon glyphicon-ok"></span></button></a>
                               <a href="#" ><button type="button" class="btn-xs"><span class="glyphicon glyphicon-refresh"></span></button></a>
							   <a href="#" ><button type="button " class="btn-xs"><span class="glyphicon glyphicon-remove"></span></button></a>
                            </div>
                        </section>
						<section class="row  col-xs-8 col-xs-offset-2 articles">        
                            <div>
								<li class="col-xs-8 col-xs-offset-1"><a>Aibdfiucabf dsfiuvb sbfviusb is dfivusbo</a></li>
							</div>
                            <div class=" col-xs-3">  
                               <a href="#" ><button type="button" class="btn-xs"><span class="glyphicon glyphicon-ok"></span></button></a>
                               <a href="#" ><button type="button" class="btn-xs"><span class="glyphicon glyphicon-refresh"></span></button></a>
							   <a href="#" ><button type="button " class="btn-xs"><span class="glyphicon glyphicon-remove"></span></button></a>
                            </div>
                        </section>
						
                    </div> <!-- ici finit la div pour le thumbnail -->
            </article> <!-- ici finit l'article du contenu  -->
            
           
  <?php include ("./includes/footer.php"); ?>