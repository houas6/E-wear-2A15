
<?php
    include_once '../../config.php';
    include_once '../../Model/game.php';
    include_once '../../Controller/game.php';




if (
    isset($_POST['id'])  &&  isset($_POST['action'])
    ) {

        if ($_POST['action'] == 'delete'){

            $id  = $_POST['id'];
            $controller = new GameController();
            $controller->deletegame($id);
        }
    }
            $controller = new GameController();


            
if (
    isset($_POST['by']) && isset($_POST['action']) && ($_POST['action'] == 'sort')
    ) {
            $by = $_POST['by'];

            $result = $controller->getOffersSorted($by);
        }
else {
  $result = $controller->getGames();
}

$data =   [];
    while($ligne=$result->fetch()){
      array_push($data, $ligne);
    }




if (
  isset($_POST['action']) && ($_POST['action'] == 'pick')
  ) {

    
    $winner =  $data[rand(0, count($data)-1)];  
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

  
  <div class="grid grid-cols-2 h-screen items-center">
      <div class="h-full bg-[#e7f1f4]">
        <img src="E-wear.png" class="h-full object-contain" />
      </div>

  
      <div>

      
          <?php
            if  (isset($winner))  {
              echo  "<div class='p-10'>
              <h1 class='font-bold text-3xl w-full p-4 bg-indigo-200 text-indigo-500 border-4 border-indigo-500 rounded-md'>and the winner is ".$winner['email']."</h1>
              </div>";
            }
          ?>
        

      
        
      <div class="w-full text-center pt-10">

<a  href="creategame.php"  class="text-red-400" target="_blank">Create Game</a>
</div>

  
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
      <button>code</button>
    </form>
    </th>

      <th>
        <form method="post">
      <input type="hidden" value="sort" name="action" />
      <input type="hidden" value="email" name="by" />
      <button>email</button>
    </form>
    </th>

      


      <th>update</th>
      <th>delete</th>
    </tr>
  </thead>
  <tbody>

  <?php

  
foreach ($data as &$ligne){

    echo "
    <tr>
    <td>".$ligne["ID"]."</td>
    <td>".$ligne["Description"]."</td>
    <td>".$ligne["code"]."</td>
    <td>".$ligne["email"]."</td>

    <td  class='text-red-500'><form method='post' action='updategame.php'>
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


<div>
<form  method="post"  class="flex  p-1">
      <input type="hidden" value="pick" name="action" />
        <button class="py-1 px-3 ml-auto bg-red-500  text-white rounded-md  ">
          winner
        </button>
      </form>
</div>


</div>

</div>
<div class="py-10">
      <h1 class="text-5xl font-medium text-center py-10 fancy">Gallery</h1>

      <div class="grid grid-cols-3 gap-10 px-40">
        <img class="grayscale object-cover h-full" src="1.jpg" alt="" />
        <img class="grayscale object-cover h-full" src="2.jpg" alt="" />
        <img class="grayscale object-cover h-full" src="3.avif" alt="" />
        <img class="grayscale object-cover h-full" src="4.webp" alt="" />

        <img class="grayscale object-cover h-full" src="5.webp" alt="" />
        <img class="grayscale object-cover h-full" src="6.jpg" alt="" />
      </div>
    </div>

    <footer
      class="bg-black text-white text-lg font-serif text-center py-3"
    ></footer>
    <script src="main.js"></script>

</body>
</html>