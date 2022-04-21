<?php
    include_once '../../Model/User.php';
    include_once '../../Controller/User.php';
    $error = "";
    $User = null;

    // create an instance of the controller
   
    $UserController = new UserController();
    if (
       
		isset($_POST["name"]) &&		
        isset($_POST["email"]) &&
		isset($_POST["pass"]) && 
        isset($_POST["adresse"]) 
        
    ) {
        if (
         
			!empty($_POST['name']) &&
            !empty($_POST["email"]) && 
			!empty($_POST["pass"]) && 
            !empty($_POST["adresse"]) 
            
        ) {
            $User = new User(
              
				$_POST['name'],
                $_POST['email'],
                $_POST['pass'],
				$_POST['adresse'],
              
            );
            $UserController->addUser($User);
            var_dump($User);

            header('Location:login.php');
        }
        else
            $error = "Missing information";
          //  var_dump($error);
            echo $error;
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../assets/css/register.css">
    <script type="text/javascript" src="controlesaisie.js"></script>
</head>
<body>
   
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
         
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        
                        <form  name="clubForm" method="POST" onsubmit="return validateForm(event) " action='' class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                                <p id="errorNR" class="error"></p>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                                <p id="errorMR" class="error"></p>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                                <p id="errorPass" class="error"></p>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                           
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="adresse" id="adresse" placeholder="Your Adress"/>
                            </div>
                            <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" onclick="Afficher()" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>Afficher Mot de Passe </label>
                            
<script>
 /* function CheckPassword(inputtxt) 
{ 
var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
if(inputtxt.value.match(pass)) 
{ 
alert('Correct, try another...')
return true;
}
else
{ 
alert('Wrong...!')
return false;
}
}*/
function Afficher()
{ 
var input = document.getElementById("pass"); 
if (input.type === "password")
{ 
input.type = "text"; 
} 
else
{ 
input.type = "password"; 
} 
} 
</script>
</div>
                           
                    <div class="form-group">
   
<?php

if(isset($_POST['captcha'])){//Le formulaire est envoyé, on traite les données...
    if($_POST['captcha']!=$_SESSION['captcha']){//si le captcha sélectionné n'est pas le bon
        echo "Captcha incorrect!";//on stop le traitement
    } else {
        echo "Captcha correct!";
        //on continu le traitement...
    }
}
/**
 La partie de code suivante doit impérativement être placée en dessous de la vérification des champs du formulaire, sinon le code sera toujours faux lors de sa vérification car il sera toujours un nouveau code
 **/
 
//si le formulaire n'est pas encore été cliqué, on défini le captcha
$NombreDeCaractCode=4;//vous pouvez définir ici combien vous souhaitez avec de caractères pour chaque code
$NombreDeCodes=5;//vous pouvez définir ici combien vous souhaitez avoir de faux codes à choisir dans la liste déroulante
$CodeCaptcha=substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"),0,$NombreDeCaractCode);//j'ai enlevé le O (lettre o) et le 0 (chiffre 0) volontairement car ils peuvent prêter à confusion
$_SESSION['captcha']=$CodeCaptcha;//pensez à bien initialiser la session avec "session_start();" tout en haut de votre page, avant n'importe quel balise HTML
$ListeCodes[]=$CodeCaptcha;//initiation du tableau qui contiendra tous les faux codes à choisir dans la liste
for($i=1;$i<=($NombreDeCodes-1);$i++){
    $ListeCodes[]=substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"),0,$NombreDeCaractCode);
}
shuffle($ListeCodes);//on mélange tous les codes
/**
 Fin de la partie code à placé en dessous de la vérification des champs 
 **/
?><br/>
<form  method="post">  
<!-- ici les autres champs de mon formulaire -->
<p class="p3" >Choisissez le code <?php echo $_SESSION['captcha']; ?> dans la liste suivante: </p>
<select name="captcha" onchange="this.form.submit()"><!-- avec onchange="this.form.submit()" on valide le formulaire dès qu'il à choisi le code! -->
    <option>Choissiez le code affiché:</option>
    <?php foreach($ListeCodes as $Code){ ?>
        <?php echo '<option value="'.$Code.'">'.$Code.'</option>'; ?>
    <?php } ?>
</select>
<!-- <input type="submit" name="valider" value="Valider"> on laisse le bouton valider au cas où le javascript ne serait pas activé sur le navigateur du visiteur -->
<br><br>



</form>
    
</div>
<div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input href="login.php" type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                               
                            </div>
                            <a href="../../index.html" class="signup-image-link">I don't want to create an account.</a>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../assets/images/sign-up.png" alt="sign up"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                       
                    </div>
                </div>
            </div>
        </section>
         <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>