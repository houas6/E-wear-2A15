function verify(e) {
    let error = "";
  
    // telephone
    const telephone = document.getElementById("telephone").value;
    // should be at least 10 characters
    if (telephone.length ==8) {
      error += "* telephone must be 8 numbers long.\n";
    }
    
  
    // nom
    const nom = document.getElementById("nom").value;
    // should not be empty
    if (nom == "") {
      error += "* nom must not be empty.\n";
    }
  // adresse
  const adresse = document.getElementById("adresse").value;
  // should not be empty
  if (adresse == "") {
    error += "* adresse must not be empty.\n";
  }
    // prix
    const prix = document.getElementById("prix").value;
    // should not be empty
    if (prix == "") {
      error += "* prix must not be empty.\n";
    }
  
   
  
    
  
    const errorContainer = document.getElementById("error");
    errorContainer.innerText = error;
  
  
  if (error) {
    e.preventDefault();
  } 
  
  
  }
  
  const form = document.getElementById('c')
  console.log(form)
  form.addEventListener('submit', verify)