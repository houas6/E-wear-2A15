function verife() {

    var nomRe = document.forms["M"]["nomRe"].value;
 
    var maile = document.forms["M"]["maile"].value;
    var sujetRe = document.forms["M"]["sujetRe"].value;
    var messageRe = document.forms["M"]["messageRe"].value;

    var errorNe = document.getElementById('errorNRe');
    var errorPe = document.getElementById('errorEP');
    var errorE = document.getElementById('errorER');
    var errorEmaile = document.getElementById('errorMRe');
    var letters = /^[A-Za-z]+$/;
   
    if (nomRe == "") {
        errorNe.innerHTML = "Veuillez entrer votre nom!";

    }
    else if (!(nomRe.match(letters) && nomRe.charAt(0).match(/^[A-Z]+$/))) {
        errorNe.innerHTML = "Veuillez entrer un nom valid!";
    } else {
        errorNe.innerHTML = "";

    }

    if (sujetRe == "") {
        errorPe.innerHTML = "Veuillez entrer votre SUJET!";

    }
    else if (!(sujetRe.match(letters) && sujetRe.charAt(0).match(/^[A-Z]+$/))) {
        errorPe.innerHTML = "Veuillez entrer un SUJET valid!";
    }
    else {
        errorPe.innerHTML = "";

    }

    if (maile == "") {
        errorEmaile.innerHTML = "Veuillez entrer votre email!";

    }
    else if (!maile.match('@gmail.com')) {
        errorEmaile.innerHTML = "Veuillez entrer un email valid!";
    }
    else {
        errorEmaile.innerHTML = "";

    }
    if (messageRe == "") {
        errorE.innerHTML = "Veuillez entrer votre MESSAGE!";

    }
    else {
        errorE.innerHTML = "";

    }
}
    
    function validateForme(e) {
        e.preventDefault();
        verife();
    }