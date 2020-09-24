<?php

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=task-manager', 'root', '');
} catch (PDOException $e) {
    die($e->getMessage());
}

// prepare query (statement)

$statement = $pdo->prepare('SELECT * FROM tasks');

$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_OBJ);

// var_dump($results[0]->title);

require 'index.view.php';