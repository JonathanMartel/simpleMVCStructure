<?php include ("./includes/header.php"); ?>

        <!-- Article principal -->
        <article >
            <div class="row">
                <!-- ARTICLES, BREVETS,  FINANCEMENT, PUBLICATIONS -->
                <ul class="nav navbar-nav col-md-12">
                    <li class="dropdown col-md-offset-2 col-md-2">
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><img class="center-block" src="img/ARTICLES.jpg" alt="Articles"></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a id="ajout_article" href="#article_ajout">Ajouter un article</a></li>
                                <li><a id="modif_article" href="#article_modif">Modifier un article</a></li>
                                <li><a id="effacer_article" href="#article_effacer">Effacer un article</a></li>
                            </ul>
                    </li>
                    <li class="dropdown  col-md-2">
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><img class="center-block" src="img/FINANCEMENT.jpg" alt="Articles"></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Ajouter un financement</a></li>
                                <li><a href="#">Modifier un financement</a></li>
                                <li><a href="#">Annuler un financement</a></li>
                            </ul>
                    </li>
                    <li class="dropdown col-md-2">
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><img class="center-block" src="img/BREVETS.jpg" alt="Articles"></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Ajouter un brevet</a></li>
                                <li><a href="#">Modifier un brevet</a></li>
                                <li><a href="#">Effacer un Brevet</a></li>
                            </ul>
                    </li>
                    <li class="dropdown col-md-2">
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><img class="center-block" src="img/PUBLICATIONS.jpg" alt="Articles"></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Ajouter une publication</a></li>
                                <li><a href="#">Modifier une publication</a></li>
                                <li><a href="#">Annuler une publication</a></li>
                            </ul>
                    </li>
                </ul>
            </div>
        </article>
        <a name="article_ajout"></a>
        <section class="row" id="article_ajout" >
            <div class="col-md-offset-3 col-md-9">
                <form class="affichage" method="POST" id="forme_article" action="aj_article.php">
                    <fieldset>
                        <legend>Ajouter un article</legend>
                        
                        <!-- Après avoir lu le pour et le contre des "tables" sur Internet
                             je me suis rangée à l'opinion qu'un formulaire est en fait un
                             ensemble de données (les inputs) avec un titre (Les labels) -->
                        <table> 
                            <tr>
                                <td>ID membre :</td>
                                <td><input type="text" id="id_membre" /></td>
                            </tr>
                            <tr>
                                <td>Titre :</td>
                                <td><input type="text" id="titre" /><br /></td>
                            </tr>
                            <tr>
                                <td>ID brevet:</td>
                                <td><input type="text" id="id_brevet" /></td>
                            </tr>
                            <tr>
                                <td>Date de soumission :&nbsp;</td>
                                <td><input type="text" id="d_soumission" /></td>
                            </tr>
                            <tr>
                                <td>Texte bouton (15) :</td>
                                <td><input type="text" id="t_bouton" /></td>
                            </tr>
                            <tr>
                                <td>Texte court (50) :</td>
                                <td><input type="text" id="t_court" maxlength="50" size="50" /></td>
                            </tr>
                            <tr>
                                <td>Texte long (1000) :</td>
                                <td><textarea rows="10" cols="100" id="t_long"></textarea></td>
                            </tr>

                        </table>        
                            <button type="submit" value="submit">Ajouter</button>
                            <button type="button" id="an_article">Annuler</button>
                            <button type="reset" value="reset">Effacer</button>
                            
                    </fieldset>
                </form>  
            </div>
        </section>
        
        <a name="article_modif"></a>
        <section class="row" id="article_modif" >
            <div class="col-md-offset-3">
                <form class="affichage" method="POST" id="forme_modif" action="trouver_article.php">
                    <fieldset>
                        <legend>Modifier un article</legend>
                        
                        <table> 
                            <tr>
                                <td>ID article :&nbsp;</td>
                                <td><input type="text" id="id_modifier" /></td>
                            </tr>
                            
                        </table>        
                            <button type="submit" value="submit">Modifier</button>
                            <button type="button" id="an_trouver">Annuler</button>
                            <button type="reset" value="reset">Reset</button>
                            
                    </fieldset>
                </form>  
            </div>
        </section>
        
        <a name="article_effacer"></a>
        <section class="row" id="article_effacer" >
            <div class="col-md-offset-3">
                <form  class="affichage" method="POST" id="forme_effacer" action="trouver_article.php">
                    <fieldset>
                        <legend>Effacer un article</legend>
                        
                        <table> 
                            <tr>
                                <td>ID article :&nbsp;</td>
                                <td><input type="text" id="id_effacer" /></td>
                            </tr>
                            
                        </table>        
                            <button type="submit" value="submit">Effacer</button>
                            <button type="button" id="ef_article">Annuler</button>
                            <button type="reset" value="reset">Reset</button>
                            
                    </fieldset>
                </form>  
            </div>
        </section>
    </div>
   
	<?php include ("./includes/footer.php"); ?>
