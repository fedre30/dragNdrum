
<?php
if (!isset($_POST['nom_element']) ) {
    header('Location: index.php?nopostdata');
    exit;
}
require_once "database.php";
$requete = "INSERT INTO 
`elements` 
(`nom_element`) 
VALUES 
(:nom_element)
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':nom_element', $_POST['nom_element']);
$stmt->execute();
header('Location: details.php?id='.$conn->lastInsertId());