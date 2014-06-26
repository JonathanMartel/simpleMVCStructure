/**
  * Autor: Abdellah Ait hadji
  * Fichierj js qui gére le bouton like et autre boutons
  * Modifié le 16-Juin-2014 12:33
  */

    /* Voir la balise image dans le switch 
      *Le type de médaille est attribué selon le nombre de like
      * voir dossier image pour avoir l'idee des médaille
      */
$(function() {

  // Générer les boutons necessaires de bootstrap
  $(".thumbs-up").append('<span class="inc button"><span class="glyphicon glyphicon-thumbs-up"></span></span>');
  $(".eye-open").append('<span class="inc "><span class="glyphicon glyphicon-eye-open"></span></span>');
  $(".comment").append('<span class="inc "><span class="glyphicon glyphicon-comment"></span></span>');
  
  // mettre tous les like dans une variable
  var recompence = $(".like").val();
    console.log(recompence);
            // le switch qui va attribuer une medaille selon le like
            switch (recompence) {

          case 0:
              recompence < 50;
               $(".star").append('<span class="inc "><img src="./img/medaille-bronze.png" alt="medaille bronze">');
                console.log('bronze');
			  break;
          case 1:
              recompence > 50;
                $(".star").append('<span class="inc "><img src="./img/medaille-or.png" alt="medaille or">');
              console.log('or');
			  break;
          case 2:
             recompence > 100;
              $(".star").append('<span class="inc "><img src="./img/medaille-diamon.png" alt="medaille diamon">');
              break;

          default:
              $(".star").append('<span class="inc "><img src="./img/aucune-medaille.png" alt="aucune medaille">');
         
      } 
    
  // quand on click sur thumbs-up (le like)
  $(".button").on("click", function() {
    // le like courant (selon l'article dont on est)
    var $button = $(this);
    // chercher et mettre la valeur de l'input courante dans valeur
    var valeur = $button.parent().find("input").val();
    // si le contenu du 2eme span est vide (aucun node texte)
    if ($button.text() == "") {
      // on ecrit un et chaque fois il s'incrément
      // parseFlot renvoie le nombre comme un nombre et non str
  	  var nouvelleVal = parseFloat(valeur) + 1;
  	} 
    // on rajoute a chaque fois la nouvelle valeur dans le value
    $button.parent().find("input").val(nouvelleVal);

  });

});