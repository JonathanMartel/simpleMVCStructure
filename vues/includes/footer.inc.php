 <!-- début footer -->
    </div>
      <footer>
         <!-- un container pour centrer le contenu du footers -->
         <div class="container container-footer">
            <ul class="row">
               <li class="hidden-xs col-md-4"><a href="index.php?p=accueil">Accueil</a></li>
               <li class="hidden-xs col-md-4"><a href="index.php?p=form_article">Je veux publier une invention</a></li>
               <li class="hidden-xs col-md-4"><a href="index.php?p=contact">Contact</a></li>
               <li class="hidden-xs col-md-4"><a href="index.php?p=articles">Inventions</a></li>
               <li class="hidden-xs col-md-4"><a href="index.php?p=accueil">Je veux financer un projet</a></li>
               <li class="hidden-xs col-md-4"><a href="index.php?p=*">Partenariats</a></li>
               <li class="hidden-xs col-md-4"><a href="index.php?p=forum">Forum</a></li>
                      
            </ul>
            <!-- partie copyright -->
            <details>
               <summary>
                  <h6>Copyright 2014. Eureka - Tous droits réservés</h6>
               </summary>
            </details>
             
         </div>
          
         <!-- ancre nommée pour retourner en haut -->
         <button type="button" class="btn btn-default btn-lg hidden-xs">
         <a href="#retour"><span class="glyphicon glyphicon-chevron-up"></span>
         </a>
         </button>
      </footer>
      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <!-- fichier jd bootstrap -->
      <script src="js/bootstrap.min.js"></script>
      <!-- <script src="js/sondage.js"></script>-->
      <script src="js/statistiques.js"></script>
<script type="text/javascript">
              //fonction jquery qui fait apparaitre le modal sur le onload 
              //source : http://stackoverflow.com/questions/20068962/modal-onload-in-page-bootstrap-3
            $('#inscription').click(function() {
                console.log('test');
                $('#myModal').modal({
                show: true,
                })
            });

</script> 
<?php include('./content/modal.php');?>
   </body>
</html>