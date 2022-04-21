
<?php
include_once '../../Model/Offer.php';
include_once '../../Controller/Offer.php';





if (
    isset($_POST['id'])  &&  isset($_POST['action'])
    ) {

        if ($_POST['action'] == 'delete'){

            $id  = $_POST['id'];
            $controller = new OfferController();
            $controller->deleteOffers($id);
        }
    }
    






?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      .error {
        color: red;
      }
    </style>
    <script type="text/javascript" src="OFFRE.js"></script>
    <script src="tw.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Beau+Rivage&display=swap"
      rel="stylesheet"
    />
    <script src="main.js"></script>

    <style>
      .fancy {
        font-family: "Beau Rivage", cursive;
      }
    </style>
  </head>
  <body>

  
<table class="table-auto  w-full  text-center">
  <thead>
    <tr>
      <th>id</th>
      <th>description</th>
      <th>pourcentage</th>
      <th>date debut</th>
      <th>date fin</th>
      <th>update</th>
      <th>delete</th>
    </tr>
  </thead>
  <tbody>

  <?php

  
$controller = new OfferController();

$result = $controller->getOffers();

while($ligne=$result->fetch()){
    echo "
    <tr>
    <td>".$ligne["ID"]."</td>
    <td>".$ligne["description"]."</td>
    <td>".$ligne["pourcentage"]."</td>
    <td>".$ligne["dateDebut"]."</td>
    <td>".$ligne["dateFin"]."</td>
    <td  class='text-blue-500'><form method='post' action='updateOffer.php'>
    <input type='hidden' name='id' value='".$ligne["ID"]."' /> 
    <input type='submit' value='update' /> 
    </form></td>

    <td  class='text-red-500'><form method='post' >
    <input type='hidden' name='id' value='".$ligne["ID"]."' /> 
    <input type='hidden' name='action' value='delete' /> 
    <input type='submit' value='delete' /> 
    </form></td>
  </tr>
    ";
}

  ?>

  </tbody>
</table>

</body>
</html>