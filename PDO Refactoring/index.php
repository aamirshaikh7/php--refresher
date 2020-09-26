<?php

$builder = require 'bootstrap.php';

require 'Task.php';

$results = $builder->fetch('tasks', 'Task');

require 'index.view.php'; 