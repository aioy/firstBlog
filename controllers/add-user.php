<?php

header('Content-type: text/javascript');

$hash = password_hash($_POST['password'], PASSWORD_BCRYPT);

if(!$app['database']->nameTaken($_POST['username'])){

    $app['database']->insert('users', [

        'name' => $_POST['username'],
    
        'password' => $hash
    
    ]);
};

header('Location: /');