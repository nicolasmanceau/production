<?php
// Variable de connexion à la base de données
$host_name = "localhost";
$database = "nicolas_manceau";
$user_name = "user";
$mdp = "user";

// Connection à la base de donnée
$connect = mysqli_connect($host_name, $user_name, $mdp, $database);

if(mysqli_connect_errno())
{
  echo '<p>La connexion au serveur MySQL a échoué: '.mysqli_connect_error().'</p>';
}
//  else
//  {
//    echo '<p>Connexion au serveur MySQL établie avec succès.</p>';
//  }
?>
