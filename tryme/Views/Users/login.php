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
                    header("Location: update.php");
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
    <link rel="stylesheet" href="loginstyle.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <title>Log In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../assets/css/loginstyle1.css">
    <link rel="stylesheet" href="../assets/css/loginstyle2.css">

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
                        <input type="text" name="email" id="email" placeholder="Your Email"/>
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
                        <input href="../update.php" type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                    </div>
                </form> 
                <div>
              
                <div class="social-login">



</head>



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

