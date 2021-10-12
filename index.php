<?php 

require_once 'databases/db_connect.php';
$personnages = $db->getPersonnage();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Vitrine</title>
    
    <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
   
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    
    
</head>

<body class="home">
 <header class="header">
    <nav class="navbar navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Site Vitrine</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Site Vitrine</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
          </li>
          
        </ul>
        
      </div>
    </div>
  </div>
</nav>
</header>
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" id="home">

            <div class="text-white">
                <h2 >ici vous allez decouvrir quelques personnages importants de l'histoire de numerique  </h2> <br><br>
                <div class="d-grid gap-2 col-6 mx-auto">
                <a class="btn btn-primary" href="#decouvrer">Decouvrez</a> 
                </div>
            </div>
        </div>
  <div  class="row row-cols-1 row-cols-md-4 g-3  " id="decouvrer">
<?php foreach($personnages as $personnage): ?>
  <div class="col">
 
    <div class="card h-100">
    
    <a href="detail.php?personnageId=<?php echo ( $personnage['personnageId'] )?>" >
    <img class="rounded-circle " src="images\<?= $personnage['nom_image'] ?>" alt="" width="150" height="200"> 
    </a>  
    <div class="card-body">
      <h2 class="card-title "><?= $personnage['nom_complet'] ?></h2>
       
      </div>
    </div>
  
  </div>
  <?php endforeach ?>
</div>


  


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.2/umd/popper.min.js" integrity="sha512-Jen3K+iRN4thSYDEyHwUGYFxNslAUCTV9P/g0k836eaoq/tplAUCzRPUyDxKUjBlKdJhamW7S3u7NWSGEEdIQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>


</body>
<footer>
  
 Made by DIAKALIA & AISSATA 
 <p>Copyright 2021</p>

</footer>
</html>