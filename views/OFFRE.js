function verif() {
    var idRec = document.forms["c"]["idRec"].value;
    var nomR = document.forms["c"]["nomR"].value;
    var prenomR = document.forms["c"]["prenomR"].value;
    var mail = document.forms["c"]["mail"].value;
    var Cmail = document.forms["c"]["Cmail"].value;
    var Rec = document.forms["c"]["Rec"].value;
    var erroridR = document.getElementById('erroridR');
    var errorN = document.getElementById('errorNR');
    var errorP = document.getElementById('errorPR');
    var errorEmail = document.getElementById('errorMR');
    var errorrec = document.getElementById('errorR');
    var letters = /^[A-Za-z]+$/;
    var num = /^[1-9]+$/;
    if (idRec == "") {
        erroridR.innerHTML = "Veuillez entrer l id de reclamation!";

    }
    else if (!(idRec.match(num))) {
        erroridR.innerHTML = "Veuillez entrer un id valid!";
    }
    else {
        erroridR.innerHTML = "";

    }
    if (nomR == "") {
        errorN.innerHTML = "Veuillez entrer votre nom!";

    }
    else if (!(nomR.match(letters) && nomR.charAt(0).match(/^[A-Z]+$/))) {
        errorN.innerHTML = "Veuillez entrer un nom valid!";
    } else {
        errorN.innerHTML = "";

    }

    if (prenomR == "") {
        errorP.innerHTML = "Veuillez entrer votre prenom!";

    }
    else if (!(prenomR.match(letters) && prenomR.charAt(0).match(/^[A-Z]+$/))) {
        errorP.innerHTML = "Veuillez entrer un prenom valid!";
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
    if (Rec == "") {
        errorrec.innerHTML = "Veuillez entrer votre reclamation!";

    } else {
        errorrec.innerHTML = "";

    }
}
    function VerifEmail() {
        var mail = document.forms["c"]["mail"].value;
        var Cmail = document.forms["c"]["Cmail"].value;
        var errorCR = document.getElementById('errorCR');
    
        if (Cmail == "") {
            errorCR.innerHTML = "Veuillez confirmer votre email!";
        }
        if (!(mail == Cmail)) {
            errorCR.innerHTML = "Les deux mails ne sont pas identiques!";
    
        } else {
            errorCR.innerHTML = ""
        }
    }
    
    function validateForm(e) {
        e.preventDefault();
        verif();
    }
