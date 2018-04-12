
<?php

require_once "./database.php";

if (!isset($_POST["nom"]) || !isset($_POST["prenom"]) || !isset($_POST["mail"]) || !isset($_POST["adress"]) || !isset($_POST["telephone"]) || !isset($_POST["day"])) {

    header('Location: ../index.php?nopostdata');
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


header('Location: ../index.php');