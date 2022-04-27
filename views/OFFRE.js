/*function verif() {
   // var idRec = document.forms["c"]["idRec"].value;
    var nomR = document.forms["c"]["nomR"].value;
    var prenomR = document.forms["c"]["prenomR"].value;
    var mail = document.forms["c"]["mail"].value;
    var Cmail = document.forms["c"]["Cmail"].value;
    var rec = document.forms["c"]["Rec"].value;
   // var erroridR = document.getElementById('erroridR');
    var errorN = document.getElementById('errorNR');
    var errorP = document.getElementById('errorPR');
    var errorEmail = document.getElementById('errorMR');
    var errorrec = document.getElementById('errorR');
    var letters = /^[A-Za-z]+$/;
    var num = /^[1-9]+$/;
   /* if (idRec == "") {
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
    if (rec == "") {
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
*/
document.getElementById("c").addEventListener("submit", function(e){
 
	var error_first;
    var error_last;
    var error_mail;
    var error_cmail;
    var error_rec;
    
	/*var inputs = this.getElementsByTagName("input");
 
	for (var i = 0; i < inputs.length; i++) {
		console.log(inputs[i]);
		if (!inputs[i].value) {
			erreur = "Please complete all fields! ";
		}
	}*/

	var nomR = document.getElementById("nomR");
	var prenomR = document.getElementById("prenomR");
	var mail = document.getElementById("mail");
    var cmail = document.getElementById("cmail");
    
    var rec = document.getElementById("rec");
    var num = /^[A-Za-z1-9]+$/;
     myregex = /^[A-Za-z]+$/;
     var reWhiteSpace = new RegExp("/^\s+$/");
     let regexx = new RegExp('[a-z0-9]+@gmail.com');
     let regexxx = new RegExp('[a-z0-9]+@yahoo.tn');
	if (!prenomR.value) {
		error_last = "first Name Required!!";
	}
    
    else if (myregex.test(prenomR.value)==false){
		error_last = "first Name must contain only letters!!";
	}
    
    
    if (!nomR.value) {
		error_first = "Last Name Required!!";
	}
    else if (myregex.test(nomR.value)==false){
		error_first = "Last Name must contain only letters!!";
	}
    

    if (!mail.value) {
		error_mail = "Email Required!!";
	}
    else if( regexx.test(mail.value)==false && regexxx.test(mail.value)==false )
    {
        error_mail = "Email invalid must have @gmail.com or @yahoo.tn!!";
    }
    if (!cmail.value) {
		error_cmail = "Email confirmation Required!!";
	}
    else if(!(cmail.value==mail.value))
    {error_cmail = "Emails are not identical !!";}
    if (!rec.value) {
		error_rec = "reclamation Required!!";
	}
    else if (myregex.test(rec.value)==false && reWhiteSpace.test(s.value)==false && num.test(rec.value)==false){
		error_rec = "reclamation must contain only letters and numbers !!";
	}
	
    if (error_last) {
		e.preventDefault();
		document.getElementById("error_last").innerHTML = error_last;
		return false;}
        else
        {
            document.getElementById("error_last").innerHTML = "";
        }
      if (error_first) {
		e.preventDefault();
		document.getElementById("error_first").innerHTML = error_first;
		return false;
	}
    else 
    {document.getElementById("error_first").innerHTML = "";}

    if (error_mail) {
		e.preventDefault();
		document.getElementById("error_mail").innerHTML = error_mail;
		return false;
	}
else
{document.getElementById("error_mail").innerHTML = "";}
    if (error_cmail) {
		e.preventDefault();
		document.getElementById("error_cmail").innerHTML = error_cmail;
		return false;
	}
else{document.getElementById("error_cmail").innerHTML = "";}

    if (error_rec) {
		e.preventDefault();
		document.getElementById("error_rec").innerHTML = error_rec;
		return false;
	}
    else{document.getElementById("error_rec").innerHTML = "";}
});