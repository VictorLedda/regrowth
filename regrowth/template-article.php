<?php
require("./config/bd.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php
    require('./vues/header.php');

    echo "<section class='tmp_article'>";
    $req_article = $pdo->prepare("SELECT * FROM articles WHERE id = ? ");
    $req_article->execute(array($_GET['id']));
    $article = $req_article-> fetch();

    $image = $article['image'];
    $contenu = $article['contenu'];
    $titre = $article['titre'];
    echo "<img class='image-tpm-article' src='./images/$image'/>";
    echo "<div class='espace-article'>";
        
        echo "<h2 class='tpm-titre-article'>$titre</h2>";
        echo "<p>$contenu</p>";
        echo "</div>";
        
    echo "</section>";
    ?>

    <section class='commentaire'>
        <h3 class='titre_commentaire'>Commentaires</h3>
        <form class='formulaire-commentaire' name='commentaires' action="traitement/commentaires.php?idArticle=<?= $_GET['id'] ?>" method='GET'>
            <div class="app-form-group">
                    <input type='text' name='prenom' required>
                    <label>Votre prénom</label>
            </div>
            <div class="app-form-group">
                    <textarea name='texte' required></textarea>
                    <label>Votre commentaire</label>
            </div>
            <input type='submit' name='envoyer' value='Ajouter' />
        </form>
    </section>

    <section class='tous-les-commentaires'>
        <?php

$req_commentaires = $pdo->prepare("SELECT * FROM commentaires WHERE idArticle = ?");
$req_commentaires->execute(array($_GET['id']));

while($c = $req_commentaires->fetch()){
    $prenom = $c['prenom'];
    $texte  =$c['texte'];
    echo "<div class='com'>";
    echo "<h4>$prenom</h4>";
    echo "<p>$texte</p>";
    echo "</div>";
}

?>
    </section>

    <?php require('./vues/footer.php'); ?>
</body>

</html>