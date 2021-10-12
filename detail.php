<?php
$pdo = new PDO("mysql:host=localhost;dbname=numeric_history", "root", "");
$Id = $_GET['personnageId'];
$detail = $pdo->prepare("SELECT * FROM personnages WHERE personnageId=$Id ");
$detail->execute();
$data = $detail->fetch();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\detail.css">

    <title>Details</title>
</head>
<body class=body>
<header class="header">
    <nav class="navbar navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Site Vitrine</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Site Vitrine</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
          </li>
        
          
        </ul>
        
      </div>
    </div>
  </div>
</nav>
</header>
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" id="home">
    <div class="container ">
   <div ><img src="images/<?php echo $data['nom_image']; ?>" alt="" width="400" class="rounded"></div> 
    <div> <h2><?php echo $data['nom_complet'];?></h2></div> 
    <div><?php echo $data['historique'];?></div>
    </div>
    </div>
    
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.2/umd/popper.min.js" integrity="sha512-Jen3K+iRN4thSYDEyHwUGYFxNslAUCTV9P/g0k836eaoq/tplAUCzRPUyDxKUjBlKdJhamW7S3u7NWSGEEdIQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>

</body>
<footer>
 Made by DIAKALIA & AISSATA 
 <p>Copyright 2021</p>

</footer>
</html>