<?php

function connection() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=task-manager', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetch($pdo) {
    // prepare query (statement)

    $statement = $pdo->prepare('SELECT * FROM tasks');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

    // var_dump($results[0]->title);
}