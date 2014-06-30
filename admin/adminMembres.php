<?php include ("./includes/header.php"); ?>    
        <main class="affiche">
          <header>
             <h1>Gestion Membres</h1>
          </header>        
              <form action="#" method="POST">
                <fieldset>
                    <legend>Enlever/modifier membre</legend>
                      <label for="User">Rechercher membre</label>
                      <input type="text" class="form-control" id="User" placeholder="Nom d'utilisateur">
                      <button type="submit" name="tous">Affichez tous les membres</button>
                    
                      <!--appelle la base de donnee pour afficher le ou les membres ici 
                        affiche les resultats dans un tableau format : 
                          <table>
                              <thead>
                                <tr>    
                                  <th>Nom</th>
                                  <th>Prenom</th>
                                  <th>Nom d'utilisateur</th>
                                  <th>Mot de passe</th>
                                  <th>Mot de passe</th> 
                                  <th>type de compte</th>    
                                </tr>
                             </thead>
                             <tbody>
                                <tr>
                                  <td>affiche la ou les resultats de requetes</td>    
                                </tr>
                             </tbody>
                          </table> -->
                        <br/><button type="submit" name="modifier">Modifier</button>
                             <button type="submit" name="effacer">Effacer</button>    
                        
                  </fieldset>
              </form>
              <script src="js/membres.js"></script>
<?php include ("./includes/footer.php"); ?>