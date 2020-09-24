<?php

// prepare query (statement)

$statement = $pdo->prepare('SELECT * FROM tasks');

$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

// var_dump($results[0]->title);