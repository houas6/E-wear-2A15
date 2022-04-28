
<?php
    include_once '../../config.php';
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
            $controller = new OfferController();

if (
    isset($_POST['tri']) && isset($_POST['action']) && ($_POST['action'] == 'sort')
    ) {
            $tri = $_POST['tri'];

            $result = $controller->getOffersSorted($tri);
        }
else {
  $result = $controller->getOffers();
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
      <th>
        <form method="post">
      <input type="hidden" value="sort" name="action" />
      <input type="hidden" value="id" name="tri" />
      <button>id</button>
    </form>
    </th>

      <th>
        <form method="post">
      <input type="hidden" value="sort" name="action" />
      <input type="hidden" value="description" name="tri" />
      <button>description</button>
    </form>
    </th>

      <th>
        <form method="post">
      <input type="hidden" value="sort" name="action" />
      <input type="hidden" value="pourcentage" name="tri" />
      <button>pourcentage</button>
    </form>
    </th>

      <th>
        <form method="post">
      <input type="hidden" value="sort" name="action" />
      <input type="hidden" value="dateDebut" name="tri" />
      <button>date debut</button>
    </form>
    </th>

      <th>
        <form method="post">
      <input type="hidden" value="sort" name="action" />
      <input type="hidden" value="dateFin" name="tri" />
      <button>date fin</button>
    </form>
    </th>


      <th>update</th>
      <th>delete</th>
    </tr>
  </thead>
  <tbody>

  <?php

  
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

