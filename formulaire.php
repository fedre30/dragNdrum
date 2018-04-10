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
</head>
<body class="backgroundForm">
  <section class="choose">
    <h2 class="choose-title">Vous avez choisi</h2>
    <div class="container">
      <div class="row">
        <div class="six columns">
          <h3>Composants</h3>
          <ul>
            <li>Composant 1</li>
            <li>Composant 2</li>
            <li>Composant 3</li>
          </ul>
        </div>
        <div class="six columns choose-price">
          <h3>99€</h3>
          <p>
            * prix incluant le montage et démontage de la batterie
            ainsi que la livraison
          </p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <form action="" method="post">
      <div class="container">
        <h3 class="form-title">Facturation</h2>
        <div class="row">
          <div class="four columns formInfo">
            <label for="nom">Nom</label> <input type="text" name="nom">
          </div>
          <div class="four columns formInfo">
            <label for="prenom">Prénom</label> <input type="text" name="prenom">
          </div>
          <div class="four columns formInfo">
            <label for="mail">Adresse e-mail</label> <input type="text" name="mail">
          </div>
        </div>
        <div class="row">
          <div class="four columns formInfo">
            <label for="adresse">Adresse</label> <input type="text" name="adresse">
          </div>
          <div class="four columns formInfo">
            <label for="telephone">Téléphone</label> <input type="text" name="telephone">
          </div>
          <div class="four columns formInfo">
            <label for="date">Date</label> <input type="date" name="date">
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
        <div class="row">
          <div class="form-send">
            <input type="submit" value="Louez">
          </div>
        </div>
      </div>

    </form>
  </section>


  <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
