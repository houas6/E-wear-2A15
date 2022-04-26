function test()
{
    var nom=document.forms["commande"]["nom"].value;
    var telephone=document.forms["commande"]["telephone"].value;
    var adresse=document.forms["commande"]["adresse"].value;
    var prix=document.forms["commande"]["prix"].value;

    var errorNom=document.getElementById('nom');
    var errorTelephone=document.getElementById('telephone');
    var errorAdresse=document.getElementById('adresse');
    var errorPrix=document.getElementById('prix');
    var letters = /^[A-Za-z]+$/;
    

    if (nom == "") {
        errorNom.innerHTML = "Veuillez entrer votre nom!";

    }
    else if (!(nom.match(letters) && nom.charAt(0).match(/^[A-Z]+$/))) {
        errorNom.innerHTML = "Veuillez entrer un nom valid!";
    } else {
        errorNom.innerHTML = "";

    }

    if (telephone.length!=8) //telephone
    {
        errorTelephone.innerHTML = "Le numero de telephone doit exister . "
    }
    if (adresse=="" )  
    {
        errorAdresse.innerHTML = "Veuillez entrer votre adresse!";
    }
    if (prix==0 )  
    {
        errorPrix.innerHTML = "Le prix doit exister. "
    }
}
function validateform(e){
    e.preventDefault();
test();

}