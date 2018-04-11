<?php
require_once "src/functions.php";
?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/skeleton.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="shortcut icon" href="3D/TemplateData/favicon.ico">
    <link rel="stylesheet" href="3D/TemplateData/style.css">
</head>
<body>
<div class="background">
    <section class="introduction">

        <header class="header">
            <nav class="header-menu">
                <ul class="header-menuList">
                    <li class="header-menuItem concept-button"><a href="#concept">Concept</a></li>
                    <li class="header-menuItem config-button"><a href="#configuration">Configuration</a></li>
                    <li class="header-menuItem contact-button"><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        <div class="name-container">
            <div class="name-title">drag n drum</div>
            <div class="name-paragraph">Personnalisez et manipulez votre batterie en 3D temps réel, c'est DRAG N DRUM !

            </div>
            <div class="button-configuration">Configurer</div>
            <div class="arrow"><img src="assets/img/arrow.png" alt=""></div>
        </div>
    </section>
</div>

<section class="concept" id="concept">
    <div class="container">
        <div class="concept-title">Concept</div>
        <div class="row">
            <div class=" six columns concept-text">Vous êtes batteur ? Vous avez un évènement loin de chez vous ( concert, mariage, etc ... )
                Vous savez que déplacer sa batterie à 500km de chez soi n'est pas une chose évidente ( frais, taille etc ...)
                Et si vous pouviez avoir une batterie avec des configurations similaire à la votre sur le lieu de votre évènement ?
                DRAG N DRUM, avec une modélisation 3D temps réel d'une batterie va vous permettre de personnaliser et de manipuler la batterie
                qui vous correspond ! Vous aurez l'impression que la batterie est à côté de vous ! Génial non ?
                Evidemment à la suite de votre personnalisation , vous pourrez la louer et un service complet se chargera de la livraison
                et de l'installion sur le lieu de votre évènement ! Vous n'aurez plus qu'à jouer et repartir .
            </div>
            <div class="six columns concept-image"><img src="assets/img/drum-kit-3d-model-3ds-fbx-blend-dae.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="configuration" id="configuration">
    <div class="container">
        <div class="row">
            <div class="game-container nine columns" id="gameContainer"></div>

            <div class="configuration-infos three columns">
                <div class="configuration-price">00,00€</div>
                <form method="get">
                    <label class="configuration-label" for="configuration-label">Durée</label>
                    <select class="configuration-duration" id="configuration-label" name="select">
                        <option value="0">1 jour</option>
                        <option value="1">2 jours</option>
                        <option value="2">3 jours</option>
                        <option value="3">4 jours</option>
                        <option value="4">5 jours</option>
                    </select>
                    <div class="configuration-components">
                        <h3>Composants</h3>
                        <ul class="configuration-list">
                            <li class="configuration-item">Grande Caisse</li>
                            <li class="configuration-item">Grande Caisse</li>
                            <li class="configuration-item">Grande Caisse</li>
                            <li class="configuration-item">Grande Caisse</li>
                        </ul>
                    </div>

                    <div class="configuration-button"><a href="formulaire.php">Louer</a></div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="footer" id="contact">
    <div class="telephone">06.67.98.56.34</div>
    <p class="copyright">© Groupe 1</p>
</footer>


<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="3D/TemplateData/UnityProgress.js"></script>
<script src="3D/Build/UnityLoader.js"></script>
<script>
    var gameInstance = UnityLoader.instantiate("gameContainer", "3D/Build/Drum7.json", {onProgress: UnityProgress});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/16.3.5/Tween.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
