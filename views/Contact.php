<?php
    include_once '../Model/Reclamation.php';
    include_once '../controller/reclamationC.php';
    $error1 = "";
    $reclamation = null;

    // create an instance of the controller
   
    $reclamationC = new reclamationC();
    if (
      //isset($_POST["idRec"]) &&	
		isset($_POST["nomR"]) &&		
    isset($_POST["prenomR"]) &&	
        isset($_POST["mail"]) &&
		isset($_POST["rec"]) 
        
    ) {
        if (
          //!empty($_POST['idRec']) &&
			!empty($_POST['nomR']) &&
            !empty($_POST["prenomR"]) && 
			!empty($_POST["mail"]) && 
            !empty($_POST["rec"]) 
            
        ) {
            $reclamation = new reclamation(
             // $_POST["idRec"],
              $_POST['nomR'],
              $_POST['prenomR'],
              $_POST['mail'],
              $_POST['rec']
              
            );
            $reclamationC->ajouterreclamtionn($reclamation);
            

            
        }
        else
            $error1 = "Missing information";
          //  var_dump($error);
            echo $error1;
    }
?>
<?php
    include_once '../Model/messagee.php';
    include_once '../controller/message.php';
    $error11 = "";
    $message = null;

    // create an instance of the controller
   
    $messageController = new messageController();
    if (
    
		isset($_POST["nomRe"]) &&		
    isset($_POST["maile"]) &&	
        isset($_POST["sujetRe"]) &&
		isset($_POST["messageRe"]) 
        
    ) {
        if (
          
			!empty($_POST['nomRe']) &&
            !empty($_POST["maile"]) && 
			!empty($_POST["sujetRe"]) && 
            !empty($_POST["messageRe"]) 
            
        ) {
            $message = new message(
              $_POST['nomRe'],
              $_POST['maile'],
              $_POST['sujetRe'],
              $_POST['messageRe']
              
            );
            $messageController->ajoutermessage($message);
            

            
        }
        else
            $error11 = "Missing information";
          //  var_dump($error);
            echo $error11;
    }
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Contact</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Contact.css" media="screen">

    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.8.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/277407930_493856805544939_7371162813423727908_n.png",
		"sameAs": []
}</script>


    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Contact">
    <meta property="og:type" content="website">
    
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-8fd7"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="." class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
          <img src="images/277407930_493856805544939_7371162813423727908_n.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.html" style="padding: 44px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 44px 20px;">Offers</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 44px 20px;">Contact</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Offers</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <a href="https://nicepage.com/c/contact-form-html-templates" class="u-border-2 u-border-black u-btn u-btn-round u-button-style u-hover-black u-none u-radius-50 u-text-hover-white u-btn-1">login</a><!--shopping_cart-->
        <a class="u-shopping-cart u-shopping-cart-1" href="#"><span class="u-icon u-shopping-cart-icon"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c8ab"></use></svg><svg class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-c8ab"><path d="M14.5,3l-2.1,5H6.1L5.9,7.6L4,3H14.5 M0,0v1h2.1L5,8l-2,4h11v-1H4.6l1-2H13l3-7H3.6L2.8,0H0z M12.5,13
	c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5S13.3,13,12.5,13L12.5,13z M4.5,13C3.7,13,3,13.7,3,14.5S3.7,16,4.5,16
	S6,15.3,6,14.5S5.3,13,4.5,13L4.5,13z"></path></svg>
        <span class="u-black u-icon-circle u-shopping-cart-count" style="font-size: 0.75rem;"><!--shopping_cart_count-->2<!--/shopping_cart_count--></span>
    </span>
        </a><!--/shopping_cart-->
      </div></header> 
      <section class="u-clearfix u-section-1" id="sec-bba5">
        <div class="u-clearfix u-sheet u-sheet-1">
          <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
              <div class="u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-1">
                  
                 <center> <img src="images/m.jpg" alt="Logo Esprit"
                  height="200" width="200"></center>
<center> <font size="5">
<dl>
<strong>Phone</strong><br>
Monday -Friday: 8h - 18h <br>
Saturday -Sunday: 9h - 17h<br>


<strong>Chat with an agent:</strong><br>
Monday -Friday: 8h - 17.30h<br>
Saturday -Sunday: 9h - 16.30h<br>

