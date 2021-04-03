

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-regrowth</title>
</head>
<body>
  <form action ="../traitement/ajout-articles.php<?php if(isset($_POST['publier'])){ ?>?titre=<?= $_POST['titre'] ;?>&image=<?= $_FILES['image'] ;?>&contenu=<?= $_POST['contenu'] ;?><?php } ?>" type='POST' enctype= 'multipart/form-data'>
  <input name='titre' type='text' placeholder="Titre de l'article" />
  <input name='image' type='file'>
  <textarea name='contenu' placeholder='Ecrivez ici'></textarea>
  <input name='publier' type='submit' value='publier'/>
  </form>  
</body>
</html>