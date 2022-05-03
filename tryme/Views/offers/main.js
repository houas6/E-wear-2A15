function verify(e) {
  let error = "";

  // description
  const description = document.getElementById("description").value;
  // should be at least 10 characters
  if (description.length < 10) {
    error += "* Description must be at least 10 characters long.\n";
  }
  // should be at most 100 characters
  if (description.length > 100) {
    error += "* Description must be at most 100 characters long.\n";
  }

  // pourcentage
  const pourcentage = document.getElementById("pourcentage").value;
  // should not be empty
  if (pourcentage == "") {
    error += "* Pourcentage must not be empty.\n";
  }

  // should be a number between 0 and 100
  if (pourcentage < 0 || pourcentage > 100) {
    error += "* Pourcentage must be between 0 and 100.\n";
  }

  // startDate
  const startDate = document.getElementById("startDate").value;
  // should not be empty
  if (startDate == "") {
    error += "* Start date must not be empty.\n";
  }

  // endDate
  const endDate = document.getElementById("endDate").value;

  // should be a date after startDate
  if (endDate < startDate) {
    error += "* End date must be after start date.\n";
  }

  const errorContainer = document.getElementById("error");
  errorContainer.innerText = error;


if (error) {
  e.preventDefault();
} 

e.preventDefault();


}

console.log("FUCK")

function gameVerify(e) {
  
  let error = "";

  // description
  const description = document.getElementById("description").value;
  // should be at least 10 characters
  if (description.length < 10) {
    error += "* Description must be at least 10 characters long.\n";
  }
  // should be at most 100 characters
  if (description.length > 100) {
    error += "* Description must be at most 100 characters long.\n";
  }

  // code
  const code = document.getElementById("code").value;
  // should not be empty
  if (code == "") {
    error += "* code must not be empty.\n";
  }

   // email
   const email = document.getElementById("email").value;
   // should not be empty
   if (email == "") {
     error += "* email must not be empty.\n";
   }

  const errorContainer = document.getElementById("error");
  errorContainer.innerText = error;


  console.log(error)

if (error) {
  e.preventDefault();
} 



}



const form = document.getElementById('create')
if  (form) form.addEventListener('submit', verify)


const gameform = document.getElementById('gamecreate')
if  (gameform) {
  gameform.addEventListener('submit', gameVerify)
  console.log('here')
}