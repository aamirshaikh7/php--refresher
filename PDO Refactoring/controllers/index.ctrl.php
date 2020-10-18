<?php

require 'Task.php';

$results = $builder->fetch('tasks', 'Task');

require 'view/index.view.php'; 