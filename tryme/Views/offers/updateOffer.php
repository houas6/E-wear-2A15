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

<?php

if (!isset($_POST['id'])) {
    die('nothin');
}


$id  = $_POST['id'];
$controller = new OfferController();
$offer =  $controller->getOffer($id);


if (
    !isset($_POST['id'])
    ||!isset($_POST['description'])
    || !isset($_POST['dateDebut'])
    || !isset($_POST['dateFin'])
    || !isset($_POST['pourcentage'])
    ) {
    }  else {

      
      $offer = new Offer();
      $offer->setId($_POST['id']);
      $offer->setDescription($_POST['description']);
      $offer->setDateDebut($_POST['dateDebut']);
      $offer->setDateFin($_POST['dateFin']);
      $offer->setPourcentage($_POST['pourcentage']);
      
      
      $controller = new OfferController();
      
      $controller->updateOffer($offer);
      
      header('Location: getOffers.php');
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
        <h1 class="text-center text-[#cd5c5c] text-5xl fancy">Nos offres</h1>

        <div class="grid max-w-lg mx-auto gap-4 text-black py-4">
        <input name="id" value="<?=$offer['ID']?>" type="hidden"  />
          
        <div class="grid">
            <label for="description" class="text-gray-800"> Description </label>
            <input
              type="text"
              id="description"
              name="description"
              value="<?=$offer['description']?>"
              class="resize-none rounded border border-gray-800 p-1 "
              >
            </div>
            
            <div class="grid gap-1">
                <label for="pourcentage" class="text-gray-800"> Pourcentage </label>
                <input
                value="<?=$offer['pourcentage']?>"
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
            value="<?= $offer['dateDebut'] ?>"
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
            value="<?=$offer['dateFin']?>"
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
