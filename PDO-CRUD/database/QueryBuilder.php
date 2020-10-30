<?php

class QueryBuilder {
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function fetch($table) {
        $statement = $this->pdo->prepare("SELECT * FROM ${table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function post($table) {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(isset($_POST['name']) && isset($_POST['designation']) && isset($_POST['email'])) {
                $name = $_POST['name'];
                $designation = $_POST['designation'];
                $email = $_POST['email'];
    
                $sql = "INSERT INTO ${table}(name, designation, email) VALUES(:name, :designation, :email)";
    
                $statement = $this->pdo->prepare($sql);
    
                $isInserted = $statement->execute([':name' => $name, ':designation' => $designation, ':email' => $email]);
    
                if($isInserted) {
                    // header('Location: /');
                }
            }
        }  
    }
}