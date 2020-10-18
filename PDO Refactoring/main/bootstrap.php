<?php

$config = require 'config.php';

require 'main/Router.php';

require 'main/database/Connection.php';

require 'main/database/QueryBuilder.php';

// initialize MySQL connection and pass the results to QueryBuilder

return new QueryBuilder(
    Connection::make($config['database'])
);