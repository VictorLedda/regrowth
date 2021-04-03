<?php

require("../config/bd.php");

$prenom = htmlspecialchars($_GET['prenom']);
$nom = htmlspecialchars($_GET['nom']);
$mail = htmlspecialchars($_GET['mail']);
$message = htmlspecialchars($_GET['message']);


$req = $pdo->prepare("INSERT INTO contact(prenom, nom, mail, message) VALUES( ?, ?, ?,?)");
$req->execute(array($prenom, $nom, $message, $message));



?>

