<?php
  
    include_once '../../Model/User.php';
    include_once '../../Controller/User.php';
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    $error = "";
    $User = null;
    $controller = new userController();

  
 
       
    function test_input($data) {
          
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
       
    if ($_SERVER["REQUEST_METHOD"]== "POST") {
        $email = test_input($_POST["email"]);
        $pass = test_input($_POST["pass"]);
        var_dump($email);
        $info = array("email" => $email, "pass" => $pass);
        $user = $controller->getUser($info);
        var_dump($user);

        //$stmt = $con->prepare("SELECT * FROM user");
        //$stmt->execute();
        //$users = $stmt->fetchAll();
          
        /*foreach($users as $user) {*/
              
            if($user) {
                    header("Location: index.php");
            }
            else {"<script language='javascript'>";
                echo "alert('WRONG INFORMATION')";
                echo "</script>";
                die();
            }
        }
    
      
    ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <title>Log In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    
</head>



<style>
        /* @extend display-flex; */
display-flex, .display-flex, .display-flex-center, .signup-content, .signin-content, .social-login, .socials {
  display: flex;
  display: -webkit-flex; }

/* @extend list-type-ulli; */
list-type-ulli, .socials {
  list-style-type: none;
  margin: 0;
  padding: 0; }

/* poppins-300 - latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 300;
  src: url("../fonts/poppins/poppins-v5-latin-300.eot");
  /* IE9 Compat Modes */
  src: local("Poppins Light"), local("Poppins-Light"), url("../fonts/poppins/poppins-v5-latin-300.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-300.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-300.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-300.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-300.svg#Poppins") format("svg");
  /* Legacy iOS */ }
/* poppins-300italic - latin */
@font-face {
  font-family: 'Poppins';
  font-style: italic;
  font-weight: 300;
  src: url("../fonts/poppins/poppins-v5-latin-300italic.eot");
  /* IE9 Compat Modes */
  src: local("Poppins Light Italic"), local("Poppins-LightItalic"), url("../fonts/poppins/poppins-v5-latin-300italic.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-300italic.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-300italic.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-300italic.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-300italic.svg#Poppins") format("svg");
  /* Legacy iOS */ }
/* poppins-regular - latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: url("../fonts/poppins/poppins-v5-latin-regular.eot");
  /* IE9 Compat Modes */
  src: local("Poppins Regular"), local("Poppins-Regular"), url("../fonts/poppins/poppins-v5-latin-regular.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-regular.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-regular.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-regular.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-regular.svg#Poppins") format("svg");
  /* Legacy iOS */ }
/* poppins-italic - latin */
@font-face {
  font-family: 'Poppins';
  font-style: italic;
  font-weight: 400;
  src: url("../fonts/poppins/poppins-v5-latin-italic.eot");
  /* IE9 Compat Modes */
  src: local("Poppins Italic"), local("Poppins-Italic"), url("../fonts/poppins/poppins-v5-latin-italic.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-italic.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-italic.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-italic.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-italic.svg#Poppins") format("svg");
  /* Legacy iOS */ }
/* poppins-500 - latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 500;
  src: url("../fonts/poppins/poppins-v5-latin-500.eot");
  /* IE9 Compat Modes */
  src: local("Poppins Medium"), local("Poppins-Medium"), url("../fonts/poppins/poppins-v5-latin-500.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-500.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-500.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-500.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-500.svg#Poppins") format("svg");
  /* Legacy iOS */ }
/* poppins-500italic - latin */
@font-face {
  font-family: 'Poppins';
  font-style: italic;
  font-weight: 500;
  src: url("../fonts/poppins/poppins-v5-latin-500italic.eot");
  /* IE9 Compat Modes */
  src: local("Poppins Medium Italic"), local("Poppins-MediumItalic"), url("../fonts/poppins/poppins-v5-latin-500italic.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-500italic.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-500italic.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-500italic.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-500italic.svg#Poppins") format("svg");
  /* Legacy iOS */ }
