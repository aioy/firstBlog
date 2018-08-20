<?php

$router->get('', 'controllers/index.php');

$router->get('message', 'controllers/message.php');

$router->get('about', 'controllers/about.php');

$router->get('contact', 'controllers/contact.php');

$router->post('users', 'controllers/add-user.php');

$router->post('login', 'controllers/login.php');

$router->get('welcome', 'controllers/welcome.php');

