  
           
                <div class="thumbnail contact">
                    <div>
                        <h1 class="text-center">CONTACT</h1> <!-- titre -->   
                    </div>
                    <div>
                        <h2 class="text-center">Informations générales</h2> <!-- subtitre -->   
                            <p class="text-center"> 2030, boulevard Pie-IX Bureau 430</p>
                            <p class="text-center"> Montréal (Québec)  H1V 2C8</p>   
                            <p class="text-center"> Tél.: 514.254.7131, poste 4800.</p>
                    </div>
                    <div>
                        <h2 class="text-center">Horaire</h2> <!-- subtitre -->   
                            <p class="text-center"> Lun - Ven: 7:00 - 23:00</p>
                            <p class="text-center"> Sam - Dim: 7:00 - 18:00</p>  
                    </div>
                </div>
                <div class="thumbnail contact">  <!-- Commence la div pour le form -->  
                    <h1 class="text-center">Contactez Journal Eureka</h1> <!-- titre -->   
                    <p class="text-center"> Veuillez remplir ce formulaire afin qu'un membre de notre équipe puisse vous aider.</p>
                    <form class="form-horizontal" role="form" >  <!-- Include tous les inputs du formulaire. -->
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="exampleInputnom">Nom:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="exampleInputnom" pattern="[A-Za-z \s ÀÁÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜàáâãäæçèéêëìíîñòóšùúûüýÿ]{2,30}" required> <!-- le pattern permet seulement les voyelles, les consonnes,l'espace et les accents indiqués . -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="exampleInputprenom">Prénom:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="exampleInputprenom" pattern="[A-Za-z \s ÀÁÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜàáâãäæçèéêëìíîñòóšùúûüýÿ]{2,30}"required> <!-- le pattern permet seulement les voyelles, les consonnes,l'espace et les accents indiqués . -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="exampleInputEmail1">Courriel: </label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="exampleInputEmail" placeholder="Courriel" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="exampleTypecomentaire">Type de Commentaire: </label>
                            <div class="col-sm-6" id="exampleTypecomentaire">
                                <select  class="col-sm-12">
                                    <option value="article">Communiqué de presse</option>
                                    <option value="comerreur">Commentaire ou erreur</option>
                                    <option value="concours">Concours</option>
                                    <option value="publicite">Publicité</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="exampleInputCommentaire">Comentaires: </label>
                            <div class="col-sm-6">
                                <textarea rows="3" cols="45" name="commentaires" id="exampleInputCommentaire">Tapez ici vos commentaires...</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="exampleInput"></label>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-sm form-control bouton">Soumettre</button>
                            </div>
                        </div>
                    </form> <!-- ici finit le form -->  
                </div> <!-- ici finit la div pour le form -->  
            </article>   <!-- ici finit l'article qui contient le contenu de la page -->
         
            <script>(function(d, s, id) { 
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
       