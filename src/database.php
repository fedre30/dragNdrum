<?php


try {
    $bdd = new PDO('mysql:dbname=dragndrum;host=localhost', 'root', 'kirby');
} catch (PDOException $exception) {
    exit($exception->getMessage());
}