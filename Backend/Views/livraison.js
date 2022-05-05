function verif() {

    var nom = document.forms["c"]["nom"].value;
    var prenom = document.forms["c"]["prenom"].value;
    var mail = document.forms["c"]["mail"].value;
    var errorN = document.getElementById('errorNR');
    var errorP = document.getElementById('errorPR');
    var errorEmail = document.getElementById('errorMR');
    var letters = /^[A-Za-z]+$/;
    var numbers = /^[1-9]+$/;
   
    if (nom == "") {
        errorN.innerHTML = "Veuillez entrer votre nom!";

    }
    else if (!(nom.match(letters) && nom.charAt(0).match(/^[A-Z]+$/))) {
        errorN.innerHTML = "Veuillez entrer un nom valid!";
    } else {
        errorN.innerHTML = "";

    }

    if (prenom == "") {
        errorP.innerHTML = "Veuillez entrer votre prenom!";

    }
    else if (!(prenom.match(letters) && prenom.charAt(0).match(/^[A-Z]+$/))) {
        errorP.innerHTML = "Veuillez entrer un prenom valid!";
    }
    else {
        errorP.innerHTML = "";

    }
    if (frais == "") {
        errorP.innerHTML = "Veuillez entrer un frais de livraison!";

    }
    else if (!(frais.match(numbers) && frais.charAt(0).match(/^[1-9]+$/))) {
        errorP.innerHTML = "Veuillez entrer un frais valid!";
    }
    else {
        errorP.innerHTML = "";

    }

    if (mail == "") {
        errorEmail.innerHTML = "Veuillez entrer votre email!";

    }
    else if (!mail.match('@gmail.com')) {
        errorEmail.innerHTML = "Veuillez entrer un email valid!";
    }
    else {
        errorEmail.innerHTML = "";

    }
    if (id_livreur == "") {
        errorN.innerHTML = "Veuillez entrer un id de livreur!";

    }
    else if (!id_livreur.match(numbers) ) {
        errorN.innerHTML = "Veuillez entrer un id valid!";
    } else {
        errorN.innerHTML = "";

    }
}
    
    
    function validateForm(e) {
        e.preventDefault();
        verif();
    }