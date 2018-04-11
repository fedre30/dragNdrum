<?php
try {
    $conn = new PDO('mysql:dbname=dragndrum;host=127.0.0.1', 'root', 'kirby');
} catch (PDOException $exception) {
    die($exception -> getMessage());
}