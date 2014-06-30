
//bloc qui redirige la premiere visite de l'utilisateur vers la bonne page d<inscritption

/*var inv = document.getElementById("inv");
var phi = document.getElementById("phi");
if(document.getElementById('inv')){
    document.getElementById('inv').addEventListener('click', goInscription, false);
    document.getElementById('phi').addEventListener('click', goInscription, false);
}

function goInscription(){
    if(event.target.id == "inv"){
    document.location = "formInv.html";
    }
    if(event.target.id == "phi"){
    document.location = "formPhi.html";
    }
}*/

//bloc qui fera la validation de formulaire

if(document.getElementById('boutonInv')){
    document.getElementById("boutonInv").addEventListener("click", valideFrom,false);
} else if (document.getElementById("boutonPhi")) {    
    document.getElementById("boutonPhi").addEventListener("click", valideFrom,false);
}

// fonction qui valide le champ nom
function valideNom(){
	var verif = document.getElementById("UserName").value;
    var valide = /^[A-Z][a-z]+$/;
    if(valide.test(verif) == false || verif == "") {
	   var erreur = false;
	}
	return erreur;
}	

function validePrenom(){
	var verif = document.getElementById("UserLastName").value;
    var valide = /^[A-Z][a-z]+$/;
    if(valide.test(verif) == false || verif == "") {
	   var erreur = false;
	}
	return erreur;
}

function valideEmail(){
	var verif = document.getElementById("exampleInputEmail1").value;
    var valide = /^[\w\.]*\w@\w[\w\.]*\.\w{2,4}$/;
    if(valide.test(verif) == false || verif == "") {
	   var erreur = false;
	}
	return erreur;
}

function validePassword(){
	var verif = document.getElementById("exampleInputPassword1").value;
    var valide = /^A-ZÉa-z0-9_éçêèô]{7}$/;
    if(valide.test(verif) == false || verif == "") {
	   var erreur = false;
	}
	return erreur;
}

//fonction qui recupere l'erreur et affiche la bordure en rouge

function valideFrom(){
    if(valideNom()==false){
        document.getElementById("UserName").focus(); 
		document.getElementById("UserName").select();
        document.getElementById("UserName").className+=" erreur"; 
    } else if (validePrenom()==false){
        document.getElementById("UserLastName").focus(); 
		document.getElementById("UserLastName").select();
        document.getElementById("UserLastName").className+=" erreur"; 
    } else if (valideEmail()==false){
        document.getElementById("exampleInputEmail1").focus(); 
		document.getElementById("exampleInputEmail1").select();
        document.getElementById("exampleInputEmail1").className+=" erreur"; 
    } else if (validePassword()==false){
        document.getElementById("exampleInputPassword1").focus(); 
		document.getElementById("exampleInputPassword1").select();
        document.getElementById("exampleInputPassword1").className+=" erreur"; 
    }
     
}    