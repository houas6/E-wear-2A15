document.getElementById("bad").addEventListener("submit", function(e){
 
    //var error_first;
    var error_laste;
    var error_maile;
    var error_s;
    var error_mess;
    
    
    
    
    var nomRe = document.getElementById("nomRe");
    var maile = document.getElementById("maile");
    var sujetRe = document.getElementById("sujetRe");
    var messageRe = document.getElementById("messageRe");
    var num = /^[A-Za-z1-9]+$/;
     myregex = /^[A-Za-z]+$/;
     var reWhiteSpace = new RegExp("/^\s+$/");
     let regexx = new RegExp('[a-z0-9]+@gmail.com');
     let regexxx = new RegExp('[a-z0-9]+@yahoo.tn');
    
    if (!nomRe.value) {
        error_laste = "Name Required!!";
    }

    else if (myregex.test(nomRe.value)==false)
    {
        error_laste = "Name must contain only letters!!";
}
    

    if (!maile.value) {
        error_maile = "Email Required !!";
    }
    else if( regexx.test(maile.value)==false && regexxx.test(maile.value)==false )
    {
        error_maile = "Email invalid must have @gmail.com or @yahoo.tn!!";
    }
    if (!sujetRe.value) {
        error_s = "subject required";
    }
    else if (myregex.test(sujetRe.value)==false)
    {
        error_s = "subject must contain only letters!!";
}
    if (!messageRe.value) {
        error_mess = "message Required!!";
    }
    else if (myregex.test(messageRe.value)==false && reWhiteSpace.test(s.value)==false && num.test(messageRe.value)==false){
        error_mess = "message must contain only letters and numbers !!";
    }
    
    if (error_laste) {
        e.preventDefault();
        document.getElementById("error_laste").innerHTML = error_laste;
        return false;}
        else
        {
            document.getElementById("error_laste").innerHTML = "";
        }

    if (error_maile) {
        e.preventDefault();
        document.getElementById("error_maile").innerHTML = error_maile;
        return false;
    }
else
{document.getElementById("error_maile").innerHTML = "";}
    if (error_s) {
        e.preventDefault();
        document.getElementById("error_s").innerHTML = error_s;
        return false;
    }
else{document.getElementById("error_s").innerHTML = "";}

    if (error_mess) {
        e.preventDefault();
        document.getElementById("error_mess").innerHTML = error_mess;
        return false;
    }
    else{document.getElementById("error_mess").innerHTML = "";}
});