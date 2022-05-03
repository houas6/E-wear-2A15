<?php
    include_once '../../config.php';
    include_once '../../Model/Offer.php';
    include_once '../../Controller/Offer.php';

if (
    !isset($_POST['description'])
    || !isset($_POST['dateDebut'])
    || !isset($_POST['dateFin'])
    || !isset($_POST['pourcentage'])
    ) {
    }  else {

      
      $offer = new Offer();
      $offer->setDescription($_POST['description']);
      $offer->setDateDebut($_POST['dateDebut']);
      $offer->setDateFin($_POST['dateFin']);
      $offer->setPourcentage($_POST['pourcentage']);
      
      
      $controller = new OfferController();
      
      $controller->addOffer($offer);
      
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
        <h1 class="text-center text-[#cd5c5c] text-5xl fancy">Nos offres</h1>

        
        <div class="w-full text-center pt-10">

          <a  href="getOffers.php"  class="text-blue-400" target="_blank">Offers list</a>
        </div>



        <div class="grid max-w-lg mx-auto gap-4 text-black py-4">
          <div class="grid">
            <label for="description" class="text-gray-800"> Description </label>
            <input
              type="text"
              id="description"
              name="description"
              class="resize-none rounded border border-gray-800 p-1 "
            >
          </div>

          <div class="grid gap-1">
            <label for="pourcentage" class="text-gray-800"> Pourcentage </label>
            <input
              type="number"
              name="pourcentage"
              id="pourcentage"
              class="rounded border border-gray-800 p-1"
            />
          </div>

          <div class="grid gap-1">
            <label for="startDate" class="text-gray-800"> Date debut </label>
            <input
              type="date"
              id="startDate"
              name="dateDebut"
              class="rounded border border-gray-800 p-1"
            />
          </div>

          <div class="grid gap-1">
            <label for="endDate" class="text-gray-800"> date fin </label>
            <input
              type="date"
              id="endDate"
              name="dateFin"
              class="rounded border border-gray-800 p-1"
            />
          </div>
          <div id="error" class="text-red-500"></div>

          <div class="flex items-center justify-end mt-10 gap-x-4">
          <button
              type="reset"
              class="border border-red-500 text-red-500 duration-200 py-2 px-3 rounded"
            >
              Cancel
            </button>  
          <button
              type="submit"
              class="text-white bg-red-500 hover:bg-red-400 duration-200 py-2 px-3 rounded"
            >
              Create
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
