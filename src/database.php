<?php


try {
    $bdd = new PDO('mysql:dbname=dragndrum;host=localhost', 'root', 'juilletjuillet');
} catch (PDOException $exception) {
    exit($exception->getMessage());
}