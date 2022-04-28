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

      
      $game = new game();
      $game->setId($_POST['id']);
      $game->setDescription($_POST['description']);
      $game->setcode($_POST['code']);
      $game->setemail($_POST['email']);
      
      
      $controller = new gameController();
      
      $controller->addgame($game);
      
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
    <script src="tw.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Beau+Rivage&display=swap"
      rel="stylesheet"
    />

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

      <form method="post"  action="<?=$_SERVER['PHP_SELF']?>" id="create">
        <h1 class="text-center text-[#cd5c5c] text-5xl fancy">Our game  </h1>

        <div class="grid max-w-lg mx-auto gap-4 text-black py-4">
          <div class="grid">
            <label for="description" class="text-gray-800"> ID </label>
            <input
              type="text"
              id="description"
              name="description"
              class="resize-none rounded border border-gray-800 p-1 "
            >
          </div>

          <div class="grid gap-1">
            <label for="pourcentage" class="text-gray-800"> descrption </label>
            <input
              type="text"
              name="desc"
              id="desc"
              class="rounded border border-gray-800 p-1"
            />
          </div>

          <div class="grid gap-1">
            <label for="startDate" class="text-gray-800"> code </label>
            <input
              type="number"
              id="code"
              name="code"
              class="rounded border border-gray-800 p-1"
            />
          </div>

          <div class="grid gap-1">
            <label for="endDate" class="text-gray-800"> Email</label>
            <input
              type="text"
              id="email"
              name="email"
              class="rounded border border-gray-800 p-1"
            />
          </div>
          <div id="error" class="text-red-500"></div>

          <div class="flex items-center justify-between mt-10">
            <button
              type="submit"
              class="text-white bg-red-500 hover:bg-red-400 duration-200 py-2 px-3 rounded"
            >
              Envoyer
            </button>
          </div>
        </div>
      </div>
    </form>

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