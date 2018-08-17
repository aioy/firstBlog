<?php

session_start();

$hash = password_hash($_POST['password'], PASSWORD_BCRYPT);

if(!$app['database']->nameTaken($_POST['username'])){

    $app['database']->insert('users', [

        'name' => $_POST['username'],
    
        'password' => $hash
    
    ]);
} else {
    $_SESSION['error'] = 'Username is taken';
}

header("location:/");