<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/admin.css" rel="stylesheet">
    <title>Admin-regrowth</title>
</head>

<?php
require("../config/bd.php");

?>
<h1 class='titre-messages'> Messages reçus </h1>
<?php
$req_messages = $pdo->query("SELECT * FROM contact ORDER BY id DESC");

while($m = $req_messages->fetch()){

    $idMessage = $m['id'];
    $prenom = $m['prenom'];
    $nom = $m['nom'];
    $mail = $m['mail'];
    $message = $m['message'];
    echo "<p class='numero-message'>Message numero : $idMessage</p>";
    echo "<div class='message'>";
    echo "<h4 class='titre-message'>$prenom $nom</h2>";
  
    echo "<h4 class='mail-message'>$mail</h4>";
    echo "<p class='contenu-message'>$message</p>";
    echo "</div>";
}

?>

