<?php

class Task {
    protected $title;
    protected $is_complete = false;

    public function __construct ($title) {
        $this->title = $title;
    }

    public function is_complete () {
        return $this->is_complete;
    }

    public function title () {
        return $this->title;
    }

    public function done () {
        $this->is_complete = true;
    }
}

$tasks = [
    new Task('Create a project yeah'),
    new Task('Create a db'),
    new Task('Create a schema'),
    new Task('Create a server')
];

$tasks[0]->done();
$tasks[2]->done();

// echo '<pre>';
// var_dump($tasks);
// echo '</pre>';

require 'index.view.php';