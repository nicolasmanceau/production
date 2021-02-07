<?php
// Démarrage de la session
session_start();

$_SESSION['nom'] = "";
$_SESSION['prenom'] = "";

// Destruction de la session
session_destroy();
header('Location: ../index.php');
?>
