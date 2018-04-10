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
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
</head>
<body>
<div class="background">
    <section class="introduction">

        <header class="header">
            <nav class="header-menu">
                <ul class="header-menuList">
                    <li class="header-menuItem"><a href="#concept">Concept</a></li>
                    <li class="header-menuItem"><a href="#configuration">Configuration</a></li>
                    <li class="header-menuItem"><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        <div class="name-container">
            <div class="name-title">drag n drum</div>
            <div class="name-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias amet
                asperiores at consequuntur cum cumque dolor doloremque ea eum facere hic iure nam necessitatibus quaerat
                quis, recusandae reiciendis vero.
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
            <div class=" six columns concept-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab
                assumenda aut beatae consequatur dolores doloribus ducimus earum esse eum harum ipsam, itaque nam natus
                quis reprehenderit rerum tempora totam.
            </div>
            <div class="six columns concept-image"><img src="assets/img/drum-kit-3d-model-3ds-fbx-blend-dae.jpg" alt=""></div>
        </div>
    </div>
</section>

<section class="configuration" id="configuration">
    <div class="container">
        <div class="row">
            <div class="game-container nine columns" id="gameContainer"></div>

            <div class="configuration-infos three columns">
                <div class="configuration-price"><?php getPrice(); ?>€</div>
                <form method="get">
                <label class="configuration-label" for="configuration-label">Durée</label>
                <select class="configuration-duration" id="configuration-label" name="select">
                    <option value="0">1 jour</option>
                    <option value="1">2 jours</option>
                    <option value="2">3 jours</option>
                    <option value="3">4 jours</option>
                    <option value="4">5 jours</option>
                </select>
                    <input type="submit" name="submit" value="ok" />
                </form>
                <div class="configuration-components">
                    <h3>Composants</h3>
                    <ul class="configuration-list">
                        <li class="configuration-item">Grande Caisse</li>
                        <li class="configuration-item">Grande Caisse</li>
                        <li class="configuration-item">Grande Caisse</li>
                        <li class="configuration-item">Grande Caisse</li>
                        <li class="configuration-item">Grande Caisse</li>
                    </ul>
                </div>

                <div class="configuration-button">Louer</div>
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
    var gameInstance = UnityLoader.instantiate("gameContainer", "3D/Build/Drum2.json", {onProgress: UnityProgress});
</script>
<script src="assets/js/main.js"></script>
</body>
</html>
