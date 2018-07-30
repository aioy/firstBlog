<?php

$tasks = $app['database']->selectAll('message');

require 'views/index.view.php';