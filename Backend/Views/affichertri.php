<?php
      include_once '../controller/reclamationC.php';
    $reclamationC=new reclamationC();
    $Liste=$reclamationC->affichertri();
    $bdd=new PDO('mysql:host=localhost;dbname=projet', 'root', '',);
$Liste = $bdd->query('SELECT * FROM recc ORDER BY nomR');
if (isset ($_GET['s']) AND !empty($_GET['s'])){
    $recherche =	htmlspecialchars($_GET['s']);
  $Liste = $bdd->query('SELECT * FROM recc WHERE nomR  LIKE "%' .$recherche .'%" '  ); 
  
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
  <!-- Left Panel -->

  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i> Espace Admin </a>
                    </li> 
                   
                <h3 class="menu-title"> ESPACE Admin</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                    <ul class="sub-menu children dropdown-menu">
                    
                        <li><i class="fa fa-table"></i><a href="table-admin.php">admin</a></li>
                        <li><i class="fa fa-table"></i><a href="table-client.php">reclamation</a></li>
                        <li><i class="fa fa-table"></i><a href="table-message.php">message</a></li>
                    </ul>
                </li></ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">
 </header>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Espace Admin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Espace reclamation</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active"> table of informations  </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">CLIENT</strong>    
                        </div>

 <div class="card-body"> <table  class="table table-striped table-bordered">
                                    <thead>
                                    <h2 class="tm-block-title">Orders List</h2>
                                    <td><a href="affichertri.php"
              class="btn btn-primary btn-block text-uppercase mb-3">sort name</a></td>
              <td><a
              href="table-client.php"
              class="btn btn-primary btn-block text-uppercase mb-3">without sort</a></td>
                        <table class="table">
                        
                     
              
                            <thead>
                                <tr>
                                    
                                    
                                    <th scope="col">idReclamation</th>
                                    <th scope="col">last name</th>
                                    <th scope="col">first name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">reclamation</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($Liste as $reclamationC){
                                ?>
                                <tr>
                                    
                                    
                                    <td><b><?php echo $reclamationC['idRec']?></b></td>
                                    <td><b><?php echo $reclamationC['nomR']?></b></td>
                                    <td><b><?php echo $reclamationC['prenomR']?></b></td>
                                    <td><b><?php echo $reclamationC['mail']?></b></td>
                                    <td><b><?php echo $reclamationC['rec']?></b></td>
                                    <td><a href="deleterec.php?rep=<?php echo $reclamationC['idRec'] ?>"><button type="button" class="btn btn-outline-danger">delete</button></a></td>
                                    <td><a href="updatee.php?idRec=<?php echo $reclamationC['idRec'] ?>"><button type="button" class="btn btn-outline-danger">update</button></a></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                        </table>
                        <table>
                        <form method="GET">
                <input type="search" name="s" placeholder="search with name" >
                <td> <input class="btn btn-primary btn-block text-uppercase" type="submit" name="search" ></td>
                 </form>
                                </table>
                  <section > 
                    <?PHP if($Liste->rowCount()>0)
                   { while($reclamationC =$Liste ->fetch()) {
                      ?> 
                      <?PHP 
                    }}else { 
                      ?>
                       <p>aucune nom trouvé </p> <?PHP } ?> 
                      </section>
                                                  

                                         
                                           

                                        </tr>
                                       
                                    </tbody>
                                    
                                </table>
                
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
       <!-- <div>
            <button type="button" class="btn btn-primary btn-lg" style="margin-top:3%;margin-left:5%;border-radius: 5%;">
                <a href="ajoutclient.php">Ajouter</a>
            </button>
          </div>-->

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                                                <!--
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">CARTE Fidélité</strong>
                            </div>
                            <div class="card-body">                          <table  class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id Client</th>
                                            <th>Num_carte</th>
                                            <th>Point_Fidélité</th>
                                            <th>Date_Expiration</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1236589</td>
                                            <td>895623</td>
                                            <td>123.000</td>
                                            <td>20/9/2023</td>
                                            
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                                        -->
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>



