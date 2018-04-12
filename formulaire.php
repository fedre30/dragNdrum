<?php
session_start();
require_once "src/functions.php";

require_once "src/database.php";

const DISCOUNT_POLICY=[1, 0.95, 0.9, 0.85, 0.75];

$drumSetAsJson = $_POST['hidden-configuration-list'];
$drumSet       = json_decode($drumSetAsJson, true);
$days          = $_POST['select'] + 1;

$price = 0;
foreach ($drumSet as $drumElement) {
    $price += $drumElement['element']['price'];
}
$price *= $days;
$price *= DISCOUNT_POLICY[$days-1];

$renderedImage = $_POST['rendered-image'];
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
    <link rel="stylesheet" href="assets/css/form.css">
</head>
<body>
  <div class="backgroundForm">
    <section>
      <h2 class="choose-title">Vous avez choisi</h2>
      <div class="container">
        <div class="row">
          <div class="four columns choose">
            <h3>Composants</h3>
            <ul>
                <?php foreach ($drumSet as $drumEl) { ?>
                    <li><?=$drumEl['element']['name']?> - <?=$drumEl['brand']['name']?> - <?=$drumEl['material']['name']?> - <?=$drumEl['color']['name']?> - <?=$drumEl['element']['price']?> €</li>
                <?php } ?>
            </ul>
          </div>
          <div class="four columns choose-price">
            <h3><?=floor($price)?>€</h3>
            <p>
              * prix incluant le montage et démontage de la batterie
              ainsi que la livraison
            </p>
              <p class="days"><?=$days?> jours</p>
          </div>
            <div class="four columns"><img src="data:image/jpeg;base64,<?=$renderedImage?>"/></div>
        </div>
    </div>
  </section>

  <section>
    <form action="./src/rent.php" method="post">
        <input type="hidden" name="hidden-configuration-list" value="<?= htmlentities($drumSetAsJson) ?>">
      <div class="container">
        <h3 class="form-title">Facturation</h3>
        <div class="row">
          <div class="four columns formInfo">
            <label for="nom">Nom</label> <input type="text" name="nom">
            <br/>
             *<?php
                if (isset($_SESSION['error']["nom"])) {
                    echo $_SESSION['error']["nom"];
                }
                ?>
          </div>
          <div class="four columns formInfo">
            <label for="prenom">Prénom</label> <input type="text" name="prenom">
            <br/>
            *<?php
                if (isset($_SESSION['error']["prenom"])) {
                    echo $_SESSION['error']["prenom"];
                }
                ?>
          </div>
          <div class="four columns formInfo">
            <label for="mail">Adresse e-mail</label> <input type="mail" name="mail">
            <br/>
            *<?php
                if (isset($_SESSION['error']["mail"])) {
                    echo $_SESSION['error']["mail"];
                }
                ?>
          </div>
        </div>
        <div class="row">
          <div class="four columns formInfo">
            <label for="adresse">Adresse</label> <input type="text" name="adress">
            <br/>
            *<?php
                if (isset($_SESSION['error']["adress"])) {
                    echo $_SESSION['error']["adress"];
                }
                ?>
          </div>
          <div class="four columns formInfo">
            <label for="telephone">Téléphone</label> <input type="text" name="telephone">
            <br/>
            *<?php
                if (isset($_SESSION['error']["telephone"])) {
                    echo $_SESSION['error']["telephone"];
                }
                ?>
          </div>
          <div class="four columns formInfo">
            <label for="date">Date</label> <input type="date" name="day">
            <br/>
            *<?php
                if (isset($_SESSION['error']["day"])) {
                    echo $_SESSION['error']["day"];
                }
                ?>
          </div>
        </div>

        <div class="row flex type">
          <input type="checkbox" id="visa" name="carte" value="visa">
          <img class="visa-logo" src="./assets/img/visa.svg"/>
          <input type="checkbox" id="master" name="carte" value="mastercard" class="mc-check">
          <img class="mc-logo" src="./assets/img/mastercard.svg"/>
        </div>
        <div class="row flex">
          <div>
            <label for="titulaire">Titulaire</label> <input type="text" name="titulaire">
          </div>
          <div class="card">
            <label for="numerocarte">Numéro de carte</label> <input type="text" name="numerocarte">
          </div>
          <div class="card">
            <label for="expiration">Expiration</label> <input type="text" name="expiration">
          </div>
          <div class="card">
            <label for="ccv">CCV</label> <input type="text" name="ccv">
          </div>
          </div>
            <div class="row flex">
              <div class="button-back">
                <a href="index.php"><img class="back-arrow" src="./assets/img/back.svg"/><p>Revenir en arrière</p>
                </a>
              </div>
              <div class="form-send">
                <input type="submit" value="Louez">
              </div>
            </div>
        </div>
    </form>
  </section>
</div>
</body>
</html>
