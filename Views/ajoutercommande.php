<?php
    include_once '../Model/commande.php';
    include_once '../Controller/commandeC.php';

    

    $error = "";

    // create commande
    $commande = NULL;

    // create an instance of the controller
    $commandeC = new commandeC();
      if (
                //isset($_POST["idCom"]) &&
                isset($_POST["nom"]) &&
		        isset($_POST["telephone"]) && 
                isset($_POST["adresse"]) && 
                isset($_POST["prix"])
    ) {
        if (
                    //!empty($_POST['idCom']) &&
                    !empty($_POST['nom']) &&
			        !empty($_POST["telephone"]) && 
                    !empty($_POST["adresse"]) && 
                    !empty($_POST["prix"])
        ) {
            $commande = new commande(
                        //$_POST['idCom'],
                        $_POST['nom'],
				        $_POST['telephone'],
                        $_POST["adresse"],
                        $_POST['prix']
            );
            $commandeC->ajoutercommande($commande);
            header('Location:affichercommande.php');
        }
        else
            $error = "Missing information";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="script.js">
        
    </script>
    <title>Ajouter une commande</title>
</head>
<body>
   
   <button><a href="affichercommande.php">Retour à la liste des commandes</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
    <h1>Ajouter une commande</h1>
    <form name="commande"  action=""  method="POST">
        <table border="1" align="center">
            
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" id="nom"></td>
            </tr>
            
            <tr>
                <td>Telephone</td>
                <td><input type="number" name="telephone" id="telephone"></td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td><input type="text" name="adresse" id="adresse"></td>
            </tr>

            <tr>
                <td>Prix</td>
                <td><input type="number" name="prix" id="prix"></td>
            </tr>
            
            <tr>
                
                <td><input type="submit" name="Ajouter" value="Passer la commande">
                </td>
                <td>
                        <input type="reset" value="Annuler" >
                    </td>
            </tr>
            
        </table>
    </form>
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
</body>
</html>

		 