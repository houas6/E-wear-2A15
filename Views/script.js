document.getElementById("bad").addEventListener("submit", function(e){
 
    
    var error_nom;
    var error_telephone;
    var error_adresse;
    var error_prix;
    
    
    var nom=document.getElementById('nom');
    var telephone=document.getElementById('telephone');
    var adresse=document.getElementById('adresse');
    var prix=document.getElementById('prix');
    
    
    var num = /^[A-Za-z1-9]+$/;
     myregex = /^[A-Za-z]+$/;
     var reWhiteSpace = new RegExp("/^\s+$/");
     
    
    if (!nom.value) {
        error_nom = "Name Required!!";
    }

    else if (myregex.test(nom.value)==false)
    {
        error_nom = "Name must contain only letters!!";
}
    

    if (!telephone.value) {
        error_tel = "telephone number Required !!";
    }
   
 
    if (!adresse.value) {
        error_adresse = "adresse Required!!";
    }
    else if (myregex.test(adresse.value)==false && reWhiteSpace.test(s.value)==false && num.test(adresse.value)==false){
        error_adresse = "message must contain only letters and numbers !!";
    }
    
    if (error_nom) {
        e.preventDefault();
        document.getElementById("error_nom").innerHTML = error_nom;
        return false;}
        else
        {
            document.getElementById("error_nom").innerHTML = "";
        }

    if (error_telephone) {
        e.preventDefault();
        document.getElementById("error_telephone").innerHTML = error_telephone;
        return false;
    }
else
{document.getElementById("error_telephone").innerHTML = "";}
    if (error_prix) {
        e.preventDefault();
        document.getElementById("error_prix").innerHTML = error_prix;
        return false;
    }
else{document.getElementById("error_prix").innerHTML = "";}

    if (error_adresse) {
        e.preventDefault();
        document.getElementById("error_adresse").innerHTML = error_adresse;
        return false;
    }
    else{document.getElementById("error_adresse").innerHTML = "";}
});