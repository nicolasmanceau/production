<?php
ini_set('display_errors',1);
error_reporting( E_ALL);
$from = "nicolas.manceau@outlook.fr";
$to ="nicolas.manceau@outlook.for";
$subject = "test";
$message ="ca fonctionne";
$headers = "De:" . $from;
mail($to,$subject,$message,$headers);
echo "mail envoyé";
?>
