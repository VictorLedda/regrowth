<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
    <title> Regrowth </title>
</head>

<body>
    <?php
    require('./vues/header.php')
    ?>

    <section id='banner'>
        <div>
            <h1 id='titre_principal'> Regrowth </h1>
            <p id='slogan'> Percevez le monde d'une nouvelle manière.</p>
            <img src='images/flower-3093072_1920.jpg' id='lotus'>
        </div>
    </section>

    <section id='objectif' class='col-md-4 col-lg-3 item appear' data-delai='0'>
        <h2 class='col-md-4 col-lg-3 item appear' data-delai='0'> Notre objectif </h2>
        <p class='col-md-4 col-lg-3 item appear' data-delai='0'> Fruit d'un projet tutoré, Regrowth est une campagne de
            communication sur l'écologie. Son objectif est de renseigner et de sensibiliser avec la plus grande
            neutralité d'opinion afin de laisser à chacun la possibilité de l'interpréter à sa manière.</p>
    </section>

    <section id='valeurs' class='col-md-4 col-lg-3 item appear' data-delai='0'>
        <h2 class='col-md-4 col-lg-3 item appear' data-delai='0'> Nos valeurs </h2>
        <div id='nom_valeurs' class='col-md-4 col-lg-3 item appear' data-delai='0'>
            <div>
                <h3> Neutralité  </h3>
                <p> Informer nos lecteurs sans biais ni jugement de valeur des enjeux écologiques de notre époque</p>
            </div>
            <div>
                <h3> Sagesse  </h3>
                <p> Aborder chaque sujet pour qu'il soit accessible au plus grand nombre (néophyte comme spécialiste)</p>
            </div>
            <div>
                <h3> Partage  </h3>
                <p> Donner un maximum d'information pertinente pour que le lecteur ai toutes les clés en mains pour forger sa conscience écologique</p>
            </div>
        </div>
    </section>

    <section id='equipe' class='col-md-4 col-lg-3 item appear' data-delai='0'>
        <h2> Notre équipe </h2>
        <div id='membre_equipe'>
            <div id='kyllian' class='col-md-4 col-lg-3 item appear' data-delai='0'>
                <img src='images/kyllian.png'>
                <div>
                    <h3> Kyllian </h3>
                    <p> En tant que community manager Kyllian s’est investi dans la communication sur les réseaux
                        sociaux. C’est également lui qui a pour objectif de gérer les relations externes, ce qu’il a
                        d’ailleurs fait avec la réalisation des interviews.</p>
                </div>
            </div>

            <div id='victor' class='col-md-4 col-lg-3 item appear' data-delai='0'>
                <div>
                    <h3> Victor </h3>
                    <p> Victor est impliqué dans l’aspect technique du web. Il intervient en tant développeur que cela
                        soit pour réaliser l’architecture du site, gérer le back end ou encore la mise en ligne du site
                        internet. </p>
                </div>
                <img src='images/victor.png'>
            </div>

            <div id='nicolas' class='col-md-4 col-lg-3 item appear' data-delai='0'>
                <img src='images/flower-3093072_1920.jpg'>
                <div>
                    <h3> Nicolas </h3>
                    <p> Nicolas est l’infographiste du groupe. C’est lui qui est à l’origine des différentes
                        infographies que l’on peut retrouver sur les réseaux sociaux ou sur le site internet. De manière
                        générale il supervise tout ce qui a attrait au graphisme.</p>
                </div>
            </div>

            <div id='coraly' class='col-md-4 col-lg-3 item appear' data-delai='0'>
                <div>
                    <h3> Coraly </h3>
                    <p> Coraly s’est rendue indispensable dans le graphisme du site web. C’est elle qui a été chargée de
                        réaliser tout l’aspect front end en ajoutant des animations et créant un univers graphique
                        cohérant et moderne. </p>
                </div>
                <img src='images/coraly.png'>
            </div>
        </div>
    </section>


    <?php
    require('./vues/footer.php')
    ?>
</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="gsap-public/minified/gsap.min.js"></script>
<script src="gsap-public/minified/ScrollTrigger.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</html>