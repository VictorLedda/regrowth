<?php

require("../config/bd.php");

$prenom = htmlspecialchars($_GET['prenom']);
$texte = htmlspecialchars($_GET['texte']);
$idArticle = htmlspecialchars($_GET['idArticle']);



$req = $pdo->prepare("INSERT INTO commentaires(prenom, texte, idArticle) VALUES(?, ?, ?)");
$req->execute(array($prenom, $texte, $idArticle));

header("Location: /p_tut/template-article.php?id=$idArticle");

?>
