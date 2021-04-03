<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
    <title>Contact</title>
</head>
<body>
<?php
    require('./vues/header.php')
    ?>
    <section id='contact'>
        <div class='vertical-line'>
            <h2 id='vertical-line-h2'> Vous souhaitez nous contacter ?</h2>
            <h1 id='vertical-line-h1'> Laissez-nous un message ici ! :)</h1>
        </div>

        <div id='formulaire'>

            <form action='#contact' method='post'>
            <div class="app-form-group">
                    <input type='text' name='prenom' required>
                    <label>Votre prénom</label>
                </div>
                <div class="app-form-group">
                    <input type='text' name='nom' required>
                    <label>Votre nom</label>
                </div>
                <div class="app-form-group">
                    <input type='email' name='mail' required>
                    <label>Votre adresse e-mail</label>
                </div>
                <div class="app-form-group">
                    <textarea name='texte' required></textarea>
                    <label>Votre message</label>
                </div>
                    <input type='submit' name='envoyer' required>
                </div>
            </form>
        </div>
    </section>

<?php
    require('./vues/footer.php')
    ?>
</body>

    <script src="gsap-public/minified/gsap.min.js"></script>
    <script src="gsap-public/minified/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="js/script_contact.js"></script>
</html>