<?php

require("../config/bd.php");

$contenu = htmlspecialchars($_GET['contenu']);
$titre = htmlspecialchars($_GET['titre']);
$image = htmlspecialchars($_GET['image']);


$req = $pdo->prepare("INSERT INTO articles(titre, contenu, image) VALUES( ?, ?, ?)");
$req->execute(array($titre, $contenu, $image));

header("Location: /p_tut/admin/ajout-articles.php");


?>

