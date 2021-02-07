<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Nicolas MANCEAU</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<?php
// Inclusion du fichier de connexion à la base de données
include('connexion_bd.php');
?>
<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
  <!--      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a> -->
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ml-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <?php
          if(!isset($_SESSION['prenom']) && !isset($_SESSION['nom'])){
            $_SESSION['prenom'] = "";
            $_SESSION['nom'] = "";
          }

          // Gestion de la Connection
          if($_SESSION["prenom"] != "" && $_SESSION["nom"] != ""){
            echo "
            <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\">".$_SESSION["prenom"]." ".$_SESSION["nom"]."</a></li>
            <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"index.php\">Accueil</a></li>
            <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#services\">Services</a></li>
            <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#portfolio\">Avis</a></li>
            <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#about\">Mon parcours</a></li>
            <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#team\">Mes reservations</a></li>
            <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#contact\">Contact</a></li>
            <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"deconnexion/deconnexion.php\">Se déconnecter</a></li>
            ";
/*
            if ($_SERVER['PHP_SELF'] != "/nicolas.manceau/prog/index.php")
            {
              echo "<li class=\"nav-item\">
              <a class=\"nav-link\" href=\"basket.php\">
              <i class=\"fas fa-cart-plus\"></i> Panier
              </a>
              </li>";
            }
            */
          }else{
            echo "
            <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"index.php\">Accueil</a></li>
            <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#services\">Services</a></li>
            <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#portfolio\">Avis</a></li>
            <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#about\">Mon parcours</a></li>
            <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#team\">Se connecter</a></li>
            <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#contact\">Contact</a></li>
            ";
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead-->
  <header class="masthead">
    <div class="container">
      <div class="masthead-subheading">Bienvenue sur le site de Nicolas MANCEAU</div>
      <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">En savoir plus</a>
    </div>
  </header>
