<?php

$app['database']->insert('users', [

    'name' => $_POST['posts']

]);

header('Location: /');