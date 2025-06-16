<?php

$env = require_once "env.php";

try {
    return $pdo = new PDO(
        "mysql:host=" . $env['DB_HOST'] . ";dbname=" . $env['DB_NAME'],
        $env['DB_USER'],
        $env['DB_PASSWORD'],
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);
} catch (PDOException $e){
    echo $e->getMessage();
}
