<?php

$app['database']->login($_POST['username'],$_POST['password']);

header("location:/");