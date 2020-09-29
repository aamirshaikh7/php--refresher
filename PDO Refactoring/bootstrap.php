<?php

$config = require 'config.php';

require 'database/Connection.php';

require 'database/QueryBuilder.php';

// initialize MySQL connection and pass the results to QueryBuilder

return new QueryBuilder(
    Connection::make($config['database'])
);