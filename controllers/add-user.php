<?php

$hash = password_hash($_POST['password'], PASSWORD_BCRYPT);


$app['database']->insert('users', [

    'name' => $_POST['username'],

    'password' => $hash

]);

header('Location: /');