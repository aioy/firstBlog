<?php

$router->get('', 'controllers/index.php');

$router->get('message', 'controllers/message.php');

$router->get('loginForm', 'controllers/loginForm.php');

$router->get('register', 'controllers/register.php');

$router->post('users', 'controllers/add-user.php');

$router->post('login', 'controllers/login.php');

$router->get('logout', 'controllers/logout.php');

$router->post('picture', 'controllers/picture.php');