/* poppins-600 - latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 600;
  src: url("../fonts/poppins/poppins-v5-latin-600.eot");
  /* IE9 Compat Modes */
  src: local("Poppins SemiBold"), local("Poppins-SemiBold"), url("../fonts/poppins/poppins-v5-latin-600.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-600.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-600.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-600.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-600.svg#Poppins") format("svg");
  /* Legacy iOS */ }
/* poppins-700 - latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 700;
  src: url("../fonts/poppins/poppins-v5-latin-700.eot");
  /* IE9 Compat Modes */
  src: local("Poppins Bold"), local("Poppins-Bold"), url("../fonts/poppins/poppins-v5-latin-700.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-700.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-700.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-700.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-700.svg#Poppins") format("svg");
  /* Legacy iOS */ }
/* poppins-700italic - latin */
@font-face {
  font-family: 'Poppins';
  font-style: italic;
  font-weight: 700;
  src: url("../fonts/poppins/poppins-v5-latin-700italic.eot");
  /* IE9 Compat Modes */
  src: local("Poppins Bold Italic"), local("Poppins-BoldItalic"), url("../fonts/poppins/poppins-v5-latin-700italic.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-700italic.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-700italic.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-700italic.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-700italic.svg#Poppins") format("svg");
  /* Legacy iOS */ }
/* poppins-800 - latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 800;
  src: url("../fonts/poppins/poppins-v5-latin-800.eot");
  /* IE9 Compat Modes */
  src: local("Poppins ExtraBold"), local("Poppins-ExtraBold"), url("../fonts/poppins/poppins-v5-latin-800.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-800.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-800.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-800.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-800.svg#Poppins") format("svg");
  /* Legacy iOS */ }
/* poppins-800italic - latin */
@font-face {
  font-family: 'Poppins';
  font-style: italic;
  font-weight: 800;
  src: url("../fonts/poppins/poppins-v5-latin-800italic.eot");
  /* IE9 Compat Modes */
  src: local("Poppins ExtraBold Italic"), local("Poppins-ExtraBoldItalic"), url("../fonts/poppins/poppins-v5-latin-800italic.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-800italic.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-800italic.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-800italic.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-800italic.svg#Poppins") format("svg");
  /* Legacy iOS */ }
/* poppins-900 - latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 900;
  src: url("../fonts/poppins/poppins-v5-latin-900.eot");
  /* IE9 Compat Modes */
  src: local("Poppins Black"), local("Poppins-Black"), url("../fonts/poppins/poppins-v5-latin-900.eot?#iefix") format("embedded-opentype"), url("../fonts/poppins/poppins-v5-latin-900.woff2") format("woff2"), url("../fonts/poppins/poppins-v5-latin-900.woff") format("woff"), url("../fonts/poppins/poppins-v5-latin-900.ttf") format("truetype"), url("../fonts/poppins/poppins-v5-latin-900.svg#Poppins") format("svg");
  /* Legacy iOS */ }
a:focus, a:active {
  text-decoration: none;
  outline: none;
  transition: all 300ms ease 0s;
  -moz-transition: all 300ms ease 0s;
  -webkit-transition: all 300ms ease 0s;
  -o-transition: all 300ms ease 0s;
  -ms-transition: all 300ms ease 0s; }

input, select, textarea {
  outline: none;
  appearance: unset !important;
  -moz-appearance: unset !important;
  -webkit-appearance: unset !important;
  -o-appearance: unset !important;
  -ms-appearance: unset !important; }

input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
  appearance: none !important;
  -moz-appearance: none !important;
  -webkit-appearance: none !important;
  -o-appearance: none !important;
  -ms-appearance: none !important;
  margin: 0; }

input:focus, select:focus, textarea:focus {
  outline: none;
  box-shadow: none !important;
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  -o-box-shadow: none !important;
  -ms-box-shadow: none !important; }

input[type=checkbox] {
  appearance: checkbox !important;
  -moz-appearance: checkbox !important;
  -webkit-appearance: checkbox !important;
  -o-appearance: checkbox !important;
  -ms-appearance: checkbox !important; }

