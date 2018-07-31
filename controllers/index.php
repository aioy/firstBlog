<?php

$posts = $app['database']->selectAll('message');

require 'views/index.view.php';