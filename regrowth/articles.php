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


    ?>

<section id="articles">
<?php

$req_articles = $pdo->query("SELECT * FROM articles ORDER BY id DESC");

while($a = $req_articles->fetch()){
    $image = $a['image'];
    $titre = $a['titre'];
    $id = $a['id'];
    $contenu = $a['contenu'];
    echo "<a href='./template-article.php?id=$id'>";
    echo "<div class='article'>";
    echo "<h2 class='titre_article'>$titre</h2>";
    echo "<div class='article_texte'>";
    echo "<img class='image_article' src='./images/$image'/>";
    
    echo "<p>$contenu</p>";
    //echo "<a href ='./template-article.php?id=$id'/><button class='btn-article'>Voir l'article</button></a>";
    echo "</div>";
    echo "</div>";
    echo "</a>";
}
?>
</section>

<?php
    require('./vues/footer.php')
    ?>
</body>
</html>