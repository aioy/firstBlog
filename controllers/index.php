<?php

$users = $app['database']->selectAll('users');

session_start();

$loginError = $_SESSION['loginError'];

$error = $_SESSION['error'];

$username = $_SESSION['username'];

unset($_SESSION['username']);

unset($_SESSION['loginError']);

unset($_SESSION["error"]);

require 'views/index.view.php';