<?php

require 'functions.php';

require 'Task.php';

$pdo = connection();

$results = fetch($pdo);

require 'index.view.php';