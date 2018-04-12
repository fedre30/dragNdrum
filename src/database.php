<?php


try {
    $bdd = new PDO('mysql:dbname=dragndrum;host=localhost:8889', 'root', 'root');
} catch (PDOException $exception) {
    exit($exception->getMessage());
}