input[type=radio] {
  appearance: radio !important;
  -moz-appearance: radio !important;
  -webkit-appearance: radio !important;
  -o-appearance: radio !important;
  -ms-appearance: radio !important; }

img {
  max-width: 100%;
  height: auto; }

figure {
  margin: 0; }

p {
  margin-bottom: 0px;
  font-size: 15px;
  color: #777; }

h2 {
  line-height: 1.66;
  margin: 0;
  padding: 0;
  font-weight: bold;
  color: #222;
  font-family: Poppins;
  font-size: 36px; }

.main {
  background: #f8f8f8;
  padding: 150px 0; }

.clear {
  clear: both; }

body {
  font-size: 13px;
  line-height: 1.8;
  color: #222;
  background: #f8f8f8;
  font-weight: 400;
  font-family: Poppins; }

.container {
  width: 900px;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
  -o-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
  -ms-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
  border-radius: 20px;
  -moz-border-radius: 20px;
  -webkit-border-radius: 20px;
  -o-border-radius: 20px;
  -ms-border-radius: 20px; }

.display-flex {
  justify-content: space-between;
  -moz-justify-content: space-between;
  -webkit-justify-content: space-between;
  -o-justify-content: space-between;
  -ms-justify-content: space-between;
  align-items: center;
  -moz-align-items: center;
  -webkit-align-items: center;
  -o-align-items: center;
  -ms-align-items: center; }

.display-flex-center {
  justify-content: center;
  -moz-justify-content: center;
  -webkit-justify-content: center;
  -o-justify-content: center;
  -ms-justify-content: center;
  align-items: center;
  -moz-align-items: center;
  -webkit-align-items: center;
  -o-align-items: center;
  -ms-align-items: center; }

.position-center {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%); }

.signup {
  margin-bottom: 150px; }

.signup-content {
  padding: 75px 0; }

.signup-form, .signup-image, .signin-form, .signin-image {
  width: 50%;
  overflow: hidden; }

.signup-image {
  margin: 0 55px; }

.form-title {
  margin-bottom: 33px; }

.signup-image {
  margin-top: 45px; }

figure {
  margin-bottom: 50px;
  text-align: center; }

.form-submit {
  display: inline-block;
  background: #6dabe4;
  color: #fff;
  border-bottom: none;
  width: auto;
  padding: 15px 39px;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  margin-top: 25px;
  cursor: pointer; }
  .form-submit:hover {
    background: #4292dc; }

#signin {
  margin-top: 16px; }

.signup-image-link {
  font-size: 14px;
  color: #222;
  display: block;
  text-align: center; }

