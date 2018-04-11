<?php
require_once './src/database.php';


include './src/header.php'; 


$sql = "SELECT nom_element FROM `elements`;";

$stmt = $conn->prepare($sql);
$stmt->execute();
?>



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
            <div class="game-container nine columns"><img src="assets/img/drum-kit-3d-model-3ds-fbx-blend-dae.jpg" alt=""></div>

            <div class="configuration-infos three columns">
                <div class="configuration-price">€99,00</div>
                <label class="configuration-label" for="configuration-label">Durée</label>
                <select class="configuration-duration" id="configuration-label">
                    <option value="0">1 jour</option>
                    <option value="1">2 jours</option>
                    <option value="2">3 jours</option>
                    <option value="3">4 jours</option>
                    <option value="4">5 jours</option>
                </select>
                <div class="configuration-components">
                    <h3>Composants</h3>
                    <ul class="configuration-list">
                        <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                        <li class="configuration-item"><?=$row["nom_element"]?></li>
                        <?php endwhile; ?>
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
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
