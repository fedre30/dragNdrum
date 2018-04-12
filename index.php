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
            <div class="name-title">drag 'n drum</div>
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
            <div class=" six columns concept-text">Vous êtes <span class="bold">batteur</span>?<br>
                Vous avez un événement loin de chez vous ( concert, mariage, etc ... ).<br>
                Vous savez que déplacer sa batterie à 500km de chez soi n'est pas une chose évidente.<br>
                Et si vous pouviez avoir une batterie avec une configuration qui dépasse la votre sur le lieu de votre
                événement?<br><br>
                <span class="bold">DRAG 'N DRUM</span> permet avec une modélisation 3D temps réel de
                personnaliser et de manipuler la batterie
                qui vous correspond.<br> Vous aurez l'impression que la batterie est à côté de vous!<br> Génial non ?
                Evidemment à la suite de votre personnalisation , vous pourrez la louer et un service complet se
                chargera de la livraison
                et de l'installation sur le lieu de votre événement!<br> Vous n'aurez plus qu'à jouer et repartir!
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
                <div class="configuration-price">-,--€</div>
                <form action="formulaire.php" method="post">

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
                        </ul>
                        <input type="hidden" name="hidden-configuration-list" class="hidden-input">
                    </div>

                    <input type="hidden" name="rendered-image" class="rendered-image">

                    <input type="submit" name="louer" value="Louer" class="configuration-button"/>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="footer" id="contact">
    <div class="container">
        <div class="back-to-top">
            <img src="assets/img/arrow.png">
            <p>Retour en haut</p>
        </div>
        <div class="row">
            <div class="six columns footer-contact">
                <h4>Nous contacter</h4>
                <div class="footer-item">
                    <img src="assets/img/call-answer.png" alt="">
                    <p>+33643987670</p>
                </div>
                <div class="footer-item">
                    <img src="assets/img/close-envelope%20(1).png" alt="">
                    <p>dragndrum@drum.com</p>
                </div>
                <div class="footer-item">
                    <img src="assets/img/icon%20(1).png" alt="">
                    <p>27 bis, rue du Progrès, Montreuil 93100</p>
                </div>

            </div>
            <div class="six columns footer-social">
                <h4>Suivez-nous</h4>
                <div class="footer-icon"><img src="assets/img/facebook-logo%20(1).png" alt=""></div>
                <div class="footer-icon"><img src="assets/img/instagram.png" alt=""></div>
                <div class="footer-icon"><img src="assets/img/twitter-logo.png" alt=""></div>
                <div class="footer-icon"><img src="assets/img/snapchat.png" alt=""></div>
            </div>
        </div>
        <p class="copyright">© Groupe 1</p>
    </div>
</footer>


<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="3D/TemplateData/UnityProgress.js"></script>
<script src="3D/Build/UnityLoader.js"></script>
<script>
    var gameInstance = UnityLoader.instantiate("gameContainer", "3D/Build/Drum25.json", {onProgress: UnityProgress});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/16.3.5/Tween.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