.term-service {
  font-size: 13px;
  color: #222; }

.signup-form {
  margin-left: 75px;
  margin-right: 75px;
  padding-left: 34px; }

.register-form {
  width: 100%; }

.form-group {
  position: relative;
  margin-bottom: 25px;
  overflow: hidden; }
  .form-group:last-child {
    margin-bottom: 0px; }

input {
  width: 100%;
  display: block;
  border: none;
  border-bottom: 1px solid #999;
  padding: 6px 30px;
  font-family: Poppins;
  box-sizing: border-box; }
  input::-webkit-input-placeholder {
    color: #999; }
  input::-moz-placeholder {
    color: #999; }
  input:-ms-input-placeholder {
    color: #999; }
  input:-moz-placeholder {
    color: #999; }
  input:focus {
    border-bottom: 1px solid #222; }
    input:focus::-webkit-input-placeholder {
      color: #222; }
    input:focus::-moz-placeholder {
      color: #222; }
    input:focus:-ms-input-placeholder {
      color: #222; }
    input:focus:-moz-placeholder {
      color: #222; }

input[type=checkbox]:not(old) {
  width: 2em;
  margin: 0;
  padding: 0;
  font-size: 1em;
  display: none; }

input[type=checkbox]:not(old) + label {
  display: inline-block;
  line-height: 1.5em;
  margin-top: 6px; }

input[type=checkbox]:not(old) + label > span {
  display: inline-block;
  width: 13px;
  height: 13px;
  margin-right: 15px;
  margin-bottom: 3px;
  border: 1px solid #999;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -o-border-radius: 2px;
  -ms-border-radius: 2px;
  background: white;
  background-image: -moz-linear-gradient(white, white);
  background-image: -ms-linear-gradient(white, white);
  background-image: -o-linear-gradient(white, white);
  background-image: -webkit-linear-gradient(white, white);
  background-image: linear-gradient(white, white);
  vertical-align: bottom; }

input[type=checkbox]:not(old):checked + label > span {
  background-image: -moz-linear-gradient(white, white);
  background-image: -ms-linear-gradient(white, white);
  background-image: -o-linear-gradient(white, white);
  background-image: -webkit-linear-gradient(white, white);
  background-image: linear-gradient(white, white); }

input[type=checkbox]:not(old):checked + label > span:before {
  content: '\f26b';
  display: block;
  color: #222;
  font-size: 11px;
  line-height: 1.2;
  text-align: center;
  font-family: 'Material-Design-Iconic-Font';
  font-weight: bold; }

.agree-term {
  display: inline-block;
  width: auto; }

label {
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -webkit-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  color: #222; }

.label-has-error {
  top: 22%; }

label.error {
  position: relative;
  background: url("../images/unchecked.gif") no-repeat;
  background-position-y: 3px;
  padding-left: 20px;
  display: block;
  margin-top: 20px; }

label.valid {
  display: block;
  position: absolute;
  right: 0;
  left: auto;
  margin-top: -6px;
  width: 20px;
  height: 20px;
  background: transparent; }
  label.valid:after {
    font-family: 'Material-Design-Iconic-Font';
    content: '\f269';
    width: 100%;
    height: 100%;
    position: absolute;
    /* right: 0; */
    font-size: 16px;
    color: green; }

.label-agree-term {
  position: relative;
  top: 0%;
  transform: translateY(0);
  -moz-transform: translateY(0);
  -webkit-transform: translateY(0);
  -o-transform: translateY(0);
  -ms-transform: translateY(0); }

.material-icons-name {
  font-size: 18px; }

.signin-content {
  padding-top: 67px;
  padding-bottom: 87px; }

.social-login {
  align-items: center;
  -moz-align-items: center;
  -webkit-align-items: center;
  -o-align-items: center;
  -ms-align-items: center;
  margin-top: 80px; }

.social-label {
  display: inline-block;
  margin-right: 15px; }

.socials li {
  padding: 5px; }
  .socials li:last-child {
    margin-right: 0px; }
  .socials li a {
    text-decoration: none; }
    .socials li a i {
      width: 30px;
      height: 30px;
      color: #fff;
      font-size: 14px;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      -o-border-radius: 5px;
      -ms-border-radius: 5px;
      transform: translateZ(0);
      -moz-transform: translateZ(0);
      -webkit-transform: translateZ(0);
      -o-transform: translateZ(0);
      -ms-transform: translateZ(0);
      -webkit-transition-duration: 0.3s;
      transition-duration: 0.3s;
      -webkit-transition-property: transform;
      transition-property: transform;
      -webkit-transition-timing-function: ease-out;
      transition-timing-function: ease-out; }
  .socials li:hover a i {
    -webkit-transform: scale(1.3) translateZ(0);
    transform: scale(1.3) translateZ(0); }

.zmdi-facebook {
  background: #3b5998; }

.zmdi-twitter {
  background: #1da0f2; }

.zmdi-google {
  background: #e72734; }

.signin-form {
  margin-right: 90px;
  margin-left: 80px; }

.signin-image {
  margin-left: 110px;
  margin-right: 20px;
  margin-top: 10px; }

@media screen and (max-width: 1200px) {
  .container {
    width: calc( 100% - 30px);
    max-width: 100%; } }
@media screen and (min-width: 1024px) {
  .container {
    max-width: 1200px; } }
@media screen and (max-width: 768px) {
  .signup-content, .signin-content {
    flex-direction: column;
    -moz-flex-direction: column;
    -webkit-flex-direction: column;
    -o-flex-direction: column;
    -ms-flex-direction: column;
    justify-content: center;
    -moz-justify-content: center;
    -webkit-justify-content: center;
    -o-justify-content: center;
    -ms-justify-content: center; }

  .signup-form {
    margin-left: 0px;
    margin-right: 0px;
    padding-left: 0px;
    /* box-sizing: border-box; */
    padding: 0 30px; }

  .signin-image {
    margin-left: 0px;
    margin-right: 0px;
    margin-top: 50px;
    order: 2;
    -moz-order: 2;
    -webkit-order: 2;
    -o-order: 2;
    -ms-order: 2; }

  .signup-form, .signup-image, .signin-form, .signin-image {
    width: auto; }

  .social-login {
    justify-content: center;
    -moz-justify-content: center;
    -webkit-justify-content: center;
    -o-justify-content: center;
    -ms-justify-content: center; }

  .form-button {
    text-align: center; }

  .signin-form {
    order: 1;
    -moz-order: 1;
    -webkit-order: 1;
    -o-order: 1;
    -ms-order: 1;
    margin-right: 0px;
    margin-left: 0px;
    padding: 0 30px; }

  .form-title {
    text-align: center; } }
@media screen and (max-width: 400px) {
  .social-login {
    flex-direction: column;
    -moz-flex-direction: column;
    -webkit-flex-direction: column;
    -o-flex-direction: column;
    -ms-flex-direction: column; }

  .social-label {
    margin-right: 0px;
    margin-bottom: 10px; } }

/*# sourceMappingURL=style.css.map */

        </style>
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../assets/images/login.png" alt=""></figure>
                        <br><br><br><br>
                        <a href="register.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log In</h2>
                        <form method="POST" action='' class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" checked="checked" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div>
                                                <span class="pass"><a href="forgot_password.php">Forgotten password </a></span>
                                            </div>    
                            <div class="form-group form-button">
                                <input href="index.php" type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form> 
                        <div>
                      
                        <div class="social-login">
  
    
    <style>
            *, *:before, *:after {
                box-sizing: border-box;
            }
    
            .g-sign-in-button {
                margin: 10px;
                display: inline-block;
                width: 240px;
                height: 50px;
                background-color: #4285f4;
                color: #fff;
                border-radius: 1px;
                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.25);
                transition: background-color .218s, border-color .218s, box-shadow .218s;
            }
    
            .g-sign-in-button:hover {
                cursor: pointer;
                -webkit-box-shadow: 0 0 3px 3px rgba(66, 133, 244, 0.3);
                box-shadow: 0 0 3px 3px rgba(66, 133, 244, 0.3);
            }
    
            .g-sign-in-button:active {
                background-color: #3367D6;
                transition: background-color 0.2s;
            }
    
            .g-sign-in-button .content-wrapper {
                height: 100%;
                width: 100%;
                border: 1px solid transparent;
            }
    
            .g-sign-in-button img {
                width: 18px;
                height: 18px;
            }
    
            .g-sign-in-button .logo-wrapper {
                padding: 15px;
                background: #fff;
                width: 48px;
                height: 100%;
                border-radius: 1px;
                display: inline-block;
            }
    
            .g-sign-in-button .text-container {
                font-family: Roboto,arial,sans-serif;
                font-weight: 500;
                letter-spacing: .21px;
                font-size: 16px;
                line-height: 48px;
                vertical-align: top;
                border: none;
                display: inline-block;
                text-align: center;
                width: 180px;
            }
    
    </style>
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('nom: ' + profile.getno,());
        console.log('email: ' + profile.getemail());
        console.log("adresse: " + profile.getadresse());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
    </script>
  </div>
                    </div>
                </div>
            </div>
        </section>

		<script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

