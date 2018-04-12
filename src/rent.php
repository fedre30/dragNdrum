
<?php
session_start();
require_once "./database.php";

if (!isset($_POST["nom"]) || !isset($_POST["prenom"]) || !isset($_POST["mail"]) || !isset($_POST["adress"]) || !isset($_POST["telephone"]) || !isset($_POST["day"])
&& $_POST['nom'] === "" || $_POST['prenom'] === "" || $_POST['mail'] === "" || $_POST['adress'] === "" || $_POST['telephone'] === "" || $_POST['day'] === "" ) {
  if ($_POST['nom'] === "") {
        $_SESSION["error"]["nom"] = "veuillez indiquer votre nom";
    }
    if ($_POST['prenom'] === "") {
        $_SESSION["error"]["prenom"] = "veuillez indiquer votre prénom";
    }
     if ($_POST['mail'] === "") {
        $_SESSION["error"]["mail"] = "veuillez indiquer votre adresse mail";
    }
    if ($_POST['adress'] === "") {
        $_SESSION["error"]["adress"] = "veuillez indiquer votre adresse";
    }
     if ($_POST['telephone'] === "") {
        $_SESSION["error"]["telephone"] = "veuillez indiquer votre numéro de téléphone";
    }
    if ($_POST['day'] === "") {
        $_SESSION["error"]["day"] = "veuillez indiquer une date";
    }
    header('Location: ../formulaire.php?nopostdata');
    exit;
}

$requete = "INSERT INTO 
`commandes` 
(`nom`,`prenom`, `email`, `adress`, `phone`, `day`) 
VALUES 
(:nom , :prenom, :email, :adress, :phone, :day) 
;";


$stmt = $bdd->prepare($requete);
$stmt->bindValue(':nom', $_POST['nom']);
$stmt->bindValue(':prenom', $_POST['prenom']);
$stmt->bindValue(':email', $_POST['mail']);
$stmt->bindValue(':adress', $_POST['adress']);
$stmt->bindValue(':phone', $_POST['telephone']);
$stmt->bindValue(':day', $_POST['day']);
$stmt->execute();


header('Location: ../confirm.php');