holidays
9h - 16.30h
</dl>
</font> <br><br></center> 
                </div>
              </div>
              <div class="u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-2">
                  <center> <img src="images/l.png" alt="Logo Esprit"
                    height="200" width="200"></center>
                    <br>
            <center> <font size="5"><strong>Chat with us</strong></font></center> 
            <center> <font size="6"></font>You can get an answer to frequently asked questions by chatting with our virtual assistant <br>by Email to E.wear@gmail.com, available 24/7.<br>
                
              During the detailed opening hours, he can also redirect you to one of our agents if you need additional help.
            </center>
                </div>
              </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2"> 
                
                <center><img src="images/k.png" alt="Logo Esprit"
                height="200" width="200"></center>
                <br>
            <center> <font size="5"><strong> Call us</strong> </font></center>
                    <center><br>Here is the fastest way to reach us<br>
                    +216 70 310 310 (free number)</center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="u-clearfix u-palette-5-dark-1 u-section-1" id="sec-6473">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
      <div class="col-lg-4">
          <div class="contact-info">
             <!-- <form name="c" onsubmit="return validateForm(event)" action=""
method="post">
              </h3>
              <br>
              <center> <font size="7" class="error">Complaint request</font> <br><br></center>
              
                <div class="form-group">
                <center></center><center><input type="text" class="form-control" name="idRec" placeholder="id de reclamation" hidden style="color: black;" > </center>
                <center><p id="erroridR" class="error" hidden style="color:#FFFF00"></p>
              </div>
            
              <div class="form-group">
                <center>Nom:</center><center><input type="text" class="form-control" name="nomR" id="nomR"placeholder="votre nom" style="color: black;"></center>
              <center><p id="errorNR" class="error" style="color:#FFFF00"></p></center>
              </div>
              <center>Prénom</center><center><div class="form-group"><input type="text" class="form-control" name="prenomR"id="prenomR"placeholder="votre prénom" style="color: black;"></center>
                <center><p id="errorPR" class="error" style="color:#FFFF00"></p></div></center>
             

              <center> Adresse E-mail:</center><center><div class="form-group"><input type="email" class="form-control" name="mail" id="mail"placeholder="votre adresse email" style="color: black;"></center>
                <center><p id="errorMR" class="error" style="color:#FFFF00"></p></div></center>
              <center> Confirmation de adresse E-mail: </center><center><div class="form-group"><input type="email" class="form-control" name="Cmail"placeholder="confirmer adresse email" style="color: black;"
              onblur="VerifEmail()" onkeyup="VerifEmail()"></center>
              <center><p id="errorCR" class="error" style="color:#FFFF00"></p></div></center>
              <div class="form-group">
                <center> réclamation:</center><center><textarea name="Rec" id="Rec" rows="5"placeholder="votre réclamation" style="color: black;"></textarea></center>
                <center><p id="errorR" class="error" style="color:#FFFF00"></p></center></div>
              <center><input  class="u-border-2 u-border-black u-btn u-btn-round u-button-style u-hover-black u-white u-radius-50 u-text-hover-white u-btn-1" type="submit" value="Send" >
              <input class="u-border-2 u-border-black u-btn u-btn-round u-button-style u-hover-black u-white u-radius-50 u-text-hover-white u-btn-1" type="reset" value="Reset"/></center>
              </form>
              !-->
              <div id="error">
            <?php echo $error1; ?>
        </div>
        Complaint request
        <form id="c" action="contact.php" method="POST">
          
            <table border="0" align="center">
               
				<tr>
                    <td>
                        <label for="nomR">Nom:
                        </label>
                    </td>
                    <td>
                      <input type="text" name="nomR" id="nomR" maxlength="20"  style="color: black;">
                      <p style="color: red;" id="error_first"></p>
                  </td>
                </tr>
                <tr>
                    <td>
                        <label for="prenomR">prenom:
                        </label>
                    </td>
                    <td>
                      <input type="text" name="prenomR" id="prenomR" maxlength="20" style="color: black;">
                      <p style="color: red;" id="error_last"></p>
                    </td>
                </tr>
                <td>
                        <label for="mail">mail:
                        </label>
                    </td>
                    <td>
                      <input type="text" name="mail" id="mail" maxlength="20" style="color: black;">
                      <p style="color: red;" id="error_mail"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cmail">Confirmation d'Email:
                        </label>
                    </td>
                    <td>
                      <input type="text" name="cmail" id="cmail" maxlength="20" style="color: black;">
                      <p style="color: red;" id="error_cmail"></p>
                    </td>
                </tr>
                <td>
                        <label for="rec">reclamation:
                        </label>
                    </td>
                    <td>
                      <textarea type="text" name="rec" id="rec" rows="5" style="color: black;"></textarea>
                      <p style="color: red;" id="error_rec"></p>
                    </td>
                </tr>            
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" href="contact.php" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
          </div>
      </div>
      <script type="text/javascript" src="OFFRE.js"></script>
      </section>
      <hr>
      <section class="u-clearfix u-palette-5-dark-1 u-section-1" id="sec-6473">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
      <div class="col-lg-4">
          <div class="contact-info">
              <!--<form name="M" onsubmit="return validateForme(event)" action=""
              method="post">
                  <br>
                  <center> <font size="7" class="error">Contact us</font> <br><br></center>
                      <div class="form-group">
                        <center> Nom:</center><center><input type="text" class="form-control" name="nomRe" placeholder="votre nom" style="color: black;" ></center>
                        <center><p id="errorNRe" class="error" style="color:#FFFF00"></p></center>
                      </div>
                      <div class="form-group">
                        <center>Adresse E-mail:</center> <center> <input type="email" class="form-control" name="maile" placeholder="votre adresse email" style="color: black;"></center>
                        <center><p id="errorMRe" class="error" style="color:#FFFF00"></p></center>
                      </div>
                  
                  <div class="form-group">
                    <center>Sujet:</center><center><input type="text" class="form-control" name="sujetRe" style="color: black;" ></center>
                    <center><p id="errorEP" class="error" style="color:#FFFF00"></p></center>
                  </div>
                  <div class="form-group">
                    <center>Message: </center><center><textarea name="messageRe" class="form-control" rows="5" Placeholder="Message" style="color: black;"></textarea></center>
                    <center><p id="errorER" class="error" style="color:#FFFF00"></p></center>
                  </div>
                  <center><input class="u-border-2 u-border-black u-btn u-btn-round u-button-style u-hover-black u-white u-radius-50 u-text-hover-white u-btn-1" type="submit" value="Send Message"></center>
              </form>!-->
              <div id="error11">
            <?php echo $error11; ?>
        </div>
        Contact us
        <form id="c" action="contact.php" method="POST">
            <table border="0" align="center">
               
				<tr>
                    <td>
                        <label for="nomRe">Nom:
                        </label>
                    </td>
                    <td>
                      <input type="text" name="nomRe" id="nomRe" maxlength="20" style=" color: black;">
                      <p style="color: red;" id="error_laste"></p>
                  </td>
                </tr>
                <tr>
                    <td>
                        <label for="maile">Email:
                        </label>
                    </td>
                    <td>
                      <input type="text" name="maile" id="maile" maxlength="20" style="color: black;">
                      <p style="color: red;" id="error_maile"></p>
                    </td>
                </tr>
                <td>
                        <label for="sujetRe">sujet:
                        </label>
                    </td>
                    <td>
                      <input type="text" name="sujetRe" id="sujetRe" maxlength="20" style="color: black;">
                      <p style="color: red;" id="error_s"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="messageRe">message:
                        </label>
                    </td>
                    <td>
                      <input type="text" name="messageRe" id="messageRe" maxlength="20" style="color: black;">
                      <p style="color: red;" id="error_mess"></p>
                    </td>
                </tr>           
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" href="contact.php" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
          </div>
      </div>
      <script type="text/javascript" src="OFFRE.js"></script>
      </section>
     
    
    <footer class="u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-4c85"><div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-100 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-size-28 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1"><!--position-->
                  <div data-position="" class="u-position"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text u-text-1"><!--block_header_content-->about us<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text"><!--block_content_content-->
                          <br>Block content. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. <!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-12 u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2"><!--position-->
                  <div data-position="" class="u-position u-position-2"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text u-text-3"><!--block_header_content--> Our Official Brands<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text"><!--block_content_content-->
                          <br>gucci<br>zara<br>h&amp;m<br>pull &amp; bear<br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br><!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-valign-top u-container-layout-3"><!--position-->
                  <div data-position="" class="u-position u-position-3"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text u-text-5"><!--block_header_content-->
                          <span style="font-weight: 700;"></span>Quick Links<!--/block_header_content-->
                        </h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text"><!--block_content_content-->
                          <br>Contact Us<br>Contribute<br>Privacy Policy<br>
                          <br><!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-social-icons u-spacing-20 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-file-icon u-icon u-social-facebook u-social-icon u-icon-1"><img src="images/145802.png" alt=""></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-file-icon u-icon u-social-icon u-social-twitter u-icon-2"><img src="images/145812.png" alt=""></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fd86"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-fd86"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" data-type="YouTube" title="YouTube" href=""><span class="u-icon u-social-icon u-social-youtube u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d23b"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d23b"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M74.9,33.3H37.3c-7.4,0-13.4,6-13.4,13.4v18.8c0,7.4,6,13.4,13.4,13.4h37.6c7.4,0,13.4-6,13.4-13.4V46.7 C88.3,39.3,82.3,33.3,74.9,33.3L74.9,33.3z M65.9,57l-17.6,8.4c-0.5,0.2-1-0.1-1-0.6V47.5c0-0.5,0.6-0.9,1-0.6l17.6,8.9 C66.4,56,66.4,56.8,65.9,57L65.9,57z"></path></svg></span>
          </a>
        </div>
        <p class="u-text u-text-7">
          <span style="font-size: 1.25rem;"> Copyright &amp;copy; 2022 All Rights Reserved by</span>&nbsp;<span style="font-size: 1.25rem;"> e-wear</span>&nbsp;&nbsp;
        </p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>
</html>