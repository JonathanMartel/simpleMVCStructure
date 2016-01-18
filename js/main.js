/**
 * @file Script contenant les fonctions de base
 * @author Jonathan Martel (jmartel@gmail.com)
 * @version 0.1
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 *
 */

(function(){

    window.addEventListener('load', function(){
        var xhr;
        var lienAjoutOeuvre = document.querySelector("#ajoutOeuvre");
        
        if(btnSoumettre)
        {
            console.log('clic');
            lienAjoutOeuvre.addEventListener('click', function(){
                xhr = new XMLHttpRequest();
                xhr.open("POST", "ajaxControler.php?requete=ajoutOeuvre");
                xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
                
                xhr.send("arrond="+ champ.value);	
                xhr.onreadystatechange = function(e){
                    console.log(e);
                    if(e.target.readyState == 4 && e.target.status == 200)
                    {
                        console.log(e.target.responseText);
                        var affichageAjoutOeuvre = document.querySelector(".administration");
                        if(affichageAjoutOeuvre)
                        {
                            affichageAjoutOeuvre.innerHTML = e.target.responseText;
                        }
                    }
                }
            
            
            });
        }
    
    
    });






})();