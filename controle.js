/*document.getElementById("Ajouter categorie").addEventListener("submit",function(e){
    e.preventDefault();
alert ('Ajout validé !');

});*/
document.getElementById("bad").addEventListener("submit", function(e){
 
    //var error_first;
    var error_nom;
    var nom = document.getElementById("nom");

    var num = /^[A-Za-z1-9]+$/;
    myregex = /^[A-Za-z]+$/;
    var reWhiteSpace = new RegExp("/^\s+$/");
    let regexx = new RegExp('[a-z0-9]+@gmail.com');
    let regexxx = new RegExp('[a-z0-9]+@yahoo.tn');
   
   if (!nom.value) {
       error_nom = "Name Required!!";
   }

   else if (myregex.test(nom.value)==false)
   {
       error_nom = "Name must contain only letters!!";
}
    

if (error_nom) {
    e.preventDefault();
    document.getElementById("error_nom").innerHTML = error_nom;
    return false;
}
else{document.getElementById("error_nom").innerHTML = "";}
});