<?php 

$app['database']->delete($_POST['deletePost']);

unlink($_POST['image']);

header("location:/");

