<?php

// fetches SQL queries

class QueryBuilder {
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function fetch($table, $class) {
        // prepare query (statement)

        $statement = $this->pdo->prepare("SELECT * FROM ${table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $class);

        // var_dump($results[0]->title);
    }
}