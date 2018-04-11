<?php
<<<<<<< HEAD
try {
    $conn = new PDO('mysql:dbname=dragndrum;host=127.0.0.1', 'root', 'kirby');
} catch (PDOException $exception) {
    die($exception -> getMessage());
=======


try {
    $bdd = new PDO('mysql:dbname=dragndrum;host=localhost', 'root', 'juilletjuillet');
} catch (PDOException $exception) {
    exit($exception->getMessage());
>>>>>>> a830c5114cb3d32d8d1d878230ff0db00a4d6241
}