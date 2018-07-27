<?php

function open_database_connection()
{
    $connection = new PDO("mysql:host=127.0.0.1;dbname=posts", 'root', '');

    return $connection;
}

