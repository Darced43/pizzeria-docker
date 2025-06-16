<?php
return [
    'DB_HOST' => getenv('MYSQL_HOST') ?: 'mysql',
    'DB_NAME' => getenv('MYSQL_DATABASE') ?: 'orders',
    'DB_USER' => getenv('MYSQL_USER') ?: 'orders',
    'DB_PASSWORD' => getenv('MYSQL_PASSWORD') ?: 'root',
];