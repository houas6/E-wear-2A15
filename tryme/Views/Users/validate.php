<?php session_start(); ?>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/gif/png" href="logo.png">
    <title>Captcha</title>
    <link rel = "icon" href = "../assets/images/logo.png" type = "image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">


</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="../index.php" class="logo">
              <h4 style = color:#2a2a2a>PlanetWiser <img src="../assets/images/logo.png" alt=""></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
       
<style>

.p3 {
  font-family: "Copperplate", fantasy;
}

@font-face {
 font-family: "Open Sans";
 src: url("/fonts/OpenSans-Regular-webfont.woff2") format("woff2"),
        url("/fonts/OpenSans-Regular-webfont.woff") format("woff");
}
</style>
<?php
if(isset($_POST['captcha'])){//Le formulaire est envoy??, on traite les donn??es...
    if($_POST['captcha']!=$_SESSION['captcha']){//si le captcha s??lectionn?? n'est pas le bon
        echo "Captcha incorrect!";//on stop le traitement
    } else {
        echo "Captcha correct!";
        //on continu le traitement...
    }
}
/**
 La partie de code suivante doit imp??rativement ??tre plac??e en dessous de la v??rification des champs du formulaire, sinon le code sera toujours faux lors de sa v??rification car il sera toujours un nouveau code
 **/
 
//si le formulaire n'est pas encore ??t?? cliqu??, on d??fini le captcha
$NombreDeCaractCode=4;//vous pouvez d??finir ici combien vous souhaitez avec de caract??res pour chaque code
$NombreDeCodes=5;//vous pouvez d??finir ici combien vous souhaitez avoir de faux codes ?? choisir dans la liste d??roulante
$CodeCaptcha=substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"),0,$NombreDeCaractCode);//j'ai enlev?? le O (lettre o) et le 0 (chiffre 0) volontairement car ils peuvent pr??ter ?? confusion
$_SESSION['captcha']=$CodeCaptcha;//pensez ?? bien initialiser la session avec "session_start();" tout en haut de votre page, avant n'importe quel balise HTML
$ListeCodes[]=$CodeCaptcha;//initiation du tableau qui contiendra tous les faux codes ?? choisir dans la liste
for($i=1;$i<=($NombreDeCodes-1);$i++){
    $ListeCodes[]=substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"),0,$NombreDeCaractCode);
}
shuffle($ListeCodes);//on m??lange tous les codes
/**
 Fin de la partie code ?? plac?? en dessous de la v??rification des champs 
 **/
?><br/>
<form method="post">
<!-- ici les autres champs de mon formulaire -->
<p class="p3" > Bonjour </p>


<p class="p3" >Choisissez le code <?php echo $_SESSION['captcha']; ?> dans la liste suivante: </p>
<select name="captcha" onchange="this.form.submit()"><!-- avec onchange="this.form.submit()" on valide le formulaire d??s qu'il ?? choisi le code! -->
    <option>Choissiez le code affich??:</option>
    <?php foreach($ListeCodes as $Code){ ?>
        <?php echo '<option value="'.$Code.'">'.$Code.'</option>'; ?>
    <?php } ?>
</select>
<!-- <input type="submit" name="valider" value="Valider"> on laisse le bouton valider au cas o?? le javascript ne serait pas activ?? sur le navigateur du visiteur -->
<br><br>
<a href="update.php" class="main-blue-button" type="submit  "><span>Profile</span></a>

<div class="imgg">
<img src="../assets/images/robot.jpg" width="450" align="right"
     height="30 "  title="Hey you! Make sure to choose the right code." > 
    </div>
</form>
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>