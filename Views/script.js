function verif() {

    var nom = document.forms["c"]["nom"].value;
    var adresse = document.forms["c"]["adresse"].value;
    var prix = document.forms["c"]["prix"].value;
    var telephone = document.forms["c"]["telephone"].value;
    var errorN = document.getElementById('errorNR');
    var errorP = document.getElementById('errorPR');
    var errorEprix = document.getElementById('errorMR');
    var errorT = document.getElementById('errorNT');
    var letters = /^[A-Za-z]+$/;
   
    if (nom == "") {
        errorN.innerHTML = "Veuillez entrer votre nom!";

    }
    else if (!(nom.match(letters) && nom.charAt(0).match(/^[A-Z]+$/))) {
        errorN.innerHTML = "Veuillez entrer un nom valid!";
    } else {
        errorN.innerHTML = "";

    }

    if (adresse == "") {
        errorP.innerHTML = "Veuillez entrer votre adresse!";

    }
    
    else  {
        errorP.innerHTML = "";

    }

    if (prix == "") {
        errorEprix.innerHTML = "Veuillez entrer votre prix!";

    }
    
    else {
        errorEprix.innerHTML = "";

    }
    if (telephone == "") {
        errorT.innerHTML = "Veuillez entrer votre numero de telephone!";

    }
    
    else {
        errorT.innerHTML = "";

    }
}
function validateForm(e) {
    e.preventDefault();
    verif();
}