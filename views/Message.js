/*function verife() {

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
    }*/
    document.getElementById("b").addEventListener("submit", function(ee){
 
        var error_laste;
        var error_maile;
        var error_s;
        var error_mess;
        
        /*var inputs = this.getElementsByTagName("input");
     
        for (var i = 0; i < inputs.length; i++) {
            console.log(inputs[i]);
            if (!inputs[i].value) {
                erreur = "Please complete all fields! ";
            }
        }*/
    
        var nomRe = document.getElementById("nomRe");
        var maile = document.getElementById("maile");
        var sujetRe = document.getElementById("sujetRe");
        var  messageRe= document.getElementById("messageRe");
        
    
         myregex = /^[A-Za-z]+$/;
        
        if (!nomRe.value) {
            error_laste = "Last Name Required!!";
        }
        
        else if (myregex.test(nomRe.value)==false){
            error_laste = "Last Name must contain only letters!!";
        }
        else
        {error_laste = "";}
    
        if (!maile.value) {
            error_maile = "Email Required!!";
        }
        
        
        if (!sujetRe.value) {
            error_s = "subject Required!!";
        }
        if (!messageRe.value) {
            error_mess = "message Required!!";
        }
        
        
        if (error_laste) {
            ee.preventDefault();
            document.getElementById("error_laste").innerHTML = error_laste;
            return false;
        }
    
        if (error_maile) {
            ee.preventDefault();
            document.getElementById("error_maile").innerHTML = error_maile;
            return false;
        }
    
        if (error_s) {
            ee.preventDefault();
            document.getElementById("error_s").innerHTML = error_s;
            return false;
        }
    
    
        if (error_mess) {
            ee.preventDefault();
            document.getElementById("error_mess").innerHTML = error_mess;
            return false;
        }
    
    });