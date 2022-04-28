
<?php
    include_once '../../config.php';
    include_once '../../Model/game.php';
    include_once '../../Controller/game.php';




if (
    isset($_POST['id'])  &&  isset($_POST['action'])
    ) {

        if ($_POST['action'] == 'delete'){

            $id  = $_POST['id'];
            $controller = new gameController();
            $controller->deletegame($id);
        }
    }
            $controller = new gameController();

if (
    isset($_POST['by']) && isset($_POST['action']) && ($_POST['action'] == 'sort')
    ) {
            $by = $_POST['by'];

            $result = $controller->getOffersSorted($by);
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
      <input type="hidden" value="id" name="by" />
      <button>id</button>
    </form>
    </th>

      <th>
        <form method="post">
      <input type="hidden" value="sort" name="action" />
      <input type="hidden" value="description" name="by" />
      <button>description</button>
    </form>
    </th>

      <th>
        <form method="post">
      <input type="hidden" value="sort" name="action" />
      <input type="hidden" value="code" name="by" />
      <button>pourcentage</button>
    </form>
    </th>

      <th>
        <form method="post">
      <input type="hidden" value="sort" name="action" />
      <input type="hidden" value="email" name="by" />
      <button>date debut</button>
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
    <td>".$ligne["code"]."</td>
    <td>".$ligne["email"]."</td>

    <td  class='text-blue-500'><form method='post' action='updategame.php'>
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