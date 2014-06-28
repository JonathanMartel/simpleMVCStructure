
      <article class="article-bailleur">
        <article class="row col-md-8">
           <h1>Comment ca marche?</h1>  
            <h2>Definissez votre profil</h2>
             <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.!</p>
            <h2>Choisissez votre domaine</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.!</p>
         </article>    
         <div class="row col-md-6">    
           <h1>Formulaire </h1>
              <form role="form">
                <div class="form-group">
                <label for="UserName">Nom</label>
                <input type="text" class="form-control valid" id="UserName" placeholder="Nom d'utilisateur" pattern="[A-ZÉ][a-z1111éçêèô]+" required>
               </div>
                <div class="form-group">
                <label for="UserLastName">Prenom</label>
                <input type="text" class="form-control valid" id="UserLastName" placeholder="Nom d'utilisateur" pattern="[A-ZÉ][a-zéçêèô]+" required>
               </div>
               <div class="form-group">
                <label for="exampleInputUser">Nom d'utilisateur</label>
                <input type="text" class="form-control valid" id="exampleInputUser" placeholder="Au moins 6 caracteres" pattern="[A-ZÉa-z0-9éçêèô]{5}[A-ZÉa-z0-9éçêèô]+" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control valid" id="exampleInputPassword1" placeholder="Au moins 7 caracteres" pattern="[A-ZÉa-z0-9_éçêèô]{7}" required>
              </div> 
              <div class="form-group">
                <label for="exampleInputEmail1">Adresse email</label>
                <input type="email" class="form-control valid" id="exampleInputEmail1" placeholder="Entrer email" pattern="[\w\.]*\w@\w[\w\.]*\.\w{2,4}" required>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox"> Recevoir des courriels d'information
                </label>
              </div>
                <button type="submit" name="inscrire" id="boutonInv" class="btn btn-default">s'inscrire</button>
            </form>
            <!--un petit bouton paypal pour s'inscrire  source:https://www.paypal.com/ca/cgi-bin/webscr?SESSION=kDxaMbtgqFehqeMpqJ_VctFL0LC5OFN6yd_ixahy-WkyVQTV1MDlLma9WI8&dispatch=5885d80a13c0db1f8e263663d3faee8d6cdb53fcfca2b5941339e576d7e42259 -->
            <form class="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <input type="hidden" name="cmd" value="_s-xclick">
              <table>
                <tr><td><input type="hidden" name="on0" value="Connectez-vous à Paypal">Connectez-vous à Paypal</td></tr><tr><td><input type="text" name="os0" maxlength="200"></td></tr>
              </table>
               <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
              ">
               <input type="image" id="inscrire" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus  simple et la plus sécurisée !">
               <img  alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>

        </div>
      
       
    </article>     
 