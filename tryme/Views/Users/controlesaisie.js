function verif() {

    var name = document.forms["clubForm"]["name"].value;
   // var prename = document.forms["clubForm"]["prename"].value;
    var mail = document.forms["clubForm"]["mail"].value;
    //var Cmail = document.forms["clubForm"]["Cmail"].value;
    var pass = document.forms["clubForm"]["pass"].value;
    //var nomC = document.forms["clubForm"]["nomC"].value;
    //var DateFond = document.forms["clubForm"]["DateFond"].value;
    //var NbM = document.forms["clubForm"]["NbM"].value;
   // var activities = document.querySelectorAll('input[name="act"]:checked');
   // var adhe = document.forms["clubForm"]["adhe"].value;


    var errorN = document.getElementById('errorNR');
    //var errorP = document.getElementById('errorPR');
    var errorEmail = document.getElementById('errorMR');
    var errorPass = document.getElementById('errorPass');
   // var errorNC = document.getElementById('errorNC');
   // var errorDate = document.getElementById('errorDF');
    //var errorNA = document.getElementById('errorNBM');
   // var errorCategorie = document.getElementById('errorCAT');
    //var errorActivities = document.getElementById('errorACT');
    //var errorADH = document.getElementById('errorADH');

    var letters = /^[A-Za-z]+$/;
    var dateNow = new Date();
    if (name == "") {
        errorN.innerHTML = "Veuillez entrer votre nom!";

    }
    else if (!(name.match(letters) && name.charAt(0).match(/^[A-Z]+$/))) {
        errorN.innerHTML = "Veuillez entrer un nom valid!";
    } else {
        errorN.innerHTML = "";

    }
    /*
    if (prename == "") {
        errorP.innerHTML = "Veuillez entrer votre prenom!";

    }
    else if (!(prename.match(letters) && prename.charAt(0).match(/^[A-Z]+$/))) {
        errorP.innerHTML = "Veuillez entrer un prenom valid!";
    }
    else {
        errorP.innerHTML = "";

    }
   */
    if (mail == "") {
        errorEmail.innerHTML = "Veuillez entrer votre email!";

    }
    else if (!mail.match('@esprit.tn')) {
        errorEmail.innerHTML = "Veuillez entrer un email valid!";
    }
    else {
        errorEmail.innerHTML = "";

    }

    if (pass == "") {
        errorPass.innerHTML = "Veuillez entrer votre mot de passe!";

    }
    else if (!(pass.match(/[0-9]/g) &&
        pass.match(/[A-Z]/g) &&
        pass.match(/[a-z]/g) &&
        pass.length >= 8)) {
        errorPass.innerHTML = "Le mot de passe doit contenir au moins 8 caractères, dont au moins : Une lettre majuscule, Une lettre minuscule et un nombre.";

    }
    else {
        errorPass.innerHTML = "";

    }
    /*
    if (nomC == "") {
        errorNC.innerHTML = "Le nom du club est obligatoire!";

    }
    else {
        errorNC.innerHTML = "";

    }

    if (DateFond == "") {
        errorDate.innerHTML = "Veuillez choisir une date!";

    }
    else if (new Date(DateFond).toLocaleString() > dateNow.toLocaleString()) {
        errorDate.innerHTML = "La date de fondation doit être inférieur à la date actuelle";
    }
    else {
        errorDate.innerHTML = "";

    }

    if (NbM == "") {
        errorNA.innerHTML = "Veuillez entrer le nombre des memebres !";
    }
    else if (isNaN(NbM) || NbM < 10 || NbM > 100) {
        errorNA.innerHTML = "Le nombre des adhérents doit être supérieur à 10 et inférieur à 100 !";

    }
    else {
        errorNA.innerHTML = "";

    }

    if (activities.length == 0) {
        errorActivities.innerHTML = "On doit sélectionner au moins un type d’activités!";
    }
    else {
        errorActivities.innerHTML = "";

    }
        */
}
/*
function changeAutre() {
    var autre = document.forms["clubForm"]["desc"];
    if (document.getElementById("autre").checked = true) {
        autre.style.display = "";
    }
    else {
        autre.style.display = "none";

    }
}

function VerifEmail() {
    var mail = document.forms["clubForm"]["mail"].value;
    var Cmail = document.forms["clubForm"]["Cmail"].value;
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
*/
function validateForm(e) {
    e.preventDefault();
    verif();
};