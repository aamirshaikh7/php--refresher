<?php

require 'database/Connection.php';

require 'database/QueryBuilder.php';

$builder = new QueryBuilder(Connection::make());

$users = $builder->fetch('users');

require 'index.view.php';