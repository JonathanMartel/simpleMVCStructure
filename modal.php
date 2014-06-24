<script src="js/main.js"></script>
<script type="text/javascript">
              //fonction jquery qui fait apparaitre le modal sur le onload 
              //source : http://stackoverflow.com/questions/20068962/modal-onload-in-page-bootstrap-3
            $(document).ready(function() {
                $('#myModal').modal({
                show: true,
                })
            });

</script> 
<!--modal qui affiche sur un evenement onlaod lors de la premiere visite de l'utilisateur-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Premiere visite?</h4>
              </div>
              <div class="modal-body">
                <p>Bienvenue au journal Eureka, le site ou inventeurs et bailleurs de fonds se rencontrent. Dites-nous dans quelle categorie vous voulez vous enregistrer</p>
              </div>
              <div class="modal-footer">
                <a class="btn btn-default" href="form_inventeur.php">Inventeur</a>
                <a class="btn btn-default" href="form_bailleur.php">Philantrope</a>
                <a type="button" class="btn btn-default" data-dismiss="modal">Annuler</a>
            </div>
          </div>
        </div><!-- fin modal-->