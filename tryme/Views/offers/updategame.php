<?php
include_once '../../config.php';
include_once '../../Model/game.php';
include_once '../../Controller/game.php';

if (
    !isset($_POST['id'])
    || !isset($_POST['description'])
    || !isset($_POST['code'])
    || !isset($_POST['email'])
    ) {
    }  else {

      
      $game = new Game();
      $game->setid($_POST['id']);
      $game->setDescription($_POST['description']);
      $game->setcode($_POST['code']);
      $game->setemail($_POST['email']);
      
      
      $controller = new GameController();
      
      $controller->addgame($game);
      
    }
?>

<?php

if (!isset($_POST['id'])) {
    die('nothin');
}


$id  = $_POST['id'];
$controller = new GameController();
$game =  $controller->getgame($id);



if (
    !isset($_POST['id'])
    ||!isset($_POST['Description'])
    || !isset($_POST['code'])
    || !isset($_POST['email'])
    ) {

    }  else {


      
      $game = new Game();
      $game->setId($_POST['id']);
      $game->setDescription($_POST['Description']);
      $game->setcode($_POST['code']);
      $game->setemail($_POST['email']);
      
      
      $controller = new GameController();
      
      $controller->updategame($game);
      
      header('Location: getgame.php');
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


      <form method="post"  action="<?=$_SERVER['PHP_SELF']?>">
        <h1 class="text-center text-[#cd5c5c] text-5xl fancy">our game</h1>

        <div class="grid max-w-lg mx-auto gap-4 text-black py-4">
        <input name="id" value="<?=$game['ID']?>" type="hidden"  />
          
        <div class="grid">
            <label for="id" class="text-gray-800"> id </label>
            <input
              type="number"
              id="id"
              name="id"
              value="<?=$game['ID']?>"
              class="resize-none rounded border border-gray-800 p-1 "
              >
            </div>
            
            <div class="grid gap-1">
                <label for="Description" class="text-gray-800"> Description </label>
                <input
                value="<?=$game['Description']?>"
                id="Description "
                type="text"
                name="Description"
              
              class="rounded border border-gray-800 p-1"
            />
        </div>
        
        <div class="grid gap-1">
            <label for="code" class="text-gray-800"> code </label>
            <input
            value="<?=$game['code'] ?>"
            id="code"
            type="number"
            name="code"
            class="rounded border border-gray-800 p-1"
            />
        </div>
        
        <div class="grid gap-1">
            <label for="email" class="text-gray-800"> email</label>
            <input
            type="text"
            id="email"
            name="email"
            value="<?=$game['email']?>"
            class="rounded border border-gray-800 p-1"
            />
          </div>
          <div id="error" class="text-red-500"></div>

          <div class="flex items-center justify-between mt-10">
            <button
              onclick="verify()"
              class="text-white bg-red-500 hover:bg-red-400 duration-200 py-2 px-3 rounded"
            >
              Update
            </button>
          </div>
        </div>
      </div>
    </form>

  </body>
</html>
