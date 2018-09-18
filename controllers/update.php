<?php 

$app['database']->update($_POST['updateId'],$_POST['newDesc']);

header("location:/");

