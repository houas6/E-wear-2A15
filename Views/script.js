function verif() {

  var nom = document.forms["Form"]["nom"].value;
  var prix = document.forms["Form"]["prix"].value;
  var telephone = document.forms["Form"]["tel"].value;
  var adresse = document.forms["Form"]["adresse"].value;
  var errorN = document.getElementById('errorNR');
  var errorprix = document.getElementById('errorMR');
  var errortel = document.getElementById('errortel');
  var erroradresse = document.getElementById('erroradresse');
  var er1=1;
  var er2=1;
  var er3=1;
  var er4=1;
  var letters = /^[A-Za-z]+$/;
 

  if (nom == "") {
      errorN.innerHTML = "Veuillez entrer votre nom!";
      
  }
  else if (!(nom.match(letters) && nom.charAt(0).match(/^[A-Z]+$/))) {
      errorN.innerHTML = "Veuillez entrer un nom valid!";
  } else {
      errorN.innerHTML = "";
      er1=0;
  }

  if (prix == "") {
      errorprix.innerHTML = "Veuillez entrer votre prix!";

  }
  else if (!prix.match()) {
      errorprix.innerHTML = "Veuillez entrer un prix valid!";
  }
  else {
      errorprix.innerHTML = "/[0-9]/";
      er2=0;
  }

  if (telephone == "") {
      errortel.innerHTML = "Veuillez entrer votre mot de passe!";

  }
  else if (!(telephone.match(/[1-8]/g) 
   
     ( telephone.length == 8)) {
      errortel.innerHTML = "le telephone doit contenir 8 num";

  }
  else {
      errortel.innerHTML = "";
      er3=0;
  }

  if (adresse == "") {
      erroradresse.innerHTML = "Veuillez entrer votre adress!";

  }
  else if (!adresse.match(",tunis")) {
      erroradresse.innerHTML = "Veuillez entrer une adress qui se termine avec ,tunis";
  }
  else {
      erroradresse.innerHTML = "";
      er4=0;
  }

  if(er1== 1 || er2==1 || er3== 1 || er4== 1 ){
      return 1;
  }else{
      return 0;
  } 


}

function validateForm(e) {
 if (verif()==1)
 {
  e.preventDefault();
  }
  
};