<?php

$config = [
    'dsn' => 'mysql:host=localhost;dbname=enterprise',
    'username' => 'root',
    'password' => '',
    'options' => []
];

try {
    $pdo = new PDO($config['dsn'], $config['username'], $config['password'], $config['options']);
} catch(PDOException $e) {
    die($e->getMessage());
}