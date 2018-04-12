<?php
require_once "src/database.php";

$sql ="SELECT * FROM commandes
ORDER BY id_commandes DESC
;
";

$stmt = $bdd->prepare($sql);
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="shortcut icon" href="3D/TemplateData/favicon.ico">
    <link rel="stylesheet" href="3D/TemplateData/style.css">
</head>
<body>
<div class="container">
<div class="confirm">
<?php if (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
<h1 class="confirm__title">
Merci Mr, Mme <?=$row["nom"]?> <?=$row["prenom"]?>  d'avoir choisi Drag n Drum pour votre location de batterie 
</h1>
</div>
<?php endif; ?>
</div>
    
</body>
</html>