window.addEventListener('load',listener);

function listener() // Référence : Jonathan Martel - Cours Programmation II - Collège de Maisonneuve
{
        cacher("article_modif");
        cacher("article_effacer");
        cacher("article_ajout");
        // Réaction sous-menu ARTICLES 
	enregistreGestionEvenement(document.getElementById('ajout_article'), "click", function() 
		{
                cacher("article_modif");
                cacher("article_effacer");
                montrer("article_ajout");
		});
        
        enregistreGestionEvenement(document.getElementById('modif_article'), "click", function() 
		{
                cacher("article_ajout");
                cacher("article_effacer");
                montrer("article_modif");
		});
        
        enregistreGestionEvenement(document.getElementById('effacer_article'), "click", function() 
		{
		cacher("article_ajout");
                cacher("article_modif");
                montrer("article_effacer"); 
		});
         
        // Bouton "annuler"  du formulaire "ajouter article"
      
        enregistreGestionEvenement(document.getElementById('an_article'), "click", function() 
		{
                alert ("J'ai cliqué sur Annuler");
                cacher("article_ajout");
		});
}	
	

//--------------------------------------------- enregistreGestionEvenement(cible, evenement, gestionnaire) 
function enregistreGestionEvenement(cible, evenement, gestionnaire)
{
	// Enregistrement d'un gestionnaire d'événement compatible avec IE, FF et compagnie
	// cible = un élément du DOM
	// évènement = "click" ou "focus" ...
	// gestionnaire = function à appeler lorsque l'événement se produit
	if(cible.addEventListener)	// Si la méthode existe, donc tous sauf IE8 et moins
	{
		cible.addEventListener(evenement, gestionnaire, false);
	}
	else	// Si IE9 et moins
	{
		cible.attachEvent("on"+evenement, gestionnaire);
	}
}

//------------------------------------------------- retireGestionEvenement(cible, evenement, gestionnaire) 
function retireGestionEvenement(cible, evenement, gestionnaire)
{
	// Dé-enregistre un gestionnaire d'événement
	if(cible.removeEventListener)		// Si la méthode existe, donc tous sauf IE8 et moins
	{
		cible.removeEventListener(evenement, gestionnaire, false);
	}
	else	// Si IE9 et moins
	{
		cible.detachEvent("on"+evenement, gestionnaire);
	}
}


// Montre une division 
function montrer(Id) 
{
	node = document.getElementById(Id);
        node.style.visibility = "visible";
        node.style.height = "auto"; // Rétablir la hauteur
        node.style.width = "auto";
}
// Cache une division
function cacher(Id) 
{
	node = document.getElementById(Id);
        node.style.visibility = "hidden";
        node.style.height = "0"; // Mettre la hauteur à 0 pour afficher autre chose
        node.style.width = "0";
}


