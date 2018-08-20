<?php

session_start();

$user = $_SESSION['username'];

unset($_SESSION['username']);

require 'views/welcome.view.php';