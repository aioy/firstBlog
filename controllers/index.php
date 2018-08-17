<?php

$users = $app['database']->selectAll('users');

session_start();

$error = $_SESSION['error'];

require 'views/index.view.php';