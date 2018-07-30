<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';

require 'core/Request.php';

require 'core/database/connection.php';

require 'core/database/queryBuilder.php';

$app['database'] = new QueryBuilder(

    Connection::make($app['config']['database'])
    
);